@extends('layouts.login')
@section('title')
    <title>Inventaris | Log in</title>
@endsection
@section('content')
<div class="row justify-content-center mt-4">
<div class="login-box">
        <div class="login-logo">
          <a href="inventaris"><b>Inventaris</b>Apk</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body bg-light">
            <p class="login-box-msg">Silahkan Login </p>
      
            <form action="{{ route('login') }}" method="post">
                @csrf
              <div class="input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="input-group mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <div class="buttons">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        <a href="{{ url('register') }}" class="btn btn-warning btn-block">Daftar</a><br>
                    </div>
                </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                <!-- /.col -->
              </div>
            </form>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
</div>  
@endsection
