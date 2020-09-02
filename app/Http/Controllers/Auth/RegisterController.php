<?php

namespace App\Http\Controllers\Auth;

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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo() {
        $user = Auth::user()->role_id;
        if ($user == '2') {
            return '/merchant';
        }
        else {
            return '/customer';

        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'ip_address' => \Request::ip(),
            'role_id' => $data['role_id']
        ]);
    }


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

    public function showMerchantRegisterForm() {
        return view('merchant.auth.register');
    }
    public function showCustomerRegisterForm() {
        return view('customer.auth.register');
    }

    public function update(Request $request) {

        $ip_address = \Request::ip();
        $user = User::where('id', Auth::user()->id)->first();

        if ($request->password !== null) {
            if ($request['password'] == $request['confirm-password']) {
                User::where('id', $user->id)->update([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'password' => Hash::make($request['password']),
                    'role_id' => $request->role,
                ]);
            }
            else {
                return redirect()->back()->with('error','password not matched');
            }
        }
        else {
            User::where('id', $user->id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'ip_address' => $ip_address,
            ]);
        }
        return redirect()->back()->with('success','User Updated Successfully');
    }
    protected function createCustomer(Request $request)
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

}
