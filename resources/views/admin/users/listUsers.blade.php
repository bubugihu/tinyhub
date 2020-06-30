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
              <table class="table card-text" id="dbtable">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th>Update</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($user as $user)
                  <tr>
                    <th scope="row">{{++$stt}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                    @if($user->role == 1)
                    Admin 
                    @elseif($user->role == 2)
                    Mod Customer
                    @elseif($user->role == 2)
                    Mod Product
                    @else 
                    User
                    @endif
                    </td>
                    <td>{{$user->created_at}}</td>
                    <td>
                      <a href="{{url('admin/users/updateUser/'.$user->id)}}" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
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