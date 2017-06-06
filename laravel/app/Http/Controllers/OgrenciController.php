<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ogrenci;
use App\User;
use App\mufredat;
use DB;
use Validator;
class OgrenciController extends Controller
{
    public function getogrenci(){

    	$kullanici = User::all();
    	$mufredat = mufredat::all();
    	$ogrenci = ogrenci::all(); 
    	$ogr = DB::table('ogr')
    	           ->get();

    	return view('ogrenci',compact('kullanici','mufredat','ogrenci','ogr'));
    }
    public function postogrencikaydet(Request $request)
    {
    	
        $kontrol = Validator::make($request->all(),array(
                'ogrenci_no' => 'numeric',
                'sinif' => 'numeric ',
                'cep_tel' => 'numeric',
                'kullanici_id' => 'required',
                'mufredat_id' => 'required'
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/ogrenci')->withErrors($kontrol)->withInput();
        }else{
                
                $ogrenci_no = $request->input('ogrenci_no');
                $sinif = $request->input('sinif');
                $cep_tel = $request->input('cep_tel');
                $kullanici_id = $request->input('kullanici_id');
                $mufredat_id = $request->input('mufredat_id');
                       
                $kaydet = ogrenci::create(array(
                    'ogrenci_no' => $ogrenci_no,
                    'sinif' => $sinif,
                    'cep_tel' => $cep_tel,
                    'kullanici_id' => $kullanici_id,
                    'mufredat_id' => $mufredat_id,
                    

                    ));
            }
                if($kaydet)
                {
                    return redirect()->route('ogrenci');
                }
    }
    public function getogrenciguncelle($id)
    {
    	$ogrenci = ogrenci::find($id);
    	$kullanici = User::all();
    	$mufredat = mufredat::all();
    	
    	return view('ogrenciguncelle',compact('ogrenci','kullanici','mufredat'));
     }

     public function postogrenciguncelle(Request $r,$id)
     {
     	  $ogrenci = ogrenci::find($id);
     	  $ogrenci->ogrenci_no = $r->ogrenci_no;
     	  $ogrenci->sinif = $r->sinif;
     	  $ogrenci->cep_tel = $r->cep_tel;
     	  $ogrenci->kullanici_id = $r->kullanici_id;
     	  $ogrenci->mufredat_id = $r->mufredat_id;
     	  $ogrenci->save();
     	  return redirect()->route('ogrenci');
               
     }

     public function postogrencisil($id)
     {
     	ogrenci::destroy($id);
     	ogrenci::where('id',$id)->delete();

     	return back();
     }
}
