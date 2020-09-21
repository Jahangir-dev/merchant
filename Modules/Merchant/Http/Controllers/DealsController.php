<?php

namespace Modules\Merchant\Http\Controllers;

use App\Deal;
use App\Models\Product;
use App\User;
use Gabievi\Promocodes\Facades\Promocodes;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DealsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $user = User::where('id', Auth::id())->with('deals')->first();
        return view('merchant::deals.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $products = Product::where('user_id', Auth::id())->get();
        $user = User::where('id', Auth::id())->first();
        return view('merchant::deals.create', compact('user', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $start_date = (Carbon::parse($request['start_date']))->toDateString();
        $end_date = (Carbon::parse($request['end_date']))->toDateString();

        //
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
        return redirect()->route('merchant.deals');
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
        $user = User::where('id', Auth::id())->first();
        $deal = Deal::where('id', $id)->first();
        $promocodes = DB::table('promocodes')->where('code', $deal->promo)->first();

        return view('merchant::deals.edit', compact('user', 'deal', 'promocodes'));
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
        return redirect()->route('merchant.deals');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        notify()->success('Coupon Deleted Successfully!');
    }
}
