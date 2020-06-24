@extends('users.layout.layout')
@section('content')
    <div class="hero hero-page padding-small">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9 ">
                    <h1>Search</h1>
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
                    <div class="col-md-3">
                        <div class="item-hp card-body card mb-3">
                            <img src="img/feature/{{$new->feature_image}}" alt="" class="img-fluid" width="300">
                            <div class="item-pd-info m-2">
                                <h6 class="no-margin">{{$new->product_title}}</h6>
                                <p class="price-dt">$ {{$new->price}}</p>
                                <a href="#" class="cart-btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href="#"><button class="buynow">BUY NOW</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
