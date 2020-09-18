<?php

namespace Modules\Customer\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $user = User::where('id',Auth::user()->id)->with('profile')->first();
        return view('customer::profile.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('customer::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('customer::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('customer::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {
        //
        if ($request->file) {
            $imageName = time().Auth::user()->id.'.'.$request->file->extension();
            $request->file->move(public_path('images/user/profile'), $imageName);
            $imageName = 'images/user/profile/'.$imageName;
            Profile::where('user_id', Auth::user()->id)->update([
                'image' => $imageName,
            ]);
        }

        User::where('id', Auth::user()->id)->update([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'ip_address' => \Request::ip(),
            'role_id' => '3'
        ]);

        Profile::where('user_id', Auth::user()->id)->update([
            'company_name' => $request['company_name'],
            'slogan' => $request['slogan'],
            'phone_number' => $request['phone_number'],
            'mobile' => $request['mobile'],
            'website' => $request['website'],
        ]);
        notify()->success('Profile Updated Successfully!');
        return redirect()->route('customer.profile');

    }

    public function updateAbout(Request $request) {
        Profile::where('user_id', Auth::user()->id)->update([
            'description' => $request['description'],
            'languages' => $request['languages'],
        ]);
        notify()->success('Profile About Updated Successfully!');
        return redirect()->route('customer.profile');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
