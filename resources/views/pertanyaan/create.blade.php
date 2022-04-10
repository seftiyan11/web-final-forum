@extends('layout.master')

@section('judul')
Halaman Buat Pertanyaan
@endsection

@section('content')

<form action="/pertanyaan" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" name="judul">
    </div>
    @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    @error('content')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="form-group">
        <label>Kategori</label>
        <select name="kategori_id" class="form-control">
            <option value="">--Kategori--</option>
            @foreach ($kategori as $item)
                <option value="{{$item->id}}">{{$item->nama}}</option>
            @endforeach
        </select>
    </div>
    @error('deskripsi')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="file">
    </div>
    
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection