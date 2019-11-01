@extends('site.layout')
@section('meta')
    <title>{{$config->site_name}} | @lang('web.About')</title>
    <meta name="description" content="{{$config->site_desc}}">
    <meta name="keywords" content="{{$config->site_keyword}}">
@endsection
@section('content')

    <!-- Breadcumb area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">@lang('web.store')</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="{{route('watches.home')}}">@lang('web.home')</a></li>
                        <li class="current"><a href="{{route('home.store')}}">@lang('web.store')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content-wrapper">
        <div class="shop-area pt--40 pb--80 pt-md--30 pb-md--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <!-- Refine Search Start -->
                                <div class="refine-search mb--30">
                                    <h3>Refine Search</h3>
                                    <ul class="cat-list mb--20">
                                        <li><a href="shop.html">Watches (15)</a></li>
                                        <li><a href="shop.html">Jewelry (16)</a></li>
                                        <li><a href="shop.html">Special (15)</a></li>

                                    </ul>

                                </div>
                                <!-- Refine Search End -->

                                <!-- Shop Toolbar Start -->
                                <div class="shop-toolbar">
                                    <div class="product-view-mode" data-default="4">
                                        <a class="grid-2" data-target="gridview-2" data-toggle="tooltip"
                                           data-placement="top" title="2">2</a>
                                        <a class="grid-3" data-target="gridview-3" data-toggle="tooltip"
                                           data-placement="top" title="3">3</a>
                                        <a class="active grid-4" data-target="gridview-4" data-toggle="tooltip"
                                           data-placement="top" title="4">4</a>
                                        <a class="grid-5" data-target="gridview-5" data-toggle="tooltip"
                                           data-placement="top" title="5">5</a>
                                        <a class="list" data-target="listview" data-toggle="tooltip"
                                           data-placement="top" title="5">List</a>
                                    </div>
                                    <span class="product-pages">Showing 1 to 9 of 11 (2 Pages)</span>
                                    <div class="product-showing">
                                        <label class="select-label">Show:</label>
                                        <select class="short-select nice-select">
                                            <option value="1">9</option>
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="1">5</option>
                                            <option value="1">9</option>
                                        </select>
                                    </div>
                                    <div class="product-short">
                                        <label class="select-label">Short By:</label>
                                        <select class="short-select nice-select">
                                            <option value="1">Relevance</option>
                                            <option value="2">Name, A to Z</option>
                                            <option value="3">Name, Z to A</option>
                                            <option value="4">Price, low to high</option>
                                            <option value="5">Price, high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Shop Toolbar End -->
                            </div>
                        </div>

                        <!-- Main Shop wrapper Start -->
                        <div class="shop-product-wrap grid gridview-4 row no-gutters">
                            @foreach($products as $product)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="{{$up.'/products/'.$product->main_image}}" alt="Product" class="primary-image"/>
                                            <img src="{{$up.'/products/'.$product->main_image}}" alt="Product" class="secondary-image"/>

                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
{{--                                            {{url($lang . '/news/'.$new->postByLang->slug)}}--}}
                                            <h4><a href="{{url($lang .'/product-details/'.$product['slug_'.$lang])}}">{{$product['title_'.$lang]}}</a></h4>
                                            <div class="product-price-wrapper">
                                                @if($product->is_available === 1)
                                                    <button class="btn-success outline">
                                                        @lang('web.available')
                                                    </button>
                                                @else
                                                    <button class="btn-danger outline">
                                                        @lang('web.out_of_stock')
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mirora_product_action text-center position-absolute">
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p>
                                                {{$product['brief_'.$lang]}}
                                            </p>

                                        </div>
                                    </div>

                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="{{$up.'/products/'.$product->main_image}}" alt="Product" class="primary-image"/>
                                            <img src="{{$up.'/products/'.$product->main_image}}" alt="Product" class="secondary-image"/>

                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">{{$product['title_'.$lang]}}</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                                {{$product['brief_'.$lang]}}
                                            </p>
                                            <div class="product-price-wrapper">
                                                @if($product->is_available === 1)
                                                <button class="btn-success outline">
                                                    @lang('web.available')
                                                </button>
                                                    @else
                                                    <button class="btn-danger outline">
                                                        @lang('web.out_of_stock')
                                                    </button>
                                                @endif
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <!-- Main Shop wrapper End -->

                        <!-- Pagination Start -->
                        @if($products->links())
                            <div class="pagination-wrap mt--15 mt-md--10">
                                {{$products->links()}}
                            </div>
                    @endif
                        <!-- Pagination End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->

@endsection