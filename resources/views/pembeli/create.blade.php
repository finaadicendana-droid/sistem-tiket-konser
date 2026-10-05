<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Pembeli</title>

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
    <main class="w-[90%] max-w-[700px] mx-auto py-10">

        <!-- JUDUL -->
        <div class="mb-6">

            <h1 class="m-0 text-[28px] font-bold text-[#29202f]">
                Tambah Pembeli
            </h1>

            <p class="mt-2 text-[14px] text-[#777]">
                Tambahkan data pembeli baru.
            </p>

        </div>


        <!-- FORM -->
        <div class="bg-white border border-[#e4dfe8] rounded-lg p-6">

            <form action="/pembeli" method="POST">

                @csrf

                <!-- NAMA -->
                <div class="mb-5">

                    <label class="block text-[13px] font-semibold mb-2">
                        Nama Pembeli
                    </label>

                    <input
                        type="text"
                        name="Nama_Pembeli"
                        value="{{ old('Nama_Pembeli') }}"
                        placeholder="Masukkan nama pembeli"
                        class="w-full px-4 py-2.5 border border-[#ddd] rounded-md outline-none focus:border-[#9b59b6]"
                    >

                    @error('Nama_Pembeli')
                        <p class="text-red-500 text-[12px] mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- EMAIL -->
                <div class="mb-5">

                    <label class="block text-[13px] font-semibold mb-2">
                        Email
                    </label>

                    <input
                        type="email"
                        name="Email"
                        value="{{ old('Email') }}"
                        placeholder="contoh@email.com"
                        class="w-full px-4 py-2.5 border border-[#ddd] rounded-md outline-none focus:border-[#9b59b6]"
                    >

                    @error('Email')
                        <p class="text-red-500 text-[12px] mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- NO HP -->
                <div class="mb-5">

                    <label class="block text-[13px] font-semibold mb-2">
                        Nomor HP
                    </label>

                    <input
                        type="text"
                        name="No_Hp"
                        value="{{ old('No_Hp') }}"
                        placeholder="08xxxxxxxxxx"
                        class="w-full px-4 py-2.5 border border-[#ddd] rounded-md outline-none focus:border-[#9b59b6]"
                    >

                    @error('No_Hp')
                        <p class="text-red-500 text-[12px] mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- ALAMAT -->
                <div class="mb-6">

                    <label class="block text-[13px] font-semibold mb-2">
                        Alamat
                    </label>

                    <textarea
                        name="Alamat"
                        rows="4"
                        placeholder="Masukkan alamat pembeli"
                        class="w-full px-4 py-2.5 border border-[#ddd] rounded-md outline-none focus:border-[#9b59b6]"
                    >{{ old('Alamat') }}</textarea>

                    @error('Alamat')
                        <p class="text-red-500 text-[12px] mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <!-- BUTTON -->
                <div class="flex justify-between items-center">

                    <a
                        href="/pembeli"
                        class="text-[#666] no-underline text-[13px] hover:text-[#9b59b6]"
                    >
                        ← Kembali
                    </a>

                    <button
                        type="submit"
                        class="px-5 py-2.5 bg-[#9b59b6] text-white border-0 rounded-md text-[14px] cursor-pointer hover:bg-[#8646a3]"
                    >
                        Simpan Pembeli
                    </button>

                </div>

            </form>

        </div>

    </main>


    <!-- FOOTER -->
    <footer class="bg-[#17131f] text-[#aaa] text-center py-6 mt-[60px] text-[13px]">

        Sistem Tiket Konser © 2026

    </footer>

</body>

</html>