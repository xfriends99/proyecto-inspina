<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 'code',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function localities()
    {
        return $this->hasMany(Locality::class);
    }
}
