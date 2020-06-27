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
              <h6 class="text-uppercase mb-0">Create new Banner</h6>
            </div>
            <div class="card-body">
              <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                  <label class="form-control-label text-uppercase">Banner Title</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                  <label class="form-control-label text-uppercase">Banner Content</label>
                  <textarea name="" id="" rows="7" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                  <label class="form-control-label text-uppercase">Upload Banner Image</label>
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
            <div class="card-footer d-flex justify-content-center">
              <div class="form-group">
                <button type="submit" class="btn btn-warning" style="margin-right: 10px;">Create</button>
                <button type="reset" class="btn btn-info" style="margin-left: 10px;">Reset</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection