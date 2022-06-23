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
        
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif
      

    
      <form class="login" id="login-form" method="POST" action="{{ route('verification.send') }}">
        @csrf
        
    

        <div id="div_id_login" class="form-group">
          <label for="email" class=" requiredField"> Email<span class="asteriskField">*</span> </label> 
            <div>
                <input type="email" name="email" class="emailinput form-control" required="" id="email" value="{{ old('email') }}">
            </div>
                @error('email')
            <div class="text-danger">{{ $message }}</div>
                @enderror
        </div> 


        
            

            <button id="login_submit_button" class="btn btn-primary mb-3 login-test">     {{ __('Resend Verification Email') }}</button>
          </form>
       
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn btn-info mb-3 login-test">
                {{ __('Log Out') }}
            </button>
        </form>
       
        </div>
    
                </div>
            </div>
          </div>
        </div>
    </div>
    
       
@endsection

