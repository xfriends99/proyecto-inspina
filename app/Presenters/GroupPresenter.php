<?php

namespace App\Presenters;

use Carbon\Carbon;
use App\Group;
use McCool\LaravelAutoPresenter\BasePresenter;

class GroupPresenter extends BasePresenter
{
    public function date_format()
    {
        $created = $this->wrappedObject->created_at;

        return $created->format('d/m/Y h:i');
    }

    public function full_name()
    {
        return "{$this->wrappedObject->GetUserName()} {$this->wrappedObject->GetUserLastName()}";
    }

    public function members_count()
    {
        $members = $this->wrappedObject->members;
        return $members ? $members->count() : 0;
    }
}

