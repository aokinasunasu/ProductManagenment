<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Definition extends Model
{
    //
    protected $guarded = ['name'];
    public $incrementing = false;
    protected $primaryKey = 'name';
}
