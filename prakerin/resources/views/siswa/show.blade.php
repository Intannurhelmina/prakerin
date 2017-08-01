@extends('layouts.master')
@section('isi')
<div class="row">
<center><h1>Data siswa</h1></center>
<div class="panel panel-primary">
<div class="panel panel-heading">Data siswa
<div class="panel-title pull-right">
<a href="{{ URL::previous() }}">Kembali</a></div>
</div>

<div class="panel-body">
	<div class="form-group">
	<label class="control-lable">Nama</label>
	<input type="text" name="a" class="form-control" value="{{$siswa->nama_ayah}}" class="form-control" readonly="">
	</div>

	<div class="form-group">
	<label class="control-lable">Orangtua</label>
	<input type="text" name="b" class="form-control" value="{{$siswa->nama_ibu}}" class="form-control" readonly="">
	</div>

	<div class="form-group">
	<label class="control-lable">Umur<label>
	<input type="text" name="c" class="form-control" value="{{$siswa->nama_ibu}}" class="form-control" readonly="">
	</div>

	<div class="form-group">
	<label class="control-lable">Alamat</label>
	<textarea class="form-control" rows="10" name="e" readonly=""> {{$siswa->alamat}}</textarea>
	</div>
</div>
</div>
</div>
</div>
@endsection

