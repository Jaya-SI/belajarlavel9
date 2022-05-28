 @extends('layouts.master')
 @section('content')
    <div class="container mt-5">
        <table border="1" class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>NO KK</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            @foreach ($warga as $w )
            <tr>
                <td>{{ $w->id }}</td>
                <td>{{ $w->nama }}</td>
                <td>{{ $w->nik }}</td>
                <td>{{ $w->no_kk }}</td>
                <td>{{ $w->jenis_kelamin }}</td>
                <td>{{ $w->alamat }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/warga/{{ $w->id }}/edit" class="btn btn-warning">Edit</a>
                    <form action="/warga/{{ $w->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        <a href="/warga/create" class="btn btn-primary">Input Data</a>
    </div>
@endsection
