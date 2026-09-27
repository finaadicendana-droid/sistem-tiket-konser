<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Tiket Konser</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #222;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            height: 65px;
            background-color: #17131f;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 70px;
            color: white;
        }

        .logo {
            font-size: 21px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .logo span {
            color: #9b59b6;
        }

        .nav-menu {
            display: flex;
            gap: 28px;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-size: 13px;
        }

        .nav-menu a:hover {
            color: #b879d1;
        }


        /* =========================
           HERO / BANNER
        ========================= */

        .hero {
            height: 500px;

            background:
                linear-gradient(
                    rgba(25, 10, 40, 0.45),
                    rgba(25, 10, 40, 0.65)
                ),
                url('/images/Banner.png');

            background-size: cover;
            background-position: center;

            display: flex;
            justify-content: center;
            align-items: center;

            text-align: center;
            color: white;
        }

        .hero-content h1 {
            margin: 0;
            font-size: 46px;
            letter-spacing: 5px;
        }

        .hero-content p {
            margin-top: 15px;
            font-size: 16px;
        }

        .hero-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;

            background-color: white;
            color: #222;

            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
        }

        .hero-button:hover {
            background-color: #eeeeee;
        }


        /* =========================
           4 MENU DATA
        ========================= */

        .menu-section {
            background-color: white;
            padding: 30px 10%;
        }

        .menu {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .menu-item {
            text-align: center;
            padding: 20px;
            border-right: 1px solid #ddd;
            text-decoration: none;
            color: #222;
        }

        .menu-item:last-child {
            border-right: none;
        }

        .menu-icon {
            font-size: 27px;
            margin-bottom: 8px;
        }

        .menu-item h3 {
            margin: 5px 0;
            font-size: 16px;
        }

        .menu-item p {
            margin: 0;
            color: #777;
            font-size: 13px;
        }

        .menu-item:hover {
            background-color: #fafafa;
        }


        /* =========================
           CONTENT
        ========================= */

        .content {
            width: 85%;
            max-width: 1100px;
            margin: 45px auto;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-header h2 {
            margin: 0;
            font-size: 24px;
        }

        .section-header a {
            color: #777;
            text-decoration: none;
            font-size: 13px;
        }


        /* =========================
           EVENT IMAGE
        ========================= */

        .events {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .event-card {
            background-color: white;
            border: 1px solid #ddd;
        }

        .event-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            background-color: #17131f;
            color: #aaa;
            text-align: center;
            padding: 25px;
            margin-top: 60px;
            font-size: 13px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 800px) {

            .navbar {
                padding: 0 20px;
            }

            .nav-menu {
                gap: 10px;
            }

            .nav-menu a {
                font-size: 11px;
            }

            .menu {
                grid-template-columns: repeat(2, 1fr);
            }

            .menu-item {
                border-bottom: 1px solid #ddd;
            }

            .events {
                grid-template-columns: 1fr;
            }

            .hero-content h1 {
                font-size: 32px;
            }
        }
    </style>
</head>


<body>

    <!-- =========================
         NAVBAR
    ========================== -->

    <div class="navbar">

        <div class="logo">
            TICKET<span>BOX</span>
        </div>

        <div class="nav-menu">

            <a href="/">
                HOME
            </a>

            <a href="/konser">
                KONSER
            </a>

            <a href="/tiket">
                TIKET
            </a>

            <a href="/pembeli">
                PEMBELI
            </a>

            <a href="/pemesanan">
                PEMESANAN
            </a>

        </div>

    </div>


    <!-- =========================
         HERO
    ========================== -->

    <section class="hero">

        <div class="hero-content">

            <h1>SISTEM TIKET KONSER</h1>

            <p>
                Temukan konser favorit dan kelola tiket dengan mudah
            </p>

            <a href="/konser" class="hero-button">
                LIHAT KONSER
            </a>

        </div>

    </section>


    <!-- =========================
         4 MENU DATA
    ========================== -->

    <section class="menu-section">

        <div class="menu">

            <!-- KONSER -->

            <a href="/konser" class="menu-item">

                <div class="menu-icon">
                    🎤
                </div>

                <h3>
                    Data Konser
                </h3>

                <p>
                    Informasi konser
                </p>

            </a>


            <!-- TIKET -->

            <a href="/tiket" class="menu-item">

                <div class="menu-icon">
                    🎟
                </div>

                <h3>
                    Data Tiket
                </h3>

                <p>
                    Jenis dan harga tiket
                </p>

            </a>


            <!-- PEMBELI -->

            <a href="/pembeli" class="menu-item">

                <div class="menu-icon">
                    👤
                </div>

                <h3>
                    Data Pembeli
                </h3>

                <p>
                    Informasi pembeli
                </p>

            </a>


            <!-- PEMESANAN -->

            <a href="/pemesanan" class="menu-item">

                <div class="menu-icon">
                    🛒
                </div>

                <h3>
                    Data Pemesanan
                </h3>

                <p>
                    Informasi pemesanan
                </p>

            </a>

        </div>

    </section>


    <!-- =========================
         UPCOMING EVENTS
    ========================== -->

    <div class="content">

        <div class="section-header">

            <h2>
                Upcoming Events
            </h2>

            <a href="/konser">
                Lihat Semua
            </a>

        </div>


        <div class="events">

            <div class="event-card">
                <img src="/images/GFRIEND.png">
            </div>

            <div class="event-card">
                <img src="/images/ENHYPEN.png">
            </div>

            <div class="event-card">
                <img src="/images/BM.png">
            </div>

        </div>

    </div>


    <!-- =========================
         FOOTER
    ========================== -->

    <footer>

        Sistem Tiket Konser © 2026

    </footer>


</body>
</html>