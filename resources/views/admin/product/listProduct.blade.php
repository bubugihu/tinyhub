@extends('admin.layout.layout')
@section('title', 'product list')
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
              <table class="table card-text text-center">
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

                  @foreach($product as $product)
                  <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td><img src="{{asset('img/feature/'.$product->feature_image)}}" alt=""></td>
                    <td>{{$product->product_title}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->sold_out}}</td>
                    <td>{{$product->status}}</td>
                    <td>{{$product->created_product}}</td>
                    <td>
                      <a href="#Modal-Product-Details{{$product->id}}" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                      <!-- Modal Details Customer -->
                      <div id="Modal-Product-Details{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Details Product</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="container">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="row">
                                      <div class="col-md-6"><img src="" alt="feature"></div>
                                      <div class="col-md-6">
                                        <div class="col"><img src="" alt="gallery1"></div>
                                        <div class="col"><img src="" alt="gallery2"></div>
                                        <div class="col"><img src="" alt="gallery3"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label class="form-control-label text-uppercase">Product ID</label>
                                          <input type="text" class="form-control" placeholder="">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label class="form-control-label text-uppercase">Product Title</label>
                                          <input type="text" class="form-control" placeholder="">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label class="form-control-label text-uppercase">Status</label>
                                          <input type="text" class="form-control" placeholder="">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Price</label>
                                      <input type="text" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Create At</label>
                                      <input type="text" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Sold_out</label>
                                      <input type="text" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Warranty Period</label>
                                      <input type="text" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Category Name</label>
                                      <input type="text" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Brand Name</label>
                                      <input type="text" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Short Description</label>
                                      <textarea name="" id="" class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Long Description</label>
                                      <textarea name="" id="" class="form-control"></textarea>
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
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection