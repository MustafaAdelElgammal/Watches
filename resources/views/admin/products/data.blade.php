@if(!empty($products))
    @foreach($products as $product)
        <div class="col-md-6 sort-root">
            <div class="people-item">
                <div class="media">
                    <div class="media-body">
                        <a href="javascript:void(0)" class="pull-left">
                            <img alt="" src="{{asset(config('constants.optAdmin.up') . '/products/616_362_'. $product->main_image)}}" class="thumbnail media-object">
                        </a>
                        <div class="text-muted"><i class="fa fa-archive"></i> {{ $product->{'title_'.$lang} }}</div>
                        <small class="text-muted"><i class="fa fa-{{$product->is_active == 1 ? 'square' : 'square-o'}}"></i> @lang($product->is_active == 1 ? 'admin.published' : 'admin.not_published')</small><br>
                        <small class="text-muted"><i class="fa fa-{{$product->is_available == 1 ? 'square' : 'square-o'}}"></i> @lang($product->is_available == 1 ? 'admin.available' : 'admin.not_available')</small>
                        <ul class="social-list">
                            <li><a href="{{ URL::to('admin/products/'. $product->id .'/edit' ) }}" class="load_content_ajax tooltips load_content_ajax" data-toggle="tooltip" data-placement="top" title="@lang('admin.edit')"><i class="fa fa-cog"></i></a></li>
                            @if($product->type == 0)
                                <li>
                                    {{ Form::open(array('route' => array('admin.products.destroy', $product->id), 'method' => 'delete','class'=>"delete-ajax")) }}
                                    <button  class="btn-white tooltips" data-toggle="tooltip" data-placement="top" title="@lang('admin.delete')" type="submit"><i class="fa fa-trash-o"></i></button>
                                    {{ Form::close() }}
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="col-md-12 pagination-parent">
        {!!with(new App\Pagination\AcmePresenter($products))->render()!!}
    </div>
@endif