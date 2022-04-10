@extends('layout.master')

@section('judul')
Halaman Update Profil
@endsection

@section('content')

<form action="/profile/{{$profile->id}}" method="POST">
    @csrf
    @method('put')  
    <div class="form-group">
        <label>Nama</label>
        <input type="text" value="{{$profile->user->name}}" class="form-control" disabled>
    </div>  
    <div class="form-group">
        <label>Email</label>
        <input type="text" value="{{$profile->user->email}}" class="form-control" disabled>
    </div>  
    
    <div class="form-group">
        <label>Umur</label>
        <input type="number" value="{{$profile->umur}}" class="form-control" name="umur">
    </div>
    @error('umur')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control">{{$profile->alamat}}</textarea>
    </div>
    @error('alamat')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="form-group">
        <label>Biodata</label>
        <textarea name="bio" class="form-control">{{$profile->bio}}</textarea>
    </div>
    @error('bio')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection