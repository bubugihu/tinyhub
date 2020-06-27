@extends('admin.layout.layout')
@section('title', 'Customer List')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Customer List</h6>
            </div>
            <div class="card-body">
              <!-- List Customer -->
              <table class="table card-text text-center">
                <thead>
                  <tr>
                    <th>Customer ID</th>
                    <th>Fullname</th>
                    <th>D.O.B</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($customer as $customer)
                  <tr>
                    <th scope="row">{{$customer->id}}</th>
                    <td>{{$customer->customer_name}}</td>
                    <td>{{$customer->dob}}</td>
                    <td>{{$customer->gender}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>
                      <a href="#Modal-Customer-Details{{$customer->id}}" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                      <!-- Modal Details Customer -->
                      <div id="Modal-Customer-Details{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Details Customer</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="container">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">User ID</label>
                                      <input type="text" class="form-control" value="{{$customer->id}}" readonly>
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Email</label>
                                      <input type="text" class="form-control" value="{{$customer->email}}" readonly>
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Role</label>
                                      <input type="text" class="form-control" value="{{$customer->role}}" readonly>
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Address</label>
                                      <input type="text" class="form-control" value="{{$customer->address}}" readonly>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Full Name</label>
                                      <input type="text" class="form-control" value="{{$customer->customer_name}}" readonly>
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">BirthDay</label>
                                      <input type="date" class="form-control" value="{{$customer->dob}}" readonly>
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Gender</label>
                                      <input type="text" class="form-control" value="{{$customer->gender}}" readonly>
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Phone</label>
                                      <input type="text" class="form-control" value="{{$customer->phone}}" readonly>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Picture</label>
                                      <input type="text" class="form-control" value="{{$customer->feature}}" readonly>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a href="#Modal-Customer-Update{{$customer->id}}" class="badge badge-warning p-2" data-toggle="modal"><i class="fas fa-edit" style="font-size: 16px; font-weight:100;"></i></a>
                      <!-- Modal Update Customer -->
                      <div id="Modal-Customer-Update{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
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
                                        <label class="form-control-label text-uppercase">User Name</label>
                                        <input type="text" class="form-control" placeholder="{{$customer->name}}" required>
                                      </div>
                                      <div class="form-group">
                                        <label class="form-control-label text-uppercase">Email</label>
                                        <input type="email" class="form-control" placeholder="{{$customer->email}}" required>
                                      </div>
                                      <div class="form-group">
                                        <label class="form-control-label text-uppercase">Role</label>
                                        <select class="form-control" required>
                                          <option value="0">User</option>
                                          <option value="1">Admin</option>
                                          <option value="2">Mod</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label class="form-control-label text-uppercase">Address</label>
                                        <input type="text" class="form-control" placeholder="{{$customer->address}}" required>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="form-control-label text-uppercase">Full Name</label>
                                        <input type="text" class="form-control" placeholder="{{$customer->customer_name}}" required>
                                      </div>
                                      <div class="form-group">
                                        <label class="form-control-label text-uppercase">BirthDay</label>
                                        <input type="date" class="form-control" placeholder="{{$customer->dob}}" required>
                                      </div>
                                      <div class="form-group">
                                        <label class="form-control-label text-uppercase">Gender</label>
                                        <select class="form-control" required>
                                          <option value="">Male</option>
                                          <option value="">Female</option>
                                          <option value="">Other</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label class="form-control-label text-uppercase">Phone</label>
                                        <input type="number" class="form-control" placeholder="{{$customer->phone}}" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label class="form-control-label text-uppercase">Picture</label>
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
                                      <button type="submit" class="btn btn-warning">SUBMIT</button>
                                      <button type="reset" class="btn btn-info" style="margin: 0px 10px;">RESET</button>
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a href="#Modal-Customer-Delete{{$customer->id}}" class="badge badge-danger p-2" data-toggle="modal"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                      <!-- Modal Delete Customer -->
                      <div id="Modal-Customer-Delete{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Delete Customer: {{$customer->customer_name}}</h4>
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