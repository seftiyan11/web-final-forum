@extends('layout.master')

@section('judul')
Halaman List Kategori
@endsection

@section('content')

<a href="/kategori/create" class="btn btn-primary btn-sm my-2">Tambah Data Kategori</a>
<table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($kategori as $key=>$item)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$item->nama}}</td>
                <td>{{$item->deskripsi}}</td>
                <td>
                    <form action="/kategori/{{$item->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <!-- <a href="/kategori/{{$item->id}}" class="btn btn-info">Detail</a> -->
                        <a href="/kategori/{{$item->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                        <input type="submit" class="btn btn-sm btn-danger" value="Hapus" item="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <tr colspan="3">
                <td>Tidak ada data</td>
            </tr>  
        @endforelse              
    </tbody>
</table>

@endsection