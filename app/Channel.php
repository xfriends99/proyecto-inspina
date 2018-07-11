<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = [
        'name', 'code',
    ];

    public function contacts()
    {
        return $this->belongsToMany(Contact::class)->withTimestamps()
            ->withPivot([
                'access_token', 'refresh_token', 'account'
            ]);
    }

    public function accounts()
    {
        return $this->belongsToMany(Account::class)->withTimestamps()
            ->withPivot([
                'access_token', 'refresh_token', 'account'
            ]);
    }
}
