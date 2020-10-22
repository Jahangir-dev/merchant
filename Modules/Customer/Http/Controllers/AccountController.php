<?php

namespace Modules\Customer\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\PurchaseCoupons;
use App\Coupon;

class AccountController extends Controller
{
    public function getOrders()
    {

        $allOrders = auth()->user()->orders;	
        $orders = [];
        if(count($allOrders) ==  0)
        {
        	$orders [] = '';
        } else {

        	foreach ($allOrders as $key => $order) {
        		# code...
        		if($order['type'] == 'order')
        		{
        			$orders [] = $order;
        		}
        	}
        }
        
        return view('customer::account.orders', compact('orders'));
    }

    public function getCoupons ()
    {
    	$coups = PurchaseCoupons::where('user_id',Auth::user()->id)->get();
    	$coupons = [];
    	foreach ($coups as $key => $coup) {
    		$data = Coupon::where('uni_id',$coup['coupon'])->get();
    		$coupons [] = $data;
    	}
        return view('customer::account.coupons', compact('coupons'));
    }
}
