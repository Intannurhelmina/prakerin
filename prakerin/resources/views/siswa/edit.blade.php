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
<form action="{{ route('siswa.update',$siswa->id)}}" method="POST">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
	<label class="control-lable">Nama</label>
	<input type="text" name="a" class="form-control" value="{{$siswa->nama}}" class="form-control" required="">
	</div>

	<div class="form-group">
	<label class="control-lable">Orangtua</label>
	<select name="b" class="form-control">
		@foreach($ortu as $data)
		<option value="{{$data->id}}">{{$data->nama_ayah}} dan {{$data->nama_ibu}}</option>
		@endforeach
	</select>
	</div>

	<div class="form-group">
	<label class="control-lable">Umur</label>
	<input type="number" name="c" class="form-control" value="{{$siswa->umur}}" class="from-control" required="">
	</div>

	<div class="form-group">
	<label class="control-lable">Alamat</label>
	<textarea class="form-control" rows="10" name="d" required=""> {{$siswa->alamat}}</textarea>
	</div>
	<div class="form-group">
		<label class="control-lable">jenis kelamin</label>
		<input type="radio" name="jk" class="form-control" value="perempuan">Perempuan 
		<input type="radio" name="jk" class="form-control" value="lakilaki">Laki-laki 
		</div>


	<div class="form-group">
	<button type="submit" class="btn btn-success">Simpan</button>
<button type="reset" class="btn btn-danger">Reset</button>
	</div>
</form>
</div>
</div>
</div>
</div>
@endsection

