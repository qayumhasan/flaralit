@php
use App\Models\Order;
@endphp
@extends('frontend.layouts.master')
@push('style')
<link rel="stylesheet" href="https://appsumo2-cdn.appsumo.com/static/dist/css/base.89a21e9d3213.css" type="text/css">
<link rel="stylesheet" href="https://appsumo2-cdn.appsumo.com/static/dist/css/user_profile_update.cf4cd16e0de0.css"
    type="text/css">
<style>
    form.login-fields {
        text-align: left;
    }
</style>
@endpush
@section('content')


<section class="pt-20 pt-lg-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-30">Profile</h1>
            </div>
        </div>
    </div>
</section>
<section class="pb-50">
    <div class="container">
        <div class="row pb-0 pb-md-50">
            <div class="col-12 d-flex align-items-center justify-content-start flex-column flex-sm-row mb-30">

                <img class="rounded-circle mr-sm-20"
                    src="https://appsumo2-cdn.appsumo.com/static/images/profile/as-profile-default-avatar.svg"
                    width="100" height="100">

                <form id="profile-avatar" action="" class="upload-file" method="post" enctype="multipart/form-data">

                    <div class="form-group mt-30 mt-sm-0">
                        <input type="file" id="profile-avatar-input" name="avatar" onchange="this.form.submit()">
                        <button id="profile-avatar-upload" type="submit" class="btn btn-secondary btn-upload">Upload
                            picture</button>
                    </div>
                </form>
            </div>
            <!-- Close Col -->
            <div class="col-12">
                <form class="login-fields" method="post">
                    <input type="hidden" name="csrfmiddlewaretoken"
                        value="8IDVxUSfpuBDZgfEpBNkGFwXhhuKTwNVE1oCZyNS49qw5sGv1zyJJwB4HNWb7TDK">

                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-8">






                            <div class="form-group mb-30">
                                <label for="id_username">Username</label>


                                <input type="text" name="username" value="yawamom480" maxlength="150"
                                    class="form-control" required="" id="id_username">



                                <small class="form-text text-muted">Required. Letters, digits, and +/./-/_ characters
                                    only.</small>

                            </div>

                            <div class="form-group mb-30">
                                <label for="id_company">Company</label>


                                <input type="text" name="company" placeholder="Company" maxlength="255"
                                    class="form-control" id="id_company">



                            </div>

                            <div class="form-group mb-30">
                                <label for="id_title">Job title</label>


                                <input type="text" name="title" placeholder="Title" maxlength="255" class="form-control"
                                    id="id_title">



                            </div>

                            <div class="form-group mb-30">
                                <label for="id_vat_id">VAT ID</label>


                                <input type="text" name="vat_id" placeholder="VAT ID" maxlength="15"
                                    class="form-control" id="id_vat_id">



                                <small class="form-text text-muted">EU customers only</small>

                            </div>


                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-8">

                            <div class="form-group mb-30">
                                <label for="id_billing_name">Company name</label>


                                <input type="text" name="billing_name" maxlength="255" class="form-control"
                                    id="id_billing_name">



                                <small class="form-text text-muted">Billing entity name</small>

                            </div>

                            <div class="form-group mb-30">
                                <label for="id_billing_address1">Company address</label>


                                <input type="text" name="billing_address1" maxlength="255" class="form-control"
                                    id="id_billing_address1">



                            </div>

                            <div class="form-group mb-30">
                                <label for="id_billing_address2">Company address 2</label>


                                <input type="text" name="billing_address2" maxlength="255" class="form-control"
                                    id="id_billing_address2">



                            </div>

                            <div class="form-group mb-30">
                                <label for="id_billing_city">Company city</label>


                                <input type="text" name="billing_city" maxlength="255" class="form-control"
                                    id="id_billing_city">



                            </div>

                            <div class="form-group mb-30">
                                <label for="id_billing_state">Company state</label>


                                <input type="text" name="billing_state" maxlength="255" class="form-control"
                                    id="id_billing_state">



                            </div>

                            <div class="form-group mb-30">
                                <label for="id_billing_postal_code">Company postal code</label>


                                <input type="text" name="billing_postal_code" maxlength="32" class="form-control"
                                    id="id_billing_postal_code">



                            </div>

                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <h3 class="mb-2">Password</h3>
                            <div class="d-flex flex-column flex-md-row" id="sendInstructionBlock">
                                <button type="submit"
                                    class="btn btn-secondary btn-reset-password order-1 order-md-2 mb-10 mb-md-0">
                                    Reset password
                                </button>
                            </div>
                            <div id="instructionSentBlock" class="d-none">
                                <p>
                                    For your security, password reset instructions have been sent to your email address:
                                </p>
                                <div class="d-flex flex-column flex-md-row" id="emailPlaceholder"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-12">
                            <h3 class="mb-2">Customize category preferences</h3>
                            <div class="d-flex flex-column flex-md-row" id="user-preferences">
                                <button type="button"
                                    class="btn btn-secondary btn-user-preferences order-1 order-md-2 mb-10 mb-md-0"
                                    id="show-survey-btn">
                                    Update preferences
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <hr class="d-none d-md-block">
                        </div>
                    </div>
                    <div class="row mt-md-20 mt-4">
                        <div class="col-lg-12 d-flex flex-column flex-md-row justify-content-end">
                            <div class="d-flex flex-column flex-md-row">
                                <button type="submit"
                                    class="btn btn-primary btn-save-user-profile order-1 order-md-2 mb-10 mb-md-0">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Close Col -->
        </div>
    </div>
</section>

@endsection