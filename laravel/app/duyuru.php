<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class duyuru extends Model
{
    
    protected $table = 'duyuru';
    protected $fillable=['baslik','icerik'];
    protected $primaryKey='id';
    public $timestamps=false;
}
