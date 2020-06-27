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
                      <a href="#Modal-Product-Update{{$product->id}}" class="badge badge-warning p-2" data-toggle="modal"><i class="fas fa-edit" style="font-size: 16px; font-weight:100;"></i></a>
                      <!-- Modal Update Customer -->
                      <div id="Modal-Product-Update{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Update Product</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="container">
                                <form action="" method="POST" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Product Name</label>
                                    <input type="text" placeholder="{{$product->product_title}}" class="form-control" name="prdname">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Price</label>
                                    <input type="number" placeholder="{{$product->price}}" class="form-control" min="0" max="20000" name="prdprice">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Category</label>
                                    <select name="account" class="form-control">
                                      <option>None</option>
                                      <option>In Ear</option>
                                      <option>On Ear</option>
                                      <option>True-Wireless</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Status</label><br>
                                    <div class="custom-control custom-checkbox">
                                      <input id="customCheck1" type="checkbox" class="custom-control-input" placeholder="{{$product->status}}">
                                      <label for="customCheck1" class="custom-control-label">Active</label>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Short Description</label>
                                    <textarea class="form-control ckeditor" id="exampleFormControlTextarea1" name="sdescription" rows="3" placeholder="{{$product->short_description}}"></textarea>
                                    <script>
                                      CKEDITOR.replace('sdescription', {
                                        language: 'en',
                                        uiColor: '#9AB8F3',
                                      });
                                    </script>
                                  </div>
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Long Description</label>
                                    <textarea class="form-control ckeditor" id="exampleFormControlTextarea1" name="ldescription" rows="3" placeholder="{{$product->long_description}}"></textarea>
                                    <script>
                                      CKEDITOR.replace('ldescription', {
                                        language: 'en',
                                        uiColor: '#9AB8F3'
                                      });
                                    </script>
                                  </div>
                                  <label class="form-control-label text-uppercase">Upload Feature Image</label>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                                    </div>
                                  </div>
                                  <label class="form-control-label text-uppercase">Relate Image 1</label>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                                    </div>
                                  </div>
                                  <label class="form-control-label text-uppercase">Relate Image 2</label>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                                    </div>
                                  </div>
                                  <label class="form-control-label text-uppercase">Relate Image 3</label>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                                    </div>
                                  </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <div class="form-group d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark" style="margin-right: 10px;">Create</button>
                                <button type="reset" class="btn btn-warning" style="margin-left: 10px;">Reset</button>
                              </div>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <a href="#Modal-Product-Delete{{$product->id}}" class="badge badge-danger p-2" data-toggle="modal"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                      <!-- Modal Delete Customer -->
                      <div id="Modal-Product-Delete{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Delete Product: {{$product->product_title}}</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body text-center">
                              <h2>Are you sure you want to delete?</h2>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary">Yes</button>
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