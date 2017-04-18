<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\stajturu;
use App\stajdurumu;
use App\stajdonemi;
use App\stajyeri;
use App\unvan;
use App\bolum;
use App\kullanici;

class IndexController extends Controller
{
    public function getIndex()
    {
    	
    	return view('index.index');
    	
    }
    
    public function getakademisyenGirisi()
    {
       
                return view('index.akademisyenGirisi');


    }

    public function getstajTuru()

    {
        $stajTuru = DB::table('stajturu')
                ->select('id','adi')
                ->get();
        return view('index.stajTuru',array('stajTuruliste'=>$stajTuru));
    }

    public function poststajTurukaydet(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
        }else{

                $adi = $request->input('adi');
               
                $kaydet = stajturu::create(array(
                    'adi' => $adi
                    ));
                if($kaydet)
                {
                    return redirect()->route('stajTuru');
                }
        }
    }

    public function getstajTurusil($id=0)
    {
        if($id!=0){
           $stajTurusil = stajturu::where('id','=',$id)->delete();
           if($stajTurusil) {
            return redirect()->route('stajTuru');
           }else{
            return null;
           }

        }else{
            return null;
        }
    }

    public function getstajTuruguncelle($id=0)
    {
         $stajTuru = DB::table('stajturu')
                ->select('id','adi')
                ->get();

        $stajTurus = stajturu::whereRaw('id=?',array($id))->first();
        return view('index.stajTuru',array('stajTuruliste'=>$stajTuru, 'stajTuruguncelle'=>$stajTurus));

    }

    public function poststajTuruguncelle(Request $request)
    {
         $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
        }else{
                $id = $request->input('id');
                $adi = $request->input('adi');
                $stajTurus = stajturu::find($id);

                $stajTurus->adi=$adi;
                $stajTurus->save();
               return redirect()->route('stajTuru');
               }

    }

     public function getstajDurumu()

    {
        $stajDurumu = DB::table('stajdurumu')
                ->select('id','adi')
                ->get();
        return view('index.stajDurumu',array('stajDurumuliste'=>$stajDurumu));
    }

    public function poststajDurumukaydet(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
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
        return view('index.stajDurumu',array('stajDurumuliste'=>$stajDurumu, 'stajDurumuguncelle'=>$stajDurumus));

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
    

   public function getstajDonemi()

    {
        $stajDonemi = DB::table('stajdonemi')
                ->select('id','adi')
                ->get();
        return view('index.stajDonemi',array('stajDonemiliste'=>$stajDonemi));
    }

    public function poststajDonemikaydet(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
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
        return view('index.stajDonemi',array('stajDonemiliste'=>$stajDonemi, 'stajDonemiguncelle'=>$stajDonemis));

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
    


      public function getunvan()

    {
        $unvan = DB::table('unvan')
                ->select('id','adi')
                ->get();
        return view('index.unvan',array('unvanliste'=>$unvan));
    }

    public function postunvankaydet(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
        }else{

                $adi = $request->input('adi');
               
                $kaydet = unvan::create(array(
                    'adi' => $adi
                    ));
                if($kaydet)
                {
                    return redirect()->route('unvan');
                }
        }
    }

    public function getunvansil($id=0)
    {
        if($id!=0){
           $unvansil = unvan::where('id','=',$id)->delete();
           if($unvansil) {
            return redirect()->route('unvan');
           }else{
            return null;
           }

        }else{
            return null;
        }
    }

    public function getunvanguncelle($id=0)
    {
         $unvan = DB::table('unvan')
                ->select('id','adi')
                ->get();

        $unvans = unvan::whereRaw('id=?',array($id))->first();
        return view('index.unvan',array('unvanliste'=>$unvan, 'unvanguncelle'=>$unvans));

    }

    public function postunvanguncelle(Request $request)
    {
         $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
        }else{
                $id = $request->input('id');
                $adi = $request->input('adi');
                $unvans = unvan::find($id);

                $unvans->adi=$adi;
                $unvans->save();
               return redirect()->route('unvan');
               }

        
}
         public function getbolum()

    {
        $bolum = DB::table('bolum')
                ->select('id','adi')
                ->get();
        return view('index.bolum',array('bolumliste'=>$bolum));
    }

    public function postbolumkaydet(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
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
        return view('index.bolum',array('bolumliste'=>$bolum, 'bolumguncelle'=>$bolums));

    }

    public function postbolumguncelle(Request $request)
    {
         $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
        }else{
                $id = $request->input('id');
                $adi = $request->input('adi');
                $bolums = bolum::find($id);

                $bolums->adi=$adi;
                $bolums->save();
               return redirect()->route('bolum');
               }

    }
    

 public function getkullanici()
    {

        $kullanici = DB::table('kullanici')
                    ->join('unvan','unvan.id','=','kullanici.unvan_id')
                    ->join('bolum','bolum.id','=','kullanici.bolum_id')
                    ->select('kullanici.*','unvan.adi as un_adi','bolum.adi as bol_adi')
                    ->get();
        

                return view('index.kullanici',array('kullaniciliste'=>$kullanici));

    }
    public function postkullanicikaydet(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                'soyadi' => 'required',
                'tc_no' => 'required',
                'email' => 'required',
                'sifre' => 'required',
                'bolum' => 'required',
                'unvan' => 'required'
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
        }else{

                $adi = $request->input('adi');
                $soyadi = $request->input('soyadi');
                $tc_no = $request->input('tc_no');
                $email = $request->input('email');
                $sifre = $request->input('sifre');
                $bolum = $request->input('bolum');
                $unvan = $request->input('unvan');

                $kaydet = kullanici::create(array(
                    'adi' => $adi,
                    'soyadi' => $soyadi,
                    'tc_no' => $tc_no,
                    'email' => $email,
                    'sifre' => $sifre,
                    'bolum_id' => $bolum,
                    'unvan_id' => $unvan
                    ));
                if($kaydet)
                {
                    return redirect()->route('kullanici');
                }
        }
    }
    public function getkullanicisil($id=0)
    {
        if($id!=0){
           $kullanicisil = kullanici::where('id','=',$id)->delete();
           if($kullanicisil) {
            return redirect()->route('kullanici');
           }else{
            return null;
           }

        }else{
            return null;
        }
    }
    public function getkullaniciguncelle($id=0)
    {
        $kullanici = DB::table('kullanici')
                    ->join('unvan','unvan.id','=','kullanici.unvan_id')
                    ->join('bolum','bolum.id','=','kullanici.bolum_id')
                    ->select('kullanici.*','unvan.adi as un_adi','bolum.adi as bol_adi')
                    ->get();
        $kullanicilar = kullanici::whereRaw('id=?',array($id))->first();
                return view('index.kullanici',array('kullaniciliste'=>$kullanici,'kullaniciguncelle'=>$kullanicilar));
    
    }
    public function postkullaniciguncelle(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                'soyadi' => 'required',
                'tc_no' => 'required',
                'email' => 'required',
                'sifre' => 'required',
                'bolum' => 'required',
                'unvan' => 'required'
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
        }else{
                $id = $request->input('id');
                $adi = $request->input('adi');
                $soyadi = $request->input('soyadi');
                $tc_no = $request->input('tc_no');
                $email = $request->input('email');
                $sifre = $request->input('sifre');
                $bolum = $request->input('bolum');
                $unvan = $request->input('unvan');
                $kullanicilar =kullanici::find($id);
                
                $kullanicilar->adi=$adi;
                $kullanicilar->soyadi=$soyadi;
                $kullanicilar->tc_no=$tc_no;
                $kullanicilar->email=$email;
                $kullanicilar->sifre=$sifre;
                $kullanicilar->bolum_id=$bolum;
                $kullanicilar->unvan_id=$unvan;
                $kullanicilar->save();
                return redirect()->route('kullanici');
        }


    }
    

