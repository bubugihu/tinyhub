<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function listOrder(){
        // $orders = Order::join('order_details','order_details.order.id','=','order.id')
        
        // ->select('order.*','order_details.*')
        // ->get();
         return view("admin.order.listOrder");
    }
}
