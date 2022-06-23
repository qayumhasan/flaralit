@php
    use App\Models\Product;
@endphp
@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Seller Product</h6>
                </div>
            </div>
            {{-- Datatable --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Products</h4>
                            <div class="table-responsive">
                                <table id="order-listing" class="table table-striped dt-responsive nowrap"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Product Name</th>
                                        <th>Seller Name</th>
                                        <th>Is Free</th>
                                        <th>Base Price</th>
                                        <th>Comparison Price</th>
                                        <th>Last Updated</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $count = 1; @endphp
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->seller->name }}</td>
                                            <td>{{ $product->is_free == true ? 'Free' : null }}</td>
                                            <td>{{ number_format($product->price, 2) }}</td>
                                            <td>{{ number_format($product->discount_price, 2) }}</td>
                                            <td>{{ date('d F, Y@H:m:i A', strtotime($product->updated_at)) }}</td>
                                            <td>
                                                <label
                                                    class="badge {{ ($product->status != Product::STATUS_REJECTED) ? 'badge-primary' : 'badge-danger' }}">
                                                    {{ Product::STATUS_LIST[$product->status] }}
                                                </label>
                                            </td>
                                            <td>
                                                @if($product->status == Product::STATUS_PENDING)
                                                    <div class="d-flex">
                                                        <a href="{{ route('admin.seller_product.accept', $product->unique_id) }}"
                                                           class="btn btn-outline-success" title="Edit">Accept</a>
                                                        <a href="{{ route('admin.seller_product.reject', $product->unique_id) }}"
                                                           class="btn btn-outline-danger ml-1" title="Edit">Reject</a>
                                                    </div>

                                                @elseif($product->status == Product::STATUS_ACCEPTED)
                                                    <a href="{{ route('admin.seller_product.reject', $product->unique_id) }}"
                                                       class="btn btn-outline-danger ml-1" title="Edit">Reject</a>
                                                @elseif($product->status == Product::STATUS_REJECTED)
                                                    <a href="{{ route('admin.seller_product.accept', $product->unique_id) }}"
                                                       class="btn btn-outline-success" title="Edit">Accept</a>
                                                @endif
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
