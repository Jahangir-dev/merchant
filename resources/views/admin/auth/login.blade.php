@extends('admin.layouts.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ route('admin.home') }}">{{ translateText('Admin Login') }}</a>
    </div>
  <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">{{translateText('Sign in to start your session')}}</p>
            <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="{{translateText('Email')}}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ translateText($errors->first('email')) }}</strong>
                        </span>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{translateText('Password')}}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{translateText($errors->first('password')) }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                {{ translateText('Remember Me') }}
                            </label>
                        </div>
                    </div>
          <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">{{ translateText('Login') }}</button>
                    </div>
          <!-- /.col -->
                </div>
            </form>

          <!--   <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div> -->
            <!-- /.social-auth-links -->

            <p class="mb-1">
                <a href="{{ route('forget') }}">{{ translateText('Forgot Your Password?') }}</a>
            </p>
            
        </div>
    <!-- /.login-card-body -->
    </div>
</div>
@endsection
