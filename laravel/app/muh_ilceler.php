<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class muh_ilceler extends Model
{
    protected $table = 'muh_ilceler';
    protected $fillable=['baslik'];
    protected $primaryKey='id';
    public $timestamps=false;

    public function muh_iller()
    {
    	return $this->belongsTo('App\muh_iller');
    }
    public function stajyeri()
    {
    	return $this->belongsTo('App\stajyeri');
    }
}
