<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Tiket</title>
</head>
<body>

    <h1>Data Tiket</h1>

    <!-- BROWSE / PENCARIAN -->
    <form action="/tiket" method="GET">
        <input
            type="text"
            name="search"
            placeholder="Cari nama tiket atau kategori..."
            value="{{ request('search') }}"
        >

        <button type="submit">Cari</button>
    </form>

    <br>

    <a href="/tiket/create">+ Tambah Data Tiket</a>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenis Tiket</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @if ($tiket->count() > 0)

                @foreach ($tiket as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->Jenis_Tiket }}</td>
                        <td>{{ $item->Kategori }}</td>
                        <td>{{ $item->Harga }}</td>
                        <td>{{ $item->Stok }}</td>

                        <td>
                            <a href="/tiket/{{ $item->id }}">Lihat</a>

                            <a href="/tiket/{{ $item->id }}/edit">
                                Edit
                            </a>

                            <form
                                action="/tiket/{{ $item->id }}"
                                method="POST"
                                style="display: inline-block;"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data tiket ini?')"
                                >
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            @else

                <tr>
                    <td colspan="6">
                        Data tiket tidak ditemukan.
                    </td>
                </tr>

            @endif
        </tbody>
    </table>

</body>
</html>