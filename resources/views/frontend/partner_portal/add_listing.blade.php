@php use App\Models\Product; @endphp
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit Your Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/partner/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/owlcarousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/backend/vendors/dropify/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/partner/css/style.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/partner/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    @toastr_css
</head>

<body>

<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand navbar-light justify-content-between bg-dark-green">
                    <div class="d-flex align-items-center px-3">
                        <a href="/" class="navbar-brand"><img
                                src="https://appsumo2nuxt-cdn.appsumo.com/8db0249b1f00184953afec8146fdc3a3.svg"
                                alt="AppSumo" height="19" width="130" class="navbar-logo"></a>
                        <a href="" class="">
                            <img src="https://appsumo2nuxt-cdn.appsumo.com/a9e68609d913c34129ad34993f3eb193.svg"
                                 alt="Partner Portal" height="19" width="258" class="partner-portal-logo"></a>
                    </div>
                    <div class="d-none d-sm-block px-3">
                        <ul class="navbar-nav">
                            <li class="nav-item mr-4"><a href="/" class="nav-link text-white">Go to Main Site</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="nav-link text-white border-0 bg-transparent">Log
                                        Out
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<section class="add_item_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 prograss_parent">
                <ul id="progress_bar" class="d-flex justify-content-between noselect">
                    <li class="active"><span class="number">1</span> Product basics</li>
                    <li><span class="number">2</span> Images</li>
                    <li><span class="number">3</span> Description</li>
                    <li><span class="number">4</span> Pricing</li>
                    <li><span class="number">5</span> Redemption</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="form_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="form_area_main mb-5">
                    {{--Basic info--}}
                    <fieldset>
                        <div class="form_one">
                            <h2>What are you Listing?</h2>
                            <input type="hidden" id="product_unique_id" value="{{ $product->unique_id }}">
                            <div class="form-group mt-4">
                                <label for="name">Name of your Product</label>
                                <input type="text" id="name" name="name" class="form-control"
                                       value="{{ $product->name ?? null }}">
                            </div>
                            <div class="form-group mt-4">
                                <label for="website">Website(Optional)</label>
                                <input type="url" id="website" name="website" class="form-control"
                                       value="{{ $product->website ?? null }}">
                            </div>
                            <div class="form-group mt-4">
                                <label for="email">Support Email(Optional)</label>
                                <input type="email" id="email" name="email" class="form-control"
                                       value="{{ $product->support_email ?? null }}">
                            </div>
                            <div class="form-group mt-4">
                                <label for="phone">Support Phone Number(Optional)</label>
                                <br>
                                <input id="phone" type="tel" name="phone" class="form-control"
                                       value="{{ $product->support_phone ?? null }}">
                            </div>
                            <div class="form-group mt-5">
                                <h2>Add Categories</h2>
                                <p>
                                    Select up to (3) categories to help buyers search for your product.
                                </p>
                                <div class="section_checkbox_alert">
                                </div>
                                <div class="row mt-4">
                                    @foreach($categories as $category)
                                        <div class="col-md-4 mb-3">
                                            <div class="form-check-inline">
                                                <label class="form-check-label noselect">
                                                    <input type="checkbox" class="form-check-input"
                                                           cat_name="{{ $category->name }}"
                                                           value="{{ $category->slug }}"
                                                           {{ isset($product_category_ids) ? in_array($category->id,
                                                       $product_category_ids) ? 'checked' :
                                                       null : null }}
                                                           name="category">{{ $category->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="button_area_right text-right mt-5 mb-5">
                            <button class="btn btn-next">Next: Images</button>
                        </div>
                    </fieldset>
                    {{--Images--}}
                    <fieldset>
                        <div class="form_two">
                            <h2>Images</h2>
                            <div class="form-group">
                                <label>Cover Image (395x222)
                                    <span class="text-danger">*</span>
                                </label>
                                <p>
                                    Upload a featured image for the browse page and hero section of your listing.
                                </p>
                                <form id="cover_image_form" enctype="multipart/form-data">
                                    <input name="unique_id" type="hidden" value="{{ $product->unique_id }}">
                                    <input type="file" name="cover_image" class="form-control dropify"
                                           data-height="140" data-max-width="396" data-max-height="223"
                                           data-allowed-file-extensions="jpg png jpeg svg" id="cover_image"
                                           data-default-file="{{ isset($product) ? static_asset($product->cover_image): '' }}">
                                </form>
                            </div>
                            <div class="form-group">
                                <label>Product images (optional) (395x321)
                                    <span class="text-danger">*</span>
                                </label>
                                <p>Upload a featured image for the browse page and hero section of your listing.</p>
                                <form method="post" action="{{ route('front.product.store_image_dropzone') }}"
                                      enctype="multipart/form-data" class="dropzone" id="dropzone">
                                    @csrf
                                    <input type="hidden" name="unique_id" value="{{ $product->unique_id }}">
                                </form>
                            </div>
                            <div class="button_area_right mt-5 mb-5">
                                <button class="btn btn-prev">Previous: Product basics</button>
                                <button class="btn btn-next">Next: Product Copy</button>
                            </div>
                        </div>
                    </fieldset>
                    {{--Description--}}
                    <fieldset>
                        <div class="form_three">
                            <h2>Product Copy</h2>
                            <p>
                                Tell us about your product. Don’t forget features, benefits, and what’s included.
                            </p>
                            <div class="form-group">
                                <label>Description of your listing:
                                </label>
                                <textarea name="description" class="form-control" id="description" cols="30"
                                          rows="10">{{ $product->description ?? null }}</textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="button_area_right mt-5 mb-5">
                            <button class="btn btn-prev">Previous: Images</button>
                            <button class="btn btn-next">Next: Pricing</button>
                        </div>
                    </fieldset>
                    {{--Pricing--}}
                    <fieldset>
                        <div class="form_four">
                            <h2>Pricing</h2>
                            <div class="alert_style alert mt-4 mb-3 alert-primary d-flex align-items-center"
                                 role="alert">
                                <img src="{{ static_asset('assets/frontend/partner/images/alert.svg') }}" alt=""
                                     class="mr-3" data-v-1e2c57b6="">
                                <div>
                                    Set the listing price that’s right for you — your original price or a discount.
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Price:
                                </label>
                                <input type="number" name="price" id="price" value="{{ isset($product->price ) ? $product->price : null
                                    }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="form-check noselect">
                                    <input type="checkbox" class="form-check-input " id="freebie" name="freebie"
                                           value="something" {{ isset($product) ? $product->is_free == true ? 'checked'
                                        : null : null }}>
                                    <label class="form-check-label" for="freebie">This is a freebie</label>
                                </div>
                                <div class="form-check">
                                    <input {{ isset($product) ? $product->is_free == false ? 'checked' : null : null
                                        }} type="checkbox"
                                           class="form-check-input" id="comparison">
                                    <label class="form-check-label noselect" for="comparison">Show comparison
                                        price</label>
                                </div>
                            </div>
                            <div class="alert_style alert mt-4 mb-3 alert-primary d-flex align-items-center"
                                 role="alert">
                                <img src="{{ static_asset('assets/frontend/partner/images/alert.svg') }}" alt=""
                                     class="mr-3" data-v-1e2c57b6="">
                                <div>
                                    Add the normal retail price of your product. We'll put a slash through this
                                    comparison price so buyers see the deal you're offering.
                                </div>
                            </div>
                            <div class="form-group {{ isset($product) ? $product->is_free ? 'd-none' : null : null }}"
                                 id="comparision_prise_field">
                                <label>Comparison Price:</label>
                                <input type="number" name="discount_price" id="discount_price" class="form-control"
                                       value="{{ isset($product->price ) ? $product->price : null }}">
                            </div>
                            <div class="note">
                                <strong>Note:</strong>
                                You'll earn 95% of all revenue from first-time AppSumo buyers and 70% from existing
                                customers after any AppSumo Plus member discounts. We process payments 60 days after
                                purchase due to our refund policy. <a href="#">Read our FAQs.</a>
                            </div>
                            <div class="key_feature mt-5">
                                <h3>Key features</h3>
                                <p>
                                    What's included in this price? (e.g. 10 users, 50 GB storage, 75+ videos, etc.)
                                    Drag and drop each feature to change the order.
                                </p>
                                <div class="kf_form">
                                    @isset($product->detail)
                                        @php
                                            $key_features = json_decode($product->detail->key_features, true);
                                            $count = 100;
                                        @endphp
                                        @if($key_features != null)
                                            @foreach($key_features as $key=>$key_feature)
                                                <div class="form-group">
                                                    <label>Key feature <span class="kf_n">{{ ++$key }}</span></label>
                                                    <div class="form_inner">
                                                        <input type="text" name="kf_name"
                                                               onfocusout="key_feature_data(this)"
                                                               id="kf_1" class="form-control"
                                                               value="{{ $key_feature }}">
                                                        <button type="button" onclick="deleteKf(this)"
                                                                class="fk_close_btn">
                                                            <i class="fa fa-close"></i></button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="form-group">
                                                <label>Key feature <span class="kf_n">1</span></label>
                                                <div class="form_inner">
                                                    <input type="text" name="kf_name"
                                                           onfocusout="key_feature_data(this)"
                                                           id="kf_1" class="form-control">
                                                    <button type="button" onclick="deleteKf(this)" class="fk_close_btn">
                                                        <i class="fa fa-close"></i></button>
                                                </div>
                                            </div>
                                        @endif
                                    @endisset
                                </div>
                                <div class="add_new_kf mb-5 mt-4">
                                    <button class="new_kf_btn" onclick="add_new_kf(this)"><i class="fa fa-plus"></i>
                                        Add Key Feature (
                                        <span class="kf_count">0</span>/10)
                                    </button>
                                </div>
                                <br>
                            </div>
                            <div class="terms">
                                <h3>Terms</h3>
                                <p>
                                    Listings are subject to a 60-day refund. By listing a product, you agree to
                                    support buyers for the term selected.
                                </p>
                                <div class="alert_style alert mt-4 mb-3 alert-primary d-flex align-items-center"
                                     role="alert">
                                    <img src="{{ static_asset('assets/frontend/partner/images/alert.svg') }}" alt=""
                                         class="mr-3" data-v-1e2c57b6="">
                                    <div>
                                        Offering lifetime access can 10x sales (i.e. 3,000 vs. 300), and help you
                                        get featured in Trending.
                                    </div>
                                </div>
                                <div class="terms_form">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" id="check1"
                                                   name="term_type" value="{{ Product::TERM_LIFETIME }}"
                                                   onchange="update_term_type()" {{ isset($product->detail) ?
                                                $product->detail->term_type == Product::TERM_LIFETIME ? 'checked' : null
                                                : null }}>
                                            <label class="form-check-label" for="check1">Lifetime access</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="term_type"
                                                   id="check2" value="{{ Product::TERM_ANNUAL }}"
                                                   onchange="update_term_type()" {{ isset($product->detail) ?
                                                $product->detail->term_type == Product::TERM_ANNUAL ? 'checked' : null :
                                                null }}>
                                            <label class="form-check-label" for="check2">Annual access(one
                                                year)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="button_area_right mt-5 mb-5">
                            <button class="btn btn-prev">Previous: Add product Copy</button>
                            <button class="btn btn-next">Next: Redemption</button>
                        </div>
                    </fieldset>
                    {{--Redemption--}}
                    <fieldset>
                        <div class="form_five">
                            <h2>Redemption</h2>
                            <p>Buyers can either directly download a file or get a code to redeem on your website.
                            </p>
                            <div class="form-group">
                                <h4>How will buyers get your product?
                                </h4>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="redemption_type"
                                           id="code_redeem" value="{{ Product::REDEMPTION_TYPE_CODE }}"
                                           onclick="update_redemption_type()" {{ isset($product->detail) &&
                                        $product->detail->redemption_type != null ? $product->detail->redemption_type ==
                                        Product::REDEMPTION_TYPE_CODE ? 'checked' : null : null }}>
                                    <label class="form-check-label" for="code_redeem">Code to redeem (software,
                                        courses)</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="redemption_type"
                                           id="direct_download" value="{{ Product::REDEMPTION_TYPE_DOWNLOAD }}"
                                           onclick="update_redemption_type()" {{ isset($product->detail) &&
                                        $product->detail->redemption_type != null ? $product->detail->redemption_type ==
                                        Product::REDEMPTION_TYPE_DOWNLOAD ? 'checked' : null : null }}>
                                    <label class="form-check-label" for="direct_download">Direct download (ebooks,
                                        PDFs)</label>
                                </div>
                            </div>
                            @if(isset($product->detail) && $product->detail->redemption_type != null)
                                @if($product->detail->redemption_type == Product::REDEMPTION_TYPE_CODE)
                                    {{-- code redeem Area --}}
                                    <div class="code_redeem_area">
                                        <div class="cra_section_one">
                                            <div class="code_optionals mt-4 mb-5">
                                                <h3>Codes (optional)</h3>
                                                <p>
                                                    If you’re not ready, you can can skip this section for now, but
                                                    incomplete
                                                    submissions can cause <strong>1-2 week delays</strong> in going
                                                    live.
                                                </p>
                                                <div class="form-group mt-4">
                                                    <h5>Where will buyers go to redeem their codes?
                                                    </h5>
                                                    <label for="">Link for code redemption (URL)</label>
                                                    <input type="url" name="redemption" class="form-control"
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
                                                    <form id="csv_upload_form" enctype="multipart/form-data">
                                                        <input name="unique_id" type="hidden"
                                                               value="{{ $product->unique_id }}">
                                                        <div class="form-group">
                                                            <input type="file" name="csv" id="csv_upload"
                                                                   class="form-control dropify" data-height="140"
                                                                   data-allowed-file-extensions="csv">
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
                                                    @isset($product->detail)
                                                        @php
                                                            $redemption_instructions =
                                                            json_decode($product->detail->redemption_instruction, true);
                                                        @endphp
                                                        @if($redemption_instructions != null)
                                                            @foreach($redemption_instructions as $key=>$redemption_instruction)
                                                                <div class="form-group">
                                                                    <label>Instruction <span
                                                                            class="kf_n">{{ ++$key }}</span></label>
                                                                    <div class="form_inner">
                                                                        <input type="text" name="kf_name"
                                                                               onfocusout="key_feature_data(this)"
                                                                               id="kf_1"
                                                                               class="form-control"
                                                                               value="{{ $redemption_instruction }}">
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
                                                                    <input type="text" name="if_1"
                                                                           onfocusout="add_instrucetion_data(this)"
                                                                           class="form-control">
                                                                    <button type="button" onclick="deleteIf(this)"
                                                                            class="fk_close_btn"><i
                                                                            class="fa fa-close"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endisset
                                                </div>
                                                <div class="add_new_kf mb-5 mt-4">
                                                    <button class="add_new_ri_btn" onclick="add_new_ri(this)">
                                                        <i class="fa fa-plus"></i> Add
                                                        instruction (
                                                        <span class="ir_count">0</span>/10)
                                                    </button>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="cra_section_two">
                                        <div class="csv_uplod_area">
                                            <h3>Downloadable file</h3>
                                            <p>
                                                You can upload a single PDF or compressed ZIP file, maximum 500MB.
                                            </p>
                                            <form id="downloadable_file_form" enctype="multipart/form-data">
                                                <input type="hidden" name="unique_id" value="{{ $product->unique_id }}">
                                                <div class="form-group">
                                                    <input type="file" name="downloadable_file"
                                                           class="form-control dropify"
                                                           data-height="140" id="downloadable_file">
                                                    @error('downloadable_file')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="code_redeem_area">
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
                                                <input type="url" name="redemption" class="form-control"
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
                                                <div class="form-group">
                                                    <input type="file" name="csv_upload" class="form-control dropify"
                                                           data-height="140" data-allowed-file-extensions="csv"
                                                           id="csv_upload">
                                                    @error('csv_upload')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
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
                                                        $redemption_instructions =
                                                        json_decode($product->detail->redemption_instruction, true);
                                                    @endphp
                                                    @if($redemption_instructions != null)
                                                        @foreach($redemption_instructions as $key=>$redemption_instruction)
                                                            <div class="form-group">
                                                                <label>Instruction <span
                                                                        class="kf_n">{{ ++$key }}</span></label>
                                                                <div class="form_inner">
                                                                    <input type="text" name="kf_name"
                                                                           onfocusout="key_feature_data(this)" id="kf_1"
                                                                           class="form-control"
                                                                           value="{{ $redemption_instruction }}">
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
                                                                <input type="text" name="if_1"
                                                                       onfocusout="add_instrucetion_data(this)"
                                                                       class="form-control">
                                                                <button type="button" onclick="deleteIf(this)"
                                                                        class="fk_close_btn"><i class="fa fa-close"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endisset
                                            </div>
                                            <div class="add_new_kf mb-5 mt-4">
                                                <button class="new_ri_btn" onclick="add_new_ri(this)"><i
                                                        class="fa fa-plus"></i> Add
                                                    instruction (
                                                    <span class="ir_count">0</span>/10)
                                                </button>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="button_area_right mt-5 mb-5">
                            <button class="btn btn-prev">Previous: Pricing</button>
                            <button class="btn submit_button">Submit</button>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="col-md-5 offset-md-1">
                <div id="listing_preview">
                    <h2>Listing Preview</h2>
                    <div class="category mt-4" id="category_preview">
                        @forelse($product->categories as $category)
                            <span class="badge badge-gray">{{ $category->name }}</span>
                        @empty
                            <span class="badge badge-gray">Category</span>
                            <span class="badge badge-gray">Category</span>
                            <span class="badge badge-gray">Category</span>
                        @endforelse
                    </div>
                    <div class="product_title mb-4 mt-2">
                        <h3>{{ $product->name ?? null }}</h3>
                    </div>
                    <div class="product_image owl-carousel">
                        <div class="img_single cover_page">
                            <img src="{{ static_asset('assets/frontend/partner/images/product.webp') }}" alt=""
                                 class="img-fluid">
                        </div>
                    </div>
                    <div class="product_details_price d-flex justify-content-around">
                        <button class="btn btn-primary">Buy Now</button>
                        <p><strong>${{ isset($product->price ) ? number_format($product->price, 2) : null
                                    }}</strong>
                            <del>${{ isset($product->price ) ?
                                    number_format($product->discount_price, 2) : null }}</del>
                        </p>
                    </div>
                    <div class="product_details mt-4 mb-4">
                        <p class="product_details_preview">
                            {{ $product->description ?? null }}
                        </p>
                    </div>
                    <div class="plan_feature mb-4">
                        <h3>Plans and Features</h3>
                        <p>Deal Terms</p>
                        @isset($product->detail)
                            @if($key_features != null)
                                @foreach($key_features as $key_feature)
                                    @if($key_feature != null)
                                        <div class="plan_feature_list">
                                            <div class="list_single">
                                                <img
                                                    src="{{ static_asset('assets/frontend/partner/images/check.svg') }}"
                                                    alt="">
                                                <span>{{ $key_feature }}</span>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="plan_feature_list">
                                    <div class="list_single">
                                        <img src="{{ static_asset('assets/frontend/partner/images/check.svg') }}"
                                             alt="">
                                        <span>Lifetime access to My awesome product Plan</span>
                                    </div>
                                </div>
                            @endif
                        @endisset
                    </div>
                    <div class="my_awesome_product ">
                        <h3>
                            My awesome product
                        </h3>

                        <div class="awesome_product_list">
                            <div class="list_single">
                                <img src="{{ static_asset('assets/frontend/partner/images/check.svg') }}" alt="">
                                <span>Lifetime access to My awesome product Plan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<footer class="p-5 footer">
    <img height="34" width="130" src="https://appsumo2nuxt-cdn.appsumo.com/da24861bc6e55a6548ddf12b4ce78393.svg"
         alt="AppSumo Logo">
    <div class="mt-3 text-light">
        Part of the <strong>Sumo</strong> family with
        <br> <strong>SendFox</strong> and <strong>HaulDrop</strong>
    </div>
</footer>

<script src="{{ static_asset('assets/frontend/partner/js/jquery.min.js') }}"></script>
@toastr_js
@toastr_render
<script src="{{ static_asset('assets/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ static_asset('assets/frontend/partner/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ static_asset('assets/backend/vendors/dropify/dropify.min.js') }}"></script>
@include('sweet::alert')
</body>
<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    $('.dropify').dropify();

    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            margin: 10,
        });
    });
</script>

@include('frontend/partner_portal/script')

</html>
