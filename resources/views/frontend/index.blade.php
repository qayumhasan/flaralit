@php use App\Models\Product @endphp
@extends('frontend.layouts.master')
@push('meta')
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Shop Grandfatheredly Deals | Reduce Your Business Costs</title>
<meta data-n-head="ssr" charset="utf-8">
<meta data-n-head="ssr" name="viewport" content="width=device-width, initial-scale=1">
<meta data-n-head="ssr" data-hid="description" name="description" content=" Grandfatheredly">
<meta data-n-head="ssr" name="p:domain_verify" content="f56ac577edc559827a3f367c1e44b381">
<meta data-n-head="ssr" property="og:title" content=" Grandfatheredly: The Store for Entrepreneurs">
<meta data-n-head="ssr" property="og:description" content="">
<meta data-n-head="ssr" property="og:site_name" content=" Grandfatheredly">
<meta data-n-head="ssr" property="og:image" content="">
<meta data-n-head="ssr" property="og:url" content="index.html">
<meta data-n-head="ssr" property="og:type" content="website">
<meta data-n-head="ssr" property="og:email" content="support@Grandfatheredly.com">
<meta data-n-head="ssr" name="twitter:card" content="summary_large_image">
<meta data-n-head="ssr" name="twitter:site" content="@ Grandfatheredly">
<meta data-n-head="ssr" name="twitter:url" content="index.html">
<meta data-n-head="ssr" name="twitter:creator" content=" Grandfatheredly">
@endpush
@push('style')



@endpush

@section('content')

