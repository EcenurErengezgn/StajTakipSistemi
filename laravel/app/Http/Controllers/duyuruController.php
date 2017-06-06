<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\duyuru;
use Validator;
class duyurucontroller extends Controller
{
    public function duyuru()
    {
        $data=DB::table('duyuru')->get();
    	return view('duyuru',compact('data'));
    }

    public function duyurukaydet(Request $request)
    {
    	$kontrol = Validator::make($request->all(),array(
                'baslik' => 'required',
                'icerik' => 'required ',
            ));
        if($kontrol->fails()) {
            return redirect()->to('/duyuru')->withErrors($kontrol)->withInput();
        }else{
                
                $baslik = $request->input('baslik');
                $icerik = $request->input('icerik');
                       
                $kaydet = duyuru::create(array(
                    'baslik' => $baslik,
                    'icerik' => $icerik,

                    ));
            }
                if($kaydet)
                {
                    return redirect()->route('duyuru');
                }
    }
    public function duyuruliste()
    {
    	$data=DB::table('duyuru')->get();
    	return view('duyuruliste',compact('data'));
    }

    public function duyurugoruntule($id)
    {
        $data=DB::table('duyuru')
                    ->where('id',$id)->first();
        return view('duyurugoruntule',compact('data'));

    }

    public function duyurusil($id)
    {
        DB::table('duyuru')->where('id',$id)->delete();
         return back();
    }

    public function duyuruduzenle($id)
    {
        $data=DB::table('duyuru')->where('id',$id)->first();
        return view('duyuruduzenle',compact('data'));
    }
    public function duyuruguncelle(Request $request)
    {
        DB::table('duyuru')->where('id',$request['id'])->update([

                'baslik'=>$request['baslik'],
                'icerik'=>$request['icerik']
            ]);
          return redirect()->route('duyuru');
                
    }
}
