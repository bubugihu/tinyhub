@extends('users.layout.layout')
@section('title', 'Search - Tinyhub')
@section('content')
    <div class="hero hero-page padding-small">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-12">
                    <h1>Search</h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{ Breadcrumbs::render('search') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="hm-2">
        <div class="container">
            <div class="row inner-box py-4">
                <div class="col-md-12">
                    <h5 class="pull-left">Found {{count($product)}} products</h5>
                    <hr>
                </div>
            </div>
            <div class="row inner-box py-3">
                @foreach($product as $new)
                <div class="col-xl-3">
                    <div class="product_grid card-body card d-flex justify-content-center align-items-center">
                        <div class="product_image d-flex justify-content-center align-items-center" style="min-height: 220px;">
                            <a href="{{ url('product-detail/'.$new->id)}}" class="image ">
                                <!-- <img class="pic_2 rounded" src="img/5.jpg" alt=""> -->
                                <img class="img-fluid rounded" src="{{asset("img/feature/$new->feature_image")}}" alt="" width="200" height="auto">
                            </a>
                        </div>
                        <div class="product_content">
                            <h3 class="title"><a href="{{ url('product-detail/'.$new->id)}}">{{$new->product_title}}</a></h3>
                            <div class="price">$ {{$new->price}}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
