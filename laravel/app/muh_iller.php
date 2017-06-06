<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class muh_iller extends Model
{
    protected $table = 'muh_iller';
    protected $fillable=['baslik'];
    protected $primaryKey='id';
    public $timestamps=false;


    
    public function muh_ilceler()

    {
        return $this->hasMany('App\muh_ilceler');
    }

    public function stajyeri()
    {
    	return $this->belongsTo('App\stajyeri');
    }
}
