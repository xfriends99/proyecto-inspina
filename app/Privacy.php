<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code', 
    ];

}