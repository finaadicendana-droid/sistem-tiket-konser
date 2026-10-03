<!DOCTYPE html>
<html>
<head>
    <title>Detail Data Tiket</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-2xl mx-auto py-10 px-6">

        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">

            <h1 class="text-2xl font-bold text-gray-800 mb-6">
                Detail Data Tiket
            </h1>

            <div class="space-y-4">

                <div class="border-b border-gray-200 pb-3">
                    <p class="text-sm text-gray-500">ID</p>
                    <p class="text-gray-800 font-medium">
                        {{ $tiket->id }}
                    </p>
                </div>

                <div class="border-b border-gray-200 pb-3">
                    <p class="text-sm text-gray-500">Jenis Tiket</p>
                    <p class="text-gray-800 font-medium">
                        {{ $tiket->Jenis_Tiket }}
                    </p>
                </div>

                <div class="border-b border-gray-200 pb-3">
                    <p class="text-sm text-gray-500">Kategori</p>
                    <p class="text-gray-800 font-medium">
                        {{ $tiket->Kategori }}
                    </p>
                </div>

                <div class="border-b border-gray-200 pb-3">
                    <p class="text-sm text-gray-500">Harga</p>
                    <p class="text-gray-800 font-medium">
                        Rp {{ number_format($tiket->Harga, 0, ',', '.') }}
                    </p>
                </div>

                <div class="pb-3">
                    <p class="text-sm text-gray-500">Stok</p>
                    <p class="text-gray-800 font-medium">
                        {{ $tiket->Stok }}
                    </p>
                </div>

            </div>

            <div class="mt-6 flex gap-3">

                <a
                    href="/tiket/{{ $tiket->id }}/edit"
                    class="bg-purple-600 hover:bg-purple-700 text-white px-5 py-2.5 rounded-md font-medium"
                >
                    Edit
                </a>

                <a
                    href="/tiket"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-5 py-2.5 rounded-md font-medium"
                >
                    Kembali
                </a>

            </div>

        </div>

    </div>

</body>
</html>