<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listeleme extends Model
{
	protected $table = "listeleme";

    protected $fillable = ['adi','altmenu_id','menu_id'];

    public function altmenu()
    {
    	return $this->belongsTo('App\altmenu');
    }

    public function menu()
    {
    	return $this->belongsTo('App\menu');
    }

 }
