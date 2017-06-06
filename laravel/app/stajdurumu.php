<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stajdurumu extends Model
{
    protected $table = 'stajdurumu';
    protected $fillable=['adi'];
    protected $primaryKey='id';
    public $timestamps=false;

    public function user()
    {
    	return $this->hasMany('App\User','role_id','id');
    }
}
