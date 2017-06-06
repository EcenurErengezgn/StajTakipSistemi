<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AramaController extends Controller
{
    public function index()
    {
    	return view('arama');
    }
    public function arama(Request $request)
    {
    	if($request->ajax())
    	{
    		$output="";
    		$staj_yeri=DB::table('staj_yeri')
    		->where('adi','LIKE','%'.$request->arama.'%')
    		->orWhere('il','lIKE','%'.$request->arama.'%')
    		->get();

    		if ($staj_yeri)
    		{
    			foreach($staj_yeri as $key => $staj_yer){
    				$çıktı.='<tr>'.
    				'<td>'.$staj_yer->id.'</td>'.
    				'<td>'.$staj_yer->adi.'</td>'.
    				'<td>'.$staj_yer->webadresi.'</td>'.
    				'<td>'.$staj_yer->telno.'</td>'.
    				'<td>'.$staj_yer->faks.'</td>'.
    				'<td>'.$staj_yer->il.'</td>'.
    				'<td>'.$staj_yer->ilce.'</td>'.
    				'</tr>';
    			}
    				return Response($cıktı);
    		}

    	}
    }


}
