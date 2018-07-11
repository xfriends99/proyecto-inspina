<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'code', 'state', 'privacy', 'account', 'position', 'area', 'leave_company'
    ];

    public function channels()
    {
        return $this->belongsToMany(Channel::class)->withTimestamps()
            ->withPivot([
                'access_token', 'refresh_token', 'account'
            ]);
    }


}

  