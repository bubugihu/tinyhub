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
              <table class="table card-text">
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
                    <!-- <td><a href="#" class="badge badge-info p-2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                      <a href="#" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                      <a href="#" class="badge badge-danger p-2"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a>
                    </td> -->
                    <td>
                      <a href="#" class="badge badge-info p-2" data-toggle="modal" data-target="#Modal-Customer-Details{{$customer->id}}"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                      <a href="#" class="badge badge-warning p-2" data-toggle="modal" data-target="#Modal-Customer-Update"><i class="fas fa-edit" style="font-size: 16px; font-weight:100;"></i></a>
                      <a href="#" class="badge badge-danger p-2" data-toggle="modal" data-target="#Modal-Customer-Delete"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                    </td>
                  </tr>
                  
                  <div id="Modal-Customer-Details{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                    <div role="document" class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="exampleModalLabel" class="modal-title">Delete Customer</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">User ID</label>
                                  <input type="text" class="form-control" value="{{$customer->roleUser->id}}" readonly>
                                </div>
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Email</label>
                                  <input type="email" class="form-control" value="{{$customer->roleUser->email}}" readonly>
                                </div>
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Password</label>
                                  <input type="password" class="form-control" readonly>
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
                                  <select class="form-control" readonly>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                    <option value="">Other</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Phone</label>
                                  <input type="number" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                  <label class="form-control-label text-uppercase">Picture</label>
                                  <input type="file" class="form-control" name="ldescription"></input>
                                </div>
                              </div>
                            </div>
                          </div>
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

              {{-- @foreach($customer1 as $customer1) --}}
              <!-- Modal Details Customer -->
              
              {{-- @endforeach --}}
              <!-- Modal Update Customer -->
              <div id="Modal-Customer-Update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                <div role="document" class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 id="exampleModalLabel" class="modal-title">Delete Comments</h4>
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
              <!-- Modal Delete Customer -->
              <div id="Modal-Customer-Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                <div role="document" class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 id="exampleModalLabel" class="modal-title">Delete Comments</h4>
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

              

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection