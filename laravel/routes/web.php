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

Route::get('/', ['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'LoginController@postLogin']);

Route::get('/noPermission',function(){
	return view('permission.noPermission');
});

Route::group(['middleware'=>['authen']],function(){
	Route::get('/logout',['as'=>'logout','uses'=>'LoginController@getLogout']);
	Route::get('/kullaniciBilgisi',['as'=>'kullaniciBilgisi','uses'=>'kullaniciBilgisiController@kullaniciBilgisi']);
	Route::get('/turkiye',['as'=>'turkiye','uses'=>'TurkiyeController@index']);
	
});

Route::group(['middleware'=>['authen','roles'],'roles'=>['admin']],function(){
	Route::get('/dashboard',['as'=>'dashboard','uses'=>'DashboardController@dashboard']);
    Route::get('stajTuruliste',array('as'=>'stajTuruliste','uses'=>'StajturuController@stajTuruliste'));
	Route::get('stajturu',array('as'=>'stajturu','uses'=>'StajturuController@getStajturu'));
	Route::post('/stajturukaydet', array('as'=>'stajturukaydet','uses'=>'StajturuController@poststajturukaydet'));
	Route::get('/stajturusil/{id?}', array('as'=>'stajturusil','uses'=>'StajturuController@getstajturusil'));
	Route::get('/stajturuguncelle/{id?}', array('as'=>'stajturuguncelle','uses'=>'StajturuController@getstajturuguncelle'));
    Route::post('/stajturuguncelle', array('as'=>'stajturuguncelle','uses'=>'StajturuController@poststajturuguncelle'));
    Route::get('/stajDurumu',array('as'=>'stajDurumu','uses'=>'StajdurumuController@getstajDurumu'));
	Route::post('/stajDurumukaydet', array('as'=>'stajDurumukaydet','uses'=>'StajdurumuController@poststajDurumukaydet'));
	Route::get('/stajDurumusil/{id?}', array('as'=>'stajDurumusil','uses'=>'StajdurumuController@getstajDurumusil'));
	Route::get('/stajDurumuguncelle/{id?}', array('as'=>'stajDurumuguncelle','uses'=>'StajdurumuController@getstajDurumuguncelle'));
	Route::post('/stajDurumuguncelle', array('as'=>'stajDurumuguncelle','uses'=>'StajdurumuController@poststajDurumuguncelle'));
	Route::get('/stajDonemi',array('as'=>'stajDonemi','uses'=>'StajdonemiController@getstajDonemi'));
	Route::post('/stajDonemikaydet', array('as'=>'stajDonemikaydet','uses'=>'StajdonemiController@poststajDonemikaydet'));
	Route::get('/stajDonemisil/{id?}', array('as'=>'stajDonemisil','uses'=>'StajdonemiController@getstajDonemisil'));
	Route::get('/stajDonemiguncelle/{id?}', array('as'=>'stajDonemiguncelle','uses'=>'StajdonemiController@getstajDonemiguncelle'));
	Route::post('/stajDonemiguncelle', array('as'=>'stajDonemiguncelle','uses'=>'StajdonemiController@poststajDonemiguncelle'));
	Route::get('/mulakatsorulari',array('as'=>'mulakatsorulari','uses'=>'MulakatsorulariController@getmulakatsorulari'));
	Route::post('/mulakatsorularikaydet', array('as'=>'mulakatsorularikaydet','uses'=>'MulakatsorulariController@postmulakatsorularikaydet'));
	Route::get('/mulakatsorularisil/{id?}', array('as'=>'mulakatsorularisil','uses'=>'MulakatsorulariController@getmulakatsorularisil'));
	Route::get('/mulakatsorulariguncelle/{id?}', array('as'=>'mulakatsorulariguncelle','uses'=>'MulakatsorulariController@getmulakatsorulariguncelle'));
	Route::post('/mulakatsorulariguncelle', array('as'=>'mulakatsorulariguncelle','uses'=>'MulakatsorulariController@postmulakatsorulariguncelle'));
	Route::get('/unvan',array('as'=>'unvan','uses'=>'UnvanController@getunvan'));
	Route::post('/unvankaydet', array('as'=>'unvankaydet','uses'=>'UnvanController@postunvankaydet'));
	Route::get('/unvansil/{id?}', array('as'=>'unvansil','uses'=>'UnvanController@getunvansil'));
	Route::get('/unvanguncelle/{id?}', array('as'=>'unvanguncelle','uses'=>'UnvanController@getunvanguncelle'));
	Route::post('/unvanguncelle', array('as'=>'unvanguncelle','uses'=>'UnvanController@postunvanguncelle'));
	Route::get('/bolum',array('as'=>'bolum','uses'=>'BolumController@getbolum'));
	Route::post('/bolumkaydet', array('as'=>'bolumkaydet','uses'=>'BolumController@postbolumkaydet'));
	Route::get('/bolumsil/{id?}', array('as'=>'bolumsil','uses'=>'BolumController@getbolumsil'));
	Route::get('/bolumguncelle/{id?}', array('as'=>'bolumguncelle','uses'=>'BolumController@getbolumguncelle'));
	Route::post('/bolumguncelle', array('as'=>'bolumguncelle','uses'=>'BolumController@postbolumguncelle'));
	Route::get('/mulakatpuanlamasi',array('as'=>'mulakatpuanlamasi','uses'=>'MulakatpuanlamasiController@getmulakatpuanlamasi'));
	Route::post('/mulakatpuanlamasikaydet',array('as'=>'mulakatpuanlamasikaydet','uses'=>'MulakatpuanlamasiController@postmulakatpuanlamasikaydet'));
	Route::get('/mulakatpuanlamasiguncelle/{id?}', array('as'=>'mulakatpuanlamasiguncelle','uses'=>'MulakatpuanlamasiController@getmulakatpuanlamasiguncelle'));
	Route::post('/mulakatpuanlamasiguncelle/{id}', array('as'=>'mulakatpuanlamasiguncelle','uses'=>'MulakatpuanlamasiController@postmulakatpuanlamasiguncelle'));
	Route::get('/mulakatpuanlamasisil/{id}', array('as'=>'mulakatpuanlamasisil','uses'=>'MulakatpuanlamasiController@postmulakatpuanlamasisil'));
	Route::get('dokuman',array('as'=>'dokuman','uses'=>'DokumanController@getdokuman'));
	Route::get('duyuru',array('as'=>'duyuru','uses'=>'DuyuruController@getduyuru'));
	Route::get('/stajyeri',array('as'=>'stajyeri','uses'=>'StajyeriController@getstajyeri'));
	Route::post('/stajyerikaydet',array('as'=>'stajyerikaydet','uses'=>'StajyeriController@poststajyerikaydet'));
	Route::get('/stajyeriguncelle/{id?}', array('as'=>'stajyeriguncelle','uses'=>'StajyeriController@getstajyeriguncelle'));
	Route::post('/stajyeriguncelle/{id}', array('as'=>'stajyeriguncelle','uses'=>'StajyeriController@poststajyeriguncelle'));
	Route::get('/stajyerisil/{id}', array('as'=>'stajyerisil','uses'=>'StajyeriController@poststajyerisil'));
	Route::get('/kullanici',array('as'=>'kullanici','uses'=>'KullaniciController@getkullanici'));
	Route::post('/kullanicikaydet',array('as'=>'kullanicikaydet','uses'=>'KullaniciController@postkullanicikaydet'));
	Route::get('/kullaniciguncelle/{id?}', array('as'=>'kullaniciguncelle','uses'=>'KullaniciController@getkullaniciguncelle'));
	Route::post('/kullaniciguncelle/{id}', array('as'=>'kullaniciguncelle','uses'=>'KullaniciController@postkullaniciguncelle'));
	Route::get('/kullanicisil/{id}', array('as'=>'kullanicisil','uses'=>'KullaniciController@postkullanicisil'));
	Route::get('/ogrenci',array('as'=>'ogrenci','uses'=>'OgrenciController@getogrenci'));
	Route::post('/ogrencikaydet',array('as'=>'ogrencikaydet','uses'=>'OgrenciController@postogrencikaydet'));
	Route::get('/ogrenciguncelle/{id?}', array('as'=>'ogrenciguncelle','uses'=>'OgrenciController@getogrenciguncelle'));
	Route::post('/ogrenciguncelle/{id}', array('as'=>'ogrenciguncelle','uses'=>'OgrenciController@postogrenciguncelle'));
	Route::get('/ogrencisil/{id}', array('as'=>'ogrencisil','uses'=>'OgrenciController@postogrencisil'));
	Route::get('/mufredat',array('as'=>'mufredat','uses'=>'MufredatController@getmufredat'));
	Route::post('/mufredatkaydet',array('as'=>'mufredatkaydet','uses'=>'MufredatController@postmufredatkaydet'));
	Route::get('/mufredatguncelle/{id?}', array('as'=>'mufredatguncelle','uses'=>'MufredatController@getmufredatguncelle'));
	Route::post('/mufredatguncelle/{id}', array('as'=>'mufredatguncelle','uses'=>'MufredatController@postmufredatguncelle'));
	Route::get('/mufredatsil/{id}', array('as'=>'mufredatsil','uses'=>'MufredatController@postmufredatsil'));
	Route::get('/dokuman',array('as'=>'dokuman','uses'=>'DokumanController@getdokuman'));
	Route::post('/dokumankaydet',array('as'=>'dokumankaydet','uses'=>'DokumanController@postdokumankaydet'));
	
	Route::get('/index',array('as'=>'index','uses'=>'AramaController@index'));
	Route::get('/arama',array('as'=>'arama','uses'=>'AramaController@arama'));
	Route::get('/duyuru',array('as'=>'duyuru','uses'=>'duyuruController@duyuru'));
	Route::post('/duyurukaydet',array('as'=>'duyurukaydet','uses'=>'duyuruController@duyurukaydet'));
	Route::get('/duyuruliste',array('as'=>'duyuruliste','uses'=>'duyuruController@duyuruliste'));
	Route::get('/duyurugoruntule/{id}',array('as'=>'duyurugoruntule','uses'=>'duyuruController@duyurugoruntule'));
	Route::get('/duyurusil/{id}',array('as'=>'duyurusil','uses'=>'duyuruController@duyurusil'));
	Route::get('/duyuruduzenle/{id}',array('as'=>'duyuruduzenle','uses'=>'duyuruController@duyuruduzenle'));
	Route::post('/duyuruguncelle',array('as'=>'duyuruguncelle','uses'=>'duyuruController@duyuruguncelle'));
	Route::get('/mulakat',array('as'=>'mulakat','uses'=>'MulakatController@getmulakat'));
	Route::post('/mulakatkaydet',array('as'=>'mulakatkaydet','uses'=>'MulakatController@postmulakatkaydet'));
	Route::get('/mulakatguncelle/{id?}', array('as'=>'mulakatguncelle','uses'=>'MulakatController@getmulakatguncelle'));
	Route::post('/mulakatguncelle/{id}', array('as'=>'mulakatguncelle','uses'=>'MulakatController@postmulakatguncelle'));
	Route::get('/mulakatsil/{id}', array('as'=>'mulakatsil','uses'=>'MulakatController@postmulakatsil'));

	






});
 

