<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stajyeri extends Model
{
    protected $table = "stajturu";

    protected $fillable = ['adi','faks','webadresi','telno','il_id','ilce_id'];
    public $timestamps = false;
}
