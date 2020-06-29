@extends('users.layout.layout')
@section('title', 'Product Details')
@section('content')
<div class="hero hero-page padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 ">
                <h1>Product Details</h1>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container product_details py-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-lg-6">
            <div class="product-slider">
            </div>
        </div>
        <!-- Product Info-->
        <div class="col-lg-6">
            <div class="row">
                <p class="product_cate"><a href="#">In Ear</a></p>
            </div>
            <div class="row">
                <p class="product_name">RHA - S500 Universal</p>
            </div>
            <div class="row">
                <p class="product_price">$65.00</p>
            </div>
            <div class="row">
                <p class="product_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
            </div>
            <div class="row d-flex justify-content-around align-items-center py-4">
                <div class=" col-md-3 quantity d-flex align-items-center justify-content-center">
                    <!-- <button type="button" class="dec-btn" onclick="decre()">-</button>
                        <input type="number" value="1" class="quantity-no rounded" id="quantity_product_details">
                        <button type="button" class="inc-btn" onclick="incre()">+</button> -->
                    <div class="quantity d-flex align-items-center">
                        <button class="dec-btn" onclick="decre()">-</button>
                        <input type="number" value="0" class="quantity-no" id="quantity_product_details" min="0">
                        <button class="inc-btn" onclick="incre()">+</button>
                    </div>
                </div>
                <div class="col-md-5">
                    <a href="#" class="btn btn-success wide btn-md btn-block"><b>Buy Now</b></a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="btn btn-dark wide btn-md btn-block"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 py-3">
                    <h6 class="text-uppercase"><i class="fas fa-truck"></i> SHIPPING & DELIVERY</h6>
                    <ul class="list-unstyled list-detail-prd">
                        <li><i class="fas fa-check-circle" style="color: green;"></i> Free Shipping Over $300</li>
                        <li><i class="fas fa-check-circle" style="color: green;"></i> Ships in 24 Hours</li>
                        <li><i class="fas fa-check-circle" style="color: green;"></i> 24 Months Warranty</li>
                    </ul>
                </div>
                <div class="col-lg-6 py-3">
                    <h6 class="text-uppercase"><i class="fas fa-exchange-alt"></i> RETURNS</h6>
                    <ul class="list-unstyled list-detail-prd">
                        <li><i class="fas fa-check-circle" style="color: green;"></i> 7 Days Replacement Only</li>
                        <li><i class="fas fa-check-circle" style="color: green;"></i> Certified By TinyHub</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container product-description bg-white card mb-5">
    <div class="row py-3">
        <div class="col m-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a data-toggle="tab" href="#description" class="nav-link active" aria-selected="true">Description</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#reviews" class="nav-link" aria-selected="false">Reviews</a></li>
            </ul>
            <div class="tab-content">
                <div id="description" class="tab-pane active">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LOLUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. LOLDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LOLUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. LOLDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div id="reviews" class="tab-pane">
                    @foreach($comments as $comments)
                    <div class="row review">
                        <div class="col-3 text-center"><img src="img/na.jpg" alt="Na Nguyen" class="review-image"><span>Dec 2018</span></div>
                        <div class="col-9 review-text">
                            <h6>{{$comments->name}}</h6>
                            <hr width="100%">
                            <p>{{$comments->cmt_content}}</p>
                        </div>
                    </div>
                    @endforeach
                    @auth
                    <div class="row review">
                        <div class="col-3 text-center"><img src="img/quang.jpg" alt="Quang Dang" class="review-image"><span>Dec 2018</span></div>
                        <div class="col-9 review-text">
                            <form action="">
                                <div>
                                    <h6>{{Auth::user()->id}}</h6>
                                    <hr width="100%">
                                </div>
                                <div class="form-group">
                                    <textarea name="" id="" class="form-control" placeholder="Looks like you want to share something ?"></textarea>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="submit" class="btn btn-success" value="Post">
                                </div>
                            </form>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Title -->
<div class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-12">
                <h1 style="text-align: center;">You May Also Like</h1>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row py-5">
        <div class="col-xl-3">
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
        <div class="col-xl-3">
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
        <div class="col-xl-3">
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
        <div class="col-xl-3">
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
<script>
    var quantity = document.getElementById("quantity_product_details").value;
    var price = document.getElementById("price").value;
    var total = quantity * price;
    document.getElementById("total").value = total;

    function incre() {
        document.getElementById("quantity_product_details").stepUp(1);
        var quantity = document.getElementById("quantity_product_details").value;
        var price = document.getElementById("price").value;
        var total = quantity * price;
        document.getElementById("total").value = total;
    }

    function decre() {
        document.getElementById("quantity_product_details").stepDown(1);
        var quantity = document.getElementById("quantity_product_details").value;
        var price = document.getElementById("price").value;
        var total = quantity * price;
        document.getElementById("total").value = total;
    }
</script>
@endsection