<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stajdurumu;
use Validator;
use DB;

class StajdurumuController extends Controller
{
    public function getstajDurumu()

    {
        $stajDurumu = DB::table('stajdurumu')
                ->select('id','adi')
                ->get();
        return view('stajDurumu',array('stajDurumuliste'=>$stajDurumu));
    }

    public function poststajDurumukaydet(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/stajDurumu')->withErrors($kontrol)->withInput();
        }else{

                $adi = $request->input('adi');
               
                $kaydet = stajdurumu::create(array(
                    'adi' => $adi
                    ));
                if($kaydet)
                {
                    return redirect()->route('stajDurumu');
                }
        }
    }

    public function getstajDurumusil($id=0)
    {
        if($id!=0){
           $stajDurumusil = stajdurumu::where('id','=',$id)->delete();
           if($stajDurumusil) {
            return redirect()->route('stajDurumu');
           }else{
            return null;
           }

        }else{
            return null;
        }
    }

    public function getstajDurumuguncelle($id=0)
    {
         $stajDurumu = DB::table('stajdurumu')
                ->select('id','adi')
                ->get();

        $stajDurumus = stajdurumu::whereRaw('id=?',array($id))->first();
        return view('stajDurumu',array('stajDurumuliste'=>$stajDurumu, 'stajDurumuguncelle'=>$stajDurumus));

    }

    public function poststajDurumuguncelle(Request $request)
    {
         $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
        }else{
                $id = $request->input('id');
                $adi = $request->input('adi');
                $stajDurumus = stajdurumu::find($id);

                $stajDurumus->adi=$adi;
                $stajDurumus->save();
               return redirect()->route('stajDurumu');
               }

    }
}
