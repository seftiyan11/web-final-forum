@extends('layout.master')

@section('judul')
Halaman Detail Kategoti
@endsection

@section('content')

<h2>{{$kategori->nama}}</h2>
<h4>{{$kategori->deskripsi}}</h4>

@endsection