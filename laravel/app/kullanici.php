<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kullanici extends Model
{
     protected $table = "kullanici";

    protected $fillable = ['adi','soyadi','tc_no','email','sifre','bolum_id','unvan_id'];
      public $timestamps = false;


    public function unvan()
    {
    	return $this->belongsTo('App\unvan');
    }
    public function bolum()
    {
    	return $this->belongsTo('App\bolum');
    }
}
