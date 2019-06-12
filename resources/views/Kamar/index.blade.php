@extends('Kamar.layout')

@section('title')
Kamar
@endsection

@section('content')
<a href="{{ url('kamars/create') }}" class="btn btn-outline-primary btn-sm mb-1">
    Tambah Kamar
</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>No_kamar</th>
            <th>Nama</th>
            <th>fasilitas</th>
            <th>harga</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $value)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $value->no_kamar }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->fasilitas }}</td>
            <td>{{ $value->harga }}</td>

            <td>
            <div class="btn-group" role="group" aria-label="Basic example">

            <button type="button" class="btn btn-warning">
            <a href="{{ url('kamars/'.$value->id.'/edit') }}">Edit</a>
            </button>

            <form action="{{ url('kamars/'.$value->id) }}" method="POST">
                 {{ csrf_field() }}
                 <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
            </form>
            </div>
            </td>

             
            <!-- <ul class="list-group">
            <li class="list-group-item" >
            <a href="{{ url('kamars/'.$value->id.'/edit') }}" class="btn btn-warning btn-sm">Ubah</a>
                <form action="{{ url('kamars/'.$value->id) }}" method="POST">
                 {{ csrf_field() }}
                 <input type="hidden" name="_method" value="DELETE">
                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                     Hapus
                 </button>
             </form> -->
            
            </td>

           
                
        </tr>
        @endforeach
    </tbody>
</table>

@endsection