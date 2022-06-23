<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/cart/css/base.89a21e9d3213.css') }}"
          type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://appsumo2-cdn.appsumo.com/static/dist/css/cart_cart.eaa64387259e.css"
          type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @toastr_css
    <style>
        header .navbar-brand {
            background-image: url({{ static_asset('assets/frontend/assets/images/logo1.png') }});
        }

        header .navbar-brand {
            width: 130px !important;
        }

        header .sumo-cart > a {
            background-image: url({{ static_asset('assets/frontend/cart/img/baseline-shopping_cart_dark.svg') }});

        }
    </style>
</head>

<body class="sumo-cart-checkout-page sumo-cart-page sumo-header-hide-search">

<div class="primary-container">
    <!-- ******* HEADER ******* -->
    <header id="" class="">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <button class="navbar-toggler" id="offcanvas-toggler" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Brand -->
                <div class="navbar-brand-container text-center text-lg-left">
                    <a class="navbar-brand" href="{{ route('home') }}"></a>
                </div>
                <!-- Desktop Navbar Nav -->
                <div class="ml-auto d-none d-lg-block desktop-nav-container">
                    <ul class="navbar-nav">
                        <li class="desktop-search-container-outer">
                            <div class="search-container desktop-search-container-inner">
                                <form class="" action="/search" autocomplete="off">
                                    <input type="hidden" name="status" value="all"/>
                                    <div class="search-form-container">
                                        <a class="product-type">
                                            <span>All</span>
                                            <input type="hidden" name="product_type" value="" disabled/>
                                            <i class="fas fa-chevron-down chevron-icon"></i>
                                        </a>
                                        <div class="dropdown-portal"></div>
                                        <div class="dropdown-menu">
                                            <div class="dropdown-item">
                                                <a href="javascript:void(0)"
                                                   data-product-type="software">Software</a>
                                            </div>
                                            <div class="dropdown-item">
                                                <a href="javascript:void(0)" data-product-type="courses">Courses</a>
                                            </div>
                                            <div class="dropdown-item">
                                                <a href="javascript:void(0)"
                                                   data-product-type="creative-assets">Creative assets</a>
                                            </div>
                                            <div class="dropdown-item">
                                                <a href="javascript:void(0)" data-product-type="ebooks-pdfs">eBooks
                                                    &amp; PDFs</a>
                                            </div>
                                            <div class="dropdown-item">
                                                <a href="javascript:void(0)"
                                                   data-product-type="templates">Templates</a>
                                            </div>
                                            <div class="dropdown-item">
                                                <a href="javascript:void(0)"
                                                   data-product-type="services-goods">Services &amp; goods</a>
                                            </div>
                                            <div class="dropdown-item search-all">
                                                <a href="javascript:void(0)" data-product-type="all">All</a>
                                            </div>
                                        </div>
                                        <!-- TODO - REMOVE feature flag search_autocomplete -->
                                        <input type="text" placeholder="Search..." name="query" required
                                               autocomplete="off" id="search-desktop" class="exp-search-auto">
                                        <!-- TODO - REMOVE feature flag search_autocomplete -->
                                        <button type="submit" class="search-submit"><i
                                                class="fa fa-search"></i></button>

                                        <div class="search-dropdown display-dropdown">
                                            <div class="search-dropdown-contents">
                                                <div class="search-dropdown-title">
                                                    Top Searches
                                                </div>
                                                <div class="search-options-container"/>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- User Specific Nav Items -->

                        <li class="nav-item">
                            @auth
                            <form class="mt-3" method="POST" action="{{ route('logout') }}">
                            @csrf
