<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokuman extends Model
{
    protected $table = 'dokuman';
    protected $fillable=['yolu','ogrenci_id'];
    protected $primaryKey='id';
    public $timestamps=false;

    public function ogrenci()

    {
        return $this->hasMany('App\ogrenci');
    }
}
