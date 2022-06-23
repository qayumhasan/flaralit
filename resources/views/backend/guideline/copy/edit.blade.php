@php
    use App\Models\CopyGuideline;
@endphp
@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Copy Guidelines - {{ CopyGuideline::SECTION_LIST[$section_id] }}</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="{{ route('admin.guideline.copy.index') }}" class="btn btn-md btn-success">Go
                        Back</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Copy Guidelines</h4>
                            @if($section_id == CopyGuideline::SECTION_BANNER)
                                @include('backend.guideline.copy._form_banner')
                            @elseif($section_id == CopyGuideline::SECTION_GET_STARTED)
                                @include('backend.guideline.copy._form_get_started')
                            @elseif($section_id == CopyGuideline::SECTION_BASIC)
                                @include('backend.guideline.copy._form_basic')
                            @elseif($section_id == CopyGuideline::SECTION_CONTENT)
                                @include('backend.guideline.copy._form_content')
                            @elseif($section_id == CopyGuideline::SECTION_EXAMPLE)
                                @include('backend.guideline.copy._form_example')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    @include('backend.guideline.copy._script')
@endpush
