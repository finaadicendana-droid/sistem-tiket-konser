<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pembeli</title>
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
                Edit Pembeli
            </h1>

            <p class="mt-2 text-[14px] text-[#777]">
                Ubah informasi data pembeli.
            </p>
        </div>

        <!-- FORM -->
        <div class="bg-white border border-[#e4dfe8] rounded-lg p-6">

            @if ($errors->any())
                <div class="mb-5 p-4 bg-[#fdf0f0] border border-[#e8cccc] rounded-md">
                    <ul class="m-0 pl-5 text-[13px] text-[#a44]">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/pembeli/{{ $pembeli->id }}" method="POST">

                @csrf
                @method('PUT')

                <!-- NAMA -->
                <div class="mb-5">
                    <label class="block mb-2 text-[13px] font-semibold">
                        Nama Pembeli
                    </label>

                    <input
                        type="text"
                        name="Nama_Pembeli"
                        value="{{ old('Nama_Pembeli', $pembeli->Nama_Pembeli) }}"
                        class="w-full px-4 py-2.5 border border-[#ddd] rounded-md outline-none focus:border-[#9b59b6]"
                        required
                    >
                </div>

                <!-- EMAIL -->
                <div class="mb-5">
                    <label class="block mb-2 text-[13px] font-semibold">
                        Email
                    </label>

                    <input
                        type="email"
                        name="Email"
                        value="{{ old('Email', $pembeli->Email) }}"
                        class="w-full px-4 py-2.5 border border-[#ddd] rounded-md outline-none focus:border-[#9b59b6]"
                        required
                    >
                </div>

                <!-- NO HP -->
                <div class="mb-5">
                    <label class="block mb-2 text-[13px] font-semibold">
                        No. HP
                    </label>

                    <input
                        type="text"
                        name="No_Hp"
                        value="{{ old('No_Hp', $pembeli->No_Hp) }}"
                        class="w-full px-4 py-2.5 border border-[#ddd] rounded-md outline-none focus:border-[#9b59b6]"
                        required
                    >
                </div>

                <!-- ALAMAT -->
                <div class="mb-6">
                    <label class="block mb-2 text-[13px] font-semibold">
                        Alamat
                    </label>

                    <textarea
                        name="Alamat"
                        rows="4"
                        class="w-full px-4 py-2.5 border border-[#ddd] rounded-md outline-none focus:border-[#9b59b6] resize-none"
                    >{{ old('Alamat', $pembeli->Alamat) }}</textarea>
                </div>

                <!-- BUTTON -->
                <div class="flex gap-3">

                    <button
                        type="submit"
                        class="px-5 py-2.5 bg-[#9b59b6] text-white border-0 rounded-md text-[14px] cursor-pointer hover:bg-[#8646a3]"
                    >
                        Simpan Perubahan
                    </button>

                    <a
                        href="/pembeli"
                        class="inline-block px-5 py-2.5 bg-[#eee8f2] text-[#6b3f7c] no-underline rounded-md text-[14px] hover:bg-[#e2d7e8]"
                    >
                        Batal
                    </a>

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