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
              <table class="table card-text text-center" id="dbtable">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th>Update</th>
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
                      <!-- Page Update Users -->
                      <a href="{{ url('admin/users/updateUser/'.$user->id)}}" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px; font-weight:100;"></i></a>
                      <!-- Modal Delete Users -->
                      <a href="#Modal-Users-Delete{{$user->id}}" class="badge badge-danger p-2" data-toggle="modal" data-target=""><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
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