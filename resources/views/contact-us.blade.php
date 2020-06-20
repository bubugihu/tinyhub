@extends('users.layout.layout')
@section('contact-us')
   <section class="shipping py-5">
        <div class="container">
            <div class="row">
                
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                              <h6 class="text-uppercase mb-0 text-center"> <span style="font-size: 30px">Contact Us</span> </h6>
                            </div>
                            <div class="card-body">
                                  <form action="" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Full Name</label>
                                      <input type="text" placeholder="Full Name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Phone Number</label>
                                      <input type="text" placeholder="Phone Number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Email</label>
                                      <input type="number" placeholder="Email" class="form-control" min="0" max="20000" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label text-uppercase">Title</label>
                                        <input type="number" placeholder="Title" class="form-control" min="0" max="20000">
                                      </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Message</label>
                                      <textarea class="form-control ckeditor" id="exampleFormControlTextarea1" name="ldescription" rows="3"></textarea>
                                      <script>
                                          CKEDITOR.replace( 'ldescription', {
                                              language: 'en',
                                              uiColor: '#9AB8F3'
                                          });
                                      </script>
                                    </div>
                                    <div class="form-group text-center">
                                      <button type="submit" class="btn btn-dark">Send</button>
                                      <button type="reset" class="btn btn-warning">Reset</button>
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
