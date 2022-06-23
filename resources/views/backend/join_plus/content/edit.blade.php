@php
use App\Models\PlusContent;
@endphp
@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row align-items-center  justify-content-between pb-3">
            <div class="col-lg-6 col-sm-6">
                <h6 class="page-title">Join Plus - Content Section</h6>
            </div>
            <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                <a href="{{ route('admin.plus.content_section.index') }}" class="btn btn-md btn-success">Go
                    Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <form action="{{ route('admin.plus.content_section.update', $plus_content->id) }}"
                    class="forms-sample needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('put')
                    @php $content = json_decode($plus_content->content); @endphp
                    <input type="hidden" name="layout" value="{{ $plus_content->layout }}">
                    @if($plus_content->layout == PlusContent::LAYOUT_ONE_IN_ONE)
                    @include('backend.join_plus.content._form_one_in_one')
                    @elseif($plus_content->layout == PlusContent::LAYOUT_THREE_IN_ONE)
                    @include('backend.join_plus.content._form_three_in_one')
                    @endif
                    <button type="submit" class="btn btn-primary mr-2 mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function () {
            $('.custom_summernote').summernote({
                height: 100,
            });
        });
</script>
@endpush