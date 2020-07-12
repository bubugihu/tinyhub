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
<div class="container" style="margin-top: 30px; margin-bottom: 30px;">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-dark">
          <h2 class="text-center" style="color: white;">Report Category</h2>
        </div>
        <div class="card-body">
          <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Feature</th>
                <th scope="col">Category Name</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>
              @foreach($category as $category)
              <tr>
                <th scope="row" class="align-middle">{{$category->id}}</th>
                <td class="align-middle"><img src="{{asset('img/'.$category->category_image)}}" alt="" width="70px"></td>
                <td class="align-middle">{{$category->category_name}}</td>
                <td class="align-middle">
                  <a href="#Modal-Details-Category{{$category->id}}" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px;font-weight:100;"></i></a>
                  <div id="Modal-Details-Category{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="details_category" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                    <div role="document" class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="details_category" class="modal-title">Description Of {{$category->category_name}}</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <p>{{$category->description}}</p>
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
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-dark">
          <h2 class="text-center" style="color: white;">Report Brand</h2>
        </div>
        <div class="card-body">
          <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Feature</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>
              @foreach($brand as $brand)
              <tr>
                <th scope="row" class="align-middle">{{$brand->id}}</th>
                <td class="align-middle"><img src="{{asset('img/brands/'.$brand->brand_image)}}" alt="" width="70px"></td>
                <td class="align-middle">{{$brand->brand_name}}</td>
                <td class="align-middle">
                  <a href="#Modal-Details-Brand{{$brand->id}}" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px;font-weight:100;"></i></a>
                  <div id="Modal-Details-Brand{{$brand->id}}" tabindex="-1" role="dialog" aria-labelledby="details_brand" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                    <div role="document" class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="details_brand" class="modal-title">Description Of {{$brand->brand_name}}</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <p>{{$brand->description}}</p>
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
      </div>

    </div>

  </div>
</div>
@endsection