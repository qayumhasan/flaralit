@php
use App\Models\Order;
@endphp
@extends('frontend.layouts.master')
@push('style')
<link rel="stylesheet" href="https://appsumo2-cdn.appsumo.com/static/dist/css/base.89a21e9d3213.css" type="text/css">

<style>
    [type=checkbox],
    [type=radio] {
        position: inherit;
        left: initial;
        visibility: visible;
    }

    .badge-verified,
    .badge-unverified,
    .badge-primary {
        color: #FFF;
        font-size: 10px;
        line-height: 18px;
        padding: 5px 10px;
        border-radius: 5px;
        letter-spacing: 0.02em;
    }

    .badge-verified {
        background: #003c3e;
    }

    .badge-unverified {
        background: #D63031;
    }

    .badge-primary {
        background: #33aed5;

    }

    /* Hide the asterisk for the email label */
    .hide-asterisk .asteriskField {
        display: none;
    }
</style>
@endpush
@section('content')



<div class="container">
    <div class="row">
        <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1 mb-5 ">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                    <div class="container pt-5 pb-5">
                        <div class="row">
                            <div class="col mb-4">
                                <h1>E-mail Addresses</h1>
                            </div>
                        </div>


                        <p class="mb-4">The following e-mail addresses are associated with your account:</p>

                        <form action="/accounts/email/" class="email_list" method="post">
                            <input type="hidden" name="csrfmiddlewaretoken"
                                value="BKnXaWwykeWZFTsA95c3UfR51cWCJaKz738ECArbZTLSL5TrL3XsX6WcrIo3XxAo">
                            <fieldset class="blockLabels">


                                <div class="radio">
                                    <label for="email_radio_1" class="primary_email">

                                        <input id="email_radio_1" type="radio" name="email" checked="checked"
                                            value="yawamom480@minimeq.com">

                                        yawamom480@minimeq.com

                                        <span class="unverified badge-unverified ml-4">Unverified</span>


                                        <span class="primary badge-primary ml-4">Primary</span>

                                    </label>
                                </div>

                                <hr>
                                <div class="form-group mt-4">
                                    <button class="secondaryAction btn btn-primary mb-3 mt-mb-0" type="submit"
                                        name="action_primary">Make Primary</button>
                                    <button class="secondaryAction btn btn-primary mb-3 mt-mb-0" type="submit"
                                        name="action_send">Re-send Verification</button>
                                    <button class="primaryAction btn btn-primary mb-3 mt-mb-0" type="submit"
                                        name="action_remove">Remove</button>
                                </div>

                            </fieldset>
                        </form>


                        <div class="row">
                            <div class="col-lg-9 mt-4">
                                <h2>Add E-mail Address</h2>

                                <form method="post" action="/accounts/email/" class="add_email hide-asterisk">
                                    <input type="hidden" name="csrfmiddlewaretoken"
                                        value="BKnXaWwykeWZFTsA95c3UfR51cWCJaKz738ECArbZTLSL5TrL3XsX6WcrIo3XxAo">


                                    <div id="div_id_email" class="form-group"> <label for="id_email"
                                            class=" requiredField">
                                            Email<span class="asteriskField">*</span> </label>
                                        <div class=""> <input type="email" name="email" class="emailinput form-control"
                                                required="" id="id_email"> </div>
                                    </div>

                                    <button class="btn btn-primary mt-4 float-right" name="action_add" type="submit">Add
                                        E-mail</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection