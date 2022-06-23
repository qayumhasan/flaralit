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
                    <h6 class="page-title">User Management</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="{{ route('admin.user.create') }}" class="btn btn-md btn-success">Add New</a>
                </div>
            </div>
            {{-- Datatable --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Users</h4>
                            <div class="table-responsive">
                                <table id="order-listing" class="table" style="width: 100%">
                                    <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Image</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count = 1; @endphp
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            <td class="py-1">
                                                <img src="{{static_asset(($user->image != null) ? $user->image : get_default_user_image() )}}"/>
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ Role::ROLE_LIST[$user->role] }}</td>
                                            <td>
                                                <span class="badge {{ ($user->status == User::STATUS_ACTIVE) ? 'badge-success' : 'badge-danger' }}">
                                                    {{ User::STATUS_TYPE_LIST[$user->status] }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('admin.user.update_status', $user->id) }}"
                                                       class="btn btn-outline-warning" title="Deactivate user">
                                                        {{ ($user->status == User::STATUS_ACTIVE) ? 'Deactivate' : 'Activate' }}
                                                    </a>
                                                    <form class="ml-2"
                                                          action="{{ route('admin.user.destroy', $user->id) }}"
                                                          method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                                class="btn btn-outline-danger show_confirm"
                                                                title="Delete"><i class="ti-trash"></i></button>
                                                    </form>
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
