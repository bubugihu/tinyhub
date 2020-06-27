@extends('admin.layout.layout')
@section('title', 'Create new brand')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row" style="justify-content: center;">
          <div class="col-lg-8 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">Create new Brand</h6>
              </div>
              <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Brand Title</label>
                        <input type="text" class="form-control" name="brandTitle">
                        @if($errors->has('brandTitle'))
                           <small style="color:red;font-size:14px;">{{$errors->first('brandTitle')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="brandDescription"rows="3"></textarea>
                        @if($errors->has('brandDescription'))
                           <small style="color:red;font-size:14px;">{{$errors->first('brandDescription')}}</small>
                        @endif
                      </div>
                      <label class="form-control-label text-uppercase">Upload Brand Image</label>
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
