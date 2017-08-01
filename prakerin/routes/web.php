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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/testmodel', function(){
	$a = App\post::where('title','like','%cepat nikah')->get();
	return $a;
});
Route::get('/satumodel', function(){
	$a = App\post::find(1);
	return $a;
});
Route::get('/semuamodel', function(){
	$a = App\post::all();
	return $a;
});
Route::get('/gantimodel', function(){
	$a = App\post::find(1);
	$a -> delete();

});
Route::get('/menambahmodel', function(){
	$a = new App\post;
	$a->title = "7 amalan pembuka jodoh";
	$a->content = "shalat malam, sedekah, puasa sunah, silahturahmi, senyum, dan tobat";
	$a->save();
	return $a;
});
Route::get('/rubahmodel', function(){
	$a = App\post::find(1);
	$a->title = "keluarga sakinah";
	return $a;
});
Route::get('/about', function(){
	return view('about');
});
Route::get('cektampilan',function(){
	return view('layouts.master');
});
Route::get('/halo', function(){
	return view('index');
});
// Route::get('/orangtua', function(){
// 	$ortu = App\orangtua::all();
// 	foreach ($ortu as $key) {
// 		echo $key->nama_ayah;
// 		echo " dengan ";
// 		echo $key->nama_ibu;
// 		echo " mempunyai anak";
// 		foreach ($key->siswa as $data) {
// 			echo "<li>".$data->nama."</li>";
// 			echo "<hr>";
// 		}
// 	}
// });

Route::get('/coba', 'MyController@index');
Route::get('/coba2', 'MyController@tampilmodel');
Route::get('/coba3', 'MyController@tampilview');
Route::get('/coba4', 'MyController@percobaan');

Route::resource('orangtua', 'OrangtuaController');
Route::resource('siswa', 'siswaController');