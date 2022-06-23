@php
    use App\Models\ImageGuideline;
@endphp
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
                    <h6 class="page-title">Image Guidelines - Create New Instruction</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="{{ route('admin.guideline.image.create', ['section_id'=>ImageGuideline::SECTION_INSTRUCTION]) }}" class="btn btn-md btn-success">Go
                        Back</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create New Instruction for Image Guideline</h4>
                            <form action="{{ route('admin.guideline.image.store_instruction') }}"
                                  class="forms-sample needs-validation" method="POST" enctype="multipart/form-data"
                                  novalidate>
                                @csrf
                                @include('backend.guideline.image.instruction._form')
                                <button type="submit" class="btn btn-primary mr-2 mt-2">Add New</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    @include('backend.guideline.image.instruction._script')
@endpush

