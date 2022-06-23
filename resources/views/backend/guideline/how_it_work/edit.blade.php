@php
use App\Models\HowItWork;
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
                <h6 class="page-title">How It Works - {{ HowItWork::SECTION_LIST[$section_id] }}</h6>
            </div>
            <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                <a href="{{ route('admin.guideline.how_it_work.index') }}" class="btn btn-md btn-success">Go
                    Back</a>
            </div>
        </div>



        @if($section_id == HowItWork::SECTION_ONE)
        @include('backend.guideline.how_it_work._form_section_one')
        @elseif($section_id == HowItWork::SECTION_TWO)
        @include('backend.guideline.how_it_work._form_section_two')
        @elseif($section_id == HowItWork::SECTION_THREE)
        @include('backend.guideline.how_it_work._form_section_three')
        @elseif($section_id == HowItWork::SECTION_FOUR)
        @include('backend.guideline.how_it_work._form_section_four')
        @elseif($section_id == HowItWork::SECTION_FIVE)
        @include('backend.guideline.how_it_work._form_section_five')
        @elseif($section_id == HowItWork::SECTION_SIX)
        @include('backend.guideline.how_it_work._form_section_six')
        @elseif($section_id == HowItWork::SECTION_SEVEN)
        @include('backend.guideline.how_it_work._form_section_seven')
        @elseif($section_id == HowItWork::SECTION_EIGHT)
        @include('backend.guideline.how_it_work._form_section_eight')
        @endif


    </div>
</div>
@endsection
@include('backend.guideline.how_it_work._section_four_script')
@include('backend.guideline.how_it_work._section_six_script')
@include('backend.guideline.how_it_work._section_seven_script')
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
@endpush