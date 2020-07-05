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
            ->paginate(10);
        return view("admin.order.listOrder", compact('orders'));
    }

    public function listOrderDetails($id)
    {
        $customer = Customers::find($id);
        $orderDetails = Order::find($id);

        return view("users.cart.report", compact('orderDetails', 'customer'));
    }

    public function deleteOrder($id)
    {
        $orderDetails = OrderDetail::where('order_id', $id)->delete();
        $order = Order::find($id)->delete();

        return redirect()->action('OrderController@listOrder')->with(['flash_level' => 'success', 'flash_message' => 'Delete Order Successfully !']);
    }

    public function onOrderStatus($id)
    {
        $onStatus = Order::find($id);
        $onStatus->status = 1;
        $sold_outProduct = OrderDetail::join('product', 'order_details.product_id', '=', 'product.id')
            ->where('order_details.order_id', $id)
            ->groupBy('order_details.product_id')->havingRaw('SUM(order_details.quantity+product.sold_out)')
            ->select(DB::raw('SUM(order_details.quantity+product.sold_out) as sum_sold_out'), 'order_details.product_id')
            ->get();

        $product = '';
        foreach ($sold_outProduct as $qwe) {
            $product = Product::find($qwe->product_id)->update(['sold_out' => $qwe->sum_sold_out]);
        }

        $onStatus->save();
        return redirect()->action('OrderController@listOrder');
    }

    // public function onOrderStatus111()
    // {
    //     $onStatus = Order::find(12);
    //     $onStatus->status = 1;
    //     $onStatus->save();
    //     $sold_outProduct = OrderDetail::join('product', 'order_details.product_id', '=', 'product.id')
    //         ->where('order_details.order_id', 12)
    //         ->groupBy('order_details.product_id', 'product.sold_out')->havingRaw('SUM(order_details.quantity+product.sold_out)')
    //         ->select(DB::raw('SUM(order_details.quantity+product.sold_out) as sum_sold_out'), 'order_details.product_id', 'product.sold_out')
    //         ->get();
    //     $search = '';
    //     $product = '';
    //     foreach ($sold_outProduct as $qwe) {
    //         $product = Product::find($qwe->product_id)->update(['sold_out' => $qwe->sum_sold_out]);
    //     }

    //     return view('/test', compact('sold_outProduct', 'search'));
    // }

    // public function offOrderStatus($id)
    // {
    //     $offStatus = Order::find($id);
    //     $offStatus->status = 0;
    //     $offStatus->save();
    //     return redirect()->action('OrderController@listOrder');
    // }
}
