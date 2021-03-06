<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxAddress extends Model
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

