@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row align-items-center  justify-content-between pb-3">
      <div class="col-lg-6 col-sm-6">
        <h6 class="page-title">Product Category</h6>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Create Product Category</h4>
            <p class="card-description">
              Category creation form.
            </p>
            <form action="{{ route('admin.product_category.store') }}" class="forms-sample needs-validation" novalidate
              method="POST">
              @csrf
              @include('backend.product.category._form')
              <button type="submit" class="btn btn-primary mr-2">Add New</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script')
@include('backend.product.category.script')
@endpush