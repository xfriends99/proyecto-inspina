<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;
use McCool\LaravelAutoPresenter\HasPresenter;
use App\Presenters\GroupPresenter;

class Group extends Model implements HasPresenter
{
    protected $fillable = [
       'created_by', 'privacy_id', 'name', 'code', 'state', 'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps()
            ->withPivot([
                'access_token', 'refresh_token', 'account'
            ]);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function GetUserName()
    {
        return $this->createdBy ? $this->createdBy->name : null;
    }

    public function GetUserLastName()
    {
        return null;
    }

    public function getPresenterClass()
    {
        return GroupPresenter::class;
    }
}


