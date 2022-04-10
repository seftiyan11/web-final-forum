@extends('layout.master')

@section('judul')
Halaman edit pertanyaan
@endsection

@section('content')

<form action="/pertanyaan{{$pertanyaan->id}}" method="POST" enctype="multipart/form-data">
    @csrf
        @method('put')
    <div class="form-group">
        <label>Judul</label>
        <input type="text" value="{{$pertanyaan->judul}}" class="form-control" name="judul">
    </div>
    @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control" id="" cols="30" rows="10">{{$pertanyaan->content}}</textarea>
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
        {{$pertanyaan->kategori_id}}
        </select>
    </div>
    @error('deskripsi')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="form-group">
        <label>Foto</label>
        <input type="file" value="{{$pertanyaan->file}}" class="form-control" name="file">
    </div>
    
    <button type="submit" class="btn btn-primary">Edit pertanyaan</button>
</form>

@endsection