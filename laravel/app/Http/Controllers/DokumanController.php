<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\dokuman;

class DokumanController extends Controller
{
    public function getdokuman()
    {
    	return view('dokuman');

    }
    public function postdokumankaydet(Request $request)
    {
    	  $dokuman = $request->input('yolu');
    	echo 'File Extension: '.$dokuman->getClientOriginalExtension();
      echo '<br>';
    	return view('dokuman');

    }
}
