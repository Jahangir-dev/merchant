<?php

namespace App\Http\Controllers\Admin;

use App\Deal;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Promocode;
use App\User;
use Gabievi\Promocodes\Facades\Promocodes;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $deals = Deal::with('user')->with('products')->get();
        return view('admin.deals.index', compact('deals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $user = User::where('id', Auth::id())->first();

        return view('admin.deals.create', compact('user', 'products'));
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
        $words = explode(' - ', $request['datatime']);
        $end_date = array_pop($words);
        $start_date = implode(' ', $words);
        $start_date = (Carbon::parse($start_date))->toDateString();
        $end_date = (Carbon::parse($end_date))->toDateString();

        $promos = Promocodes::createDisposable(
            $amount = $request['amount'],
            $reward = $request['reward'],
            $data = $request['description'],
            $expires_in = $end_date,
            $quantity = $request['quantity']
        );
        foreach ($promos as $promo) {
            Deal::create([
                'title' => $request['title'],
                'start_date' => $start_date,
                'end_date' => $end_date,
                'status' => $request['status'],
                'max_product' => $request['max_product'],
                'min_product' => $request['min_product'],
                'max_buyers' => 0,
                'min_buyers' => 0,
                'user_id' => Auth::id(),
                'promo' => $promo['code'],
            ]);
            foreach ($request['products'] as $product) {
                DB::table('promocodes_products')->insert([
                    'product_id' => $product,
                    'promocode' => $promo['code'],
                ]);
            }

        }
        notify()->success('Coupon Generated Successfully!');
        return redirect()->route('admin.deal');

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
