@extends('users.layout.layout')
@section('checkout')
    <!-- check out form -->
    <section class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div id="address" class="active tab-block">
                            <form action="">
                                <!--Invoice Address -->
                                <div class="block-header mb-5">
                                    <h6>Invoice address</h6>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" id="firstname" name="first-name" placeholder="Enter your first name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" id="lastname" name="last-name" placeholder="Enter your last name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="text" id="email" name="email" placeholder="Enter your email address" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="street" class="form-label">Street</label>
                                        <input type="text" id="street" name="address" placeholder="Your street name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="city" class="form-label">District</label>
                                        <input type="text" id="city" name="city" placeholder="Your District" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="zip" class="form-label">City</label>
                                        <input type="text" id="zip" name="zip" placeholder="Your city" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="city" class="form-label">Phone</label>
                                        <input type="text" id="city" name="city" placeholder="Your phone number" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="city" class="form-label">Company</label>
                                        <input type="text" id="city" name="city" placeholder="Your company" class="form-control">
                                    </div>
                                </div>
                                <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                                    <a href="#" class="btn btn-template-outlined wide prev">Back to basket</a>
                                    <a href="#" class="btn btn-template wide next">Continue to Order Review</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
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