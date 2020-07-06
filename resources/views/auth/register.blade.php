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
                                <label class="form-control-label text-uppercase">User Name <span class="required">*</span></label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="col-6">
                                <label class="form-control-label text-uppercase">Full Name <span class="required">*</span></label>
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
                                <label class="form-control-label text-uppercase">BirthDay <span class="required">*</span></label>
                                <input type="date" name="dob" class="form-control  @error('dob') is-invalid @enderror" min="1900-01-01" max="2006-12-31">
                                @error('dob')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-control-label text-uppercase">Gender <span class="required">*</span></label>
                                <div class="row">
                                    <div class="col-12 mt-1 ml-0">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customer-gender1" name="gender" value="Male" checked>
                                            <label class="custom-control-label" for="customer-gender1">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customer-gender2" name="gender" value="Female">
                                            <label class="custom-control-label" for="customer-gender2">Female</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customer-gender3" name="gender" value="Other">
                                            <label class="custom-control-label" for="customer-gender3">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label class="form-control-label text-uppercase">Email <span class="required">*</span></label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror">

                                <span id="alert1" class="text-red"></span>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="col-6">
                                <label class="form-control-label text-uppercase">Phone Number <span class="required">*</span></label>
                                <input type="text" name="phone" placeholder="0909113114" id="phone" class="form-control @error('phone') is-invalid @enderror">
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
                                <label class="form-control-label text-uppercase">Password <span class="required">*</span></label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="col-6">
                                <label class="form-control-label text-uppercase">Confirm Password <span class="required">*</span></label>
                                <input type="password" name="password_confirmation" class="form-control">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label text-uppercase">Address <span class="required">*</span></label>
                            <textarea name="address" id="" rows="3" class="form-control @error('address') is-invalid @enderror"></textarea>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>


                </div>
                <div class="card-footer">
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
                </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready(function() {
        $("#email").blur(function() {
            var email = $(this).val();
            $.get('admin/ajaxRegisterEmail/' + email, function(data) {
                // alert(email);
                $("#alert1").html(data);
            });
        });
    })

    $(document).ready(function() {
        $("#phone").blur(function() {
            var phone = $(this).val();
            $.get('admin/ajaxRegisterPhone/' + phone, function(data) {
                // alert(email);
                $("#alert2").html(data);
            });
        });
    })
</script>
@endsection