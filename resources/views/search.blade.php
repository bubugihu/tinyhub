@extends('users.layout.layout')
@section('title', 'Search')
@section('content')
<div class="hero hero-page padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 ">
                <h1>Search</h1>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 20px">
  
  <div class="row">  
    @foreach( $product as $product)
    <div class="col-3 border">
      <div class="row">
        <img src="{{asset("img/feature/$product->feature_image")}}" alt="">
      </div>
      <div class="row">
        {{$product->product_title}}
      </div>
      <div class="row">
        {{$product->price}}
      </div>
    </div>
    @endforeach
  </div>
 

</div>
@endsection


