<?php

namespace SchoolSoft\School;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Carbon\Carbon;

class User extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','username','father_name','mother_name','guardian_name',
        'gender','designation','mother_profession','father_profession','address','religion',
        'phone','birth_date', 'joining_date','class','section','roll', 'email', 'password'];
//    protected $dates = ['birth_date','joining_date'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
   /* public function getBirthDateAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }*/
    public function setBirthDateAttribute($value)
    {
        $this->attributes['birth_date'] = Carbon::createFromFormat('d/m/Y',$value);
    }

    public function setJoiningDateAttribute($value)
    {
        $this->attributes['joining_date'] = Carbon::createFromFormat('d/m/Y',$value);
    }
    protected $hidden = ['password', 'remember_token'];


    public function photos()
    {
        return $this->morphMany('SchoolSoft\School\Photo', 'imageable');
    }
}
