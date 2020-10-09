<?php

namespace Modules\Web\Http\Controllers;
use App\Models\Product;
use Cart;

use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Array_;

class ShoppingController extends Controller
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

    public function getCart()
    {
        $names = Array();
        $items = \Cart::getContent();
        foreach ($items as $item) {
            array_push($names, $item->name);
        }
        $products = Product::whereIn('name', $names)->get();
        
        return view('web::shopping.index');
    }

    public function addToCart(Request $request) {
        $data = Array();
        $pro = $request['product'];
        
        $qty = '1';
        if(count($pro['images']) > 0){

            $productImage =$pro['images'][0]['full'];
        } else {

            $productImage = 'frontend/images/index/cart/img-03.png';
        }
        /*$product = $this->productRepository->findProductById($request->input('productId'));
        $options = $request->except('_token', 'productId', 'price', 'qty');*/

        $result = \Cart::add($pro['id'], $pro['name'], $pro['price'], $qty,$productImage );
        $items = \Cart::getContent();

        $data['items'] = $items;
        $data['total'] = count($items);
        $data['type'] = 'success';
        $data['message'] = 'Product add to cart successfully';
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
        $json['message'] = 'Product Decremented successfully';
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
            return view('customer::checkout.index', compact('items'));
        }
        else {
            notify()->warning('Please login first');
            return  redirect()->back();
        }
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
