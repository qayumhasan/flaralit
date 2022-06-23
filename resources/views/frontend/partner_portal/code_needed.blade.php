@php use App\Models\Product; @endphp
@extends('frontend.partner_portal.layout.layout')

@section('content')
    <div class="d-flex align-items-center mb-4" data-v-09db4351 data-v-20b7e592><span
            class="breadcrumbs__item d-inline-flex align-items-center" data-v-09db4351><a
                href="{{ route('partner_overview') }}"
                class="nuxt-link-active" data-v-09db4351>
            Products
        </a> <span class="mx-1" data-v-09db4351>
            &gt;
        </span></span><span class="breadcrumbs__item d-inline-flex align-items-center" data-v-09db4351><span
                data-v-09db4351>
            {{ $product->name }}
        </span>
            <!---->
    </span></div>
    <div class="row" data-v-20b7e592>
        <div class="col-12 col-md-7" data-v-20b7e592>
            <h1 class="mb-4 listing-details__title" data-v-20b7e592>
                {{ $product->name }}
            </h1>
        </div>
        <div class="col-12 col-md-5 mb-3" data-v-20b7e592>
            <div class="row" data-v-20b7e592>
                <div class="col-12 d-flex align-items-center justify-content-md-end" data-v-20b7e592>
                    <button type="button"
                            disabled="disabled" class="btn btn-outline-secondary w-100 w-md-auto mb-3 mb-md-0
              font-size-base font-weight-semi-bold" data-v-20b7e592>
                        <svg aria-hidden="true" focusable="false"
                             data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 448 512" class="svg-inline--fa fa-plus fa-w-14" data-v-20b7e592
                             data-v-20b7e592>
                            <path fill="currentColor"
                                  d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"
                                  data-v-20b7e592 data-v-20b7e592></path>
                        </svg>
                        Add draft
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div data-v-20b7e592="">
        <div data-v-57d4c7ce="" data-v-20b7e592="" style="">
            <ul data-v-57d4c7ce="" class="nav nav-tabs">
                <li data-v-57d4c7ce="" class="nav-item"><span data-v-57d4c7ce="" class="nav-link cursor-pointer active">
                    Overview
                </span></li>
            </ul>
            <div data-v-20b7e592="">
                <div data-v-540613a2="" data-v-20b7e592="">
                    <div data-v-540613a2="" class="row mt-4">
                        <div data-v-540613a2="" class="col-12 col-lg-7">
                            <div data-v-540613a2="" class="row">
                                <div data-v-540613a2="" class="col-12">
                                    <div data-v-540613a2="" class="alert bg-light mb-4 p-0">
                                        <div data-v-540613a2="" class="row p-3">
                                            <div data-v-540613a2="" class="col-12 col-lg-6">
                                                <h4 data-v-540613a2="" class="mt-2">
                                                    v1
                                                </h4>
                                            </div>
                                            <div data-v-540613a2="" class="col-12 col-lg-6">
                                                <div data-v-540613a2="" class="d-flex flex-wrap justify-content-md-end">
                                                    <div data-v-540613a2=""
                                                         class="badge badge-primary listing-details__label text-white px-2 py-1 ml-2 mt-2">
                                                        {{ Product::STATUS_LIST[$product->status] }}
                                                    </div>
                                                    @if($product->detail->redemption_type == Product::REDEMPTION_TYPE_CODE && count($product->redemption_codes) == 0)
                                                        <div data-v-540613a2=""
                                                             class="badge badge-primary listing-details__label text-white px-2 py-1 ml-2 mt-2">
                                                            Codes needed
                                                        </div>
                                                    @endif
                                                </div>
                                                <div data-v-540613a2="" class="mt-3 text-right">
                                                    <div data-v-540613a2="" class="d-inline-block">
                                                        <a data-v-540613a2="" href="/partners/products/136175/overview" class="">
                                                            Edit listing
                                                        </a> <span data-v-540613a2="">|</span></div>
                                                    <a data-v-540613a2=""
                                                       href="/partners/preview/136175/" target="_blank"
                                                       rel="noopener noreferrer">
                                                        Preview listing
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('update_code_redemption') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="unique_id" value="{{ $product->unique_id }}">
                                <div data-v-4453d6e9="" data-v-540613a2="" class="row">
                                    <div data-v-4453d6e9="" class="col-12">
                                        <div data-v-4453d6e9="">
                                            <!---->
                                            <h2 data-v-4453d6e9="" class="mb-4 listing-code-upload__title">
                                                Upload your codes to start selling
                                            </h2>
                                            <div data-v-4453d6e9="" class="form-group mb-2">
                                                <label data-v-4453d6e9="" for="redemption_url"
                                                       class="font-weight-semi-bold listing-code-upload__label">
                                                    Redemption URL
                                                </label>
                                                <small data-v-4453d6e9="" class="form-text text-muted mt-n2">
                                                    Link for code redemption
                                                </small>
                                                <input data-v-4453d6e9="" type="text" name="redemption_url"
                                                       class="form-control" value="{{ isset($product->detail) ? $product->detail->redemption_link : null }}">
                                                @error('redemption_url')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <small data-v-ff37f2b4="" data-v-4453d6e9="" class="form-text text-muted text-right"></small>
                                            </div>
                                            <h3 data-v-4453d6e9=""
                                                class="mb-2 listing-code-upload__subtitle font-weight-semi-bold">
                                                CSV upload
                                            </h3>
                                            <div data-v-4453d6e9=""
                                                 class="alert alert-info bg-info d-flex align-items-center p-3 w-100 mb-3">
                                                <img
                                                    data-v-4453d6e9=""
                                                    src="https://appsumo2nuxt-cdn.appsumo.com/41d1ea14e899aa45e49176fa66187786.svg"
                                                    alt="Question Mark" class="mr-3">
                                                <div data-v-4453d6e9="">
                                                    Create a CSV file with min. 100 - max. 10,000 purchase-ready codes
                                                </div>
                                            </div>
                                            <ul data-v-4453d6e9="" class="pl-3 mb-4">
                                                <li data-v-4453d6e9="">No duplicates. Please randomize.</li>
                                                <li data-v-4453d6e9="">Format your CSV file in plain text</li>
                                                <li data-v-4453d6e9="">Codes must be between 3-200 characters long</li>
                                                <li data-v-4453d6e9="">File should contain only one column and no header
                                                </li>
                                                <li data-v-4453d6e9="">All codes should be in a single column</li>
                                            </ul>
                                            <div data-v-843b48d2="" data-v-4453d6e9="" data-key="file"
                                                 change-label="Change file">
                                                <!---->
                                                <div data-v-843b48d2="" class="d-flex flex-column flex-md-row align-items-center">
                                                    <label data-v-843b48d2="" for="file-asset" class="mb-0 w-100 d-flex justify-content-end">
                                                        <span data-v-843b48d2=""
                                                            class="btn ml-md-2 w-100 w-md-auto btn-secondary"><svg
                                                                data-v-843b48d2="" aria-hidden="true" focusable="false"
                                                                data-prefix="fas" data-icon="cloud-upload-alt" role="img"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                                class="mr-1 svg-inline--fa fa-cloud-upload-alt fa-w-20">
                                                            <path data-v-843b48d2="" fill="currentColor"
                                                                  d="M537.6 226.6c4.1-10.7 6.4-22.4 6.4-34.6 0-53-43-96-96-96-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32c-88.4 0-160 71.6-160 160 0 2.7.1 5.4.2 8.1C40.2 219.8 0 273.2 0 336c0 79.5 64.5 144 144 144h368c70.7 0 128-57.3 128-128 0-61.9-44-113.6-102.4-125.4zM393.4 288H328v112c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V288h-65.4c-14.3 0-21.4-17.2-11.3-27.3l105.4-105.4c6.2-6.2 16.4-6.2 22.6 0l105.4 105.4c10.1 10.1 2.9 27.3-11.3 27.3z"
                                                                  class=""></path>
                                                        </svg>
                                                        Upload CSV
                                                        </span>
                                                        <input data-v-843b48d2="" id="file-asset" type="file"
                                                                   hidden="hidden" name="csv" status=""
                                                                   label="Upload CSV"
                                                                    fallbackfilename="" data-key="file"
                                                                   change-label="Change file">
                                                    </label>
                                                    @error('csv')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
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
                                                    @isset($product->detail)
                                                        @php
                                                            $redemption_instructions = json_decode($product->detail->redemption_instruction, true);
                                                        @endphp
                                                        @if($redemption_instructions != null)
                                                            @foreach($redemption_instructions as $key=>$redemption_instruction)
                                                                <div class="form-group">
                                                                    <label>Instruction <span
                                                                            class="kf_n">{{ ++$key }}</span></label>
                                                                    <div class="form_inner">
                                                                        <input type="text" name="instructions[]"
                                                                               class="form-control instruction_input"
                                                                               value="{{ $redemption_instruction }}"
                                                                               onchange="check_for_null_instruction()">
                                                                        <button type="button" onclick="deleteIf(this)"
                                                                                class="fk_close_btn">
                                                                            <i class="fa fa-close"></i></button>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <div class="form-group">
                                                                <label>Instruction <span class="ir_n">1</span></label>
                                                                <div class="form_inner">
                                                                    <input type="text" name="instructions[]"
                                                                           class="form-control instruction_input"
                                                                           onchange="check_for_null_instruction()">
                                                                    <button type="button" onclick="deleteIf(this)"
                                                                            class="fk_close_btn"><i class="fa fa-close"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endisset
                                                        @error('instructions[]')
                                                        <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                                <div class="add_new_kf mb-5 mt-4">
                                                    <button onclick="add_new_ri(this)" type="button"><i class="fa fa-plus"></i> Add
                                                        instruction (
                                                        <span class="ir_count">0</span>/10)
                                                    </button>
                                                </div>
                                                <br>
                                            </div>
                                            <div data-v-4453d6e9="" class="d-flex justify-content-end mt-4">
                                                <button data-v-4453d6e9="" type="submit" id="submitButton"
                                                        class="btn btn-primary w-100 w-md-auto px-4">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!---->
                    </div>
                    <!---->
                </div>
            </div>
            <!---->
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function () {
            count = $(".ir_form").children().length;
            $(".ir_count").text(count)
        });

        function add_new_ri(el) {
            count = $(".ir_form").children().length;
            count += 1;

            $('.ir_form').append(`
        <div class="form-group">
            <label>Instruction ` + count + `</label>
            <div class="form_inner">
                <input type="text" name="instructions[]" class="form-control instruction_input" onchange="check_for_null_instruction()">
                <button type="button" onclick="deleteIf(this)"
                    class="fk_close_btn"><i class="fa fa-close"></i></button>
            </div>
        </div>
        `)

            $(".ir_count").text(count);
            $("#submitButton").addClass('disabled');
        }

        function deleteIf(el) {
            $(el).closest('.form-group').remove()
            count = $(".ir_form").children().length;
            $(".ir_count").text(count);
            check_for_null_instruction();
        }

        function check_for_null_instruction() {
            var array = [];
            $("input:text[class=instruction_input]").each(function () {
                array.push('yes');
                  if($(this).val()) {
                      $("#submitButton").removeClass('disabled');
                  } else {
                      $("#submitButton").addClass('disabled');
                  }
            });
            console.log(array);
        }
    </script>
@endpush
