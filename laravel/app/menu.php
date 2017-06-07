<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    
     protected $table = "menu";

    protected $fillable = ['adi'];

    public function altmenu()
    {
    	return $this->hasMany('altmenu');
    }
}
