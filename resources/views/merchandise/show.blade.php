<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Merchandise</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-2xl mx-auto py-10 px-6">

        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">

            <h1 class="text-2xl font-bold text-gray-800 mb-6">
                Detail Merchandise
            </h1>

            <div class="space-y-4">

                <div>
                    <p class="text-sm text-gray-500">ID</p>
                    <p class="text-lg font-medium text-gray-800">
                        {{ $merchandise->id }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Nama Merchandise</p>
                    <p class="text-lg font-medium text-gray-800">
                        {{ $merchandise->Nama_Merchandise }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Kategori</p>
                    <p class="text-lg font-medium text-gray-800">
                        {{ $merchandise->Kategori }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Harga</p>
                    <p class="text-lg font-medium text-gray-800">
                        Rp {{ number_format($merchandise->Harga, 0, ',', '.') }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Stok</p>
                    <p class="text-lg font-medium text-gray-800">
                        {{ $merchandise->Stok }}
                    </p>
                </div>

            </div>

            <div class="mt-8">

                <a
                    href="/merchandise"
                    class="inline-block bg-gray-200 text-gray-700 px-5 py-2.5 rounded-lg hover:bg-gray-300"
                >
                    ← Kembali ke Data Merchandise
                </a>

            </div>

        </div>

    </div>

</body>

</html>