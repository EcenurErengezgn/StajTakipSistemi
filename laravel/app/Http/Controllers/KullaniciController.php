<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\bolum;
use DB;
use Validator;

class KullaniciController extends Controller
{
     public function getkullanici(){

        $role = Role::all();
        $bolum = bolum::all();
        $user = User::all(); 
        $kullanici = DB::table('kullanici')
                   ->get();

        return view('kullanici',compact('role','bolum','user','kullanici'));
    }
    public function postkullanicikaydet(Request $request)
    {
         $kontrol = Validator::make($request->all(),array(
                'name' => 'required',
                'last_name' => 'required ',
                'TC_number' => 'numeric',
                'email' => 'required',
                'password' => 'required',
                'department_id' => 'required',
                'role_id' => 'required'
                
            ));
        if($kontrol->fails()) {
            return redirect()->to('/kullanici')->withErrors($kontrol)->withInput();
        }else{
                
                $name = $request->input('name');
                $last_name = $request->input('last_name');
                $TC_number = $request->input('TC_number');
                $email = $request->input('email');
                $password = $request->input('password');
                $department_id = $request->input('department_id');
                $role_id = $request->input('role_id');
                       
                $kaydet = User::create(array(
                    'name' => $name,
                    'last_name' => $last_name,
                    'TC_number' => $TC_number,
                    'email' => $email,
                    'password' => bcrypt($password),
                    'department_id' => $department_id,
                     'role_id' => $role_id,

                    ));
            }
                if($kaydet)
                {
                    return redirect()->route('kullanici');
                }
        
    }
    public function getkullaniciguncelle($id)
    {
        $user = User::find($id);
        $role = Role::all();
        $bolum = bolum::all();
        
        return view('kullaniciguncelle',compact('user','role','bolum'));
     }

     public function postkullaniciguncelle(Request $r,$id)
     {
          $user = User::find($id);
          $user->name = $r->name;
          $user->last_name = $r->last_name;
          $user->TC_number = $r->TC_number;
          $user->email = $r->email;
          $user->password = bcrypt($r->password);
          $user->department_id = $r->department_id;
          $user->role_id = $r->role_id;
          $user->save();
          return redirect()->route('kullanici');
               
     }

     public function postkullanicisil($id)
     {
        User::destroy($id);
        User::where('id',$id)->delete();

        return back();
     }

   
}
