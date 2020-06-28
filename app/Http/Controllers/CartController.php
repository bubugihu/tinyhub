<?php

namespace App\Http\Controllers;

use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use App\Product;
use App\Category;
use Closure;
class CartController extends Controller
{   
    //see cart
    public function cart(){
        $stt = 0;
        $ship = 100;
        $subtotal = str_replace(',', '', Cart::subtotal());
        if($subtotal >= 3000){
            $ship = 0;
        }
        $total = str_replace(',', '', Cart::total());
        $total = $total + $ship;
        
        return view('users.cart.shopping-cart', compact('stt','ship','total'));
    }
    //in cart
    public function shoppingCart(Request $request){
        $id= $request->idProduct;
        $quantity = $request->addQuantity;
        $stt = 0;                     
        $product = Product::find($id);
        $category = Category::find($product->category_id)->category_name;
        Cart::setGlobalTax(10);
            Cart::add([
                'id' => $id,
                'name' => $product->product_title,
                'qty' => $quantity,
                'price' => $product->price,
                'weight' => 0,
                'options'=>[
                    'cate' => $category,
                    'image'=> $product->feature_image
                ],
            ]);
        $ship = 100;
        $subtotal = str_replace(',', '', Cart::subtotal());
        if($subtotal >= 3000){
            $ship = 0;
        }
        $total = str_replace(',', '', Cart::total());
        $total = $total + $tax + $ship;
        return view('users.cart.shopping-cart',compact('stt','ship','total'));
    }

    //add cart
    public function addCart(Request $request,$id){
        $quantity = $request->quantityNumber;
        $product = Product::find($id);
        $category = Category::find($product->category_id)->category_name;
        Cart::add([
                'id' => $id,
                'name' => $product->product_title,
                'qty' => $quantity,
                'price' => $product->price,
                'weight' => 0,
                'options'=>[
                    'cate' => $category,
                    'image'=> $product->feature_image
                ],
        ]);
        
        // return view('users.cart.shopping-cart',compact('stt'));
        return back();
    }

    
}
