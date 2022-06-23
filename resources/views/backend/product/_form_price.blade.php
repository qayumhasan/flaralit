@php use App\Models\Product; @endphp
<div class="row">
    <div class="col-md-8">
        <div class="alert_style alert mt-4 mb-3 alert-primary d-flex align-items-center"
             role="alert">
            <img src="{{ static_asset('assets/frontend/partner/images/alert.svg') }}" alt=""
                 class="mr-3" data-v-1e2c57b6="">
            <div>
                Set the listing price that’s right for you — your original price or a discount.
            </div>
        </div>
        <div class="form-group">
            <label for="price">Price </label>
            <input type="number" name="price" id="price" class="form-control"
                   placeholder="Product Price" {{ isset($product) && $product->is_free == true ? 'disabled' : null }}>
            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>
        <div class="form-group">
            <div class="form-check form-check-primary">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="freebie" id="freebie"
                           value="free" {{ isset($product) && $product->is_free == true ? 'checked' : null }}>
                    This is a freebie <i class="input-helper"></i>
                </label>

            </div>
            <div class="form-check form-check-primary">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"
                           id="comparison" {{ isset($product) && $product->is_free == false ? 'checked' : null }}>
                    Show comparison price <i class="input-helper"></i>
                </label>
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
        <div class="form-group" id="comparision_prise_field"
             style="display: {{ isset($product) && $product->is_free == true ? 'none' : 'block'}}">
            <label>Comparison Price</label>
            <input type="number" name="discount_price" id="discount_price" class="form-control">
        </div>
        <div class="key_feature mt-5">
            <h3>Key features</h3>
            <p>
                What's included in this price? (e.g. 10 users, 50 GB storage, 75+ videos, etc.)
                Drag and drop each feature to change the order.
            </p>
            <div class="kf_form">
                @if(isset($product))
                    @php
                        $key_features = json_decode($product->detail->key_features);
                    @endphp
                    @foreach($key_features as $key=>$key_feature)
                        <div class="row">
                            <div class="col-10 col-lg-11 grid-margin grid-margin-lg-0">
                                <div class="form-group">
                                    <label>Key feature <span class="kf_n">{{ ++$key }}</span></label>
                                    <div class="form_inner">
                                        <input type="text" name="key_features[]" id="kf_1" class="form-control"
                                               value="{{ $key_feature }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-lg-1 grid-margin grid-margin-lg-0 d-flex mt-4">
                                <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2"
                                        onclick="deleteKf(this)">
                                    <i class="ti-trash"></i>
                                </button>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row">
                        <div class="col-10 col-lg-11 grid-margin grid-margin-lg-0">
                            <div class="form-group">
                                <label>Key feature <span class="kf_n">1</span></label>
                                <div class="form_inner">
                                    <input type="text" name="key_features[]" id="kf_1" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-2 col-lg-1 grid-margin grid-margin-lg-0 d-flex mt-4">
                            <button type="button" class="btn btn-danger btn-rounded btn-icon ml-2"
                                    onclick="deleteKf(this)">
                                <i class="ti-trash"></i>
                            </button>
                        </div>
                    </div>
                @endif
            </div>
            <div class="add_new_kf mb-5 mt-3">
                <button type="button" class="btn btn-primary btn-rounded btn-fw new_kf_btn" onclick="add_new_kf(this)">
                    <i class="fa fa-plus"></i>
                    Add Key Feature (<span class="kf_count">0</span>/10)
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
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="term_type" id="optionsRadios1"
                                value="{{ Product::TERM_LIFETIME }}"
                                {{ isset($product) && $product->detail->term_type == Product::TERM_LIFETIME ? 'checked' : 'null' }}>
                            Lifetime access
                            <i class="input-helper"></i></label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="term_type" id="optionsRadios1"
                                value="{{ Product::TERM_ANNUAL }}"
                                {{ isset($product) && $product->detail->term_type == Product::TERM_ANNUAL ? 'checked' : 'null' }}>
                            Annual access(one year)
                            <i class="input-helper"></i></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Cover Image <span class="text-danger ">*</span></label>
            <input type="file" name="cover_image" class="form-control dropify" data-height="140"
                   data-allowed-file-extensions="jpg png jpeg svg" id="image"
                   data-default-file="{{ isset($product) ? static_asset($product->cover_image) : null }}" {{ !isset($product) ? 'required' : null }}>
            @error('cover_image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="invalid-feedback">
                This Should not be Empty!
            </div>
        </div>
    </div>
</div>
