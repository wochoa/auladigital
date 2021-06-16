@extends('layouts.login')

@section('content')

 <!-- /.login-logo -->
 <div class="card card-outline card-primary" style="background: #fdfdfd2e !important">{{--  background: url(dist/img/banner-desarrollo-limpio.jpg) no-repeat center center fixed; --}}
  <div class="card-header text-center p-0">
    {{-- <a href="../../index2.html" class="h1 text-white"><b>Held</b>DESK</a> --}}
    <img src="dist/img/banner-desarrollo-limpio.jpg" alt="" class="img-fluid">
  </div>
  <div class="card-body">
    <p class="login-box-msg text-white"">Iniciar session</p>

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="input-group mb-3">
        {{--<input type="email" class="form-control" placeholder="Email"> --}}
        <input  id="login" type="text" class="form-control {{ $errors->has('username')|| $errors->has('email') ? 'is-invalid':''}}" name="login" value="{{ old('username')?:old('email') }}" required  autofocus placeholder="Usuario/email" onkeyup="javascript:this.value=this.value.toUpperCase();"  style=" background: rgba(0, 0, 0, 0.3);border: none;outline: none; color:rgb(81 218 248)">    {{-- onkeyup="javascript:this.value=this.value.toUpperCase();"  --}}                          
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope" ></span>
          </div>
        </div>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
      <div class="input-group mb-3">
        {{-- <input type="password" class="form-control" placeholder="Password"> --}}
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" style=" background: rgba(0, 0, 0, 0.3);border: none;outline: none;color:rgb(81 218 248)">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
      </div>
      <div class="row">
        <div class="col-8">
          <div class="icheck-primary">
            {{-- <input type="checkbox" id="remember"> --}}
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember" class="text-white">
              Recordarme
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block btn-sm">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    {{-- <div class="social-auth-links text-center mt-2 mb-3">
      <a href="#" class="btn btn-block btn-primary">
        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
      </a>
      <a href="#" class="btn btn-block btn-danger">
        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
      </a>
    </div> --}}
    <!-- /.social-auth-links -->

    <p class="mb-1">
      {{-- <a href="forgot-password.html">I forgot my password</a> --}}
      @if (Route::has('password.request'))
                                  <a class="btn btn-link btn-sm" href="{{ route('password.request') }}">
                                      {{ __('¿Olvidaste tu contraseña?') }}
                                  </a>
                              @endif
    </p>
    {{-- <p class="mb-0">
      <a href="register.html" class="text-center">Register a new membership</a>
    </p> --}}
  </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection
