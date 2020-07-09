@extends('users.layout.layout')
@section('title', 'Category - Tinyhub')
@section('content')

<!-- Product Title -->
<div class="hero hero-page padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-12">
                <h1>Product Categories</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ Breadcrumbs::render('category') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Sidebara-->
        <div class="sidebara col-xl-3 col-lg-4" style="margin: 28px 0 0 0;">
                <!-- Headphone Type -->
                <div class="form-group">
                    <h6 class="text-uppercase">Headphone Type</h6>
                    <hr width="100%" style="margin-left: 0;">
                    
                    @foreach($categoryGlobal as $c)
                    <h6><i class="fas fa-chevron-right"></i>&nbsp; <a class="filter-li btn btn-outline-dark btn-sm" href="{{url('searchCate/'.$c->category_name)}}">{{$c->category_name}}</a></h6><br/>
                    @endforeach
    
                </div>
                <!-- Brand -->
                <div class="form-group">
                    <h6 class="text-uppercase">Brand</h6>
                    <hr width="100%" style="margin-left: 0;">

                    @foreach($brandGlobal as $b)
                    <h6><i class="fas fa-chevron-right"></i> &nbsp;<a class="filter-li btn btn-outline-dark btn-sm" href="{{url('searchBrand/'.$b->brand_name)}}">{{$b->brand_name}}</a></h6><br/>
                    @endforeach

                </div>
                <!-- Sorted By -->
                <form action="{{url('category/search')}}" method="POST">
                    @csrf
                <div class="form-group">
                    <h6 class="text-uppercase">Sorted By</h6>
                    <hr width="100%" style="margin-left: 0;">
                    <select class="form-control" id="sortedBy" name="SortBy">
                        <option value="0" >Select sorting function</option>
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
                <!-- Button Filter -->
                <div class="form-group d-flex justify-content-center">
                    <button type="submit" class="form-control btn login-btn">Filter</button>
                </div>
            </form>
        </div>
        <!-- /Sidebara end-->
        <!-- Content -->
        <div class="col-xl-9 col-lg-8">
            <!-- Row 1 -->
            @if($message != 'a')
            <div class="alert alert-danger mt-5">
              <h5 class="text-center">{{$message}}</h5>
            </div>
            @endif 
            <div class="row product_list d-flex justify-content-center">
                @foreach($products as $product)
                <div class="col-xl-4">
                    <div class="product_grid card-body card d-flex justify-content-center align-items-center">
                        <div class="product_image d-flex justify-content-center align-items-center" style="min-height: 220px;">
                            <a href="{{ url('product-detail/'.$product->id)}}" class="image ">
                                <!-- <img class="pic_2 rounded" src="img/5.jpg" alt=""> -->
                                <img class="img-fluid rounded" src="{{asset("img/feature/$product->feature_image")}}" alt="" width="200" height="auto">
                            </a>
                        </div>
                        <div class="product_content">
                            <h3 class="title"><a href="{{ url('product-detail/'.$product->id)}}">{{$product->product_title}}</a></h3>
                            <div class="price">$ {{$product->price}}</div>
                            <a href="{{ url('product-detail/'.$product->id)}}" class="btn btn-dark"><i class="fas fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div><br>
            <div class="row py-3">
                <div class="col-md-12 justify-content-end">
                        {{ $products->links() }}
                </div>
            </div>
        </div>
        <!-- /Content end -->
    </div>
</div>
@endsection