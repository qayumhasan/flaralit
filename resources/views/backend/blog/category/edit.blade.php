@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Blog Category</h6>
                </div>
            </div>
            {{-- Datatable --}}
            <div class="row">
                <div class="col-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Blog Categories</h4>
                            <div class="table-responsive">
                                <table id="order-listing" class="table table-striped dt-responsive nowrap" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blog_categories as $blog_category)
                                        <tr>
                                            <td>{{$blog_category->name}}</td>
                                            <td>
                                                @if($blog_category->status == 1)
                                                    <label class="badge badge-success">Active</label>
                                                @else
                                                    <label class="badge badge-danger">Inactive</label>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('admin.blog_category.edit', $blog_category->slug) }}"
                                                       class="btn btn-outline-warning" title="Edit"><i
                                                            class="ti-pencil"></i></a>
                                                    <form class="ml-2"
                                                          action="{{ route('admin.blog_category.destroy', $blog_category->slug) }}"
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
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card card-inverse-success">
                        <div class="card-body">
                            <h4 class="card-title"><span class="text-success">Edit Blog Category</span></h4>
                            <form class="forms-sample needs-validation" method="POST" action="{{ route('admin.blog_category.update', $blog_category->slug) }}" novalidate>
                                @csrf
                                @method('put')
                                @include('backend.blog.category._form')
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
    @include('backend.product.type.script')
@endpush
