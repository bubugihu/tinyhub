@extends('users.layout.layout')
@section('title', 'Product Details - Tinyhub')
@section('content')
<!-- Product Title: Peoduct Details -->
<div class="hero hero-page padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-12">
                <h1>Product Details</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ Breadcrumbs::render('product-detail', $product) }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Details -->
<div class="container product_details py-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-lg-6">
            <div id="CarouselProduct" class="carousel slide" data-ride="carousel" style="max-width: 100%; max-height: auto;">
                <div class="carousel-inner">
                    <div class="carousel-item  active"> <img class="rounded" src="{{asset('img/feature/'.$product->feature_image)}}" height="auto" width="90%"> </div>
                    @foreach($galleryFea as $galleryFea)
                    <div class="carousel-item"> <img class="rounded" src="{{asset('img/gallery/'.$galleryFea->product_gallery)}}" height="auto" width="90%"> </div>
                    @endforeach
                </div>
            </div>
            <div class="product-slider">
                <div id="ThumbProduct" class="carousel slide" data-interval="false">
                    <div class="carousel-inner">
                        <div class="item active">
                            @foreach($galleryThum as $galleryThum)
                            <div data-target="#CarouselProduct" data-slide-to="{{++$no}}" class="SubThumbProduct rounded">
                                <img src="{{asset('img/gallery/'.$galleryThum->product_gallery)}}" class="rounded" width="50px" height="50px">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Info-->
        <div class="col-lg-6">
            <div class="row">
                <p class="product_cate"><a href="{{url('searchCate/'.$category->category_name)}}">{{$category->category_name}}</a></p>
            </div>
            <div class="row">
                <p class="product_name text-uppercase">{{$product->product_title}}</p>
            </div>
            <div class="row">
                <p class="product_cate mb-3">Brand: <a href="{{url('searchBrand/'.$brand->brand_name)}}">{{$brand->brand_name}}</a></p>
            </div>
            <div class="row">
                <p class="product_price mb-3">${{$product->price}}</p>
            </div>
            <div class="row">
                <p class="product_description">{{$product->short_descriptions}}</p>
            </div>

            {{--Form Cart--}}
            <form action="{{url('cart/addCart/'.$product->id)}}" method="POST">
                @csrf
                <div class="row d-flex justify-content-around align-items-center py-4">
                    <div class=" col-md-3 quantity d-flex align-items-center justify-content-center">
                        <button type="button" class="dec-btn" onclick="decre()">-</button>
                        <input type="number" id="1" value="{{$quantity}}" name="quantityNumber" min="1" max="20" class="quantity-no rounded">
                        <button type="button" class="inc-btn" onclick="incre()">+</button>
                    </div>
                    <div class="col-md-5">
                        <button type="submit" class="btn btn-dark wide btn-md btn-block"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                    </div>
            </form>
            {{--End Form--}}
            {{--Form--}}
            <form action="{{url('cart/shopping')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="idProduct" value="{{$product->id}}">
                <input type="number" id="2" name="addQuantity" style="display:none" min="1" max="20" value="{{$quantity}}">
                <button type="submit" class="btn btn-success wide btn-md btn-block"><b>Buy Now</b></button>

            </form>
            {{--End Form--}}
        </div>
        <div class="row">
            <div class="col-lg-6 py-3">
                <h6 class="text-uppercase" style="font-size: 12px"><i class="fas fa-truck"></i> SHIPPING & DELIVERY</h6>
                <ul class="list-unstyled list-detail-prd">
                    <li><i class="fas fa-check-circle" style="color: green;"></i> Free Shipping Over $30</li>
                    <li><i class="fas fa-check-circle" style="color: green;"></i> Ships in 24 Hours</li>
                    <li><i class="fas fa-check-circle" style="color: green;"></i> 24 Months Warranty</li>
                </ul>
            </div>
            <div class="col-lg-6 py-3">
                <h6 class="text-uppercase" style="font-size: 12px"><i class="fas fa-exchange-alt"></i> RETURNS</h6>
                <ul class="list-unstyled list-detail-prd">
                    <li><i class="fas fa-check-circle" style="color: green;"></i> 7 Days Replacement Only</li>
                    <li><i class="fas fa-check-circle" style="color: green;"></i> Certified By TinyHub</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Product Description-->
