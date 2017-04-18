<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bolum extends Model
{
     protected $table = "bolum";

    protected $fillable = ['adi'];
  public $timestamps = false;

    public function kullanici()
    {
    	return $this->hasMany('App\kullanici');
    }
}
