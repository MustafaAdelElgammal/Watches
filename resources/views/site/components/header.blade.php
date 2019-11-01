<header class="header headery-style-1">
    <div class="header-middle header-top-1">
        <div class="container">
            <div class="row no-gutters align-items-center">

                <div class=" col-12 text-center fixed-logo">
                    <a href="{{route('watches.home')}}" class="logo-box ">
                        <img src="{{$img}}/new/LXR_Logo_new.png" class="logo" alt="logo">
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="header-bottom header-top-1 position-relative navigation-wrap fixed-header">
        <div class="container position-static">
            <div class="row ">
                <div class="col-lg-3 d-flex align-items-center flex-column flex-lg-row  ">

                    <ul class=" social social-round mr--20 " id="social-header">

                        <li class="social__item">
                            <a class="social__link" href="instagram.com">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="snapchat.com">
                                <i class="fa fa-snapchat-ghost" aria-hidden="true"></i>
                            </a>
                        </li>

                        <li class="social__item">
                            <a class="social__link" href="facebook.com">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="youtube.com">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="twitter.com">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                    <div>
                        <img src="{{$img}}/new/LXR_Logo_new.png" class="logo-left" style="display: none" alt="">
                    </div>
                </div>
                <div class="col-6 position-static text-center">
                    <nav class="main-navigation" style="display: block;">
                        <ul class="mainmenu">
                            <li class="mainmenu__item active menu-item-has-children has-children">
                                <a href="{{route('watches.home')}}" class="mainmenu__link">@lang('web.home')</a>

                            </li>
                            <li class="mainmenu__item menu-item-has-children has-children">
                                <a href="{{route('home.store')}}" class="mainmenu__link">@lang('web.store')</a>

                            </li>
                            <li class="mainmenu__item">
                                <a href="blog-4-column.html" class="mainmenu__link">@lang('web.blog')</a>
                            </li>
                            <li class="mainmenu__item menu-item-has-children">
                                <a href="{{route('home.about')}}" class="mainmenu__link">@lang('web.about_us')</a>

                            </li>
                            <li class="mainmenu__item">
                                <a href="{{route('home.contact')}}" class="mainmenu__link">@lang('web.contact_us')</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="d-none d-sm-flex  col-lg-3  align-items-center flex-column flex-lg-row  ">
                    <div class="language-selector header-top-nav__item lang-search">
                        <div class=" header-top__dropdown">
                            @if($lang == 'ar')
                                <a class="p-lan" href="{{url('/changeLanguage/en')}}">
                                    <img src="{{$img}}/header/1.jpg" alt="En" style="margin-left: .5rem">En
                                </a>
                            @else
                                <a class="p-lan" href="{{url('/changeLanguage/ar')}}">
                                    <img src="{{$img}}/new/unnamed.png" alt="arbic"> عربي
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- search and language in mobile -->
                <div class="container">
                    <div class="row d-flex d-sm-none ">
                        <div class="col-xs-4 language-selector header-top-nav__item search-lang-mob ">
                            <div class=" header-top__dropdown" style="margin-top: 1rem ;margin-left: 1.5rem">
                                @if($lang == 'ar')
                                    <a class="p-lan" href="{{url('/changeLanguage/en')}}">
                                        <img src="{{$img}}/header/1.jpg" alt="En" style="margin-left: .5rem">En
                                    </a>
                                @else
                                    <a class="p-lan" href="{{url('/changeLanguage/ar')}}">
                                        <img src="{{$img}}/new/unnamed.png" alt="arbic"> عربي
                                    </a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12">
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</header>