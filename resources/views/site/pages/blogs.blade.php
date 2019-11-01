@extends('site.layout')
@section('meta')
    <title>{{$config->site_name}} | @lang('web.Contact')</title>
    <meta name="description" content="{{$config->site_desc}}">
@endsection

@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Blog</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="current">
                            <a href="blog-4-column.html">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content-wrapper">
        <div class="blog-area pt--40 pb--80 pt-md--30 pb-md--60">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 mb--30">
                                <article class="post sticky single-post format-image">
                                    <div class="post-media">
                                        <div class="image">
                                            <a href="blog-details-image.html">
                                                <img src="{{$img}}/blog/blog1.jpg" alt="blog">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="entry-meta">
                                                    <span class="post-author">
                                                        <span class="post-by">Post By:</span>
                                                        admin
                                                    </span>

                                                <span class="post-date">Feb 02 2016</span>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="blog-details-image.html">Blog Image Post</a>
                                            </h2>
                                        </header>
                                        <div class="post-content">
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                                consequat, vel illum dolore eu feugiat nulla facilisis</p>
                                        </div>
                                        <a href="blog-details-image.html" class="btn btn-read-more btn-style-2">Continue Reading</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mb--30">
                                <article class="post single-post format-gallery">
                                    <div class="post-media">
                                        <div class="post-gallery nav-vertical-center">
                                            <div class="single-post-gallery">
                                                <img src="{{$img}}/blog/blog2-1024x613.jpg" alt="blog">
                                            </div>
                                            <div class="single-post-gallery">
                                                <img src="{{$img}}/blog/blog3.jpg" alt="blog">
                                            </div>
                                            <div class="single-post-gallery">
                                                <img src="{{$img}}/blog/blog5.jpg" alt="blog">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="entry-meta">
                                                    <span class="post-author">
                                                        <span class="post-by">Post By:</span>
                                                        admin
                                                    </span>

                                                <span class="post-date">Feb 02 2016</span>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="blog-details-gallery.html">Blog Gallery Post</a>
                                            </h2>
                                        </header>
                                        <div class="post-content">
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                                consequat, vel illum dolore eu feugiat nulla facilisis</p>
                                        </div>
                                        <a href="blog-details-gallery.html" class="btn btn-read-more btn-style-2">Continue Reading</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mb--30">
                                <article class="post single-post format-audio">
                                    <div class="post-media">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/182537870&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="entry-meta">
                                                    <span class="post-author">
                                                        <span class="post-by">Post By:</span>
                                                        admin
                                                    </span>

                                                <span class="post-date">Feb 02 2016</span>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="blog-details-audio.html">Blog Audio Post</a>
                                            </h2>
                                        </header>
                                        <div class="post-content">
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                                consequat, vel illum dolore eu feugiat nulla facilisis</p>
                                        </div>
                                        <a href="blog-details-audio.html" class="btn btn-read-more btn-style-2">Continue Reading</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mb--30">
                                <article class="post single-post format-video">
                                    <div class="post-media">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="entry-meta">
                                                    <span class="post-author">
                                                        <span class="post-by">Post By:</span>
                                                        admin
                                                    </span>

                                                <span class="post-date">Feb 02 2016</span>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="blog-details-video.html">Blog video Post</a>
                                            </h2>
                                        </header>
                                        <div class="post-content">
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                                consequat, vel illum dolore eu feugiat nulla facilisis</p>
                                        </div>
                                        <a href="blog-details-video.html" class="btn btn-read-more btn-style-2">Continue Reading</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mb--30">
                                <article class="post single-post format-standard">
                                    <div class="post-media">
                                        <div class="image">
                                            <a href="blog-details-image.html">
                                                <img src="{{$img}}/blog/blog3.jpg" alt="blog">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="entry-meta">
                                                    <span class="post-author">
                                                        <span class="post-by">Post By:</span>
                                                        admin
                                                    </span>

                                                <span class="post-date">Feb 02 2016</span>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="blog-details-image.html">Blog Image Post</a>
                                            </h2>
                                        </header>
                                        <div class="post-content">
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                                consequat, vel illum dolore eu feugiat nulla facilisis</p>
                                        </div>
                                        <a href="blog-details-image.html" class="btn btn-read-more btn-style-2">Continue Reading</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mb--30">
                                <article class="post single-post format-standard">
                                    <div class="post-media">
                                        <div class="image">
                                            <a href="blog-details-image.html">
                                                <img src="{{$img}}/blog/blog4-1024x613.jpg" alt="blog">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="entry-meta">
                                                    <span class="post-author">
                                                        <span class="post-by">Post By:</span>
                                                        admin
                                                    </span>

                                                <span class="post-date">Feb 02 2016</span>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="blog-details-image.html">Blog Image Post</a>
                                            </h2>
                                        </header>
                                        <div class="post-content">
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                                consequat, vel illum dolore eu feugiat nulla facilisis</p>
                                        </div>
                                        <a href="blog-details-image.html" class="btn btn-read-more btn-style-2">Continue Reading</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mb--30">
                                <article class="post single-post format-standard">
                                    <div class="post-media">
                                        <div class="image">
                                            <a href="blog-details-image.html">
                                                <img src="{{$img}}/blog/blog5.jpg" alt="blog">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="entry-meta">
                                                    <span class="post-author">
                                                        <span class="post-by">Post By:</span>
                                                        admin
                                                    </span>

                                                <span class="post-date">Feb 02 2016</span>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="blog-details-image.html">Blog Image Post</a>
                                            </h2>
                                        </header>
                                        <div class="post-content">
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                                consequat, vel illum dolore eu feugiat nulla facilisis</p>
                                        </div>
                                        <a href="blog-details-image.html" class="btn btn-read-more btn-style-2">Continue Reading</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mb--30">
                                <article class="post single-post format-standard">
                                    <div class="post-media">
                                        <div class="image">
                                            <a href="blog-details-image.html">
                                                <img src="{{$img}}/blog/post1-370x230.jpg" alt="blog">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-info">
                                        <header class="entry-header">
                                            <div class="entry-meta">
                                                    <span class="post-author">
                                                        <span class="post-by">Post By:</span>
                                                        admin
                                                    </span>

                                                <span class="post-date">Feb 02 2016</span>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="blog-details-image.html">Blog Image Post</a>
                                            </h2>
                                        </header>
                                        <div class="post-content">
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                                consequat, vel illum dolore eu feugiat nulla facilisis</p>
                                        </div>
                                        <a href="blog-details-image.html" class="btn btn-read-more btn-style-2">Continue Reading</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="pagination-wrap">
                                    <p class="page-ammount">Showing 1 to 8 of 15 (2 Pages)</p>
                                    <ul class="pagination">
                                        <li>
                                            <a href="" class="first">|&lt;</a>
                                        </li>
                                        <li>
                                            <a href="" class="prev">&lt;</a>
                                        </li>
                                        <li>
                                            <a href="" class="current">1</a>
                                        </li>
                                        <li>
                                            <a href="">2</a>
                                        </li>
                                        <li>
                                            <a href="" class="next">&gt;</a>
                                        </li>
                                        <li>
                                            <a href="" class="next">&gt;|</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection