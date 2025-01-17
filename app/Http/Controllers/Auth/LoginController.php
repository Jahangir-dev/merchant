<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo() {
        $user = Auth::user()->role_id;
        if ($user == '1') {
            return '/admin';
        }
        else if ($user == '2') {
            return '/merchant/profile';
        }
        else {
            return '/customer/profile';

        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest')->except('logout');
    }

    public function showMerchantLoginForm() {
        return view('merchant.auth.login');
    }
    public function showLoginForm() {
        return view('customer.auth.login');
    }
    public function forgetPassword()
    {
        return view('admin.auth.email');
    }

}
