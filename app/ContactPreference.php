<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactPreference extends Model
{
   protected $fillable = [
        'name','code',
    ];
}
