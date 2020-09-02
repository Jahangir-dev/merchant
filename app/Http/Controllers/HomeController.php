<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function merchant()
    {
        $user = User::where('id', Auth::id())->with('role')->first();
        return view('merchant.home', compact('user'));
    }

    public function cutomer()
    {
        $user = User::where('id', Auth::id())->with('role')->first();
        return view('customer.home', compact('user'));
    }

    public function logout() {
        Auth::logout();
        redirect()->route('home');
    }
}
