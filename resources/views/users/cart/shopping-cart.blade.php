@extends('users.layout.layout')
@section('title','Shopping-Cart')
@section('shopping-cart')
<div class="hero hero-page padding-small">
  <div class="container">
      <div class="row d-flex">
          <div class="col-lg-9 ">
              <h1>Cart</h1>
          </div>
      </div>
  </div>
</div>
<section class="cart">
    <div class="container">
      <div class="basket">
        <div class="basket-holder">
          <div class="basket-header ">
            <div class="row">
              <div class="col-1"> <h6 class="text-center">No.</h6></div>
              <div class="col-4">Product</div>
              <div class="col-2">Price</div>
              <div class="col-2">Quantity</div>
              <div class="col-2">Amount</div>
              <div class="col-1 text-center">Remove</div>
            </div>
          </div>
          <div class="basket-body">
            <!-- Product-->

            @foreach(Cart::content() as $cart)
            <div class="item">
              <div class="row d-flex align-items-center">
                <div class="col-1"><h6 class="text-center ml-4">{{++$stt}}</h6></div>
                <div class="col-4">
                  <div class="d-flex align-items-center"><img src="{{asset('img/feature/'.$cart->options->image)}}" alt="..." class="img-fluid" width="80">
                    <div class="title"><a href="detail.html">
                      <h5>{{$cart->name}}</h5><span class="text-muted">{{$cart->options->category}}</span></a></div>
                  </div>
                </div>
                <div class="col-2"><span>$</span><input type="number" class="quantity" value="{{$cart->price}}" id="price"></div>
                <div class="col-2">
                  <div class="d-flex align-items-center">
                    <div class="quantity d-flex align-items-center">
                      <button class="dec-btn" onclick="decre()">-</button>
                      <input type="number" value="{{$cart->qty}}" class="quantity-no" id="quantity" min="0">
                      <button class="inc-btn" onclick="incre()">+</button>
                    </div>
                  </div>
                </div>
                <div class="col-2"><span>$</span><span>{{number_format($cart->price*$cart->qty, 0, '.', ',')}}</span></div>
                <div class="col-1 text-center"><i class="delete fa fa-trash"></i></div>
              </div>
            </div>  
            @endforeach

          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row"><button href="#" class="btn login-btn mr-10">SubTotal</button><strong class="mr-200 ml-70" style="color: #fd7e14; font-weight: 600; margin-left: 70px;margin-right: 200px">${{Cart::pricetotal()}}</strong></div>
    </div>
</section>
<section class="order-details no-padding-top"> 
    <div class="container">
      <div class="row">                         
        <div class="col-lg-6">
          <div class="block">
            <div class="block-header">
              <h6 class="text-uppercase">Instructions for seller</h6>
            </div>
            <div class="block-body">
              <p>If you have some information for Us you can leave them in the box below</p>
              <form action="#">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="block">
            <div class="block-header">
              <h6 class="text-uppercase">Order Summary</h6>
            </div>
            <div class="block-body">
              <p>Shipping and additional costs are calculated based on values you have entered.</p>
              <ul class="order-menu list-unstyled">
              <li class="d-flex justify-content-between"><span>Order Subtotal </span><strong>{{Cart::pricetotal()}}</strong></li>
                <li class="d-flex justify-content-between"><span>Shipping and handling</span><strong>{{number_format($ship,0,'.',',')}}</strong></li>
                <li class="d-flex justify-content-between"><span>Tax</span><strong>{{Cart::tax()}}</strong></li>
                <li class="d-flex justify-content-between"><span>Total</span><strong class="text-primary price-total">{{number_format($total,0,'.',',')}}</strong></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-12 text-center CTAs"><a href="{{ url('checkout') }}" class="btn btn-template btn-lg wide">Proceed to checkout<i class="fa fa-long-arrow-right"></i></a></div>
      </div>
    </div>
</section>
@endsection

