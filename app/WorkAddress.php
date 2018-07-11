<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkAddress extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address', 'number', 'floor','department','zip_code',
    ];

}
