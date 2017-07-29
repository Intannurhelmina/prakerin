<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table = 'siswas';
    protected $fiillable = ['nama','orangtua_id','umur_ibu','umur_ayah','alamat'];
    protected $visible = ['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    public $timestamps = 'true';

    public function orangtua()
    {
    	return $this->hasMany('App\orangtua','siswa_id');
    }
}
