@extends('layouts.app')
@section('content')
<div class="container py-3">
    <div class="row justify-content-center py-5">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    {{-- {{ __('Login') }} --}}
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body">
                    @if(Session::has('flash_message'))
                                <div class="alert alert-{!! Session::get('flash_level') !!}">
                                  {!!Session::get('flash_message')!!}
                                </div>
                    @endif 
                    <form method="POST" action="{{ route('loginTest') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="admin@gmail.com" required autocomplete="email" autofocus>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="123123123" required autocomplete="current-password">
                              
                                
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <i class="fa fa-eye eye" id="togglePassword" onclick="myFunction()"></i>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" id="login" class="btn login-btn">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                <a class="btn btn-dark" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif     
                            </div>
                        </div>
                    </form>
                    <div class="col-md-8 offset-md-4 mt-4">
                        <span style="font-size: 14px;">New Customer ? </span> <span><a href="{{ route('register')}}">Start here.</a></span> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    function myFunction() {
    var x = document.getElementById("password");
    var y = document.getElementById('togglePassword');
    if (x.type === "password") {
      x.type = "text";
      y.className = "fa fa-eye-slash eye";
    } else {
      x.type = "password";
      y.className = "fa fa-eye eye";
    }
  }  
</script>

