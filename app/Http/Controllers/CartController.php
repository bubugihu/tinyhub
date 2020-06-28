<?php

namespace App\Http\Controllers;

use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{   
    //in cart
    public function cart(){
        if(Auth::check()){
        $carts = OrderDetail::join('product','product.id','=','order_details.product_id')
                            ->join('category','category.id','=','product.category_id')
                            ->join('order', 'order.id', '=', 'order_details.order_id')
                            ->join('customer', 'customer.id', '=' , 'order.customer_id')
                            ->join('users', 'users.id', '=', 'customer.users_id')
                            ->where('users.id', Auth::user()->id)
                            ->select('product.*','category.category_name')
                            ->get();
        // $total = OrderDetail::selectRaw('product_id, Sum(quantity) as quantity')->groupBy('product_id')->first();                    
                           
        return view('users.cart.shopping-cart', compact('carts'));
        }else{
            $carts = OrderDetail::join('product','product.id','=','order_details.product_id')
            ->join('category','category.id','=','product.category_id')
            ->join('order', 'order.id', '=', 'order_details.order_id')
            ->join('customer', 'customer.id', '=' , 'order.customer_id')
            ->join('users', 'users.id', '=', 'customer.users_id')
            ->select('users.*', 'customer.*', 'order.*','order_details.*','product.*','category.*')
            ->get();
                    
        return view('users.cart.shopping-cart', compact('carts'));
        }
    }

    //add cart
    public function addCart(Request $request,$id){
        if(Auth::check()){
            
        }
    }
}
