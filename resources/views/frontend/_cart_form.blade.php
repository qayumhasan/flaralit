<div class="row">
    <div class="col-md-6">
<div class="cart-form" id="cart-items">
    <div class="card checkout-card dark">
        <div class="card-header">
            <h2 class="h3">Deals</h2>
        </div>
        <!-- End Card Header -->
        <div class="card-body">

            <!-- Desktop Table -->
            <div class="d-lg-block" id="cart_table">
                @php
                $cart = session()->get('cart');
                $total = 0;
                $subtotal = 0;
                @endphp
                @if($cart)
                <table class="table sumo-purchases-table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"><span>Product</span></th>
                            <th scope="col" class="no-left-padding"><span>Plan</span>
                            </th>
                            <th scope="col"><span>Quantity</span></th>
                            <th scope="col" class="text-center"><span>Price</span></th>
                            <th scope="col" class=""></th>
                            <th scope="col" class=""></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $key=>$product)
                        @php
                        $single = $product['price'] * $product['quantity'];
                        $subtotal += $single;
                        @endphp
                        <tr class="cart_item" data-item-id="141707" data-plan-id="153215">
                            <td class="sumo-td-img">
                                <img class="rounded-border" src="{{ static_asset($product['photo']) }}" width="50"
                                    height="auto">
                            </td>
                            <td class="sumo-td-name">
                                <a class="sumo-title" href="#" target="_blank">
                                    <b>{{ $product['name'] }}</b></a>
                            </td>
                            <td class="no-left-padding">
                                <span class="cart-text">Code-based</span>
                                <span data-toggle="popover" data-html="true"
                                    data-content="<p>Use the code(s) provided by Grandfatheredly on the partner’s website to redeem your purchase.</p>">
                                    <img src="https://appsumo2-cdn.appsumo.com/static/images/svg/icon-question.svg" />
                                </span>
                            </td>
                            <td>
                                <div class="form-group mb-0">
                                    <select class="custom-select quantity" id="quantity" aria-describedby="Quantity"
                                        productId={{ $key}} style="display:inline-block!important">
                                        <option value="1" {{ ($product['quantity']==1 ? 'selected' : null) }}>1</option>
                                        <option value="2" {{ ($product['quantity']==2 ? 'selected' : null) }}>2</option>
                                        <option value="3" {{ ($product['quantity']==3 ? 'selected' : null) }}>3</option>
                                    </select>
                                </div>
                            </td>
                            <td class="sumo-td-price text-center">
                                <span class="cart-text">${{ number_format($product['price'], 2) }}</span>
                            </td>

                            <td class="sumo-td-chips sumo-chips">

                            </td>

                            <td class="sumo-td-remove sumo-remove">
                                <button style="display:inline-flex;border:none!important"
                                    onclick="delete_cart_item('{{ $key }}')"><img class="trash-icon"
                                        src="https://appsumo2-cdn.appsumo.com/static/images/svg/trash-outline.svg" />
                                </button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                @else
                Your cart is empty!
                @endif
            </div>
            <!-- Close Desktop Table -->
        </div>
    </div>
</div>
</div>

<div class="col-md-6">
    <div class="card checkout-card mb-30 mt-30 mt-lg-0">
        <div class="card-header">
            <h2 class="h3">Summary</h2>
        </div>
        <!-- End Card Header -->
        <div id="cart-summary" class="card-body">
            <input class="bf-coupon-applied" type="hidden" value="None" />
            <div class="mt-10 mb-20">

                <div>
                    <div class="as-checkout-entry">
                        <strong>Subtotal</strong>
                        <strong>${{ number_format($subtotal, 2) }}</strong>
                    </div>
                    <div class="as-checkout-entry" id="checkout-total" data-total="99.00">
                        <strong class="as-checkout-total">Total</strong>
                        <strong class="as-checkout-total-price" id="totalprice_sidebar totalprice_mobile">$
                            {{ number_format($subtotal, 2) }}</strong>
                    </div>
                </div>
            </div>
            <a id="cart-proceed-to-checkout-cta" class="btn btn-primary full-width mb-10"
                href="{{ route('checkout') }}">
                Proceed to checkout
            </a>
            {{-- <a id="cart-proceed-to-checkout-cta" class="btn btn-primary full-width mb-10" data-toggle="modal"
                data-target="#upsellModal">
                Proceed to checkout
            </a> --}}


            <a href="{{ route('browse') }}" class="btn btn-secondary full-width d-none d-lg-block mb-10"
                id="VWO-continue-shopping">Continue shopping</a>

            {{--
            <div class="modal fade" id="upsellModal" aria-labelledby="upsellModalLabel" aria-hidden="true">
                <div class="modal-dialog appsumo-modal-container">
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="appsumo-modal-title" id="exampleModalLabel">But
                                wait, there’s more...</span>
                        </div>
                        <div class="modal-body">
                            <p class="upsell-text">
                                We know you'll love LeadScripts, so do yourself a favor
                                and get even more out of this deal!
                                (Beats going through checkout again and hearing us say
                                <em>"we told you so."</em>)
                            </p>
                            <div class="upsell-deal-content">
                                <div class="upsell-deal-image">


                                    <img class="rounded-border"
                                        src="https://appsumo2-cdn.appsumo.com/media/cache/d7/74/d774c50f5a5ca843d610b668bb835a4b.png"
                                        width="50" height="auto">


                                </div>
                                <div id="upsell-quantity" data-quantity="2">

                                    <div>
                                        <span>Add <strong>1</strong> additional code for
                                        </span>
                                        <a href="/products/leadscripts/" target="_blank">LeadScripts</a>
                                    </div>

                                    <p class="upsell-price">$99.00</p>
                                </div>
                            </div>
                            <button id="upsell-add-to-cart" data-item-id="141707" type=button
                                class="btn btn-secondary upsell-button">
                                Add to Cart
                            </button>
                            <div id="upsell-complete-text" class="as-hidden upsell-complete" aria-hidden="true">
                                <span>
                                    <img class="upsell-check"
                                        src="{{ static_asset('assets/frontend/cart/img/checked_green.svg') }}" />
                                </span>

                                <span>Item added!</span>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <a id="upsell-incomplete-checkout" href="{{ route('checkout') }}"
                                class="upsell-checkout-link">
                                No thanks, take me to checkout
                            </a>
                            <a id="upsell-complete-checkout" href="{{ route('checkout') }}"
                                class="btn btn-primary full-width as-hidden" aria-hidden="true">
                                Continue to Checkout
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="sumo-cart-supplement">
                <p class="sumo-cart-supplement-header">Buy with confidence</p>
                <ul class="list-inline mt-20">


                    <li class="d-flex">
                        <img class="sumo-icon" width="auto" height="20px"
                             src="{{ static_asset('assets/frontend/cart/img/calendar.svg')}}">
                        <span><b>Try any product risk-free.</b>
                                We offer an industry-leading 60-day money-back guarantee &mdash; no
                                matter the reason.
                                Take any of our products for a spin to see if they’re a good fit for
                                you.
                            </span>
                    </li>


                    <li class="d-flex">
                        <img class="sumo-icon" width="auto" height="20px"
                             src="{{ static_asset('assets/frontend/cart/img/lifebuoy.svg')}}">
                        <span>
                                <b>World-class customer support.</b>
                                There’s customer support, and then there’s Grandfatheredly customer
                                support.
                                We take pride in going above and beyond to keep our community happy.
                            </span>
                    </li>
                    <li class="d-flex">
                        <img class="sumo-icon" width="auto" height="20px"
                             src="{{ static_asset('assets/frontend/cart/img/message-text.svg')}}">
                        <span>
                                <b>Talk to founders and CEOs.</b>
                                Ask your burning questions on any active deal and get answers from
                                the founders and C-level execs themselves.
                            </span>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</div>
</div>