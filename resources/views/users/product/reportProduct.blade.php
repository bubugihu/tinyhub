@extends('users.layout.layout')
@section('title', 'Report Product')
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
  <table class="table text-center">
    <thead>
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
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($product as $product)
      <tr>
        <th scope="row" class="align-middle">{{$product->id}}</th>
        <td class="align-middle"><img src="{{asset('img/feature/'.$product->feature_image)}}" alt="" width="70px"></td>
        <td class="align-middle">{{$product->product_title}}</td>
        <td class="align-middle">$ {{$product->price}}</td>
        <td class="align-middle">{{$product->category_name}}</td>
        <td class="align-middle">{{$product->brand_name}}</td>
        <td class="align-middle">{{$product->sold_out}}</td>
        <td class="align-middle">{{$product->warranty_period}}</td>
        <td class="align-middle">{{$product->create_product}}</td>
        <td class="align-middle">
          <a href="#Modal-Product-Description{{$product->id}}" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
          <!-- Modal Description Product -->
          <div id="Modal-Product-Description{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
            <div role="document" class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 id="exampleModalLabel" class="modal-title">Description</h4>
                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea name="" id="" class="form-control" placeholder="{{$product->long_descriptions}}" readonly rows="10"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection