@extends('backend.layouts.master')
@push('style')
    <style>
        .btn-media-type {
            width: 20px!important;
            height: 20px!important;
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
                    <h6 class="page-title">Blog</h6>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <form action="{{ route('admin.blog.store') }}" class="forms-sample needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Create New Blog</h4>
                                <p class="card-description">
                                    Blog creation form.
                                </p>
                                @include('backend.blog._form')
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <h4 class="card-title">Meta Information</h4>
                                @include('backend.blog._form_meta')
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2 mt-2">Add New</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
