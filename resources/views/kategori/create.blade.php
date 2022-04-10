@extends('layout.master')

@section('judul')
Halaman Tambah kategori
@endsection

@section('content')

<form action="/kategori" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama">
    </div>
    @error('nama')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="form-group">
        <label>Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi">
    </div>
    @error('deskripsi')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection