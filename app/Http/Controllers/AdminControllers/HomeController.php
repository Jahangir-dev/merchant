<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\IPAddress;
use App\User;
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
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', Auth::id())->with('role')->get();
        return view('admin.home', compact('users'));
    }

    public function merchantsList() {
        $users = User::with('role')->get();
        return view('admin.merchants.index', compact('users'));
    }
    public function customersList() {
        $users = User::with('role')->get();
        return view('admin.customers.index', compact('users'));
    }

    public function delete($id) {
        $response = User::where('id', $id)->delete();
        return redirect()->back();
    }

}
