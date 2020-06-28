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
              <h6 class="text-uppercase mb-0">Users List</h6>
            </div>
            <div class="card-body">
              <!-- List User -->
              <table class="table card-text text-center">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($user as $user)
                  <tr>
                    <th scope="row" class="align-middle">{{++$stt}}</th>
                    <th class="align-middle">{{$user->id}}</th>
                    <td class="align-middle">{{$user->name}}</td>
                    <td class="align-middle">{{$user->email}}</td>
                    <td class="align-middle">
                      @if($user->role == 1)
                      Admin
                      @elseif($user->role == 2)
                      Mod Product
                      @else
                      Mod Customer
                      @endif
                    </td>
                    <td class="align-middle">{{$user->created_at}}</td>
                    <td class="align-middle">
                      <a href="#Modal-Users-Update{{$user->id}}" class="badge badge-warning p-2" data-toggle="modal"><i class="fas fa-edit" style="font-size: 16px; font-weight:100;"></i></a>
                      <!-- Modal Update Users -->
                      <div id="Modal-Users-Update{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Update User</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <form action="" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">User Name</label>
                                      <input type="text" class="form-control" placeholder="{{$user->name}}" required>
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Email</label>
                                      <input type="email" class="form-control" placeholder="{{$user->email}}" required>
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
                                      <input type="text" class="form-control" placeholder="{{$user->address}}" required>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Full Name</label>
                                      <input type="text" class="form-control" placeholder="{{$user->customer_name}}" required>
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">BirthDay</label>
                                      <input type="date" class="form-control" placeholder="{{$user->dob}}" required>
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
                                      <input type="number" class="form-control" placeholder="{{$user->phone}}" required>
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
                                  <button type="submit" class="btn btn-warning">Update</button>
                                  <button type="reset" class="btn btn-info" style="margin: 0px 15px;">Reset</button>
                                  <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a href="#Modal-Users-Delete{{$user->id}}" class="badge badge-danger p-2" data-toggle="modal" data-target=""><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                      <!-- Modal Delete Users -->
                      <div id="Modal-Users-Delete{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Delete User: {{$user->name}}</h4>
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