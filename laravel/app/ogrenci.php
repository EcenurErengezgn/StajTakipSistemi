<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ogrenci extends Model
{
    protected $table = 'ogrenci';
    protected $fillable=['ogrenci_no','sinif','cep_tel','kullanici_id','mufredat_id'];
    protected $primaryKey='id';
    public $timestamps=false;

    public function User()

    {
        return $this->hasMany('App\User');
    }
   public function mufredat()

    {
        return $this->hasMany('App\mufredat');
    }
}
