<?php

namespace App\Http\Controllers\Merchant\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createMerchent(Request $request)
    {
        User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'role_id' => $request['role_id'],
            'ip_address' => \Request::ip(),
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('merchant.login');
    }

    public function showRegisterForm() {
        return view('merchant.auth.register');
    }

    public function update(Request $request) {

        $ip_address = \Request::ip();
        if ($request->password !== '') {

        }
        else {
            $user = User::where('id', Auth::user()->id)->first();
            User::where('id', $user->id)->update([
               'first_name' => $request->first_name,
               'last_name' => $request->last_name,
               'email' => $request->email,
               'ip_address' => $ip_address,
            ]);
        }
        return redirect()->back();
    }
}
