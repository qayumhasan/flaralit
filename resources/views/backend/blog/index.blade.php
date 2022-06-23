@php
    use App\Models\Blog;
@endphp
@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Blog</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="{{ route('admin.blog.create') }}" class="btn btn-md btn-success">Add New</a>
                </div>
            </div>

            {{-- Datatable --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Blogs</h4>
                            <div class="table-responsive">

                                <table id="order-listing" class="table table-striped dt-responsive nowrap"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Category</th>
                                        <th>Publish Date</th>
                                        <th>Is_Featured</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td>{{$blog->title}}</td>
                                            <td>{{$blog->user->name}}</td>
                                            <td>
                                                @foreach($blog->categories as $category)
                                                    <span class="badge badge-primary">{{ $category->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>{{ date('d M, Y' , strtotime($blog->publish_date)) }}</td>
                                            <td>
                                                <label class="badge {{ ($blog->is_featured == 1) ? 'badge-success' : 'badge-danger' }}">
                                                    {{ ($blog->is_featured == 1) ? 'Yes' : 'No' }}
                                                </label>
                                            </td>
                                            <td>
                                                <label class="badge {{ ($blog->status == Blog::STATUS_ACTIVE) ? 'badge-success' : 'badge-danger' }}">
                                                    {{ Blog::STATUS_LIST[$blog->status] }}
                                                </label>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-md dropdown-toggle" type="button"
                                                        id="dropdownMenuSizeButton3" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-settings menu-icon"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                                    <a class="dropdown-item"
                                                       href="{{ route('admin.blog.edit', $blog->slug) }}">
                                                        <i class="ti-pencil text-warning"></i> Edit</a>
                                                    <form action="{{ route('admin.blog.destroy', $blog->slug) }}"
                                                          method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="ti-trash text-danger"></i>Delete
                                                        </button>
                                                    </form>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="{{ route('admin.blog.manage_content', $blog->slug) }}"><i class="ti-hand-point-right"></i>Contents</a>
                                                    {{--<a class="dropdown-item" href="{{ route('admin.product.media', $blog->slug) }}"><i class="ti-hand-point-right"></i> Portfolios</a>--}}
                                                    {{--<a class="dropdown-item" href="{{ route('admin.product_schedules.edit', $blog->slug) }}"><i class="ti-hand-point-right"></i> Schedules</a>--}}
                                                    {{--<a class="dropdown-item" href="{{ route('admin.product.index_review', $blog->slug) }}"><i class="ti-hand-point-right"></i> Reviews</a>--}}
                                                    {{--<a class="dropdown-item" href="{{ route('admin.product.edit_learner', $blog->slug) }}"><i class="ti-hand-point-right"></i> Course For?</a>--}}
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
