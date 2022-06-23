@extends('frontend.layouts.master')
@push('style')
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/login.css') }}">
@endpush
@section('content')



    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1 mb-5 ">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">


                        <div class="container mt-3 pt-3 mb-1 pb-5">
                            <h1 class="login-header text-center">Sign Up</h1>


                            <form class="login" id="login-form" method="POST" action="{{ route('register') }}">
                                @csrf
 

                                <div id="div_id_login" class="form-group">
                                    <label for="name" class=" requiredField"> Name<span class="asteriskField">*</span>
                                    </label>
                                    <div>
                                        <input type="text" name="name" class="form-control" required=""
                                               id="name" value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
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

                                <div id="div_id_password" class="form-group">
                                    <label for="id_password" class=" requiredField">Password Confirmation <span
                                                class="asteriskField">*</span> </label>
                                    <div class="">
                                        <input type="password" name="password_confirmation"
                                               class="textinput textInput form-control" required="" id="id_password">
                                    </div>
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <button id="login_submit_button" class="btn btn-primary mb-3 login-test">Sign Up
                                </button>
                            </form>
                            <p class="signup-disclaimer text-center">By clicking the "Sign up" button and "Create your
                                account", you are creating a Grandfatheredly account and agree to Grandfatheredly's
                                <a class="signup-link" style="color:#0275d8;">Terms of Service</a> and <a
                                        class="signup-link" style="color:#0275d8;">Privacy Policy</a>.</p>
                            <p class="login-p text-center"><a class="link" href="{{ route('login') }}">Already Have an
                                    account?</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

