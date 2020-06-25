@extends('admin.layout.layout')
@section('title', 'Creat User')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
<<<<<<< HEAD
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Create Account</h6>
            </div>
            <div class="card-body">
              <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-control-label text-uppercase">User Name</label>
                      <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label class="form-control-label text-uppercase">Email</label>
                      <input type="email" class="form-control" required>
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
                      <input type="text" class="form-control" required>
=======
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">Create Account</h6>
              </div>
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label text-uppercase">User Name</label>
                            <input type="text" class="form-control" name="name">
                          </div>
                          <div class="form-group">
                            <label class="form-control-label text-uppercase">Email</label>
                            <input type="email" class="form-control" name="email">
                          </div>
                          <div class="form-group">
                            <label class="form-control-label text-uppercase">Password</label>
                            <input type="password" class="form-control" name="password" >
                          </div>
                          <div class="form-group">
                            <label class="form-control-label text-uppercase">Role</label>
                            <select class="form-control">
                                <option value="">User</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label class="form-control-label text-uppercase">Address</label>
                            <input type="text" class="form-control" >
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label text-uppercase">Full Name</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="form-group">
                            <label class="form-control-label text-uppercase">BirthDay</label>
                            <input type="date" class="form-control" max="2006-01-01">
                          </div>
                          <div class="form-group">
                            <label class="form-control-label text-uppercase">Gender</label>
                            <select class="form-control">
                                <option value="">Gay</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label class="form-control-label text-uppercase">Phone</label>
                            <input type="text" class="form-control" >
                          </div>
                          <div class="form-group">
                            <label class="form-control-label text-uppercase">Picture</label>
                            <input type="file" class="form-control" name="ldescription" ></input>
                          </div>
>>>>>>> d37d1d8537e6d27708ff2598807e192dac2d0682
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-control-label text-uppercase">Full Name</label>
                      <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label class="form-control-label text-uppercase">BirthDay</label>
                      <input type="date" class="form-control" required>
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
                      <input type="number" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label class="form-control-label text-uppercase">Picture</label>
                      <input type="file" class="form-control" name="ldescription"></input>
                    </div>
                  </div>
                </div>
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-warning">SUBMIT</button>
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