<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guarded = ['id'];

    public function getItems() {
        return $this->hasMany('App\OrderItem');
    }
}
