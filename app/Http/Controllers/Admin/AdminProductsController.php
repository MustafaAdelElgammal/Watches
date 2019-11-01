<?php

namespace App\Http\Controllers\Admin;

use app\Helper\Helper,  App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request, Validator, Session, Redirect;

class AdminProductsController extends AdminBaseController
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(Request $request)
    {
        $products = Product::orderBy('title_en', 'desc')->paginate(20)->appends($request->input());
        return view('admin.products.index')->with('products', $products);
    }
    /**
     * @return $this|\Illuminate\Http\JsonResponse
     */
    public function create()
    {
        return view('admin.products.create')->with('product', null);
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $inputs  = $request->input();
        $inputs['slug_ar'] = Helper::generateArabicSlug($request->slug_ar);
        $inputs['slug_en'] = Helper::generateEnglishSlug($request->slug_en);
        $result = $this->setProduct($request, null);


        if ($result['status'] == true) {
            if ($this::$isAjax)
            return response()->json(
                    [
                        'with_data' => true,
                        'type' => 'redirect_to',
                        'url_to' => url('admin/products'),
                        'message' => trans('admin.product_add_suc')
                    ], 200);
            Session::flash('success', trans('admin.product_add_suc'));
            return Redirect::back();
        }else{
            if ($this::$isAjax)
                return response()->json(['validator' => $result['data'], 'message' => trans('admin.wrong_error')],400);

            Session::flash('message', trans('admin.item_add_error'));
            return Redirect::back()->withInput()->withErrors($result['data']);
        }
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id){
        $result = $this->setProduct($request, intval($id)) ;
        if($result['status'] == true){
            if ($this::$isAjax)
                return response()->json([
                    'message' => trans('admin.product_edit_suc')
                ], 200);
            Session::flash('success', trans('admin.product_edit_suc'));
            return Redirect::back();
        }
        if ($this::$isAjax)
            return response()->json([
                'validator' => $result['data']->errors(),
                'message' => trans('admin.product_wrong_error')
            ], 400);
        Session::flash('message', trans('admin.product_wrong_error'));
        return Redirect::back()->withInput()->withErrors($result['data']);

    }
    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function edit($id)
    {
        $categories = Categories::where('is_active',1)->orderBy('id', 'asc')->get();
        $product = Product::find($id);
        return view('admin.products.edit')->withProduct($product)->withCategories($categories);
    }
    /**
     * @param $request
     * @param $id
     * @return array
     */
    public function setProduct($request, $id)
    {

        $inputs  = $request->all();
        $inputs['slug_ar'] = Helper::generateArabicSlug($request->name_ar);
        $inputs['slug_en'] = Helper::generateEnglishSlug($request->name_en);
        $rules = ($id == null) ? Product::$rules_create : Product::$rules_edit;
        if($id != null){
            $rules['name_ar'] = $rules['title_ar'] . ',' . $id;
            $rules['name_en'] = $rules['title_en'] . ',' . $id;
        }
        $validator = Validator::make($request->all(), ($id == null) ? Product::$rules_create : Product::$rules_edit);

        if ($validator->fails()) {
            return ['status' => false, 'data' => $validator->errors()];
        }

        $product = ($id == null) ? new Product : Product::find($id);

        $products = Product::all();
        if ($products->count() == 0) {
            $product->is_active = 1;
            $product->is_available = 1;
        }
        $product = ($id == null) ? new Product : Product::find($id);

        $product->title_en = strip_tags($request->title_en);
        $product->title_ar = strip_tags($request->title_ar);
        $product->brief_en = strip_tags($request->brief_en);
        $product->brief_ar = strip_tags($request->brief_ar);
        $product->description_en = strip_tags($request->description_en);
        $product->description_ar = strip_tags($request->description_ar);
        $product->is_available = (int)$request->is_available;
        $product->is_active = (int)$request->is_active;
        $product->slug_en   =  Helper::generateEnglishSlug(strip_tags($request->title_en));
        $product->slug_ar   = Helper::generateArabicSlug(strip_tags($request->title_ar));

        if ($request->hasFile('main_image')) {
            if ($image = $request->file('main_image')) {
                $image = Helper::doUploadImage($image, 'products', ['616_362']);
                $product->main_image = $image;
            }
        }
        if ($request->hasFile('sub_img_1')) {
            if ($image = $request->file('sub_img_1')) {
                $image = Helper::doUploadImage($image, 'products', ['616_362']);
                $product->sub_img_1 = $image;
            }
        }
        if ($request->hasFile('sub_img_2')) {
            if ($image = $request->file('sub_img_2')) {
                $image = Helper::doUploadImage($image, 'products', ['616_362']);
                $product->sub_img_2 = $image;
            }
        }
        if ($request->hasFile('sub_img_3')) {
            if ($image = $request->file('sub_img_3')) {
                $image = Helper::doUploadImage($image, 'products', ['616_362']);
                $product->sub_img_3 = $image;
            }
        }
        if ($request->hasFile('sub_img_4')) {
            if ($image = $request->file('sub_img_4')) {
                $image = Helper::doUploadImage($image, 'products', ['616_362']);
                $product->sub_img_4 = $image;
            }
        }

        if ($product->save()) {
            return ['status' => true];
        }
        return ['status' => false, 'data' => $validator];

    }
    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id){
        $product = Product::find($id);
        if($product!=null){
            $path = "upload" . DIRECTORY_SEPARATOR . "products" ;
            if($product->main_image != "")
                Helper::deleteFile($product->main_image, $path, ["616_362"]);

            if($product->delete()){
                if ($this::$isAjax) return response()->json(['message' => trans('admin.product_del_suc')], 200);
                Session::flash('message', trans('admin.product_del_suc'));
                return Redirect::back();
            }
        }
        if ($this::$isAjax) {
            return response()->json(['validator' => null,'message' => trans('admin.wrong_error')],400);
        }
        Session::flash('message', trans('admin.wrong_error'));
        return Redirect::back();
    }
}
