@extends('users.layout.layout')
@section('title', 'Report Product - Tinyhub')
@section('content')
<div class="hero hero-page padding-small">
  <div class="container">
    <div class="row d-flex">
      <div class="col-lg-9 ">
        <h1>Report Product</h1>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="container" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-12">
      <table class="table text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Feature</th>
            <th scope="col">Product Title</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Brand</th>
            <th scope="col">Sold Out</th>
            <th scope="col">Warranty Period</th>
            <th scope="col">Create At</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <th scope="row" class="align-middle">{{$product->id}}</th>
            <td class="align-middle"><img src="{{asset('img/feature/'.$product->feature_image)}}" alt="" width="70px"></td>
            <td class="align-middle">{{$product->product_title}}</td>
            <td class="align-middle">$ {{$product->price}}</td>
            <td class="align-middle">{{$product->category_name}}</td>
            <td class="align-middle">{{$product->brand_name}}</td>
            <td class="align-middle">{{$product->sold_out}}</td>
            <td class="align-middle">{{$product->warranty_period}}</td>
            <td class="align-middle">{{$product->created_at}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <br>
  <div class="row py-3">
    <div class="col-md-12 justify-content-end">
      {{ $products->links() }}
    </div>
  </div>
</div>
@endsection