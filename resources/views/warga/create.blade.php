<h1>Create Warga</h1>

<form action="/warga/store" method="POST">
    @csrf
    <p>Nama :</p>
    <input type="text" placeholder="Masukkan Nama" name="nama">
    <br>
    <p>NIK :</p>
    <input type="text" placeholder="Masukkan NIK" name="nik">
    <br>
    <p>NO KK:</p>
    <input type="text" placeholder="Masukkan NO KK" name="no_kk">
    <br>
    <p>Jenis Kelamin:</p>
    <select name="jenis_kelamin" id="">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
    </select>
    <br>
    <p>Masukkan Alamat</p>
    <textarea name="alamat" rows="10" cols="40"></textarea>
    <br>
    <input type="submit" name="submit" value="Tambah Data">
</form>