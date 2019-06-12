@extends('Kamar.layout')

@section('title')
Tambah Data Kamar
@endsection

@section('content')
<a href="{{ url('kamars') }}" class="btn btn-success btn-sm">
	Daftar Kamar
</a>
<form method="post" action="{{ url('kamars') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label>No_kamar</label>
		<input type="number" name="no_kamar" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Kamar</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>fasilitas</label>
		<textarea name="fasilitas" class="form-control"></textarea>
	</div>
    <div class="form-group">
		<label>Harga Kamar</label>
		<input type="number" name="harga" class="form-control">
	</div>

	<button type="submit" class="btn btn-success btn-block">
		Tambah Data
	</button>
</form>
@endsection