<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Merchandise</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-2xl mx-auto py-10 px-6">

        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">

            <h1 class="text-2xl font-bold text-gray-800 mb-6">
                Edit Data Merchandise
            </h1>

            <form action="{{ route('merchandise.update', $merchandise->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Merchandise
                    </label>

                    <input
                        type="text"
                        name="nama_merchandise"
                        value="{{ $merchandise->Nama_Merchandise }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-300"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Kategori
                    </label>

                    <input
                        type="text"
                        name="kategori"
                        value="{{ $merchandise->Kategori }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-300"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Harga
                    </label>

                    <input
                        type="number"
                        name="harga"
                        value="{{ $merchandise->Harga }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-300"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Stok
                    </label>

                    <input
                        type="number"
                        name="stok"
                        value="{{ $merchandise->Stok }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-purple-300"
                    >
                </div>

                <div class="flex gap-3 mt-6">

                    <button
                        type="submit"
                        class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg">
                    >
                        Simpan Perubahan
                    </button>

                    <a
                        href="{{ route('merchandise.index') }}"
                        class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-lg">
                    >
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>

</html>