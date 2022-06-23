@extends('backend.layouts.master')
@push('style')
<style>
    .btn-media-type {
        width: 20px !important;
        height: 20px !important;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
        font-size: 16px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
        font-size: 16px;
    }
</style>
@endpush
@section('content')
<div class="main-panel config_dash_page">
    <div class="content-wrapper">
        <div class="row align-items-center  justify-content-between pb-3">
            <div class="col-lg-6 col-sm-6">
                <h6 class="page-title">Setup & Configurations</h6>
            </div>
            <div class="row">
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Google API Credential</h4>
                        </div>
                        <div class="card-body">
                            @include('backend.configuration._form_google')
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Facebook API Credential</h4>
                        </div>
                        <div class="card-body">
                            @include('backend.configuration._form_facebook')
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Paypal API Credential</h4>
                        </div>
                        <div class="card-body">
                            @include('backend.configuration._form_paypal')
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Twilio API Credential</h4>
                        </div>
                        <div class="card-body">
                            @include('backend.configuration._form_twilio')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection