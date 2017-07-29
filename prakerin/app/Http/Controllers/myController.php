<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;
class myController extends Controller
{
    //
    public function index()
    {
    	$a = "Intannh";
    	return $a;
    }
public function tampilmodel()
{
	$ortu = orangtua::all();
	return $ortu;
}
public function tampilView()
{
	return view('about');
}

public function percobaan()
{
	$ortu = orangtua::all();
	return view('index', compact('ortu'));
}
}
