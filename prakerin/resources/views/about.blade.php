@extends('layouts.master')
@section('isi')
	
		@foreach ($ortu as $key) <hr>
	Nama ibu :{{$key->nama_ayah}} <br>
	Nama Ayah :{{$key->nama_ibu}}<br>
	Umur ibu : {{$key->umur_ibu}}<br>
	Umur ayah :{{$key->umur_ayah}}<br>
	@foreach ($data->siswa as $key)
	<li>{{ $key->nama}}</li>
	@endforeach
	<hr>
@endsection

@endsection