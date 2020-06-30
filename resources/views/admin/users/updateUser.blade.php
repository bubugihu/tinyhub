@extends('admin.layout.layout')
@section('title', 'Update User')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
        <section class="py-5">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h6 class="text-uppercase mb-0">Update Account</h6>
                        </div>
                        <div class="card-body">
                            @foreach($user as $user)
                            <form action="" id="{{ url('admin/users/updateUser/'.$user->id)}}" method="POST" enctype="multipart/form-data">
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
                                            <label class="form-control-label text-uppercase">Password</label>
                                            <input type="password" class="form-control" required>
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
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-warning">Create</button>
                                    <button type="reset" class="btn btn-dark">Reset</button>
                                </div>

                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection