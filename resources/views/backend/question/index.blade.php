@php
    use App\Models\Product;
@endphp
@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Product Question</h6>
                </div>
            </div>
            {{-- Datatable --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Products Containing Question</h4>
                            <div class="table-responsive">

                                <table id="order-listing" class="table table-striped dt-responsive nowrap"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Number of Questions</th>
                                        <th>Last Question Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->questions_count}}</td>
                                            <td>{{ date('d F Y, h:i:s A', strtotime($product->questions[0]->created_at)) }}</td>
                                            <td>
                                                <a href="{{ route('admin.product.question', $product->slug) }}" class="btn btn-primary btn-md">
                                                    Questions
                                                </a>
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
