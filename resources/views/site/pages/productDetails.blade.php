@extends('site.layout')
@section('meta')
    <title>{{$config->site_name}} | @lang('web.About')</title>
    <meta name="description" content="{{$config->site_desc}}">
    <meta name="keywords" content="{{$config->site_keyword}}">
@endsection
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">@lang('web.product_details')</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="{{route('watches.home')}}">@lang('web.home')</a></li>
                        <li><a href="{{route('home.store')}}">@lang('web.store')</a></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content-wrapper">
        <div class="single-products-area section-padding section-md-padding">
            <div class="container">
                <!-- Single Product Start -->
                <section class="mirora-single-product pb--80 pb-md--60">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Tab Content Start -->
                            <div class="tab-content product-details-thumb-large" id="myTabContent-3">
                                <div class="tab-pane fade show active" id="product-large-one">
                                    <div class="product-details-img easyzoom">
                                        <a class="popup-btn" href="{{$up.'/products/'.$product->main_image}}">
                                            <img src="{{$up.'/products/'.$product->main_image}}" alt="product">
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-large-two">
                                    <div class="product-details-img easyzoom">
                                        <a class="popup-btn" href="{{$up.'/products/'.$product->sub_img_1}}">
                                            <img src="{{$up.'/products/'.$product->sub_img_1}}" alt="product">
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-large-three">
                                    <div class="product-details-img easyzoom">
                                        <a class="popup-btn" href="{{$up.'/products/'.$product->sub_img_2}}">
                                            <img src="{{$up.'/products/'.$product->sub_img_2}}" alt="product">
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-large-four">
                                    <div class="product-details-img easyzoom">
                                        <a class="popup-btn" href="{{$up.'/products/'.$product->sub_img_3}}">
                                            <img src="{{$up.'/products/'.$product->sub_img_3}}" alt="product">
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-large-five">
                                    <div class="product-details-img easyzoom">
                                        <a class="popup-btn" href="{{$up.'/products/'.$product->sub_img_4}}">
                                            <img src="{{$up.'/products/'.$product->sub_img_4}}" alt="product">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Content End -->

                            <!-- Product Thumbnail Carousel Start -->
                            <div class="product-details-thumbnail">
                                <div class="thumb-menu product-details-thumb-menu nav-vertical-center" id="thumbmenu-horizontal">
                                    <div class="thumb-menu-item">
                                        <a href="#product-large-one" data-toggle="tab" class="nav-link active">
                                            <img src="{{$up.'/products/'.$product->main_image}}" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#product-large-two" data-toggle="tab" class="nav-link">
                                            <img src="{{$up.'/products/'.$product->sub_img_1}}" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#product-large-three" data-toggle="tab" class="nav-link">
                                            <img src="{{$up.'/products/'.$product->sub_img_2}}" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#product-large-four" data-toggle="tab" class="nav-link">
                                            <img src="{{$up.'/products/'.$product->sub_img_3}}" alt="product thumb">
                                        </a>
                                    </div>
                                    <div class="thumb-menu-item">
                                        <a href="#product-large-five" data-toggle="tab" class="nav-link">
                                            <img src="{{$up.'/products/'.$product->sub_img_4}}" alt="product thumb">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Thumbnail Carousel End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Single Product Content Start -->
                            <div class="product-details-content">
                                <div class="product-details-top">
                                    <h2 class="product-details-name">{{$product['title_'.$lang]}}</h2>
                                    <div class="ratings-wrap">
                                        <div class="ratings">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>

                                    </div>
                                    <ul class="product-details-list list-unstyled">
                                        <li>@lang('web.category'): <a href="">For Mens's</a></li>
                                        <li>
                                            @if($product->is_available === 1)
                                                <button class="btn-success outline">
                                                    @lang('web.available')
                                                </button>
                                            @else
                                                <button class="btn-danger outline">
                                                    @lang('web.out_of_stock')
                                                </button>
                                        @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Single Product Content End -->
                        </div>
                    </div>
                </section>
                <!-- Single Product End -->

                <!-- Single Product Tab Start -->
                <section class="product-details-tab bg--dark-4 ptb--80 ptb-md--60">
                    <div class="row">
                        <div class="col-12">
                            <ul class="product-details-tab-head nav nav-tab" id="singleProductTab" role="tablist">
                                <li class="nav-item product-details-tab-item">
                                    <a class="nav-link product-details-tab-link active" id="nav-desc-tab" data-toggle="tab" href="#nav-desc" role="tab" aria-controls="nav-desc" aria-selected="true">@lang('web.description')</a>
                                </li>
                            </ul>
                            <div class="product-details-tab-content tab-content">
                                <div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                                    <p class="product-details-description">{{$product['description_'.$lang]}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- Single Product Tab End -->
            </div>
        </div>
    </div>
@endsection