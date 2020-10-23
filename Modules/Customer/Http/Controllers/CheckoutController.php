<?php

namespace Modules\Customer\Http\Controllers;

use App\Deal;
use App\Coupon;
use App\PurchaseCoupons;
use App\Models\Product;
use Cart;
use App\Models\Order;
use Gabievi\Promocodes\Promocodes;
use Illuminate\Http\Request;
use App\Services\PayPalService;
use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;

class CheckoutController extends Controller
{
    protected $payPal;

    protected $orderRepository;

    public function __construct(OrderContract $orderRepository, PayPalService $payPal)
    {
        $this->payPal = $payPal;
        $this->orderRepository = $orderRepository;
    }

    public function placeOrder(Request $request)
    {

        $discountable_products = [];

        $coupon = Coupon::where('code',$request['code'])->get();
        $deal_details = Deal::where('promo', $request['code'])->get();
        if (count($coupon) > 0) {
            $coupon = $coupon->first();

            $today_time = strtotime(date("Y-m-d"));
            $expire_time = strtotime($coupon->expiry);

            if ($expire_time > $today_time) {
                foreach ($discountable_products as $product) {
                    if ($product->id == $coupon->category_id) {
                        $json['type'] = 'success';
                        $json['discountable_products'] = $discountable_products;
                        $json['discount'] = $coupon->discount;
                        $json['items'] = $items;
                        $json['message'] = 'Promocode Applied';
                    }
                }
                foreach ($discountable_products as $product) {
//                quantity in cart
                        $quantity = ($items[$product->id]['quantity']);
//                actual price
                        $price = ((float)$product->price) * $quantity;
//                percentage to be applied
                        $percentage = (float)$coupon->discount;
//                discount
                        $discount = ((float)$price/100 * $percentage);
                        $discounted_price = $price - $discount;

                        \Cart::update($product->id, array(
                            'price' => $discounted_price,
                        ));

                    }
            }
        }
        else if (count($deal_details) > 0) {
            $items = \Cart::getContent();
        $discountable_products = [];
        $total_product = 0;
        $discountable_products_quantity = 0;
        foreach ($items->keys() as $id) {
            $product = Product::where('id', $id)->with('codes')->first();
            foreach ($product->codes as $code) {
                if ($code->promo === $request['code']) {
                    array_push($discountable_products, $product);
                }
            }
            $quantity = 0;
            $quantity = (int)($items[$id]['quantity']);
            $total_product += $quantity;
        }
        $deal_details = Deal::where('promo', $request['code'])->first();
        $promocodes_details = DB::table('promocodes')->where('code', $request['code'])->first();
        $promo_validity = DB::table('promocode_user')->where('promocode_id', $promocodes_details->id)->get();

        foreach($discountable_products as $product) {
            $quantity = $items[$product->id]['quantity'];
            $discountable_products_quantity += $quantity;
        }

        if (count($discountable_products) > 0) {
            if (count($promo_validity) < $promocodes_details->quantity) {
                if ($discountable_products_quantity < json_decode($deal_details->min_product, true) ) {
                    $json['type'] = 'error';
                    $json['message'] = 'Product limit less than minimum product';
                    return $json;
                }
                elseif ($discountable_products_quantity > json_decode($deal_details->max_product)) {
                    $json['type'] = 'error';
                    $json['message'] = 'Product limit greater than maximum product';
                    return $json;
                }
                else {
                    foreach ($discountable_products as $product) {
//                quantity in cart
                        $quantity = ($items[$product->id]['quantity']);
//                actual price
                        $price = ((float)$product->price) * $quantity;
//                percentage to be applied
                        $percentage = (float)$promocodes_details->reward;
//                discount
                        $discount = ((float)$price/100 * $percentage);
                        $discounted_price = $price - $discount;

                        \Cart::update($product->id, array(
                            'price' => $discounted_price,
                        ));

                    }
                    $json['type'] = 'success';
                    $json['discountable_products'] = $discountable_products;
                    $json['discount'] = $promocodes_details->reward;
                    $json['items'] = $items;
                    $json['message'] = 'Promocode Applied';
                }
            }

        }
        else {
            $json['message'] = 'Promocode is not valid for these products';
            $json['type'] = 'error';
        }
        }




        // Before storing the order we should implement the
        // request validation which I leave it to you
        $order = $this->orderRepository->storeOrderDetails($request->all());
        $order->update([
            'grand_total' => (string)$request['grand_total'],
            'type' => 'order',
            'code' => $request['code']
        ]);

        // You can add more control here to handle if the order is not stored properly
        if ($order) {
            \Cart::clear();
            $this->payPal->processPayment($order);
        }

        return redirect()->back()->with('message','Order not placed');
    }

    public function complete(Request $request)
    {
        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');

        $status = $this->payPal->completePayment($paymentId, $payerId);

        $order = Order::where('order_number', $status['invoiceId'])->first();

        foreach ($order->items as $item) {
            $product = Product::where('id', $item->product_id)->first();
            $product->quantity = $product->quantity - $item->quantity;
            $product->save();
        }

        if ($order) {
            if ($order->code) {
                $coupon = Coupon::where('code', $order->code)->first();
                $promocode = Promocodes::where('code', $order->code)->first();
                if ($coupon) {
                    DB::table('purchase_coupons')->where('coupon', $coupon->uni_id)->update([
                        'status' => 1
                    ]);
                }
                else {
                    DB::table('promocode_user')->insert([
                        'user_id' => Auth::id(),
                        'promocode_id' => $promocode->id,
                        'used_at' => date("l jS F Y h:i:s A")
                    ]);
                }
            }
        }

        if($order['type'] != 'coupon' || $order['type'] != 'order')
        {
            $coupon = Coupon::where('uni_id', $order['type'])->first();
            if ($coupon) {
                $order->type = 'coupon';
                $code = $coupon['uni_id'];
                PurchaseCoupons::create([
                    'user_id' => Auth::user()->id,
                    'coupon' => $code
                ]);

            }
        } else {

            $code = '';
        }

        $order->status = 'processing';
        $order->payment_status = 1;
        $order->payment_method = 'PayPal -'.$status['salesId'];
        $order->save();

        Cart::clear();
        return view('customer::success', compact('order','code'));
    }

     public function placeOrderCoupon(Request $request)
    {
         $order = $this->orderRepository->storeOrderDetails($request->all());

          $order->update([
            'grand_total' => $request['grand_total'],
            'type' =>  $request['code']
        ]);
        // You can add more control here to handle if the order is not stored properly
        if ($order) {
            $this->payPal->processPayment($order);
        }

        return redirect()->back()->with('message','Order not placed');
    }
}
