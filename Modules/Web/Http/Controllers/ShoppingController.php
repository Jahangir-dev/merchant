<?php

namespace Modules\Web\Http\Controllers;
use App\Models\Product;
use Cart;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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
        $items = \Cart::getContent();
        return view('web::checkout.index', compact('items'));
    }
}
