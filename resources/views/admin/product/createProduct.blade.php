@extends('admin.layout.layout')
@section('title', 'product list')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row" style="justify-content: center;">
          <div class="col-lg-8 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">Create new product</h6>
              </div>
              <div class="card-body">
                    <form role="form" action="{{url("admin/product/postCreate/")}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Product Title</label>
                        <input type="text" class="form-control" name="prdname">
                        @if($errors->has('prdname'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdname')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Price</label>
                        <input type="text" class="form-control" name="prdprice">
                        @if($errors->has('prdprice'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdprice')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Category</label>
                          <select name="prdcate" class="form-control">
                            <option value="0">None</option>
                            <option value="1">In Ear</option>
                            <option value="2">On Ear</option>
                            <option value="3">True-Wireless</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Brands</label>
                          <select name="prdbrand" class="form-control">
                            <option value="0">None</option>
                            <option value="1">Sony</option>
                            <option value="2">JBL</option>
                            <option value="3">Westone</option>
                            <option value="4">Beats</option>
                            <option value="5">Bang & Olufsen</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Status</label><br>
                        <div class="custom-control custom-checkbox">
                            <input id="customCheck1" type="checkbox" class="custom-control-input">
                            <label for="customCheck1" class="custom-control-label">Active</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Short Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="sdescription"rows="3"></textarea>
                        @if($errors->has('sdescription'))
                           <small style="color:red;font-size:14px;">{{$errors->first('sdescription')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Long Description</label>
                        <textarea class="form-control ckeditor" id="exampleFormControlTextarea1" name="ldescription" rows="3"></textarea>
                        @if($errors->has('ldescription'))
                           <small style="color:red;font-size:14px;">{{$errors->first('ldescription')}}</small>
                        @endif
                        <script>
                            CKEDITOR.replace( 'ldescription', {
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
                          <input type="file" class="custom-file-input" name="featureimg" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                        </div>
                      </div>
                      <label class="form-control-label text-uppercase">Relate Image 1</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="relateimg1" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                        </div>
                      </div>
                      <label class="form-control-label text-uppercase">Relate Image 2</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="relateimg2" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                        </div>
                      </div>
                      <label class="form-control-label text-uppercase">Relate Image 3</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="relateimg3" id="inputGroupFile01">
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
