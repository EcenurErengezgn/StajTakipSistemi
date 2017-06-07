<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bolum extends Model
{
    protected $table = 'bolum';
    protected $fillable=['adi'];
    protected $primaryKey='id';
    public $timestamps=false;

    public function user()
    {
    	return $this->hasMany('App\User');
    }
     public function mufredatdurumu()
    {
    	return $this->hasMany('App\mufredatdurumu');
    }
}
