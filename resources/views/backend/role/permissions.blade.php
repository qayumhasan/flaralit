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
                    <h6 class="page-title">{{ $role->name }} Role</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="{{ route('admin.role.index') }}" class="btn btn-md btn-success">Back</a>
                </div>
            </div>
            {{-- Datatable --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Permissions</h4>
                            <p class="card-description">
                                Select permission for <strong>{{ $role->name }}</strong> Role.
                            </p>
                            <div class="table-responsive">
                                <form action="{{ route('admin.role.update_permission', $role->role_id) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <table class="table table-bordered" style="width: 100%">
                                        <tbody>
                                        @foreach($permissions as $chunks)
                                            <tr>
                                                @foreach($chunks as $permission)
                                                    <td>
                                                        <input class="mr-2" type="checkbox" name="permissions[]"
                                                               value="{{ $permission->permission_id }}" {{ (in_array($permission->permission_id, $role_permission_ids)) ? 'checked': null }}>
                                                        {{ $permission->name }}
                                                    </td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
