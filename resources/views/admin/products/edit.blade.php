@extends("admin.$layout")
@section('content')
    <div class="pageheader"><h2><i class="fa fa-users"></i> {{trans('admin.products')}} </h2></div>
    <div class="contentpanel">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-btns"><a href="#" class="minimize">&minus;</a></div>
                        <h4 class="panel-title"> {{trans('admin.edit_products')}} </h4>
                    </div>
                    <div class="panel-body">
                        <div class="basic-wizard wizard form-wizard" id="progressWizard">
                            {{ Form::model($product, array('route' => array('admin.products.update', $product->id), 'method'=> 'put', 'class' => 'submit-ajax general-form', 'id' => 'product-management')) }}
                            <label>Select Category</label>

                            @include('admin.products.form')
                            <button class='btn btn-block btn-default submit-finish'><i class='fa fa-refresh'></i> @lang('admin.save')</button>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection