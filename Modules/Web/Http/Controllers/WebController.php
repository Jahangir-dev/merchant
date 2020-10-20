<?php

namespace Modules\Web\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\User;
use App\Coupon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $sale_products = DB::table('promocodes_products')->pluck('product_id')->toArray();
        $session_id = session()->getId();
        $merchants = User::where('role_id', '2')->with('products')->get();
        $categories = Category::where('menu', '1')->get();
        $brands = Brand::with('user')->get();
        $coupons = Coupon::orderBy('created_at','desc')->get();
        $products = Product::with('categories')->with('brand')->with('codes')->with('user')->get();
        return view('web::index', compact('products', 'categories','sale_products', 'brands', 'merchants', 'session_id','coupons'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('web::create');
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
        return view('web::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('web::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
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

    public function post_show($uniID, $slug)
    {
        $post = Coupon::where('uni_id',$uniID)->where('slug',$slug)->first();
        $user_name = User::where('id',$post['user_id'])->get();

        return view('post', compact('post','user_name'));
    } 
}
