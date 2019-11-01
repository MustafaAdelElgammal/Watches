@extends("admin.$layout")
@section('content')
    <div class="pageheader"><h2><i class="fa fa-users"></i> {{trans('admin.products')}}</h2></div>
    <div class="contentpanel">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-btns"><a href="#" class="minimize">&minus;</a></div>
                        <h4 class="panel-title">{{trans('admin.create_product')}}</h4>
                    </div>
                    <div class="panel-body">
                        {{ Form::model($product, array('route' => 'admin.products.store', 'method'=> 'post', 'class' => 'submit-ajax general-form',  'id' => 'product-management', 'files'=>'true', 'enctype'=>'multipart/form-data')) }}
                        @include('admin.products.form')
                        <button class='btn btn-block btn-default submit-finish' ><i class='fa fa-refresh'></i> @lang('admin.save')</button>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
