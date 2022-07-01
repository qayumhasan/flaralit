@php
use App\Models\Order;
@endphp
@extends('frontend.layouts.master')
@push('style')
<style>
  .card {
    width: 100%;
  }
</style>
@endpush
@section('content')

<div data-v-71dfcb0f="" class="account-container">
  <section data-v-71dfcb0f="" class="account-overview-heading">
    <div data-v-71dfcb0f="" class="d-flex align-items-md-center flex-column flex-md-row mb-4">
      <h1 data-v-71dfcb0f="" class="mb-3 ml-2">
        Account overview
      </h1>
    </div>
  </section>

  <section data-v-71dfcb0f="" class="account-overview-content text-center p-4">
    <div data-v-71dfcb0f="" class="row">
      
      <div data-v-71dfcb0f="" class="sumo-new-grid col-lg-4 col-md-6 d-flex">
        <div data-v-71dfcb0f="" class="card">
          <a href="{{route('account-products')}}" style="text-decoration:none;">
          <img data-v-71dfcb0f=""
            src="https://appsumo2nuxt-cdn.appsumo.com/cfa57d2594a952d8d37006a23c9be7b0.svg" width="auto" height="50"
            alt="Products" class="my-10">
          <h2 data-v-71dfcb0f="">Products</h2>
          <p data-v-71dfcb0f="" class="light">
            Track, redeem, or refund products
          </p>
          </a>

        </div> 
      </div>

      <div data-v-71dfcb0f="" class="sumo-new-grid col-lg-4 col-md-6 d-flex">
        <div data-v-71dfcb0f="" class="card">
          <a href="{{route('account-profile')}}" style="text-decoration:none;">
          <img data-v-71dfcb0f=""
            src="https://appsumo2nuxt-cdn.appsumo.com/8122f8325bc890147bdad610d4a0d499.svg" width="auto" height="50"
            alt="Profile" class="my-10">
          <h2 data-v-71dfcb0f="">Profile</h2>
          <p data-v-71dfcb0f="" class="light">
            Edit username, password, and profile picture
          </p>
          </a>
        </div>
      </div>

      <div data-v-71dfcb0f="" class="sumo-new-grid col-lg-4 col-md-6 d-flex">
        <div data-v-71dfcb0f="" class="card">
          <a href="{{route('account-email')}}" style="text-decoration:none;">
          <img data-v-71dfcb0f=""
            src="https://appsumo2nuxt-cdn.appsumo.com/2c9fcad78045ab9eb9d4a918dae58d81.svg" width="auto" height="50"
            alt="Email settings" class="my-10">
          <h2 data-v-71dfcb0f="">Email settings</h2>
          <p data-v-71dfcb0f="" class="light">
            Add email, verify existing email, resend verification
          </p>
          </a>
        </div>
      </div>

      <div data-v-71dfcb0f="" class="sumo-new-grid col-lg-4 col-md-6 d-flex">
        <div data-v-71dfcb0f="" class="card">
          <a href="{{route('account-credits')}}" style="text-decoration:none;">
          <img data-v-71dfcb0f=""
            src="https://appsumo2nuxt-cdn.appsumo.com/65d3b74837029151084d7b13dfba2108.svg" width="auto" height="50"
            alt="Rewards" class="my-10">
          <h2 data-v-71dfcb0f="">Rewards</h2>
          <p data-v-71dfcb0f="" class="light">
            Review your credits and gift cards
            <br data-v-71dfcb0f="">
            Credit balance:
            <span data-v-71dfcb0f="" class="sumo-price-green">
              $0.00
            </span>
            <!---->
            <!---->
          </p>
          </a>
        </div> <a data-v-71dfcb0f="" href="/account/credits/" class="sumo-card-link"></a>
      </div>

      <div data-v-71dfcb0f="" class="sumo-new-grid col-lg-4 col-md-6 d-flex">
        <a href="{{route('account-credits')}}" style="text-decoration:none;">
        <div data-v-71dfcb0f="" class="card"><img data-v-71dfcb0f=""
            src="https://appsumo2nuxt-cdn.appsumo.com/65d3b74837029151084d7b13dfba2108.svg" width="auto" height="50"
            alt="Payment" class="my-10">
          <h2 data-v-71dfcb0f="">Payment</h2>
          <p data-v-71dfcb0f="" class="light">
            Manage your credit cards
          </p>
        
        </a>
        </div>
      </div>

      <div data-v-71dfcb0f="" class="sumo-new-grid col-lg-4 col-md-6 d-flex">
        <div data-v-71dfcb0f="" class="card"><img data-v-71dfcb0f=""
            src="https://appsumo2nuxt-cdn.appsumo.com/e881b52002c2b619b9970035e3c37526.svg" width="auto" height="50"
            alt="Plus membership" class="my-10">
          <h2 data-v-71dfcb0f="">Plus membership</h2>
          <p data-v-71dfcb0f="" class="light">
            Manage your Grandfatheredly Plus membership
          </p>
        </div> <a data-v-71dfcb0f="" href="/account/plus/" class="sumo-card-link"></a>
      </div>

      <div data-v-71dfcb0f="" class="sumo-new-grid col-lg-4 col-md-6 d-flex">
        <div data-v-71dfcb0f="" class="card sell-on-appsumo-card">
          <div data-v-71dfcb0f="" class="sell-wrapper"><img data-v-71dfcb0f=""
              src="https://appsumo2nuxt-cdn.appsumo.com/2a4a3b645be5bba4a299794388b49a21.svg" alt="Sell on AppSumo"
              class="accent-semi"> <img data-v-71dfcb0f=""
              src="https://appsumo2nuxt-cdn.appsumo.com/c7af8394355fddb864a77caa75617615.svg" width="9" height="9"
              alt="Sell on AppSumo" class="small-sparkle"> <img data-v-71dfcb0f=""
              src="https://appsumo2nuxt-cdn.appsumo.com/a13eec9fa8f6c0ff9c2c407c095ab503.svg" width="40" height="40"
              alt="Start Selling"> <img data-v-71dfcb0f=""
              src="https://appsumo2nuxt-cdn.appsumo.com/42f2d4788b40de9799bb32557850f146.svg" alt="Sell on AppSumo"
              width="14" height="14" class="big-sparkle"></div>
          <h2 data-v-71dfcb0f="" class="sell-on-appsumo"><a data-v-71dfcb0f=""
              href="https://sell.appsumo.com/?ref=account_page&amp;_fs=f50ba641-444c-43b6-a056-b9ed71ea70a9"
              class="sell-on-appsumo">Sell products.</a></h2>
          <h2 data-v-71dfcb0f="" class="sell-on-appsumo">
            <div data-v-71dfcb0f="" default="default"><a data-v-71dfcb0f=""
                href="https://sell.appsumo.com/?ref=account_page&amp;_fs=f50ba641-444c-43b6-a056-b9ed71ea70a9"
                class="sell-on-appsumo">Earn cash.</a></div>
          </h2>
          <p data-v-71dfcb0f="" class="start-making-money">
            Start making money on Grandfatheredly
          </p>
        </div> <a data-v-71dfcb0f=""
          href="https://sell.appsumo.com/?ref=account_page&amp;_fs=f50ba641-444c-43b6-a056-b9ed71ea70a9"
          class="sumo-card-link"></a>
      </div>

    </div>
  </section>

  <section data-v-71dfcb0f="" class="px-4 py-5">
    <div data-v-71dfcb0f="" class="row">
      <div data-v-71dfcb0f="" class="col-12">
        <div data-v-71dfcb0f="">
          <h2 data-v-71dfcb0f="" class="mb-20">
            Hey Briefcase Members - Get 10% Off
          </h2>
        </div>
        <div data-v-71dfcb0f="">
          <p data-v-71dfcb0f="">Log in to your Briefcase account to sync your Grandfatheredly profile.</p> <a data-v-71dfcb0f=""
            href="/oidc/authenticate/" class="btn btn-secondary">
            Sync with Briefcase
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection