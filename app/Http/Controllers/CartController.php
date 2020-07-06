<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use App\Product;
use App\Category;
use App\Order;
use Closure;
use App\Customers;

class CartController extends Controller
{
    //see cart
    public function cart()
    {
        $stt = 0;
        $ship = 100;
        $subtotal = str_replace(',', '', Cart::subtotal());
        if ($subtotal >= 3000) {
            $ship = 0;
        }
        $total = str_replace(',', '', Cart::total());
        $total = $total + $ship;

        return view('users.cart.shopping-cart', compact('stt', 'ship', 'total'));
    }
    //in cart
    public function shoppingCart(Request $request)
    {
        $id = $request->idProduct;
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
            'options' => [
                'cate' => $category,
                'image' => $product->feature_image
            ],
        ]);
        $ship = 100;
        $subtotal = str_replace(',', '', Cart::subtotal());
        if ($subtotal >= 3000) {
            $ship = 0;
        }
        $total = str_replace(',', '', Cart::total());
        $total = $total  + $ship;
        return view('users.cart.shopping-cart', compact('stt', 'ship', 'total'));
    }

    //add cart
    public function addCart(Request $request, $id)
    {
        $quantity = $request->quantityNumber;
        $product = Product::find($id);
        $category = Category::find($product->category_id)->category_name;
        Cart::add([
            'id' => $id,
            'name' => $product->product_title,
            'qty' => $quantity,
            'price' => $product->price,
            'weight' => 0,
            'options' => [
                'cate' => $category,
                'image' => $product->feature_image
            ],
        ]);

        // return view('users.cart.shopping-cart',compact('stt'));
        return back();
    }


    //incre Cart
    public function increCart(Request $request)
    {
        $qtyNew = $request->qtyItemCart + 1;
        $idItem = $request->idIncreCart;
        Cart::update($idItem, [
            'qty' => $qtyNew
        ]);
        return back();
    }

    //decre Cart
    public function decreCart(Request $request)
    {
        $qtyNew = $request->qtyItemCart - 1;
        $idItem = $request->idDecreCart;
        Cart::update($idItem, [
            'qty' => $qtyNew,
        ]);
        return back();
    }

    //remove Item
    public function removeItem($id)
    {
        Cart::remove($id);
        return back();
    }

    //check out cart
    public function checkout(){
        if(Cart::count() == 0)
            return abort(404);
        else 
            return view('users.cart.checkout');
    }

    //order review
    public function orderReview(Request $request){
        //validate
        $this->validate(
            $request,
            [
                'consignee_name'        =>  'bail|required|string|min:2',
                'phone_consignee'       =>  'bail|required|regex:/^0[1-9][0-9]{8}$/i',
                'shipping_address'      =>  'bail|required|string|min:2',
            ]
        );
        $consignee_name = $request->consignee_name;
        $phone_consignee = $request->phone_consignee;
        $payment = $request->payment;
        $shipping_address = $request->shipping_address;
        $note = $request->note;
        // $customer_id = Customers::where('users_id', (Auth::user()->id))->first()->id;
        // $order = Order::create([
        //     'consignee_name'    =>  $consignee_name,
        //     'phone_consignee'   =>  $phone_consignee,
        //     'payment'           =>  $payment,
        //     'shipping_address'  =>  $shipping_address,
        //     'note'              =>  $note,
        //     'status'            =>  0,
        //     'customer_id'       =>  $customer_id,
        // ]);
        // $order->save();

        // foreach (Cart::content() as $orderDetails) {
        //     OrderDetail::create([
        //         'order_id'      => $order->id,
        //         'product_id'    => $orderDetails->id,
        //         'quantity'      => $orderDetails->qty,
        //     ]);
        // }
        
        return view('users.cart.order-review', compact('consignee_name','phone_consignee','payment','shipping_address','note'));
    }



    //Thank you
    public function thankyou(Request $request)
    {

        $consignee_name = $request->consignee_name;
        $phone_consignee = $request->phone_consignee;
        $payment = $request->payment;
        $shipping_address = $request->shipping_address;
        $note = $request->note;
        $customer_id = Customers::where('users_id', (Auth::user()->id))->first()->id;

        $order = Order::create([
            'consignee_name'    =>  $consignee_name,
            'phone_consignee'   =>  $phone_consignee,
            'payment'           =>  $payment,
            'shipping_address'  =>  $shipping_address,
            'note'              =>  $note,
            'status'            =>  0,
            'customer_id'       =>  $customer_id,
        ]);
        $order->save();

        foreach (Cart::content() as $orderDetails) {
            OrderDetail::create([
                'order_id'      => $order->id,
                'product_id'    => $orderDetails->id,
                'quantity'      => $orderDetails->qty,
            ]);
        }

        Cart::destroy();
        return view('thank-you');
    }




    //order details aka order review
    public function orderDetails($id)
    {
        // $order_details = OrderDetail::where('order_id',$id)->get;
        $orderDetails = OrderDetail::join('product', 'product.id', '=', 'order_details.product_id')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('order', 'order.id', '=', 'order_details.order_id')
            ->join('customer', 'customer.id', '=', 'order.customer_id')
            ->join('users', 'users.id', '=', 'customer.users_id')
            ->where('order.id', '=', $id)
            ->select('users.email', 'customer.customer_name', 'customer.phone', 'customer.address', 'order.payment', 'order.shipping_address', 'order.consignee_name', 'order.phone_consignee', 'order.note', 'order.created_at')
            ->first();
        // sum total
        $select = OrderDetail::join('product', 'product.id', '=', 'order_details.product_id')
            ->where('order_details.order_id', $id)
            ->select('order_details.quantity', 'product.*')
            ->get();
        $subtotal = 0;
        foreach ($select as $totals) {
            $subtotal = $subtotal + $totals->quantity * $totals->price;
        }
        $tax = $subtotal * 0.1;
        $total = $subtotal * 1.1;
        $stt = 0;
        return view('users.cart.report', compact('orderDetails', 'total', 'subtotal', 'tax', 'stt', 'id', 'select'));
    }

    
}
