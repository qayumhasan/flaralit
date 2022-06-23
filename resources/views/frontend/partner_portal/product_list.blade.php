@php use App\Models\Product; @endphp
@extends('frontend.partner_portal.layout.layout')

@push('style')
<style>
    .table td,
    .table th {
        border-top: 0;
    }

    .table.table_style .listing-row {
        border-bottom: 1px solid #dee2e6;
        border-left: 1px solid #dee2e6;
        border-right: 1px solid #dee2e6;
    }

    .listing-row:first-child {
        border-top: 1px solid #dee2e6;
    }


    .table.table_style th {
        border: 0;
    }
</style>
@endpush

@section('content')

<div data-v-61df8256="" class="mb-5">
    <div data-v-5355657c="" class="d-flex align-items-md-center flex-column flex-md-row mb-4">
        <h1 data-v-5355657c="" class="mb-3 mb-md-0 mr-0 mr-md-2 flex-grow-1">
            Products
        </h1>
        <div data-v-5355657c="" class="text-right">
            <a href="{{ route('front.product.create', generate_product_unique_id()) }}" data-v-5355657c=""
                slot="redemption-step" default="default" class="btn btn-primary px-4 d-block w-100"><svg
                    data-v-5355657c="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus"
                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                    class="mr-2 svg-inline--fa fa-plus fa-w-14">
                    <path data-v-5355657c="" fill="currentColor"
                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"
                        class=""></path>
                </svg>
                List new product
            </a>
        </div>
    </div>
    <table data-v-61df8256="" class="table table_style">
        <thead data-v-61df8256="">
            <tr data-v-61df8256="" class="d-none d-md-table-row">
                <th data-v-61df8256="" class="">
                    Products
                </th>
                <th data-v-61df8256="" width="200px" class="text-center">
                    Submission status
                </th>
                <th data-v-61df8256="" width="200px" class="text-center">
                    Codes status
                </th>
                <th data-v-61df8256="" width="150px" class="text-center">
                </th>
            </tr>
        </thead>
        <tbody data-v-61df8256="">
            @foreach($products as $product)
            <tr onclick="load_url_tr(this)" datahref="{{ route('partner_code_needed', $product->unique_id) }}"
                data-v-61df8256="" class="listing-row product_list_single">
                <td data-v-61df8256="" class="d-flex align-items-center align-middle">
                    <img data-v-61df8256="" width="100" src="{{ static_asset($product->cover_image) }}" alt=""
                        class="listing-image mr-3 img-fluid" height="100">
                    <div data-v-61df8256="" class="listing-name">
                        <h4 data-v-61df8256="" class="m-0 font-weight-semi-bold">
                            {{ $product->name }}
                        </h4>
                        <div data-v-61df8256="" class="d-md-none">

                        </div>
                        <!---->
                    </div>
                </td>
                <td data-v-61df8256="" class="text-center d-none d-md-table-cell">
                    {{ Product::STATUS_LIST[$product->status] }}
                </td>
                <td data-v-61df8256="" class="text-center d-none d-md-table-cell">
                    @if($product->detail->redemption_type == Product::REDEMPTION_TYPE_CODE && $product->detail->csv
                    == null)
                    <span data-v-61df8256=""><svg data-v-61df8256="" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2">
                            <path data-v-61df8256=""
                                d="M0 22.7273H24L12 2L0 22.7273ZM13.0909 19.4545H10.9091V17.2727H13.0909V19.4545ZM13.0909 15.0909H10.9091V10.7273H13.0909V15.0909Z"
                                fill="#FF8A00"></path>
                        </svg></span> <span data-v-61df8256="" class="d-none d-lg-inline-block">
                        Needed
                        <a href="{{ route('partner_code_needed', $product->unique_id) }}">Update</a>
                    </span>
                    @else
                    -
                    @endif
                </td>
                <td data-v-61df8256="" class="d-none d-md-table-cell">
                    <a data-v-61df8256="" href="/partners/preview/135384/" target="_blank" rel="noopener noreferrer"
                        class="text-nowrap"><svg data-v-61df8256="" aria-labelledby="svg-inline--fa-title-oajy6y1eO3E4"
                            data-prefix="fas" data-icon="external-link-alt" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            class="ml-2 svg-inline--fa fa-external-link-alt fa-w-16">
                            <title data-v-61df8256="" id="svg-inline--fa-title-oajy6y1eO3E4" class="">Open in new
                                tab
                            </title>
                            <path data-v-61df8256="" fill="currentColor"
                                d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z"
                                class=""></path>
                        </svg>
                        Preview listing
                    </a>
                    <!---->
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection