<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model',
    ];

   
}
