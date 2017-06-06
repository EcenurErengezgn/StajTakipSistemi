<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mufredat extends Model
{
    protected $table = 'mufredat';
    protected $fillable=['adi','gun','bolum_id'];
    protected $primaryKey='id';
    public $timestamps=false;

    public function bolum()
    {
        return $this->hasMany('App\bolum');
    }
   
}
