<?php

namespace Modules\Merchant\Http\Controllers;

use App\Deal;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Profile;
use App\User;
use Gabievi\Promocodes\Facades\Promocodes;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Cart;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $user = User::where('id', Auth::id())->with('products')->first();
        return view('merchant::product.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $user = User::where('id', Auth::id())->first();
        return view('merchant::product.create', compact('user', 'categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $product = Product::create([
            'brand_id' => $request['brand_id'],
            'sku' => $request['sku'],
            'name' => $request['name'],
            'price' => $request['price'],
            'special_price' => $request['special_price'],
            'quantity' => $request['quantity'],
            'weight' => $request['weight'],
            'user_id' => Auth::id()
        ]);
        $product->categories()->attach($request['category']);


        notify()->success('Product Created Successfully!');
        return redirect()->route('merchant.products');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('merchant::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $user = User::where('id', Auth::id())->first();
        $product = Product::where('id', $id)->where('user_id', $user->id)->with('categories')->with('images')->first();

        return view('merchant::product.edit', compact('user', 'product', 'categories', 'brands'));
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
        $start_date = (Carbon::parse($request['start_date']))->toDateString();
        $end_date = (Carbon::parse($request['end_date']))->toDateString();

        $deal =Deal::where('id', $id)->first();
        Deal::where('id', $id)->update([
            'title' => $request['title'],
            'start_date' => $start_date,
            'end_date' => $end_date,
            'status' => $request['status'],
            'user_id' => Auth::id(),
        ]);
        $promocodes = DB::table('promocodes')->where('code', $deal->promo)->update([
            'reward' => $request['reward'],
            'expires_at' => $end_date,
            'data' => $request['description'],
        ]);
        notify()->success('Coupon Updated Successfully!');
        return redirect()->route('merchant.product');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        Product::destroy($id);
        notify()->success('Coupon Deleted Successfully!');
    }

    public function updateImage(Request $request, $id) {
        if ($request->file) {
            $imageName = time().Auth::user()->id.'.'.$request->file->extension();
            $request->file->move(public_path('/storage/products/'), $imageName);
            $imageName = 'products/'.$imageName;
            DB::table('product_images')->insert([
                'product_id' => $id,
                'full' => $imageName,
            ]);
        }
        notify()->success('Image Updated Successfully!');
        return redirect()->back();
    }

    public function deleteImage($id) {

        $file = DB::table('product_images')->where('id', $id)->first();
        File::delete($file->full);
        DB::table('product_images')->delete($id);
        notify()->success('Image Deleted Successfully!');
        return redirect()->back();
    }


}
