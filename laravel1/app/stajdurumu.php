<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stajdurumu extends Model
{
    protected $table = "stajdurumu";

    protected $fillable = ['adi'];
    public $timestamps = false;
}