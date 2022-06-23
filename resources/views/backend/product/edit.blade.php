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
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Product</h6>
                </div>
            </div>
            <form action="{{ route('admin.product.update', $product->slug) }}" class="forms-sample" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Product</h4>
                                @include('backend.product._form_basic_inputs')
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-body" id="content">
                                <h4 class="card-title">Edit Product Pricing</h4>
                                @include('backend.product._form_price')
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-body">
                                <h4 class="card-title">Edit Product Meta Data</h4>
                                @include('backend.product._form_meta')
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
            </form>
        </div>
    </div>
@endsection

@push('script')
    @include('backend.product._script')
@endpush
