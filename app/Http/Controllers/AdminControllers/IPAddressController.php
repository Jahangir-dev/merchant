<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\IPAddress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IPAddressController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ips = IPAddress::all();
        return view('admin.ip.index', compact('ips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $ips = IPAddress::all();
        return view('admin.ip.index', compact('ips'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IPAddress  $iPAddress
     * @return \Illuminate\Http\Response
     */
    public function show(IPAddress $iPAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IPAddress  $iPAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(IPAddress $iPAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IPAddress  $iPAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IPAddress $iPAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IPAddress  $iPAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ips = IPAddress::where('id', $id)->delete();
        return redirect()->back();
    }

}
