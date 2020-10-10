<?php

namespace Modules\Customer\Http\Controllers;

use App\Deal;
use App\Models\Product;
use Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Services\PayPalService;
use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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


        // Before storing the order we should implement the
        // request validation which I leave it to you
        $order = $this->orderRepository->storeOrderDetails($request->all());
        $order->update([
            'grand_total' => $request['grand_total']
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
        $order->status = 'processing';
        $order->payment_status = 1;
        $order->payment_method = 'PayPal -'.$status['salesId'];
        $order->save();

        Cart::clear();
        return view('customer::success', compact('order'));
    }
}
