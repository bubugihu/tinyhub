@extends('admin.layout.layout')
@section('title', 'Product List - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">Product List</h6>
              </div>
              <div class="card-body">
                @if(Session::has('flash_message'))
                  <div class="alert alert-{!! Session::get('flash_level') !!}">
                      {!!Session::get('flash_message')!!}
                  </div>
                @endif 
                <table class="table card-text" id="dbtable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Image</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Sold out</th>
                      <th>Status</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($products as $product)
                    <tr>
                      <th scope="row">{{$product->id}}</th>
                      <td><img src="{{asset('img/feature/'.$product->feature_image)}}" alt="" width="60"></td>
                      <td>{{$product->product_title}}</td>
                      <td>{{$product->price}}</td>
                      <td>{{$product->sold_out}}</td>
                      <td>{{$product->status}}</td>
                      <td>{{$product->created_at}}</td>
                      <td><a href="#" class="badge badge-info p-2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                        <a href="{{url("admin/product/updateProduct/" . $product->id)}}" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                      <a href="" class="badge badge-danger p-2" data-toggle="modal"  data-target="#a{{$product->id}}"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a>
                      <div id="a{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="deletecategory" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                          <div role="document" class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                              <h4 id="deletecategory" class="modal-title">Delete Product</h4>
                                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                              </div>
                              <div class="modal-body text-center">
                                <h2>Are you sure you want to delete?</h2>
                              </div>
                              <div class="modal-footer">
                                <a href="{{url("admin/product/deleteProduct/" . $product -> id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table><br>
                <nav aria-label="Page navigation">
                  {{ $products->links() }}
                </nav>
              </div>
               <!-- Modal Delete Category -->
               
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
  @endsection