public function getstajYeri()
    {

        $stajYeri = DB::table('stajyeri')
                    ->join('muh_iller','muh_iller.id','=','stajyeri.il_id')
                    ->join('muh_ilceler','muh_ilceler.id','=','stajyeri.ilce_id')
                    ->select('stajYeri.*','muh_iller.baslik as il_adi','muh_ilceler.baslik as ilce_adi')
                    ->get();
        

                return view('index.stajYeri',array('stajYeriliste'=>$stajYeri));

    }
    public function poststajYerikaydet(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                'faks' => 'required',
                'webadresi' => 'required',
                'telno' => 'required',
                'il_id' => 'required',
                'ilce_id' => 'required'
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
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
                    'ilce_id' => $ilce,
                    
                    ));
                if($kaydet)
                {
                    return redirect()->route('stajYeri');
                }
        }
    }
    public function getstajYerisil($id=0)
    {
        if($id!=0){
           $stajYerisil = stajyeri::where('id','=',$id)->delete();
           if($stajYerisil) {
            return redirect()->route('stajYeri');
           }else{
            return null;
           }

        }else{
            return null;
        }
    }
    public function getstajYeriguncelle($id=0)
    {
         $stajYeri = DB::table('stajyeri')
                    ->join('muh_iller','muh_iller.id','=','stajyeri.il_id')
                    ->join('muh_ilceler','muh_ilceler.id','=','stajyeri.ilce_id')
                    ->select('stajYeri.*','muh_iller.baslik as il_adi','muh_ilceler.baslik as ilce_adi')
                    ->get();
        $stajYeris = stajyeri::whereRaw('id=?',array($id))->first();
                return view('index.stajYeri ',array('stajYeri liste'=>$stajYeri ,'stajYeriguncelle'=>$stajYeris));
    
    }
    public function poststajYeriguncelle(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                'faks' => 'required',
                'webadresi' => 'required',
                'telno' => 'required',
                'il_id' => 'required',
                'ilce_id' => 'required'
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
        }else{
                 $adi = $request->input('adi');
                $faks = $request->input('faks');
                $webadresi = $request->input('webadresi');
                $telno = $request->input('telno');
                $il_id = $request->input('il_id');
                $ilce_id = $request->input('ilce_id');
                $stajYeris =stajyeri::find($id);
                
                $stajYeris->adi=$adi;
                $stajYeris->faks=$faks;
                $stajYeris->webadresi=$webadresi;
                $stajYeris->telno=$telno;
                $stajYeris->il_id=$il_il;
                $stajYeris->ilce_id=$ilce_id;
                $stajYeris->save();
                return redirect()->route('stajYeri');
        }


    }
    


    


    


}
