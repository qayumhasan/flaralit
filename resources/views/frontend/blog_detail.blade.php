<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{static_asset('assets/frontend/assets/blog/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{static_asset('assets/frontend/assets/blog/css/style.css')}}" rel="stylesheet">
    <link href="{{static_asset('assets/frontend/assets/blog/css/responsive.css')}}" rel="stylesheet">

    <title>Grandfatheredly Blog</title>
</head>

<body>
<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-branding text-center">
                    <a href="" class="custom-logo-link" rel="home"><img width="666" height="65"
                                                                        src="https://blog.appsumo.com/wp-content/uploads/2021/07/as-blog-logo.svg"
                                                                        class="custom-logo" alt="Grandfatheredly Blog"></a>
                </div>
            </div>
            <div class="col md-12 nav_bar">
                <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                    <div class="container">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('blogs') }}">Blog
                                        Posts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('browse') }}">Browse products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Sell on Grandfatheredly</a>
                                </li>
                                <li class="nav-item gwg_custom">
                                    <a class="nav-link" href="#">Get weekly goodies</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="latest_post">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog_details mt-5">
                    <img src="{{ static_asset('storage/' . $blog->cover_image) }}"
                         alt="" class="img-fluid">
                    <div class="blog_details_content">
                        <div class="post-content post-thumbnail ">
                            <div class="category-list text-secondary">
                                {{ $blog->is_featured == true ? 'FEATURED' : null }},
                                @foreach($blog->categories as $category)
                                    {{ strtoupper($category->name) }} {{ !$loop->last ? ',' : null }}
                                @endforeach
                            </div>
                            <header class="entry-header">
                                <h1 class="entry-title">{{ $blog->title }}</h1>
                                <div class="border"></div>
                            </header>
                            <div class="entry-content">
                                <p>{!! $blog->introduction !!}</p>
                                <!--noindex-->
                                <div class="lwptoc lwptoc-light lwptoc-notInherit" data-smooth-scroll="1"
                                     data-smooth-scroll-offset="36" data-lwptoc-initialized="1">
                                    <div class="lwptoc_i">
                                        <div class="lwptoc_header">
                                            <b class="lwptoc_title">Table of Contents</b> <span
                                                    class="lwptoc_toggle">
                                                    <a id="hide_collups" class="lwptoc_toggle_label">hide</a>
                                                </span>
                                        </div>
                                        <div class="lwptoc_items lwptoc_items-visible">
                                            <div class="lwptoc_itemWrap">
                                                @php $counter = 1; @endphp
                                                @foreach($blog->contents as $content)
                                                    <div class="lwptoc_item">
                                                        <a href="#{{$counter}}_content" rel="nofollow">
                                                            <span class="lwptoc_item_label">{{ $counter }}. {{ $content->title }}</span>
                                                        </a>
                                                    </div>
                                                    @php $counter++; @endphp
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/noindex-->
                                <div class="partner-callout-box">
                                    <h2>Sell on the leading digital marketplace for entrepreneurs</h2>
                                    <p>With Grandfatheredly, you don’t have to be a marketing pro to boost your sales and
                                        connect with excited new customers. Focus on building the best product you
                                        can. Let us be your engine for growth.</p>
                                    <p>
                                        <a href="" target="_blank" rel="noopener">
                                            <button class="btn btn-primary btn-block">Start selling on
                                                Grandfatheredly
                                            </button>
                                        </a>
                                    </p>
                                </div>
                                <div class="blog_bottom_content mt-5">
                                    @php $counter = 1; @endphp
                                    @foreach($blog->contents as $content)
                                        <h2><span id="{{$counter}}_content"><strong>{{ $counter }}. {{ $content->title }}</strong></span></h2>
                                        <p>{!! $content->content !!}</p>
                                        @php $counter++; @endphp
                                    @endforeach
                                    <div class="byline">
                                        <img src="{{static_asset(($blog->user->image != null) ? $blog->user->image : get_default_user_image() )}}">
                                        <small class="text-secondary">By <a href="">{{ $blog->user->name }}</a></small>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="side_bar pl-5 mt-5">

                    <form role="search" method="get" class="search-form" action="{{ route('blog_search') }}">
                        <div class="search_bar ">
                            <input type="search" class="form-control" placeholder="Search …" value="" name="search">
                            <input type="submit" class="btn btn-primary search_button" value="Search">
                        </div>
                    </form>
                    <div class="static_sidebar">
                        <div class="sidebar-box side_bar_section_one">
                            <div class="hero-bg">
                            </div>
                            <div class="sidebar_box_content">
                                <h2 class="widget-title"><strong>
                                        Need tools to grow your business?</strong>
                                </h2>
                                <div class="border"></div>
                                <p>
                                    Get 10% off and subscribe for updates on the spiciest software, tools, and
                                    resources
                                    to scale faster.
                                </p>
                                <button class="btn btn-primary mt-3" data-sumome-trigger="true">
                                    Get 10% off
                                </button>
                            </div>
                        </div>

                        <div class="sidebar-box side_bar_section_two mt-4 pt-4">
                            <h2 class="widget-title"><strong>Featured posts</strong></h2>
                            <div class="border"></div>
                            <p><a href="{{ route('blog_detail','Money-Making') }}">9 Money-Making Online
                                    Business
                                    Ideas</a></p>
                            <p><a href="{{ route('blog_detail','How-to-Sell-Digital') }}">How to Sell Digital
                                    Downloads</a>
                            </p>
                            <p><a href="{{ route('blog_detail','Best-Screen-Recording') }}">Best Screen Recording
                                    Software</a></p>
                            <p><a href="{{ route('blog_detail','40-Best-Web-Design-Tools') }}">40 Best Web Design Tools
                                    &amp;
                                    Resources</a></p>
                            <p><a href="{{ route('blog_detail','8-Best-Free-Photo-Editors') }}">8 Best Free Photo
                                    Editors</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<footer class="footer_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="footer_single">
                    <h2>Featured Posts</h2>
                    <div class="border"></div>
                    <div class="textwidget">
                        <p><a href="">9 money-making online business
                                ideas</a><br>
                            <a href="">How to sell digital
                                downloads</a><br>
                            <a href="">Best screen recording
                                software</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_single">
                    <h2>Content Freebies
                    </h2>
                    <div class="border"></div>
                    <div class="textwidget">
                        <p><a href="">9 money-making online business
                                ideas</a><br>
                            <a href="">How to sell digital
                                downloads</a><br>
                            <a href="">Best screen recording
                                software</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_single">
                    <h2>More Links</h2>
                    <div class="border"></div>
                    <div class="textwidget">
                        <p><a href="">Shop Product</a><br>
                            <a href="">Sell on Grandfatheredly</a><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_single">
                    <h2>Grandfatheredly</h2>
                    <div class="border"></div>
                    <div class="textwidget">
                        <p><a href="">About</a><br>
                            <a href="">Careers</a><br>
                            <a href="">Affiliates</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{static_asset('assets/frontend/assets/blog/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{static_asset('assets/frontend/assets/blog/js/script.js')}}"></script>

</body>

</html>