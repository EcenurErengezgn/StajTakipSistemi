<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', array('as'=>'index','uses'=>'IndexController@getIndex'));
Route::get('/akademisyenGirisi',array('as'=>'akademisyenGirisi','uses'=>'IndexController@getakademisyenGirisi'));
Route::get('stajTuru',array('as'=>'stajTuru','uses'=>'IndexController@getstajTuru'));
Route::post('/stajTurukaydet', array('as'=>'stajTurukaydet','uses'=>'IndexController@poststajTurukaydet'));
Route::get('/stajTurusil/{id?}', array('as'=>'stajTurusil','uses'=>'IndexController@getstajTurusil'));

Route::get('/stajTuruguncelle/{id?}', array('as'=>'stajTuruguncelle','uses'=>'IndexController@getstajTuruguncelle'));

Route::post('/stajTuruguncelle', array('as'=>'stajTuruguncelle','uses'=>'IndexController@poststajTuruguncelle'));

Route::get('stajDurumu',array('as'=>'stajDurumu','uses'=>'IndexController@getstajDurumu'));
Route::post('/stajDurumukaydet', array('as'=>'stajDurumukaydet','uses'=>'IndexController@poststajDurumukaydet'));
Route::get('/stajDurumusil/{id?}', array('as'=>'stajDurumusil','uses'=>'IndexController@getstajDurumusil'));

Route::get('/stajDurumuguncelle/{id?}', array('as'=>'stajDurumuguncelle','uses'=>'IndexController@getstajDurumuguncelle'));

Route::post('/stajDurumuguncelle', array('as'=>'stajDurumuguncelle','uses'=>'IndexController@poststajDurumuguncelle'));


Route::get('stajDonemi',array('as'=>'stajDonemi','uses'=>'IndexController@getstajDonemi'));
Route::post('/stajDonemikaydet', array('as'=>'stajDonemikaydet','uses'=>'IndexController@poststajDonemikaydet'));
Route::get('/stajDonemisil/{id?}', array('as'=>'stajDonemisil','uses'=>'IndexController@getstajDonemisil'));

Route::get('/stajDonemiguncelle/{id?}', array('as'=>'stajDonemiguncelle','uses'=>'IndexController@getstajDonemiguncelle'));

Route::post('/stajDonemiguncelle', array('as'=>'stajDonemiguncelle','uses'=>'IndexController@poststajDonemiguncelle'));

Route::get('unvan',array('as'=>'unvan','uses'=>'IndexController@getunvan'));
Route::post('/unvankaydet', array('as'=>'unvankaydet','uses'=>'IndexController@postunvankaydet'));
Route::get('/unvansil/{id?}', array('as'=>'unvansil','uses'=>'IndexController@getunvansil'));

Route::get('/unvanguncelle/{id?}', array('as'=>'unvanguncelle','uses'=>'IndexController@getunvanguncelle'));

Route::post('/unvanguncelle', array('as'=>'unvanguncelle','uses'=>'IndexController@postunvanguncelle'));

Route::get('bolum',array('as'=>'bolum','uses'=>'IndexController@getbolum'));
Route::post('/bolumkaydet', array('as'=>'bolumkaydet','uses'=>'IndexController@postbolumkaydet'));
Route::get('/bolumsil/{id?}', array('as'=>'bolumsil','uses'=>'IndexController@getbolumsil'));

Route::get('/bolumguncelle/{id?}', array('as'=>'bolumguncelle','uses'=>'IndexController@getbolumguncelle'));

Route::post('/bolumguncelle', array('as'=>'bolumguncelle','uses'=>'IndexController@postbolumguncelle'));

Route::get('kullanici',array('as'=>'kullanici','uses'=>'IndexController@getkullanici'));
Route::post('/kullanicikaydet', array('as'=>'kullanicikaydet','uses'=>'IndexController@postkullanicikaydet'));
Route::get('/kullanicisil/{id?}', array('as'=>'kullanicisil','uses'=>'IndexController@getkullanicisil'));

Route::get('/kullaniciguncelle/{id?}', array('as'=>'kullaniciguncelle','uses'=>'IndexController@getkullaniciguncelle'));

Route::post('/kullaniciguncelle', array('as'=>'kullaniciguncelle','uses'=>'IndexController@postkullaniciguncelle'));

Route::get('stajYeri',array('as'=>'stajYeri','uses'=>'IndexController@getstajYeri'));
Route::post('/stajYerikaydet', array('as'=>'stajYerikaydet','uses'=>'IndexController@poststajYerikaydet'));
Route::get('/stajYerisil/{id?}', array('as'=>'stajYerisil','uses'=>'IndexController@getstajYerisil'));

Route::get('/stajYeriguncelle/{id?}', array('as'=>'stajYeriguncelle','uses'=>'IndexController@getstajYeriguncelle'));

Route::post('/stajYeriguncelle', array('as'=>'stajYeriguncelle','uses'=>'IndexController@poststajYeriguncelle'));