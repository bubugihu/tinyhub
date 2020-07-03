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
                    {{-- @include('admin.product.form-error') --}}
                    <form role="form" action="{{url("admin/product/postCreate")}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Product Title <span class="required">*</span></label>
                        <input type="text" class="form-control" name="prdname">
                        @if($errors->has('prdname'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdname')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Price <span class="required">*</span></label>
                        <input type="number" class="form-control" name="prdprice" min="0">
                        @if($errors->has('prdprice'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdprice')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Category <span class="required">*</span></label>
                          <select name="prdcate" class="form-control">
                            <option value="0">None</option>
                            <option value="1">In Ear</option>
                            <option value="2">On Ear</option>
                            <option value="3">True-Wireless</option>
                          </select>
                          @if($errors->has('prdcate'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdcate')}}</small>
                          @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Brands <span class="required">*</span></label>
                          <select name="prdbrand" class="form-control">
                            <option value="0">None</option>
                            <option value="1">Sony</option>
                            <option value="2">JBL</option>
                            <option value="3">Westone</option>
                            <option value="4">Beats</option>
                            <option value="5">Bang & Olufsen</option>
                          </select>
                          @if($errors->has('prdbrand'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdbrand')}}</small>
                          @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Warranty_Period <span class="required">*</span></label>
                        <input type="number" class="form-control" name="prdWarranty" min="0">
                        @if($errors->has('prdWarranty'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdWarranty')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Short Description <span class="required">*</span></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="sdescription"rows="3"></textarea>
                        @if($errors->has('sdescription'))
                           <small style="color:red;font-size:14px;">{{$errors->first('sdescription')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Long Description <span class="required">*</span></label>
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
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Upload Feature Image: <span class="required">*</span></label><br>
                        <input type="file" name="featureimg"><br>
                          @if($errors->has('featureimg'))
                            <small style="color:red;font-size:14px;">{{$errors->first('featureimg')}}</small>
                          @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Please press Ctrl to choose multiple images:</label><br>
                        <input type="file" name="galleryimg" multiple>
                          @if($errors->has('galleryimg'))
                            <small style="color:red;font-size:14px;">{{$errors->first('galleryimg')}}</small>
                          @endif
                      </div><br>
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