<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Validator;
use DB;

class UnvanController extends Controller
{
    public function getunvan()

    {
        $unvan = DB::table('roles')
                ->select('id','name')
                ->get();
        return view('unvan',array('unvanliste'=>$unvan));
    }

    public function postunvankaydet(Request $request)
    {
        $kontrol = Validator::make($request->all(),array(
                'name' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/unvan')->withErrors($kontrol)->withInput();
        }else{

                $name = $request->input('name');
               
                $kaydet = Role::create(array(
                    'name' => $name
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
           $unvansil = Role::where('id','=',$id)->delete();
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
         $unvan = DB::table('roles')
                ->select('id','name')
                ->get();

        $unvans = Role::whereRaw('id=?',array($id))->first();
        return view('unvan',array('unvanliste'=>$unvan, 'unvanguncelle'=>$unvans));

    }

    public function postunvanguncelle(Request $request)
    {
         $kontrol = Validator::make($request->all(),array(
                'name' => 'required',
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
        }else{
                $id = $request->input('id');
                $name = $request->input('name');
                $unvans = Role::find($id);

                $unvans->name=$name;
                $unvans->save();
               return redirect()->route('unvan');
               }

        
}
}
