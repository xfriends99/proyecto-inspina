<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecommerce extends Model
{
    protected $fillable = [
        'name','state','price',
    ];
}
