<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class altmenu extends Model
{
    protected $table = "altmenu";

    protected $fillable = ['adi','menu_id'];

   public function menu()
    {
    	return $this->belongsTo('menu');
    	
    }
}