<button class="btn btn-info">Logout</button>
                            </form>
                      
                            @endauth
                            @guest
                            <a id="log-in-link" class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-user-circle user-circle pr-2 "></i>
                                Log in
                            </a>
                            @endguest
                        </li>

                    </ul>
                </div>
                <div class="nav-item-icons">
                    <div class="nav-search-icon d-lg-none">
                        <!-- <img src="https://appsumo2-cdn.appsumo.com/static/images/svg/magnify-white.svg" width="auto" height="20" alt="Magnify Image" /> -->
                    </div>
                    <div class="sumo-cart" product="yes">
                        <span class="cart-num">
                            {{ cart_quantity_count() }}

                        </span>
                        <a href="/cart/">
                            <!--<img src="https://appsumo2-cdn.appsumo.com/static/images/svg/baseline-shopping_cart_dark.svg" alt="cart" height="20">-->
                        </a>
                    </div>
                </div>
            </div>
        </nav>
   
        <!-- Navbar -->

        <!-- Offcanvas (Mobile Nav) -->
        <div class="offcanvas-collapse" id="offcanvas-collapse">
            <div class="navbar-mobile-top">
                <div class="container">
                    <div class="title">Main Menu</div>
                    <div class="return" sub-menu-close="offcanvas-sub-menu">Go Back</div>
                    <span class="navbar-toggler-close" id="offcanvas-close" data-toggle="offcanvas"></span>
                </div>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item item-level-1">
                    <a class="nav-link" href="{{ route('home') }}"><span>Home</span></a>
                </li>
                <li class="nav-item item-level-1 ">
                    <a class="nav-link" href="{{ route('browse') }}"><span>Browse</span></a>

                </li>

                <li class="nav-item item-level-1">
                    <a class="nav-link" href="{{ route('partner_sell_on') }}" target="_blank">
                            <span>Sell on Grandfatheredly<span>
                    </a>
                </li>

                @guest

                    <li class="nav-item item-level-1">

                        <a id="log-in-link" class="nav-link" href="{{ route('login') }}"><span>Log in</span></a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item item-level-1 mt-2 mb-2">

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-primary" type="submit">Logout</button>
                        </form>
                    </li>
                @endauth

            </ul>
        </div>
        <!-- End offcanvas -->

    </header>

    <main class="">
        <section class="py-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 pb-20">
                        <h1 class="mb-0">Cart</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        
                            
                                @include('frontend._cart_form')
                         
                          
                            
                           
                      
                    </div>
                </div>
            </div>
        </section>

    </main>


    <!-- ******* FOOTER ******* -->
    <footer class="sumo-footer-checkout">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mb-4 sumo-text-brand">
                    <h3>Join the movement of over 1M entrepreneurs</h3>
                </div>
                <div class="col-md-4 mb-4 mb-lg-0">
                    <h4 class="h6 mb-4">Satisfaction guaranteed</h4>
                    <img class="img-fluid" src="{{ static_asset('assets/frontend/cart/img/as-guarantee.svg')}}"
                         width="65" height="auto">
                </div>
                <div class="col-md-4 mb-4 mb-lg-0 sumo-mid-column">
                    <h4 class="h6 mb-4">World-class support</h4>
                    <img class="img-fluid" src="{{ static_asset('assets/frontend/cart/img/as-worldclass.svg')}}"
                         width="65" height="auto">
                </div>
                <div class="col-md-4">
                    <h4 class="h6 mb-3">
                        60-day money-back guarantee*
                        <small class="sumo-footer-terms">
                            Some restrictions apply, see <a href="/terms-of-use" target="_blank">Terms</a>
                        </small>
                    </h4>
                    <img class="img-fluid" src="{{ static_asset('assets/frontend/cart/img/as-60day.svg')}}"
                         width="65" height="auto">
                </div>
            </div>
        </div>
    </footer>

</div>

@jquery
@toastr_js
@toastr_render

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ static_asset('assets/frontend/cart/js/jquery-3.2.1.min.js') }}"></script>

<script src="{{ static_asset('assets/frontend/cart/js/popper.min.js') }}"></script>
<script src="{{ static_asset('assets/frontend/cart/js/bootstrap.min.js') }}"></script>
<script src="{{ static_asset('assets/frontend/cart/js/mdb-partial/mdb-partial.min.js') }}"></script>

<!-- Your stuff: Third-party javascript libraries go here -->
<script src="{{ static_asset('assets/frontend/cart/js/jquery.countdown.min.js') }}"></script>
<script src="{{ static_asset('assets/frontend/cart/js/jquery.rateit.min.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/cart/js/flickity.pkgd.min.js') }}" defer></script>

<!-- Place project specific Javascript in this file -->
<script src="{{ static_asset('assets/frontend/cart/js/privy-helper.js') }}" defer></script>

<!-- Mobile Navbar -->
<script type="text/javascript">
    // Load search option img source as a var
    var chartLineSrc = "{{ static_asset('assets/frontend/cart/img/chart-line.svg') }}";
</script>
<script src="{{ static_asset('assets/frontend/cart/js/offcanvas.js') }}" defer></script>
<script src="{{ static_asset('assets/frontend/cart/js/navbar-scroll.js') }}"></script>
<script src="{{ static_asset('assets/frontend/cart/js/toggle-search.js') }}"></script>
<script src="{{ static_asset('assets/frontend/assets/js/popper.min.js') }}"></script>
<script type="text/javascript">
    $('#quantity').on('change', function () {
        let product_id = $(this).attr('productId');
        let final_amount = $(this).val();

        var url = '{{ route("update_quantity") }}';
        $.ajax({
            url: url,
            cache: false,
            data: {product_id: product_id, final_amount: final_amount},
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                if (data.code == 200) {
                    toastr.success(data.message);
                    $('#cart_summary').empty().append(data.content);
                    location.reload(true)
                } else if (data.code == 404) {
                    toastr.warning(data.message);
                } else {
                    toastr.error(data.message);
                }
            }
        });
    });

    function delete_cart_item(product_id) {
        var url = '{{ route("delete_cart_item") }}';
        $.ajax({
            url: url,
            cache: false,
            data: {product_id: product_id},
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                if (data.code == 200) {
                    toastr.success(data.message);
                    $('.cart-num').html(data.items);
                    $('#cart_summary').empty().append(data.content);
                    location.reload(true)
                } else if(data.code == 404) {
                    toastr.warning(data.message);
                } else {
                    toastr.error(data.message);
                }
            }
        });
    }
</script>

</body>

</html>
