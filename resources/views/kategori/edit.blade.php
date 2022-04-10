@extends('layout.master')

@section('judul')
Halaman Edit Kategori
@endsection

@section('content')

<form action="/kategori/{{$kategori->id}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label>Nama</label>
        <input type="text" value="{{$kategori->nama}}" class="form-control" name="nama">
    </div>
    @error('nama')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="form-group">
        <label>Deskripsi</label>
        <input type="text" value="{{$kategori->deskripsi}}" class="form-control" name="deskripsi">
    </div>
    @error('deskripsi')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection