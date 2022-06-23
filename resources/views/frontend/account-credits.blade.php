@php
use App\Models\Order;
@endphp
@extends('frontend.layouts.master')
@push('style')
<link rel="stylesheet" href="https://appsumo2-cdn.appsumo.com/static/dist/css/user_account_credits.40552acf83de.css"
    type="text/css">
<style>
    .card.card-dark p {
        font-size: 0.95em;
        text-align: left !important;
        font-weight: 500 !important;
    }
</style>
@endpush
@section('content')


<section class="pt-20 pt-lg-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Credits</h1>
                <h2 class="my-20">Credit balance</h2>
            </div>
        </div>
    </div>
</section>
<section class="pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-dark">
                    <div class="card-header d-flex align-items-center align-items-end">
                        <span class="sumo-credit-img mb-0 mr-20">$0.00</span>
                        <span
                            class="sumo-card-info d-flex align-items-lg-center flex-column flex-lg-row align-items-start mr-20">
                            <h2 class="h5 mb-0 mb-0 mr-auto">
                                <b>You currently have <span class="sumo-price-green">$0.00</span>
                                    of credits in your account balance.</b>
                            </h2>
                        </span>
                    </div>

                    <div class="card-body cscs">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-10">
                                <p>Quick tips: <br>- These credits never expire* <br>- Cannot be shared or sent to
                                    another account or person*</p>
                            </div>
                        </div>
                        <!-- Giftcard redeem form -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-10">
                                <h3 class="h3">Redeem a gift card</h3>
                                <form action="/account/giftcard/redeem/" method="post"
                                    class="md-form form-inline pb-4 ">
                                    <input type="hidden" name="csrfmiddlewaretoken"
                                        value="1Sx7V6xaHMsQ6fvqaAj7XQKOKQyXJx6sxbiOnKsNmrhJcrWhMy4w0HPVam0oXUWh">
                                    <input type="text" id="code" name="code" placeholder="Gift card"
                                        class="form-control mr-3" value="">
                                    <button class="btn btn-primary mt-3 mt-lg-0 d-inline">Redeem</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- End Card Body -->
                </div>
            </div>
        </div>
    </div>
</section>










<section class="pb-50">
    <div class="container">
        <div class="row pb-50">
            <div class="col-12">
                <h2 class="mb-20 text-center">Sharing is caring</h2>


                <div class="friendbuy-euA-soF"><iframe class="9bf0-8ed2_frndby_iframe" frameborder="false"
                        scrolling="no" title="Friendbuy: Refer a Friend"
                        style="position: relative; z-index: 2; border: 0px; height: 600px; left: 0px; top: 0px; width: 100%; overflow: hidden; max-height: 1000px;"
                        src="https://cdn1.friendbuy.com/widgets/16642/70091/widget.html#https%3A%2F%2Fappsumo.com%2Faccount%2Fcredits%2F%239bf0-8ed2"
                        id="fbuy_iFrameResizer"></iframe></div>

                <script>
                    window['friendbuy'] = window['friendbuy'] || [];
      window['friendbuy'].push(['widget', "euA-soF"]);
                </script>



            </div>
        </div>
    </div>
</section>


@endsection