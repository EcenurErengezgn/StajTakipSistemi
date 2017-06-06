<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stajdonemi extends Model
{
     protected $table = "stajdonemi";

    protected $fillable = ['adi'];
    public $timestamps = false;
}
