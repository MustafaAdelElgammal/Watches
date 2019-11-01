<?php

namespace App\Http\Controllers\Web;

use App\Models\Branch;
use App\Models\Product;
use Session, Redirect, App\Models\Module, App\Models\PostConfig, App\Models\Dish, Illuminate\Http\Request, Illuminate\Support\Facades\Validator, Auth;
use App\Models\Cart;
use App\Models\Post;

class HomeController extends WebBaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('site.pages.home');
    }

    public function aboutUs()
    {
        $post = PostConfig::where('module_id', Module::where('slug', 'about_us')->first()->id)->first();
        return view('site.pages.about')->withPost($post->postByLang);
    }

    public function termsOfUse()
    {
        $post = PostConfig::where('module_id', '=', Module::whereSlug('terms_of_use')->first()->id)->first();
        return view('site.pages.termsOfUse')->withPost($post->postByLang);
    }

    public function privacyPolicy()
    {
        $post = PostConfig::where('module_id', '=', Module::whereSlug('privacy_policy')->first()->id)->first();
        return view('site.pages.privacyPolicy')->withPost($post->postByLang);
    }

    public function disclaimer()
    {
        $post = PostConfig::where('module_id', '=', Module::whereSlug('disclaimer')->first()->id)->first();
        return view('site.pages.disclaimer')->withPost($post->postByLang);
    }

    public function sitemap()
    {
        $post = PostConfig::where('module_id', '=', Module::whereSlug('sitemap')->first()->id)->first();
        return view('site.pages.sitemap')->withPost($post->postByLang);
    }

    public function getBlogs()
    {
        return view('site.pages.blogs');
    }

    public function getContactUs()
    {
        return view('site.pages.contact');
    }

    public function getStore()
    {
        $products = Product::where('is_active',1)->orderBy('id', 'asc')->paginate(8);
        return view('site.pages.store')->with('products', $products);
    }

    public function productDetails($slug, Request $request){

        $product = Product::where('slug_ar', '=', $slug)->orWhere('slug_en', '=', $slug)->first();
        return view('site.pages.productDetails')->with('product',$product);
    }

    public function changeLanguage($lang, Request $request)
    {

        $url = url()->previous();
        $url_explode = explode("/", $url);
        $url_explode[3] = $lang;
        $redir = implode('/', $url_explode);
//        if (isset($url_explode[5])) {
//            $post = Post::whereSlug(urldecode($url_explode[5]))->first();
//            $allposts = Post::whereConfigId($post->config_id)->whereLang($lang)->first();
//            return redirect($url_explode[3] . '/' . $url_explode[4] . '/' );
//        }
        return redirect($redir);
    }

    public function errors()
    {
        return view('site.pages.errors');
    }
}

