@php use App\Models\Product; @endphp
@extends('backend.layouts.master')
@push('style')
    <style>
        .btn-media-type {
            width: 20px !important;
            height: 20px !important;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            font-size: 16px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
            font-size: 16px;
        }
    </style>
@endpush
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center  justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Product - {{ $product->name }}</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <a href="{{ route('admin.product.index') }}" class="btn btn-md btn-secondary">Go Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if($product->detail->redemption_type == null)
                        <form action="{{ route('admin.product.update_product_redemption', $product->slug) }}"
                              class="forms-sample needs-validation" method="POST"
                              enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Update Product Redemption</h4>
                                    <div class="row">
                                        <div class="col-md-12 grid-margin grid-margin-lg-0">
                                            <div class="form_five">
                                                <h2>Redemption</h2>
                                                <p>Buyers can either directly download a file or get a code to redeem on
                                                    your website.
                                                </p>
                                                <div class="form-group">
                                                    <h4>How will buyers get your product?
                                                    </h4>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                   name="redemption_type" id="code_redeem"
                                                                   value="{{ Product::REDEMPTION_TYPE_CODE }}" checked>
                                                            Code to redeem (software, courses)
                                                            <i class="input-helper"></i></label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input"
                                                                   name="redemption_type" id="direct_download"
                                                                   value="{{ Product::REDEMPTION_TYPE_DOWNLOAD }}">
                                                            Direct download (ebooks, PDFs)
                                                            <i class="input-helper"></i></label>
                                                    </div>
                                                    <div class="code_redeem_area">
                                                        <div class="cra_section_one">
                                                            <div class="code_optionals mt-4 mb-5">
                                                                <h3>Codes (optional)</h3>
                                                                <p>
                                                                    If you’re not ready, you can can skip this section
                                                                    for
                                                                    now, but
                                                                    incomplete
                                                                    submissions can cause <strong>1-2 week
                                                                        delays</strong>
                                                                    in going live.
                                                                </p>
                                                                <div class="form-group mt-4">
                                                                    <h5>Where will buyers go to redeem their codes?
                                                                    </h5>
                                                                    <label for="">Link for code redemption (URL)</label>
                                                                    <input type="url" name="redemption"
                                                                           class="form-control"
                                                                           id="redemption_link">
                                                                </div>
                                                            </div>
                                                            <div class="csv_upload">
                                                                <h3>CSV Upload</h3>
                                                                <div
                                                                    class="alert_style alert mt-4 mb-3 alert-primary d-flex align-items-center"
                                                                    role="alert">
                                                                    <img
                                                                        src="{{ static_asset('assets/frontend/partner/images/alert.svg') }}"
                                                                        alt="" class="mr-3" data-v-1e2c57b6="">
                                                                    <div>
                                                                        Add the normal retail price of your product.
                                                                        We'll
                                                                        put a slash
                                                                        through
                                                                        this
                                                                        comparison price so buyers see the deal you're
                                                                        offering.
                                                                    </div>
                                                                </div>
                                                                <div class="csv_upload_list">
                                                                    <ul>
                                                                        <li>No duplicates. Please randomize.</li>
                                                                        <li>Format your CSV file in plain text</li>
                                                                        <li>Codes must be between 3-200 characters
                                                                            long
                                                                        </li>
                                                                        <li>File should contain only one column and no
                                                                            header
                                                                        </li>
                                                                        <li>All codes should be in a single column</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="csv_uplod_area">
                                                                    <div class="form-group">
                                                                        <input type="file" name="csv"
                                                                               class="form-control dropify"
                                                                               data-height="140"
                                                                               data-allowed-file-extensions="csv"
                                                                               id="csv_upload">
                                                                        @error('csv')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="redemption_instracton mt-5">
                                                                <h3>Redemption instructions
                                                                </h3>
                                                                <p>
                                                                    After purchase, buyers get a code and your
                                                                    redemption
                                                                    URL above. If
                                                                    needed,
                                                                    add more instructions for your buyers.
                                                                </p>
                                                                <div class="ir_form">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-10 col-lg-11 grid-margin grid-margin-lg-0">
                                                                            <div class="form-group">
                                                                                <label>Instruction <span
                                                                                        class="ir_n">1</span></label>
                                                                                <div class="form_inner">
                                                                                    <input type="text"
                                                                                           name="instructions[]"
                                                                                           class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-2 col-lg-1 grid-margin grid-margin-lg-0 d-flex mt-4">
                                                                            <button type="button"
                                                                                    class="btn btn-danger btn-rounded btn-icon ml-2"
                                                                                    onclick="deleteIf(this)">
                                                                                <i class="ti-trash"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="add_new_kf mt-3">
                                                                    <button type="button"
                                                                            class="btn btn-primary btn-rounded btn-fw"
                                                                            onclick="add_new_ri(this)">
                                                                        <i class="fa fa-plus"></i>
                                                                        Add instruction (<span class="ir_count">1</span>/10)
                                                                    </button>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mr-2 mt-2">Update</button>
                        </form>
                    @else
                        @if($product->detail->redemption_type == Product::REDEMPTION_TYPE_CODE)
                            @if($product->redemption_codes()->exists())
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-lg-6 col-sm-6 mt-sm-0 mt-3 left-part">
                                                <h4 class="card-title">List of Redemption Codes</h4>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                                                <button class="btn btn-md btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal">
                                                    Add More
                                                </button>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="order-listing" class="table" style="width: 100%">
                                                <thead>
                                                <tr>
                                                    <th>Order #</th>
                                                    <th>Code</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php $count = 1; @endphp
                                                @foreach($product->redemption_codes as $code)
                                                    <tr>
                                                        <td>{{ $count++ }}</td>
                                                        <td>{{ $code->code }}</td>
                                                        <td>
                                                            <span
                                                                class="badge {{ ($code->use_status == 0) ? 'badge-primary' : 'badge-success' }}">
                                                                {{ ($code->use_status == 0) ? 'Unused' : 'Used' }}
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @else

                            @endif
                        @else
                            <form action="{{ route('admin.product.update_product_redemption', $product->slug) }}"
                                  class="forms-sample needs-validation" method="POST"
                                  enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Update Product Redemption</h4>
                                        <div class="row">
                                            <div class="col-md-12 grid-margin grid-margin-lg-0">
                                                <div class="form_five">
                                                    <div class="form-group">
                                                        <div class="code_redeem_area">
                                                            <div class="cra_section_two">
                                                                <div class="csv_uplod_area">
                                                                    <h3>Downloadable file</h3>
                                                                    <p>
                                                                        You can upload a single PDF or compressed ZIP
                                                                        file, maximum 500MB.
                                                                    </p>
                                                                    <div class="form-group">
                                                                        <input type="file" name="downloadable_file"
                                                                               class="form-control dropify"
                                                                               data-height="140" id="downloadable_file"
                                                                               data-default-file="{{ $product->detail->downloadable_file }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success mr-2 mt-2">Update</button>
                            </form>
                        @endif
                    @endif
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add new Redemption code
                                    for - {{ $product->name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('admin.product.store_product_redemption', $product->slug) }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="meta_keyword">Redemption Code <small
                                                class="text-danger">*</small></label>
                                        <input type="text" class="form-control" name="code" id="code"
                                               placeholder="New Redemption code">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Add New</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript">
        $(document).ready(function () {
            count = $(".ir_form").children().length;
            $(".ir_count").text(count)
        })

        function add_new_ri(el) {
            var count = $(".ir_form").children().length;
            count += 1;

            $('.ir_form').append(`
                <div class="row">
                    <div class="col-10 col-lg-11 grid-margin grid-margin-lg-0">
                        <div class="form-group">
                            <label>Instruction <span class="ir_n">` + count + `</span></label>
                            <div class="form_inner">
                                <input type="text" name="instructions[]" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-lg-1 grid-margin grid-margin-lg-0 d-flex mt-4">
                        <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2" onclick="deleteIf(this)">
                            <i class="ti-trash"></i>
                        </button>
                    </div>
                </div>
            `)

            $(".ir_count").text(count)
            if (count > 9) {
                $('.new_ri_btn').attr("disabled", "disabled");
            }
        }

        function deleteIf(el) {
            $(el).closest('.row').remove()
            count = $(".ir_form").children().length;
            $(".ir_count").text(count)
            if (count < 10) {
                $('.new_ri_btn').removeAttr("disabled");
            }
        }

        $('#code_redeem').on("click", function () {
            $('.code_redeem_area').empty().append(`
         <div class="cra_section_one">
            <div class="code_optionals mt-4 mb-5">
                <h3>Codes (optional)</h3>
                <p>
                    If you’re not ready, you can can skip this section for now, but
                    incomplete
                    submissions can cause <strong>1-2 week delays</strong> in going live.
                </p>
                <div class="form-group mt-4">
                    <h5>Where will buyers go to redeem their codes?
                    </h5>
                    <label for="">Link for code redemption (URL)</label>
                    <input type="url" name="redemption" class="form-control">
                </div>
            </div>
            <div class="csv_upload">
                <h3>CSV Upload</h3>
                <div class="alert_style alert mt-4 mb-3 alert-primary d-flex align-items-center"
                    role="alert">
                    <img src="{{ static_asset('assets/frontend/partner/images/alert.svg') }}"
                        alt="" class="mr-3" data-v-1e2c57b6="">
                    <div>
                        Add the normal retail price of your product. We'll put a slash
                        through
                        this
                        comparison price so buyers see the deal you're offering.
                    </div>
                </div>
                <div class="csv_upload_list">
                    <ul>
                        <li>No duplicates. Please randomize.</li>
                        <li>Format your CSV file in plain text</li>
                        <li>Codes must be between 3-200 characters long</li>
                        <li>File should contain only one column and no header</li>
                        <li>All codes should be in a single column</li>
                    </ul>
                </div>
                <div class="csv_uplod_area">
                    <form id="csv_upload_form">
                        <div class="form-group" enctype="multipart/form-data">
                            <input type="file" name="csv" class="form-control dropify"
                                data-height="140" data-allowed-file-extensions="csv"
                                id="csv_upload">
                        </div>
                    </form>
                </div>
            </div>

            <div class="redemption_instracton mt-5">
                <h3>Redemption instructions
                </h3>
                <p>
                    After purchase, buyers get a code and your redemption URL above. If
                    needed,
                    add more instructions for your buyers.
                </p>
                <div class="ir_form">
                    <div class="row">
                        <div class="col-10 col-lg-11 grid-margin grid-margin-lg-0">
                            <div class="form-group">
                                <label>Instruction <span class="ir_n">1</span></label>
                                <div class="form_inner">
                                    <input type="text" name="instructions[]" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-2 col-lg-1 grid-margin grid-margin-lg-0 d-flex mt-4">
                            <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2" onclick="deleteIf(this)">
                                <i class="ti-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="add_new_kf mb-5 mt-3">
                    <button type="button" class="btn btn-primary btn-rounded btn-fw" onclick="add_new_ri(this)">
                        <i class="fa fa-plus"></i>
                        Add instruction (<span class="ir_count">1</span>/10)
                    </button>
                </div>
                <br>
            </div>
            </div>
         `)

            $('.dropify').dropify();

        });

        $('#direct_download').on("click", function () {
            $('.code_redeem_area').empty().append(`
                 <div class="cra_section_two">
                    <div class="csv_uplod_area">
                        <h3>Downloadable file</h3>
                        <p>
                            You can upload a single PDF or compressed ZIP file, maximum 500MB.
                        </p>
                        <div class="form-group">
                            <input type="file" name="downloadable_file" class="form-control dropify"
                                data-height="140" id="downloadable_file">
                        </div>
                    </div>
                </div>
        `)

            $('.dropify').dropify();

        });
    </script>
@endpush


