@php use App\Models\Product; @endphp
@extends('frontend.layouts.master')
@push('style')
    <link
        href="{{ static_asset('assets/frontend/assets/615b54e9eebdbb6f52457d5b/css/appsumo-partners-2f565175f212c5732a1e6e.bc3fc6b41.css') }}"
        rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/f629418.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/907fe0f.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/659f62a.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/569fe19.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/ad2d1d9.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/68a5092.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/6c25c14.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/e35a1b8.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/7404888.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/b06186b.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/b2cd916.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/b41f881.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/e35a1b8.css') }}">
    <style>
        .taco-rating[data-v-bfc7195a]:before, .taco-rating:before, .taco-rating[data-v-bfc7195a]:before, .taco-rating[data-v-85a0ef72]:before {
            background-image: url({{ static_asset('assets/frontend/assets/images/heart-discolor-ratting.png') }});
        }

        .taco-rating-pct[data-v-bfc7195a]:before, .taco-rating-pct:before, .taco-rating-pct[data-v-bfc7195a]:before, .taco-rating > span[data-v-85a0ef72] {
            background-image: url({{ static_asset('assets/frontend/assets/images/heart-color-ratting.png') }});
        }

    </style>
@endpush
@section('content')
    <div class="sumo-browse-main">
        <form action="{{ route('browse') }}" method="GET">
            <div id="app" class="vuejs-browse-section">
                <!---->
                <section can-search="true" data-fetch-key="data-v-418b8503:0" data-v-418b8503>
                    <h2 class="appsumo-browse-section-title" data-v-418b8503>
                        Explore products
                    </h2>
                    <div class="vuejs-browse-page" data-v-418b8503>
                        <div class="browse-filters has-filters" data-v-6deeb7fa data-v-418b8503>
                            <div class="header" data-v-6deeb7fa>
                                <a class="hide_filter" data-v-6deeb7fa><img
                                        src="https://appsumo2nuxt-cdn.appsumo.com/21d44e966b0f57bf63c47600fe95e06e.svg"
                                        alt="Close"
                                        height="16" width="16" data-v-6deeb7fa></a>
                                <h5 data-v-6deeb7fa>Filters</h5>
                            </div>
                            <div class="container" data-v-6deeb7fa>
                                <div class="browse-filter" data-v-23f3f1e7 data-v-280328c8 data-v-6deeb7fa>
                                    <h5 data-v-23f3f1e7><span data-v-23f3f1e7>Sort by</span> <a data-v-23f3f1e7><img
                                                src="https://appsumo2nuxt-cdn.appsumo.com/a7984136dd1a9403b33cf72fcb8a4d53.svg"
                                                alt="Hide"
                                                data-v-23f3f1e7></a></h5>
                                    <div data-v-23f3f1e7>
                                        <div data-v-73260ec1 data-v-280328c8><label data-v-73260ec1><input type="radio"
                                                                                                           name="sort"
                                                                                                           value="recommended"
                                                                                                           checked="checked"
                                                                                                           data-v-73260ec1>
                                                <span class="checkmark"
                                                      data-v-73260ec1></span> Recommended</label></div>
                                        <div data-v-73260ec1 data-v-280328c8><label data-v-73260ec1><input type="radio"
                                                                                                           name="sort"
                                                                                                           value="latest"
                                                                                                           data-v-73260ec1>
                                                <span class="checkmark" data-v-73260ec1></span>
                                                Latest</label>
                                        </div>
                                        <div data-v-73260ec1 data-v-280328c8><label data-v-73260ec1><input type="radio"
                                                                                                           name="sort"
                                                                                                           value="rating"
                                                                                                           data-v-73260ec1>
                                                <span class="checkmark" data-v-73260ec1></span> Avg
                                                customer rating</label>
                                        </div>
                                        <div data-v-73260ec1 data-v-280328c8><label data-v-73260ec1><input type="radio"
                                                                                                           name="sort"
                                                                                                           value="price_low"
                                                                                                           data-v-73260ec1>
                                                <span class="checkmark" data-v-73260ec1></span>
                                                Price: Low to High</label>
                                        </div>
                                        <div data-v-73260ec1 data-v-280328c8><label data-v-73260ec1><input type="radio"
                                                                                                           name="sort"
                                                                                                           value="price_high"
                                                                                                           data-v-73260ec1>
                                                <span class="checkmark" data-v-73260ec1></span>
                                                Price: High to Low</label>
                                        </div>
                                        <div data-v-73260ec1 data-v-280328c8><label data-v-73260ec1><input type="radio"
                                                                                                           name="sort"
                                                                                                           value="ending"
                                                                                                           data-v-73260ec1>
                                                <span class="checkmark" data-v-73260ec1></span> Ending
                                                soon</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="browse-filter" data-v-23f3f1e7 data-v-c64ae4b6 data-v-6deeb7fa>
                                    <!---->
                                    <div data-v-23f3f1e7>
                                        <div class="container" data-v-2e26e6b9 data-v-c64ae4b6>
                                            <label data-v-2e26e6b9><input type="checkbox" value="1" name="gfl_choice"
                                                                          {{ request()->has('gfl_choice') ? request()->get('gfl_choice') == '1' ? 'checked' : null : null }}
                                                                          data-v-2e26e6b9> <span
                                                    class="checkmark" data-v-2e26e6b9></span> GFL Choice
                                                <div data-v-2e26e6b9>
                                                    <img
                                                        src="https://appsumo2nuxt-cdn.appsumo.com/41d1ea14e899aa45e49176fa66187786.svg"
                                                        alt="About" class="question" data-v-2e26e6b9 data-v-c64ae4b6>
                                                    <!---->
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                <div class="browse-filter" data-v-23f3f1e7 data-v-200fa0ce data-v-6deeb7fa>
                                    <h5 class="category_btn" data-v-23f3f1e7><span data-v-23f3f1e7>Categories</span> <a
                                            class="mb-0"
                                            data-v-23f3f1e7>
                                            <img class="cat_img"
                                                 src="https://appsumo2nuxt-cdn.appsumo.com/a7984136dd1a9403b33cf72fcb8a4d53.svg"
                                                 alt="Hide"
                                                 data-v-23f3f1e7></a></h5>
                                    <div class="category_area">
                                        @foreach($categories as $category)
                                            <div class="container" data-v-2e26e6b9 data-v-200fa0ce>
                                                <label data-v-2e26e6b9>
                                                    <input type="checkbox" value="{{ $category->product_category_id }}"
                                                           name="categories[]" {{ request()->has('categories') ? (in_array($category->product_category_id, request()->get('categories'))? 'checked' : null) : null }}>
                                                    <span class="checkmark"
                                                          data-v-2e26e6b9></span> {{ $category->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="browse-filter" data-v-23f3f1e7 data-v-85a0ef72 data-v-6deeb7fa>
                                    <h5 class="ratting_btn" data-v-23f3f1e7><span
                                            data-v-23f3f1e7>Avg customer rating</span> <a
                                            class="mb-0" data-v-23f3f1e7><img class="ratting_img"
                                                                              src="https://appsumo2nuxt-cdn.appsumo.com/a7984136dd1a9403b33cf72fcb8a4d53.svg"
                                                                              alt="Hide"
                                                                              data-v-23f3f1e7></a></h5>
                                    <div class="ratting_con" data-v-23f3f1e7>
                                        <div data-v-73260ec1 data-v-85a0ef72>
                                            <label data-v-73260ec1>
                                                <input type="radio" name="average_rating" value="4" data-v-73260ec1>
                                                <span
                                                    class="checkmark" data-v-73260ec1></span>
                                                <div class="rating" data-v-73260ec1 data-v-85a0ef72>
                                                    <div class="taco-rating" data-v-73260ec1 data-v-85a0ef72><span
                                                            style="width:76%;"
                                                            data-v-73260ec1 data-v-85a0ef72></span></div>
                                                    <span data-v-73260ec1 data-v-85a0ef72>&amp; up</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div data-v-73260ec1 data-v-85a0ef72>
                                            <label data-v-73260ec1>
                                                <input type="radio" name="average_rating" value="3" data-v-73260ec1>
                                                <span
                                                    class="checkmark" data-v-73260ec1></span>
                                                <div class="rating" data-v-73260ec1 data-v-85a0ef72>
                                                    <div class="taco-rating" data-v-73260ec1 data-v-85a0ef72><span
                                                            style="width:57%;"
                                                            data-v-73260ec1 data-v-85a0ef72></span></div>
                                                    <span data-v-73260ec1 data-v-85a0ef72>&amp; up</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div data-v-73260ec1 data-v-85a0ef72>
                                            <label data-v-73260ec1>
                                                <input type="radio" name="average_rating" value="2" data-v-73260ec1>
                                                <span
                                                    class="checkmark" data-v-73260ec1></span>
                                                <div class="rating" data-v-73260ec1 data-v-85a0ef72>
                                                    <div class="taco-rating" data-v-73260ec1 data-v-85a0ef72><span
                                                            style="width:38%;"
                                                            data-v-73260ec1 data-v-85a0ef72></span></div>
                                                    <span data-v-73260ec1 data-v-85a0ef72>&amp; up</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div data-v-73260ec1 data-v-85a0ef72>
                                            <label data-v-73260ec1>
                                                <input type="radio" name="average_rating" value="1" data-v-73260ec1>
                                                <span
                                                    class="checkmark" data-v-73260ec1></span>
                                                <div class="rating" data-v-73260ec1 data-v-85a0ef72>
                                                    <div class="taco-rating" data-v-73260ec1 data-v-85a0ef72><span
                                                            style="width:19%;"
                                                            data-v-73260ec1 data-v-85a0ef72></span></div>
                                                    <span data-v-73260ec1 data-v-85a0ef72>&amp; up</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div data-v-73260ec1 data-v-85a0ef72>
                                            <label data-v-73260ec1>
                                                <input type="radio" name="average_rating" value="0" checked="checked"
                                                       data-v-73260ec1>
                                                <span class="checkmark" data-v-73260ec1></span>
                                                <div class="rating" data-v-73260ec1 data-v-85a0ef72>
                                                    <div class="taco-rating" data-v-73260ec1 data-v-85a0ef72><span
                                                            style="width:0%;"
                                                            data-v-73260ec1 data-v-85a0ef72></span></div>
                                                    <span data-v-73260ec1 data-v-85a0ef72>Any</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="browse-filter" data-v-23f3f1e7 data-v-6deeb7fa>
                                    <h5 class="plan_btn" data-v-23f3f1e7><span data-v-23f3f1e7>Plan type</span> <a
                                            class="mb-0"
                                            data-v-23f3f1e7><img class="plan_img"
                                                                 src="https://appsumo2nuxt-cdn.appsumo.com/a7984136dd1a9403b33cf72fcb8a4d53.svg"
                                                                 alt="Hide"
                                                                 data-v-23f3f1e7></a></h5>
                                    <div data-v-23f3f1e7 class="plan_con">
                                        <div data-v-73260ec1>
                                            <label data-v-73260ec1>
                                                <input type="radio" name="plan_type" value="all"
                                                       {{ request()->has('plan_type') ? request()->get('plan_type') == 'all' ? 'checked' : null : 'checked' }}
                                                                                           data-v-73260ec1>
                                                <span class="checkmark" data-v-73260ec1></span>
                                                All plan types
                                            </label>
                                        </div>
                                        <div data-v-73260ec1><label data-v-73260ec1><input type="radio" name="plan_type"
                                                                                           value="{{ Product::TERM_LIFETIME }}"
                                                                                           {{ request()->has('plan_type') ? request()->get('plan_type') == Product::TERM_LIFETIME ? 'checked' : null : null }}
                                                                                           data-v-73260ec1> <span
                                                    class="checkmark" data-v-73260ec1></span>
                                                Lifetime deal</label>
                                        </div>
                                        <div data-v-73260ec1><label data-v-73260ec1><input type="radio" name="plan_type"
                                                                                           value="{{ Product::TERM_ANNUAL }}"
                                                                                           {{ request()->has('plan_type') ? request()->get('plan_type') == Product::TERM_ANNUAL ? 'checked' : null : null }}
                                                                                           data-v-73260ec1> <span
                                                    class="checkmark"
                                                    data-v-73260ec1></span>
                                                Annual</label>
                                        </div>
                                        <div data-v-73260ec1><label data-v-73260ec1><input type="radio" name="plan_type"
                                                                                           value="freebie"
                                                                                           {{ request()->has('plan_type') ? request()->get('plan_type') == 'freebie' ? 'checked' : null : null }}
                                                                                           data-v-73260ec1> <span
                                                    class="checkmark" data-v-73260ec1></span>
                                                Freebie</label>
                                        </div>
                                        <div data-v-73260ec1><label data-v-73260ec1><input type="radio" name="plan_type"
                                                                                           value="subscription"
                                                                                           {{ request()->has('plan_type') ? request()->get('plan_type') == 'subscription' ? 'checked' : null : null }}
                                                                                           data-v-73260ec1> <span
                                                    class="checkmark" data-v-73260ec1></span>
                                                Subscription</label>
                                        </div>
                                        <div data-v-73260ec1><label data-v-73260ec1><input type="radio" name="plan_type"
                                                                                           value="digital_download"
                                                                                           {{ request()->has('plan_type') ? request()->get('plan_type') == 'digital_download' ? 'checked' : null : null }}
                                                                                           data-v-73260ec1> <span
                                                    class="checkmark"
                                                    data-v-73260ec1></span> Digital download</label></div>
                                    </div>
                                </div>
                                <div class="browse-filter" data-v-23f3f1e7 data-v-6deeb7fa>
                                    <h5 class="status_btn" data-v-23f3f1e7><span data-v-23f3f1e7>Status</span> <a
                                            class="mb-0"
                                            data-v-23f3f1e7><img class="status_img"
                                                                 src="https://appsumo2nuxt-cdn.appsumo.com/a7984136dd1a9403b33cf72fcb8a4d53.svg"
                                                                 alt="Hide"
                                                                 data-v-23f3f1e7></a></h5>
                                    <div class="status_con" data-v-23f3f1e7>
                                        <div data-v-73260ec1><label data-v-73260ec1><input type="radio" name="status"
                                                                                           value="current"
                                                                                           checked="checked"
                                                                                           data-v-73260ec1> <span
                                                    class="checkmark" data-v-73260ec1></span>
                                                Current</label>
                                        </div>
                                        <div data-v-73260ec1><label data-v-73260ec1><input type="radio" name="status"
                                                                                           value="ending"
                                                                                           data-v-73260ec1> <span
                                                    class="checkmark" data-v-73260ec1></span> Ending</label></div>
                                        <div data-v-73260ec1><label data-v-73260ec1><input type="radio" name="status"
                                                                                           value="expired"
                                                                                           data-v-73260ec1> <span
                                                    class="checkmark" data-v-73260ec1></span> Expired</label></div>
                                        <div data-v-73260ec1><label data-v-73260ec1><input type="radio" name="status"
                                                                                           value="all"
                                                                                           data-v-73260ec1> <span
                                                    class="checkmark" data-v-73260ec1></span> All</label></div>
                                    </div>
                                </div>
                                <div class="browse-filter" data-v-23f3f1e7 data-v-16062e90 data-v-6deeb7fa>
                                    <h5 class="price_btn" data-v-23f3f1e7><span data-v-23f3f1e7>Price</span> <a
                                            class="mb-0"
                                            data-v-23f3f1e7><img class="price_img"
                                                                 src="{{ static_asset('assets/frontend/assets/images/arrow-top.svg') }}"
                                                                 alt="Hide"
                                                                 data-v-23f3f1e7></a></h5>
                                    <div class="price_con" data-v-23f3f1e7>
                                        <div data-v-73260ec1 data-v-16062e90><label data-v-73260ec1><input type="radio"
                                                                                                           name="price_range"
                                                                                                           value="free"
                                                                                                           {{ request()->has('price_range') ? request()->get('price_range') == 'free' ? 'checked' : null : null }}
                                                                                                           data-v-73260ec1>
                                                <span class="checkmark"
                                                      data-v-73260ec1></span> Free</label></div>
                                        <div data-v-73260ec1 data-v-16062e90><label data-v-73260ec1><input type="radio"
                                                                                                           name="price_range"
                                                                                                           value="custom"
                                                                                                           {{ request()->has('price_range') ? request()->get('price_range') == 'free' ? null : 'checked' : 'checked' }}
                                                                                                           data-v-73260ec1>
                                                <span
                                                    class="checkmark" data-v-73260ec1></span> Custom range</label></div>
                                        <div class="price-range" data-v-23f3f1e7 data-v-16062e90>
                                            <div data-v-23f3f1e7 data-v-16062e90><label data-v-23f3f1e7 data-v-16062e90><input
                                                        type="number" name="price_from" min="0" value="{{ request()->has('price_from') ? request()->get('price_from') : null }}" data-v-23f3f1e7 data-v-16062e90></label></div>
                                            <span data-v-23f3f1e7 data-v-16062e90>to</span>
                                            <div data-v-23f3f1e7 data-v-16062e90><label data-v-23f3f1e7 data-v-16062e90><input
                                                        type="number" name="price_to" min="0" value="{{ request()->has('price_to') ? request()->get('price_to') : null }}" data-v-23f3f1e7 data-v-16062e90></label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer" data-v-6deeb7fa>
                                <div data-v-6deeb7fa>
                                    <button class="clear" data-v-6deeb7fa>
                                        Clear filters
                                    </button>
                                </div>
                                <div data-v-6deeb7fa>
                                    <button class="apply" data-v-6deeb7fa>
                                        Apply
                                        <!---->
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="w-100" data-v-418b8503>
                            <div class="browse-results-header" data-v-418b8503>
                                <div data-v-418b8503><em class="deal-length-text" data-v-418b8503>
                                        {{ $products->count() }} products
                                    </em>
                                </div>
                                <div class="appsumo-sort d-none d-md-block">
                                    <div class="appsumo-dropdown-outer-container">
                                        <button data-testid="sort-dropdown" aria-haspopup="true"
                                                class="frontend-dropdown-button no-outline button recommended_btn">
                                            <span style="font-weight: normal">Sort by:</span>
                                            <strong>Recommended</strong></button>
                                        <div class="appsumo-dropdown-inner-container">
                                            <div value="recommended" class="frontend-dropdown">
                                                <span>Recommended</span>
                                            </div>
                                            <div value="latest" class="frontend-dropdown"><span>Latest</span></div>
                                            <div value="review_count" class="frontend-dropdown"><span># of customer ratings</span>
                                            </div>
                                            <div value="rating" class="frontend-dropdown"><span>Avg
                                 customer rating</span></div>
                                            <div value="price_low" class="frontend-dropdown">
                                                <span>Price: low to high</span></div>
                                            <div value="price_high" class="frontend-dropdown">
                                                <span>Price: high to low</span></div>
                                            <div value="ending" class="frontend-dropdown"><span>Ending soon</span></div>
                                        </div>
                                    </div>
                                </div>
                                <a class="filter_show" data-v-418b8503><img
                                        src="{{ static_asset('assets/frontend/assets/images/arrow-top.svg') }}"
                                        alt="Filter"
                                        data-v-418b8503> Filter</a>
                            </div>
                            <!---->
                            <div class="browse-results" data-v-418b8503>
                                <div class="vuejs-browse-results-container" data-v-40488bdc data-v-418b8503>
                                    <div class="appsumo-css-grid-container" data-v-40488bdc>
                                        @foreach($products as $product)
                                            <div data-testid="deal-tile" slug="{{ $product->slug }}"
                                                 media_url="https://appsumo2-cdn.appsumo.com/media/deals/images/as-web-WriterZen_1.png"
                                                 class="appsumo-deal-tile" data-v-40488bdc data-v-40488bdc>
                                                <div class="new-card-design" data-v-40488bdc>
                                                    <div data-v-027eb16e data-v-40488bdc>
                                                        <a href="{{ route('product-details', $product->slug) }}"
                                                           class="stretched-link text-decoration-none" data-v-027eb16e>

                                                        </a>
                                                        <div class="image-container" data-v-027eb16e
                                                             style="width: 100%!important; height: 255px!important;">
                                                            <img src="{{ static_asset($product->cover_image) }}"
                                                                 alt="{{ $product->name }}"
                                                                 class="product-image pin-image-top v-lazy-image"
                                                                 data-v-027eb16e>
                                                        </div>
                                                        <div class="p-3 description-container" data-v-027eb16e>
                                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                                <a href="{{ route('product-details', $product->slug) }}">
                                                                    {{ $product->name }}
                                                                </a>
                                                            </p>
                                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                                {{ Product::TERMS[$product->detail->term_type] }}
                                                            </p>
                                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                                Boost SEO rankings with tools organized into a
                                                                results-oriented workflow
                                                            </p>
                                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                                <div class="appsumo-taco-rating-container">
                                                                    <div data-testid="taco-rating"
                                                                         class="appsumo-taco-container flex-wrap"
                                                                         data-v-bfc7195a>
                                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                                class="taco-rating-pct"
                                                                                style="width:calc(72.75% + 32px);"
                                                                                data-v-bfc7195a></span></div>
                                                                        <a href="##reviews"
                                                                           class="appsumo-link appsumo-rating-link ml-2"
                                                                           data-v-bfc7195a>106 Reviews</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center p-0 m-0"
                                                                 data-v-027eb16e>
                                       <span class="d-inline-block w-100" data-v-027eb16e>
                                          <div class="deal-price w-100 product-carousel-component" data-v-5864787e
                                               data-v-027eb16e>
                                              @if($product->is_free == true)
                                                  <div data-v-5864787e>
                                                <p class="d-inline-block mr-1" data-v-5864787e>
                                                   Free
                                                </p>
                                             </div>
                                              @else
                                                  <div data-v-5864787e>
                                                <p class="d-inline-block mr-1" data-v-5864787e>
                                                   ${{ number_format($product->discount_price == null || $product->discount_price <= 0 ? $product->price : $product->discount_price, 2)  }}
                                                </p>
                                                      @if($product->discount_price != null && $product->discount_price > 0)
                                                          <p class="original d-inline-block" data-v-5864787e>
                                                   ${{ number_format($product->price, 2)  }}
                                                </p>
                                                      @endif
                                             </div>
                                              @endif
                                          </div>
                                       </span>
                                                                @if($product->gfl_choice == true)
                                                                    <a href="" class="ribbon-container"
                                                                       data-v-027eb16e>
                                                                        <div data-v-027eb16e>
                                                                            <div class="ribbon" data-v-027eb16e>
                                                                                GFL Choice
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                @endif
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="appsumo-more-results-button-container" style="display:none;" data-v-418b8503><a
                                    class="btn appsumo-more-results-button" data-v-418b8503>Show More Results</a></div>
                            <div style="display:none;" data-v-418b8503>
                                <div class="mt-3" data-v-418b8503>
                                    <p class="text-center" data-v-418b8503>
                                        Loading
                                    </p>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fa-spin loader-icon spinner-icon fa-spin loader-icon mx-auto d-block"
                                         data-v-7432a267
                                         data-v-7432a267 data-v-418b8503>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.39315 1.98118C7.2888 0.728943 9.56188 0 12 0C14.4381 0 16.7112 0.728943 18.6068 1.98118L16.7171 4.84193C15.3648 3.94865 13.7458 3.42857 12 3.42857C10.2542 3.42857 8.63517 3.94865 7.28292 4.84193L5.39315 1.98118ZM0 12C0 9.56188 0.728943 7.2888 1.98118 5.39315L4.84193 7.28292C3.94865 8.63517 3.42857 10.2542 3.42857 12C3.42857 13.7458 3.94865 15.3648 4.84193 16.7171L1.98118 18.6068C0.728943 16.7112 0 14.4381 0 12ZM22.0188 5.39315C23.2711 7.2888 24 9.56188 24 12C24 14.4381 23.2711 16.7112 22.0188 18.6068L19.1581 16.7171C20.0514 15.3648 20.5714 13.7458 20.5714 12C20.5714 10.2542 20.0514 8.63517 19.1581 7.28292L22.0188 5.39315ZM12 24C9.56188 24 7.2888 23.2711 5.39315 22.0188L7.28292 19.1581C8.63517 20.0514 10.2542 20.5714 12 20.5714C13.7458 20.5714 15.3648 20.0514 16.7171 19.1581L18.6068 22.0188C16.7112 23.2711 14.4381 24 12 24Z"
                                              fill="#272727" data-v-7432a267 data-v-7432a267></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            {{-- <button type="submit">dcdcb</button> --}}
        </form>
    </div>
@endsection
@push('script')

<script src="{{ static_asset('assets/frontend/assets/js/8c5432f.js') }}"></script>
<script src="https://appsumo2nuxt-cdn.appsumo.com/afa2935.modern.js" defer></script>
<script src="https://appsumo2nuxt-cdn.appsumo.com/640fcae.modern.js" defer></script>
<script src="https://appsumo2nuxt-cdn.appsumo.com/76ca612.modern.js" defer></script>
<script src="https://appsumo2nuxt-cdn.appsumo.com/a95a7e7.modern.js" defer></script>
<script src="https://appsumo2nuxt-cdn.appsumo.com/0b97325.modern.js" defer></script>
<script src="https://appsumo2nuxt-cdn.appsumo.com/7390f29.modern.js" defer></script>
<script src="https://appsumo2nuxt-cdn.appsumo.com/006e49d.modern.js" defer></script>
<script src="https://appsumo2nuxt-cdn.appsumo.com/665ca78.modern.js" defer></script>
<script src="https://appsumo2nuxt-cdn.appsumo.com/36e9a5b.modern.js" defer></script>
@endpush
