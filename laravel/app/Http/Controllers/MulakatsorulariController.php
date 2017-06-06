<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mulakatsorulari;
use Validator;
use DB;
class MulakatsorulariController extends Controller
{
    public function getmulakatsorulari()

    {
        $mulakatsorulari = DB::table('mulakatsorulari')
                ->select('id','soru')
                ->get();
        return view('mulakatsorulari',array('mulakatsorulariliste'=>$mulakatsorulari));
    }

    public function postmulakatsorularikaydet(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'soru' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/mulakatsorulari')->withErrors($kontrol)->withInput();
        }else{

                $soru = $request->input('soru');
               
                $kaydet = mulakatsorulari::create(array(
                    'soru' => $soru
                    ));
                if($kaydet)
                {
                    return redirect()->route('mulakatsorulari');
                }
        }
    }

    public function getmulakatsorularisil($id=0)
    {
        if($id!=0){
           $mulakatsorularisil = mulakatsorulari::where('id','=',$id)->delete();
           if($mulakatsorularisil) {
            return redirect()->route('mulakatsorulari');
           }else{
            return null;
           }

        }else{
            return null;
        }
    }

    public function getmulakatsorulariguncelle($id=0)
    {
         $mulakatsorulari = DB::table('mulakatsorulari')
                ->select('id','soru')
                ->get();

        $mulakatsorularis = mulakatsorulari::whereRaw('id=?',array($id))->first();
        return view('mulakatsorulari',array('mulakatsorulariliste'=>$mulakatsorulari, 'mulakatsorulariguncelle'=>$mulakatsorularis));

    }

    public function postmulakatsorulariguncelle(Request $request)
    {
         $kontrol = Validator::make($request->all(),array(
                'soru' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
        }else{
                $id = $request->input('id');
                $soru = $request->input('soru');
                $mulakatsorularis = mulakatsorulari::find($id);

                $mulakatsorularis->soru=$soru;
                $mulakatsorularis->save();
               return redirect()->route('mulakatsorulari');
               }

    }
}
