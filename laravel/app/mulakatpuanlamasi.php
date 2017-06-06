<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mulakatpuanlamasi extends Model
{
     protected $table = 'mulakatpuanlamasi';
    protected $fillable=['cevap','puan','mulakatsorulari_id'];
    protected $primaryKey='id';
    public $timestamps=false;

    public function mulakatsorulari()

    {
        return $this->hasMany('App\mulakatsorulari');
    }
}
