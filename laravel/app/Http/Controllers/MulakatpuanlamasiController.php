<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mulakatpuanlamasi;
use App\mulakatsorulari;
use Validator;
use DB;

class MulakatpuanlamasiController extends Controller
{
    public function getmulakatpuanlamasi(){

    	$mulakatsorulari = mulakatsorulari::all();
    	$mulakatpuanlamasi = mulakatpuanlamasi::all(); 
    	$mulakat = DB::table('mulakatsoru')
    	           ->get();

    	return view('mulakatpuanlamasi',compact('mulakatsorulari','mulakat','mulakatpuanlamasi'));
    }

    public function postmulakatpuanlamasikaydet(Request $request)
    {
    	 $kontrol = Validator::make($request->all(),array(
                'cevap' => 'required',
                'puan' => 'numeric ',
                'mulakatsorulari_id' => 'required'
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/mulakatpuanlamasi')->withErrors($kontrol)->withInput();
        }else{
                
                $cevap = $request->input('cevap');
                $puan = $request->input('puan');
                $mulakatsorulari_id = $request->input('mulakatsorulari_id');
                $kaydet = mulakatpuanlamasi::create(array(
                    'cevap' => $cevap,
                    'puan' => $puan,
                    'mulakatsorulari_id' => $mulakatsorulari_id,

                    ));
            }
                if($kaydet)
                {
                    return redirect()->route('mulakatpuanlamasi');
                }
        
    }
    public function getmulakatpuanlamasiguncelle($id)
    {
    	$mulakatpuanlamasi = mulakatpuanlamasi::find($id);
    	$mulakatsorulari = mulakatsorulari::all();
    	
    	return view('mulakatpuanlamasiguncelle',compact('mulakatpuanlamasi','mulakatsorulari'));
     }

     public function postmulakatpuanlamasiguncelle(Request $r,$id)
     {
     	  $mulakatpuanlamasi = mulakatpuanlamasi::find($id);
     	  $mulakatpuanlamasi->mulakatsorulari_id = $r->mulakatsorulari_id;
     	  $mulakatpuanlamasi->cevap = $r->cevap;
     	  $mulakatpuanlamasi->puan = $r->puan;
     	  $mulakatpuanlamasi->save();
     	  return redirect()->route('mulakatpuanlamasi');
               
     }

     public function postmulakatpuanlamasisil($id)
     {
     	mulakatpuanlamasi::destroy($id);
     	mulakatpuanlamasi::where('id',$id)->delete();

     	return back();
     }
}
