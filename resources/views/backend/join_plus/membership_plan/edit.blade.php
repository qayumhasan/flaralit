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

    <div class="row justify-content-center">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Membership Plan</h4>
            
            <form action="{{ route('admin.membership.plan_section.update') }}" class="forms-sample needs-validation" novalidate
              method="POST">
              @csrf
         
              @include('backend.join_plus.membership_plan._form')
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
@include('backend.product.category.script')
@endpush