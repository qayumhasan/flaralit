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

    <title>Grandfatheredly Blog</title>

    <style>
        .img-banner {
            height: 180px!important;
            width: 100%;
        }
    </style>
</head>

<body>
<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-branding text-center">
                    <a href="" class="custom-logo-link" rel="home">
                        <img width="666" height="65"
                             src="https://blog.appsumo.com/wp-content/uploads/2021/07/as-blog-logo.svg"
                             class="custom-logo" alt="Grandfatheredly Blog">
                    </a>
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

<section class="featured-area">
    <div class="container">
        <div class="row">
            @foreach($featured_blogs as $featured_blog)
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <article class="featured-post pb-3">
                        <div class="post-thumbnail">
                            <a href="{{ route('blog_detail', $featured_blog->slug) }}">
                                <img src="{{ get_thumbnail_image($featured_blog->cover_image) }}"
                                     class="img-banner" alt="Blog Image" loading="lazy">
                            </a>
                        </div>
                        <div class="category-list text-secondary">
                            Featured,
                            @foreach($featured_blog->categories as $category)
                                {{ strtoupper($category->name) }} {{ !$loop->last ? ',' : null }}
                            @endforeach
                        </div>
                        <h2 class="entry-title">
                            <a href="{{ route('blog_detail', $featured_blog->slug) }}">{{ $featured_blog->title }}</a>
                        </h2>
                        <p>{!! substr($featured_blog->introduction, 0, 250) !!}...</p>
                        <div class="byline">
                            <img src="{{static_asset(($featured_blog->user->image != null) ? $featured_blog->user->image : get_default_user_image() )}}">
                            <small class="text-secondary">By <a href="">{{ $featured_blog->user->name }}</a></small>
                            <hr>
                        </div>
                        <a href="{{ route('blog_detail', $featured_blog->slug) }}" class="read-more">
                            <small>Read More &gt;</small>
                        </a>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="latest_post">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="lp_title">
                    <h2>Latest Posts</h2>
                    <hr>
                </div>
                @foreach($latest_blogs as $latest_blog)
                    <article class="latest_post_single mb-5">
                        <div class="index-post-thumbnail"
                             style="background-image:url({{ get_thumbnail_image($latest_blog->cover_image) }});">
                            <a href="{{ route('blog_detail', $latest_blog->slug) }}"
                               style="background-image:url({{ get_thumbnail_image($latest_blog->cover_image) }});">
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="category-list text-secondary">
                                @foreach($latest_blog->categories as $category)
                                    {{ strtoupper($category->name) }} {{ !$loop->last ? ',' : null }}
                                @endforeach
                            </div>
                            <header class="entry-header">
                                <h2 class="entry-title">
                                    <a href="{{ route('blog_detail', $latest_blog->slug) }}" rel="bookmark">{{ $latest_blog->title }}</a>
                                </h2>
                            </header>
                            <div class="entry-content">
                                <p>{!! substr($latest_blog->introduction, 0, 250) !!}...</p>
                                <div class="byline">
                                    <img src="{{static_asset(($latest_blog->user->image != null) ? $latest_blog->user->image : get_default_user_image() )}}">
                                    <small class="text-secondary">By <a href="">{{ $latest_blog->user->name }}</a></small>
                                    <hr>
                                </div>
                                <a href="{{ route('blog_detail', $latest_blog->slug) }}" class="read-more">
                                    <small>Read More &gt;</small>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="col-md-4">
                <div class="side_bar pl-5 ">
                    <form role="search" method="GET" class="search-form" action="{{ route('blog_search') }}">
                        <div class="search_bar ">
                            <input type="text" class="form-control" placeholder="Search …" value="" name="search">
                            <input type="submit" class="btn btn-primary search_button" value="Search">
                        </div>
                    </form>
                    <div class="side_bar_section_one mt-5">
                        <a href="{{ route('blog_detail','test_blog') }}"
                           target="_blank" rel="noopener">
                            <img style="width:100%; border-radius:5px;"
                                 src="https://blog.appsumo.com/wp-content/uploads/2021/03/AS-Plusgraphic.gif"
                                 alt="join Grandfatheredly Plus">
                        </a>
                    </div>
                    <div class="static_sidebar2">
                        <div class="side_bar_section_two mt-4">
                            <div class="sidebar-box sitewide-10off">
                                <img class="img-fluid"
                                     src="https://blog.appsumo.com/wp-content/uploads/2021/08/1628671003.png"
                                     alt="Grandfatheredly's Essential Marketing Start Guide">
                                <h2 class="widget-title"><strong>Essential marketing start guide</strong></h2>
                                <div class="border"></div>
                                <p>
                                    Level up your digital marketing with our best tips for freelancers and agencies.
                                </p>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Get it today
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer_area" id="footer">
    <div class="container">
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