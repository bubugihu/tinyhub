@extends('users.layout.layout')
@section('title', 'Report Product - Tinyhub')
@section('content')
<div class="hero hero-page padding-small">
  <div class="container">
    <div class="row d-flex">
      <div class="col-lg-9 ">
        <h1>Report Category And Brand</h1>
        </p>
      </div>
    </div>
  </div>
</div>
<div class="container" style="margin-top: 20px">
  <div class="row">
    @foreach($product as $product)
    <div class="col-md-6">
      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="align-middle">{{$product->id}}</th>
            <td class="align-middle">{{$product->category_name}}</td>
            <td class="align-middle">$ {{$product->description}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Feature</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="align-middle">{{$product->id}}</th>
            <td class="align-middle"><img src="{{asset('img/feature/'.$product->brand_image)}}" alt="" width="70px"></td>
            <td class="align-middle">{{$product->brand_name}}</td>
            <td class="align-middle">{{$product->description}}</td>
          </tr>
        </tbody>
      </table>
    </div>
    @endforeach
  </div>
</div>
@endsection