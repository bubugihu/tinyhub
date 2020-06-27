@extends('users.layout.layout')
@section('title', 'Category')
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
            <form action="{{url('category/search')}}" method="POST">
                @csrf
                <!-- Headphone Type -->
                <div class="form-group">
                    <h6 class="text-uppercase">Headphone Type</h6>
                    <hr width="100%" style="margin-left: 0;">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category1" name="CateInEar" value="In Ear" >
                        <label class="custom-control-label" for="category1" >In Ear</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category2" name="CateOnEar" value="On Ear">
                        <label class="custom-control-label" for="category2">On Ear</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category3" name="CateTrueWire" value="True Wireless">
                        <label class="custom-control-label" for="category3">True Wireless</label>
                    </div>
                </div>
                <!-- Brand -->
                <div class="form-group">
                    <h6 class="text-uppercase">Brand</h6>
                    <hr width="100%" style="margin-left: 0;">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="brand1" name="BrandSony" value="Sony">
                        <label class="custom-control-label" for="brand1">Sony</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="brand2" name="BrandJBL" value="JBL">
                        <label class="custom-control-label" for="brand2">JBL</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="brand3" name="BrandWestone" value="Westone">
                        <label class="custom-control-label" for="brand3">Westone</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="brand4" name="BrandBeats" value="Beats">
                        <label class="custom-control-label" for="brand4">Beats</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="brand5" name="BrandBang" value="Bang & Olufsen">
                        <label class="custom-control-label" for="brand5">Bang & Olufsen</label>
                    </div>
                </div>
                <!-- Sorted By -->
                <div class="form-group">
                    <h6 class="text-uppercase">Sorted By</h6>
                    <hr width="100%" style="margin-left: 0;">
                    <select class="form-control" id="sortedBy" name="SortBy">
                        <option value="0">Select sorting function</option>
                        <option value="1">Price Ascending</option>
                        <option value="2">Price Descending</option>
                        <option value="3">A - Z</option>
                        <option value="4">Z - A</option>
                    </select>
                </div>
                <!-- Price -->
                <div class="form-group">
                    <h6 class="text-uppercase">Price</h6>
                    <hr width="100%" style="margin-left: 0;">
                    <div class="form-group d-flex justify-content-center">
                        <input type="number" class="form-control" value="0" min="0" style="color: black; margin-right: 10px;" name="fromPrice">
                        <input type="number" class="form-control" value="10000" max="10000" style="color: black; margin-left: 10px;" name="toPrice">
                    </div>
                </div>
                <!-- Buttom Filter -->
                <div class="form-group d-flex justify-content-center">
                    <button type="submit" class="form-control btn login-btn">Filter</button>
                </div>
            </form>
        </div>
        <!-- /Sidebara end-->
        <!-- Content -->
        <div class="col-xl-9 col-lg-8">
            <!-- Row 1 -->
            @if($message ?? '' == 'Price is invalid')
            <h2 class="text-center py-5  basket-header mt-5" style="color: #f47635" role="alert">
                <strong>{{ $message  ?? ''  }}</strong>
            </h2>
            @else
            
            <div class="row product_list">
                @foreach($product as $product)
                <div class="col-xl-4">
                    <div class="product_grid card-body card">
                        <div class="product_image">
                            <a href="{{ url('product-detail/'.$product->id)}}" class="image ">
                                <img class="pic_2 rounded" src="img/5.jpg" alt="">
                                <img class="pic_1 rounded" src="{{asset("img/feature/$product->feature_image")}}" alt="">
                            </a>
                        </div>
                        <div class="product_content">
                            <h3 class="title"><a href="{{ url('product-detail/'.$product->id)}}">{{$product->product_title}}</a></h3>
                            <div class="price">$ {{$product->price}}</div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
        <!-- /Content end -->
    </div>
</div>
@endsection