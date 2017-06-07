<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','last_name','TC_number', 'email', 'password','active','department_id','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $with = ['role','bolum'];


    public function role()

    {
        return $this->hasOne('App\Role','id','role_id');
    }
    public function bolum()

    {
        return $this->hasOne('App\bolum','id','department_id');
    }
    private function checkIfUserHasBolum($need_bolum)
    {
        return (strtolower($need_bolum)==strtolower($this->bolum->adi)) ? true : null;
    }
    public function hasBolum($bolums)
    {
        if (is_array($bolums))
        {
            foreach($bolums as $need_bolum) {
                if($this->checkIfUserHasBolum($need_bolum))
                {
                    return true;
                }
            }
        }else {
            return $this->checkIfUserHasBolum($bolums);
        }
        return false;
    }

    private function checkIfUserHasRole($need_role)
    {
        return (strtolower($need_role)==strtolower($this->role->name)) ? true : null;
    }
    public function hasRole($roles)
    {
        if (is_array($roles))
        {
            foreach($roles as $need_role) {
                if($this->checkIfUserHasRole($need_role))
                {
                    return true;
                }
            }
        }else {
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }
}
