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
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5 mb-5">
                    <div class="card text-center pt-5 pb-5">
                        <h2 class="text-success">
                            @if ($success)
                            {!! $success !!}
                            @endif
                        </h2>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection