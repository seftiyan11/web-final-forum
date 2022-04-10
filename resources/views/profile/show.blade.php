@extends('layout.master')

@section('judul')
Halaman Utama
@endsection

@section('content')

<h2>{{$profile->user->name}}</h2>
<p>{{$profile->user->email}}</p>
<td>
    <tr>
        {{$profile->umur}}
    </tr>
    <tr>
        {{$profile->alamat}}
    </tr>
    <tr>
        {{$profile->bio}}
    </tr>
</td>

@endsection