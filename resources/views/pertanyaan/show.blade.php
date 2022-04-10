@extends('layout.master')

@section('judul')
Halaman Detail Pertanyaan
@endsection

@section('content')

<div class="row">
    <div class="col-12">

        
        <div class="card">
            <img src="{{asset('images/'.$pertanyaan->file)}}"  alt="">
            <div class="card-body">
                <h3>{{$pertanyaan->judul}}</h3>
                <p class="card-text">{{$pertanyaan->content}}</p>
                <a href="/pertanyaan" class="btn btn-primary">Kembali</a>
            
            </div>
            
            
        </div>
    </div>
</div>
@endsection