<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Konser</title>
</head>
<body>

    <h1>Tambah Data Konser</h1>

    <form action="/konser" method="POST">
        @csrf

        <label>Nama Konser</label><br>
        <input type="text" name="nama_konser">
        <br><br>

        <label>Artis</label><br>
        <input type="text" name="artis">
        <br><br>

        <label>Lokasi</label><br>
        <input type="text" name="lokasi">
        <br><br>

        <label>Tanggal</label><br>
        <input type="date" name="tanggal">
        <br><br>

        <button type="submit">Simpan</button>
        <a href="/konser">Kembali</a>
    </form>

</body>
</html>