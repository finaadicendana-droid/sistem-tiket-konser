<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Konser</title>
</head>
<body>

    <h1>Edit Data Konser</h1>

    <form action="/konser/{{ $konser->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Konser:</label><br>
        <input
            type="text"
            name="nama_konser"
            value="{{ $konser->Nama_Konser }}"
        >
        <br><br>

        <label>Artis:</label><br>
        <input
            type="text"
            name="artis"
            value="{{ $konser->Artis }}"
        >
        <br><br>

        <label>Lokasi:</label><br>
        <input
            type="text"
            name="lokasi"
            value="{{ $konser->Lokasi }}"
        >
        <br><br>

        <label>Tanggal:</label><br>
        <input
            type="date"
            name="tanggal"
            value="{{ $konser->Tanggal }}"
        >
        <br><br>

        <button type="submit">Simpan Perubahan</button>
        <a href="/konser">Batal</a>

    </form>

</body>
</html>