@extends('frontend.layouts.master')
@push('style')
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/login.css') }}">

    <style>
        .image-icon {
            height: 25px !important;
            width: 25px !important;
        }

        .btn-white {
            background-color: white !important;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1 mb-5 ">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="container mt-3 pt-3 mb-1 pb-5">
                            <h1 class="login-header text-center">Log in</h1>
                            <p class="login-p text-center">New to Grandfatheredly?
                                <a href="{{ route('register') }}">Click here to sign up!</a></p>
                            <form class="login" id="login-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div id="div_id_login" class="form-group">
                                    <label for="id_login" class=" requiredField"> Email<span
                                                class="asteriskField">*</span> </label>
                                    <div>
                                        <input type="email" name="email" class="emailinput form-control" required=""
                                               id="id_login" value="{{ old('email') }}">
                                    </div>
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div id="div_id_password" class="form-group">
                                    <label for="id_password" class=" requiredField">Password<span class="asteriskField">*</span>
                                    </label>
                                    <div class="">
                                        <input type="password" name="password" class="textinput textInput form-control"
                                               required="" id="id_password">
                                    </div>
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button id="login_submit_button" class="btn btn-primary mb-3 login-test">Log in</button>
                            </form>
                            <a href="{{ route('login.google') }}" id="login_submit_button"
                               class="btn btn-white mb-3 login-test">
                                <img class="image-icon"
                                     src="{{ static_asset('assets/frontend/assets/images/icon/google.svg') }}">
                                Log In With Google
                            </a>
                            <a href="{{ route('login.facebook') }}" id="login_submit_button"
                               class="btn btn-secondary mb-3 login-test">
                                <img class="image-icon"
                                     src="{{ static_asset('assets/frontend/assets/images/icon/facebook.svg') }}">
                                Log In With Facebook
                            </a>
                            <p class="login-p text-center"><a class="link" href="{{ route('password.request') }}">Forgot
                                    Password?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

