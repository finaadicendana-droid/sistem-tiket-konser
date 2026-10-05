<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pembeli</title>
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

            <a href="/konser" class="text-white no-underline text-[11px] md:text-[13px] hover:text-[#b879d1]">
                KONSER
            </a>

            <a href="/tiket" class="text-white no-underline text-[11px] md:text-[13px] hover:text-[#b879d1]">
                TIKET
            </a>

            <a href="/pembeli" class="text-[#b879d1] no-underline text-[11px] md:text-[13px]">
                PEMBELI
            </a>

            <a href="/pemesanan" class="text-white no-underline text-[11px] md:text-[13px] hover:text-[#b879d1]">
                PEMESANAN
            </a>
        </div>
    </nav>

    <!-- CONTENT -->
    <main class="w-[90%] max-w-[850px] mx-auto py-10">

        <div class="mb-6">
            <h1 class="m-0 text-[28px] font-bold text-[#29202f]">
                Detail Pembeli
            </h1>

            <p class="mt-2 text-[14px] text-[#777]">
                Informasi lengkap data pembeli.
            </p>
        </div>

        <!-- DETAIL CARD -->
        <div class="bg-white border border-[#e4dfe8] rounded-lg p-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                <!-- ID -->
                <div>
                    <p class="m-0 mb-1 text-[12px] text-[#888]">
                        ID Pembeli
                    </p>

                    <p class="m-0 text-[15px] font-semibold text-[#29202f]">
                        {{ $pembeli->id }}
                    </p>
                </div>

                <!-- NAMA -->
                <div>
                    <p class="m-0 mb-1 text-[12px] text-[#888]">
                        Nama Pembeli
                    </p>

                    <p class="m-0 text-[15px] font-semibold text-[#29202f]">
                        {{ $pembeli->Nama_Pembeli }}
                    </p>
                </div>

                <!-- EMAIL -->
                <div>
                    <p class="m-0 mb-1 text-[12px] text-[#888]">
                        Email
                    </p>

                    <p class="m-0 text-[15px]">
                        {{ $pembeli->Email }}
                    </p>
                </div>

                <!-- NO HP -->
                <div>
                    <p class="m-0 mb-1 text-[12px] text-[#888]">
                        No. HP
                    </p>

                    <p class="m-0 text-[15px]">
                        {{ $pembeli->No_Hp }}
                    </p>
                </div>

                <!-- ALAMAT -->
                <div class="md:col-span-2">
                    <p class="m-0 mb-1 text-[12px] text-[#888]">
                        Alamat
                    </p>

                    <p class="m-0 text-[15px]">
                        {{ $pembeli->Alamat ?: '-' }}
                    </p>
                </div>

            </div>

            <!-- BUTTON -->
            <div class="flex gap-3 mt-8">

                <a href="/pembeli/{{ $pembeli->id }}/edit"
                   class="inline-block px-5 py-2.5 bg-[#9b59b6] text-white no-underline rounded-md text-[14px] hover:bg-[#8646a3]">
                    Edit
                </a>

                <a href="/pembeli"
                   class="inline-block px-5 py-2.5 bg-[#eee8f2] text-[#6b3f7c] no-underline rounded-md text-[14px] hover:bg-[#e2d7e8]">
                    Kembali
                </a>

            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="bg-[#17131f] text-[#aaa] text-center py-6 mt-[60px] text-[13px]">
        Sistem Tiket Konser © 2026
    </footer>

</body>
</html>