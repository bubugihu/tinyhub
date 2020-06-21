@extends('users.layout.layout')
@section('title', 'Product List')
@section('content')
<!-- Product Title -->
<div class="hero hero-page padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 ">
                <h1>Product Categories</h1>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Sidebara-->
        <div class="col-xl-3 col-lg-4 py-4">
            <!-- Headphone Type -->
            <div class="block p-3">
                <h6 class="text-uppercase">Headphone Type</h6>
                <hr width="100%" style="margin-left: 0;">
                <ul class="list-unstyled" style="margin: 20px auto;">
                    <li> <a href="#">In Ear</a></li>
                    <li> <a href="#">On Ear</a></li>
                    <li> <a href="#">True Wireless</a></li>
                </ul>
            </div>
            <!-- Brand -->
            <div class="block p-3">
                <h6 class="text-uppercase">Brand</h6>
                <hr width="100%" style="margin-left: 0;">
                <ul class="list-unstyled">
                    <li> <a href="#">AAA</a></li>
                    <li> <a href="#">BBB</a></li>
                    <li> <a href="#">CCC</a></li>
                </ul>
            </div>
            <!-- Price -->
            <div class="block p-3">
                <h6 class="text-uppercase">Price</h6>
                <hr width="100%" style="margin-left: 0;">
                <form action="">
                    <div class="form-group d-flex justify-content-center">
                        <input type="number" class="form-control mr-1" placeholder="0" min="0">
                        <input type="number" class="form-control ml-1" placeholder="100000">
                    </div>
                    <div class="form-group justify-content-center">
                        <input type="submit" class="form-control btn btn-dark" value="Filter" style="color: black;">
                    </div>
                </form>
            </div>
            <!-- Sorted By -->
            <div class="block p-3">
                <h6 class="text-uppercase">Sorted By</h6>
                <hr width="100%" style="margin-left: 0;">
                <ul class="list-unstyled">
                    <li> <a href="#"><i class="fas fa-sort-amount-down-alt"></i> Price Increase</a></li>
                    <li> <a href="#"><i class="fas fa-sort-amount-down"></i> Price Descending</a></li>
                    <li> <a href="#"><i class="fas fa-sort-alpha-down"></i> A - Z</a></li>
                    <li> <a href="#"><i class="fas fa-sort-alpha-down-alt"></i> Z - A</a></li>
                </ul>
            </div>
        </div>
        <!-- /Sidebara end-->
        <!-- Content -->
        <div class="col-xl-9 col-lg-8">
            <!-- Row 1 -->
            <div class="row product_list">
                <div class="col-xl-4">
                    <div class="product_grid card-body card">
                        <div class="product_image">
                            <a href="" class="image ">
                                <img class="pic_1 rounded" src="{{url("img/headphone-slider1.png")}}" alt="">
                                <img class="pic_2 rounded" src="{{url("img/headphone-slider2.png")}}" alt="">
                            </a>
                        </div>
                        <div class="product_content">
                            <h3 class="title"><a href="#">Heaphone TinyHub</a></h3>
                            <div class="price">$18.50</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="product_grid card-body card">
                        <div class="product_image">
                            <a href="" class="image ">
                                <img class="pic_1 rounded" src="{{url("img/headphone-slider1.png")}}" alt="">
                                <img class="pic_2 rounded" src="{{url("img/headphone-slider2.png")}}" alt="">
                            </a>
                        </div>
                        <div class="product_content">
                            <h3 class="title"><a href="#">Heaphone TinyHub</a></h3>
                            <div class="price">$18.50</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="product_grid card-body card">
                        <div class="product_image">
                            <a href="" class="image ">
                                <img class="pic_1 rounded" src="{{url("img/headphone-slider1.png")}}" alt="">
                                <img class="pic_2 rounded" src="{{url("img/headphone-slider2.png")}}" alt="">
                            </a>
                        </div>
                        <div class="product_content">
                            <h3 class="title"><a href="#">Heaphone TinyHub</a></h3>
                            <div class="price">$18.50</div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
                <!-- Row 2 -->
                <!-- <div class="row product_list"> -->
                <div class="col-xl-4">
                    <div class="product_grid card-body card">
                        <div class="product_image">
                            <a href="" class="image ">
                                <img class="pic_1 rounded" src="{{url("img/headphone-slider1.png")}}" alt="">
                                <img class="pic_2 rounded" src="{{url("img/headphone-slider2.png")}}" alt="">
                            </a>
                        </div>
                        <div class="product_content">
                            <h3 class="title"><a href="#">Heaphone TinyHub</a></h3>
                            <div class="price">$18.50</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="product_grid card-body card">
                        <div class="product_image">
                            <a href="" class="image ">
                                <img class="pic_1 rounded" src="{{url("img/headphone-slider1.png")}}" alt="">
                                <img class="pic_2 rounded" src="{{url("img/headphone-slider2.png")}}" alt="">
                            </a>
                        </div>
                        <div class="product_content">
                            <h3 class="title"><a href="#">Heaphone TinyHub</a></h3>
                            <div class="price">$18.50</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="product_grid card-body card">
                        <div class="product_image">
                            <a href="" class="image ">
                                <img class="pic_1 rounded" src="{{url("img/headphone-slider1.png")}}" alt="">
                                <img class="pic_2 rounded" src="{{url("img/headphone-slider2.png")}}" alt="">
                            </a>
                        </div>
                        <div class="product_content">
                            <h3 class="title"><a href="#">Heaphone TinyHub</a></h3>
                            <div class="price">$18.50</div>
                        </div>
                    </div>
                </div>
                <!-- Row 3 -->
                <!-- <div class="row product_list"> -->
                <div class="col-xl-4">
                    <div class="product_grid card-body card">
                        <div class="product_image">
                            <a href="" class="image ">
                                <img class="pic_1 rounded" src="{{url("img/headphone-slider1.png")}}" alt="">
                                <img class="pic_2 rounded" src="{{url("img/headphone-slider2.png")}}" alt="">
                            </a>
                        </div>
                        <div class="product_content">
                            <h3 class="title"><a href="#">Heaphone TinyHub</a></h3>
                            <div class="price">$18.50</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="product_grid card-body card">
                        <div class="product_image">
                            <a href="" class="image ">
                                <img class="pic_1 rounded" src="{{url("img/headphone-slider1.png")}}" alt="">
                                <img class="pic_2 rounded" src="{{url("img/headphone-slider2.png")}}" alt="">
                            </a>
                        </div>
                        <div class="product_content">
                            <h3 class="title"><a href="#">Heaphone TinyHub</a></h3>
                            <div class="price">$18.50</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="product_grid card-body card">
                        <div class="product_image">
                            <a href="" class="image ">
                                <img class="pic_1 rounded" src="{{url("img/headphone-slider1.png")}}" alt="">
                                <img class="pic_2 rounded" src="{{url("img/headphone-slider2.png")}}" alt="">
                            </a>
                        </div>
                        <div class="product_content">
                            <h3 class="title"><a href="#">Heaphone TinyHub</a></h3>
                            <div class="price">$18.50</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Content end -->
    </div>
</div>
@endsection
