<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        'name','code',
    ];
    public $timestamps = false;
}
