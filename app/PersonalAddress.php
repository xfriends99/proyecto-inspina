<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalAddress extends Model
{
     protected $fillable = [
        'address','number','floor','department','zip_code',
    ];
}
