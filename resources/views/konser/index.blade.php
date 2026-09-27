<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Konser</title>
</head>
<body>

    <h1>Data Konser</h1>

    <form action="/konser" method="GET">
        <input
            type="text"
            name="search"
            placeholder="Cari konser, artis, atau lokasi..."
            value="{{ request('search') }}"
        >

        <button type="submit">Cari</button>
    </form>

    <br>

    <a href="/konser/create">+ Tambah Data Konser</a>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Konser</th>
                <th>Artis</th>
                <th>Lokasi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @if ($konser->count() > 0)

                @foreach ($konser as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->Nama_Konser }}</td>
                        <td>{{ $item->Artis }}</td>
                        <td>{{ $item->Lokasi }}</td>
                        <td>{{ $item->Tanggal }}</td>
                        <td>
                            <a href="/konser/{{ $item->id }}">Lihat</a>
                            <a href="/konser/{{ $item->id }}/edit">Edit</a>|
                            <form action="/konser/{{ $item->id }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus Data konser ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            @else

                <tr>
                    <td colspan="6">Data konser tidak ditemukan.</td>
                </tr>

            @endif

        </tbody>

    </table>

</body>
</html>