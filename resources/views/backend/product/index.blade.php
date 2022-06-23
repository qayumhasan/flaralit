@php
    use App\Models\Product;
@endphp
@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Product</h6>
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
                                        <th>Incomplete Steps</th>
                                        <th>GFL Choice?</th>
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
                                                @forelse(product_incomplete_steps($product->product_id) as $step)
                                                    <label class="badge badge-warning">{{ $step }}</label>
                                                @empty
                                                    <label class="badge badge-success">All done</label>
                                                @endforelse
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <div class="form-check form-check-primary">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input gfl_choice" name="gfl_choice"
                                                                   value="choice" productSlug = {{ $product->slug }}
                                                                {{ $product->gfl_choice == true ? 'checked' : null }}
                                                            >
                                                            GFL choice <i class="input-helper"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-md dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-settings menu-icon"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                                    <a class="dropdown-item text-primary" href="{{ route('admin.product.edit', $product->slug) }}"><i class="ti-pencil"></i> Edit</a>
                                                    <form action="{{ route('admin.product.destroy', $product->slug) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="dropdown-item text-danger"><i class="ti-trash"></i>Delete</button>
                                                    </form>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-behance" href="{{ route('admin.product.edit_product_image', $product->slug) }}"><i class="ti-hand-point-right"></i> Images</a>
                                                    <a class="dropdown-item text-behance" href="{{ route('admin.product.edit_product_redemption', $product->slug) }}"><i class="ti-hand-point-right"></i> Redemption</a>
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

@push('script')
    <script type="text/javascript">
        $('.gfl_choice').change(function () {
            var product_slug = $(this).attr('productSlug');
            if($(this).is(':checked')) {
                var gfl_choice = 1;
            } else {
                var gfl_choice = 0;
            }

            var action = '{{ route('admin.product.update_gfl_choice') }}';
            $.ajax({
                url: action,
                cache: false,
                type: 'POST',
                data: {gfl_choice: gfl_choice, product_slug: product_slug},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    console.log(data)
                    toastr.success('GFL choice updated successfully');
                },
                error: function () {
                    swal({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Something went wrong!',
                        timer: 1500
                    })
                }
            });
        });
    </script>
@endpush
