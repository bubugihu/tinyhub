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
                                    <h6>Invoice address</h6>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="firstname" class="form-label">Full Name</label>
                                        <input type="text" id="firstname" name="first-name" placeholder="Enter your first name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname" class="form-label">Birthday</label>
                                        <input type="text" id="lastname" name="last-name" placeholder="Birthday" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email" class="form-label">Note</label>
                                        <input type="text" id="note" name="note" placeholder="Note" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="street" class="form-label">Street</label>
                                        <input type="text" id="street" name="address" placeholder="Your street name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="country" class="form-label pl-2">Country</label>
                                        <input type="text" id="country" name="country" value="Việt Nam" readonly class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="city" class="form-label pl-2">City</label>
                                        <select id="city" class="form-control" onchange="giveSelection(this.value)">
                                            <option value="0" selected> City</option>
                                            <option value="a">Hồ Chí Minh</option>
                                            <option value="b">Đà Nẵng</option>
                                            <option value="c">Hà Nội</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="district" class="form-label pl-2"> District</label>
                                        <select id="district" class="form-control ">
                                            <option data-option="0" selected>District</option>
                                            <option data-option="a">Quận 1</option>
                                            <option data-option="a">Quận 2</option>
                                            <option data-option="a">Quận 3</option>
                                            <option data-option="a">Quận 4</option>
                                            <option data-option="a">Quận 5</option>
                                            <option data-option="a">Quận 6</option>
                                            <option data-option="a">Quận 7</option>
                                            <option data-option="a">Quận 8</option>
                                            <option data-option="a">Quận 9</option>
                                            <option data-option="a">Quận 10</option>
                                            <option data-option="a">Quận 11</option>
                                            <option data-option="a">Quận 12</option>
                                            <option data-option="a">Bình Tân</option>
                                            <option data-option="a">Phú Nhuận</option>
                                            <option data-option="a">Thủ Đức</option>
                                            <option data-option="a">Tân Bình</option>
                                            <option data-option="a">Tân Phú</option>
                                            <option data-option="a">Gò Vấp</option>
                                            <option data-option="b">Hải Châu</option>
                                            <option data-option="b">Trà Sơn</option>
                                            <option data-option="c">Thanh Xuân</option>
                                            <option data-option="c">Hai Bà Trưng</option>
                                            <option data-option="c">Hoàn Kiếm</option> 
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="city" class="form-label pl-2">Phone</label>
                                        <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control">
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
