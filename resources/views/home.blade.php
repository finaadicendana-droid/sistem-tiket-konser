<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Tiket Konser</title>

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

            <a href="/pembeli" class="text-white no-underline text-[11px] md:text-[13px] hover:text-[#b879d1]">
                PEMBELI
            </a>

            <a href="/pemesanan" class="text-white no-underline text-[11px] md:text-[13px] hover:text-[#b879d1]">
                PEMESANAN
            </a>

        </div>

    </nav>


    <!-- HERO -->
    <section
        class="h-[500px] bg-cover bg-center flex items-center justify-center text-center text-white"
        style="background-image: linear-gradient(rgba(25,10,40,0.45), rgba(25,10,40,0.65)), url('/images/Banner.png');"
    >

        <div>

            <h1 class="m-0 text-[32px] md:text-[46px] tracking-[3px] md:tracking-[5px] font-bold">
                SISTEM TIKET KONSER
            </h1>

            <p class="mt-[15px] text-[14px] md:text-[16px]">
                Temukan konser favorit dan kelola tiket dengan mudah
            </p>

            <a
                href="/konser"
                class="inline-block mt-5 px-[25px] py-3 bg-white text-[#222] no-underline text-[13px] font-bold rounded hover:bg-[#eeeeee]"
            >
                LIHAT KONSER
            </a>

        </div>

    </section>


    <!-- 4 MENU DATA -->
    <section class="bg-[#f5f3f7] px-[8%] py-[35px]">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[18px]">

            <!-- KONSER -->
            <a
                href="/konser"
                class="text-center p-6 bg-white border border-[#e4dfe8] rounded-lg no-underline text-[#222] transition duration-200 hover:border-[#9b59b6] hover:shadow-md hover:-translate-y-0.5"
            >
                <div class="text-[25px] mb-[10px]">
                    🎤
                </div>

                <h3 class="m-[5px_0_7px] text-[16px] font-semibold">
                    Data Konser
                </h3>

                <p class="m-0 text-[#777] text-[12px]">
                    Informasi konser
                </p>
            </a>


            <!-- TIKET -->
            <a
                href="/tiket"
                class="text-center p-6 bg-white border border-[#e4dfe8] rounded-lg no-underline text-[#222] transition duration-200 hover:border-[#9b59b6] hover:shadow-md hover:-translate-y-0.5"
            >
                <div class="text-[25px] mb-[10px]">
                    🎟
                </div>

                <h3 class="m-[5px_0_7px] text-[16px] font-semibold">
                    Data Tiket
                </h3>

                <p class="m-0 text-[#777] text-[12px]">
                    Jenis dan harga tiket
                </p>
            </a>


            <!-- PEMBELI -->
            <a
                href="/pembeli"
                class="text-center p-6 bg-white border border-[#e4dfe8] rounded-lg no-underline text-[#222] transition duration-200 hover:border-[#9b59b6] hover:shadow-md hover:-translate-y-0.5"
            >
                <div class="text-[25px] mb-[10px]">
                    👤
                </div>

                <h3 class="m-[5px_0_7px] text-[16px] font-semibold">
                    Data Pembeli
                </h3>

                <p class="m-0 text-[#777] text-[12px]">
                    Informasi pembeli
                </p>
            </a>


            <!-- PEMESANAN -->
            <a
                href="/pemesanan"
                class="text-center p-6 bg-white border border-[#e4dfe8] rounded-lg no-underline text-[#222] transition duration-200 hover:border-[#9b59b6] hover:shadow-md hover:-translate-y-0.5"
            >
                <div class="text-[25px] mb-[10px]">
                    🛒
                </div>

                <h3 class="m-[5px_0_7px] text-[16px] font-semibold">
                    Data Pemesanan
                </h3>

                <p class="m-0 text-[#777] text-[12px]">
                    Informasi pemesanan
                </p>
            </a>

        </div>

    </section>


    <!-- UPCOMING EVENTS -->
    <main class="w-[85%] max-w-[1100px] mx-auto my-[45px]">

        <div class="flex justify-between items-center mb-5">

            <h2 class="m-0 text-[24px] font-semibold">
                Upcoming Events
            </h2>

            <a
                href="/konser"
                class="text-[#777] no-underline text-[13px] hover:text-[#9b59b6]"
            >
                Lihat Semua
            </a>

        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-[22px]">

            <!-- GFRIEND -->
            <div class="bg-white border border-[#ddd] text-center rounded-md overflow-hidden transition duration-200 hover:shadow-lg hover:-translate-y-1">

                <img
                    src="/images/GFRIEND.png"
                    alt="GFRIEND"
                    class="w-full h-[180px] object-cover block"
                >

                <h2 class="my-[15px] text-[19px] font-semibold text-[#29202f]">
                    GFRIEND
                </h2>

            </div>


            <!-- ENHYPEN -->
            <div class="bg-white border border-[#ddd] text-center rounded-md overflow-hidden transition duration-200 hover:shadow-lg hover:-translate-y-1">

                <img
                    src="/images/ENHYPEN.png"
                    alt="ENHYPEN"
                    class="w-full h-[180px] object-cover block"
                >

                <h2 class="my-[15px] text-[19px] font-semibold text-[#29202f]">
                    ENHYPEN
                </h2>

            </div>


            <!-- BABYMONSTER -->
            <div class="bg-white border border-[#ddd] text-center rounded-md overflow-hidden transition duration-200 hover:shadow-lg hover:-translate-y-1">

                <img
                    src="/images/BM.png"
                    alt="BABYMONSTER"
                    class="w-full h-[180px] object-cover block"
                >

                <h2 class="my-[15px] text-[19px] font-semibold text-[#29202f]">
                    BABYMONSTER
                </h2>

            </div>

        </div>

    </main>


    <!-- FOOTER -->
    <footer class="bg-[#17131f] text-[#aaa] text-center py-[25px] mt-[60px] text-[13px]">

        Sistem Tiket Konser © 2026

    </footer>

</body>

</html>