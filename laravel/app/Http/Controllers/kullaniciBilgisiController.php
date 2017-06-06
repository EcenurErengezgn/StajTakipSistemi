<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; 
use App\User;
class kullaniciBilgisiController extends Controller
{
    public function kullaniciBilgisi()
    {
    	return view('kullaniciBilgisi');
    }
     
}
