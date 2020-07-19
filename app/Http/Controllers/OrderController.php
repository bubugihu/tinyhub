<?php

namespace App\Http\Controllers;

use App\Customers;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function listOrder()
    {
        $orders = Order::join('order_details', 'order.id', '=', 'order_details.order_id')
                        ->join('product', 'order_details.product_id', '=', 'product.id')
                        ->groupBy('order_details.order_id', 'order.payment', 'order.created_at', 'order.consignee_name', 'order.status')
                        ->select('order_details.order_id', DB::raw('SUM(product.price * order_details.quantity) as total'), 'order.payment', 'order.created_at', 'order.consignee_name', 'order.status')   
                        ->orderBy('order.status', 'asc')
                        ->paginate(5);
        
        return view("admin.order.listOrder", compact('orders'));
    }


    public function deleteOrder($id)
    {
        OrderDetail::where('order_id', $id)->delete();
        Order::find($id)->delete();

        return redirect()->action('OrderController@listOrder')->with(['flash_level' => 'success', 'flash_message' => 'Delete Order Successfully !']);
    }

    public function onOrderStatus($id)
    {
        Order::find($id)->update(['status' => 1]);
        $orderDetail = OrderDetail::where('order_id',$id)->get();
        foreach($orderDetail as $orderDetail){
            $sold = Product::find($orderDetail->product_id)->sold_out;
            Product::find($orderDetail->product_id)->update(['sold_out' => ($sold+$orderDetail->quantity)]);
        }

        return redirect()->action('OrderController@listOrder');
    }

    public function searchId(Request $request){
        $id = $request->searchId;
        if($id < 1){
            return redirect()->action('OrderController@listOrder')->with(['flash_level' => 'danger', 'flash_message' => 'Id can not negative !']);
        }else{
            $orders = Order::join('order_details', 'order.id', '=', 'order_details.order_id')
                        ->join('product', 'order_details.product_id', '=', 'product.id')
                        ->where('order.id',$id)
                        ->groupBy('order_details.order_id', 'order.payment', 'order.created_at', 'order.consignee_name', 'order.status')
                        ->select('order_details.order_id', DB::raw('SUM(product.price * order_details.quantity) as total'), 'order.payment', 'order.created_at', 'order.consignee_name', 'order.status')   
                        ->orderBy('order.status', 'asc')
                        ->paginate(20);
        
        return view("admin.order.listOrder", compact('orders'));
        }
    }
}
