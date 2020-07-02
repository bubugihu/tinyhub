@extends('layouts.app')

@section('content')
<div class="container py-2">
    <div class="row justify-content-center py-5">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h3 class="text-center">Register</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                              <div class="form-group row">
                                <div class="col-6">
                                    <label class="form-control-label text-uppercase">User Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                                    
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>
                                <div class="col-6">
                                    <label class="form-control-label text-uppercase">Full Name</label>
                                    <input type="text" name="fullname" class="form-control  @error('fullname') is-invalid @enderror">

                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>
                              </div>
                              <div class="form-group row">
                                    <div class="col-6">
                                        <label class="form-control-label text-uppercase">BirthDay</label>
                                        <input type="date" name="dob" class="form-control  @error('dob') is-invalid @enderror"  min="1900-01-01" max="2006-12-31">
                                        @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label class="form-control-label text-uppercase">Gender</label>
                                        <div class="row">
                                            <div class="col-12 mt-1 ml-0">
                                                <input type="radio"   name="gender" id="male" value="male" checked><label for="male" class="form-check-label">Male
                                                <input type="radio"   name="gender" id="female" value="female"><label for="female" class="form-check-label">Female
                                                <input type="radio"   name="gender" id="other" value="other"><label for="other" class="form-check-label">Other
                                            </div>
                                        </div>
                                    </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-7">
                                    <label class="form-control-label text-uppercase">Email</label>
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror">

                                        <span id="alert1" class="text-red"></span>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror        

                                  </div>
                                  <div class="col-5">
                                    <label class="form-control-label text-uppercase">Phone Number</label>
                                    <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror">
                                    <span id="alert2" class="text-red"></span>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-6">
                                    <label class="form-control-label text-uppercase">Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                  </div>
                                  <div class="col-6">
                                    <label class="form-control-label text-uppercase">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                  </div>                            
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
                            <div class="form-group row mb-0">
                                <div class="col-md-12 offset-md-4">
                                    <button type="reset" class="btn btn-dark">
                                        {{ __('Reset') }}
                                    </button>
                                    <button type="submit" class="btn login-btn">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
$(document).ready(function(){
    $("#email").blur(function(){
        var email = $(this).val();
        $.get('ajaxRegisterEmail/'+email, function(data){
            // alert(email);
             $("#alert1").html(data);
        });
    });
})

$(document).ready(function(){
    $("#phone").blur(function(){
        var phone = $(this).val();
        $.get('ajaxRegisterPhone/'+phone, function(data){
            // alert(email);
             $("#alert2").html(data);
        });
    });
})
</script>
@endsection