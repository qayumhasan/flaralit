@extends('frontend.layouts.master')

@push('style')
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/base.89a21e9d3213.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/deal_details.css') }}">
    <style>
        .sumo-browse-page main,
        .sumo-search-alter-margin-lg .sumo-search-toggle-margin,
        body.sumo-search-alter-margin-lg.search-toggle-margin-lg {
            margin-top: 80px !important;
            background-color: whitesmoke;
        }
    </style>
    <style>
        .taco-rating:before {
            background-image: url({{ static_asset('assets/frontend/assets/images/heart-discolor-ratting.png') }});
        }

        .taco-rating-pct:before {
            background-image: url({{ static_asset('assets/frontend/assets/images/heart-color-ratting.png') }});
        }
    </style>

    <style>
        .sumo-browse-page main,
        .sumo-search-alter-margin-lg .sumo-search-toggle-margin,
        body.sumo-search-alter-margin-lg.search-toggle-margin-lg {
            margin-top: 80px !important;
            background-color: whitesmoke;
        }
    </style>
@endpush
@section('content')

    <div class="container text-left">
        <div class="row">
            <section class="sumo-section col-12 col-lg-9 sumo-product-container sumo-featured pb-4">
                <div class="row" id="is-condensed" data-is-condensed="False">
                    <div class="col-12 row">
                        <div class="d-block d-lg-none col-12 col-lg-0 px-2 mx-0 pb-2">

                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                @foreach($product->categories as $category)
                                    <span class="appsumo-product-tag">{{ $category->name }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="sumo-product-header mb-4 mt-10 col-lg-9">
                            <h1 class="sumo-product-name h2">{{ $product->name }}</h1>
                            <h2 class="sumo-product-slogan h3">An advanced AI copywriting tool to generate all
                                the content you need</h2>
                        </div>
                        <div class="d-none d-lg-block col-0 col-lg-3 px-0 mx-0 pt-3">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <img class="img-fluid rounded"
                             src="{{ static_asset($product->cover_image) }}"
                             width="850" height="500" alt="Deal Image">
                    </div>
                </div>
            </section>

            <!-- Product Desktop Sticky -->
            <section class="sumo-section sumo-product-sticky-desktop col-lg-3 text-center d-none d-lg-block">
                <div class="sumo-product-sticky-inner-desktop sticky-desktop">
                    <form action="{{ route('add_to_cart') }}" method="POST">
                        @csrf
                        <input class="input-deal-153215" name="slug" id="slug" required hidden
                               value="{{ $product->slug }}">
                        <input class="input-codes-153215" name="quantity" id="quantity" required hidden
                               value="1" max="3">
                        <input class="input-plan-153215" name="plan_id" required hidden value="153215">
                        <button class="btn full-width waves-effect waves-light" type="submit"
                                value="Buy Now">Buy Now
                        </button>
                    </form>
                    <a class="btn full-width waves-effect waves-light mt-2 btn-primary" type="submit"
                       href="{{ route('add_to_wishlist', $product->slug) }}"
                       value="Buy Now">Add To Wishlist
                    </a>
                    <div class="sumo-price-line d-flex align-items-center justify-content-center">
                        @if($product->is_free == true)
                            <div class="sumo-price">
                                Free
                            </div>
                        @else
                            <div data-v-5864787e>
                                <div class="sumo-price">
                                    Starting at
                                    ${{ number_format($product->discount_price == null || $product->discount_price <= 0 ? $product->price : $product->discount_price, 2)  }}
                                </div>
                                @if($product->discount_price != null && $product->discount_price > 0)
                                    <div class="sumo-price-meta">
                                        <span
                                            class="sumo-old-price"><span>${{ number_format($product->price, 2)  }}</span></span>
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>

                    <div class="deal-detail-plan-type-container">
                        <span class="deal-plan-type">
                            {{ \App\Models\Product::TERMS[$product->detail->term_type] }}
                        </span>
                    </div>

                    <div>
                        <a href="#appsumo-plans">

                            <span>View plans for more codes</span>

                        </a>
                    </div>


                    <div class="sticky-sidebar-taco-container">
                        <div class="taco-rating">
                            <span class="taco-rating-pct" style="width: calc(75.0% + 40px)"></span>
                        </div>
                        <span class="taco-rating-text">
                        <a href="/products/leadscripts/#reviews">52 Reviews</a>
                    </span>

                    </div>


                </div>
            </section>
        </div>
        <!-- Sticky Mobile -->
        <div class="row sticky-mobile sticky-price-bar top d-lg-none">
            <div class="d-flex">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="sumo-product-name">LeadScripts</div>
                </div>
                <div class="sumo-price-line d-flex align-items-center ml-auto mr-0">
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <form action="{{ route('add_to_cart') }}" method="POST">
                        @csrf
                        <input class="input-deal-153215" name="slug" id="slug" required hidden
                               value="{{ $product->slug }}">
                        <input class="input-codes-153215" name="quantity" id="quantity" required hidden
                               value="1" max="3">
                        <input class="input-plan-153215" name="plan_id" required hidden value="153215">
                        <button class="btn full-width btn-primary btn-lg mb-3" type="submit"
                                value="Buy Now">Buy Now
                        </button>
                    </form>
                    <a class="btn full-width btn-primary btn-lg mb-3" type="submit"
                       href="{{ route('add_to_wishlist', $product->slug) }}"
                       value="Buy Now">Add To Wishlist
                    </a>
                </div>
            </div>
        </div>
        <!-- End Sticky Mobile -->
        <!-- Product Tablet Sticky -->
        <section class="sumo-product-sticky sumo-bg-light d-block d-lg-none">
            <div class="tablet-sticky-container">
                <div class="tablet-sticky-container-buy-button" id="waitlist-form-anchor">
                    <form action="{{ route('add_to_cart') }}" method="POST">
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
                    <a class="btn full-width waves-effect waves-light" type="submit"
                       href="{{ route('add_to_wishlist', $product->slug) }}"
                       value="Buy Now">Add To Wishlist
                    </a>
                    <div>
                    </div>
                </div>
                <div class="tablet-sticky-content-container">

                    <div class="tablet-sticky-price-container">
                        @if($product->is_free == true)
                            <div class="sumo-price">
                                Free
                            </div>
                        @else
                            <div data-v-5864787e>
                                <div class="sumo-price-left">
                                    Starting at
                                    ${{ number_format($product->discount_price == null || $product->discount_price <= 0 ? $product->price : $product->discount_price, 2)  }}
                                </div>
                                @if($product->discount_price != null && $product->discount_price > 0)
                                    <div class="sumo-price-right">
                                        <span
                                            class="sumo-old-price"><span>${{ number_format($product->price, 2)  }}</span></span>
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>

                    <a href="#appsumo-plans">

                        <span>View plans for more codes</span>

                    </a>
                    <div class="tablet-deal-plan-container">


                        <span class="deal-plan-type">LIFETIME DEAL</span>


                    </div>

                    <div class="d-flex">
                        <div class="taco-rating">
                            <span class="taco-rating-pct" style="width: calc(75.0% + 40px)"></span>
                        </div>
                        <span class="taco-rating-text">
                        <a href="/products/leadscripts/#reviews">52 Reviews</a>
                    </span>

                    </div>


                </div>
            </div>
        </section>
        <!-- End Product Sticky -->

        <div id="snippet" class="row">
            <div class="col-12 col-lg-9 sumo-product-container pt-4">

                <p>You want to write quality content but your responsibilities of advertising, email marketing,
                    and lead funnels leave you struggling to stay afloat. (🎵<i>“Who lives in a to-do list under
                        the sea?”</i>🎵)</p>

                <p>Great content takes time and dedication, but you don’t have years to commit to the process or
                    the bandwidth to start from scratch on every project.</p>

                <p>You need a tool that can generate high-converting copy using a simple fill-in-the-blank
                    format—all through the power of advanced AI.</p>

                <p>Say hello to <a href="https://leadscripts.co/" target="_blank"><b>LeadScripts</b></a>.</p>

            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-9 sumo-product-container">


                <section class="sumo-section sumo-section-tldr sumo-border-b">
                    <h3 class="h2">TL;DR</h3>
                    <div class="row py-3">

                        <div class="col-sm-6">
                            <p class="d-flex align-items-center"><span class="ml-4 mb-3">Create emails, ads, SEO
                                metadata scripts, and long-form sales page copy in minutes</span></p>
                        </div>

                        <div class="col-sm-6">
                            <p class="d-flex align-items-center"><span class="ml-4 mb-3">Alternative to: Funnel
                                Scripts by ClickFunnels</span></p>
                        </div>

                        <div class="col-sm-6">
                            <p class="d-flex align-items-center"><span class="ml-4 mb-3">Use proven,
                                high-converting copy frameworks that can be customized based on your product
                                or service</span></p>
                        </div>

                        <div class="col-sm-6">
                            <p class="d-flex align-items-center"><span class="ml-4 mb-3">Best for: Solopreneurs,
                                content creators, and digital marketers looking to leverage copy for
                                capturing and converting leads</span></p>
                        </div>

                    </div>
                </section>


                <!-- Story Section -->
                <section class="sumo-section" id="story">
                    <h4 class=""><b>LeadScripts is an AI-powered, fill-in-the-blank copywriting engine that lets
                            you complete your sales pages, emails, ads, and funnels faster.</b></h4>

                    <p>
                    <div class="story-inline-video">
                        <iframe id="leadscripts-vid" width="560" height="315"
                                src="https://www.youtube.com/embed/unyqfb0VoCM?rel=0"
                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/unyqfb0VoCM?rel=0&autoplay=1 onclick=&quot;window.parent.postMessage('embed_slug:leadscripts-vid','*')&quot;><img src=https://img.youtube.com/vi/unyqfb0VoCM/hqdefault.jpg ><span>▶</span></a>"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen loadonscroll></iframe>
                    </div>
                    </p>

                    <p>Through advanced AI, LeadScripts<b> </b>helps you create content for your marketing
                        needs, including funnels, emails, and sales pages.</p>

                    <p>Just<b> fill in a few details about your product or service to get unique scripts</b>
                        tailored to your business.</p>

                    <p>Next, you can save scripts to your LeadScripts swipe file, copy and paste them to your
                        funnel software, or <b>download the scripts you need and make tweaks later</b>.</p>

                    <p>You can also choose the type of funnel page you need and <b>find customizable scripts for
                            every on-page element</b>.</p>

                    <p><img class="story-inline-image z-depth-2"
                            src="https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-1.jpg"
                            alt="AI-generated scripts"
                            srcset="https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-1.jpg?width=450 450w, https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-1.jpg?width=595 595w, https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-1.jpg?width=850 850w"
                            width="850" height="500" loading="lazy"/></p>

                    <h5 class="" style="text-align: center; "><i>Answer questions about your business and get
                            AI-generated scripts that convert.</i></h5>
                    <p>Once you enter a few keywords, the AI generator can <b>brainstorm ideas for ads, blog
                            post outlines, and blog post titles</b>.</p>

                    <p>Headlines are key to clicks and conversions, and you won’t be disappointed with
                        LeadScripts’ ability to <b>come up with attention-grabbing headlines, too</b>.</p>

                    <p>As you type, you can seamlessly toggle script formulas to identify the variables you
                        need<b> </b>and align them with your product or service.</p>

                    <p>LeadScripts also <b>supports 120+ languages</b>. Just select a language and get all the
                        scripts translated with the click of a button! </p>

                    <p><img class="story-inline-image z-depth-2"
                            src="https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-2.jpg"
                            alt="Funnel scripts"
                            srcset="https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-2.jpg?width=450 450w, https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-2.jpg?width=595 595w, https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-2.jpg?width=850 850w"
                            width="850" height="500" loading="lazy"/></p>

                    <h5 class="" style="text-align: center; "><i>Choose a funnel type and specify your product
                            to create funnels based on your needs! </i></h5>
                    <p>The premade scripts are <b>inspired by expert copywriters and winning sales formulas</b>
                        to ensure high-quality content.</p>

                    <p>And LeadScripts gives you all the funnel scripts, sales page copy, email scripts, and ad
                        scripts you’ll ever need.</p>

                    <p>You can quickly <b>create lead magnets, onboarding emails, and feedback
                            requests</b>—without hiring more freelancers.</p>

                    <p>The platform even <b>adds new scripts on a regular basis</b>, so your marketing and sales
                        assets are always up to date.</p>


                    <p><img class="story-inline-image z-depth-2"
                            src="https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-3.jpg"
                            alt="Email scripts"
                            srcset="https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-3.jpg?width=450 450w, https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-3.jpg?width=595 595w, https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-3.jpg?width=850 850w"
                            width="850" height="500" loading="lazy"/></p>

                    <h5 class="" style="text-align: center; "><i>Get access to email scripts for abandoned
                            shopping carts, cold outreach, feedback requests, and sales offers.</i></h5>
                    <p>Just like making your own pasta from scratch, writing emails from a blank page takes a
                        lot of time and gets messy fast.</p>

                    <p>With LeadScripts, you’ll save hours by <b>answering questions to get AI-generated email
                            strings</b>.</p>

                    <p>You’ll be able to<b> customize these templates for things like abandoned carts,
                            partnerships, and last-chance offers</b>, letting you automatically follow up for
                        better conversions.</p>

                    <p><img class="story-inline-image z-depth-2"
                            src="https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-4.jpg"
                            alt="Script wizard"
                            srcset="https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-4.jpg?width=450 450w, https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-4.jpg?width=595 595w, https://appsumo2-cdn.appsumo.com/media/stories/images/leadscripts22-4.jpg?width=850 850w"
                            width="850" height="500" loading="lazy"/></p>

                    <h5 class="" style="text-align: center; "><i>Answer questions to create scripts for your
                            abandoned cart email series and other marketing content.</i></h5>
                    <p>You don’t need to study every viral post to come up with witty copy that can convert.
                        (<i>“Okay, how can I make an ad campaign out of ‘Uncah Jahms’?”</i>)</p>

                    <p>With LeadScripts, you can answer a few questions and access hundreds of customizable and
                        proven scripts tailored to your business.</p>

                    <p>Make excellent content every time.</p>

                    <p><b>Get lifetime access to LeadScripts today!</b></p>
                </section>
                <hr/>

                <!-- Features Section -->


                <section id="appsumo-plans">
                    <section id="commonFeatures">
                        <ul id="plans">
                            <li class="plan">
                                <ul class="planContainer">
                                    <li class="price">
                                        <h3 class="h2">Plans and Features</h3>
                                    </li>
                                    <!-- Deal terms section -->
                                    <li>
                                    <span style="cursor:pointer;" class="panel-heading" data-toggle="collapse"
                                          data-target="#termsCollapse-&lt;appsumo.deals.views.DealDetailView object at 0x7f7222f57208&gt;"
                                          aria-expanded="true">
                                        <b>Deal Terms</b>
                                        <span class="panel-heading " data-toggle="collapse"
                                              data-target="#termsCollapse-&lt;appsumo.deals.views.DealDetailView object at 0x7f7222f57208&gt;"
                                              aria-expanded="true">
                                            <i class="fa fa-fw fa-chevron-up"></i>
                                            <i class="fa fa-fw fa-chevron-down"></i>
                                        </span>
                                    </span>
                                    </li>
                                    <li class="collapse show"
                                        id="termsCollapse-&lt;appsumo.deals.views.DealDetailView object at 0x7f7222f57208&gt;">
                                        <ul class="options pt-2">
                                            @if($product->detail->key_features != null)
                                                @php $key_features = json_decode($product->detail->key_features); @endphp
                                                @foreach($key_features as $key_feature)
                                                    <li id="feature_top">
                                                        <img class="featureCheck"
                                                             src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                             width="15" height="11.5" id="variable-plan-image-1-3574">
                                                        <div>
                                                            <span>
                                                                <p>{{ $key_feature }}</p>
                                                            </span>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>
                                    <li>
                                    <span style="cursor:pointer;" class="panel-heading" data-toggle="collapse"
                                          data-target="#commonFeaturesCollapse-&lt;appsumo.deals.views.DealDetailView object at 0x7f7222f57208&gt;"
                                          aria-expanded="true">
                                        <b>Features Included in All Plans</b>
                                        <span class="panel-heading " data-toggle="collapse"
                                              data-target="#commonFeaturesCollapse-&lt;appsumo.deals.views.DealDetailView object at 0x7f7222f57208&gt;"
                                              aria-expanded="true">
                                            <i class="fa fa-fw fa-chevron-up"></i>
                                            <i class="fa fa-fw fa-chevron-down"></i>
                                        </span>
                                    </span>
                                    </li>
                                    <li class="collapse show"
                                        id="commonFeaturesCollapse-&lt;appsumo.deals.views.DealDetailView object at 0x7f7222f57208&gt;">
                                        <ul class="options pt-2">

                                            <li id="feature_top">
                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>
                                                <div>
                                                <span>
                                                    <p>800+ scripts</p>
                                                </span>
                                                </div>
                                            </li>

                                            <li id="feature_top">
                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>
                                                <div>
                                                <span>
                                                    <p>20+ funnels</p>
                                                </span>
                                                </div>
                                            </li>

                                            <li id="feature_top">
                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>
                                                <div>
                                                <span>
                                                    <p>Script wizard</p>
                                                </span>
                                                </div>
                                            </li>

                                            <li id="feature_top">
                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>
                                                <div>
                                                <span>
                                                    <p>Email scripts</p>
                                                </span>
                                                </div>
                                            </li>

                                            <li id="feature_top">
                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>
                                                <div>
                                                <span>
                                                    <p>Funnel scripts and element generators</p>
                                                </span>
                                                </div>
                                            </li>

                                            <li id="feature_top">
                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>
                                                <div>
                                                <span>
                                                    <p>Script formulas</p>
                                                </span>
                                                </div>
                                            </li>

                                            <li id="feature_top">
                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>
                                                <div>
                                                <span>
                                                    <p>Ad scripts</p>
                                                </span>
                                                </div>
                                            </li>

                                            <li id="feature_top">
                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>
                                                <div>
                                                <span>
                                                    <p>SEO meta data scripts</p>
                                                </span>
                                                </div>
                                            </li>

                                            <li id="feature_top">
                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>
                                                <div>
                                                <span>
                                                    <p>Headlines, bulleted lists, subheadings, paragraphs,
                                                        and more</p>
                                                </span>
                                                </div>
                                            </li>

                                            <li id="feature_top">
                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>
                                                <div>
                                                <span>
                                                    <p>No software to install</p>
                                                </span>
                                                </div>
                                            </li>

                                        </ul>
                                    </li>


                                </ul>
                            </li>
                        </ul>
                    </section>

                    <section name="plans_unique_features" id="pricePlans">
                        <ul id="plans">

                            <li class="plan">
                                <ul class="planContainer">

                                    <li class="price" align="center">
                                        <p id="variable-public-name-153215-all">Single
                                        </p>
                                        <div class="deal-plan-hr">
                                            <hr>
                                        </div>
                                        <div style="text-align:center" class="variable-plan-desc-153215-all">One
                                            Time Purchase of
                                        </div>
                                        <div
                                            class="sumo-price-line d-flex align-items-center justify-content-center pb-2">
                                            <div class="sumo-price">
                                                <span class="variable-plan-price-153215-all">$99.00</span>
                                            </div>


                                            <div class="sumo-price-meta">
                                            <span class="sumo-old-price-plan">
                                                <span class="variable-plan-old-price-153215-all">$1497.00</span>
                                            </span>
                                            </div>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="deal-plan-hr">
                                            <hr>
                                        </div>
                                    </li>
                                    <li>
                                        <ul class="options" id="variable-features-153215-all">

                                            <li id="feature_top">
                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>
                                                <div>
                                                <span>
                                                    <p>All features above included</p>
                                                </span>
                                                </div>
                                            </li>


                                            <li id="feature_top">


                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5" id="variable-plan-image-1-519140"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>

                                                <div>
                                                <span>
                                                    <p><b class="variable-plan-quantity-0-519140">3</b> team
                                                        members</p>
                                                </span>
                                                </div>

                                            </li>

                                            <li id="feature_top">


                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5" id="variable-plan-image-1-519141"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>

                                                <div>
                                                <span>
                                                    <p><b class="variable-plan-quantity-0-519141">10,000</b>-AI-word
                                                        monthly quota</p>
                                                </span>
                                                </div>

                                            </li>

                                            <li id="feature_top">


                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5" id="variable-plan-image-1-519142"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>

                                                <div>
                                                <span>
                                                    <p><b>Unlimited</b> products</p>
                                                </span>
                                                </div>

                                            </li>

                                        </ul>
                                    </li>

                                    <div style="margin: 1em 10px 2em 10px; padding: 4px;">
                                    <span
                                        style="font-size: .9em; visibility: collapse; font-family: 'Metropolis';">Select
                                        More Codes</span>
                                    </div>
                                    <form action="{{ route('add_to_cart') }}" method="POST">
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
                                    <a class="btn full-width waves-effect waves-light" type="submit"
                                       href="{{ route('add_to_wishlist', $product->slug) }}"
                                       value="Buy Now">Add To Wishlist
                                    </a>
                                </ul>
                            </li>

                            <li class="plan">
                                <ul class="planContainer">

                                    <li class="price" align="center">
                                        <p id="variable-public-name-153216-all">Double
                                        </p>
                                        <div class="deal-plan-hr">
                                            <hr>
                                        </div>
                                        <div style="text-align:center" class="variable-plan-desc-153216-all">One
                                            Time Purchase of
                                        </div>
                                        <div
                                            class="sumo-price-line d-flex align-items-center justify-content-center pb-2">
                                            <div class="sumo-price">
                                                <span class="variable-plan-price-153216-all">$198.00</span>
                                            </div>


                                            <div class="sumo-price-meta">
                                            <span class="sumo-old-price-plan">
                                                <span class="variable-plan-old-price-153216-all">$2994.00</span>
                                            </span>
                                            </div>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="deal-plan-hr">
                                            <hr>
                                        </div>
                                    </li>
                                    <li>
                                        <ul class="options" id="variable-features-153216-all">

                                            <li id="feature_top">
                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>
                                                <div>
                                                <span>
                                                    <p>All features above included</p>
                                                </span>
                                                </div>
                                            </li>


                                            <li id="feature_top">


                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5" id="variable-plan-image-2-519140"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>

                                                <div>
                                                <span>
                                                    <p><b class="variable-plan-quantity-1-519140">20</b>
                                                        team members</p>
                                                </span>
                                                </div>

                                            </li>

                                            <li id="feature_top">


                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5" id="variable-plan-image-2-519141"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>

                                                <div>
                                                <span>
                                                    <p><b class="variable-plan-quantity-1-519141">Unlimited</b>-AI-word
                                                        monthly quota</p>
                                                </span>
                                                </div>

                                            </li>

                                            <li id="feature_top">


                                                <img class="featureCheck"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5" id="variable-plan-image-2-519142"
                                                     src="https://appsumo2-cdn.appsumo.com/static/images/discussions/as-check.svg"
                                                     width="15" height="11.5"/>

                                                <div>
                                                <span>
                                                    <p><b>Unlimited</b> products</p>
                                                </span>
                                                </div>

                                            </li>

                                        </ul>
                                    </li>

                                    <div style="margin: 1em 10px 2em 10px; padding: 4px;">
                                    <span
                                        style="font-size: .9em; visibility: collapse; font-family: 'Metropolis';">Select
                                        More Codes</span>
                                    </div>
                                    <form action="{{ route('add_to_cart') }}" method="POST">
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
                                    <a class="btn full-width waves-effect waves-light" type="submit"
                                       href="{{ route('add_to_wishlist', $product->slug) }}"
                                       value="Buy Now">Add To Wishlist
                                    </a>

                                </ul>
                            </li>

                        </ul> <!-- End ul#plans -->
                    </section>

                </section>
                <div id="containerdivNewLine"></div>


                <!-- Comments Section -->

                <section id="review-section" class="sumo-section">
                    <div class="tab-content" id="myTabContent">
                        <div class="row d-flex align-items-center text-center pb-4">
                            <div class="col-sm-6 text-sm-left">
                                <h3 class="mb-4 h2">Reviews &amp; Questions</h3>
                            </div>
                            <div class="col-sm-6 pb-4 text-sm-right">

                                <div class="mb-2">
                                    Please <a class="as-default-link" href="/accounts/login/"><b>sign in</b></a>
                                    to ask a question or leave a review.
                                </div>

                            </div>
                        </div>
                        <!-- Sumo pinned -->
                        <div id="pinned">
                            <a name="pinned"></a>
                            <!-- ID: All-Pinned -->
                            <div id="all-pinned"></div>
                            <div class="row" id="pinned-loading-icon">
                                <div class="col-md-5"></div>
                                <div class="col-md-2">
                                    <i class="fas fa-spinner fa-pulse fa-3x"></i>
                                </div>
                                <div class="col-md-5"></div>
                            </div>
                        </div>
                        <!-- Sumo Search -->

                        <div id="search-comments">
                            <h4>Search Reviews &amp; Questions</h4>
                            <input type="text" style="flex-grow: 1; margin-right: 10px;" class="search-comments"
                                   placeholder="Keyword"/>
                            <button class="search-reviews btn btn-search mb-2 btn-sm d-inline-block">Search</button>
                        </div>

                        <div id="comments" class="tab-content">
                            <!-- Sumo Tabs Controls -->
                            <ul class="nav sumo-comment-tabs sumo-border-b mt-2" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="reviews-tab" data-toggle="tab" href="#reviews"
                                       role="tab"
                                       aria-controls="reviews" aria-selected="true">Reviews
                                        <span class="sumo-comment-count">52</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="questions-tab" data-toggle="tab" href="#questions"
                                       role="tab"
                                       aria-controls="questions" aria-selected="false">Questions
                                        <span class="sumo-comment-count">15</span></a>
                                </li>
                            </ul>
                            <!-- Close Sumo Tab Controls -->
                            <!-- Reviews -->
                            <!-- ID: Reviews -->
                            <div id="reviews" class="mt-4 pt-3 tab-pane fade show active">
                                <a name="reviews"></a>
                                <!-- ID: All-Reviews -->
                                <div id="all-reviews"></div>
                                <div id="load-reviews">
                                    <div class="row" id="review-loading-icon">
                                        <div class="col-md-5"></div>
                                        <div class="col-md-2">
                                            <i class="fas fa-spinner fa-pulse fa-3x"></i>
                                        </div>
                                        <div class="col-md-5"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Questions -->
                            <!-- ID: Questions -->
                            <div id="questions" class="mt-4 pt-3 tab-pane fade">
                                <a name="questions"></a>
                                <!-- ID: All-Questions -->
                                <div id="all-questions"></div>
                                <div id="load-questions">
                                    <div class="row" id="question-loading-icon">
                                        <div class="col-md-5"></div>
                                        <div class="col-md-2">
                                            <i class="fas fa-spinner fa-pulse fa-3x"></i>
                                        </div>
                                        <div class="col-md-5"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- End Comments Section -->
                <div id="stopper"></div>
                <div class='scrolltop'>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 offset-lg-9">
                                <div class='scroll icon'>
                                    <p class="mb-2">Scroll to Top</p>
                                    <i class="scrolltop-icon fa fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="sumo-section sumo-bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center mb-2">
                    <h4 class="sumo-text-brand mb-3 h2">Sign Up</h4>
                    <p class="mb-3">All our deals are time-sensitive! Make sure you don't miss any of our
                        awesome limited-time offers.
                    <p>
                    <form class="md-form form-inline justify-content-left" id="signup_email_form" method="post"
                          action="/accounts/signup/email/">
                        <input type="hidden" name="csrfmiddlewaretoken"
                               value="8Ojb0AmHwh9oQa51PEjXO0O4ry8FzwhuE74SsehkbWYhWmwSrC4mRRTbR4A6NT7j">
                        <input type="email" id="email" name="email" placeholder="Enter Your Email Here..."
                               class="form-control">
                        <button class="btn btn-primary mt-3 mt-lg-0 btn-single-submit ">Never Miss a
                            Deal
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </section>

@endsection
@push('script')
    <script src="https://appsumo2-cdn.appsumo.com/static/js/jquery-3.2.1.min.js"></script>
    <script src="https://appsumo2-cdn.appsumo.com/static/js/popper.min.js"></script>
    <script src="https://appsumo2-cdn.appsumo.com/static/js/bootstrap.min.js"></script>
    <script src="https://appsumo2-cdn.appsumo.com/static/js/mdb-partial/mdb-partial.min.js"></script>
    <script src="https://appsumo2-cdn.appsumo.com/static/js/jquery.countdown.min.js"></script>
    <script src="https://appsumo2-cdn.appsumo.com/static/js/jquery.rateit.min.js" defer></script>
    <script src="https://appsumo2-cdn.appsumo.com/static/js/flickity.pkgd.min.js" defer></script>
    <script src="https://appsumo2-cdn.appsumo.com/static/js/privy-helper.js" defer></script>
    <script src="https://appsumo2-cdn.appsumo.com/static/js/project.js?version=94984bd45"></script>
    <script src="https://appsumo2-cdn.appsumo.com/static/js/friendbuy-referrals.js?version=94984bd45"></script>


    <!-- Mobile Navbar -->
    <script type="text/javascript">
        // Load search option img source as a var
        var chartLineSrc = "https://appsumo2-cdn.appsumo.com/static/images/svg/chart-line.svg";
    </script>
    <script src="https://appsumo2-cdn.appsumo.com/static/js/offcanvas.js" defer></script>
    <script src="https://appsumo2-cdn.appsumo.com/static/js/navbar-scroll.js"></script>
    <script src="https://appsumo2-cdn.appsumo.com/static/js/toggle-search.js"></script>
    <script src="https://appsumo2-cdn.appsumo.com/static/js/banner.js"></script>
    <script src="https://appsumo2-cdn.appsumo.com/static/js/product.js?version=94984bd45"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
    <script>
        window.isPDPPage = true;

        $(document).on('click', '#waitlist-sign-nav-button', function (e) {
            $('html, body').animate({
                // NOTE: the 90px offset here is give allowance for the nav-bar, whose height is 90px.
                scrollTop: $("#waitlist-form-anchor").offset().top - 90
            }, 1000);
        });
        $(document).on('click', '.upvote-button', function (e) {
            e.preventDefault();
            var form = $(this).parents('form');
            var cid = form.attr('action').split("/")[3];
            $('#upvote_btn_' + cid).html('<i class="fas fa-chevron-up mr-1"></i> Helpful' +
                '<span class="ml-1"><i class="fas fa-spinner fa-pulse"></i></span>');
            $.ajax({
                type: "POST",
                url: form.attr('action'),
                data: form,
                success: function (data) {
                    var datajs = JSON.parse(data);
                    var likedit = datajs.likedit;
                    if (likedit == true) {
                        var likedit_str = "Helped";
                    } else {
                        var likedit_str = "Helpful";
                    }
                    if (datajs.success) {
                        $('#upvote_btn_' + datajs.comment_id).html('<i class="fas fa-chevron-up mr-1"></i>' + likedit_str +
                            '<span class="ml-1">' + datajs.upvote_count + '</span>');
                    }
                }
            });
        });
        $('#btn-reply-cancel').on('click', function (e) {
            $('#reply-modal').modal('hide');
        });
        $(document).on('click', '.btn-question', function (e) {
            $('#question-form').collapse('show');
            $(document).scrollTop($('#question-form').offset().top - 110);
        });
        $(document).on('click', '.btn-expandall-review', function (e) {
            if ($('.review').siblings('.sumo-comment-children:hidden').length) {
                $('.review').siblings('.sumo-comment-children:hidden').collapse('show');
                $('.btn-expandall-review').html('Hide All');
            } else {
                $('.review').siblings('.sumo-comment-children').collapse('hide');
                $('.btn-expandall-review').html('Show All');
            }
        });
        $(document).on('click', '.btn-expandall-question', function (e) {
            if ($('.question').siblings('.sumo-comment-children:hidden').length) {
                $('.question').siblings('.sumo-comment-children:hidden').collapse('show');
                $('.btn-expandall-question').html('Hide All');
            } else {
                $('.question').siblings('.sumo-comment-children').collapse('hide');
                $('.btn-expandall-question').html('Show All');
            }
        });
        $(document).on('click', '.sumo-plus .sumo-comment-main .sumo-comment-body .sumo-comment-badge', function (e) {
            window.open('/plus/');
        });
        $(document).on('click', '.sumo-briefcase .sumo-comment-main .sumo-comment-body .sumo-comment-badge', function (e) {
            window.open('https://briefcasehq.com');
        });
        $(document).on('click', '.reply', function (e) {
            e.preventDefault();
            var comment_id = $(this).data('id');
            var object_pk = $(this).data('object-pk');
            if ($(this).parents(".item-comment-level-0").attr('id')) {
                var thread = $(this).parents(".item-comment-level-0").attr('id');
            } else {
                var thread = $(this).parents(".sumo-comment-children").siblings(".item-comment-level-0").attr('id');
            }
            var content_model = "deals." + $(this).data('content-type-model');
            var gen_hash = $(this).data('hash');
            var timestamp = $(this).data('timestamp');
            var form = $("#reply-modal-form");
            form.find('input[name="content_type"]').attr('value', content_model);
            form.find('input[name="object_pk"]').attr('value', object_pk);
            form.find('input[name="thread"]').attr('value', thread);
            form.find('input[name="reply_to"]').attr('value', comment_id);
            form.find('input[name="security_hash"]').attr('value', gen_hash);
            form.find('input[name="timestamp"]').attr('value', timestamp);

            if ($(this).parents(".item-comment-level-1").attr('id')) {
                $('.reply-notify').hide()
            } else {
                $('.reply-notify').show()
            }
            $('#reply-modal').modal('toggle');
        });
        $(document).on('click', '.discussion-submit', function (e) {
            e.preventDefault();
            if ($(this).attr('id').includes('reply')) {
                var form = $("#reply-modal-form");
                var is_reply = true;
            } else {
                var form = $("#" + $(this).parents('.discussion-form').attr('id'));
            }
            var object_pk = form.find("input[name='object_pk']").val();
            var content_type = form.find("input[name='content_type']").val();
            var thread = form.find("input[name='thread']").val();
            var reply_to = form.find("input[name='reply_to']").val();
            var timestamp = form.find("input[name='timestamp']").val();
            var security_hash = form.find("input[name='security_hash']").val();
            var title = form.find("input[name='title']").val();
            var rating = form.find("select[name='rating']").val();
            var comment = form.find("textarea").val();
            var followup = form.find("input[name='followup']").is(':checked');
            var questions_or_reviews;
            if (content_type == 'deals.dealcomment') {
                questions_or_reviews = 'question';
            } else {
                questions_or_reviews = 'review';
            }
            var load_target;
            var load_url;
            var msg_str;
            if (is_reply) {
                load_target = $('#' + thread).parents('.sumo-comment-container');
                load_url = '/products/leadscripts/' + questions_or_reviews + 's/?thread_id=' + thread;
                msg_str = "Reply";
            } else {
                load_target = $('#all-' + questions_or_reviews + 's');
                load_url = '/products/leadscripts/' + questions_or_reviews + 's/?sort_type=latest&sort_dir=down';
                msg_str = questions_or_reviews.charAt(0).toUpperCase() + questions_or_reviews.slice(1);
            }
            var json = {
                "object_pk": object_pk,
                "reply_to": reply_to,
                "content_type": content_type,
                "timestamp": timestamp,
                "security_hash": security_hash,
                "title": title,
                "rating": rating,
                "comment": comment,
                "followup": followup,
                "honeypot": "",
                "email": "",
                "name": "",
            };
            //console.log("Json: %O", json);
            $.ajax({
                type: "POST",
                url: "/comments/api/discussion/",
                data: json,
                success: function (data) {
                    if (is_reply) {
                        $('#reply-modal').modal('toggle');
                        $(".discussion-replytext").children("#id_comment").val("")
                    } else {
                        $('#' + questions_or_reviews + '-modal').modal('toggle');
                        $(".discussion-" + questions_or_reviews + "text").children("#id_comment").val("");
                        $("#" + questions_or_reviews + 's-tab').click();
                        if (content_type == 'deals.dealreview') {
                            $("#review-form-form").html('<div class="text-center">Thanks for contributing your review for this deal!</div>');
                        }
                    }
                    toastr.success(msg_str + " posted.");
                    load_target.load(load_url, function (result) {

                        var repliesExpanded = $('#collapseChildComments' + thread).hasClass('show');
                        // Scroll to the new comment only if the ele exists
                        var scrollToComment = function () {
                            if ($('#' + data.new_comment_id)) {
                                $(document).scrollTop($('#' + data.new_comment_id).offset().top - 110);
                            }
                        }
                        if (!repliesExpanded) {
                            $('#collapseChildComments' + thread).collapse('show');
                            $('#collapseChildComments' + thread).on('shown.bs.collapse', function (e) {
                                scrollToComment();
                            })
                        } else {
                            scrollToComment();
                        }
                        getCounters();
                    });

                },
                error: function (data) {
                    if (data.responseJSON.comment) {
                        toastr.warning(msg_str + " can't be blank. Please enter some text and try again.");
                    } else if (data.responseJSON.invalid) {
                        toastr.warning("Invalid " + msg_str + ": " + data.responseJSON.invalid);
                    } else {
                        toastr.warning("Something went wrong with " + msg_str + ".");
                    }
                }
            });
        });
        var question_load_count = 0;
        var question_load_max = 2;

        $(document).on('click', '.load-questions', function (event) {
            event.preventDefault();
            $(this).fadeOut();
            var last_thread = $(".item-comment-level-0.question").last().attr('id');
            question_load_count += 1;
            if (question_load_count == question_load_max) {
                last_thread += "&all=1";
            }

            $('#load-questions').css('visibility', 'visible');
            var sort_type = sort_types['question'];
            var url = '/products/leadscripts/questions/?sort_type=' + sort_type.replace(/ .*/, '') + '&sort_dir=' + sort_dirs['question'] + '&after_thread_id=' + last_thread;

            $.get(url,
                function (result) {
                    $("#load-questions").append(result);

                    $('[data-toggle="tooltip"]').tooltip();
                    if (question_load_count == question_load_max - 1) {
                        $(".load-questions").html("Load All Questions");
                    }

                    $('#question-loading-icon').remove();
                });
        });
        var review_load_count = 0;
        var review_load_max = 2;
        $(document).on('click', '.load-reviews', function (event) {
            event.preventDefault();
            $(this).fadeOut();
            var last_thread = $(".item-comment-level-0.review").last().attr('id');
            review_load_count += 1;
            if (review_load_count == review_load_max) {
                last_thread += "&all=1";
            }
            $("#load-reviews").append('<div class="row" id="loading-icon"><div class="col-md-5"></div><div class="col-md-2"><i class="fas fa-spinner fa-pulse fa-3x"></i></div><div class="col-md-5"</div></div>')
            $.get('/products/leadscripts/reviews/?sort_type=' + sort_types['review'] + '&sort_dir=' + sort_dirs['review'] + '&after_thread_id=' + last_thread,
                function (result) {
                    $("#load-reviews").append(result);
                    $('[data-toggle="tooltip"]').tooltip();
                    if (review_load_count == review_load_max - 1) {
                        $(".load-reviews").html("Load All Reviews");
                    }
                    $('#loading-icon').remove();
                    $('#review-loading-icon').remove();
                });
        });

        function clearFilter() {
            // restore previous comment state
            $('#comments').html(commentState);
            commentState = undefined;
            $('.search-reviews').prev('input').val('');
        }

        function searchComments(query) {
            if (query) {
                // save comment state to easily restore
                if (typeof commentState === 'undefined') commentState = $('#comments').html();
                var reviews_deal_id = "3377" == "None" ? "141707" : "3377";
                $.get('/products/leadscripts/search/?sort_type=' + sort_types['review'] + '&sort_dir=' + sort_dirs['review'] + '&query=' + query + "&deal_id=141707&reviews_deal_id=" + reviews_deal_id,
                    function (result) {
                        $('#comments').html(result);
                    });
            } else if (typeof commentState !== 'undefined') {
                clearFilter();
            }
        }

        $(document).on('click', '.search-reviews', function (event) {
            var query = $(this).prev('input').val();
            event.preventDefault();
            searchComments(query);
        });
        $(document).on('keydown', '.search-comments', function (event) {
            if (event.which == 13 || event.keyCode == 13) {
                var query = $(this).val();
                searchComments(query);
            }
        });
        $(document).on('click', '.clear-filter', function (event) {
            event.preventDefault();
            clearFilter();
        })

        function removeHash() {
            var scrollV, scrollH, loc = window.location;
            if ("pushState" in history)
                history.pushState("", document.title, loc.pathname + loc.search);
            else {

                scrollV = document.body.scrollTop;
                scrollH = document.body.scrollLeft;
                loc.hash = "";

                document.body.scrollTop = scrollV;
                document.body.scrollLeft = scrollH;
            }
        }

        $(document).ready(function () {
            var question_load_url = '/products/leadscripts/questions/?sort_type=newest&sort_dir=down';
            var review_load_url = '/products/leadscripts/reviews/';
            var pinned_load_url = '/products/leadscripts/pinned/';
            var unresolved_counter_load_url = '/discussions/api/unresolved/141707/';
            var unapproved_counter_load_url = '/discussions/api/unapproved/141707/';
            var unapproved_review_count;
            var unapproved_question_count;
            var unresolved_review_count;
            var unresolved_question_count;
            var hash = window.location.hash.slice(1);
            var jump_to_comment;

            setTimeout(function () {
                var isCondensed = $("#is-condensed").data("is-condensed");
                if (isCondensed === 'True' && typeof window.vueDealAPI !== 'undefined') {
                    var story_images = $("#condensed-deal-detail").data("story-images").toString();
                    var coverImage = $("#condensed-deal-detail").data("cover-image").toString();
                    var coverImageCaption = $("#condensed-deal-detail").data("cover-image-caption").toString();

                    window.vueDealAPI.renderDealCarousel({
                        storyImages: story_images,
                        coverImage: coverImage,
                        coverImageCaption: coverImageCaption
                    });
                }
            }, .0001);

            if ((hash.charAt(0).toLowerCase() == "q" || hash.charAt(0).toLowerCase() == "r") && !isNaN(hash.charAt(1))) {
                jump_to_comment = hash.slice(1);
                if (hash.charAt(0) == "q") {
                    question_load_url += '&single_thread_id=' + jump_to_comment;
                    $('#questions-tab').click();
                } else if (hash.charAt(0) == "r") {
                    review_load_url += '?single_thread_id=' + jump_to_comment;
                }
                $(document).scrollTop($('#all-reviews').offset().top - 110);
            }

            function jumpToComment(jump_to_comment) {

                if ($('#' + jump_to_comment).parents('[id^=collapseChild]').attr('id')) {
                    var thread = $('#' + jump_to_comment).parents('[id^=collapseChild]').attr('id').split('Comments')[1];
                } else {
                    var thread = jump_to_comment;
                }

                var commentElement = $('#' + jump_to_comment);

                // Check if comment exists
                if (commentElement.length === 0) {
                    return;
                }

                if ($("#collapseChildComments" + thread).length > 0) {
                    var repliesExpanded = $('#collapseChildComments' + thread).hasClass('show');
                    if (!repliesExpanded) {
                        $('#collapseChildComments' + thread).collapse('show');
                        $('#collapseChildComments' + thread).on('shown.bs.collapse', function (e) {
                            $(document).scrollTop(commentElement.offset().top - 110);
                        })
                    } else {
                        $(document).scrollTop(commentElement.offset().top - 110);
                    }
                } else {
                    $(document).scrollTop(commentElement.offset().top - 110);
                }
            }

            var loaded_on_plans = false;
            $('#appsumo-plans').one('inview', function (event, isInView) {
                if (isInView && !(loaded_on_reviews)) {
                    loaded_on_plans = true;
                    $.get(review_load_url, function (result) {
                        $('#all-reviews').append(result);
                        $('[data-toggle="tooltip"]').tooltip();
                        $('#review-loading-icon').remove();
                        if (jump_to_comment) {
                            jumpToComment(jump_to_comment);
                        }
                        getCounters();
                    });
                }
            });

            var loaded_on_reviews = false;
            $('#all-reviews').one('inview', function (event, isInView) {
                if (isInView && !(loaded_on_plans)) {
                    loaded_on_reviews = true;
                    $.get(review_load_url, function (result) {
                        $('#all-reviews').append(result);
                        $('[data-toggle="tooltip"]').tooltip();
                        $('#review-loading-icon').remove();
                        if (jump_to_comment) {
                            jumpToComment(jump_to_comment);
                        }
                        getCounters();
                    });
                }
            });

            $('#all-questions').one('inview', function (event, isInView) {
                if (isInView) {
                    $.get(question_load_url, function (result) {
                        $('#all-questions').empty();
                        $('#all-questions').append(result);
                        $('[data-toggle="tooltip"]').tooltip();
                        $('#question-loading-icon').remove();
                        $('#load-questions').css('visibility', 'hidden');
                        if (jump_to_comment) {
                            jumpToComment(jump_to_comment);
                        }
                        getCounters();
                    });
                }
            });
            $('#all-pinned').one('inview', function (event, isInView) {
                if (isInView) {
                    $.get(pinned_load_url, function (result) {
                        $('#all-pinned').append(result);
                        $('[data-toggle="tooltip"]').tooltip();
                        $('#pinned-loading-icon').remove();
                    });
                }
            });
            $(window).on("load", function () {
                $('.discussion-reviewtext').children('#id_comment').attr('placeholder', 'Your review');
                $('.discussion-questiontext').children('#id_comment').attr('placeholder', 'Enter your question');
                $('.discussion-rating').children('#id_rating').css('visibility', 'hidden');
            });
        });

        $(document).on('click', '.load-all-button', function (e) {
            var question_or_review = $(this).data('question-or-review')
            var load_html = '<div class="row" id="' + question_or_review + '-loading-icon"><div class="col-md-5"></div><div class="col-md-2"><i class="fas fa-spinner fa-pulse fa-3x"></i></div><div class="col-md-5"</div></div>'
            $('#all-' + question_or_review + 's').html(load_html);
            $.get('/products/leadscripts/' + question_or_review + 's/', function (result) {
                $('#all-' + question_or_review + 's').html(result);
                $('[data-toggle="tooltip"]').tooltip();
                $('#' + question_or_review + '-loading-icon').remove();
                removeHash();
            });
        });

        var sort_types = {review: "rating", question: "helpful"};
        var sort_dirs = {review: "down", question: "down"};

        function sortAndFilter(comment_type, filter_type, sort_type, sort_dir, sort_type_fulltext) {
            var comment_type_one = comment_type.replace(/s$/, '');

            var hl_pre = "";
            var hl_mid = "";
            var hl_str = "";
            if (sort_type == "relevance") {
                if (sort_dir == "up") {
                    sort_dir = "down";
                } else {
                    if (sort_type == sort_types[comment_type_one]) {
                        sort_dir = "up";
                    }
                }
            } else if (sort_type == "rating") {
                if (sort_dir == "up") {
                    hl_pre = "Highest ";
                    sort_dir = "down";
                } else {
                    if (sort_type == sort_types[comment_type_one]) {
                        hl_pre = "Lowest ";
                        sort_dir = "up";
                    } else {
                        hl_pre = "Highest ";
                    }
                }
                hl_mid = "Rated "
            } else if (sort_type == "helpful") {
                if (sort_dir == "up") {
                    hl_pre = "Most ";
                    sort_dir = "down";
                } else {
                    if (sort_type == sort_types[comment_type_one]) {
                        hl_pre = "Least ";
                        sort_dir = "up";
                    } else {
                        hl_pre = "Most "
                    }
                }
                hl_mid = "Helpful "
            } else if (sort_type == "newest") {
                if (sort_dir == "up") {
                    hl_pre = "Newest ";
                    sort_dir = "down";
                } else {
                    if (sort_type == sort_types[comment_type_one]) {
                        hl_pre = "Oldest ";
                        sort_dir = "up";
                    } else {
                        hl_pre = "Newest "
                    }
                }
            } else if (sort_type == "latest reply") {
                if (sort_dir == "up") {
                    hl_pre = "Latest Reply to ";
                    sort_dir = "down";
                } else {
                    if (sort_type == sort_types[comment_type_one]) {
                        hl_pre = "Oldest Reply to ";
                        sort_dir = "up";
                    } else {
                        hl_pre = "Most Active "
                    }
                }
            }
            sort_types[comment_type_one] = sort_type;
            sort_dirs[comment_type_one] = sort_dir;

            if (comment_type_one.indexOf('search') === 0) {
                var query = $('.search-reviews').prev('input').val();
                var reviews_deal_id = "3377" == "None" ? "141707" : "3377";
                $.get(
                    '/products/leadscripts/search/?active_tab=' + comment_type_one.replace('search_', '') +
                    's&review_sort_type=' + (sort_types['search_review'] || '') + '&review_sort_dir=' +
                    (sort_dirs['search_review'] || '') + '&question_sort_type=' + (sort_types['search_question'] || '') +
                    '&question_sort_dir=' + (sort_dirs['search_question'] || '') + '&query=' + query +
                    '&deal_id=141707&reviews_deal_id=' + reviews_deal_id,
                    function (result) {
                        $("#all-" + comment_type).html(result);
                        getCounters();
                    }
                );
            } else {
                load_counter = comment_type_one + "_load_count"
                eval(load_counter + " = 0");
                hl_str = hl_pre + hl_mid + comment_type.charAt(0).toUpperCase() + comment_type.slice(1);
                var load_html = '<div class="row" id="' + comment_type_one + '-loading-icon"><div class="col-md-5"></div><div class="col-md-2"><i class="fas fa-spinner fa-pulse fa-3x"></i></div><div class="col-md-5"</div></div>'
                var load_url = '/products/leadscripts/' + comment_type + '/?sort_type=' + sort_types[comment_type_one] + '&sort_dir=' + sort_dirs[comment_type_one] + '&sort_type_fulltext=' + encodeURI(sort_type_fulltext);
                if (filter_type !== 'all') {
                    load_url += "&filter=" + filter_type;
                }

                $('.' + comment_type + '-headline').html(hl_str);
                $("#load-" + comment_type).html("")
                $("#all-" + comment_type).html(load_html);
                $("#all-" + comment_type).load(load_url, function (result) {
                    $('[data-toggle="tooltip"]').tooltip();
                    $('#' + comment_type_one + '-loading-icon').remove();
                    getCounters();
                });
            }
        }

        $(document).on('change', '.filter-by-select, .sort-by-select', function (e) {
            e.preventDefault();
            var comment_type = $(this.options[this.selectedIndex]).data('type');
            var comment_type_index = comment_type == 'reviews' ? 0 : 1;
            var filter = document.getElementsByClassName('filter-by-select')[comment_type_index];
            var filter_type = filter ? $(filter.options[filter.selectedIndex]).data('filter') : "";
            var sort = document.getElementsByClassName('sort-by-select')[comment_type_index];
            var sort_type_fulltext = sort.value;
            var sort_type = sort_type_fulltext.split(" ")[0];
            var sort_dir = ["helpful (ascending)", "oldest", "rating (ascending)"].indexOf(sort_type) >= 0 ? "up" : "down";
            sortAndFilter(comment_type, filter_type, sort_type, sort_dir, sort_type_fulltext);
        });

        $(document).on('click', '.refresh-counter', function (e) {
            getCounters();
        });

        function getCounters() {

        }

        function reloadThread(comment_id) {

            var thread;
            var questions_or_reviews;
            var target = $('#' + comment_id);
            var load_target = target.parents('.sumo-comment-container');
            if (target.parents('[id^=collapseChild]').attr('id')) {
                thread = target.parents('[id^=collapseChild]').attr('id').split('Comments')[1];
            } else {
                thread = comment_id;
            }
            if (target.hasClass('question')) {
                questions_or_reviews = 'question';
            } else if (target.hasClass('review')) {
                questions_or_reviews = 'review';
            }

            var load_url = '/products/leadscripts/' + questions_or_reviews + 's/?sort_type=newest&thread_id=' + thread;
            load_target.load(load_url, function (result) {
                $(document).scrollTop($('#' + comment_id).offset().top - 110);
                getCounters();
            });
        }

        function approveComment(comment_id, action) {
            $.getJSON("/comments/approve_comment_ajx/?comment_id=" + comment_id + "&approve_action=" + action,
                function (data) {
                    if (data.success) {
                        $('span#comment_approve_' + comment_id).html('Approval updated!');
                        $('span#comment_approve_' + comment_id + ' a').remove();
                        reloadThread(comment_id);
                    }
                });
        }

        function resolveComment(comment_id, action) {
            var data = {'xtdcomment_ptr_id': comment_id, 'resolved': action};

            $.ajax({
                'url': '/discussions/api/resolved/' + comment_id + '/',
                'type': 'PUT',
                'data': data,
                'content_type': 'application/json',
                'success': function (data) {
                    $('span#comment_resolved_' + comment_id).html('Updated!');
                    $('span#comment_resolved_' + comment_id + ' a').remove();
                    reloadThread(comment_id);
                },
            });
        }

        function pinComment(comment_id, action) {
            $.getJSON("/comments/pin_comment_ajx/?comment_id=" + comment_id + "&pin_action=" + action,
                function (data) {
                    if (data.success) {
                        $('#comment_pin_' + comment_id).html('Pin updated!');
                        $('#comment_pin_' + comment_id + ' a').remove();
                        reloadThread(comment_id);
                        var load_html = '<div class="row" id="pinned-loading-icon"><div class="col-md-5"></div><div class="col-md-2"><i class="fas fa-spinner fa-pulse fa-3x"></i></div><div class="col-md-5"</div></div>'
                        $('#all-pinned').html(load_html);
                        $.get('/products/leadscripts/' + 'pinned/', function (result) {
                            $('#all-pinned').html(result);
                            $('[data-toggle="tooltip"]').tooltip();
                            $('#pinned-loading-icon').remove();
                        });
                    }
                });
        }

        function whitelistAuthor(user_id, comment_id, action) {
            $.getJSON("/comments/whitelist_author_ajx/?user_id=" + user_id + "&whitelist_action=" + action,
                function (data) {
                    if (data.success) {
                        $('#author_whitelist_' + comment_id).html('Whitelist updated!');
                        $('#author_whitelist_' + comment_id + ' a').remove();
                    }
                });
        }

        function blacklistAuthor(user_id, comment_id, action) {
            $.getJSON("/comments/blacklist_author_ajx/?user_id=" + user_id + "&blacklist_action=" + action,
                function (data) {
                    if (data.success) {
                        $('#author_blacklist_' + comment_id).html('Blacklist updated!');
                        $('#author_blacklist_' + comment_id + ' a').remove();
                    }
                });
        }
    </script>
    <script>
        var startSeconds = parseInt("1648558800");
        var startMilliseconds = startSeconds * 1000;
        var startDateTZ = new Date(startMilliseconds);
        $(".clock-start").each(function () {
            $(this).countdown(startDateTZ, function (event) {
                var totalHours = event.offset.totalDays * 24 + event.offset.hours;
                var totalDays = event.offset.totalDays;
                if (totalDays < 2) {
                    $(this).html(event.strftime(''
                        + '<div>' + totalHours + ' :' + '<span>Hours</span></div>'
                        + '<div>%M :<span>Mins</span></div> '
                        + '<div>%S<span>Secs</span></div>'
                    ))

                } else {
                    $(this).html(event.strftime(''
                        + '<div>' + totalDays + '<span>Days</span></div>'
                        + '<div>%H<span>Hours</span></div>'
                        + '<div>%M<span>Mins</span></div>'
                        + '<div>%S<span>Secs</span></div>'
                    ))
                }
            });
        });

        var seconds = parseInt("");
        var milliseconds = seconds * 1000;
        var endDateTZ = new Date(milliseconds);
        $(".clock-end").each(function () {
            $(this).countdown(endDateTZ, function (event) {
                var totalHours = event.offset.totalDays * 24 + event.offset.hours;
                var totalDays = event.offset.totalDays;
                if (totalDays < 2) {
                    $(this).html(event.strftime(''
                        + '<div>' + totalHours + '<span>Hours</span></div>'
                        + '<div>%M<span>Mins</span></div> '
                        + '<div>%S<span>Secs</span></div>'
                    ))

                } else {
                    $(this).html(event.strftime(''
                        + '<div>' + totalDays + '<span>Days</span></div>'
                        + '<div>%H<span>Hours</span></div>'
                        + '<div>%M<span>Mins</span></div> '
                        + '<div>%S<span>Secs</span></div>'
                    ))
                }
            });
        });

        var lcSeconds = parseInt("");
        var lcMilliseconds = lcSeconds * 1000;
        var lcDateTZ = new Date(lcMilliseconds);
        $(".clock-lc-end").each(function () {
            $(this).countdown(lcDateTZ, function (event) {
                var totalHours = event.offset.totalDays * 24 + event.offset.hours;
                var totalDays = event.offset.totalDays;
                if (totalDays < 2) {
                    $(this).html(event.strftime(''
                        + '<div>' + totalHours + '<span>Hours</span></div>'
                        + '<div>%M<span>Mins</span></div> '
                        + '<div>%S<span>Secs</span></div>'
                    ))

                } else {
                    $(this).html(event.strftime(''
                        + '<div>' + totalDays + '<span>Days</span></div>'
                        + '<div>%H<span>Hours</span></div>'
                        + '<div>%M<span>Mins</span></div> '
                        + '<div>%S<span>Secs</span></div>'
                    ))
                }
            });
        });

        window.onload = function () {
            function loadIFrames() {
                window.removeEventListener("scroll", loadIFrames);
                var iframes = document.getElementsByTagName("iframe");
                var i;
                for (i = 0; i < iframes.length; i++) {
                    if (iframes[i].hasAttribute("loadonscroll") && iframes[i].hasAttribute("srcdoc")) {
                        iframes[i].removeAttribute("srcdoc");
                    }
                }
            }

            var url = window.location.href;
            if (url.indexOf('review=true') !== -1) {
                $("#review-modal").modal('show');
            }

            window.addEventListener("scroll", loadIFrames);
        }

        window.addEventListener("message", function (event) {
            if (event.origin !== window.location.origin || typeof event.data !== 'string' || !event.data.startsWith('embed_slug:')) {
                return;
            }
            var ytIframe = document.getElementById(event.data.slice(11));
            if (ytIframe) {
                ytIframe.removeAttribute("loadonscroll");
            }
        });
    </script>
@endpush
