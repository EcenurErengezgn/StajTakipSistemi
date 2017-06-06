<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mulakat;
use App\stajdurumu;
use App\stajdonemi;
use App\stajturu;
use App\ogrenci;
use Validator;
use DB;

class MulakatController extends Controller
{
    public function getmulakat()
    {

    	$mulakat = mulakat::all();
    	$stajturu = stajturu::all(); 
    	$stajdurumu = stajdurumu::all(); 
    	$stajdonemi = stajdonemi::all(); 
    	$ogrenci = ogrenci::all(); 
    	$mulakats = DB::table('mulakats')
    	           ->get();

    	return view('mulakat',compact('mulakat','stajturu','stajdurumu','stajdonemi','ogrenci'));
    	
    }
    public function postmulakatkaydet(Request $request)
    {
    	 $kontrol = Validator::make($request->all(),array(
                'baslangictarihi' => 'date(dd.mm.yy)',
                'bitistarihi' => 'date(dd.mm.yy)',
                'kabulgun' => 'numeric',
                'toplamgun' => 'numeric',
                'aciklama' => 'required',
                'ogrenci_id' => 'required ',
                'stajturu_id' => 'required',
                'stajdurumu_id' => 'required',
                'stajdonemi_id' => 'required'

                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/mulakat')->withErrors($kontrol)->withInput();
        }else{
                
                $baslangictarihi = $request->input('baslangictarihi');
                $bitistarihi = $request->input('bitistarihi');
                $kabulgun = $request->input('kabulgun');
                $toplamgun = $request->input('toplamgun');
                $aciklama = $request->input('aciklama');
                $ogrenci_id = $request->input('ogrenci_id');
                $stajturu_id = $request->input('stajturu_id');
                $stajdurumu_id = $request->input('sstajdurumu_id');
                $stajdonemi_id = $request->input('stajdonemi_id');
                $kaydet = mulakat::create(array(
                    'baslangictarihi' => $baslangictarihi,
                    'bitistarihi' => $bitistarihi,
                    'kabulgun' => $kabulgun,
                    'toplamgun' => $toplamgun,
                    'aciklama' => $aciklama,
                    'ogrenci_id' => $ogrenci_id,
                    'stajdurumu_id' => $stajdurumu_id,
                    'stajdonemi_id' => $stajdonemi_id,
                    'stajturu_id' => $stajturu_id,

                    ));
            }
                if($kaydet)
                {
                    return redirect()->route('mulakatpuanlamasi');
                }
        
    }
    public function getmulakatguncelle($id)
    {
    	$mulakat = mulakat::find($id);
    	$stajturu = stajturu::all(); 
    	$stajdurumu = stajdurumu::all(); 
    	$stajdonemi = stajdonemi::all(); 
    	$ogrenci = ogrenci::all();
    	
    	return view('mulakatguncelle',compact('mulakat','stajturu','stajdurumu','stajdonemi','ogrenci'));
     }

     public function postmulakatguncelle(Request $r,$id)
     {
     	  $mulakat = mulakat::find($id);
     	  $mulakat->ogrenci_id = $r->ogrenci_id;
     	  $mulakat->stajdurumu_id = $r->stajdurumu_id;
     	  $mulakat->stajdonemi_id = $r->stajdonemi_id;
     	  $mulakat->stajturu_id = $r->stajturu_id;
     	  $mulakat->baslangictarihi = $r->baslangictarihi;
     	  $mulakat->bitistarihi = $r->bitistarihi;
     	  $mulakat->kabulgun = $r->kabulgun;
     	  $mulakat->toplamgun = $r->toplamgun;
     	  $mulakat->aciklama = $r->aciklama;

     	  $mulakat->save();
     	  return redirect()->route('mulakat');
               
     }

     public function postmulakatsil($id)
     {
     	mulakat::destroy($id);
     	mulakat::where('id',$id)->delete();

     	return back();
     }
}


