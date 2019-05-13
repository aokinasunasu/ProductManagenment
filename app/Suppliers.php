<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    // バリデーション
    public static $rules = array(
        'name' => 'required',
        'display_order' => 'required|integer',
        'contact_name' => 'required',
        'post_code' => 'required',
        'street_address1' => 'required',
        'tel1' => 'required',
        'use_flg' => 'required',
    );

    public static $messages = array(
        'required' => '必須入力です',
        'integer' => '数値を入力してください',
    );

    protected $guarded = ['id'];

}
