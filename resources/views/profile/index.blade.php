@extends('layout.master')

@section('judul')
Halaman Utama
@endsection

@section('content')

<a href="/profile/create" class="btn btn-primary btn-sm my-2"> Tambah Cast Film </a>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">nama</th>
            <th scope="col">umur</th>
            <th scope="col">alamat/th>
            <th scope="col">bio</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($profile as $key=>$item)
              <tr>
                  <td>{{$item->name}}</td>
                  <td>{{$item->umur}}</td>
                  <td>{{$item->alamat}}</td>
                  <td>{{$item->bio}}</td>
                  <td>
                    <form action="/profile/{{$item->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="/profile/{{$item->id}}" class="btn btn-sm btn-info"> Detail Cast </a>
                        <a href="/profile/{{$item->id}}/edit" class="btn btn-sm btn-info"> Edit </a>
                        <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                    </form>
                  </td>
              </tr>
          @empty
             <tr>
               <td>
                 Halaman Kosong
               </td>
             </tr>
          @endforelse
        </tbody>
      </table>

@endsection