@extends('Kamar.layout')

@section('title')
Ubah Data Kamar
@endsection

@section('content')
<a href="{{ url('kamars') }}" class="btn btn-success btn-sm">
	Daftar Kamar
</a>
<form method="post" action="{{ url('kamars/'.$kmr->id) }}">
	{{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>No_kamar</label>
		<input type="number" name="no_kamar" value ="{{ $kmr->no_kamar }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Kamar</label>
		<input type="text" name="nama" value ="{{ $kmr->nama }}" class="form-control">
	</div>
	<div class="form-group">
		<label>fasilitas</label>
		<textarea name="fasilitas" class="form-control">{{ $kmr->fasilitas }}</textarea>
	</div>
    <div class="form-group">
		<label>Harga Kamar</label>
		<input type="number" name="harga" value ="{{ $kmr->harga }}" class="form-control">
	</div>

	<button type="submit" class="btn btn-primary btn-block">
		Ubah Data
	</button>
</form>
@endsection