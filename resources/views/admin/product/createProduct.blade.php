@extends('admin.layout.layout')
@section('title', 'product list')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row" style="justify-content: center;">
          <div class="col-lg-8 mb-5">
            <div class="card">
              <div class="card-header">
                <h6 class="text-uppercase mb-0">Create new product</h6>
              </div>
              <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">SKU</label>
                        <input type="text" placeholder="Sku" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Product Name</label>
                        <input type="text" placeholder="Product Name" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Price</label>
                        <input type="number" placeholder="Price" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Stock</label>
                        <input type="number" placeholder="Stock" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Status</label><br>
                        <div class="custom-control custom-checkbox">
                            <input id="customCheck1" type="checkbox" class="custom-control-input">
                            <label for="customCheck1" class="custom-control-label">Active</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">BestBuy</label><br>
                        <div class="custom-control custom-checkbox">
                            <input id="customCheck2" type="checkbox" class="custom-control-input">
                            <label for="customCheck2" class="custom-control-label">Active</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Short Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Long Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <label class="form-control-label text-uppercase">Upload Image</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-dark">Create</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                      </div>
                    </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection