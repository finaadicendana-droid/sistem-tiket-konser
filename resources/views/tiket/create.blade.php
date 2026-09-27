<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Tiket</title>
</head>
<body>

    <h1>Tambah Data Tiket</h1>

    <form action="/tiket" method="POST">
        @csrf

        <label>Jenis Tiket</label><br>
        <input type="text" name="jenis_tiket">
        <br><br>

        <label>Kategori</label><br>
        <input type="text" name="kategori">
        <br><br>

        <label>Harga</label><br>
        <input type="number" name="harga">
        <br><br>

        <label>Stok</label><br>
        <input type="number" name="stok">
        <br><br>

        <button type="submit">Simpan</button>
        <a href="/tiket">Kembali</a>

    </form>

</body>
</html>