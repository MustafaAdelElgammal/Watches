<div class="row">
    <div class="col-md-12">
        <div class="col-md-3">
            {{Markup::selectOptionMaterial(trans('admin.dish_status') . '*' , 'is_active', ['1' => trans('admin.published'), '0' => trans('admin.not_published')], null, $errors->first('is_active'))}}
        </div>
        <div class="col-md-5">
            <div class="form-group label-floating">
                <label for="category_id" class="control-label">@lang('admin.category')</label>

                <select class="form-control" id="category_id">
                @foreach($categories as $category)
                    <option selected>{{$category['name_en']}}</option>
                @endforeach
            </select>
            </div>
            {{--        {{Markup::selectOptionMaterial(trans('admin.dish_status') . '*' , 'is_active', ['1' => trans('admin.published'), '0' => trans('admin.not_published')], null, $errors->first('is_active'))}}--}}
        </div>
    </div>

</div>
<div class="row">
<div class="col-md-3">
        {{Markup::imageFileInput('Main img (en)' . ' *', 'main_image', $product != null ? 'products/616_362_'.$product->main_image : false,'250','250',$errors->first('main_image'))}}
</div>
<div class="col-md-9">
    <div class="row mb30">

        <div class="col-md-6">
            {{Markup::textInputMaterial('Title (en) *', 'title_en',  !empty($product) ? $product->title_en : null , $errors->first('title_en'), 75)}}
        </div>
        <div class="col-md-6">
            {{Markup::textInputMaterial('Title (ar) *', 'title_ar',  !empty($product) ? $product->title_ar : null , $errors->first('title_ar'), 75)}}
        </div>
        <div class="col-md-12">
            {{Markup::textInputMaterial('Brief (en) *', 'brief_en',  !empty($product) ? $product->brief_en : null , $errors->first('brief_en'), 150)}}
        </div>
        <div class="col-md-12">
            {{Markup::textInputMaterial('Brief (ar) *', 'brief_ar',  !empty($product) ? $product->brief_ar : null , $errors->first('brief_ar'), 150)}}
        </div>
        <div class="col-md-12">
            {{Markup::textInputMaterial('Description (en) *', 'description_en',  !empty($product) ? $product->description_en : null , $errors->first('description_en'))}}
        </div>
        <div class="col-md-12">
            {{Markup::textInputMaterial('Description (ar) *', 'description_ar',  !empty($product) ? $product->description_ar : null , $errors->first('description_ar'))}}
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="defaultChecked" name="is_available" value="1" @if (!empty($product) && $product->is_available === 1) checked @else checked @endif >
            <label class="custom-control-label" for="defaultChecked">{{trans('admin.available')}}</label>
        </div>

        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="defaultUnchecked" name="is_available" value="0" @if (!empty($product) && $product->is_available === 0) checked @endif>
            <label class="custom-control-label" for="defaultUnchecked">{{trans('admin.out_of_stock')}}</label>
        </div>


    </div>
</div>
</div>
<div class="row">
<div class="col-md-12">
    <div class="col-md-3">
        {{Markup::imageFileInput('First sub image', 'sub_img_1', $product != null ? 'products/616_362_'.$product->sub_img_1 : false,'250','250',$errors->first('sub_img_1'))}}
    </div>
    <div class="col-md-3">
        {{Markup::imageFileInput('Second sub image', 'sub_img_2', $product != null ? 'products/616_362_'.$product->sub_img_2 : false,'250','250',$errors->first('sub_img_2'))}}
    </div>
    <div class="col-md-3">
        {{Markup::imageFileInput('Third sub image', 'sub_img_3', $product != null ? 'products/616_362_'.$product->sub_img_3 : false,'250','250',$errors->first('sub_img_3'))}}
    </div>
    <div class="col-md-3">
        {{Markup::imageFileInput('Fourth sub image', 'sub_img_4', $product != null ? 'products/616_362_'.$product->sub_img_4 : false,'250','250',$errors->first('sub_img_4'))}}
    </div>

</div>
</div>