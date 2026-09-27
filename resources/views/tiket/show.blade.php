<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Tiket</title>
</head>
<body>

    <h1>Detail Tiket</h1>

    <p>
        <strong>ID:</strong>
        {{ $tiket->id }}
    </p>

    <p>
        <strong>Jenis Tiket:</strong>
        {{ $tiket->Jenis_Tiket }}
    </p>

    <p>
        <strong>Kategori:</strong>
        {{ $tiket->Kategori }}
    </p>

    <p>
        <strong>Harga:</strong>
        {{ $tiket->Harga }}
    </p>

    <p>
        <strong>Stok:</strong>
        {{ $tiket->Stok }}
    </p>

    <br>

    <a href="/tiket">Kembali ke Data Tiket</a>

</body>
</html>