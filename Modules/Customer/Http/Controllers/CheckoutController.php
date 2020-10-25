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

        // Before storing the order we should implement the
        // request validation which I leave it to you
        $order = $this->orderRepository->storeOrderDetails($request->all());
        $order->update([
            'grand_total' => $request['grand_total'],
            'type' => 'order',
            'code' => $request['code']
        ]);
        $order = Order::where('id',$order['id'])->first();
        $price = $order['grand_total'] / $order['item_count'];
        $order->price = $price;
        
        // You can add more control here to handle if the order is not stored properly
        if ($order) {

            \Cart::clear();
            if ($request->input('action') == 'paypal') {
                $this->payPal->processPayment($order);
            }
            else {
                $order->update([
                    'payment_method' => 'cash',
                ]);
                Cart::clear();
                $code = '';
                return view('customer::success', compact('order','code'));
            }
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
                } else {
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
                $code = $coupon['code'];
                PurchaseCoupons::create([
                    'user_id' => Auth::user()->id,
                    'coupon' => $coupon['uni_id']
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
         $order = Order::where('id',$order['id'])->first();
        // You can add more control here to handle if the order is not stored properly
        if ($order) {
            $this->payPal->processPayment($order);
        }

        return redirect()->back()->with('message','Order not placed');
    }
}
