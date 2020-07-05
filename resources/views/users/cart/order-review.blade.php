@extends('users.layout.layout')
@section('title','Order-Review')
@section('content')
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
            @foreach(Cart::content() as $cart )
            <div class="item mt-4">
              <div class="row d-flex align-items-center">
                <div class="col-5">
                  <div class="d-flex align-items-center"><img src="{{asset('img/feature/'.$cart->options->image)}}" alt="..." class="img-fluid" width="80">
                    <div class="title ml-4"><a href="detail.html">
                        <h5>{{$cart->name}}</h5><span class="text-muted">{{$cart->options->cate}}</span></a></div>
                  </div>
                </div>
                <div class="col-2"><span>${{$cart->price}}</span></div>
                <div class="col-3">
                  <div class="d-flex align-items-center">
                    <div class="quantity d-flex align-items-center">
                      <input type="text" value="{{$cart->qty}}" class="quantity-no">
                    </div>
                  </div>
                </div>
                <div class="col-2"><span>${{$cart->price*$cart->qty}}</span></div>
              </div>
              @endforeach

              {{-- Open Row --}}
              <div class="row container" style="margin-top: 100px">
                    {{-- Information --}}
                      <div class="col-md-6" style="line-height: 0.7;">
                          <h4>Receiver Information</h4>
                          <hr>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Fullname: </p>
                              </div>
                              <div class="col-md-6">
                                <p>{{$consignee_name}}</p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Phone: </p>
                              </div>
                              <div class="col-md-6">
                                <p>{{$phone_consignee}}</p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Receiving address: </p>
                              </div>
                              <div class="col-md-6">
                                <p>{{$shipping_address}}</p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Payment: </p>
                              </div>
                              <div class="col-md-6">
                                <p>{{$payment}}</p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <p>Note: </p>
                              </div>
                              <div class="col-md-6">
                                <p>{{$note}}</p>
                              </div>
                            </div>
                      </div>
                      {{-- End Information --}}
                      {{-- Order Summary --}}
                    <div class="col-md-6" style="line-height: 0.7;">
                      <h4>Order Summary</h4>
                      <hr>
                        <div class="row">
                          <div class="col-md-6">
                            <p>Order SubTotal: </p>
                          </div>
                          <div class="col-md-6">
                            <p>$<strong>{{Cart::subtotal()}}</strong></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <p>Shipping and handling: </p>
                          </div>
                          <div class="col-md-6">
                            <p><strong>$0.00</strong></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <p>Tax: </p>
                          </div>
                          <div class="col-md-6">
                            <p><strong>${{Cart::tax()}}</strong></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <p>Total: </p>
                          </div>
                          <div class="col-md-6">
                            <p><strong>${{Cart::total()}}</strong></p>
                          </div>
                        </div>
                  </div>
                  {{-- End order summary --}}
              </div>
              {{-- End row --}}

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row">
      <a href="{{ url('checkout') }}" class="btn btn-template-outlined wide">Back to Checkout</a>
      <form action="{{ url('thank-you')}}" method="post">
        @csrf
      <input type="text" style="display: none" name="consignee_name" value="{{$consignee_name}}">
      <input type="text" style="display: none" name="phone_consignee" value="{{$phone_consignee}}">
      <input type="text" style="display: none" name="payment" value="{{$payment}}">
      <input type="text" style="display: none" name="shipping_address" value="{{$shipping_address}}">
      <input type="text" style="display: none" name="note" value="{{$note}}"> 
      <button type="submit" class="btn btn-template wide" >Confirm</button>
    </div>
  </form>
    </div>
</section>
@endsection