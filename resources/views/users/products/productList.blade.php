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
        <div class="sidebara col-xl-3 col-lg-4" style="margin: 28px 0 0 0;">
            <!-- Headphone Type -->
            <div class="block">
                <h6 class="text-uppercase">Headphone Type</h6>
                <hr width="100%" style="margin-left: 0;">
                <ul class="list-unstyled" style="margin: 20px auto;">
                    <li> <a href="#">In Ear</a></li>
                    <li> <a href="#">On Ear</a></li>
                    <li> <a href="#">True Wireless</a></li>
                </ul>
            </div>

            <!-- Brand -->
            <div class="block">
                <h6 class="text-uppercase">Brand</h6>
                <hr width="100%" style="margin-left: 0;">
                <ul class="list-unstyled">
                    <li> <a href="#">AAA</a></li>
                    <li> <a href="#">BBB</a></li>
                    <li> <a href="#">CCC</a></li>
                </ul>
            </div>
            <!-- Price -->
            <div class="block">
                <h6 class="text-uppercase">Price</h6>
                <hr width="100%" style="margin-left: 0;">
                <form action="">
                    <div class="form-group d-flex justify-content-center">
                        <input type="text" class="form-control" placeholder="0" min="0" style="color: black; margin-right: 10px;">
                        <input type="text" class="form-control" placeholder="100000" style="color: black; margin-left: 10px;">
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="submit" class="form-control btn btn-dark" value="Filter" style="color: black;">
                    </div>
                </form>
            </div>
            <!-- Sorted By -->
            <div class="block">
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
                        <a href="{{ url('productDetails')}}" class="image ">
                                <img class="pic_1 rounded" src="img/1.jpg" alt="">
                                <img class="pic_2 rounded" src="img/5.jpg" alt="">
                            </a>
                        </div>
                        <div class="product_content">
                            <h3 class="title"><a href="{{ url('productDetails')}}">Heaphone TinyHub</a></h3>
                            <div class="price">$18.50</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="product_grid card-body card">
                        <div class="product_image">
                            <a href="" class="image ">
                                <img class="pic_1 rounded" src="img/1.jpg" alt="">
                                <img class="pic_2 rounded" src="img/5.jpg" alt="">
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
                                <img class="pic_1 rounded" src="img/1.jpg" alt="">
                                <img class="pic_2 rounded" src="img/5.jpg" alt="">
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
                                <img class="pic_1 rounded" src="img/1.jpg" alt="">
                                <img class="pic_2 rounded" src="img/5.jpg" alt="">
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
                                <img class="pic_1 rounded" src="img/1.jpg" alt="">
                                <img class="pic_2 rounded" src="img/5.jpg" alt="">
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
                                <img class="pic_1 rounded" src="img/1.jpg" alt="">
                                <img class="pic_2 rounded" src="img/5.jpg" alt="">
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
                                <img class="pic_1 rounded" src="img/1.jpg" alt="">
                                <img class="pic_2 rounded" src="img/5.jpg" alt="">
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
                                <img class="pic_1 rounded" src="img/1.jpg" alt="">
                                <img class="pic_2 rounded" src="img/5.jpg" alt="">
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
                                <img class="pic_1 rounded" src="img/1.jpg" alt="">
                                <img class="pic_2 rounded" src="img/5.jpg" alt="">
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