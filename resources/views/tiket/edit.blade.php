<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Tiket</title>
</head>
<body>

    <h1>Edit Data Tiket</h1>

    <form action="/tiket/{{ $tiket->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Jenis Tiket:</label><br>
        <input
            type="text"
            name="jenis_tiket"
            value="{{ $tiket->Jenis_Tiket }}"
        >
        <br><br>

        <label>Kategori:</label><br>
        <input
            type="text"
            name="kategori"
            value="{{ $tiket->Kategori }}"
        >
        <br><br>

        <label>Harga:</label><br>
        <input
            type="number"
            name="harga"
            value="{{ $tiket->Harga }}"
        >
        <br><br>

        <label>Stok:</label><br>
        <input
            type="number"
            name="stok"
            value="{{ $tiket->Stok }}"
        >
        <br><br>

        <button type="submit">Simpan Perubahan</button>
        <a href="/tiket">Batal</a>

    </form>

</body>
</html>