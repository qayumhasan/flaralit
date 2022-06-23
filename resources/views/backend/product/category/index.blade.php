@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Product Category</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="{{ route('admin.product_category.create') }}" class="btn btn-md btn-success">Add New</a>
                </div>
            </div>

            {{-- Datatable --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Categories</h4>
                            <div class="table-responsive">

                                <table id="order-listing" class="table table-striped dt-responsive nowrap"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($product_categories as $product_category)
                                        <tr>
                                            <td>{{$product_category->name}}</td>
                                            <td>
                                                @if($product_category->status == 1)
                                                    <label class="badge badge-success">Active</label>
                                                @else
                                                    <label class="badge badge-danger">Inactive</label>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('admin.product_category.edit', $product_category->product_category_id) }}"
                                                       class="btn btn-outline-warning" title="Edit"><i
                                                            class="ti-pencil"></i></a>
                                                    <form class="ml-2"
                                                          action="{{ route('admin.product_category.destroy', $product_category->product_category_id) }}"
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
