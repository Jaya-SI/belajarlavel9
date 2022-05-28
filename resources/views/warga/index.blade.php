<table border="1">
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
        <td><a href="/warga/{{ $w->id }}/edit">Edit</a></td>
    </tr>
    @endforeach
</table>