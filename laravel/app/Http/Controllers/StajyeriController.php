<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stajyeri;
use App\muh_iller;
use App\muh_ilceler;
use Validator;
use DB;
use Input;

class StajyeriController extends Controller
{
   
    public function getstajyeri(Request $request){

    	$muh_iller = muh_iller::all();
    	$muh_ilceler = muh_ilceler::all();
    	$stajyeri = stajyeri::all(); 
    	$staj_yeri = DB::table('staj_yeri')
                   ->paginate(2);

    	return view('stajyeri',compact('muh_iller','muh_ilceler','stajyeri','staj_yeri'));
    }
   
    public function poststajyerikaydet(Request $request)
    {

        $term=$request->term;
        $data = muh_ilceler::where('baslik','LIKE','%'.$term.'%')
            ->take(10)
            ->get();
            $results=array();
            foreach ($data as $key => $d)
            {
                $results[]=['ilce_id'=>$d->id,'value'=>$v->baslik];
            }
        $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                'faks' => 'numeric ',
                'webadresi' => 'required',
                'telno' => 'numeric',
                'il_id' => 'required',
                'ilce_id' => 'required'
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/stajyeri')->withErrors($kontrol)->withInput();
        }else{
                
                $adi = $request->input('adi');
                $faks = $request->input('faks');
                $webadresi = $request->input('webadresi');
                $telno = $request->input('telno');
                $il_id = $request->input('il_id');
                $ilce_id = $request->input('ilce_id');
                       
                $kaydet = stajyeri::create(array(
                    'adi' => $adi,
                    'faks' => $faks,
                    'webadresi' => $webadresi,
                    'telno' => $telno,
                    'il_id' => $il_id,
                    'ilce_id' => $ilce_id,

                    ));
            
        }
                if($kaydet)
                {
                    return redirect()->route('stajyeri');
                }
        
    }
    public function getstajyeriguncelle($id)
    {
    	$stajyeri = stajyeri::find($id);
    	$muh_iller = muh_iller::all();
    	$muh_ilceler = muh_ilceler::all();
        $staj_yeri = DB::table('staj_yeri')
                   ->get();

    	
    	return view('stajyeriguncelle',compact('stajyeri','muh_iller','muh_ilceler','staj_yeri'));
     }

     public function poststajyeriguncelle(Request $r,$id)
     {
     	  $stajyeri = stajyeri::find($id);
     	  $stajyeri->adi = $r->adi;
     	  $stajyeri->faks = $r->faks;
     	  $stajyeri->webadresi = $r->webadresi;
     	  $stajyeri->telno = $r->telno;
     	  $stajyeri->il_id = $r->il_id;
     	  $stajyeri->ilce_id = $r->ilce_id;
     	  $stajyeri->save();
     	  return redirect()->route('stajyeri');
               
     }

     public function poststajyerisil($id)
     {
     	stajyeri::destroy($id);
     	stajyeri::where('id',$id)->delete();

     	return back();
     }
}
 