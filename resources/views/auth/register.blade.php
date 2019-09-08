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
    <div class="breadcrumb-area">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><span>Register</span></li>
        </ul>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="login-form">
            <h2 class="page-title">Register</h2>
            <div class="row">
                <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2">

                    <div class="form-group">
                        <label for="name">{{ __('Name') }}<span class="required">*</span></label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}<span class="required">*</span></label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Password') }}<span class="required">*</span></label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="confpassword">{{ __('Confirm Password') }}<span class="required">*</span></label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="background-color: #000000">Register</button>
                        <a href="login.html" class="btn theme-btn mr-2">Login</a>
                        <p class="checkbox-area">
                            <label>
                                <input type="checkbox"> Sign Up for Newsletter
                            </label>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
