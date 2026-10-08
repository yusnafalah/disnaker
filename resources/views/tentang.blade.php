<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tentang - Disnaker Tasikmalaya</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            color: #333;
        }

        /* =========================
           NAVBAR
        ========================= */

        nav {
            background: #ffffff;
            padding: 14px 40px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);

            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;

            color: #2563eb;
            text-decoration: none;

            font-size: 20px;
            font-weight: 700;
        }

        .brand img {
            width: 45px;
            height: 45px;
            object-fit: contain;
        }

        .brand span {
            color: #2563eb;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-menu a {
            color: #2563eb;
            text-decoration: none;

            font-size: 15px;
            font-weight: 600;

            padding: 9px 14px;
            border-radius: 6px;

            transition:
                background 0.2s ease,
                color 0.2s ease;
        }

        .nav-menu a:hover {
            background: #eff6ff;
            color: #1d4ed8;
        }

        /* =========================
           CONTAINER
        ========================= */

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 50px 20px 60px;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            background: white;

            padding: 45px 35px;

            border-radius: 14px;

            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);

            text-align: center;

            margin-bottom: 25px;
        }

        .hero h1 {
            margin: 0 0 15px;

            color: #1d4ed8;
        }

        .hero p {
            max-width: 700px;

            margin: 0 auto;

            color: #666;

            line-height: 1.7;
        }

        /* =========================
           CARD
        ========================= */

        .card {
            background: white;

            padding: 30px;

            border-radius: 12px;

            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.07);

            margin-bottom: 20px;
        }

        .card h2 {
            margin-top: 0;

            color: #222;
        }

        .card p {
            line-height: 1.8;

            color: #555;
        }

        /* =========================
           SERVICES
        ========================= */

        .services {
            display: grid;

            grid-template-columns:
                repeat(auto-fit, minmax(220px, 1fr));

            gap: 20px;

            margin-top: 20px;
        }

        .service {
            background: #f8fafc;

            padding: 22px;

            border-radius: 10px;
        }

        .service h3 {
            margin-top: 0;

            color: #2563eb;
        }

        .service p {
            margin-bottom: 0;

            font-size: 14px;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #111827;

            color: white;

            text-align: center;

            padding: 25px 20px;

            font-size: 14px;
        }

        footer p {
            margin: 5px 0;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 600px) {

            nav {
                padding: 12px 20px;

                flex-direction: column;

                gap: 10px;
            }

            .brand {
                font-size: 18px;
            }

            .brand img {
                width: 40px;
                height: 40px;
            }

            .nav-menu {
                gap: 4px;

                flex-wrap: wrap;

                justify-content: center;
            }

            .nav-menu a {
                padding: 8px 10px;

                font-size: 14px;
            }

            .container {
                padding: 30px 15px 45px;
            }

            .hero,
            .card {
                padding: 25px 20px;
            }
        }
    </style>
</head>

<body>

<nav>

    <a href="/" class="brand">

        <img
            src="https://disnaker.tasikmalayakota.go.id/front/img/logo.png"
            alt="Logo Disnaker Tasikmalaya"
        >

        <span>
            Disnaker Tasikmalaya
        </span>

    </a>

    <div class="nav-menu">

        <a href="/">
            Beranda
        </a>

        <a href="/lowongan">
            Lowongan Kerja
        </a>

        <a href="/tentang">
            Tentang
        </a>

    </div>

</nav>


<div class="container">

    <section class="hero">

        <h1>
            Tentang Disnaker Tasikmalaya
        </h1>

        <p>
            Website ini menyediakan informasi ketenagakerjaan,
            khususnya informasi lowongan pekerjaan yang dapat
            diakses oleh masyarakat Tasikmalaya.
        </p>

    </section>


    <section class="card">

        <h2>
            Tentang Website
        </h2>

        <p>
            Website Disnaker Tasikmalaya merupakan media informasi
            untuk membantu masyarakat memperoleh informasi mengenai
            kesempatan kerja yang tersedia.
        </p>

        <p>
            Masyarakat dapat melihat daftar lowongan, mencari
            lowongan berdasarkan posisi, perusahaan, atau lokasi,
            kemudian melihat detail informasi pekerjaan.
        </p>

    </section>


    <section class="card">

        <h2>
            Informasi yang Tersedia
        </h2>

        <div class="services">

            <div class="service">

                <h3>
                    💼 Lowongan Kerja
                </h3>

                <p>
                    Melihat berbagai informasi lowongan pekerjaan
                    yang tersedia.
                </p>

            </div>


            <div class="service">

                <h3>
                    🔎 Pencarian
                </h3>

                <p>
                    Mencari lowongan berdasarkan posisi,
                    perusahaan, atau lokasi.
                </p>

            </div>


            <div class="service">

                <h3>
                    📋 Detail Lowongan
                </h3>

                <p>
                    Melihat informasi perusahaan, lokasi,
                    deskripsi pekerjaan, dan masa berlaku.
                </p>

            </div>


            <div class="service">

                <h3>
                    📝 Informasi Lamaran
                </h3>

                <p>
                    Mengisi formulir lamaran sebagai tampilan
                    frontend pada website.
                </p>

            </div>

        </div>

    </section>

</div>


<footer>

    <p>
        &copy; 2026 Disnaker Tasikmalaya
    </p>

    <p>
        Website Informasi Ketenagakerjaan
    </p>

</footer>


</body>

</html>