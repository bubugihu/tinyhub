@extends('users.layout.layout')
@section('content')
<div class="hero hero-page padding-small">
  <div class="container">
      <div class="row d-flex">
          <div class="col-lg-9 ">
              <h1>FeedBack</h1>
          </div>
      </div>
  </div>
</div>
   <section class="shipping py-5">
        <div class="container">
            <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                              <h5 class="text-uppercase mb-0 text-center">Contact Us</h5>
                            </div>
                            <div class="card-body">
                                  <form action="" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Full Name</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Phone Number</label>
                                      <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Email</label>
                                      <input type="number" class="form-control" min="0" max="20000">
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Message</label>
                                      <textarea class="form-control" id="exampleFormControlTextarea1" name="ldescription" rows="3"></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                      <button type="submit" class="btn login-btn">SUBMIT</button>
                                      <button type="reset" class="btn btn-dark">RESET</button>
                                    </div>
                                  </form>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3"></div>
            </div>
        </div>
   </section>
@endsection