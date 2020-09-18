<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Promocode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DealsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.deals.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.deals.create');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function show(deals $deals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function edit(deals $deals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, deals $deals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\deals  $deals
     * @return \Illuminate\Http\Response
     */
    public function destroy(deals $deals)
    {
        //
    }
}
