@extends('frontend.layouts.master')
@push('style')
    <link rel="stylesheet" href="https://appsumo2-cdn.appsumo.com/static/dist/css/base.89a21e9d3213.css"
          type="text/css">

    <link rel="stylesheet"
          href="https://appsumo2-cdn.appsumo.com/static/dist/css/user_account_products.3aa6a23084c8.css"
          type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" type="text/css">
    <style>

    </style>
@endpush
@section('content')
    <section class="pt-20 pt-lg-50">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-md-end flex-column flex-md-row mb-20 mb-md-30">
                    <h1 class="sumo-title mr-md-20 mb-20 mb-md-0">Wishlist Products</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-50">
        <div class="container bg-light" >
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-2">
                    <table id="example_datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Deal Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>
                                <img src="{{ static_asset($product->cover_image) }}" style="height: 100px!important;width: 80px!important;">
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>${{ number_format(($product->discount_price > 0) ? $product->discount_price : $product->price, 2) }}</td>
                            <td>{{ \App\Models\Product::TERMS[$product->detail->term_type] }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('product-details', $product->slug) }}" type="submit" class="btn btn-outline-secondary text-black" title="Delete">
                                        View product
                                    </a>
                                    <form action="{{ route('add_to_cart') }}" method="POST" class="ml-2">
                                        @csrf
                                        <input type="hidden" name="csrfmiddlewaretoken"
                                               value="8Ojb0AmHwh9oQa51PEjXO0O4ry8FzwhuE74SsehkbWYhWmwSrC4mRRTbR4A6NT7j">
                                        <input class="input-deal-153215" name="slug" id="slug" required hidden
                                               value="{{ $product->slug }}">
                                        <input class="input-codes-153215" name="quantity" id="quantity" required hidden
                                               value="1" max="3">
                                        <input class="input-plan-153215" name="plan_id" required hidden value="153215">
                                        <button class="btn full-width waves-effect waves-light" type="submit"
                                                value="Buy Now">Buy Now
                                        </button>
                                    </form>
                                    <form class="ml-2" action="{{ route('delete_wishlist_product', $product->pivot->id) }}"
                                          method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger " title="Delete">
                                            Delete Product
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
{{--                        <tfoot>--}}
{{--                        <tr>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Position</th>--}}
{{--                            <th>Office</th>--}}
{{--                            <th>Age</th>--}}
{{--                            <th>Start date</th>--}}
{{--                            <th>Salary</th>--}}
{{--                        </tr>--}}
{{--                        </tfoot>--}}
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('script')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example_datatable').DataTable();
        });
    </script>
@endpush
