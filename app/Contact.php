<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   protected $fillable = [
        'code','state','type_contact','first_name','second_name','last-Name','gender','date_of_birth','dni','cuit','imagen','mail_default','mail_work','mail_personal','phone_movil','phone_fixed','phone_work','phone_internal_work',
    ];
}


