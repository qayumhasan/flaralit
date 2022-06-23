@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Notification</h6>
                </div>
            </div>
            <form action="{{ route('admin.notification.template.update', $template->id) }}"
                  class="forms-sample needs-validation" method="POST" novalidate>
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Notification Template</h4>
                                @include('backend.notification.template._form')
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2 mt-2">Update</button>
            </form>
        </div>
    </div>
@endsection

