<?php

namespace Modules\Customer\Http\Controllers;

use App\Deal;
use App\Models\Order;
use App\Models\Product;
use App\User;
use Cart;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $user = User::where('id',Auth::user()->id)->with('profile')->first();
        $items = \Cart::getContent();

        return view('customer::checkout.index', compact('user', 'items'));
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

    public function getCart()
    {
        $names = Array();
        $items = \Cart::getContent();
        foreach ($items as $item) {
            array_push($names, $item->name);
        }
        $products = Product::whereIn('name', $names)->get();
        dd($items, $names, $products);
        return view('web::shopping.index');
    }

    public function addToCart(Request $request) {
        $data = Array();
        $pro = $request['product'];
        $qty = '1';
        /*$product = $this->productRepository->findProductById($request->input('productId'));
        $options = $request->except('_token', 'productId', 'price', 'qty');*/

        $result = \Cart::add($pro['id'], $pro['name'], $pro['price'], $qty );
        $items = \Cart::getContent();

        $data['items'] = $items;
        $data['total'] = count($items);
        $data['type'] = 'success';
        return $data;
    }

    public function removeItem($id)
    {
        Cart::remove($id);

        if (Cart::isEmpty()) {
            return redirect('/');
        }
        return redirect()->back()->with('message', 'Item removed from cart successfully.');
    }

    public function clearCart()
    {
        Cart::clear();

        return redirect('/');
    }

    public function getCartItems() {
        $items = \Cart::getContent();


        $json = Array();
        $json['total'] = count($items);
        $json['items'] = $items;
        $json['type'] = 'success';
        return $json;
    }

    public function getCartItemDiscounted() {
        $items = \Cart::getContent();

        foreach ($items->keys() as $id) {
            $product = Product::where('id', $id)->first();
            if ($product->sale_price !== '') {
                $price = $product->sale_price;
            }
            else {
                $price = $product->price;
            }
            \Cart::update($product->id, array(
                'price' => $price,
            ));
        }

        $json = Array();
        $json['total'] = count($items);
        $json['items'] = $items;
        $json['type'] = 'success';
        return $json;
    }

    public function decrementCartItem(Request $request) {
        if($request['quantity'] - 1 == 0) {
            Cart::remove($request['item_id']);
        }
        else {
            $result = \Cart::update($request['item_id'], array(
                'quantity' => - 1
            ));
        }

        $json = Array();
        $json['type'] = 'success';
        return $json;
    }

    public function incrementCartItem(Request $request) {
        $json = Array();
        $product = Product::where('id', $request['item_id'])->first();
        if ($product !== null) {
            if ($product->quantity > $request['quantity']) {
                $result = \Cart::update($request['item_id'], array(
                    'quantity' => 1
                ));
                $json['type'] = 'success';
                $json['message'] = 'Product incremented successfully';
            }
        }
        $json['data'] = $product;

        return $json;
    }

    public function cartItemDelete(Request $request) {
        $json = Array();
        \Cart::remove($request['item_id']);

        $json['type'] = 'success';
        $json['message'] = 'Product deleted successfully';

        return $json;
    }

    public function checkout() {
        if (Auth::user()) {
            $items = \Cart::getContent();
            return view('web::checkout.index', compact('items'));
        }
        else {
            notify()->warning('You are not logged');
            return  redirect()->back();
        }
    }

    public function checkPromo(Request $request) {
        $json = Array();
        $items = \Cart::getContent();
        $discountable_products = [];
        $total_product = 0;
        foreach ($items->keys() as $id) {
            $product = Product::where('id', $id)->with('codes')->first();
            foreach ($product->codes as $code) {
                if ($code->promo === $request['code']) {
                    array_push($discountable_products, $product);
                }
            }
            $quantity = 0;
            $quantity = (int)($items[$id]['quantity']);
            $total_product += $quantity;
        }
        $deal_details = Deal::where('promo', $request['code'])->first();
        $promocodes_details = DB::table('promocodes')->where('code', $request['code'])->first();
        $promo_validity = DB::table('promocode_user')->get();

        if (count($promo_validity) < $promo_validity->quantity) {
            if ($total_product < (int)$deal_details->min_product ) {
                $json['type'] = 'error';
                $json['message'] = 'Product limit less than minimum product';
                return $json;
            }
            elseif ($total_product > (int)$deal_details->max_product) {
                $json['type'] = 'error';
                $json['message'] = 'Product limit greater than maximum product';
                return $json;
            }
            else {
                foreach ($discountable_products as $product) {
//                quantity in cart
                    $quantity = ($items[$product->id]['quantity']);
//                actual price
                    $price = ((float)$product->price) * $quantity;
//                percentage to be applied
                    $percentage = (float)$promocodes_details->reward;
//                discount
                    $discount = ((float)$price/100 * $percentage);
                    $discounted_price = $price - $discount;

                    \Cart::update($product->id, array(
                        'price' => $discounted_price,
                    ));
                    $json['type'] = 'success';
                    $json['message'] = 'Promocode Applied';
                    return $json;
                }
            }
        }
        else {
            $json['type'] = 'error';
            $json['message'] = 'Promocode Not Expired';
            return $json;
        }
        return $json;
    }
    public function proceedToOrder() {
        $user = User::where('id', Auth::id())->first();
        return view('customer::checkout.final', compact('user'));
    }

    public function saveOrderDetails(Request $request) {
        $request['order_number'] = '#' . str_pad(mt_rand(999, 99999999) , 8, "0", STR_PAD_LEFT);
        $request['user_id'] = Auth::id();
        $request['grand_total'] =  \Cart::getSubTotal() ;
        $request['item_count'] =  \Cart::getTotalQuantity() ;

        $order = Order::create($request->all());
        $items = \Cart::getContent();
        foreach ($items->keys() as $item) {
            DB::table('order_items')->insert([
                'order_id' => $order->id,
                'product_id' => $item,
                'quantity' => $items[$item]['quantity'],
                'price' => $items[$item]['price'],
            ]);
        }
        return redirect()->route('home');
    }
}
