<?php

namespace App\Http\Controllers;

use App\Customers;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function listOrder()
    {
        // $orders = User::join('customer', 'users.id', '=', 'customer.users_id')
        //     ->join('order', 'customer.id', '=', 'order.customer_id')
        //     ->join('order_details', 'order.id', '=', 'order_details.order_id')
        //     ->join('product', 'order_details.product_id', '=', 'product.id')
        //     ->select('users.*', 'customer.*', 'order_details.*', 'product.*', 'order.*')
        //     ->get();
        $orders = Order::join('order_details', 'order.id', '=', 'order_details.order_id')
            ->join('product', 'order_details.product_id', '=', 'product.id')
            ->groupBy('order_details.order_id', 'order.payment', 'order.created_at','order.consignee_name','order.status')
            ->select('order_details.order_id', DB::raw('SUM(product.price * order_details.quantity) as total'), 'order.payment', 'order.created_at','order.consignee_name','order.status')
            ->get();
        return view("admin.order.listOrder", compact('orders'));
    }

    public function listOrderDetails($id){
        $customer=Customers::find($id);
        $orderDetails=Order::find($id);

        return view("users.cart.report", compact('orderDetails','customer'));
    }

    public function onOrderStatus($id)
    {
        $onStatus = Order::find($id);
        $onStatus->status = 1;
        $onStatus->save();
        return redirect()->action('OrderController@listOrder');
    }

    public function offOrderStatus($id)
    {
        $offStatus = Order::find($id);
        $offStatus->status = 0;
        $offStatus->save();
        return redirect()->action('OrderController@listOrder');
    }
}
