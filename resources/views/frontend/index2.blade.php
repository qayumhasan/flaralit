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

                            <div class='form-row row'>
                                <div class='col-md-12 hide error form-group'>
                                    <div class='alert-danger alert'>Fix the errors before you begin.</div>
                                </div>
                            </div>
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