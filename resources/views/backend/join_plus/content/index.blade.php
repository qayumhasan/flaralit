@php
use App\Models\PlusContent;
@endphp
@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Join Plus</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="{{ route('admin.plus.content_section.layout') }}" class="btn btn-md btn-success">Add
                        New</a>
                </div>
            </div>
            {{-- Datatable --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Contents</h4>
                            <div class="table-responsive">
                                <table id="order-listing" class="table" style="width: 100%">
                                    <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Layout</th>
                                        <th>Title</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count = 1; @endphp
                                    @foreach($contents as $content)
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            <td>{{ PlusContent::LAYOUT_LIST[$content->layout] }}</td>
                                            @php $main_content = json_decode($content->content); @endphp
                                            <td>{{ $content->layout == PlusContent::LAYOUT_ONE_IN_ONE ? $main_content->title : $main_content[0]->title }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('admin.plus.content_section.edit', $content->id) }}"
                                                       class="btn btn-outline-warning" title="Deactivate user">
                                                        <i class="ti-pencil"></i>
                                                    </a>
                                                    <form class="ml-2"
                                                          action="{{ route('admin.plus.content_section.destroy', $content->id) }}"
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
