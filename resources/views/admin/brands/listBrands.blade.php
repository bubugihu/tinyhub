@extends('admin.layout.layout')
@section('title', 'Brands')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">Brands List</h6>
              </div>
              <div class="card-body">
                <table class="table card-text">
                  <thead>
                    <tr>
                      <th>Brand ID</th>
                      <th>Brand Image</th>
                      <th>Brand Name</th>
                      <th>Brand Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($brand as $brand)
                    <tr>
                      <th scope="row">{{$brand->id}}</th> 
                      <td><img src="{{asset($brand->brand_image)}}" alt=""></td>
                      <td>{{$brand->brand_name}}</td>
                      <td>{{$brand->description}}</td>
                      <td>
                        <a href="#" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                        <a href="#" class="badge badge-danger p-2"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
