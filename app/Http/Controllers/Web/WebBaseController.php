<?php
namespace app\Http\Controllers\Web;
use App\Models\Product;
use Session;
use App\Http\Controllers\Controller,
    App\Models\BaseModel,
    App\Models\Configuration,
    App\Models\Module,App\Models\Branch,
    App\Models\PostConfig;

class WebBaseController extends Controller{
    public $config;
    public $currentBranch;
    public static $isAjax;

    public function __construct(){
        $lang = Session::get('locale');
        BaseModel::$language = $lang;
        view()->share('lang', $lang);
        view()->share('name', 'name_' . $lang);

        $this->config = Configuration::where('config_lang', '=', $lang)->first();
        $this->config->main = Configuration::where('config_lang', '=', 'config')->first();
        $this->config->social = Configuration::select('social')->where('config_lang', '=', 'config')->first()->social;
        view()->share('config', $this->config);
        view()->share('img', asset('public/web/img'));
        view()->share('css', asset('public/web/css'));
        view()->share('js', asset('public/web/js'));
        view()->share('up', asset('public/upload'));
        view()->share('fonts', asset('public/web/fonts'));
        view()->share('vendors', asset('public/web/vendors'));
        view()->share('branch', Branch::whereType(1)->first());
        view()->share('product', Product::all());


        $this::$isAjax = Request()->ajax() ? true : false;
    }
}
