@extends('users.layout.layout')
@section('shopping-cart')
<section class="shopping-cart">
    <div class="container">
        <div class="basket">
            <div class="basket-holder">
                <div class="basket-header">
                    <div class="row">
                        <div class="col-5">Product</div>
                        <div class="col-2">Price</div>
                        <div class="col-2">Quantity</div>
                        <div class="col-2">Total</div>
                        <div class="col-1">Option</div>
                    </div>
                </div>
                <div class="basket-body">
                    <!-- Product -->
                    <div class="item">
                        <div class="row d-flex align-items-center">
                            <div class="col-5">
                                <div class="d-flex align-items-center">
                                    <img src="{{url("img/3.jpg")}}" alt="" width="120" class="img-fluid">
                                    <div class="title" style="padding-left: 20px">
                                        <a href="#">
                                            <h5>Kitty headphone</h5>
                                            <span class="text-muted">Color: pink</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="d-flex align-items-center">
                                <span>$65.00</span>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="d-flex align-items-center ">
                                    <div class="quantity d-flex align-items-center ">
                                        <div class="dec-btn">-</div>
                                        <input type="text" value="2" class="quantity-no">
                                        <div class="inc-btn">+</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2" style="padding-left: 0">
                                <div class="d-flex align-items-center">
                                <span>$325.00</span>
                                </div>
                            </div>
                            <div class="col-1 text-center">
                                <div class="d-flex align-items-center">
                                <i class="delete fa fa-trash"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row">
            <a href="#" class="btn btn-template-outlined wide">Continue Shopping</a>
            <a href="#" class="btn btn-template wide ">Update Cart</a>
        </div>
    </div>
</section>


<section class="order-details no-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="block">
                    <div class="block-header">
                        <h6 class="uppercase">INSTRUCTIONS FOR SELLER</h6>
                    </div>
                    <div class="block-body">
                        <p>If you have some information for the seller you can leave them in the box below</p>
                        <form action="#">
                            <textarea class="form-control"  rows="3"></textarea>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block">
                    <div class="block-header">
                        <h6 class="uppercase">Order Summary</h6>
                    </div>
                    <div class="block-body">
                        <p>Shipping and additional costs are calculated based on values you have entered.</p>
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
                                <strong>$0.00</strong>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Total</span>
                                <strong class="text-primary price-total">$400.00</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center CTAs">
                <a href="#" class="btn btn-template btn-lg wide">Proceed to checkout
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

