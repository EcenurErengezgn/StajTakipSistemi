<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unvan extends Model
{
     protected $table = "unvan";

    protected $fillable = ['adi'];
    public $timestamps = false;


    public function kullanici()
    {
    	return $this->hasMany('App\kullanici');
    }
}
