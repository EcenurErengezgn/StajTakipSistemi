<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stajturu;
use DB;
use Validator;

class StajturuController extends Controller
{
    public function stajTuruliste()
    {
        $stajturus = stajturu::all()
                    ->paginate(10);
        return view('stajturuliste',compact('stajturus'));
    }
    public function getStajturu()
    {
       $stajTuru = stajturu::all();

       return view('stajturu',array('stajTuruliste'=>$stajTuru));

        
    }

    public function poststajturukaydet(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'adi' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/stajturu')->withErrors($kontrol)->withInput();
        }else{

                $adi = $request->input('adi');
               
                $kaydet = stajturu::create(array(
                    'adi' => $adi
                    ));
                if($kaydet)
                {
                    return redirect()->route('stajturu');
                }
        }
    }

    public function getstajturusil($id=0)
    {
        if($id!=0){
           $stajTurusil = stajturu::where('id','=',$id)->delete();
           if($stajTurusil) {
            return redirect()->route('stajturu');
           }else{
            return null;
           }

        }else{
            return null;
        }
    }
    public function getstajturuguncelle($id=0)
    {
         $stajTuru = DB::table('stajturu')
                ->select('id','adi')
                ->get();

        $stajTurus = stajturu::whereRaw('id=?',array($id))->first();
        return view('stajturu',array('stajTuruliste'=>$stajTuru, 'stajTuruguncelle'=>$stajTurus));

    }

    public function poststajturuguncelle(Request $request)
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
               return redirect()->route('stajturu');
               }

    }




}
