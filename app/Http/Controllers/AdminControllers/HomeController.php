<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\IPAddress;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
                    'password' => Hash::make($request['password']),
                    'role_id' => $request->role,
                ]);
            }
            else {
                return redirect()->back()->with('error','password not matched');
            }
        }
        else {
            User::where('id', $id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'role_id' => $request->role,
            ]);
        }
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
                    'password' => Hash::make($request['password']),
                ]);
            }
            else {
                return redirect()->back()->with('error','password not matched');
            }
        }
        else {
            User::where('id', $id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
            ]);
        }
        return redirect()->route('admin.home')->with('success','Profile Updated Successfully');
    }
    public function myProfile()
    {
        $id = Auth::user()->id;
        $user = User::where('id', $id)->with('role')->first();
        return view('admin.profile.edit', compact('user'));
    }
}
