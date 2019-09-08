<link rel="stylesheet" href="{{ URL::asset('css/all.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/meanmenu.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">

@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="login-page">
            <div class="breadcrumb-area">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><span>Login</span></li>
                </ul>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-form">
                    <h2 class="page-title">Login</h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}<span class="required">*</span></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}<span class="required">*</span></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <p class="checkbox-area">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    @if (Route::has('password.request'))
                                    <span><a class="btn btn-link" style="color: #000000" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></span>
                                    @endif
                                </p>
                                <button class="btn btn-primary" type="submit" style="background-color: #000000"> {{ __('Login') }}</button>
                                <a href="{{route('register')}}" class="btn theme-btn mr-2"> {{ __('Register') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
