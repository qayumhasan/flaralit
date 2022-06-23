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
      <h1 class="login-header text-center">Confirm Password</h1>
      

      <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

      <form class="login" id="login-form" method="POST" action="{{ route('password.confirm') }}">
        @csrf
        
    

        <div id="div_id_login" class="form-group">
          <label for="password" class=" requiredField"> Password<span class="asteriskField">*</span> </label> 
            <div>
                <input type="password" name="password" class="emailinput form-control" required="" id="password">
            </div>
                @error('email')
            <div class="text-danger">{{ $message }}</div>
                @enderror
        </div> 


        
            

            <button id="login_submit_button" class="btn btn-primary mb-3 login-test">{{ __('Confirm') }}</button>
          </form>
        </div>
    
                </div>
            </div>
          </div>
        </div>
    </div>
    
       
@endsection

