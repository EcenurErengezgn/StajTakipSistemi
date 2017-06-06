<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stajturu extends Model
{
    protected $table = 'stajturu';
    protected $fillable=['adi'];
    protected $primaryKey='id';
    public $timestamps=false;

    public function user()
    {
    	return $this->hasMany('App\User','role_id','id');
    }
}
