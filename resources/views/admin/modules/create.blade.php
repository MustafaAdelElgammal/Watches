@extends("admin.$layout")
@section('content')
<div class="pageheader"><h2><i class="fa fa-shield"></i> Create new Module</h2></div>
<div class="contentpanel">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-btns"><a href="#" class="minimize">&minus;</a></div>
                    <h4 class="panel-title">Form</h4>
                </div>
                <div class="panel-body">
                {{ Form::open(array('route' => 'admin.modules.store','class' => 'row-border')) }}
                    @include('admin.modules.form')
                    <div class="col-md-12">
                        <div class='form-group label-floating'>
                            <button class="btn btn-success-alt btn-block" type="submit"> Create new module</button>
                        </div>
                    </div>
                {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



