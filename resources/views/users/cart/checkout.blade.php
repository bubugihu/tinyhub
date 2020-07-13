@extends('users.layout.layout')
@section('title','Checkout')
@section('content')
    
    <div class="hero hero-page padding-small">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-12">
                    <h1>Check Out</h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{ Breadcrumbs::render('checkout') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="checkout pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 mx-auto">
                    <div class="tab-content">
                        <div id="address" class="active tab-block">
                                <!--Invoice Address -->
                                <div class="block-header mb-5">
                                    <h6 class="text-center">Delivery Address</h6>
                                </div>

                                {{--Form Check out--}}
                                <form action="{{url('cart/shopping/order-review')}}" method="post">
                                    @csrf
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="firstname" class="form-label">Full Name<span class="required">*</span></label>
                                        <input type="text" id="firstname" name="consignee_name" placeholder="Enter your name" class="form-control @error('consignee_name') is-invalid @enderror"
                                        @auth
                                          value="{{Auth::user()->roleCustomer->customer_name}}"
                                        @endauth
                                        >
                                        @error('consignee_name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname" class="form-label">Phone<span class="required">*</span></label>
                                        <input type="text" id="lastname" name="phone_consignee" placeholder="Phone" class="form-control @error('phone_consignee') is-invalid @enderror"
                                        @auth
                                          value="{{Auth::user()->roleCustomer->phone}}"
                                        @endauth
                                        >
                                        @error('phone_consignee')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="country" class="form-label pl-2">Payment<span class="required">*</span></label>
                                        <select class="form-control" name="payment" id="">
                                            <option value="CoD">CoD</option>
                                            <option value="Credit Card">Credit Card</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="address" class="form-label">Address<span class="required">*</span></label>
                                        <input type="text" id="address" name="shipping_address" placeholder="Address" class="form-control @error('shipping_address') is-invalid @enderror"
                                        @auth
                                          value="{{Auth::user()->roleCustomer->address}}"
                                        @endauth
                                        >
                                        @error('shipping_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="note" class="form-label">Note</label>
                                        <input type="text" id="note" name="note" placeholder="Note" class="form-control">
                                    </div>
                                </div>
                                <div class="CTAs d-flex justify-content-between flex-column flex-lg-row pb-5">
                                    <a href="{{ url('cart') }}" class="btn btn-dark wide prev">Back to Cart</a>
                                    <button type="submit" class="btn btn-template wide next">Continue to Order Review</button>
                                </div>
                                </form>
                            {{--end form Check out--}}

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 tab-content mx-auto">
                    <div class="block-body order-summary card card-body">
                        <h6 class="text-uppercase">Order Summary</h6>
                        <p>Shipping and additional costs are calculated based on values you have entered</p>
                        <ul class="order-menu list-unstyled">
                            <li class="d-flex justify-content-between">
                                <span>Order Subtotal</span>
                                <strong>${{Cart::pricetotal()}}</strong>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Shipping and handling</span>
                                <strong>$0.00</strong>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Tax</span>
                                <strong>${{Cart::tax()}}</strong>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><strong style="font-size: 20px">Total</strong> </span>
                                <strong class="text-cart price-total">${{Cart::total()}}</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
