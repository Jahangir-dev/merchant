<?php 

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Auth;
use Config;
use Newsletter;


class MailChimpController extends Controller
{

public function store(Request $request)
{
    if ( ! Newsletter::isSubscribed($request->user_email) ) {
        Newsletter::subscribe($request->user_email);
    } else {
    	 notify()->error('Email is Already Subscribed');
    	 return redirect()->back()->with('error','Email is Already Subscribed');
    }
}
}

?>