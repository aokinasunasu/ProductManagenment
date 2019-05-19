<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // バリデーション
    public static $rules = array(
        'name' => 'required',
        'abbreviation' => 'required',
        'category' => 'required',
        'unit' => 'required|integer',
        'unit_selling_price' => 'required|integer',
        'unit_price' => 'required|integer',
        'image_url' => 'image|mimes:jpg,jpeg,png|max:2000'
    );

    public static $messages = array(
        'required' => '必須入力です',
        'integer' => '数値を入力してください',
        'image_url' => '画像を指定してね',
    );

    protected $guarded = ['id'];

}
