@php
use App\Models\Guide;
@endphp
@extends('backend.layouts.master')
@push('style')
<style>
    a.btn.btn-primary.rounded-circle.btn-sm.plus_btn_style {
        padding: 6px 8px;
    }

    a.btn.btn-danger.rounded-circle.btn-sm.plus_btn_style {
        padding: 7px 9px;
    }
</style>
@endpush
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row align-items-center  justify-content-between pb-3">
            <div class="col-lg-6 col-sm-6">
                <h6 class="page-title">Guide - {{ Guide::SECTION_LIST[$section_id] }}</h6>
            </div>
            <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                <a href="{{ route('admin.guideline.guide.index') }}" class="btn btn-md btn-success">Go
                    Back</a>
            </div>
        </div>



        @if($section_id == Guide::SECTION_ONE)
        @include('backend.guideline.guide._form_section_one')
        @elseif($section_id == Guide::SECTION_TWO)
        @include('backend.guideline.guide._form_section_two')
        @elseif($section_id == Guide::SECTION_THREE)
        @include('backend.guideline.guide._form_section_three')
        @elseif($section_id == Guide::SECTION_FOUR)
        @include('backend.guideline.guide._form_section_four')
        @elseif($section_id == Guide::SECTION_FIVE)
        @include('backend.guideline.guide._form_section_five')
        @elseif($section_id == Guide::SECTION_SIX)
        @include('backend.guideline.guide._form_section_six')
        @elseif($section_id == Guide::SECTION_SEVEN)
        @include('backend.guideline.guide._form_section_seven')
        @elseif($section_id == Guide::SECTION_EIGHT)
        @include('backend.guideline.guide._form_section_eight')
        @elseif($section_id == Guide::SECTION_NINE)
        @include('backend.guideline.guide._form_section_nine')
        @elseif($section_id == Guide::SECTION_TEN)
        @include('backend.guideline.guide._form_section_ten')
        @elseif($section_id == Guide::SECTION_ELEVEN)
        @include('backend.guideline.guide._form_section_eleven')
        @elseif($section_id == Guide::SECTION_TWELVE)
        @include('backend.guideline.guide._form_section_twelve')
        @elseif($section_id == Guide::SECTION_THIRTEEN)
        @include('backend.guideline.guide._form_section_thirteen')
        @elseif($section_id == Guide::SECTION_FOURTEEN)
        @include('backend.guideline.guide._form_section_fourteen')
        @elseif($section_id == Guide::SECTION_FIFTEEN)
        @include('backend.guideline.guide._form_section_fifteen')
        @elseif($section_id == Guide::SECTION_SIXTEEN)
        @include('backend.guideline.guide._form_section_sixteen')
        @endif


    </div>
</div>
@endsection
@include('backend.guideline.guide._script_section_four')
@include('backend.guideline.guide._section_six_script')
@include('backend.guideline.guide._section_seven_script')
@push('script')
<script>
    $(document).ready(function () {
            $('.custom_summernote').summernote({
                height: 100,
            });
        });

        function add_new_row() {
            $('#content').append(`
                <div class="row" id="row">
                    <div class="col-9 col-sm-10 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <input type="text" class="form-control" name="contents[]" placeholder="Content" required>
                            <div class="invalid-feedback">
                                Title is mandatory!
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-sm-2 grid-margin grid-margin-lg-0 d-flex">
                        <button type="button" class="btn btn-primary btn-rounded btn-icon" onclick="add_new_row()">
                            <i class="ti-plus"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2" onclick="delete_row(this)">
                            <i class="ti-trash"></i>
                        </button>
                    </div>
                </div>`)
        };

        function delete_row(el) {
            el.closest('.row').remove();
        };
</script>
<script>
    $(document).ready(function() {
        $('.summernote2').summernote({
            height: 60,
        });
    });
</script>
@endpush