<?php

namespace Modules\Customer\Http\Controllers;

use App\Coupon;
use App\PurchaseCoupons;
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

        $result = \Cart::add($pro['id'], $pro['name'], $pro['price'] * $qty, $qty );
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
        $json['message'] = 'Product decremented successfully';
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
        $items = \Cart::getContent();
        if (count($items->keys()) > 0) {
            if (Auth::user()) {
                return view('web::checkout.index', compact('items'));
            }
            else {
                notify()->warning('You are not logged');
                return  redirect()->back();
            }
        }
        else {
            notify()->warning('Add items to cart');
            return  redirect()->back();
        }
    }
    public function checkoutCopoun(Request $request) {
            dd($request);
    }
    public function checkPromo(Request $request) {
        $json = Array();
        $items = \Cart::getContent();
        $discountable_products = [];
        $total_product = 0;
        $discountable_products_quantity = 0;
        $coupon = Coupon::where('code',$request['code'])->get();
        
        foreach ($items->keys() as $id) {
            $product = Product::where('id', $id)->with('codes')->first();
            if (count($coupon) > 0) {
                array_push($discountable_products, $product);
            }
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
        if (count($coupon) > 0) {
            $coupon = $coupon->first();
            $status = PurchaseCoupons::where('coupon',$coupon['uni_id'])->where('user_id',  Auth::user()->id)->get()->pluck('status'); 
            
           if($status[0] == null || $status[0] == 0)
           {
            $today_time = strtotime(date("Y-m-d"));
            $expire_time = strtotime($coupon->expiry);

            if ($expire_time > $today_time) {
                foreach ($discountable_products as $product) {
                    if ($product->id == $coupon->category_id) {
                        $json['type'] = 'success';
                        $json['discountable_products'] = $discountable_products;
                        $json['discount'] = $coupon->discount;
                        $json['items'] = $items;
                        $json['message'] = 'Promocode Applied';
                        return $json;
                    }
                }
            } else {

                 $json['type'] = 'error';
                    $json['message'] = 'Coupon code is expired';
                    return $json;

                } 
            } else {

                 $json['type'] = 'error';
                    $json['message'] = 'You have already used this coupon';
                    return $json;

                }
        }
        elseif($promocodes_details != null) {
            $promo_validity = DB::table('promocode_user')->where('promocode_id', $promocodes_details->id)->get();
            foreach($discountable_products as $product) {
                $quantity = $items[$product->id]['quantity'];
                $discountable_products_quantity += $quantity;
            }

            if (count($discountable_products) > 0) {
                if (count($promo_validity) < $promocodes_details->quantity) {
                    if ($discountable_products_quantity < json_decode($deal_details->min_product, true) ) {
                        $json['type'] = 'error';
                        $json['message'] = 'Product limit less than minimum product';
                        return $json;
                    }
                    elseif ($discountable_products_quantity > json_decode($deal_details->max_product)) {
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
                            /*\Cart::update($product->id, array(
                                'price' => $discounted_price,
                            ));*/
                        }
                        $json['type'] = 'success';
                        $json['discountable_products'] = $discountable_products;
                        $json['discount'] = $promocodes_details->reward;
                        $json['items'] = $items;
                        $json['message'] = 'Promocode Applied';
                        return $json;
                    }
                 } else {
                    $json['type'] = 'error';
                    $json['message'] = 'Promocode Not Found';
                    return $json;
                 }
                }
            else {
                $json['type'] = 'error';
                $json['message'] = 'Promocode Expired';
                return $json;
            }
        }
        else {
            $json['message'] = 'Promocode is not valid for these products';
            $json['type'] = 'error';
        }

        return $json;
    }
    public function proceedToOrder(Request $request) {
      //dd($request->all());
        $total_price = $request['total_price'];
        $promocode = $request['code'];


        $user = User::where('id', Auth::id())->with('profile')->first();
        return view('customer::checkout.final', compact('user', 'promocode', 'total_price'));
    }

    public function saveOrderDetails(Request $request) {
        $request['order_number'] = str_pad(mt_rand(999, 99999999) , 8, "0", STR_PAD_LEFT);
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

    public function addToWishList(Request $request) {
        $saved_item = Array();
        $json = Array();
        if (Auth::user()) {
            $user = User::where('id', Auth::id())->first();
            $wishlist = [];
            if ($user->saved_items !== null) {
                $wishlist = json_decode($user->saved_items, true);
            }
//dd(array_search($request['id'], $wishlist));
            if ($wishlist == []) {
                $saved_item[] = $request['id'];
                $user = User::where('id', Auth::id())->update([
                    'saved_items' => $saved_item
                ]);
                $json['type'] = 'added';
                $json['message'] = 'Add to wishlist successfully';
            }
            elseif(in_array($request['id'], $wishlist)) {
                $index = array_search($request['id'], $wishlist);
                if ($index !== false) {
                    unset($wishlist[$index]);
                }
                $wishlist = array_values($wishlist);
                $wishlist = json_encode($wishlist);
                $user = User::where('id', Auth::id())->update([
                    'saved_items' => $wishlist
                ]);
                $json['type'] = 'removed';
                $json['message'] = 'Removed from wishlist successfully';
            }
            else {
                array_push( $wishlist, $request['id'] );
                $wishlist = json_encode($wishlist);
                $user = User::where('id', Auth::id())->update([
                    'saved_items' => $wishlist
                ]);
                $json['type'] = 'added';
                $json['message'] = 'Add to wishlist successfully';
            }
            return $json;
        }
        else {
            $json['type'] = 'error';
            $json['message'] = 'you are not logged in';
        }
        return $json;
    }

    public function getWishList() {
        $json = Array();
        if (Auth::user()) {
            $user = User::where('id', Auth::id())->first();
            $wishlist = $user->saved_items;
            if ($wishlist == null) {
                $json['type'] = 'null';
                $json['list'] = null;
            }
            else {
                $json['type'] = 'not null';
                $json['list'] = json_decode($wishlist);
            }
            return $json;
        }
        else {
            $json['type'] = 'error';
            $json['message'] = 'you are not logged in';
        }
        return $json;
    }
}
