<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Checkout</title>
    <meta name="author" content="Grandfatheredly ">
    <meta name="description" content="Grandfatheredly  promotes great products to help you in your career and life.">
    <meta name="keywords"
        content="Grandfatheredly , Grandfatheredly .com, Entrepreneurs, Store for Entrepreneurs, Tools, Education, Deals, Startups, Lean, Lean Startups">

    <link rel="stylesheet" href="{{ static_asset('assets/frontend/cart/base.89a21e9d3213.css') }}" type="text/css">


    <link rel="stylesheet" href="{{ static_asset('assets/frontend/cart/cart_cart.eaa64387259e.css') }}" type="text/css">
    <style>
        .sumo-new-checkout-page header .navbar-brand {
            background-image: url({{ static_asset('assets/frontend/assets/images/logo2.png') }});
        }

        header .navbar-brand {
            width: 130px !important;
        }
        .paypal_checkouts.hide{
            display: none;
        }
        .paypal_checkouts.show{
            display: block;
        }
        .strip_checkouts.hide{
            display: none;
        }
        .strip_checkouts.show{
            display: block;
        }
        button.btn.btn-primary.btn_strip.text-center {
    background: #00b1df;
    color: white;
    box-shadow: 0;
    border: 0;
}

    </style>
</head>

<body class="
  sumo-cart-page sumo-cart-checkout-page sumo-new-checkout-page sumo-header-hide-search
">

    <div class="primary-container">

        <!-- ******* HEADER ******* -->
        <header>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container">
                    <!-- Brand -->
                    <a class="navbar-brand" href="{{ route('home') }}"></a>
                    <div class="ml-auto">

                        <a class="sumo-return-cart" href="{{ route('cart') }}">
                            <span class="d-none d-sm-inline">Return to </span>
                            <span>Cart</span>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <main class="">
            <section>
                <div class="container">
                    <div class="row sumo-split-layout">

                        <link href="{{ static_asset('assets/frontend/checkout/css/social-sign-on.css') }}"
                            rel="stylesheet">
                        <link rel="preconnect" href="https://fonts.gstatic.com">
                        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
                            rel="stylesheet">


                        <div class="col-md-6 sumo-col-left pb-0 pb-md-50">
                            <div class="mt-50 my-md-50 mr-lg-50 pr-md-30">
                                <div class="pb-20">
                                    <h1 class="mb-0">Checkout</h1>
                                </div>
                                <a class="d-inline-block d-md-none pb-30" data-toggle="modal"
                                    data-target="#summaryModal">
                                    <span class="d-flex align-items-center">
                                        <img class="mr-10"
                                            src="{{ static_asset('assets/frontend/checkout/img/baseline-shopping_cart-24px.svg') }}"
                                            width="auto" height="24">
                                        <span class="sumo-psuedo-link">View cart summary</span>
                                    </span>
                                </a>
                                <div id="checkoutSteps">
                                    <!-- Card 1 -->
                                    <div class="checkout-step-container mb-30">
                                        <div class="card checkout-card card-step-1" id="cardStep1">
                                            <div class="card-header">
                                                <div class="d-flex align-items-center">
                                                    <h2 class="h3" id="headerOption1">1. Create an account</h2>
                                                    <h2 class="h3" id="headerOption2" style="display:none;">1. Sign in
                                                    </h2>
                                                </div>
                                            </div>
                                            <!-- End Card Header -->
                                            <div class="card-body">
                                                @auth
                                                <p><b> Your order confirmation will be emailed to:
                                                </b>
                                                </p>
                                                    {{ Auth::user()->email }}
                                                @endauth
                                                
                                                @guest
                                                <!-- Sign UP Form -->
                                                <div class="step-one-sign show" id="signIn">
                                                    <p>
                                                        You're oh-so-close to saving on software —
                                                        you just need to create an account so we can email you the
                                                        goods!
                                                    </p>
                                                    <!-- Signup Variant #1 (A) -->
                                                    <div
                                                        class="row card-signup-social-buttons my-3 d-flex justify-content-center">
                                                        <!--Google btn -->
                                                        <a id='google-signup-top'
                                                            class="google-signup-button google-btn"
                                                            href="{{ route('login.google') }}">
                                                            <div class="google-icon-wrapper">
                                                                <img class="google-icon-svg"
                                                                    src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" />
                                                            </div>
                                                            <p class="btn-text">Sign up with Google</p>
                                                        </a>
                                                    </div>

                                                    <div class="separator">OR</div>

                                                    <!-- END Signup Variant #1 (A) -->
                                                    <form id="signup_form" method="post" action="{{ route('checkout_register') }}">
                                                       @method('post')
                                                       @csrf
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <div class="form-group mb-20">
                                                                    <label for="InputEmail">Email Address</label>
                                                                    <input type="email" class="form-control"
                                                                        id="id_email" required name="email">
                                                                        @error('email')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="div_id_login" class="form-group">
                                                            <label for="name" class=" requiredField"> Name<span class="asteriskField">*</span>
                                                            </label>
                                                            <div>
                                                                <input type="text" name="name" class="form-control" required=""
                                                                       id="name" value="{{ old('name') }}">
                                                            </div>
                                                            @error('name')
                                                            <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <div class="form-group mb-20">
                                                                    <label for="createPassword">Create a
                                                                        password</label>
                                                                    <span class="tooltip-question right"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Password must be at least 8 characters and must not be similar to your email address.">?
                                                                    </span>
                                                                    <input type="password" name="password"
                                                                        class="form-control signup_pw1"
                                                                        id="id_password1" minlength="8" required>
                                                                        @error('password1')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                       
                                                        <button type="submit"
                                                            class="btn btn-primary full-width mt-20 signup-checkout-test">

                                                            Continue checking out

                                                        </button>
                                                    </form>
                                                    <p class="mt-4 text-center">
                                                        Already have an Grandfatheredly account? <a
                                                            href="javascript:void(0)" class="checkout_signin">Sign
                                                            in</a>
                                                    </p>

                                                </div>
                                                <!-- Sign IN Form -->
                                                <div class="step-one-sign hide" id="signUp">
                                                    <!-- Signin Variant #1 (A) -->

                                                    <div
                                                        class="row card-signup-social-buttons my-3 d-flex justify-content-center">
                                                        <!--Google btn -->
                                                        <a id='google-login-top' href="{{ route('login.google') }}"
                                                            type="button" class="google-login-button">
                                                            <img id='google-svg'
                                                                src="{{ static_asset('assets/frontend/checkout/img/btn-google-social-signin.svg') }}">
                                                        </a>
                                                    </div>




                                                    <div class="separator separator-top">OR</div>

                                                    <!-- End Signin Variant #1 (A) -->

                                                    <form id="login_form" method="post" action="{{ route('checkout_login') }}">
                                                    @csrf
                                                    @method('post')
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <div class="form-group mb-20">
                                                                    <label for="userEmail">Email Address</label>
                                                                    <input type="email" name="email"
                                                                        class="form-control" id="id_login_email"
                                                                        required>
                                                                        @error('email')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="enterPassword">Enter password</label>
                                                                    <input type="password" name="password"
                                                                        class="form-control" id="id_login_password1"
                                                                        minlength="8" required>
                                                                        @error('password')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                      
                                                        <button type="submit"
                                                            class="btn btn-primary full-width mt-20 login-checkout-test">Sign
                                                            In</button>
                                                        <p class="mt-20 mb-0">
                                                            <a href="{{ route('password.request') }}">Forgot your
                                                                password?</a>
                                                        </p>
                                                    </form>

                                                    <p class="text-center mt-3">
                                                        Don’t have an Grandfatheredly account? <a href="javacript::vodi(0)"
                                                            class="checkout_signup">Sign
                                                            up</a>
                                                    </p>

                                                </div>
                                                @endguest
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- Card 2 -->
                                    <div class="checkout-step-container mb-30">
                                       @guest
                                           
                                       <div class="card checkout-card card-step-2 inactive" id="cardStep2">
                                           @endguest
                                           @auth
                                           <div class="card checkout-card card-step-2" id="cardStep2">
                                               
                                           @endauth
                                            <div class="card-header">
                                                <div class="d-flex align-items-center">
                                                    <h2 class="h3">2. Select a payment method</h2>
                                                </div>
                                            </div>
                                            <div id="checkout-payment-method">
            
                                            @auth
                                                <div class="card-body">
                                                  <!-- Card Data Entry -->
                                                  <div class="card-data-entry show">
                                                    <form id="cardStep2_Form" data-token="valid">
                                                      <div class="form-group paymentOptions" id="paymentOptions">
                                                        <div class="form-check mb-20">
                                                          <input class="form-check-input payment-method payment_check" type="radio" name="paymentMethods" id="paymentMethods1" value="strip">
                                                          <label class="form-check-label" for="paymentMethods1">
                                                            <img class="mr-10" src="https://appsumo2-cdn.appsumo.com/static/images/checkout/payment-methods/cc_card.svg" width="auto" height="20">
                                                            <b>Credit or debit card</b>
                                                          </label>
                                                        </div>
                                                        <div class="form-check mb-20">
                                                          <input class="form-check-input payment-method payment_check" type="radio" name="paymentMethods" id="paymentMethods2" value="paypal">
                                                          
                                                          <label class="form-check-label" for="paymentMethods2">
                                                            <img class="mr-10" src="https://appsumo2-cdn.appsumo.com/static/images/checkout/payment-methods/paypal.png" width="auto" height="20">
                                                            <b>PayPal</b>
                                                          </label>
                                                          
                                                          
                                                        </div>


                                                      </div>
                                                
                                                    
                                             
                                                      <a href="javascript:void(0)" class="btn btn-primary full-width disabled" id="nextCard2">Continue to Order Review</a>
                                                    </form>
                                                  </div>
                                                </div>
                                            @endauth
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 3 -->
                                    <div class="checkout-step-container">
                                        <div class="card checkout-card card-step-3 inactive" id="cardStep3">
                                            <div class="card-header">
                                                <div class="d-flex align-items-center">
                                                    <h2 class="h3">3. Order Review</h2>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <!-- Card Data Entry -->
                                                <div class="card-data-entry hide" style="padding: 10px 10px"> <!-- style="display: none;" -->
                                                  <p>
                                                    <b>
                                                      While we're sure you got everything right, please review your order summary,
                                                      email address, and payment method before placing your order.
                                                    </b>
                                                  </p>
                                                  <!-- Mobile Checkout Summary  -->
                                                  
                                                  <hr class="my-30">
                                                  <h4 class="mb-10"><b>Need Help?</b></h4>
                                                  <p>
                                                    Our support team is only one click away! Send us any questions you may have.
                                                  </p>
                                                  <a href="#" target="_blank" class="btn btn-more full-width-mobile">Find Help</a>
                                                </div>
                                                <!-- End Card Data Entry -->
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Right Column -->
                        <div class="col-md-6 sumo-col-right pb-50">
                            <div class="mt-md-50 mb-50 ml-lg-50 pl-md-30">
                                <div class="pb-20 d-none d-md-block">
                                    <div class="placeholder"></div>
                                </div>
                                <!-- Summary -->
                                <div class="card checkout-card checkout-summary dark mb-30 d-none d-md-flex">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <h2 class="h3">Summary</h2>
                                            <a class="edit-link ml-auto" href="{{ route('cart') }}">Edit</a>
                                        </div>
                                    </div>
                                    <!-- End Card Header -->
                                    <div class="card-body pt-20">

                                        <div id="cart-checkout-summary">
                                            <!-- Desktop Table -->
                                            <!-- Table -->
                                            <table class="table sumo-purchases-table">
                                                <tbody>


                                                    @php
                                                        $total = 0;
                                                        $subtotal = 0;
                                                        $productPrice = 0;
                                                    @endphp



                                                    @foreach ($carts as $item)

                                                    @php
                                                    
                                                    $subtotal = $item['price'] * $item['quantity'];
                                                    $total += $subtotal;

                                                    if(!isset($item['membershipItem'])){
                                                        $price = $item['price'] * $item['quantity'];
                                                        $productPrice += $price;
                                                    }
                                                    @endphp

                                                    <tr>
                                                        <td class="sumo-td-img">
                                                            <img class="rounded-border"
                                                                src="{{ static_asset($item['photo']) }}"
                                                                width="25" height="auto">
                                                        </td>
                                                        <td class="sumo-td-name">
                                                            <div class="sumo-title">
                                                                <b>{{ $item['name'] }}</b>
                                                            </div>
                                                            <div class="quantity">QTY: {{ $item['quantity'] }}</div>
                                                        </td>
                                                        <td class="sumo-td-price text-right sumo-checkout-item"
                                                            data-item-id="141707">
                                                            ${{ number_format($subtotal, 2) }}
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                            <!-- End Table -->



                                            <div>
                                                <div class="as-checkout-entry">
                                                    <strong>Subtotal</strong>
                                                    <strong>${{ number_format($total, 2) }}</strong>
                                                </div>
                                                <div class="as-checkout-entry">
                                                    <em>Plus discount</em>
                                                    <em>- ${{membership_cart_discount($productPrice)}}</em>
                                                </div>
                                                <form
                                                    class="md-form sumo-discount-form pb-4 sumo-border-b apply-coupon">
                                                    <div class="apply-code mt-30" id="applyCodeContainer_mobile">
                                                        <div class="clearfix">
                                                            <a class="float-right apply-code-link"
                                                                id="buttonApplyCode_mobile" data-toggle="collapse"
                                                                href=".collapseApplyCode" role="button"
                                                                aria-expanded="false"
                                                                aria-controls="collapseApplyCode_mobile">+ Apply a
                                                                discount code</a>
                                                        </div>
                                                        <div class="collapseApplyCode collapse"
                                                            id="collapseApplyCode_mobile">
                                                            <div class="code-input-row collapse show"
                                                                id="applyCodeInputRow_mobile">
                                                                <div class="form-row">
                                                                    <div
                                                                        class="col-lg-12 offset-lg-1 d-flex flex-row flex-md-column flex-lg-row coupon-code-input">
                                                                        <input type="text"
                                                                            class="form-control mr-10 input-code-field"
                                                                            id="coupon-code" name="code"
                                                                            aria-describedby="CodeField"
                                                                            placeholder="Enter code">
                                                                        <button type="submit"
                                                                            class="btn btn-secondary">Apply</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="coupon-error-message" class="apply-code-error hide">
                                                        </div>
                                                    </div>
                                                </form>

                                                
                                                
                                                <div class="as-checkout-entry" id="checkout-total" data-total="99.00">
                                                    <strong class="as-checkout-total">Total</strong>
                                                    <strong class="as-checkout-total-price"
                                                        id="totalprice_sidebar totalprice_mobile">${{$total -  membership_cart_discount($productPrice) }}</strong>
                                                </div>
                                                <div class="paypal_checkouts mt-4 hide">
                                                    
                                                    <form class="" method="POST" id="payment-form"
                                                    action="{{ route('payment_post') }}">
                                                   
                                                   @csrf
                                                   
                                                    
                                                    <button  class="btn btn-primary btn_paypal text-center" style="width:100%">
                                                        <img src="{{ static_asset('assets/frontend/assets/images/paypal.svg') }}" class="mr-2" height="18" style="margin-top:-4px" alt="Paypal"> Checkout</button>
                                                    </form>
                                                  
                                                </div>
                                                <div class="strip_checkouts mt-4 hide">
                                                    
                                                    <button class="btn btn-primary btn_strip text-center" data-toggle="modal" data-target="#addCardModal" style="width:100%">
                                                        <img src="{{ static_asset('assets/frontend/assets/images/cc_card.svg') }}" class="mr-2" height="18" style="margin-top:-4px" alt="Credit or debit card"> Credit or debit card</button>
                                                 
                                                </div>
                                            </div>

                                          
                                        </div>

                                    </div>
                                </div>
                                <!-- Supplementary Info -->
                                <div class="sumo-cart-supplement mt-30">
                                    <p class="sumo-cart-supplement-header">Buy with confidence</p>
                                    <ul class="list-inline mt-20">


                                        <li class="d-flex">
                                            <img class="sumo-icon" width="auto" height="20px"
                                                src="{{ static_asset('assets/frontend/cart/img/calendar.svg') }}">
                                            <span><b>Try any product risk-free.</b>
                                                We offer an industry-leading 60-day money-back guarantee &mdash; no
                                                matter the reason.
                                                Take any of our products for a spin to see if they’re a good fit for
                                                you.
                                            </span>
                                        </li>


                                        <li class="d-flex">
                                            <img class="sumo-icon" width="auto" height="20px"
                                                src="{{ static_asset('assets/frontend/cart/img/lifebuoy.svg') }}">
                                            <span>
                                                <b>World-class customer support.</b>
                                                There’s customer support, and then there’s Grandfatheredly customer
                                                support.
                                                We take pride in going above and beyond to keep our community happy.
                                            </span>
                                        </li>
                                        <li class="d-flex">
                                            <img class="sumo-icon" width="auto" height="20px"
                                                src="{{ static_asset('assets/frontend/cart/img/message-text.svg') }}">
                                            <span>
                                                <b>Talk to founders and CEOs.</b>
                                                Ask your burning questions on any active deal and get answers from the
                                                founders and C-level execs themselves.
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Supplemetary Info -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

         

        </main>

   

        <div class="modal fade sumo-updated" id="addCardModal" tabindex="-1" role="dialog" aria-labelledby="Add Credit Card">
            <div class="modal-dialog" role="document" style="">
                <div class="modal-content">
                    <!-- Form -->
                    <form role="form" action="{{ route('stripe.payment') }}" method="POST" class="validation"
                        data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                        @csrf
        
                        <div class="modal-body py-30">
                            <p class="mb-20">Fill out your credit card details below.</p>
                            <div class="row">
        
        
                                <div class="col-md-7">
        
                                    <div class='form-group required'>
                                        <label class='control-label'>Name on Card</label>
                                        <input class='form-control' size='4' type='text'>
                                    </div>
        
                                    <div class='form-group required'>
                                        <label class='control-label'>Card Number</label>
                                        <input autocomplete='off' class='form-control card-num' size='20' type='text'>
                                    </div>
        
        
                                    <div class="form-row">
        
                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                            <label class='control-label'>CVC</label>
                                            <input autocomplete='off' class='form-control card-cvc' placeholder='e.g 415'
                                                size='4' type='text'>
                                        </div>
        
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Month</label> <input
                                                class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Year</label> <input
                                                class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                        </div>
        
                                    </div>
        
     
                                </div>
                                <div class="col-md-5 col-lg-4 offset-lg-1 text-center text-md-left">
                                    <div class="modal-we-accept float-md-right">
                                        <h4 class="sumo-accept-header h6">We accept</h4>
                                        <img class="mw-100 mt-10" width="auto" height="20px"
                                            src="{{ static_asset('assets/frontend/assets/images/payment-all-cards.svg') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
        
        
        
                  
        
        
        
        
                        <!-- Close Modal Body -->
                        <div class="modal-footer row">
                            <div class="col-12 d-flex flex-column flex-md-row">
                                <button type="button" class="btn btn-cancel order-2 order-md-1 mr-md-10 ml-md-auto"
                                    data-dismiss="modal">Cancel</button>
                                <button id="card-element-submit" type="submit"
                                    class="btn btn-primary order-1 order-md-2 mb-10 mb-md-0">Pay Now</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
       



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


    <script>
        $('.checkout_signin').on('click', function(){
            $('#signUp').removeClass('hide');
            $('#signUp').addClass('show');
            $('#signIn').removeClass('show');
            $('#signIn').addClass('hide');
        });
        $('.checkout_signup').on('click', function(){
            $('#signUp').removeClass('show');
            $('#signUp').addClass('hide');
            $('#signIn').removeClass('hide');
            $('#signIn').addClass('show');
        });
        $('.payment_check').on('change', function(){
            
            $('#paymentMethods2').prop(':checked', function(){
                $('#nextCard2').removeClass('disabled');
            })
        })
        $('#nextCard2').on('click', function(){
            $('#cardStep3').removeClass('inactive');
            $('#cardStep3 .card-data-entry').removeClass('hide');
            $('#cardStep3 .card-data-entry').addClass('show');
            var payment = $("[name=paymentMethods]:checked").val()
            if(payment=='paypal'){
                $('.paypal_checkouts').removeClass('hide');
                $('.paypal_checkouts').addClass('show');
                $('.strip_checkouts').removeClass('show');
                $('.strip_checkouts').addClass('hide');
            }
            if(payment=='strip'){
                $('.paypal_checkouts').removeClass('show');
                $('.paypal_checkouts').addClass('hide');
                $('.strip_checkouts').removeClass('hide');
                $('.strip_checkouts').addClass('show');
            }
        });

    </script>

{{-- stripe payment  --}}
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_SANDBOX_CLIENT_ID')}}"></script>

<script type="text/javascript">
$(function() {
    var $form         = $(".validation");
  $('form.validation').bind('submit', function(e) {
    var $form         = $(".validation"),
        inputVal = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputVal),
        $errorStatus = $form.find('div.error'),
        valid         = true;
        $errorStatus.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorStatus.removeClass('hide');
        e.preventDefault();
      }
    });
  
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-num').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeHandleResponse);
    }
  
  });
  
  function stripeHandleResponse(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
  
});
</script>

</body>

</html>

