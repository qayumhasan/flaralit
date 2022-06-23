@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row align-items-center  justify-content-between pb-3">
      <div class="col-lg-6 col-sm-6">
        <h6 class="page-title">Testimonial</h6>
      </div>
      <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
        <a href="{{ route('admin.testimonial.index') }}" class="btn btn-md btn-secondary">Go Back</a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Create Testimonial</h4>

            <form action="{{ route('admin.testimonial.store') }}" class="forms-sample  needs-validation" method="POST"
              enctype="multipart/form-data" novalidate>
              @csrf
              @include('backend.testimonial._form')

              <button type="submit" class="btn btn-primary mr-2">Add New</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection