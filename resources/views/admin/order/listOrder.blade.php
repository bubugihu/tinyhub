@extends('admin.layout.layout')
@section('title', 'product list')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Order List</h6>
            </div>
            <div class="card-body">
              <table class="table card-text text-center">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Consignee</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Order Created</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($orders as $order)
                  <tr>
                    <td class="align-middle">{{$order->order_id}}</td>
                    <td class="align-middle">{{$order->consignee_name}}</td>
                    <td class="align-middle">$ {{$order->total}}</td>
                    <td class="align-middle">{{$order->payment}}</td>
                    <td class="align-middle">
                      @if($order->status == 0)
                      <a href="{{url('admin/order/onOrderStatus/'.$order->order_id)}}"><span class="badge badge-pill badge-danger">OFF</span></a>
                      @else
                      <a href="{{url('admin/order/offOrderStatus/'.$order->order_id)}}"><span class="badge badge-pill badge-success">ON</span></a>
                      @endif
                    </td>
                    <td class="align-middle">{{$order->created_at}}</td>
                    <td>
                      <a href="{{url('admin/order/listOrderDetails/'.$order->order_id)}}" class="badge badge-info p-2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection