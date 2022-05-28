<h1>Edit Warga</h1>

<form action="/warga/{{ $warga->id }}" method="POST">
    @method('put')
    @csrf
    <p>Nama :</p>
    <input type="text" placeholder="Masukkan Nama" name="nama" value="{{ $warga->nama }}">
    <br>
    <p>NIK :</p>
    <input type="text" placeholder="Masukkan NIK" name="nik" value="{{ $warga->nik }}">
    <br>
    <p>NO KK:</p>
    <input type="text" placeholder="Masukkan NO KK" name="no_kk" value="{{ $warga->no_kk }}">
    <br>
    <p>Jenis Kelamin:</p>
    <select name="jenis_kelamin" id="">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L" @if ($warga->jenis_kelamin == "L")selected @endif>Laki-Laki</option>
        <option value="P" @if ($warga->jenis_kelamin == "P")selected @endif>Perempuan</option>
    </select>
    <br>
    <p>Masukkan Alamat</p>
    <textarea name="alamat" rows="10" cols="40" >{{ $warga->alamat }}</textarea>
    <br>
    <input type="submit" name="submit" value="Ubah Data">
</form>