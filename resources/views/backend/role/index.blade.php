@php
    use App\Models\Role;
    use App\Models\User;
@endphp
@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Role Management</h6>
                </div>
            </div>
            {{-- Datatable --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Roles</h4>
                            <div class="table-responsive">
                                <table id="order-listing" class="table" style="width: 100%">
                                    <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count = 1; @endphp
                                    @foreach($roles as $role)
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('admin.role.permission', $role->role_id) }}"
                                                       class="btn btn-outline-warning" title="Edit">
                                                        Permissions
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
