<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stajturu extends Model
{
    protected $table = "stajturu";

    protected $fillable = ['adi'];
    public $timestamps = false;
}