<div class="container product-description bg-white card mb-5">
    <div class="row py-3">
        <div class="col ">
            <ul class="nav nav-pills d-flex justify-content-center">
                <li class="nav-item"><a data-toggle="tab" href="#description" class="nav-link active" aria-selected="true" style="margin-right: 15px;">Description</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#reviews" class="nav-link" aria-selected="false" style="margin-left: 15px;">Reviews</a></li>
            </ul>
            <div class="tab-content">
                <div id="description" class="tab-pane active">
                    <p>{!! $product->long_descriptions !!}</p>
                </div>
                <div id="reviews" class="tab-pane">
                    @foreach($comment as $comment)
                    <div class="row review d-flex justify-content-center">
                        <div class="col-3 text-center"><img src="{{asset("img/$comment->feature")}}" alt="{{$comment->name}}" class="review-image"><span>{{$comment->created_at}}</span></div>
                        <div class="col-9 review-text" style="padding-right: 65px;">
                            <h6>{{$comment->name}}</h6>
                            <hr width="100%">
                            <p>{{$comment->cmt_content}}</p>
                        </div>
                    </div>
                    @endforeach
                    @guest
                    <div class="row review d-flex justify-content-center">
                        <div class="col-12 text-center">You want to comment ?? <a href="{{url('checkComment/'.$product->id)}}">Login now.</a></div>
                    </div>
                    @endguest
                    @auth
                    <div class="row review d-flex justify-content-center">
                        <div class="col-3 text-center"><img src="{{asset("img/$customer")}}" alt="{{Auth::user()->name}}" class="review-image"><span></span></div>
                        <div class="col-9 review-text" style="padding-right: 65px;">
                            <form role="form" action="{{url('users/product/createCommentUser/'.$product->id.'/'. Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div>
                                    <h6>{{Auth::user()->name}}</h6>
                                    <hr width=" 100%">
                                </div>
                                <div class="form-group">
                                    <textarea name="postComment" id="" class="form-control" placeholder="Looks like you want to share something ?"></textarea>
                                </div>
                                <div class="form-group d-flex justify-content-start">
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
<!-- Product Title: You May Also Like -->
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
<!-- Similar Product -->
<div class="container">
    <div class="row py-5">
        @if($similar->count() == 0)
        @foreach($best as $best)
        <div class="col-xl-3">
            <div class="product_grid card-body card d-flex justify-content-center align-items-center">
                <div class="product_image d-flex justify-content-center align-items-center" style="min-height: 220px;">
                    <a href="{{ url('product-detail/'.$best->id)}}" class="image ">
                        <!-- <img class="pic_2 rounded" src="img/5.jpg" alt=""> -->
                        <img class="img-fluid rounded" src="{{asset("img/feature/$best->feature_image")}}" alt="" width="200" height="auto">
                    </a>
                </div>
                <div class="product_content">
                    <h3 class="title"><a href="{{ url('product-detail/'.$best->id)}}">{{$best->product_title}}</a></h3>
                    <div class="price">$ {{$best->price}}</div>
                    <a href="{{ url('product-detail/'.$best->id)}}" class="btn btn-dark"><i class="fas fa-shopping-cart"></i> Add to cart</a>
                </div>
            </div>
          </div>
        @endforeach
        @else
        @foreach($similar as $similar)
        <div class="col-xl-3">
            <div class="product_grid card-body card d-flex justify-content-center align-items-center">
                <div class="product_image d-flex justify-content-center align-items-center" style="min-height: 220px;">
                    <a href="{{ url('product-detail/'.$similar->id)}}" class="image ">
                        <!-- <img class="pic_2 rounded" src="img/5.jpg" alt=""> -->
                        <img class="img-fluid rounded" src="{{asset("img/feature/$similar->feature_image")}}" alt="" width="200" height="auto">
                    </a>
                </div>
                <div class="product_content">
                    <h3 class="title"><a href="{{ url('product-detail/'.$similar->id)}}">{{$similar->product_title}}</a></h3>
                    <div class="price">$ {{$similar->price}}</div>
                    <a href="{{ url('product-detail/'.$similar->id)}}" class="btn btn-dark">Detail <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
<!--  -->
<script>
    function incre() {
        document.getElementById("1").stepUp(1);
        document.getElementById("2").stepUp(1);
    }

    function decre() {
        document.getElementById("1").stepDown(1);
        document.getElementById("2").stepDown(1);
    }
</script>
<!-- Slider -->
<script>
    $(document).ready(function() {
        $("#content-slider").lightSlider({
            loop: true,
            keyPress: true
        });
        $('#image-gallery').lightSlider({
            gallery: true,
            item: 1,
            thumbItem: 9,
            slideMargin: 0,
            speed: 500,
            auto: true,
            loop: true,
            onSliderLoad: function() {
                $('#image-gallery').removeClass('cS-hidden');
            }
        });
    });
</script>
@endsection