@extends("admin.$layout")
@section('content')
    <div class="pageheader"><h2><i class="fa fa-users"></i> {{trans('admin.products')}}</h2></div>
    <div class="contentpanel">
        <div class="people-list">
            <div class="row load-more-ajax-wrapper" id="multi">
                @include('admin.products.data')
            </div>
        </div>
    </div>
@endsection
