<?php

namespace Modules\Web\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('web::index');
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


    public function searchResults(Request $request) {

        $sale_products = DB::table('promocodes_products')->pluck('product_id')->toArray();

        $latitude = !empty($_GET['latitude']) ? $_GET['latitude'] : '';
        $longitude = !empty($_GET['longitude']) ? $_GET['longitude'] : '';

        $keyword = !empty($_GET['search']) ? $_GET['search'] : '';
        $price = !empty($_GET['price']) ? $_GET['price'] : '';
        $merchant = !empty($_GET['merchant']) ? $_GET['merchant'] : '';
        $categories = !empty($_GET['categories']) ? $_GET['categories'] : '';

        $words = explode(' - ', $price);
        $ending_price = array_pop($words);
        $starting_price = implode(' ', $words);

        $starting_price = str_replace('$', '', $starting_price); // Replaces all spaces with hyphens.
        $ending_price = str_replace('$', '', $ending_price); // Replaces all spaces with hyphens.

//        dd($ending_price, $starting_price, $merchants);

        $products = Product::
            with('categories')
            ->with('user')
            ->with('brand')
            ->with('images');
        if ($latitude !== '') {
            $products = $products
                ->where('latitude', 'LIKE', "%{$latitude}%");
        }
        if ($longitude !== '') {
            $products = $products
                ->where('longitude', 'LIKE', "%{$longitude}%");
        }

        if ($keyword !== '') {
            $products = $products
                ->where('name', 'LIKE', "%{$keyword}%");
        }
        if ($price !== '') {
            $products = $products
                ->where('price', '<=', $ending_price)
                ->where('price', '>=', $starting_price);
        }
        if ($merchant !== '' && $merchant !== 'null') {
            $products = $products->where('user_id', $merchant);
        }
        if ($categories !== '') {
            foreach($categories as $key => $value) {

                $products->whereHas('categories', function($q) use ($value) {
                    $q->where('category_id', $value);
                })->get();

            }
        }

        $categories = Category::all();
/*        $products = Product::query()
            ->where('name', 'LIKE', "%{$keyword}%")
            ->with('categories')
            ->with('user')
            ->with('brand')
            ->with('images')
            ->paginate(6);*/
        /*if ($merchant !== 'null') {
            $products = $products->where('user_id', $merchant);
        }*/
        $products = $products->paginate(6);
        return view('web::search.index', compact('products', 'categories', 'keyword', 'sale_products'));
    }
}
