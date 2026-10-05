<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Merchandise</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-2xl mx-auto py-10 px-6">

        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">

            <h1 class="text-2xl font-bold text-gray-800 mb-6">
                Tambah Data Merchandise
            </h1>

            <form action="/merchandise" method="POST" class="space-y-5">

                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Merchandise
                    </label>

                    <input
                        type="text"
                        name="nama_merchandise"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-300"
                        placeholder="Masukkan nama merchandise"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Kategori
                    </label>

                    <input
                        type="text"
                        name="kategori"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-300"
                        placeholder="Contoh: Pakaian, Aksesoris, Poster"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Harga
                    </label>

                    <input
                        type="number"
                        name="harga"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-300"
                        placeholder="Masukkan harga"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Stok
                    </label>

                    <input
                        type="number"
                        name="stok"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-300"
                        placeholder="Masukkan jumlah stok"
                    >
                </div>

                <div class="flex gap-3 pt-2">

                    <button
                        type="submit"
                        class="bg-purple-600 text-white px-5 py-2.5 rounded-lg hover:bg-purple-700"
                    >
                        Simpan
                    </button>

                    <a
                        href="/merchandise"
                        class="bg-gray-200 text-gray-700 px-5 py-2.5 rounded-lg hover:bg-gray-300"
                    >
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>

</html>