@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row align-items-center  justify-content-between pb-3">
            <div class="col-lg-6 col-sm-6">
                <h6 class="page-title">Join Plus</h6>
            </div>
            <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-md btn-success">Go Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('admin.plus.stack.update') }}" class="forms-sample needs-validation"
                    method="POST" novalidate>
                    @csrf
                    @include('backend.join_plus.stack_saving._form')
                    <button type="submit" class="btn btn-primary mr-2 mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>

</script>
@endpush