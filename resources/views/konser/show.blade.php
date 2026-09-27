<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Konser</title>
</head>
<body>

    <h1>Detail Konser</h1>

    <p>
        <strong>ID:</strong>
        {{ $konser->id }}
    </p>

    <p>
        <strong>Nama Konser:</strong>
        {{ $konser->Nama_Konser }}
    </p>

    <p>
        <strong>Artis:</strong>
        {{ $konser->Artis }}
    </p>

    <p>
        <strong>Lokasi:</strong>
        {{ $konser->Lokasi }}
    </p>

    <p>
        <strong>Tanggal:</strong>
        {{ $konser->Tanggal }}
    </p>

    <br>

    <a href="/konser">Kembali ke Data Konser</a>

</body>
</html>