@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">User Management</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="{{ route('admin.user.index') }}" class="btn btn-md btn-success">Go Back</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Your Information</h4>
                            <form action="{{ route('admin.user.update', auth()->user()->id) }}" class="forms-sample needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
                                @method('put')
                                @include('backend.users._form')
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Change Password</h4>
                            <form action="{{ route('admin.user.password.change') }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 grid-margin grid-margin-lg-0">
                                        <div class="form-group">
                                            <label for="current_password">Current Password <span class="text-danger">*</span></label>
                                            <input type="password" name="current_password" class="form-control" id="status" placeholder="Current Password">
                                            @error('current_password')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password">New Password <span class="text-danger">*</span></label>
                                            <input type="password" name="password" class="form-control" id="status" placeholder="Password">
                                            @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm New Password <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                                                   placeholder="Confirm Password">
                                            @error('password_confirmation')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Change Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
