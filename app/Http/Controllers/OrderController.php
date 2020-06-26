<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    public function listOrder(){
        // $orders = Order::all();
        
        // ->select('order.*','order_details.*')
        // ->get();
        $orders = User::join('customer','users.id', '=' , 'customer.users_id')
                        ->join('order','customer.id', '=' , 'order.customer_id')
                        ->join('order_details','order.id', '=' , 'order_details.order_id')
                        ->join('product','order_details.product_id', '=' , 'product.id')
                        ->select('users.*','customer.*','order.*','order_details.*','product.*')
                        ->get();
         return view("admin.order.listOrder", compact('orders'));
    }
}
