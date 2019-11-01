<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    @yield('meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="نشتري الساعات الثمينه والمجوهرات الاصليه فقط - الأسعار بالعملة الكويتيه">
    <link rel="shortcut icon" href="{{$img}}/favicn.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{$img}}/icon.png">
    <title> {{$config->site_name}}</title>
    <!-- Bootstrap -->
    {{Html::style($css.'/bootstrap.min.css')}}
    {{Html::style($css.'/font-awesome.min.css')}}
    {{Html::style($css.'/elegent-icons.css')}}
    {{Html::style($css.'/plugins.css')}}
    {{Html::style($css.'/main.css')}}
    <script src="{{$vendors}}/modernizr-2.8.3.min.js"></script>


    @if($lang == 'en')
        <?php $direction = 'ltr';?>
    @else
        <?php $direction = 'rtl';?>
        {{Html::style($css  . '/ar.css')}}
            {{Html::style($css  . '/bootstrap-rtl.css')}}
        {{--<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"--}}
              {{--integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"--}}
              {{--crossorigin="anonymous">--}}
    @endif
    {{ Html::style($css   . '/responsive.css') }}


</head>
<body dir="{{$direction}}">
<div class="wrapper bg--shaft">
    @include('site.components.header')

    @yield('content')

    @include('site.components.footer')
</div>

<script src="{{$vendors}}/jquery.min.js"></script>
<script src="{{$js}}/bootstrap.bundle.min.js"></script>
<script src="{{$js}}/plugins.js"></script>
<script src="{{$js}}/ajax-mail.js"></script>
<script src="{{$js}}/main.js"></script>
{{--{{Html::script($js . '/scripts.js')}}--}}

{{--@if($lang == 'ar')--}}
    {{--{{Html::script($js . '/messages_ar.js')}}--}}
{{--@endif--}}
{{--{{Html::script($js . '/messages_en.js')}}--}}
@yield('js')
</body>
</html>

