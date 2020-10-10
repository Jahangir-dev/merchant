<?php

namespace Modules\Customer\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function getOrders()
    {

        $orders = auth()->user()->orders;	
        
        if(count($orders) ==  0)
        {
        	$orders = [];
        } 
        return view('customer::account.orders', compact('orders'));
    }
}
