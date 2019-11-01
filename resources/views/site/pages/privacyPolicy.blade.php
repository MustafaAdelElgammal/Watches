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
                    <h1 class="page-title">Privacy Policy</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="{{route('watches.home')}}">Home</a></li>
                        <li class="current"><a href="shop.html">TOU</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content-wrapper">
        <div class="faq-area pt--40 pb--70 pt-md--30 pb-md--50">
            <div class="container">
                <div class="row pb--40">
                    <div class="col-12">
                        <div class="faq-heading">
                            {!! $post->details !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection