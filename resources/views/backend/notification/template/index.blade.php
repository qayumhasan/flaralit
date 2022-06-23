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
                    <h6 class="page-title">Notification Management</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="{{ route('admin.notification.template.create') }}" class="btn btn-md btn-success">Make New Template</a>
                </div>
            </div>
            {{-- Datatable --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Templates</h4>
                            <div class="table-responsive">
                                <table id="order-listing" class="table" style="width: 100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Sms Body</th>
                                        <th>Email Subject</th>
                                        <th>Email Body</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count = 1; @endphp
                                    @foreach($templates as $template)
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            <td>{{ $template->title }}</td>
                                            <td>{!! $template->sms_body !!}</td>
                                            <td>{{ $template->email_subject }}</td>
                                            <td>{!! $template->email_body !!}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('admin.notification.template.edit', $template->id) }}"
                                                       class="btn btn-outline-warning" title="View">
                                                        <i class="ti-pencil"></i>
                                                    </a>
                                                    <form class="ml-2"
                                                          action="{{ route('admin.notification.template.destroy', $template->id) }}"
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
