<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\IPAddress;
use App\Role;
use App\User;
use App\Contracts\ProductContract;
use App\Contracts\OrderContract;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $productRepository;
    public function __construct(ProductContract $productRepository,OrderContract $orderRepository)
    {
        $this->productRepository = $productRepository;
        $this->orderRepository = $orderRepository;
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
        $products = $this->productRepository->listProducts();
        $orders = $this->orderRepository->listOrders();
        $customers = User::whereHas('role', function($q){
             $q->where('name', 'customer');
        })->get();
        $merchant = User::whereHas('role', function($q){
             $q->where('name', 'merchant');
        })->get();

        return view('admin.home', compact('users','products','customers','merchant','orders'));
    }
    public function setTarget(Request $request){
        
        Session::put('target',$request->target);
        return 1;
    }
    public function merchantsList() {
        $users = User::with('role')->get();
        $ips = IPAddress::all();
        return view('admin.merchants.index', compact('users', 'ips'));
    }
    public function customersList() {
        $users = User::with('role')->get();
        $ips = IPAddress::all();
        return view('admin.customers.index', compact('users', 'ips'));
    }

    public function delete($id) {
        $response = User::where('id', $id)->delete();
        return redirect()->back();
    }

    public function edit($id) {
        $user = User::where('id', $id)->with('role')->first();
        $roles = Role::all();
        return view('admin.forms.edit', compact('user', 'roles'));
    }

    public function updateUser(Request $request, $id) {
        if ($request->password !== null) {
            if ($request['password'] == $request['confirm-password']) {
                User::where('id', $id)->update([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'ip_address' => \Request::ip(),
                    'password' => Hash::make($request['password']),
                    'role_id' => $request->role,
                ]);
            }
            else {
                notify()->error('Password not matched');
                return redirect()->back()->with('error','password not matched');
            }
        }
        else {
            User::where('id', $id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'ip_address' => \Request::ip(),
                'role_id' => $request->role,
            ]);
        }
        notify()->success('User Updated Successfully');
        return redirect()->back()->with('success','User Updated Successfully');
    }

    public function updateProfile(Request $request, $id)
    {

                if ($request->password !== null) {
            if ($request['password'] == $request['confirm-password']) {
                User::where('id', $id)->update([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'ip_address' => \Request::ip(),
                    'password' => Hash::make($request['password']),
                ]);
            }
            else {
                notify()->error('Password not matched');
                return redirect()->back()->with('error','password not matched');
            }
        }
        else {
            User::where('id', $id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'ip_address' => \Request::ip(), 
            ]);
        }
        notify()->success('Profile Updated Successfully');
        return redirect()->route('admin.home')->with('success','Profile Updated Successfully');
    }
    public function myProfile()
    {
        $id = Auth::user()->id;
        $user = User::where('id', $id)->with('role')->first();
        return view('admin.profile.edit', compact('user'));
    }

    public function userBlock($id) {
        User::where('id', $id)->update(['status' => '1']);
        return redirect()->back();
    }
    public function userUnBlock($id) {
        User::where('id', $id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function userIpBlock($id) {
        $user = User::where('id', $id)->first();
        IPAddress::create([
            'ip_address' => $user->ip_address,
        ]);
        notify()->success('Ip Blocked Successfully');
        return redirect()->back();
    }

    public function userIpUnBlock ($id) {
        $user = User::where('id', $id)->first();
        IPAddress::where('ip_address', $user->ip_address)->delete();
        notify()->success('Ip Unblocked Successfully');
        return redirect()->back();
    }
}
