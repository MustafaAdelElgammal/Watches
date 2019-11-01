<div class="logopanel"><h1><span>[</span> administrator <span>]</span></h1></div>
<div class="leftpanelinner">
    <div class="hidden-md hidden-lg">
        <div class="media userlogged">
            <img alt="" src="{{asset(config('constants.optAdmin.up') . '/avatar'.'/100_100_' . Auth::User()->avatar) }}" class="media-object">
            <div class="media-body">
                <h4>{{Auth::User()->first_name . " " . Auth::User()->last_name}}</h4>
                <span>{{Auth::User()->email}}</span>
            </div>
        </div>

        <h5 class="sidebartitle actitle">@lang('admin.account')</h5>
        <ul class="nav nav-pills nav-stacked nav-bracket mb30">
            <li><a href="{{url('admin/profile/settings')}}"  class="load_content_ajax"><i class="fa fa-cog"></i><span> @lang('admin.account_settings')</span></a></li>
            <li><a href="{{url('admin/logout')}}"><i class="fa fa-sign-out"></i><span> @lang('admin.sign_out')</span></a></li>
        </ul>
    </div>
    <h5 class="sidebartitle">@lang('admin.navigation')</h5>
    <ul class="nav nav-pills nav-stacked nav-bracket">

        <li class="@if(Request::segment(2) == '') active @endif"><a href="{{url('admin')}}" class="load_content_ajax"><i class="fa fa-home"></i><span> @lang('admin.dashboard')</span></a></li>
        <li class="@if(Request::segment(2) == 'configuration') active @endif"><a href="{{url('admin/configuration')}}"  class="load_content_ajax"><i class="fa fa-cogs"></i><span> @lang('admin.configurations')</span></a></li>
        {{--@if(in_array(Auth::User()->role_id, [2, 1]))--}}
             {{--<li class="nav-parent @if(Request::segment(2) == 'users') nav-active active @endif"><a href="#"><i class="fa fa-users"></i> <span>@lang('admin.users')</span></a>--}}
                 {{--<ul class="children" style="@if(Request::segment(2) == 'users') display:block @endif">--}}
                     {{--<li class="@if(Request::segment(2) == 'users' && Request::segment(3) == '') active @endif"><a href="{{url('admin/users')}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> @lang('admin.all_users')</a></li>--}}
                     {{--<li class="@if(Request::segment(2) == 'users' && Request::segment(3) == 'create') active @endif"><a href="{{url('admin/users/create')}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> @lang('admin.create_new_user')</a></li>--}}
                     {{--@if(Auth::User()->role_id == 1)--}}
                         {{--<li class="@if(Request::segment(2) == 'permissions') active @endif"><a href="{{url('admin/permissions')}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> @lang('admin.users_permissions')</a></li>--}}
                     {{--@endif--}}
                 {{--</ul>--}}
             {{--</li>--}}
        {{--@endif--}}
         @foreach($menuItems as $item)
             @if($item->show_menu)
                 @if($item->single)
                     <li class="@if(Request::segment(3) == $item->slug) active @endif"><a href="{{url('admin/posts/'. $item->slug . '/single/edit')}}" class="load_content_ajax"><i class="fa {{ $item->icon }}"></i> <span>{{$item->name_en}}</span></a></li>
                 @elseif(!$item->have_add_new)
                     <li class="@if(Request::segment(3) == $item->slug) active @endif"><a href="{{url('admin/posts/'. $item->slug)}}" class="load_content_ajax"><i class="fa {{ $item->icon }}"></i> <span>{{$item->name_en}}</span></a></li>
                 @else
                     <li class="nav-parent @if(Request::segment(3) == $item->slug) nav-active active @endif"><a href="#"><i class="fa {{ $item->icon }}"></i> <span>{{$item->name_en}}</span></a>
                         <ul class="children" style="@if(Request::segment(3) == $item->slug) display:block @endif">
                             <li class="@if(Request::segment(2) == 'modules' && Request::segment(3) == $item->slug &&Request::segment(4) == '') active @endif"><a href="{{url('admin/posts/'.$item->slug)}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> @lang('admin.all') {{$item->$name}}</a></li>
                             <li class="@if(Request::segment(2) == 'modules' && Request::segment(3) == $item->slug &&Request::segment(4) == 'create') active @endif"><a href="{{url('admin/posts/'.$item->slug . '/create')}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> @lang('admin.create')</a></li>
                         </ul>
                     </li>
                 @endif
             @endif
         @endforeach
        {{--<li class="nav-parent @if(Request::segment(2) == 'branches') nav-active active @endif"><a href="{{url('admin/branches/1/edit')}}"><i class="fa fa-users"></i> <span>Branches</span></a>--}}
            {{--<ul class="children" style="@if(Request::segment(2) == 'branches') display:block @endif">--}}
                {{--<li class="@if(Request::segment(2) == 'branches' && Request::segment(3)  == 'create') active @endif"><a href="{{url('admin/branches/create')}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> @lang('admin.create_branches')</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        <li class="@if(Request::segment(2) == 'categories') active @endif"><a href="{{url('admin/categories')}}"  class="load_content_ajax"><i class="fa fa-users"></i> <span>@lang('admin.store_categories')</span></a>

        <li class="nav-parent @if(Request::segment(2) == 'products') nav-active active @endif"><a href="#"><i class="fa fa-users"></i> <span>Products</span></a>
            <ul class="children" style="@if(Request::segment(2) == 'dishes') display:block @endif">
                <li class="@if(Request::segment(2) == 'products' && Request::segment(3)  == '') active @endif"><a href="{{url('admin/products')}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> @lang('admin.all_products')</a></li>
                <li class="@if(Request::segment(2) == 'products' && Request::segment(3)  == 'create') active @endif"><a href="{{url('admin/products/create')}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> @lang('admin.create_product')</a></li>
            </ul>
        </li>
        <li class="@if(Request::segment(2) == 'branches' && Request::segment(3)  == '') active @endif"><a href="{{url('admin/branches/1/edit')}}" class="load_content_ajax"><i class="fa fa-phone"></i> Contacts </a></li>
        <li class="nav-parent @if(in_array(Request::segment(3), ['about', 'term_and_condition', 'privacy_policy', 'our_mission'])) nav-active active @endif"><a href="#"><i class="fa fa-users"></i> <span>Static Pages</span></a>
            <ul class="children" style="@if(in_array(Request::segment(3), ['about', 'term_and_condition', 'privacy_policy'])) display:block @endif">
                <li class="@if(Request::segment(3) == 'about' && Request::segment(2)  == 'posts') active @endif"><a href="{{url('admin/posts/about_us/single/edit')}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> About Us</a></li>
                <li class="@if(Request::segment(3) == 'terms_of_use' && Request::segment(2)  == 'posts') active @endif"><a href="{{url('admin/posts/terms_of_use/single/edit')}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> Terms Of Use</a></li>
                <li class="@if(Request::segment(3) == 'privacy_policy' && Request::segment(2)  == 'posts') active @endif"><a href="{{url('admin/posts/privacy_policy/single/edit')}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> Privacy Policy</a></li>
                <li class="@if(Request::segment(3) == 'disclaimer' && Request::segment(2)  == 'posts') active @endif"><a href="{{url('admin/posts/disclaimer/single/edit')}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> Disclaimer</a></li>
                <li class="@if(Request::segment(3) == 'sitemap' && Request::segment(2)  == 'posts') active @endif"><a href="{{url('admin/posts/sitemap/single/edit')}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> Sitemap</a></li>
            </ul>
        </li>

    @if(Auth::User()->role_id == 1)
             <li class="nav-parent @if(Request::segment(2) == 'modules') nav-active active @endif"><a href="#"><i class="fa fa-shield"></i><span> @lang('admin.modules')</span></a>
                 <ul class="children" style="@if(Request::segment(2) == 'modules') display:block @endif">
                     <li class="@if(Request::segment(2) == 'modules' && Request::segment(3) == '') active @endif"><a href="{{url('admin/modules')}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> @lang('admin.all_modules')</a></li>
                     <li class="@if(Request::segment(2) == 'modules' && Request::segment(3) == 'create') active @endif"><a href="{{url('admin/modules/create')}}" class="load_content_ajax"><i class="fa fa-caret-right"></i> @lang('admin.create_new_module')</a></li>
                 </ul>
             </li>
         @endif
    </ul>
    <div class="infosummary">
        <ul><li><div class="datainfo"></div></li></ul>
    </div>
</div>
