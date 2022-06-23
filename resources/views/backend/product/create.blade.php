@extends('backend.layouts.master')
@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>
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
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row align-items-center  justify-content-between pb-3">
            <div class="col-lg-6 col-sm-6">
                <h6 class="page-title">Product</h6>
            </div>
        </div>
        <form action="{{ route('admin.product.store') }}" class="forms-sample needs-validation" method="POST"
            enctype="multipart/form-data" novalidate>
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create Product</h4>
                            <p class="card-description">
                                Product creation form.
                            </p>
                            @include('backend.product._form_basic_inputs')
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body" id="content">
                            <h4 class="card-title">Product Pricing</h4>
                            @include('backend.product._form_price')
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <h4 class="card-title">Product Meta Data</h4>
                            @include('backend.product._form_meta')
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2 mt-2">Add New</button>
        </form>
    </div>
</div>
@endsection

@push('script')

@include('backend.product._script')
@endpush
