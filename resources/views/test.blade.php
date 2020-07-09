@extends('users.layout.layout')
@section('title', 'Product Details')
@section('content')
<!-- Product Details -->
<div class="container product_details py-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-lg-6" style="border: solid 1px black;">
            <div class="product-slider">
                <div id="CarouselProduct" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item  active"> <img class="rounded" src="img/1.jpg" height="auto" width="90%"> </div>
                        <div class="carousel-item "> <img class="rounded" src="img/2.jpg" height="auto" width="90%"> </div>
                        <div class="carousel-item "> <img class="rounded" src="img/3.jpg" height="auto" width="90%"> </div>
                        <div class="carousel-item "> <img class="rounded" src="img/4.jpg" height="auto" width="90%"> </div>
                        <div class="carousel-item "> <img class="rounded" src="img/5.jpg" height="auto" width="90%"> </div>
                    </div>
                </div>
                <div id="ThumbProduct" class="carousel slide" data-interval="false">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div data-target="#CarouselProduct" data-slide-to="0" class="SubThumbProduct rounded"><img src="img/1.jpg" class="rounded"></div>
                            <div data-target="#CarouselProduct" data-slide-to="1" class="SubThumbProduct rounded"><img src="img/2.jpg" class="rounded"></div>
                            <div data-target="#CarouselProduct" data-slide-to="2" class="SubThumbProduct rounded"><img src="img/3.jpg" class="rounded"></div>
                            <div data-target="#CarouselProduct" data-slide-to="3" class="SubThumbProduct rounded"><img src="img/4.jpg" class="rounded"></div>
                            <div data-target="#CarouselProduct" data-slide-to="4" class="SubThumbProduct rounded"><img src="img/5.jpg" class="rounded"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Info-->
        <div class="col-lg-6">
            <div class="row">
                <p class="product_cate"><a href="#">dsfsdfsd</a></p>
            </div>
            <div class="row">
                <p class="product_name">sdfsdf</p>
            </div>
            <div class="row">
                <p class="product_cate">Brand: <a href="#">sdfsdfds</a></p>
            </div>
            <div class="row">
                <p class="product_price">$ asdasd</p>
            </div>
            <div class="row">
                <p class="product_description">asdasdas</p>
            </div>
        </div>
    </div>
</div>
@endsection