<!doctype html>
<html lang="en" data-n-head-ssr>

<head>
    @stack('meta')
    @include('frontend.layouts._head')
    @stack('style')
    <style>
        .sumo-browse-page main {
            overflow-y: hidden;
        }

        .cta h5 span[data-v-463c957d] {
            color: #81cbb3;
        }

        a.appsumo-link.appsumo-rating-link.ml-2 {
            margin-bottom: 0px;
        }

        header .navbar-brand {

            width: 130px !important;
        }

        .contact-section-overlay {
            background-color: #293e40;
        }

        .spotlight-container {
            background-color: #293e40;
        }

        .spotlight-carousel {
            background-color: #293e40;
        }

        .green {
            color: #81cbb3;
        }



        .gain-tab.w--current,
        .text-span-10 {
            color: #81cbb3 !important;
        }

        .gain-tab:hover {
            background-color: rgba(7, 192, 59, .05);
            color: #81cbb3;
        }

        .section-2.main {
            background-color: #293e40;
        }

        .bold-text-14 {
            color: #81cbb3;
        }

        .text-span-4 {
            color: #81cbb3;
        }


        a.link-block-2.w-inline-block img {
            width: 140px;
        }


        .bg-primary {
            background-color: #81cbb3 !important;
        }
    </style>
</head>

<body class="sumo-browse-page search-sticky-header">

    <div id="__layout">
        <div data-fetch-key="0" class="primary-container">
            <header>
                @include('frontend.layouts.nav')
            </header>
            <main>
                @yield('content')
            </main>
            <footer>
                @include('frontend.layouts.footer')
            </footer>

        </div>
    </div>
    @include('frontend.layouts._script')
    @stack('script')
</body>

</html>