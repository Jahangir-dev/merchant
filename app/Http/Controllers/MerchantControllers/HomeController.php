<?php
namespace App\Http\Controllers\Merchant;
use App\Http\Controllers\Controller;
use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', Auth::id())->with('role')->first();
        return view('merchant.home', compact('user'));
    }


}
