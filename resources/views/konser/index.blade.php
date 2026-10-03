<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Konser</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f3f7;
            color: #222;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            height: 65px;
            background: linear-gradient(90deg, #17131f, #281632);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 70px;
            color: white;
        }

        .logo {
            font-size: 21px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .logo span {
            color: #c77dff;
        }

        .nav-menu {
            display: flex;
            gap: 28px;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
        }

        .nav-menu a:hover {
            color: #d69cff;
        }


        /* =========================
           CONTENT
        ========================= */

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 45px auto;
        }

        .page-title {
            margin-bottom: 25px;
        }

        .page-title h1 {
            margin: 0;
            font-size: 30px;
            color: #29202f;
        }

        .page-title p {
            margin-top: 8px;
            color: #777;
            font-size: 14px;
        }


        /* =========================
           SEARCH / BROWSE
        ========================= */

        .search-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
        }

        .search-box form {
            display: flex;
            gap: 10px;
        }

        .search-box input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
        }

        .search-box input:focus {
            border-color: #9b59b6;
        }

        .search-box button {
            padding: 12px 22px;
            background-color: #9b59b6;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        .search-box button:hover {
            background-color: #7d3c98;
        }


        /* =========================
           ADD BUTTON
        ========================= */

        .add-button {
            display: inline-block;
            background-color: #29202f;
            color: white;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .add-button:hover {
            background-color: #432d4e;
        }


        /* =========================
           TABLE
        ========================= */

        .table-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: linear-gradient(90deg, #29202f, #432d4e);
            color: white;
        }

        th {
            padding: 15px;
            text-align: left;
            font-size: 13px;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        tbody tr:hover {
            background-color: #faf6fc;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }


        /* =========================
           ACTION
        ========================= */

        .action {
            white-space: nowrap;
        }

        .action a,
        .action button {
            display: inline-block;
            padding: 7px 11px;
            margin-right: 4px;
            border-radius: 5px;
            font-size: 12px;
            text-decoration: none;
            cursor: pointer;
        }

        .lihat {
            background-color: #eee;
            color: #333;
        }

        .lihat:hover {
            background-color: #ddd;
        }

        .edit {
            background-color: #9b59b6;
            color: white;
        }

        .edit:hover {
            background-color: #7d3c98;
        }

        .hapus {
            background-color: #e74c3c;
            color: white;
            border: none;
        }

        .hapus:hover {
            background-color: #c0392b;
        }


        /* =========================
           EMPTY DATA
        ========================= */

        .empty {
            text-align: center;
            color: #777;
            padding: 30px;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            background: linear-gradient(90deg, #17131f, #281632);
            color: #aaa;
            text-align: center;
            padding: 25px;
            margin-top: 60px;
            font-size: 13px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 800px) {

            .navbar {
                padding: 0 20px;
            }

            .nav-menu {
                gap: 10px;
            }

            .nav-menu a {
                font-size: 10px;
            }

            .container {
                width: 95%;
            }

            .search-box form {
                flex-direction: column;
            }

            .table-card {
                overflow-x: auto;
            }

            table {
                min-width: 850px;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         NAVBAR
    ========================= -->

    <div class="navbar">

        <div class="logo">
            TICKET<span>BOX</span>
        </div>

        <div class="nav-menu">

            <a href="/">HOME</a>

            <a href="/konser">KONSER</a>

            <a href="/tiket">TIKET</a>

            <a href="/pembeli">PEMBELI</a>

            <a href="/pemesanan">PEMESANAN</a>

        </div>

    </div>


    <!-- =========================
         CONTENT
    ========================= -->

    <div class="container">

        <div class="page-title">

            <h1>Data Konser</h1>

            <p>Kelola informasi nama konser, artis, lokasi, dan tanggal.</p>

        </div>


        <!-- =========================
             BROWSE / PENCARIAN
        ========================= -->

        <div class="search-box">

            <form action="/konser" method="GET">

                <input
                    type="text"
                    name="search"
                    placeholder="Cari konser, artis, atau lokasi..."
                    value="{{ request('search') }}"
                >

                <button type="submit">
                    🔍 Cari
                </button>

            </form>

        </div>


        <!-- =========================
             ADD
        ========================= -->

        <a href="/konser/create" class="add-button">
            + Tambah Data Konser
        </a>


        <!-- =========================
             TABLE
        ========================= -->

        <div class="table-card">

            <table>

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

                                <td>
                                    {{ $item->id }}
                                </td>

                                <td>
                                    <strong>
                                        {{ $item->Nama_Konser }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $item->Artis }}
                                </td>

                                <td>
                                    {{ $item->Lokasi }}
                                </td>

                                <td>
                                    {{ $item->Tanggal }}
                                </td>

                                <td class="action">

                                    <!-- READ -->

                                    <a
                                        href="/konser/{{ $item->id }}"
                                        class="lihat"
                                    >
                                        Lihat
                                    </a>


                                    <!-- EDIT -->

                                    <a
                                        href="/konser/{{ $item->id }}/edit"
                                        class="edit"
                                    >
                                        Edit
                                    </a>


                                    <!-- DELETE -->

                                    <form
                                        action="/konser/{{ $item->id }}"
                                        method="POST"
                                        style="display: inline-block;"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="hapus"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus Data konser ini?')"
                                        >
                                            Hapus
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @endforeach

                    @else

                        <tr>

                            <td colspan="6" class="empty">

                                Data konser tidak ditemukan.

                            </td>

                        </tr>

                    @endif

                </tbody>

            </table>

        </div>

    </div>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>

        Sistem Tiket Konser © 2026

    </footer>


</body>

</html>