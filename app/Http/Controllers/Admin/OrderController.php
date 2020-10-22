<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\OrderContract;
use App\Http\Controllers\BaseController;
use App\Models\OrderItem;
class OrderController extends BaseController
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function index()
    {
        $orders = $this->orderRepository->listOrders();
        $orders = $orders->filter(function($order){
                if($order['type'] == 'order'){ 
                  $product = OrderItem::with('product')->where('order_id',$order['id'])->first();
                  $order->product_name =  $product['product']['name'];
                  $order->product_slug =  $product['product']['slug'];
                  $order->merchant_first =  $product['product']['user']['first_name'];
                  $order->merchant_last =  $product['product']['user']['last_name'];
                 return $order;
               }
        });
        $this->setPageTitle('Orders', 'List of all orders');
        return view('admin.orders.index', compact('orders'));
    }

    public function show($orderNumber)
    {
        $order = $this->orderRepository->findOrderByNumber($orderNumber);

        $this->setPageTitle('Order Details', $orderNumber);
        return view('admin.orders.show', compact('order'));
    }
}
