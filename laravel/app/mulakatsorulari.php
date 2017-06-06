<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mulakatsorulari extends Model
{
    protected $table = 'mulakatsorulari';
    protected $fillable=['soru'];
    protected $primaryKey='id';
    public $timestamps=false;

    public function mulakatpuanlamasi()
    {
    	return $this->belongsTo('App\mulakatpuanlamasi');
    }
}
