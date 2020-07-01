@extends('users.layout.layout')
@section('title', 'Report')
@section('content')
  <section class="report p-5">
      <div class="container card card-body">
          <div class="row p-4">
            <div class="col-md-6 text-left" style="line-height: 0.7;">
              <img class="img-fluid" src="{{url("img/tinyhub-logo.png")}}" alt="" width="160" height="auto">
              <hr>
              <p>Website: wwww.tinyhub.com</p>
              <p>Phone Number: 020-800-456-747</p>
              <p>Email: tinyhub@gmail.com</p>
            </div>
            <div class="col-md-6 text-left" style="line-height: 0.7;">
              <h2 style="color: #f47535;">Invoice</h2><br>  
              <hr>
              <p>Order Id: {{$id}}</p>
              <p>Created: {{$orderDetails->created_at}}</p>
              <p>Payment Method: {{$orderDetails->payment}}</p>
            </div>
          </div>
          <div class="row p-4">
            <div class="col-md-6" style="line-height: 0.7;">
                <h4>Customer Information</h4>
                <hr>
                <p>Fullname: {{$orderDetails->customer_name}}</p>
                <p>Email: {{$orderDetails->email}}</p>
                <p>Phone: {{$orderDetails->phone}}</p>
                <p>Address: {{$orderDetails->address}}</p>
            </div>
            <div class="col-md-6" style="line-height: 0.7;">
                <h4>Receiver Information</h4>
                <hr>
                <p>Fullname: {{$orderDetails->consignee_name}}</p>
                <p>Phone: {{$orderDetails->phone_consignee}}</p>
                <p>Receiving address: {{$orderDetails->shipping_address}}</p>
            </div>
          </div>
          <div class="row p-4">
            <div class="col-md-12">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Product Title</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($select as $s)
                  <tr>
                    <th scope="row">{{++$stt}}</th>
                    <td>{{$s->product_title}}</td>
                    <td>{{$s->quantity}}</td>
                    <td>${{$s->price}}</td>
                    <td>${{$s->quantity * $s->price}}</td>
                  </tr>
                  @endforeach

                </tbody>
                <tfoot>
                  <tr>
                    <th></th>
                    <td colspan="3" class="text-right text-danger text-uppercase">Total</td>
                    <td class="text-red">${{$total}}</td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
          <div class="row p-4">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
              <a href=""><button type="submit" class="btn login-btn">Print</button></a>
              <a href="{{route("homepage")}}"><button type="reset" class="btn btn-dark">Back to homepage</button></a>
            </div>
            <div class="col-md-3"></div>
          </div>
      </div>
  </section>
@endsection