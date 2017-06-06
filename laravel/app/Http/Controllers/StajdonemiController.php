<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stajdonemi;
use Validator;
use DB;

class StajdonemiController extends Controller
{
    public function getstajDonemi()

    {
        $stajDonemi = DB::table('stajdonemi')
                ->select('id','adi')
                ->get();
        return view('stajDonemi',array('stajDonemiliste'=>$stajDonemi));
    }

    public function poststajDonemikaydet(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/stajDonemi')->withErrors($kontrol)->withInput();
        }else{

                $adi = $request->input('adi');
               
                $kaydet = stajdonemi::create(array(
                    'adi' => $adi
                    ));
                if($kaydet)
                {
                    return redirect()->route('stajDonemi');
                }
        }
    }

    public function getstajDonemisil($id=0)
    {
        if($id!=0){
           $stajDonemisil = stajdonemi::where('id','=',$id)->delete();
           if($stajDonemisil) {
            return redirect()->route('stajDonemi');
           }else{
            return null;
           }

        }else{
            return null;
        }
    }

    public function getstajDonemiguncelle($id=0)
    {
         $stajDonemi = DB::table('stajdonemi')
                ->select('id','adi')
                ->get();

        $stajDonemis = stajdonemi::whereRaw('id=?',array($id))->first();
        return view('stajDonemi',array('stajDonemiliste'=>$stajDonemi, 'stajDonemiguncelle'=>$stajDonemis));

    }

    public function poststajDonemiguncelle(Request $request)
    {
         $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
        }else{
                $id = $request->input('id');
                $adi = $request->input('adi');
                $stajDonemis = stajdonemi::find($id);

                $stajDonemis->adi=$adi;
                $stajDonemis->save();
               return redirect()->route('stajDonemi');
               }

    }
}
