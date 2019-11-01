@extends('site.layout')
@section('meta')
    <title>{{$config->site_name}} | @lang('web.About')</title>
    <meta name="description" content="{{$config->site_desc}}">
    <meta name="keywords" content="{{$config->site_keyword}}">
@endsection
@section('content')
    <!--================Company express2 Area =================-->
    <!-- Breadcumb area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">About Us</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li>
                            <a href="{{route('watches.home')}}">Home</a>
                        </li>
                        <li class="current">
                            <a style="pointer-events: none"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb area End -->

    <div class="main-content-wrapper">
        <div class="faq-area pt--40 pb--70 pt-md--30 pb-md--50">
            <div class="container">
                <div class="row pb--40">
                    <div class="col-12">
                        <div class="faq-heading">
                            <img src="{{$up}}/posts/about_us/{{$post->upload}}" alt="">
                            <h2 class="mb--20 mt--20">{{$post->name}}</h2>
                            {!! $post->details!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->

@endsection
