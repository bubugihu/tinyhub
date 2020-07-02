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
                <h6 class="text-uppercase mb-0">Update product</h6>
              </div>
              <div class="card-body">
                    {{-- @include('admin.product.form-error') --}}
                    <form role="form" action="{{url("admin/product/postUpdate/" . $p -> id)}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Product Title</label>
                      <input type="text" class="form-control" name="prdname" value="{{$p->product_title}}">
                        @if($errors->has('prdname'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdname')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Price</label>
                        <input type="number" class="form-control" name="prdprice" value="{{$p->price}}" min="0">
                        @if($errors->has('prdprice'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdprice')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Category</label>
                          <select name="prdcate" class="form-control">
                             @foreach ($c as $c)
                                <option value="{{$c->id}}"
                                    @if ($c->id === $p->category_id)
                                        selected
                                    @endif
                                    >
                                    {{$c->category_name}}
                                 </option>
                             @endforeach
                          </select>
                          @if($errors->has('prdcate'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdcate')}}</small>
                          @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Brands</label>
                          <select name="prdbrand" class="form-control">
                            @foreach ($b as $b)
                                <option value="{{$b->id}}"
                                    @if ($b->id === $p->brand_id)
                                        selected
                                    @endif
                                    >
                                    {{$b->brand_name}}
                                 </option>
                             @endforeach
                          </select>
                          @if($errors->has('prdbrand'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdbrand')}}</small>
                          @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Warranty_Period</label>
                        <input type="number" class="form-control" name="prdWarranty" min="0" value="{{$p->warranty_period}}">
                        @if($errors->has('prdWarranty'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdWarranty')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Short Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="sdescription"rows="6">{{$p->short_descriptions}}</textarea>
                        @if($errors->has('sdescription'))
                           <small style="color:red;font-size:14px;">{{$errors->first('sdescription')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Long Description</label>
                        <textarea class="form-control ckeditor" id="exampleFormControlTextarea1" name="ldescription" rows="12">{{$p->long_descriptions}}</textarea>
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
                        <label for="">Old Image</label><br>
                        <img class="img-fluid" src="{{url("img/feature/" . $p -> feature_image)}}" alt="" width="100">
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Upload Feature Image:</label><br>
                        <input type="file" name="featureimg">
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
                        <button type="submit" class="btn btn-dark">Update</button>
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