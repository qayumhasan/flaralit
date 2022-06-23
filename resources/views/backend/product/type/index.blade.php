@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row align-items-center  justify-content-between pb-3">
            <div class="col-lg-6 col-sm-6">
                <h6 class="page-title">Product Types</h6>
            </div>
        </div>

        {{-- Datatable --}}
        <div class="row">
            <div class="col-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List of Types</h4>
                        <div class="table-responsive">
                            <table id="order-listing" class="table table-striped dt-responsive nowrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Type Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($product_types)
                                    @foreach($product_types as $product_type)
                                    <tr>
                                        <td>{{$product_type->name}}</td>
                                        <td>
                                            @if($product_type->status == 1)
                                            <label class="badge badge-success">Active</label>
                                            @else
                                            <label class="badge badge-danger">Inactive</label>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                           
                                                <a href="{{ route('admin.product_type.edit', $product_type->product_type_id) }}"
                                                    class="btn btn-outline-warning" title="Edit"><i
                                                        class="ti-pencil"></i></a>
                                                <form class="ml-2"
                                                    action="{{ route('admin.product_type.destroy', $product_type->product_type_id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-outline-danger show_confirm"
                                                        title="Delete"><i class="ti-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Product Type</h4>
                        <p class="card-description">
                            Type creation form.
                        </p>
                        <form action="{{ route('admin.product_type.store') }}" class="forms-sample needs-validation"
                            novalidate method="POST">
                            @csrf
                            @include('backend.product.type._form')
                            <button type="submit" class="btn btn-primary mr-2">Add New</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection