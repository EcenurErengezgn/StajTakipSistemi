<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mufredat;
use App\bolum;
use DB;
use Validator;
class MufredatController extends Controller
{
     public function getmufredat(){

    	$bolum = bolum::all();
    	$mufredat = mufredat::all(); 
    	$mufredat_durumu = DB::table('mufredat_durumu')
    	           ->get();

    	return view('mufredat',compact('bolum','mufredat','mufredat_durumu'));
    }
    public function postmufredatkaydet(Request $request)
    {
    	$kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                'gun' => 'numeric ',
                'bolum_id' => 'required'
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/mufredat')->withErrors($kontrol)->withInput();
        }else{
                
                $adi = $request->input('adi');
                $gun = $request->input('gun');
                $bolum_id = $request->input('bolum_id');
                       
                $kaydet = mufredat::create(array(
                    'adi' => $adi,
                    'gun' => $gun,
                    'bolum_id' => $bolum_id,
                    

                    ));
            }
                if($kaydet)
                {
                    return redirect()->route('mufredat');
                }
    }
    public function getmufredatguncelle($id)
    {
    	$mufredat = mufredat::find($id);
    	$bolum = bolum::all();
    	
    	return view('mufredatguncelle',compact('mufredat','bolum'));
     }

     public function postmufredatguncelle(Request $r,$id)
     {
     	  $mufredat = mufredat::find($id);
     	  $mufredat->adi = $r->adi;
     	  $mufredat->gun = $r->gun;
     	  $mufredat->bolum_id = $r->bolum_id;
     	  $mufredat->save();
     	  return redirect()->route('mufredat');
               
     }

     public function postmufredatsil($id)
     {
     	mufredat::destroy($id);
     	mufredat::where('id',$id)->delete();

     	return back();
     }
}
