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
                    <h1 class="page-title">Contact Us</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li>
                            <a href="{{route('watches.home')}}">Home</a>
                        </li>
                        <li class="current">
                            <a href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content-wrapper">
        <!-- Google Map Start -->

        <div class="container">
            <div class="row">

                <div class="col-lg-6 order-lg-1 order-1 pt--40 pt-md--30">
                    <h3 class="widget-title">Address</h3> <br>
                    <ul class="widget-menu">
                        <p>Address: {!! $branch->{'name_'. $lang} !!}
                            <br> {!! $branch->{'address_'. $lang} !!}
                        </p>
                        <p>Email: {!! $branch->email !!}</p>
                        <p>Local: {{$branch->phone}}</p>
                        <?php $_phones = Helper::getAllPhonesAttribute($branch->phones);?>
                        @if(count($_phones)>0 )
                            @foreach($_phones as $onePhone)
                                <p>{{ $onePhone }}{{(next($_phones)==true) ? ", " : ""}}</p>
                            @endforeach
                        @endif

                        <br>
                        <h3 class="widget-title">Business Hours</h3>
                        <?php $_BShours = Helper::getAllPhonesAttribute($branch->BShours);?>
                        @if(count($_BShours)>0 )
                            @foreach($_BShours as $oneHours)
                                <p>{{ $oneHours }}{{(next($_BShours)==true) ? ", " : ""}}</p>
                            @endforeach
                        @endif

                    </ul>
                </div>
                <div class="col-lg-6 order-lg-2 order-2 mb-md--30">
                    <div class="google-map-wrapper pt--40 pt-md--30">
                        <div id="google-map" class="google-map">
                            <iframe class="mapBox row m0"
                                    width="600"
                                    height="350px"
                                    frameborder="0"
                                    src="https://maps.google.com/maps?q={{$branch->latitude}},{{$branch->longitude}}&hl=es;z=14&amp;output=embed"
                            >
                            </iframe>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
