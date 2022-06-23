@extends('backend.layouts.master')
@push('style')
<link rel="stylesheet" href="{{ static_asset('assets/backend/vendors/simplemde/simplemde.min.css') }}">
@endpush
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row align-items-center  justify-content-between pb-3">
      <div class="col-lg-6 col-sm-6">
        <h6 class="page-title">Course Category</h6>
      </div>
      <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
        <a href="{{ route('admin.product_category.index') }}" class="btn btn-md btn-secondary">Go Back</a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Course Category</h4>
            <form class="forms-sample needs-validation" novalidate method="POST"
              action="{{ route('admin.product_category.update', $product_category->id) }}">
              @csrf
              @method('put')
              @include('backend.product.category._form')

              <button type="submit" class="btn btn-primary mr-2">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script')
<script src="{{ static_asset('assets/backend/vendors/simplemde/simplemde.min.js') }}"></script>
<script>
  var simplemde = new SimpleMDE({ element: $("#simpleMde")[0] });
</script>
@include('backend.product.category.script')
@endpush