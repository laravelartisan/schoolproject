<?php

namespace SchoolSoft\School;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected   $fillable = ['path','user_id','imageable_id','imageable_type'];

    public function imageable()
    {
        return $this->morphTo();
    }
    public function user(){

        return $this->belongsTo('SchoolSoft\School\User');
    }
}
