@extends('users.layout.layout')
@section('title','Order-Review')
@section('order-review')
<div class="hero hero-page padding-small">
  <div class="container">
      <div class="row d-flex">
          <div class="col-lg-9 ">
              <h1>Order Review</h1>
          </div>
      </div>
  </div>
</div>
<section class="cart">
    <div class="container">
      <div class="basket">
        <div class="basket-holder">
          <div class="basket-header tab-content">
            <div class="row">
              <div class="col-5">Product</div>
              <div class="col-2">Price</div>
              <div class="col-3">Quantity</div>
              <div class="col-2">Amount</div>
              
            </div>
          </div>
          <div class="basket-body">
            <!-- Product-->
            @foreach($orderDetails as $cart )
            <div class="item mt-4">
              <div class="row d-flex align-items-center">
                <div class="col-5">
                  <div class="d-flex align-items-center"><img src="{{asset('img/feature/'.$cart->feature_image)}}" alt="..." class="img-fluid" width="80">
                    <div class="title ml-4"><a href="detail.html">
                        <h5>{{$cart->product_title}}</h5><span class="text-muted">{{$cart->category_name}}</span></a></div>
                  </div>
                </div>
                <div class="col-2"><span>${{$cart->price}}</span></div>
                <div class="col-3">
                  <div class="d-flex align-items-center">
                    <div class="quantity d-flex align-items-center">
                      <input type="text" value="{{$cart->quantity}}" class="quantity-no">
                    </div>
                  </div>
                </div>
                <div class="col-2"><span>${{$cart->price*$cart->quantity}}</span></div>
              </div>
              @endforeach

              <div class="row d-flex align-items-center">
                <div class="col-4">
                </div>
                <div class="col-lg-4 tab-content">
                  <div class="block-body order-summary">
                      <ul class="order-menu list-unstyled">
                          <li class="d-flex justify-content-between">
                              <span>Order Subtotal</span>
                              <strong>${{$subtotal}}</strong>
                          </li>
                          <li class="d-flex justify-content-between">
                              <span>Shipping and handling</span>
                              <strong>$0.00</strong>
                          </li>
                          <li class="d-flex justify-content-between">
                              <span>Tax</span>
                              <strong>${{$tax}}</strong>
                          </li>
                          <li class="d-flex justify-content-between">
                              <span>Total</span>
                              <strong class="text-primary price-total">${{$total}}</strong>
                          </li>
                      </ul>
                  </div>
              </div>
                <div class="col-4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row">
      <a href="{{ route('homepage') }}" class="btn btn-template-outlined wide">Back to Homepage</a>
    <a href="{{ url('report')}}" class="btn btn-template wide" >Print Invoice</a>
    </div>
    </div>
</section>
@endsection