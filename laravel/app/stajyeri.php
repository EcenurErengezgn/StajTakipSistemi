<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stajyeri extends Model
{
    
    protected $table = 'stajyeri';
    protected $fillable=['adi','faks','webadresi','telno','il_id','ilce_id'];
    protected $primaryKey='id';
    public $timestamps=false;

    public function muh_iller()

    {
        return $this->hasMany('App\muh_iller');
    }
   public function muh_ilceler()

    {
        return $this->hasMany('muh_ilceler');
    }

}
