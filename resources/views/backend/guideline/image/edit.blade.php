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
                    <h6 class="page-title">Image Guidelines - {{ ImageGuideline::SECTION_LIST[$section_id] }}</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    @if($section_id == ImageGuideline::SECTION_INSTRUCTION)
                        <a href="{{ route('admin.guideline.image.create_instruction') }}"
                           class="btn btn-md btn-primary">Add New</a>
                    @else
                        <a href="{{ route('admin.guideline.image.index') }}" class="btn btn-md btn-success">Go
                            Back</a>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Image Guidelines</h4>
                            @if($section_id == ImageGuideline::SECTION_BANNER)
                                @include('backend.guideline.image._form_banner')
                            @elseif($section_id == ImageGuideline::SECTION_REQUIREMENT)
                                @include('backend.guideline.image._form_requirement')
                            @elseif($section_id == ImageGuideline::SECTION_ADVERTISEMENT)
                                @include('backend.guideline.image._form_advertisement')
                            @elseif($section_id == ImageGuideline::SECTION_INSTRUCTION)
                                @include('backend.guideline.image.instruction.index')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    @include('backend.guideline.image._script')
@endpush
