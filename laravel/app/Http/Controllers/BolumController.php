<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bolum;
use Validator;
use DB;

class BolumController extends Controller
{
     public function getbolum()

    {
        $bolum = DB::table('bolum')
                ->select('id','adi')
                ->get();
        return view('bolum',array('bolumliste'=>$bolum));
    }

    public function postbolumkaydet(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/bolum')->withErrors($kontrol)->withInput();
        }else{

                $adi = $request->input('adi');
               
                $kaydet = bolum::create(array(
                    'adi' => $adi
                    ));
                if($kaydet)
                {
                    return redirect()->route('bolum');
                }
        }
    }

    public function getbolumsil($id=0)
    {
        if($id!=0){
           $bolumsil = bolum::where('id','=',$id)->delete();
           if($bolumsil) {
            return redirect()->route('bolum');
           }else{
            return null;
           }

        }else{
            return null;
        }
    }

    public function getbolumguncelle($id=0)
    {
         $bolum = DB::table('bolum')
                ->select('id','adi')
                ->get();

        $bolums = bolum::whereRaw('id=?',array($id))->first();
        return view('bolum',array('bolumliste'=>$bolum, 'bolumguncelle'=>$bolums));

    }

    public function postbolumguncelle(Request $request)
    {
         $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/bolum')->withErrors($kontrol)->withInput();
        }else{
                $id = $request->input('id');
                $adi = $request->input('adi');
                $bolums = bolum::find($id);

                $bolums->adi=$adi;
                $bolums->save();
               return redirect()->route('bolum');
               }

    }
    

}
