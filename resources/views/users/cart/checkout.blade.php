@extends('users.layout.layout')
@section('title','Checkout')
@section('checkout')
    <!-- check out form -->
    <div class="hero hero-page padding-small">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9 ">
                    <h1>Check Out</h1>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div id="address" class="active tab-block">
                            <form action="">
                                <!--Invoice Address -->
                                <div class="block-header mb-5">
                                    <h6>Delivery Address</h6>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="firstname" class="form-label">Full Name</label>
                                        <input type="text" id="firstname" name="first-name" placeholder="Enter your first name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname" class="form-label">Phone</label>
                                        <input type="text" id="lastname" name="last-name" placeholder="Phone" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="country" class="form-label pl-2">Payment</label>
                                        <select class="form-control" name="" id="">
                                            <option value="">CoD</option>
                                            <option value="">Credit Card</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="email" class="form-label">Address</label>
                                        <input type="text" id="note" name="note" placeholder="Address" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="street" class="form-label">Note</label>
                                        <input type="text" id="street" name="address" placeholder="Note" class="form-control">
                                    </div>
                                </div>
                                <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                                    <a href="{{ url('cart') }}" class="btn btn-template-outlined wide prev">Back to basket</a>
                                    <a href="{{ url('order-review') }}" class="btn btn-template wide next">Continue to Order Review</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 tab-content">
                    <div class="block-body order-summary">
                        <h6 class="text-uppercase">Order Summary</h6>
                        <p>Shipping and additional costs are calculated based on values you have entered</p>
                        <ul class="order-menu list-unstyled">
                            <li class="d-flex justify-content-between">
                                <span>Order Subtotal</span>
                                <strong>$390.00</strong>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Shipping and handling</span>
                                <strong>$10.00</strong>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Tax</span>
                                <strong>$00.00</strong>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Total</span>
                                <strong class="text-primary price-total">$400.00</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
