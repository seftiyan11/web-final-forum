@extends('layout.master')

@section('judul')
Profile
@endsection

@section('content')

<form action="/profile" method="POST">
    @csrf
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email">
    </div>
    @error('email')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <div class="form-group">
        <label>Umur</label>
        <input type="number" class="form-control" name="umur">
    </div>
    @error('umur')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" id="" cols="30" rows="10"></textarea>
        @error('alamat')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" class="form-control" id="" cols="30" rows="10"></textarea>
        @error('bio')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Buat Profile</button>
</form>

@endsection