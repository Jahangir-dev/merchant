<?php

namespace Modules\Merchant\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function getOrders()
    {
        $ordersRaw = auth()->user()->products;	
        //dd($orders);
        $orders = [];
        if(count($ordersRaw) ==  0)
        {
        	$orders []= "";
        } else {
        	
        	foreach ($ordersRaw as $key => $order) {
        		
        		if(count($order['orders']) > 0) {
        		
	        		foreach ($order['orders'] as $key => $ord) {
	        			# code...
	        			if(count($ord['orderItems']) > 0)
	        			{	
	        				$ord['orderItems'][0]->product_name = $order['name']; 
	        				$ord['orderItems'][0]->product_slug = $order['slug']; 
	        				$ord['orderItems'][0]->product_sku = $order['sku']; 
	        				$orders [] = $ord['orderItems']->first();
	        			}
	        		}
        		}
        	}
        }
        
        return view('merchant::account.orders', compact('orders'));
    }
}
