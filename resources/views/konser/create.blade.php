<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Konser</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-2xl mx-auto py-10 px-6">

        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">

            <h1 class="text-2xl font-bold text-gray-800 mb-6">
                Tambah Data Konser
            </h1>

            <form action="/konser" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Konser
                    </label>
                    <input
                        type="text"
                        name="nama_konser"
                        class="w-full border border-gray-300 rounded-md px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-400"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Artis
                    </label>
                    <input
                        type="text"
                        name="artis"
                        class="w-full border border-gray-300 rounded-md px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-400"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Lokasi
                    </label>
                    <input
                        type="text"
                        name="lokasi"
                        class="w-full border border-gray-300 rounded-md px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-400"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Tanggal
                    </label>
                    <input
                        type="date"
                        name="tanggal"
                        class="w-full border border-gray-300 rounded-md px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-400"
                    >
                </div>

                <div class="flex gap-3 pt-2">
                    <button
                        type="submit"
                        class="bg-purple-600 hover:bg-purple-700 text-white px-5 py-2.5 rounded-md font-medium"
                    >
                        Simpan
                    </button>

                    <a
                        href="/konser"
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-5 py-2.5 rounded-md font-medium"
                    >
                        Kembali
                    </a>
                </div>

            </form>

        </div>

    </div>

</body>
</html>