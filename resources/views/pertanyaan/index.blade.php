@extends('layout.master')

@section('judul')
Halaman List Pertanyaan
@endsection

@section('content')

<table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Content</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($pertanyaan as $key=>$item)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$item->judul}}</td>
                <td>{{$item->content}}</td>
                <td>
                    <form action="/pertanyaan/{{$item->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="/pertanyaan/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
                        <a href="/pertanyaan/{{$item->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                        <input type="submit" class="btn btn-sm btn-danger" value="delete" item="Delete">
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