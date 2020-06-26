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
                    <th>Title</th>
                    <th>Content</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Reply</th>
                    <th>Created At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $feedback as $feedback)
                  <tr>
                    <th scope="row">{{ $feedback->id}}</th>
                    <td>{{ $feedback->feed_title}}</td>
                    <td>
                      <!-- <a href="#Modal-Feedback-Details{{$feedback->id}}" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a> -->
                      <button type="button" data-toggle="modal" data-target="#Modal-Feedback-Content{{ $feedback->id}}" class="btn btn-info">Read</button>
                    </td>
                    <td>{{ $feedback->feed_phone}}</td>
                    <td>{{ $feedback->feed_email}}</td>
                    <td>
                      @if($feedback->feed_status == 0 )
                      <a href="#" class="badge badge-success p-2"><i class="fa fa-check-circle" aria-hidden="true" style="font-size:16px; font-weight:100;"></i></a>
                      @else
                      <a href="#" class="badge badge-danger p-2"><i class="fa fa-power-off" aria-hidden="true" style="font-size:12px; font-weight:100;"></i></a>>
                      @endif
                    </td>
                    <td>
                      @if($feedback->feed_rep == 0 )
                      <a href="mailto:{{$feedback->feed_email}}?subject={{$feedback->feed_title}}" class="badge badge-danger p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                      @else
                      <a href="#" class="badge badge-success p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                      @endif
                    </td>
                    <td>{{ $feedback->feed_date}}</td>
                    <td>
                      <a href="#Modal-Feedback-Details{{$feedback->id}}" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                      <a href="#Modal-Feedback-Update{{$feedback->id}}" class="badge badge-warning p-2" data-toggle="modal"><i class="fas fa-edit" style="font-size: 16px; font-weight:100;"></i></a>
                      <a href="#Modal-Feedback-Delete{{$feedback->id}}" class="badge badge-danger p-2" data-toggle="modal"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                    </td>
                  </tr>
                  {{--Modal content--}}
                  <!-- Modal Content Feedback -->
                  <div id="Modal-Feedback-Content{{ $feedback->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="exampleModalLabel" class="modal-title">{{$feedback->feed_title}}</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <textarea name="" id="" class="form-control" readonly>{{$feedback->feed_content}} </textarea>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal Details Feedback -->
                  <div id="Modal-Feedback-Details{{ $feedback->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                    <div role="document" class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="exampleModalLabel" class="modal-title">Details Feedback</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Feedback ID</label>
                                  <input type="text" class="form-control" value="{{$feedback->id}}" readonly>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Feedback Status</label>
                                  <input type="text" class="form-control" value="{{$feedback->feed_status}}" readonly>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Feedback Rep</label>
                                  <input type="text" class="form-control" value="{{$feedback->feed_rep}}" readonly>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Feedback Title</label>
                                  <input type="text" class="form-control" value="{{$feedback->feed_title}}" readonly>
                                </div>
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Phone</label>
                                  <input type="text" class="form-control" value="{{$feedback->feed_phone}}" readonly>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Email</label>
                                  <input type="text" class="form-control" value="{{$feedback->feed_email}}" readonly>
                                </div>
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Feedback Date</label>
                                  <input type="text" class="form-control" value="{{$feedback->feed_date}}" readonly>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Feedback Content</label>
                                  <textarea name="" id="" class="form-control" readonly>{{$feedback->feed_content}}</textarea>
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
                  <!-- Modal Update Feedback -->
                  <div id="Modal-Feedback-Update{{ $feedback->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                    <div role="document" class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="exampleModalLabel" class="modal-title">Update Customer</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <form action="" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Feedback Title</label>
                                    <input type="text" class="form-control" placeholder="{{$feedback->feed_title}}" required>
                                  </div>
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Phone</label>
                                    <input type="number" class="form-control" placeholder="{{$feedback->feed_phone}}" required>
                                  </div>
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Email</label>
                                    <input type="email" class="form-control" placeholder="{{$feedback->feed_email}}" required>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Feedback Date</label>
                                    <input type="date" class="form-control" placeholder="{{$feedback->feed_date}}" required>
                                  </div>
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Feedback Status</label>
                                    <input type="text" class="form-control" placeholder="{{$feedback->feed_status}}" required>
                                  </div>
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Feedback Rep</label>
                                    <input type="text" class="form-control" placeholder="{{$feedback->feed_rep}}" required>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="form-control-label text-uppercase">Feedback Content</label>
                                    <textarea name="" id="" class="form-control" placeholder="{{$feedback->feed_content}}" required></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer d-flex justify-content-center">
                                <div class="form-group ">
                                  <button type="submit" class="btn btn-warning">Update</button>
                                  <button type="reset" class="btn btn-info">Reset</button>
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal Delete Feedback -->
                  <div id="Modal-Feedback-Delete{{ $feedback->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                    <div role="document" class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="exampleModalLabel" class="modal-title">Delete Customer: {{$feedback->feed_title}}</h4>
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