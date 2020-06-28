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
              <h6 class="text-uppercase mb-0">Comment List</h6>
            </div>
            <div class="card-body">
              <table class="table card-text text-center">
                <thead>
                  <tr>
                    <th>User Name</th>
                    <th>Product Name</th>
                    <th>Title</th>
                    <th>Comment</th>
                    <th>Create At</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($comments as $comment)
                  <tr>
                    <td class="align-middle">{{$comment->name}}</td>
                    <td class="align-middle">{{$comment->product_title}}</td>
                    <td class="align-middle">{{$comment->cmt_title}}</td>
                    <td class="align-middle">{{$comment->cmt_content}}</td>
                    <td class="align-middle">{{$comment->cmt_date}}</td>
                    <td class="align-middle">
                      <span class="badge badge-pill badge-success">OFF</span>
                    </td>
                    <td class="align-middle">
                      <a href="#" class="badge badge-info p-2"><i class="fas fa-check-circle" style="font-size: 16px; font-weight:100;"></i></a>
                      <a href="#" class="badge badge-danger p-2"><i class="fas fa-window-close" style="font-size: 16px; font-weight:100;"></i></a>
                    </td>
                    <td class="align-middle">
                      <a href="#Modal-Comment-Details{{$comment->customer_id}}" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                      <!-- Modal Details Customer -->
                      <div id="Modal-Comment-Details{{$comment->customer_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Details Comment</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="container">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label class="form-control-label text-uppercase">User Name</label>
                                          <input type="text" class="form-control" placeholder="{{$comment->name}}" readonly>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="form-control-label text-uppercase">Create At</label>
                                          <input type="text" class="form-control" placeholder="{{$comment->cmt_date}}" readonly>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="form-control-label text-uppercase">Status</label>
                                          <input type="text" class="form-control" placeholder="{{$comment->cmt_status}}" readonly>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label class="form-control-label text-uppercase">Product Name</label>
                                          <input type="text" class="form-control" placeholder="{{$comment->product_title}}" readonly>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="form-control-label text-uppercase">Category</label>
                                          <input type="text" class="form-control" placeholder="{{$comment->category_name}}" readonly>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="form-control-label text-uppercase">Brand</label>
                                          <input type="text" class="form-control" placeholder="{{$comment->brand_name}}" readonly>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Title</label>
                                      <input type="text" class="form-control" placeholder="{{$comment->cmt_title}}" readonly>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Contents</label>
                                      <textarea name="" id="" class="form-control" placeholder="{{$comment->cmt_content}}" readonly></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a href="#Modal-Comment-Delete{{$comment->customer_id}}" class="badge badge-danger p-2" data-toggle="modal"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                      <!-- Modal Delete Customer -->
                      <div id="Modal-Comment-Delete{{$comment->customer_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Delete Comments: {{$comment->cmt_title}}</h4>
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