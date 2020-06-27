@extends('admin.layout.layout')
@section('title', 'Banner')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Banner List</h6>
            </div>
            <div class="card-body">
              <table class="table card-text text-center">
                <thead>
                  <tr>
                    <th>BannerID</th>
                    <th>Banner Image</th>
                    <th>Banner Title</th>
                    <th>Banner Content</th>
                    <th>Banner Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($banners as $banner)
                  <tr>
                    <th scope="row" class="align-middle">{{$banner->id}}</th>
                    <td class="align-middle"><img src="{{asset('img/'.$banner->ban_image)}}" alt="" width="60"></td>
                    <td class="align-middle">{{$banner->ban_title}}</td>
                    <td class="align-middle"><a href="#Modal-Banner-Content{{ $banner->id}}" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a></td>
                    <td class="align-middle">{{$banner->ban_date}}</td>
                    <td class="align-middle">
                      <a href="#Modal-Banner-Update{{$banner->id}}" class="badge badge-warning p-2" data-toggle="modal"><i class="fas fa-edit" style="font-size: 16px; font-weight:100;"></i></a>
                      <a href="#Modal-Banner-Delete{{$banner->id}}" class="badge badge-danger p-2" data-toggle="modal"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                    </td>
                  </tr>
                  <!-- Modal Content Banner -->
                  <div id="Modal-Banner-Content{{ $banner->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="exampleModalLabel" class="modal-title">{{$banner->ban_title}}</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <textarea name="" id="" class="form-control" rows="10" readonly>{{$banner->ban_content}} </textarea>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal Update Banner -->
                  <div id="Modal-Banner-Update{{ $banner->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                    <div role="document" class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="exampleModalLabel" class="modal-title">Update Banner: {{$banner->ban_title}}</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <form action="" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Banner Title</label>
                                    <input type="text" class="form-control" placeholder="{{$banner->ban_title}}" required>
                                  </div>
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Banner Content</label>
                                    <textarea name="" id=""rows="7" class="form-control" placeholder="{{$banner->ban_content}}" required></textarea>
                                  </div>
                                  <div class="form-group">
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
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer d-flex justify-content-center">
                                <div class="form-group ">
                                  <button type="submit" class="btn btn-warning">Update</button>
                                  <button type="reset" class="btn btn-info" style="margin: 0px 15px;">Reset</button>
                                  <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal Delete Banner -->
                  <div id="Modal-Banner-Delete{{ $banner->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                    <div role="document" class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="exampleModalLabel" class="modal-title">Delete Banner: {{$banner->ban_title}}</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body text-center">
                          <h2>Are you sure you want to delete?</h2>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-warning">Yes</button>
                          <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
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