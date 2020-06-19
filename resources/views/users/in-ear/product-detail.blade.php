@extends('users.layout.layout')
@section('title', 'Product Details')
@section('content')
<div class="container product_details py-5">
    <div class="row">
        <!-- Hình sản phẩm -->
        <div class="col-lg-6">
            <div class="product-slider">
                <div id="CarouselProduct" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item  active"> <img class="rounded" src="{{url("img/headphone-slider2.png")}}" height="auto" width="90%"> </div>
                        <div class="carousel-item "> <img class="rounded" src="{{url("img/headphone-slider1.png")}}" height="auto" width="90%"> </div>
                        <div class="carousel-item "> <img class="rounded" src="{{url("img/headphone-slider2.png")}}" height="auto" width="90%"> </div>
                        <div class="carousel-item "> <img class="rounded" src="{{url("img/headphone-slider1.png")}}" height="auto" width="90%"> </div>
                        <div class="carousel-item "> <img class="rounded" src="{{url("img/headphone-slider2.png")}}" height="auto" width="90%"> </div>
                    </div>
                </div>
                <div id="ThumbProduct" class="carousel slide" data-interval="false">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div data-target="#CarouselProduct" data-slide-to="0" class="SubThumbProduct rounded"><img src="{{url("img/headphone-slider2.png")}}" class="rounded"></div>
                            <div data-target="#CarouselProduct" data-slide-to="1" class="SubThumbProduct rounded"><img src="{{url("img/headphone-slider1.png")}}" class="rounded"></div>
                            <div data-target="#CarouselProduct" data-slide-to="2" class="SubThumbProduct rounded"><img src="{{url("img/headphone-slider2.png")}}" class="rounded"></div>
                            <div data-target="#CarouselProduct" data-slide-to="3" class="SubThumbProduct rounded"><img src="{{url("img/headphone-slider1.png")}}" class="rounded"></div>
                            <div data-target="#CarouselProduct" data-slide-to="4" class="SubThumbProduct rounded"><img src="{{url("img/headphone-slider2.png")}}" class="rounded"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Thông tin sản phẩm -->
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
                    <div class="dec-btn">-</div>
                    <input type="text" value="1" class="quantity-no rounded">
                    <div class="inc-btn">+</div>
                </div>
                <div class="col-md-5">
                    <a href="#" class="btn btn-success wide btn-md btn-block"><b>Buy Now</b></a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="btn btn-outline-primary wide btn-md btn-block"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 py-3">
                    <h6 class="text-uppercase"><i class="fas fa-truck"></i> SHIPPING & DELIVERY</h6>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle" style="color: green;"></i> Free Shipping Over $300</li>
                        <li><i class="fas fa-check-circle" style="color: green;"></i> Ships in 24 Hours</li>
                        <li><i class="fas fa-check-circle" style="color: green;"></i> 24 Months Warranty</li>
                    </ul>
                </div>
                <div class="col-lg-6 py-3">
                    <h6 class="text-uppercase"><i class="fas fa-exchange-alt"></i> RETURNS</h6>
                    <ul class="list-unstyled">
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
            <ul class="nav nav-tabs">
                <li class="nav-item"><a data-toggle="tab" href="#description" class="nav-link active" aria-selected="true">Description</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#additional-information" class="nav-link" aria-selected="false">Additional Information</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#reviews" class="nav-link" aria-selected="false">Reviews</a></li>
            </ul>
            <div class="tab-content">
                <div id="description" class="tab-pane active">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LOLUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. LOLDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LOLUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. LOLDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div id="additional-information" class="tab-pane">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th class="border-0">Material:</th>
                                <td class="border-0">Cotton</td>
                            </tr>
                            <tr>
                                <th>Styles:</th>
                                <td>Casual</td>
                            </tr>
                            <tr>
                                <th>Properties:</th>
                                <td>Short Sleeve</td>
                            </tr>
                            <tr>
                                <th>Brand:</th>
                                <td>Calvin Klein</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="reviews" class="tab-pane">
                    <div class="row review">
                        <div class="col-3 text-center"><img src="img/na.jpg" alt="Na Nguyen" class="review-image"><span>Dec 2018</span></div>
                        <div class="col-9 review-text">
                            <h6>Na Nguyen</h6>
                            <hr width="100%">
                            <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections</p>
                        </div>
                    </div>
                    <div class="row review">
                        <div class="col-3 text-center"><img src="img/quang.jpg" alt="Quang Dang" class="review-image"><span>Dec 2018</span></div>
                        <div class="col-9 review-text">
                            <h6>Quang Dang</h6>
                            <hr width="100%">
                            <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream.</p>
                        </div>
                    </div>
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
@endsection