<div class="m-0 p-0" data-v-3948d8ad>
    <div class="sumo-browse-main" data-v-3948d8ad>
        <section data-v-3948d8ad>
            <div data-fetch-key="1" class="smart-collection-section" data-v-3948d8ad>
                <div class="spotlight-container">
                    <!---->
                    <div class="wrapper spotlight-carousel" data-v-2351f2da>
                        <div class="flicking-viewport" data-v-2351f2da>
                            <div class="flicking-camera owl-carousel header_sli">



                                <div class="carousel-cell">
                                    <div class="carousel-cell-inner">
                                        <div class="swiper-slide hero-six-slide-item bg-img" data-bg-img="assets/images/slider/slider6-bg1.png">
                            <div class="container container-six-slider h-100">
                                <div class="row align-items-center position-relative h-100">
                                    <div class="col-12 col-sm-6 col-lg-6">
                                        <div class="hero-six-slide-content">
                                            <h4 class="hero-six-slide-sub-title">Limited Offer 25% Off</h4>
                                            <h1 class="hero-six-slide-title">The Best Saas Deals</h1>

                                            <h3 class="mb-4 hero-six-slide-desc">Grandfathered For A Lifetime</h3>
                                            <p class="hero-six-slide-desc"><span>Only</span> $199.02</p>
                                            <a class="btn btn-border" href="shop.html">Learn More <i class="icon fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6">
                                        <div class="hero-six-slide-thumb">
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}" width="522" height="493" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                    </div>
                                </div>



                                
                                
                            </div>

                        </div>
                        <span
                            class="flicking-arrow-prev flicking-button is-outside is-circle flicking-arrow-prev-1 flicking-arrow-is-disabled"
                            data-v-2351f2da></span> <span
                            class="flicking-arrow-next flicking-button is-outside is-circle flicking-arrow-next-1 flicking-arrow-is-disabled"
                            data-v-2351f2da></span>
                        <div class="flicking-pagination flicking-pagination-1" data-v-2351f2da></div>
                    </div>
                </div>
            </div>
            <div data-fetch-key="2" class="smart-collection-section" data-v-3948d8ad>
                <!---->
                <div class="mb-5 product-carousel" data-v-256a1bdd>
                    <div class="product-carousel-title" data-v-256a1bdd>
                        <h3 data-v-256a1bdd>
                            <a href="#" data-v-256a1bdd>
                                <span data-v-256a1bdd>Current Deals</span>
                                <!---->
                            </a>
                        </h3>
                        <a href="#" title="Browse this collection" class="more d-inline" data-v-256a1bdd>View all</a>
                    </div>
                    <div class="wrapper" data-v-2351f2da data-v-256a1bdd>
                        <div class="flicking-viewport" data-v-2351f2da>
                            <div class="flicking-camera owl-carousel product-slider-owl">
                                @foreach($products as $product)
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="{{ route('product-details', $product->slug) }}"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e><img
                                                src="{{ static_asset($product->cover_image) }}"
                                                alt="{{ $product->name }}"
                                                class="product-image pin-image-top v-lazy-image"
                                                style="height: 215px!important;" data-v-027eb16e>
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                {{ $product->name }}
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
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/writerzen/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>106 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $69
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,035
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                @if($product->gfl_choice == true)
                                                <a href="" class="ribbon-container" data-v-027eb16e>
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
                                @endforeach
                            </div>
                        </div>
                        <span
                            class="flicking-arrow-prev flicking-button is-outside is-circle flicking-arrow-prev-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span> <span
                            class="flicking-arrow-next flicking-button is-outside is-circle flicking-arrow-next-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span>
                        <!---->
                    </div>
                </div>

            </div>
            <div data-fetch-key="3" class="smart-collection-section" data-v-3948d8ad>
                <div>
                    <div>
                        <div class="roadblock" data-v-463c957d>
                            <div class="roadblock-content" data-v-463c957d>
                                <div class="cta" data-v-463c957d>
                                    <h5 data-v-463c957d><span data-v-463c957d>Discover, buy, &amp; sell</span> the
                                        products you
                                        need to grow your business
                                    </h5>
                                    <p data-v-463c957d>
                                        Get exciting new products and deals—right in your inbox.
                                        Join the marketplace trusted by 1M+ entrepreneurs.
                                    </p>
                                    <form data-v-463c957d><input type="email" name="email" placeholder="Email"
                                            aria-label="Email" value="" data-v-463c957d>
                                        <button type="submit" data-v-463c957d>
                                            Gimme the goods
                                        </button>
                                    </form>
                                    <!---->
                                </div>
                                <div class="image" data-v-463c957d><img
                                        src="https://appsumo2nuxt-cdn.appsumo.com/b288b96bf3170fad97875dabbd94e671.svg"
                                        alt="Discover, buy, & sell" width="250" height="190" data-v-463c957d></div>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <!---->
                </div>
            </div>
            <div data-fetch-key="4" class="smart-collection-section" data-v-3948d8ad>
                <div class="mb-5 product-carousel" data-v-256a1bdd>
                    <div class="product-carousel-title" data-v-256a1bdd>
                        <h3 data-v-256a1bdd>
                            <a href="#" data-v-256a1bdd>
                                <span data-v-256a1bdd>What's hot</span>
                                
                            </a>
                        </h3>
                        <a href="#" title="Browse this collection" class="more d-inline" data-v-256a1bdd>View all</a>
                    </div>
                    <div class="wrapper" data-v-2351f2da data-v-256a1bdd>
                        <div class="flicking-viewport" data-v-2351f2da>
                            <div class="flicking-camera owl-carousel product-slider-owl">
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/writerzen/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e><img
                                                src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="WriterZen" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                WriterZen good
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Boost SEO rankings with tools organized into a
                                                results-oriented workflow
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/writerzen/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>106 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $69
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,035
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/writerzen/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/instantly/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Instantly" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Instantly
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Automate and scale B2B cold email outreach with the power of
                                                AI
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/instantly/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>31 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $444
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/instantly/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/uuki/index.html" class="stretched-link text-decoration-none"
                                            data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="UUKI" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                UUKI
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Build Web3 communities where you can host discussions,
                                                create event pages, and sell
                                                content
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/uuki/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>202 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $948
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/uuki/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="#" class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Acumbamail" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Acumbamail
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create and manage email campaigns and landing pages in a
                                                flash
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="##reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>263 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $839
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="#" class="ribbon-container" data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/robomotion-rpa/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Robomotion RPA"
                                                class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 5 days</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Robomotion RPA
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Automate repetitive and data-intensive manual tasks with
                                                easy-to-use RPA bots
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct" style="width:calc(75% + 40px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/robomotion-rpa/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>41 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,980
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/robomotion-rpa/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/peppertypeai/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Peppertype.ai" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Peppertype.ai
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Generate better content in seconds with the power of
                                                artificial intelligence
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/peppertypeai/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>933 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $300
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/peppertypeai/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/bramework/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Bramework" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Bramework
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create SEO-friendly blog posts in a fraction of the time
                                                with an AI-powered writing
                                                assistant
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(71.25% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/bramework/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>47 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,044
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/bramework/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/harvel/index.html" class="stretched-link text-decoration-none"
                                            data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Harvel" class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 15 hours</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Harvel
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                24/7 automated copyright protection for digital creators
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(69.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/harvel/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>6 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $400
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/harvel/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/formaloo/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Formaloo" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Formaloo
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create unlimited super-forms, surveys, and quizzes in a few
                                                clicks
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct" style="width:calc(69% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/formaloo/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>96 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $684
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/formaloo/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/tidycal/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="TidyCal" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                TidyCal
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Make scheduling your next meeting easy with calendar
                                                integrations, booking pages, and
                                                customization
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(64.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/tidycal/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>159 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $29
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $120
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <!---->
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/mobiroller/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Mobiroller" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Mobiroller
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Quickly create comprehensive, coding-free mobile apps for
                                                ecommerce and beyond
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/mobiroller/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>25 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $700
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/mobiroller/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="#" class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAACCAQAAAA3fa6RAAAADklEQVR42mNkAANGCAUAACMAA2w/AMgAAAAASUVORK5CYII="
                                                alt="SuiteDash"
                                                class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 8 days</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                SuiteDash
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                An all-in-one business software that improves communication
                                                and team collaboration
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(68.25% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="##reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>220 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $129
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,188
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="#" class="ribbon-container" data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span
                            class="flicking-arrow-prev flicking-button is-outside is-circle flicking-arrow-prev-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span> <span
                            class="flicking-arrow-next flicking-button is-outside is-circle flicking-arrow-next-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span>
                        <!---->
                    </div>
                </div>


            </div>
      






            
            <div data-fetch-key="6" class="smart-collection-section" data-v-3948d8ad>
                <!---->
                <div class="mb-5 product-carousel" data-v-256a1bdd>
                    <div class="product-carousel-title" data-v-256a1bdd>
                        <h3 data-v-256a1bdd>
                            <a href="#" data-v-256a1bdd>
                                <span data-v-256a1bdd>Current Deals</span>
                                <!---->
                            </a>
                        </h3>
                        <a href="#" title="Browse this collection" class="more d-inline" data-v-256a1bdd>View all</a>
                    </div>
                    <div class="wrapper" data-v-2351f2da data-v-256a1bdd>
                        <div class="flicking-viewport" data-v-2351f2da>
                            <div class="flicking-camera owl-carousel product-slider-owl">
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/writerzen/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e><img
                                                src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="WriterZen" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                WriterZen good
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Boost SEO rankings with tools organized into a
                                                results-oriented workflow
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/writerzen/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>106 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $69
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,035
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/writerzen/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/instantly/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Instantly" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Instantly
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Automate and scale B2B cold email outreach with the power of
                                                AI
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/instantly/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>31 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $444
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/instantly/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/uuki/index.html" class="stretched-link text-decoration-none"
                                            data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="UUKI" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                UUKI
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Build Web3 communities where you can host discussions,
                                                create event pages, and sell
                                                content
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/uuki/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>202 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $948
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/uuki/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="#" class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Acumbamail" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Acumbamail
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create and manage email campaigns and landing pages in a
                                                flash
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="##reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>263 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $839
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="#" class="ribbon-container" data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/robomotion-rpa/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Robomotion RPA"
                                                class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 5 days</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Robomotion RPA
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Automate repetitive and data-intensive manual tasks with
                                                easy-to-use RPA bots
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct" style="width:calc(75% + 40px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/robomotion-rpa/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>41 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,980
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/robomotion-rpa/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/peppertypeai/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Peppertype.ai" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Peppertype.ai
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Generate better content in seconds with the power of
                                                artificial intelligence
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/peppertypeai/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>933 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $300
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/peppertypeai/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/bramework/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Bramework" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Bramework
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create SEO-friendly blog posts in a fraction of the time
                                                with an AI-powered writing
                                                assistant
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(71.25% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/bramework/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>47 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,044
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/bramework/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/harvel/index.html" class="stretched-link text-decoration-none"
                                            data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Harvel" class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 15 hours</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Harvel
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                24/7 automated copyright protection for digital creators
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(69.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/harvel/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>6 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $400
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/harvel/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/formaloo/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Formaloo" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Formaloo
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create unlimited super-forms, surveys, and quizzes in a few
                                                clicks
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct" style="width:calc(69% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/formaloo/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>96 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $684
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/formaloo/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/tidycal/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="TidyCal" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>

                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                TidyCal
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Make scheduling your next meeting easy with calendar
                                                integrations, booking pages, and
                                                customization
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(64.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/tidycal/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>159 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $29
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $120
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <!---->
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/mobiroller/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Mobiroller" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Mobiroller
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Quickly create comprehensive, coding-free mobile apps for
                                                ecommerce and beyond
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/mobiroller/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>25 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $700
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/mobiroller/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="#" class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAACCAQAAAA3fa6RAAAADklEQVR42mNkAANGCAUAACMAA2w/AMgAAAAASUVORK5CYII="
                                                alt="SuiteDash"
                                                class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 8 days</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                SuiteDash
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                An all-in-one business software that improves communication
                                                and team collaboration
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(68.25% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="##reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>220 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $129
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,188
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="#" class="ribbon-container" data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span
                            class="flicking-arrow-prev flicking-button is-outside is-circle flicking-arrow-prev-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span> <span
                            class="flicking-arrow-next flicking-button is-outside is-circle flicking-arrow-next-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span>
                        <!---->
                    </div>
                </div>

            </div>
            <div data-fetch-key="7" class="smart-collection-section" data-v-3948d8ad>
                <!---->
                <div class="mb-5 product-carousel" data-v-256a1bdd>
                    <div class="product-carousel-title" data-v-256a1bdd>
                        <h3 data-v-256a1bdd>
                            <a href="#" data-v-256a1bdd>
                                <span data-v-256a1bdd>What's hot</span>
                                <!---->
                            </a>
                        </h3>
                        <a href="#" title="Browse this collection" class="more d-inline" data-v-256a1bdd>View all</a>
                    </div>
                    <div class="wrapper" data-v-2351f2da data-v-256a1bdd>
                        <div class="flicking-viewport" data-v-2351f2da>
                            <div class="flicking-camera owl-carousel product-slider-owl">
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/writerzen/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e><img
                                                src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="WriterZen" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                WriterZen good
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Boost SEO rankings with tools organized into a
                                                results-oriented workflow
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/writerzen/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>106 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $69
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,035
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/writerzen/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/instantly/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Instantly" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Instantly
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Automate and scale B2B cold email outreach with the power of
                                                AI
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/instantly/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>31 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $444
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/instantly/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/uuki/index.html" class="stretched-link text-decoration-none"
                                            data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="UUKI" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                UUKI
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Build Web3 communities where you can host discussions,
                                                create event pages, and sell
                                                content
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/uuki/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>202 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $948
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/uuki/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="#" class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Acumbamail" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Acumbamail
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create and manage email campaigns and landing pages in a
                                                flash
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="##reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>263 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $839
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="#" class="ribbon-container" data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/robomotion-rpa/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Robomotion RPA"
                                                class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 5 days</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Robomotion RPA
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Automate repetitive and data-intensive manual tasks with
                                                easy-to-use RPA bots
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct" style="width:calc(75% + 40px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/robomotion-rpa/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>41 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,980
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/robomotion-rpa/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/peppertypeai/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Peppertype.ai" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Peppertype.ai
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Generate better content in seconds with the power of
                                                artificial intelligence
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/peppertypeai/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>933 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $300
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/peppertypeai/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/bramework/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Bramework" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Bramework
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create SEO-friendly blog posts in a fraction of the time
                                                with an AI-powered writing
                                                assistant
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(71.25% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/bramework/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>47 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,044
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/bramework/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/harvel/index.html" class="stretched-link text-decoration-none"
                                            data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Harvel" class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 15 hours</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Harvel
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                24/7 automated copyright protection for digital creators
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(69.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/harvel/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>6 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $400
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/harvel/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/formaloo/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Formaloo" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Formaloo
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create unlimited super-forms, surveys, and quizzes in a few
                                                clicks
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct" style="width:calc(69% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/formaloo/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>96 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $684
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/formaloo/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/tidycal/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="TidyCal" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>

                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                TidyCal
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Make scheduling your next meeting easy with calendar
                                                integrations, booking pages, and
                                                customization
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(64.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/tidycal/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>159 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $29
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $120
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <!---->
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/mobiroller/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Mobiroller" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Mobiroller
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Quickly create comprehensive, coding-free mobile apps for
                                                ecommerce and beyond
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/mobiroller/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>25 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $700
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/mobiroller/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="#" class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAACCAQAAAA3fa6RAAAADklEQVR42mNkAANGCAUAACMAA2w/AMgAAAAASUVORK5CYII="
                                                alt="SuiteDash"
                                                class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 8 days</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                SuiteDash
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                An all-in-one business software that improves communication
                                                and team collaboration
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(68.25% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="##reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>220 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $129
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,188
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="#" class="ribbon-container" data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span
                            class="flicking-arrow-prev flicking-button is-outside is-circle flicking-arrow-prev-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span> <span
                            class="flicking-arrow-next flicking-button is-outside is-circle flicking-arrow-next-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span>
                        <!---->
                    </div>
                </div>

            </div>
            <div data-fetch-key="8" class="smart-collection-section" data-v-3948d8ad>
                <!---->
                <div class="mb-5 product-carousel" data-v-256a1bdd>
                    <div class="product-carousel-title" data-v-256a1bdd>
                        <h3 data-v-256a1bdd>
                            <a href="#" data-v-256a1bdd>
                                <span data-v-256a1bdd>What's hot</span>
                                <!---->
                            </a>
                        </h3>
                        <a href="#" title="Browse this collection" class="more d-inline" data-v-256a1bdd>View all</a>
                    </div>
                    <div class="wrapper" data-v-2351f2da data-v-256a1bdd>
                        <div class="flicking-viewport" data-v-2351f2da>
                            <div class="flicking-camera owl-carousel product-slider-owl">
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/writerzen/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e><img
                                                src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="WriterZen" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                WriterZen good
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Boost SEO rankings with tools organized into a
                                                results-oriented workflow
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/writerzen/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>106 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $69
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,035
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/writerzen/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/instantly/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Instantly" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Instantly
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Automate and scale B2B cold email outreach with the power of
                                                AI
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/instantly/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>31 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $444
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/instantly/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/uuki/index.html" class="stretched-link text-decoration-none"
                                            data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="UUKI" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                UUKI
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Build Web3 communities where you can host discussions,
                                                create event pages, and sell
                                                content
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/uuki/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>202 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $948
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/uuki/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="#" class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Acumbamail" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Acumbamail
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create and manage email campaigns and landing pages in a
                                                flash
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="##reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>263 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $839
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="#" class="ribbon-container" data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/robomotion-rpa/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Robomotion RPA"
                                                class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 5 days</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Robomotion RPA
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Automate repetitive and data-intensive manual tasks with
                                                easy-to-use RPA bots
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct" style="width:calc(75% + 40px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/robomotion-rpa/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>41 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,980
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/robomotion-rpa/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/peppertypeai/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Peppertype.ai" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Peppertype.ai
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Generate better content in seconds with the power of
                                                artificial intelligence
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/peppertypeai/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>933 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $300
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/peppertypeai/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/bramework/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Bramework" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Bramework
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create SEO-friendly blog posts in a fraction of the time
                                                with an AI-powered writing
                                                assistant
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(71.25% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/bramework/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>47 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,044
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/bramework/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/harvel/index.html" class="stretched-link text-decoration-none"
                                            data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Harvel" class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 15 hours</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Harvel
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                24/7 automated copyright protection for digital creators
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(69.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/harvel/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>6 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $400
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/harvel/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/formaloo/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Formaloo" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Formaloo
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create unlimited super-forms, surveys, and quizzes in a few
                                                clicks
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct" style="width:calc(69% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/formaloo/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>96 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $684
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/formaloo/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/tidycal/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="TidyCal" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>

                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                TidyCal
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Make scheduling your next meeting easy with calendar
                                                integrations, booking pages, and
                                                customization
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(64.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/tidycal/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>159 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $29
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $120
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <!---->
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/mobiroller/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Mobiroller" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Mobiroller
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Quickly create comprehensive, coding-free mobile apps for
                                                ecommerce and beyond
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/mobiroller/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>25 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $700
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/mobiroller/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="#" class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAACCAQAAAA3fa6RAAAADklEQVR42mNkAANGCAUAACMAA2w/AMgAAAAASUVORK5CYII="
                                                alt="SuiteDash"
                                                class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 8 days</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                SuiteDash
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                An all-in-one business software that improves communication
                                                and team collaboration
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(68.25% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="##reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>220 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $129
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,188
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="#" class="ribbon-container" data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span
                            class="flicking-arrow-prev flicking-button is-outside is-circle flicking-arrow-prev-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span> <span
                            class="flicking-arrow-next flicking-button is-outside is-circle flicking-arrow-next-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span>
                        <!---->
                    </div>
                </div>

            </div>
            <div data-fetch-key="9" class="smart-collection-section">
                <div data-v-30a3404f class="top-pick">
                    <div data-v-30a3404f class="top-picks-for-you">
                        <div data-v-30a3404f class="trophy"><img data-v-30a3404f
                                src="https://appsumo2nuxt-cdn.appsumo.com/a875fda7332e874679ff5429d9c23fa7.svg" alt>
                        </div>
                        <h5 data-v-30a3404f class="mobile-header">
                            Our top pick for you
                        </h5>
                        <h5 data-v-30a3404f class="desktop-header">
                            Top picks for you
                        </h5>
                        <p data-v-30a3404f>We thought you might like this.<br data-v-30a3404f>See what we
                            recommend for you.
                        </p>
                        <a data-v-30a3404f href="/collections/top-picks/">
                            Explore more
                        </a>
                    </div>
                    <div data-v-30a3404f class="pick">
                        <div data-v-30a3404f class="image-container"><a data-v-30a3404f href="/products/instantly/"
                                class="d-block"><img data-v-30a3404f
                                    src="{{ static_asset('assets/frontend/assets/images/320x213.png') }}"
                                    class="product-image v-lazy-image v-lazy-image-loaded"></a>
                        </div>
                        <h4 data-v-30a3404f>Instantly</h4>
                        <p data-v-30a3404f class="top-pick-deal-description">
                            Automate and scale B2B cold email outreach with the power of AI
                        </p>
                        <div data-v-2c9a2615 data-v-30a3404f browse="true"
                            class="sumo-taco-rating featured-deal-taco-container">
                            <div data-v-2c9a2615 class="taco-rating">
                                <span data-v-2c9a2615 class="taco-rating-pct"
                                    style="width: calc(73.65% + 26px);"></span>
                                <!---->
                            </div>
                            <span data-v-2c9a2615 class="taco-rating-text" style="top: 3px;"><a data-v-2c9a2615
                                    href="/products/instantly/#reviews">
                                    43 Reviews
                                </a></span>
                        </div>
                        <div data-v-5864787e data-v-30a3404f class="deal-price w-100 top-pick-component">
                            <div data-v-5864787e>
                                <p data-v-5864787e class="d-inline-block mr-1">
                                    $59
                                </p>
                                <p data-v-5864787e class="original d-inline-block">
                                    $444
                                </p>
                            </div>
                        </div>
                        <div data-v-30a3404f class="buy"><a data-v-30a3404f href="/products/instantly/">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div data-v-30a3404f class="pick">
                        <div data-v-30a3404f class="image-container"><a data-v-30a3404f href="/products/writerzen/"
                                class="d-block"><img data-v-30a3404f
                                    src="{{ static_asset('assets/frontend/assets/images/320x213.png') }}"
                                    class="product-image v-lazy-image v-lazy-image-loaded"></a>
                        </div>
                        <h4 data-v-30a3404f>WriterZen</h4>
                        <p data-v-30a3404f class="top-pick-deal-description">
                            Boost SEO rankings with tools organized into a results-oriented workflow
                        </p>
                        <div data-v-2c9a2615 data-v-30a3404f browse="true"
                            class="sumo-taco-rating featured-deal-taco-container">
                            <div data-v-2c9a2615 class="taco-rating">
                                <span data-v-2c9a2615 class="taco-rating-pct"
                                    style="width: calc(72.45% + 26px);"></span>
                                <!---->
                            </div>
                            <span data-v-2c9a2615 class="taco-rating-text" style="top: 3px;"><a data-v-2c9a2615
                                    href="/products/writerzen/#reviews">
                                    122 Reviews
                                </a></span>
                        </div>
                        <div data-v-5864787e data-v-30a3404f class="deal-price w-100 top-pick-component">
                            <div data-v-5864787e>
                                <p data-v-5864787e class="d-inline-block mr-1">
                                    $69
                                </p>
                                <p data-v-5864787e class="original d-inline-block">
                                    $1,035
                                </p>
                            </div>
                        </div>
                        <div data-v-30a3404f class="buy"><a data-v-30a3404f href="/products/writerzen/">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
                <!---->
                <div>
                    <!---->
                    <!---->
                    <!---->
                </div>
            </div>
            <div data-fetch-key="10" class="smart-collection-section" data-v-3948d8ad>
                <!---->
                <div class="mb-5 product-carousel" data-v-256a1bdd>
                    <div class="product-carousel-title" data-v-256a1bdd>
                        <h3 data-v-256a1bdd>
                            <a href="#" data-v-256a1bdd>
                                <span data-v-256a1bdd>What's hot</span>
                                <!---->
                            </a>
                        </h3>
                        <a href="#" title="Browse this collection" class="more d-inline" data-v-256a1bdd>View all</a>
                    </div>
                    <div class="wrapper" data-v-2351f2da data-v-256a1bdd>
                        <div class="flicking-viewport" data-v-2351f2da>
                            <div class="flicking-camera owl-carousel product-slider-owl">
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/writerzen/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e><img
                                                src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="WriterZen" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                WriterZen good
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Boost SEO rankings with tools organized into a
                                                results-oriented workflow
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/writerzen/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>106 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $69
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,035
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/writerzen/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/instantly/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Instantly" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Instantly
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Automate and scale B2B cold email outreach with the power of
                                                AI
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/instantly/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>31 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $444
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/instantly/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/uuki/index.html" class="stretched-link text-decoration-none"
                                            data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="UUKI" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                UUKI
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Build Web3 communities where you can host discussions,
                                                create event pages, and sell
                                                content
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/uuki/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>202 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $948
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/uuki/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="#" class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Acumbamail" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Acumbamail
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create and manage email campaigns and landing pages in a
                                                flash
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="##reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>263 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $839
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="#" class="ribbon-container" data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/robomotion-rpa/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Robomotion RPA"
                                                class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 5 days</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Robomotion RPA
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Automate repetitive and data-intensive manual tasks with
                                                easy-to-use RPA bots
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct" style="width:calc(75% + 40px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/robomotion-rpa/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>41 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,980
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/robomotion-rpa/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/peppertypeai/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Peppertype.ai" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Peppertype.ai
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Generate better content in seconds with the power of
                                                artificial intelligence
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/peppertypeai/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>933 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $300
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/peppertypeai/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/bramework/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Bramework" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Bramework
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create SEO-friendly blog posts in a fraction of the time
                                                with an AI-powered writing
                                                assistant
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(71.25% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/bramework/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>47 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,044
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/bramework/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/harvel/index.html" class="stretched-link text-decoration-none"
                                            data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Harvel" class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 15 hours</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Harvel
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                24/7 automated copyright protection for digital creators
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(69.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/harvel/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>6 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $400
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/harvel/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/formaloo/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Formaloo" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Formaloo
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create unlimited super-forms, surveys, and quizzes in a few
                                                clicks
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct" style="width:calc(69% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/formaloo/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>96 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $684
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/formaloo/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/tidycal/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="TidyCal" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>

                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                TidyCal
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Make scheduling your next meeting easy with calendar
                                                integrations, booking pages, and
                                                customization
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(64.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/tidycal/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>159 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $29
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $120
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <!---->
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/mobiroller/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Mobiroller" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Mobiroller
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Quickly create comprehensive, coding-free mobile apps for
                                                ecommerce and beyond
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/mobiroller/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>25 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $700
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/mobiroller/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="#" class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAACCAQAAAA3fa6RAAAADklEQVR42mNkAANGCAUAACMAA2w/AMgAAAAASUVORK5CYII="
                                                alt="SuiteDash"
                                                class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 8 days</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                SuiteDash
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                An all-in-one business software that improves communication
                                                and team collaboration
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(68.25% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="##reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>220 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $129
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,188
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="#" class="ribbon-container" data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span
                            class="flicking-arrow-prev flicking-button is-outside is-circle flicking-arrow-prev-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span> <span
                            class="flicking-arrow-next flicking-button is-outside is-circle flicking-arrow-next-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span>
                        <!---->
                    </div>
                </div>

            </div>
            <div data-fetch-key="11" class="smart-collection-section" data-v-3948d8ad>
                <!---->
                <div class="mb-5 product-carousel" data-v-256a1bdd>
                    <div class="product-carousel-title" data-v-256a1bdd>
                        <h3 data-v-256a1bdd>
                            <a href="#" data-v-256a1bdd>
                                <span data-v-256a1bdd>What's hot</span>
                                <!---->
                            </a>
                        </h3>
                        <a href="#" title="Browse this collection" class="more d-inline" data-v-256a1bdd>View all</a>
                    </div>
                    <div class="wrapper" data-v-2351f2da data-v-256a1bdd>
                        <div class="flicking-viewport" data-v-2351f2da>
                            <div class="flicking-camera owl-carousel product-slider-owl">
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/writerzen/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e><img
                                                src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="WriterZen" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                WriterZen good
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Boost SEO rankings with tools organized into a
                                                results-oriented workflow
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/writerzen/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>106 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $69
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,035
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/writerzen/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/instantly/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Instantly" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Instantly
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Automate and scale B2B cold email outreach with the power of
                                                AI
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/instantly/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>31 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $444
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/instantly/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/uuki/index.html" class="stretched-link text-decoration-none"
                                            data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="UUKI" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                UUKI
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Build Web3 communities where you can host discussions,
                                                create event pages, and sell
                                                content
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/uuki/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>202 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $948
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/uuki/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="#" class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Acumbamail" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Acumbamail
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create and manage email campaigns and landing pages in a
                                                flash
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="##reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>263 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $839
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="#" class="ribbon-container" data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/robomotion-rpa/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Robomotion RPA"
                                                class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 5 days</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Robomotion RPA
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Automate repetitive and data-intensive manual tasks with
                                                easy-to-use RPA bots
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct" style="width:calc(75% + 40px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/robomotion-rpa/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>41 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,980
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/robomotion-rpa/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/peppertypeai/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Peppertype.ai" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Peppertype.ai
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Generate better content in seconds with the power of
                                                artificial intelligence
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/peppertypeai/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>933 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $300
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/peppertypeai/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/bramework/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Bramework" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Bramework
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create SEO-friendly blog posts in a fraction of the time
                                                with an AI-powered writing
                                                assistant
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(71.25% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/bramework/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>47 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,044
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/bramework/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/harvel/index.html" class="stretched-link text-decoration-none"
                                            data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Harvel" class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 15 hours</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Harvel
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                24/7 automated copyright protection for digital creators
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(69.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/harvel/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>6 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $400
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/harvel/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/formaloo/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Formaloo" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Formaloo
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create unlimited super-forms, surveys, and quizzes in a few
                                                clicks
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct" style="width:calc(69% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/formaloo/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>96 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $684
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/formaloo/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/tidycal/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="TidyCal" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>

                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                TidyCal
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Make scheduling your next meeting easy with calendar
                                                integrations, booking pages, and
                                                customization
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(64.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/tidycal/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>159 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $29
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $120
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <!---->
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/mobiroller/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Mobiroller" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Mobiroller
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Quickly create comprehensive, coding-free mobile apps for
                                                ecommerce and beyond
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/mobiroller/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>25 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $700
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/mobiroller/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="#" class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAACCAQAAAA3fa6RAAAADklEQVR42mNkAANGCAUAACMAA2w/AMgAAAAASUVORK5CYII="
                                                alt="SuiteDash"
                                                class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 8 days</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                SuiteDash
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                An all-in-one business software that improves communication
                                                and team collaboration
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(68.25% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="##reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>220 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $129
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,188
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="#" class="ribbon-container" data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span
                            class="flicking-arrow-prev flicking-button is-outside is-circle flicking-arrow-prev-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span> <span
                            class="flicking-arrow-next flicking-button is-outside is-circle flicking-arrow-next-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span>
                        <!---->
                    </div>
                </div>

            </div>
            <div data-fetch-key="12" class="smart-collection-section" data-v-3948d8ad>
                <!---->
                <div class="mb-5 product-carousel" data-v-256a1bdd>
                    <div class="product-carousel-title" data-v-256a1bdd>
                        <h3 data-v-256a1bdd>
                            <a href="#" data-v-256a1bdd>
                                <span data-v-256a1bdd>What's hot</span>
                                <!---->
                            </a>
                        </h3>
                        <a href="#" title="Browse this collection" class="more d-inline" data-v-256a1bdd>View all</a>
                    </div>
                    <div class="wrapper" data-v-2351f2da data-v-256a1bdd>
                        <div class="flicking-viewport" data-v-2351f2da>
                            <div class="flicking-camera owl-carousel product-slider-owl">
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/writerzen/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e><img
                                                src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="WriterZen" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                WriterZen good
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Boost SEO rankings with tools organized into a
                                                results-oriented workflow
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/writerzen/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>106 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $69
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,035
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/writerzen/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/instantly/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Instantly" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Instantly
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Automate and scale B2B cold email outreach with the power of
                                                AI
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(72.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/instantly/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>31 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $444
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/instantly/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/uuki/index.html" class="stretched-link text-decoration-none"
                                            data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="UUKI" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                UUKI
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Build Web3 communities where you can host discussions,
                                                create event pages, and sell
                                                content
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/uuki/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>202 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $948
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/uuki/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="#" class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Acumbamail" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Acumbamail
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create and manage email campaigns and landing pages in a
                                                flash
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="##reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>263 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $839
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="#" class="ribbon-container" data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/robomotion-rpa/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Robomotion RPA"
                                                class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 5 days</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Robomotion RPA
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Automate repetitive and data-intensive manual tasks with
                                                easy-to-use RPA bots
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct" style="width:calc(75% + 40px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/robomotion-rpa/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>41 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,980
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/robomotion-rpa/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/peppertypeai/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Peppertype.ai" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Peppertype.ai
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Generate better content in seconds with the power of
                                                artificial intelligence
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/peppertypeai/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>933 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $300
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/peppertypeai/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/bramework/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Bramework" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Bramework
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create SEO-friendly blog posts in a fraction of the time
                                                with an AI-powered writing
                                                assistant
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(71.25% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/bramework/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>47 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,044
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/bramework/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/harvel/index.html" class="stretched-link text-decoration-none"
                                            data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Harvel" class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 15 hours</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Harvel
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                24/7 automated copyright protection for digital creators
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(69.75% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/harvel/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>6 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $400
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/harvel/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/formaloo/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Formaloo" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Formaloo
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Create unlimited super-forms, surveys, and quizzes in a few
                                                clicks
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct" style="width:calc(69% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/formaloo/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>96 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $59
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $684
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/formaloo/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/tidycal/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="TidyCal" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>

                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                TidyCal
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Make scheduling your next meeting easy with calendar
                                                integrations, booking pages, and
                                                customization
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(64.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/tidycal/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>159 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $29
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $120
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <!---->
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="products/mobiroller/index.html"
                                            class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="{{ static_asset('assets/frontend/assets/images/530x353.png') }}"
                                                alt="Mobiroller" class="product-image pin-image-top v-lazy-image"
                                                data-v-027eb16e>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                Mobiroller
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                Quickly create comprehensive, coding-free mobile apps for
                                                ecommerce and beyond
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(73.5% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="products/mobiroller/index.html#reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>25 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $79
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $700
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="products/mobiroller/index.html" class="ribbon-container"
                                                    data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-cell section-tile section-tile-max-width" data-v-256a1bdd
                                    data-v-256a1bdd>
                                    <div data-v-027eb16e data-v-256a1bdd>
                                        <a href="#" class="stretched-link text-decoration-none" data-v-027eb16e>

                                        </a>
                                        <div class="image-container" data-v-027eb16e>
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAACCAQAAAA3fa6RAAAADklEQVR42mNkAANGCAUAACMAA2w/AMgAAAAASUVORK5CYII="
                                                alt="SuiteDash"
                                                class="product-image pin-image-top v-lazy-image has-banner"
                                                data-v-027eb16e>
                                            <div class="banner product-card-deal-banner is-ending" data-v-3295f29f
                                                data-v-027eb16e>
                                                <!----> <span data-testid="deal-banner-text" class="banner-text"
                                                    data-v-3295f29f>Offer
                                                    ends in 8 days</span>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="p-3 description-container" data-v-027eb16e>
                                            <p class="section-title d-block mt-3" data-v-027eb16e>
                                                SuiteDash
                                            </p>
                                            <p class="d-block deal-plan-type my-2" data-v-027eb16e>
                                                Lifetime Deal
                                            </p>
                                            <p class="d-block deal-description my-0" data-v-027eb16e>
                                                An all-in-one business software that improves communication
                                                and team collaboration
                                            </p>
                                            <div data-testid="deal-rating" class="my-2" data-v-027eb16e>
                                                <div class="appsumo-taco-rating-container">
                                                    <div data-testid="taco-rating"
                                                        class="appsumo-taco-container flex-wrap" data-v-bfc7195a>
                                                        <div class="taco-rating" data-v-bfc7195a><span
                                                                class="taco-rating-pct"
                                                                style="width:calc(68.25% + 32px);"
                                                                data-v-bfc7195a></span></div>
                                                        <a href="##reviews"
                                                            class="appsumo-link appsumo-rating-link ml-2"
                                                            data-v-bfc7195a>220 Reviews</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-0 m-0" data-v-027eb16e>
                                                <span class="d-inline-block w-100" data-v-027eb16e>
                                                    <div class="deal-price w-100 product-carousel-component"
                                                        data-v-5864787e data-v-027eb16e>
                                                        <div data-v-5864787e>
                                                            <p class="d-inline-block mr-1" data-v-5864787e>
                                                                $129
                                                            </p>
                                                            <p class="original d-inline-block" data-v-5864787e>
                                                                $1,188
                                                            </p>
                                                        </div>
                                                    </div>
                                                </span>
                                                <a href="#" class="ribbon-container" data-v-027eb16e>
                                                    <div data-v-027eb16e>
                                                        <div class="ribbon" data-v-027eb16e>
                                                            GFL Choice
                                                        </div>
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span
                            class="flicking-arrow-prev flicking-button is-outside is-circle flicking-arrow-prev-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span> <span
                            class="flicking-arrow-next flicking-button is-outside is-circle flicking-arrow-next-9 flicking-arrow-is-disabled"
                            data-v-2351f2da></span>
                        <!---->
                    </div>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection