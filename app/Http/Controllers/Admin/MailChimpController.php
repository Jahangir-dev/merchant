<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Auth;
use Config;
use Illuminate\Routing\Controller;
use Newsletter;


class MailChimpController extends Controller
{

    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->user_email) ) {
            Newsletter::subscribe($request->user_email);
            notify()->success('Subscribed Successfully');
            return redirect()->back()->with('success','Email Subscribed');
        } else {
             notify()->error('Email is Already Subscribed');
             return redirect()->back()->with('error','Email is Already Subscribed');
        }
    }

}

?>
