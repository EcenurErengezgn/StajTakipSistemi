<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kullanici;
use DB;
use App\menu;
use App\altmenu;
use App\listeleme;
class IndexController extends Controller
{
    public function getIndex()
    {
    	
    	return view('index.index');
    	
    }
    
    public function getogrenciGirisi()
    {
       
        $menu =DB::table('menu')
                ->select('adi','id')
                ->get();

        
        

                return view('index.ogrenciGirisi',array('menuliste'=>$menu));
                


    }

    public function getkullanicisil(Request $request)
    {
        $menu =DB::table('menu')
                ->select('adi','id')
                ->get();

         $kullanicilar = altmenu::select('adi')->where('menu_id',$request->id)->take(100)->get();

                     return view('index.d',array('menuliste'=>$menu,'kullanicilar'=>$kullanicilar));
                //return view('d',compact('kullanicilar'));
           
    }

}
