<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="Visi dan Misi Dinas Tenaga Kerja Kota Tasikmalaya"
    >

    <title>
        Visi dan Misi - Disnaker Kota Tasikmalaya
    </title>


    <style>

        /* =====================================================
           VARIABEL
        ===================================================== */

        :root {

            --bg: #f4f8fc;
            --surface: #ffffff;
            --surface-soft: #eef5fb;
            --surface-blue: #e9f2ff;

            --text: #0f172a;
            --text-soft: #475569;
            --text-muted: #64748b;

            --border: #dbe4ee;

            --primary: #155eef;
            --primary-dark: #0b45a7;

            --accent: #e31837;

            --navy: #0b2f55;

            --green: #07895d;
            --green-soft: #e7fbf2;

            --footer: #0f172a;

            --white: #ffffff;

            --shadow-sm:
                0 8px 22px rgba(15, 23, 42, .05);

            --shadow-lg:
                0 22px 50px rgba(15, 23, 42, .10);
        }


        /* =====================================================
           DARK MODE
        ===================================================== */

        body.dark {

            --bg: #0b1220;
            --surface: #111827;
            --surface-soft: #0f172a;
            --surface-blue: #172b50;

            --text: #f8fafc;
            --text-soft: #d1d5db;
            --text-muted: #9ca3af;

            --border: #293548;

            --primary: #4f8cff;
            --primary-dark: #3b72df;

            --navy: #12213b;

            --footer: #070d18;

            --shadow-sm:
                0 8px 22px rgba(0, 0, 0, .18);

            --shadow-lg:
                0 22px 50px rgba(0, 0, 0, .30);
        }


        /* =====================================================
           RESET
        ===================================================== */

        * {
            box-sizing: border-box;
        }


        html {
            scroll-behavior: smooth;
        }


        body {

            margin: 0;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background:
                var(--bg);

            color:
                var(--text);

            transition:
                background .3s ease,
                color .3s ease;
        }


        a {
            color: inherit;
        }


        button {
            font-family: inherit;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {

            width: 100%;

            min-height: 80px;

            padding:
                15px 5%;

            display: flex;

            align-items: center;

            gap: 24px;

            background:
                var(--surface);

            border-bottom:
                1px solid var(--border);

            position: sticky;

            top: 0;

            z-index: 999;
        }


        .logo-area {

            display: flex;

            align-items: center;

            text-decoration: none;

            flex-shrink: 0;
        }


        .logo-area img {

            display: block;

            width: auto;

            height: 48px;

            max-width: 230px;

            object-fit: contain;
        }


        .navbar-center {

            display: flex;

            align-items: center;

            justify-content: flex-end;

            flex: 1;

            min-width: 0;
        }


        .nav-menu {

            display: flex;

            align-items: center;

            gap: 2px;
        }


        .nav-item {

            position: relative;
        }


        .nav-link,
        .nav-dropdown-button {

            position: relative;

            text-decoration: none;

            padding:
                12px 15px;

            font-size: 14px;

            font-weight: 500;

            color:
                var(--text-soft);

            display: inline-flex;

            align-items: center;

            gap: 6px;

            background: transparent;

            border: 0;

            cursor: pointer;

            white-space: nowrap;
        }


        .nav-link:hover,
        .nav-dropdown-button:hover {

            color:
                var(--accent);
        }


        .nav-link::after,
        .nav-dropdown-button::after {

            content: "";

            position: absolute;

            left: 0;
            right: 0;
            bottom: 0;

            height: 3px;

            background:
                var(--accent);

            transform:
                scaleX(0);

            transition:
                .2s ease;
        }


        .nav-item:hover >
        .nav-link::after,

        .nav-item:hover >
        .nav-dropdown-button::after {

            transform:
                scaleX(1);
        }


        .dropdown-arrow {

            font-size: 10px;

            transition:
                .2s ease;
        }


        .nav-item:hover
        .dropdown-arrow {

            transform:
                rotate(180deg);
        }


        /* =====================================================
           DROPDOWN
        ===================================================== */

        .dropdown-menu {

            position: absolute;

            top:
                calc(100% + 1px);

            left: 50%;

            transform:
                translateX(-50%)
                translateY(8px);

            width:
                235px;

            background:
                var(--surface);

            border:
                1px solid var(--border);

            border-top:
                4px solid var(--accent);

            box-shadow:
                var(--shadow-lg);

            opacity: 0;

            visibility: hidden;

            pointer-events: none;

            transition:
                opacity .2s ease,
                transform .2s ease;

            z-index:
                1200;
        }


        .nav-item:hover >
        .dropdown-menu {

            opacity: 1;

            visibility: visible;

            pointer-events: auto;

            transform:
                translateX(-50%)
                translateY(0);
        }


        .dropdown-menu > a,
        .dropdown-parent {

            position: relative;

            display: flex;

            align-items: center;

            justify-content: space-between;

            width: 100%;

            min-height: 47px;

            padding:
                11px 16px;

            border-bottom:
                1px solid var(--border);

            text-decoration: none;

            color:
                var(--text-soft);

            font-size: 13px;

            line-height: 1.4;

            background:
                var(--surface);

            transition:
                .2s ease;

            cursor: pointer;
        }


        .dropdown-menu > a:hover,
        .dropdown-parent:hover {

            color:
                var(--accent);

            background:
                var(--surface-soft);
        }


        .submenu-arrow {

            font-size: 17px;

            color:
                var(--text-muted);
        }


        .dropdown-parent:hover
        .submenu-arrow {

            color:
                var(--accent);

            transform:
                translateX(-2px);
        }


        /* =====================================================
           SUBMENU
        ===================================================== */

        .submenu {

            position: absolute;

            top:
                -4px;

            right:
                100%;

            width:
                220px;

            background:
                var(--surface);

            border:
                1px solid var(--border);

            border-top:
                4px solid var(--accent);

            box-shadow:
                var(--shadow-lg);

            opacity: 0;

            visibility: hidden;

            pointer-events: none;

            transform:
                translateX(8px);

            transition:
                .2s ease;
        }


        .dropdown-parent:hover >
        .submenu {

            opacity: 1;

            visibility: visible;

            pointer-events: auto;

            transform:
                translateX(0);
        }


        .submenu a {

            display: flex;

            align-items: center;

            justify-content: flex-end;

            min-height: 46px;

            padding:
                11px 18px;

            border-bottom:
                1px solid var(--border);

            color:
                var(--text-soft);

            text-decoration: none;

            font-size: 13px;

            background:
                var(--surface);

            transition:
                .2s ease;
        }


        .submenu a:hover {

            color:
                var(--accent);

            background:
                var(--surface-soft);
        }


        /* =====================================================
           LOGIN
        ===================================================== */

        .nav-right {

            display: flex;

            align-items: center;

            flex-shrink: 0;
        }


        .login-link {

            color:
                var(--text-soft);

            text-decoration: none;

            padding:
                12px 15px;

            font-size: 14px;

            font-weight: 500;

            white-space: nowrap;

            transition:
                .2s ease;
        }


        .login-link:hover {

            color:
                var(--primary);
        }


        /* =====================================================
           HERO
        ===================================================== */

        .page-hero {

            position: relative;

            overflow: hidden;

            background:

                radial-gradient(
                    circle at 88% 15%,
                    rgba(21,94,239,.10),
                    transparent 26%
                ),

                linear-gradient(
                    135deg,
                    #f7fbff 0%,
                    #edf5ff 100%
                );

            padding:
                68px 5% 58px;

            border-bottom:
                1px solid var(--border);
        }


        body.dark .page-hero {

            background:

                radial-gradient(
                    circle at 88% 15%,
                    rgba(79,140,255,.15),
                    transparent 26%
                ),

                linear-gradient(
                    135deg,
                    #101b2d 0%,
                    #0d1727 100%
                );
        }


        .hero-inner {

            max-width:
                1200px;

            margin: auto;
        }


        .breadcrumb {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            color:
                var(--text-muted);

            font-size: 12px;

            margin-bottom: 20px;
        }


        .breadcrumb a {

            text-decoration: none;
        }


        .breadcrumb a:hover {

            color:
                var(--primary);
        }


        .breadcrumb strong {

            color:
                var(--primary);
        }


        .hero-grid {

            display: grid;

            grid-template-columns:
                1.3fr .7fr;

            gap: 40px;

            align-items: center;
        }


        .hero-kicker {

            display: inline-flex;

            align-items: center;

            gap: 7px;

            background:
                var(--surface-blue);

            color:
                var(--primary);

            padding:
                8px 13px;

            border-radius: 999px;

            font-size: 11px;

            font-weight: 700;

            margin-bottom: 18px;
        }


        .hero-title {

            margin: 0;

            font-size:
                clamp(40px, 5vw, 60px);

            line-height: 1.04;

            letter-spacing: -1.7px;

            color:
                var(--text);
        }


        .hero-title span {

            display: block;

            color:
                var(--primary);
        }


        .hero-description {

            max-width:
                790px;

            margin:
                20px 0 0;

            font-size: 16px;

            line-height: 1.75;

            color:
                var(--text-soft);
        }


        /* =====================================================
           HERO CARD
        ===================================================== */

        .hero-card {

            background:
                var(--surface);

            border:
                1px solid var(--border);

            border-radius:
                22px;

            padding:
                25px;

            box-shadow:
                var(--shadow-lg);
        }


        .hero-card-icon {

            width: 48px;
            height: 48px;

            border-radius: 14px;

            display: flex;

            align-items: center;

            justify-content: center;

            background:
                var(--surface-blue);

            color:
                var(--primary);

            font-size: 20px;

            font-weight: 800;

            margin-bottom: 17px;
        }


        .hero-card small {

            display: block;

            color:
                var(--text-muted);

            font-size: 10px;

            text-transform: uppercase;

            letter-spacing: .7px;

            margin-bottom: 6px;
        }


        .hero-card strong {

            display: block;

            font-size: 21px;

            color:
                var(--text);

            line-height: 1.4;

            margin-bottom: 9px;
        }


        .hero-card p {

            margin: 0;

            color:
                var(--text-soft);

            font-size: 12px;

            line-height: 1.65;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .vision-mission-section {

            padding:
                68px 5% 82px;

            background:
                var(--bg);
        }


        .content-container {

            max-width:
                1200px;

            margin:
                auto;
        }


        .section-heading {

            text-align: center;

            margin-bottom:
                35px;
        }


        .section-heading small {

            display: block;

            color:
                var(--primary);

            font-size: 11px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: .8px;

            margin-bottom: 8px;
        }


        .section-heading h2 {

            margin: 0;

            color:
                var(--text);

            font-size: 30px;
        }


        .section-heading p {

            max-width:
                720px;

            margin:
                11px auto 0;

            color:
                var(--text-soft);

            font-size: 13px;

            line-height: 1.7;
        }


        /* =====================================================
           VISI
        ===================================================== */

        .vision-card {

            position: relative;

            overflow: hidden;

            background:

                linear-gradient(
                    135deg,
                    #0b2f55 0%,
                    #155eef 100%
                );

            color: white;

            border-radius:
                25px;

            padding:
                34px 38px;

            box-shadow:
                0 22px 55px
                rgba(11,47,85,.18);

            margin-bottom:
                18px;
        }


        .vision-card::before {

            content: "";

            position: absolute;

            width: 190px;
            height: 190px;

            border:
                1px solid
                rgba(255,255,255,.12);

            border-radius: 50%;

            top: -95px;
            right: -50px;
        }


        .vision-card::after {

            content: "";

            position: absolute;

            width: 130px;
            height: 130px;

            border:
                1px solid
                rgba(255,255,255,.10);

            border-radius: 50%;

            bottom: -65px;
            left: -35px;
        }


        .vision-content {

            position: relative;

            z-index: 2;

            max-width:
                930px;
        }


        .card-label {

            display: inline-flex;

            align-items: center;

            gap: 7px;

            padding:
                7px 11px;

            border-radius:
                999px;

            background:
                rgba(255,255,255,.13);

            color:
                #dbeafe;

            font-size:
                10px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                .7px;

            margin-bottom:
                15px;
        }


        .vision-content h2 {

            margin:
                0 0 12px;

            font-size:
                26px;
        }


        .vision-content p {

            margin: 0;

            font-size:
                18px;

            line-height:
                1.75;

            font-weight:
                600;

            color:
                #ffffff;
        }


        /* =====================================================
           MISI
        ===================================================== */

        .mission-header {

            display: flex;

            align-items: flex-end;

            justify-content: space-between;

            gap: 20px;

            margin:
                42px 0 20px;
        }


        .mission-header h2 {

            margin: 0;

            font-size:
                28px;

            color:
                var(--text);
        }


        .mission-header p {

            max-width:
                520px;

            margin: 0;

            color:
                var(--text-soft);

            font-size:
                12px;

            line-height:
                1.6;
        }


        .mission-grid {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap:
                16px;
        }


        .mission-card {

            position: relative;

            background:
                var(--surface);

            border:
                1px solid var(--border);

            border-radius:
                20px;

            padding:
                24px;

            box-shadow:
                var(--shadow-sm);

            transition:
                transform .2s ease,
                box-shadow .2s ease;
        }


        .mission-card:hover {

            transform:
                translateY(-4px);

            box-shadow:
                var(--shadow-lg);
        }


        .mission-number {

            width: 45px;
            height: 45px;

            border-radius:
                13px;

            display: flex;

            align-items: center;

            justify-content: center;

            background:
                var(--surface-blue);

            color:
                var(--primary);

            font-size:
                15px;

            font-weight:
                800;

            margin-bottom:
                17px;
        }


        .mission-card h3 {

            margin:
                0 0 9px;

            font-size:
                16px;

            color:
                var(--text);
        }


        .mission-card p {

            margin: 0;

            color:
                var(--text-soft);

            font-size:
                13px;

            line-height:
                1.75;
        }


        .mission-card:last-child {

            grid-column:
                1 / -1;
        }


        /* =====================================================
           INFO
        ===================================================== */

        .info-box {

            margin-top:
                20px;

            padding:
                19px 21px;

            display: flex;

            align-items: flex-start;

            gap: 12px;

            border:
                1px solid var(--border);

            border-radius:
                17px;

            background:
                var(--surface-soft);
        }


        .info-icon {

            width: 35px;
            height: 35px;

            flex-shrink: 0;

            border-radius: 10px;

            display: flex;

            align-items: center;

            justify-content: center;

            background:
                var(--surface-blue);

            color:
                var(--primary);

            font-weight: 800;
        }


        .info-box strong {

            display: block;

            color:
                var(--text);

            font-size:
                12px;

            margin-bottom:
                4px;
        }


        .info-box p {

            margin: 0;

            color:
                var(--text-soft);

            font-size:
                11px;

            line-height:
                1.6;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {

            background:
                var(--footer);

            color:
                var(--white);

            padding:
                45px 5%;
        }


        .footer-container {

            max-width:
                1200px;

            margin: auto;

            display: flex;

            justify-content:
                space-between;

            gap: 30px;
        }


        .footer-title {

            font-size:
                18px;

            font-weight:
                700;

            margin-bottom:
                10px;
        }


        .footer-text {

            color:
                #9ca3af;

            font-size:
                13px;

            line-height:
                1.6;
        }


        .footer-links {

            display: flex;

            align-items: center;

            gap: 20px;

            flex-wrap: wrap;
        }


        .footer-links a {

            color:
                #d1d5db;

            text-decoration: none;

            font-size: 13px;
        }


        .footer-links a:hover {

            color:
                white;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1000px) {

            .navbar {

                flex-wrap: wrap;
            }


            .navbar-center {

                order: 3;

                width: 100%;

                flex-basis: 100%;

                justify-content: center;
            }


            .nav-menu {

                width: 100%;

                justify-content: center;
            }


            .hero-grid {

                grid-template-columns: 1fr;
            }


            .hero-card {

                max-width:
                    500px;
            }

        }


        @media (max-width: 800px) {

            .nav-menu {

                justify-content:
                    flex-start;

                overflow-x:
                    auto;

                scrollbar-width:
                    none;
            }


            .nav-menu::-webkit-scrollbar {

                display:
                    none;
            }


            .nav-link,
            .nav-dropdown-button,
            .login-link {

                font-size:
                    12px;

                padding:
                    10px 11px;
            }


            .mission-grid {

                grid-template-columns:
                    1fr;
            }


            .mission-card:last-child {

                grid-column:
                    auto;
            }


            .mission-header {

                flex-direction:
                    column;

                align-items:
                    flex-start;
            }


            .footer-container {

                flex-direction:
                    column;
            }

        }


        @media (max-width: 600px) {

            .navbar {

                padding:
                    12px 20px;
            }


            .logo-area img {

                height:
                    42px;

                max-width:
                    200px;
            }


            .nav-link,
            .nav-dropdown-button,
            .login-link {

                font-size:
                    11px;

                padding:
                    9px;
            }


            .dropdown-menu {

                position:
                    fixed;

                top:
                    72px;

                left:
                    20px;

                right:
                    20px;

                width:
                    auto;

                transform:
                    translateY(8px);
            }


            .nav-item:hover >
            .dropdown-menu {

                transform:
                    translateY(0);
            }


            .submenu {

                position:
                    static;

                width:
                    100%;

                border-top:
                    1px solid var(--border);

                border-left:
                    3px solid var(--accent);

                box-shadow:
                    none;

                display:
                    none;

                opacity:
                    1;

                visibility:
                    visible;

                pointer-events:
                    auto;

                transform:
                    none;
            }


            .dropdown-parent:hover >
            .submenu {

                display:
                    block;
            }


            .submenu a {

                justify-content:
                    flex-start;

                padding-left:
                    28px;
            }


            .page-hero {

                padding:
                    50px 20px 42px;
            }


            .vision-mission-section {

                padding:
                    50px 20px 65px;
            }


            .hero-title {

                font-size:
                    40px;
            }


            .hero-description {

                font-size:
                    14px;
            }


            .vision-card {

                padding:
                    28px 23px;
            }


            .vision-content h2 {

                font-size:
                    23px;
            }


            .vision-content p {

                font-size:
                    16px;
            }


            .section-heading h2 {

                font-size:
                    25px;
            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<header class="navbar">


    <!-- LOGO -->

    <a
        href="{{ url('/') }}"
        class="logo-area"
    >

        <img
            src="https://disnaker.tasikmalayakota.go.id/front/img/logo.png"
            alt="Logo Disnaker Tasikmalaya"
        >

    </a>


    <!-- MENU -->

    <div class="navbar-center">

        <nav class="nav-menu">


            <!-- BERANDA -->

            <div class="nav-item">

                <a
                    href="{{ url('/') }}"
                    class="nav-link"
                >

                    Beranda

                </a>

            </div>


            <!-- PROFIL -->

            <div class="nav-item">

                <button
                    type="button"
                    class="nav-dropdown-button"
                >

                    Profil

                    <span class="dropdown-arrow">
                        ▾
                    </span>

                </button>


                <div class="dropdown-menu">


                    <a href="{{ url('/sejarah') }}">
                        Sejarah
                    </a>


                    <a href="{{ url('/struktur-organisasi') }}">
                        Struktur Organisasi
                    </a>


                    <a href="{{ url('/visi-misi') }}">
                        Visi dan Misi
                    </a>


                    <a href="{{ url('/tupoksi') }}">
                        Tupoksi
                    </a>


                    <a href="#">
                        Pejabat Struktural
                    </a>


                </div>

            </div>


            <!-- DATA -->

            <div class="nav-item">

                <button
                    type="button"
                    class="nav-dropdown-button"
                >

                    Data

                    <span class="dropdown-arrow">
                        ▾
                    </span>

                </button>


                <div class="dropdown-menu">


                    <a href="#">
                        Data Ketenagakerjaan
                    </a>

                    <a href="#">
                        Transmigrasi
                    </a>


                    <div class="dropdown-parent">

                        <span>
                            BKK (Bursa Kerja Khusus)
                        </span>

                        <span class="submenu-arrow">
                            ‹
                        </span>


                        <div class="submenu">

                            <a href="#">
                                Data BKK SMK
                            </a>

                            <a href="#">
                                Data BKK LPK
                            </a>

                            <a href="#">
                                Data BKK Perguruan Tinggi
                            </a>

                        </div>

                    </div>


                    <a href="#">
                        LPPTKS &amp; P3MI
                    </a>

                    <a href="#">
                        Hubungan Industrial
                    </a>

                    <a href="#">
                        IKM
                    </a>

                    <a href="#">
                        Maklumat Pelayanan
                    </a>


                </div>

            </div>


            <!-- PPID -->

            <div class="nav-item">

                <button
                    type="button"
                    class="nav-dropdown-button"
                >

                    PPID

                    <span class="dropdown-arrow">
                        ▾
                    </span>

                </button>


                <div class="dropdown-menu">


<a
    href="https://ppid.tasikmalayakota.go.id/"
    target="_blank"
    rel="noopener noreferrer"
>
    PPID Utama
</a>

                    <a href="#">
                        Formulir Permohonan Informasi
                    </a>


                    <div class="dropdown-parent">

                        <span>
                            Informasi Setiap Saat
                        </span>

                        <span class="submenu-arrow">
                            ‹
                        </span>


                        <div class="submenu">

                            <a href="#">
                                2017
                            </a>

                            <a href="#">
                                2018
                            </a>

                            <a href="#">
                                2020
                            </a>

                            <a href="#">
                                2022
                            </a>

                            <a href="#">
                                2023
                            </a>

                            <a href="#">
                                2024
                            </a>

                        </div>

                    </div>


                    <a href="#">
                        Informasi Publik
                    </a>

                    <a href="#">
                        Informasi Serta Merta
                    </a>


                </div>

            </div>


            <!-- SP4N -->

            <div class="nav-item">

<a
    href="https://www.lapor.go.id/"
    class="nav-link"
    target="_blank"
    rel="noopener noreferrer"
>
    SP4N-LAPOR!
</a>
                </a>

            </div>


        </nav>

    </div>


    <!-- LOGIN -->

    <div class="nav-right">

        <a
            href="{{ url('/login') }}"
            class="login-link"
        >

            Masuk

        </a>

    </div>


</header>


<!-- =====================================================
     HERO
===================================================== -->

<section class="page-hero">


    <div class="hero-inner">


        <div class="breadcrumb">


            <a href="{{ url('/') }}">
                Beranda
            </a>


            <span>›</span>


            <span>Profil</span>


            <span>›</span>


            <strong>
                Visi dan Misi
            </strong>


        </div>


        <div class="hero-grid">


            <div>


                <div class="hero-kicker">

                    ● PROFIL DISNAKER
                    KOTA TASIKMALAYA

                </div>


                <h1 class="hero-title">

                    Visi dan

                    <span>
                        Misi
                    </span>

                </h1>


                <p class="hero-description">

                    Visi dan misi menjadi landasan arah
                    pembangunan serta pelaksanaan tugas
                    pemerintah daerah dalam mewujudkan
                    Kota Tasikmalaya yang diharapkan.

                </p>


            </div>


            <div class="hero-card">


                <div class="hero-card-icon">
                    ◈
                </div>


                <small>
                    Arah Pembangunan
                </small>


                <strong>
                    Religius, Inovatif, Maju,
                    dan Berkelanjutan
                </strong>


                <p>
                    Arah pembangunan dirancang dengan
                    memperhatikan kualitas masyarakat,
                    perekonomian, tata kelola,
                    infrastruktur, dan keberlanjutan.
                </p>


            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     VISI & MISI
===================================================== -->

<section class="vision-mission-section">


    <div class="content-container">


        <div class="section-heading">


            <small>
                Profil Pemerintah Daerah
            </small>


            <h2>
                Visi dan Misi
            </h2>


            <p>
                Arah dan tujuan yang menjadi dasar
                dalam penyelenggaraan pemerintahan
                dan pembangunan Kota Tasikmalaya.
            </p>


        </div>


        <!-- VISI -->

        <div class="vision-card">


            <div class="vision-content">


                <div class="card-label">
                    ✦ VISI
                </div>


                <h2>
                    Tasikmalaya sebagai Kota Industri,
                    Jasa dan Perdagangan
                </h2>


                <p>

                    Tasikmalaya sebagai Kota Industri,
                    Jasa dan Perdagangan yang Religius,
                    Inovatif, Maju, dan Berkelanjutan

                </p>


            </div>

        </div>


        <!-- MISI -->

        <div class="mission-header">


            <div>

                <small style="
                    display:block;
                    color:var(--primary);
                    font-size:11px;
                    font-weight:800;
                    text-transform:uppercase;
                    letter-spacing:.8px;
                    margin-bottom:7px;
                ">
                    Arah Strategis
                </small>


                <h2>
                    Misi
                </h2>

            </div>


            <p>
                Lima misi berikut menjadi arah utama
                dalam mewujudkan visi Kota Tasikmalaya.
            </p>


        </div>


        <div class="mission-grid">


            <!-- MISI 1 -->

            <article class="mission-card">


                <div class="mission-number">
                    01
                </div>


                <h3>
                    Sumber Daya Manusia
                </h3>


                <p>
                    Mewujudkan Sumber Daya Manusia yang
                    Berkualitas dan Kehidupan Sosial
                    Masyarakat yang Religus dan Berbudaya
                </p>


            </article>


            <!-- MISI 2 -->

            <article class="mission-card">


                <div class="mission-number">
                    02
                </div>


                <h3>
                    Perekonomian Daerah
                </h3>


                <p>
                    Mewujudkan Perekonomian Daerah yang
                    Berkeadilan, Kuat dan Berdaya Saling
                    Berbasis Industri, Jasa dan Perdagangan
                </p>


            </article>


            <!-- MISI 3 -->

            <article class="mission-card">


                <div class="mission-number">
                    03
                </div>


                <h3>
                    Tata Kelola Pemerintah
                </h3>


                <p>
                    Mewujudkan Tata Kelola Pemerintah
                    yang Baik dan Bersih
                </p>


            </article>


            <!-- MISI 4 -->

            <article class="mission-card">


                <div class="mission-number">
                    04
                </div>


                <h3>
                    Infrastruktur Daerah
                </h3>


                <p>
                    Mewujudkan Infrastruktur Daerah
                    yang Berkualitas dan Merata
                </p>


            </article>


            <!-- MISI 5 -->

            <article class="mission-card">


                <div class="mission-number">
                    05
                </div>


                <h3>
                    Pembangunan Berkelanjutan
                </h3>


                <p>
                    Mewujudkan Pembangunan yang
                    Berkelanjutan
                </p>


            </article>


        </div>


        <!-- INFO -->

        <div class="info-box">


            <div class="info-icon">
                i
            </div>


            <div>


                <strong>
                    Arah Pembangunan
                </strong>


                <p>
                    Visi dan misi ditampilkan dalam
                    bentuk kartu informasi agar lebih
                    mudah dibaca pada perangkat komputer
                    maupun perangkat mobile.
                </p>


            </div>


        </div>


    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer>


    <div class="footer-container">


        <div>


            <div class="footer-title">

                Dinas Tenaga Kerja
                Kota Tasikmalaya

            </div>


            <div class="footer-text">

                Jl. Siliwangi No. 73,
                Kahuripan, Kec. Tawang,
                Kota Tasikmalaya,
                Jawa Barat 46115.

                <br><br>

                © 2026 Pemerintah Kota Tasikmalaya.
                Hak Cipta Dilindungi Undang-Undang.

            </div>


        </div>


        <div class="footer-links">


            <a href="{{ url('/') }}">
                Beranda
            </a>


            <a href="{{ url('/lowongan') }}">
                Lowongan
            </a>


            <a href="{{ url('/login') }}">
                Masuk
            </a>


            <a href="#">
                Kebijakan Privasi
            </a>


        </div>


    </div>


</footer>


<!-- =====================================================
     DARK MODE
===================================================== -->

<script>

    const temaTersimpan =
        localStorage.getItem('tema');


    if (
        temaTersimpan === 'dark'
    ) {

        document.body.classList.add('dark');

    }

</script>


</body>

</html>