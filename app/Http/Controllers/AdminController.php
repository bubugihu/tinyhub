<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Feedback;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\User;

use Illuminate\Http\Request;

// class AdminController extends Controller
// {
//     public function index(){
//         $countManager   =   User::where('role','<>',0)->count();
//         $countCustomer  =   User::where('role','=',0)->count();
//         $countProduct   =   Product::all()->count();
//         $countOrder     =   Order::all()->count();
//         $countComment   =   Comment::all()->count();
//         $countFeedback  =   Feedback::all()->count();


//         //count revenue
//         $total = 0;
//         $totalThisMonth = 0;
//         if($countOrder > 0)
//     {
//         $orderDetails = OrderDetail::join('product','product.id','=','order_details.product_id')
//                                     ->select('order_details.quantity','product.price')
//                                     ->get();
        
                                   
//         foreach($orderDetails as $price){
//             $total = $total + ($price->quantity * $price->price);
//         }

//         $year = date("Y");
//         $month = date("m");
//         $orderThisMonth =   OrderDetail::join('product','product.id','=','order_details.product_id')
//                                         ->whereYear('order_details.created_at','=',$year)
//                                         ->whereMonth('order_details.created_at','=', $month)
//                                         ->select('order_details.quantity','product.price')
//                                         ->get();
//         foreach($orderThisMonth as $priceMonth){
//             $totalThisMonth = $totalThisMonth + ($priceMonth->quantity * $priceMonth->price);
//         }
//     }

//         return view('admin.index', compact('countManager','countCustomer','countProduct','countOrder','countComment','countFeedback','total','totalThisMonth'));
//     }
// }
