@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Edit Warga</h1>
    <form action="/warga/{{ $warga->id }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" value="{{ $warga->nama }}">
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK Warga</label>
            <input type="text" name="nik" class="form-control" id="nik" aria-describedby="nik" value="{{ $warga->nik }}">
        </div>
        <div class="mb-3">
            <label for="no_kk" class="form-label">No KK</label>
            <input type="text" name="no_kk" class="form-control" id="no_kk" aria-describedby="no_kk" value="{{ $warga->no_kk }}">
        </div>
        <div class="mb-3">
            <select class="form-select" name="jenis_kelamin" id="">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" @if ($warga->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
                <option value="P" @if ($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" rows="10" cols="40">{{ $warga->alamat }}</textarea>
        </div>
        <input type="submit" name="submit" value="Edit Data" class="btn btn-primary">
    </form>
</div>
@endsection