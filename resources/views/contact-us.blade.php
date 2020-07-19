@extends('users.layout.layout')
@section('title', 'Contact us - Tinyhub')
@section('content')
<div class="hero hero-page padding-small">
  <div class="container">
      <div class="row d-flex">
          <div class="col-lg-12">
              <h1>Contact Us</h1>
          </div>
          <div class="row">
            <div class="col-md-12">
                {{ Breadcrumbs::render('contact-us') }}
            </div>
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

                              @if(Session::has('flash_message'))
                                <div class="alert alert-{!! Session::get('flash_level') !!}">
                                  {!!Session::get('flash_message')!!}
                                </div>
                              @endif 
                                  <form action="{{url('feedback/postFeedback')}}" method="POST" >
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Full Name <span class="required">*</span></label>
                                      <input type="text" class="form-control @error('feedbackName') is-invalid @enderror" name="feedbackName"
                                      @auth
                                          value="{{Auth::user()->roleCustomer->customer_name}}"
                                      @endauth
                                      >
                                      @error('feedbackName')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror 
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Phone Number</label>
                                      <input type="text" class="form-control @error('feedbackPhone') is-invalid @enderror" name="feedbackPhone"
                                      @auth
                                          value="{{Auth::user()->roleCustomer->phone}}"
                                      @endauth
                                      >
                                      @error('feedbackPhone')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Email <span class="required">*</span></label>
                                      <input type="email" class="form-control @error('feedbackEmail') is-invalid @enderror" name="feedbackEmail"
                                      @auth
                                          value="{{Auth::user()->email}}"
                                      @endauth
                                      >
                                      @error('feedbackEmail')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Question about:</label>
                                      <select name="feedbackTitle" class="form-control @error('feedbackTitle') is-invalid @enderror" id="">
                                        <option value="Product">Product</option>
                                        <option value="Order">Order</option>
                                        <option value="Shipping">Shipping</option>
                                        <option value="Price">Price</option>
                                        <option value="Guarantee">Guarantee</option>
                                        <option value="Payment">Payment</option>
                                        <option value="Website">Website</option>
                                        <option value="Others">Black List</option>
                                        <option value="Others">Others</option>
                                      </select>
                                      @error('feedbackTitle')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Message <span class="required">*</span></label>
                                      <textarea class="form-control @error('feedbackContent') is-invalid @enderror" id="exampleFormControlTextarea1" name="feedbackContent" rows="3"></textarea>
                                      @error('feedbackContent')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                    </div>
                                    <div class="form-group text-center">
                                      <button type="submit" class="btn login-btn">Send</button>
                                      <button type="reset" class="btn btn-dark">Reset</button>
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
