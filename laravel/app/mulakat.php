<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mulakat extends Model
{
    protected $table = 'mulakat';
    protected $fillable=['baslangictarihi','bitistarihi','ogrenci_id','stajdurumu_id','stajdonemi_id','stajturu_id','toplamgun','kabulgun','aciklama'];
    protected $primaryKey='id';
    public $timestamps=false;

    public function ogrenci()

    {
        return $this->hasMany('App\ogrenci');
    }
    public function stajdurumu()

    {
        return $this->hasMany('App\stajdurumu');
    }
    public function stajdonemi()

    {
        return $this->hasMany('App\stajdonemi');
    }
    public function stajturu()

    {
        return $this->hasMany('App\stajturu');
    }
}
