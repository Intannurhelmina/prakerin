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