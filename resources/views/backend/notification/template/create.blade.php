@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Notification</h6>
                </div>
            </div>
            <form action="{{ route('admin.notification.template.store') }}" class="forms-sample needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Create Notification Template</h4>
                                <p class="card-description">
                                    Notification Template creation form.
                                </p>
                                @include('backend.notification.template._form')
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2 mt-2">Add New</button>
            </form>
        </div>
    </div>
@endsection

