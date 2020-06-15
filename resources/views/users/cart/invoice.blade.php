@extends('users.layout.layout')
@section('invoice')
    <!-- check out form -->
    <section class="invoice">
        <div class="container">
            <div class="basket">
                            <form action="">
                                <!--Invoice -->
                                    <h3>Invoice</h3>
                                        <div class="basket-holder">
                                            <div class="basket-header">
                                                <div class="row">
                                                    <div class="col-5">Product</div>
                                                    <div class="col-2">Price</div>
                                                    <div class="col-3">Quantity</div>
                                                    <div class="col-2">Total</div>
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
                                                        <div class="col-3">
                                                            <div class="d-flex align-items-center ">
                                                                <div class="quantity d-flex align-items-center ">
                                                                    <input type="text" value="2" class="quantity-no">                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2" style="padding-left: 0">
                                                            <div class="d-flex align-items-center">
                                                            <span>$325.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                               
                                <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                                    <a href="#" class="btn btn-template-outlined wide prev">Back to Home</a>
                                    <a href="#" class="btn btn-template wide next">Print Invoice</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection