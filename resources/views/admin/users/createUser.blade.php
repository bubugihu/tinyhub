@extends('admin.layout.layout')
@section('title', 'Create User')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Create Account</h6>
            </div>
            <div class="card-body">
              <form action="{{url('admin/users/createUser')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-6">

                    <div class="form-group">
                      <label class="form-control-label text-uppercase">User Name</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">

                      @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                    </div>

                    <div class="form-group">
                      <label class="form-control-label text-uppercase">Email</label>
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">

                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="form-control-label text-uppercase">Password</label>
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">

                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                    </div>

                    <div class="form-group">
                      <label class="form-control-label text-uppercase">Role</label>
                      <select class="form-control" name="role">
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                        <option value="2">Mod Customer</option>
                        <option value="3">Mod Product</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label class="form-control-label text-uppercase">Address</label>
                      <input type="text" name="address" class="form-control @error('address') is-invalid @enderror">

                      @error('address')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                    </div>
                  </div>

                  <div class="col-md-6">

                    <div class="form-group">
                      <label class="form-control-label text-uppercase">Full Name</label>
                      <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror">

                      @error('fullname')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                    </div>

                    <div class="form-group">
                      <label class="form-control-label text-uppercase">BirthDay</label>
                      <input type="date" class="form-control" name="dob" min="1900-01-01" max="2006-12-31">
                    </div>

                    <div class="form-group">
                      <label class="form-control-label text-uppercase">Confirm Password</label>
                      <input type="password" name="password_confirmation" class="form-control">
                    </div>

                    <div class="form-group">
                      <label class="form-control-label text-uppercase">Gender</label>
                      <select class="form-control" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label class="form-control-label text-uppercase">Phone Number</label>
                      <input type="number" name="phone" class="form-control">

                      @error('phone')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                    </div>

                  </div>
                </div>

                <div class="form-group text-center">
                  <button type="submit" class="btn login-btn" style="background-color: #f47635" onclick="return confirm('Do you want update ?');">Create</button>
                  <button type="reset" class="btn btn-dark">RESET</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection