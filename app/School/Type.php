<?php

namespace SchoolSoft\School;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
   public $fillable = ['type_name'];

    public function users()
    {
        return $this->hasMany('SchoolSoft\School\User');
    }
}
