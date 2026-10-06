<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Konser</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0 bg-[#f5f3f7] text-[#222] font-sans">

    <!-- NAVBAR -->
    <nav class="h-[65px] bg-[#17131f] flex items-center justify-between px-5 md:px-[70px] text-white">

        <div class="text-[21px] font-bold tracking-[1px]">
            TICKET<span class="text-[#9b59b6]">BOX</span>
        </div>

        <div class="flex gap-3 md:gap-7">

            <a href="/" class="text-white no-underline text-[11px] md:text-[13px] hover:text-[#b879d1]">
                HOME
            </a>

            <a href="/konser" class="text-[#b879d1] no-underline text-[11px] md:text-[13px]">
                KONSER
            </a>

            <a href="/tiket" class="text-white no-underline text-[11px] md:text-[13px] hover:text-[#b879d1]">
                TIKET
            </a>

            <a href="/merchandise" class="text-white no-underline text-[11px] md:text-[13px] hover:text-[#b879d1]">
                MERCHANDISE
            </a>

            <a href="/pembeli" class="text-white no-underline text-[11px] md:text-[13px] hover:text-[#b879d1]">
                PEMBELI
            </a>

        </div>

    </nav>


    <!-- CONTENT -->
    <main class="w-[90%] max-w-[1150px] mx-auto py-10">

        <!-- JUDUL -->
        <div class="mb-6">

            <h1 class="m-0 text-[28px] font-bold text-[#29202f]">
                Data Konser
            </h1>

            <p class="mt-2 text-[14px] text-[#777]">
                Kelola informasi konser yang tersedia.
            </p>

        </div>


        <!-- BROWSE + ADD -->
        <div class="bg-white border border-[#e4dfe8] rounded-lg p-5 mb-6">

            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                <!-- BROWSE -->
                <form action="/konser" method="GET" class="flex w-full md:w-auto">

                    <input
                        type="text"
                        name="search"
                        placeholder="Cari konser, artis, atau lokasi..."
                        value="{{ request('search') }}"
                        class="w-full md:w-[350px] px-4 py-2.5 border border-[#ddd] rounded-l-md outline-none focus:border-[#9b59b6]"
                    >

                    <button
                        type="submit"
                        class="px-5 py-2.5 bg-[#9b59b6] text-white border-0 rounded-r-md cursor-pointer hover:bg-[#8646a3]"
                    >
                        Cari
                    </button>

                </form>


                <!-- ADD -->
                <a
                    href="/konser/create"
                    class="inline-block text-center px-5 py-2.5 bg-[#17131f] text-white no-underline rounded-md text-[14px] hover:bg-[#29202f]"
                >
                    + Tambah Konser
                </a>

            </div>

        </div>


        <!-- TABLE -->
        <div class="bg-white border border-[#e4dfe8] rounded-lg overflow-x-auto">

            <table class="w-full border-collapse">

                <thead>

                    <tr class="bg-[#f7f5f8] border-b border-[#e4dfe8]">

                        <th class="px-5 py-4 text-left text-[13px] font-semibold">
                            ID
                        </th>

                        <th class="px-5 py-4 text-left text-[13px] font-semibold">
                            Nama Konser
                        </th>

                        <th class="px-5 py-4 text-left text-[13px] font-semibold">
                            Artis
                        </th>

                        <th class="px-5 py-4 text-left text-[13px] font-semibold">
                            Lokasi
                        </th>

                        <th class="px-5 py-4 text-left text-[13px] font-semibold">
                            Tanggal
                        </th>

                        <th class="px-5 py-4 text-center text-[13px] font-semibold">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse ($konser as $item)

                        <tr class="border-b border-[#eee] hover:bg-[#faf8fb]">

                            <td class="px-5 py-4 text-[13px]">
                                {{ $item->id }}
                            </td>

                            <td class="px-5 py-4 text-[13px] font-medium">
                                {{ $item->Nama_Konser }}
                            </td>

                            <td class="px-5 py-4 text-[13px]">
                                {{ $item->Artis }}
                            </td>

                            <td class="px-5 py-4 text-[13px]">
                                {{ $item->Lokasi }}
                            </td>

                            <td class="px-5 py-4 text-[13px]">
                                {{ $item->Tanggal }}
                            </td>

                            <td class="px-5 py-4 text-center whitespace-nowrap">

                                <!-- READ -->
                                <a
                                    href="/konser/{{ $item->id }}"
                                    class="inline-block px-3 py-1.5 bg-[#eee8f2] text-[#6b3f7c] no-underline rounded text-[12px] mr-1 hover:bg-[#e2d7e8]"
                                >
                                    Lihat
                                </a>

                                <!-- EDIT -->
                                <a
                                    href="/konser/{{ $item->id }}/edit"
                                    class="inline-block px-3 py-1.5 bg-[#f0eef2] text-[#555] no-underline rounded text-[12px] mr-1 hover:bg-[#e4e1e7]"
                                >
                                    Edit
                                </a>

                                <!-- DELETE -->
                                <form
                                    action="/konser/{{ $item->id }}"
                                    method="POST"
                                    class="inline"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus Data konser ini?')"
                                        class="px-3 py-1.5 bg-[#f3e6e6] text-[#a44] border-0 rounded text-[12px] cursor-pointer hover:bg-[#ead5d5]"
                                    >
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="6"
                                class="px-5 py-10 text-center text-[#888] text-[14px]"
                            >
                                Belum ada data konser.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </main>


    <!-- FOOTER -->
    <footer class="bg-[#17131f] text-[#aaa] text-center py-6 mt-[60px] text-[13px]">

        Sistem Tiket Konser © 2026

    </footer>

</body>

</html>