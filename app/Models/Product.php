<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//    public $timestamps = false;
    public static $rules_create = [
        'title_en' => 'required|max:75|unique:products,title_en',
        'title_ar' => 'required|max:75|unique:products,title_ar',
        'brief_en' => 'required|max:150',
        'brief_ar' => 'required|max:150',
        'description_en' => 'required',
        'description_ar' => 'required',
        'is_available' => 'required',
        'main_image' => 'required|mimes:jpeg,jpg,png|max:4096',
        'sub_img_1' => 'mimes:jpeg,jpg,png|max:4096',
        'sub_img_2' => 'mimes:jpeg,jpg,png|max:4096',
        'sub_img_3' => 'mimes:jpeg,jpg,png|max:4096',
        'sub_img_4' => 'mimes:jpeg,jpg,png|max:4096',
        'slug_ar' => 'unique:products,slug_ar',
        'slug_en' => 'unique:products,slug_en'

    ];

    public static $rules_edit = [
        'title_en' => 'required|max:75',
        'title_ar' => 'required|max:75',
        'brief_en' => 'required|max:150',
        'brief_ar' => 'required|max:150',
        'description_en' => 'required',
        'description_ar' => 'required',
        'is_available' => 'required',
        'sub_img_1' => 'mimes:jpeg,jpg,png|max:4096',
        'sub_img_2' => 'mimes:jpeg,jpg,png|max:4096',
        'sub_img_3' => 'mimes:jpeg,jpg,png|max:4096',
        'sub_img_4' => 'mimes:jpeg,jpg,png|max:4096',
        'slug_ar' => 'unique:products,slug_ar',
        'slug_en' => 'unique:products,slug_en'
    ];
}
