<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Disnaker Tasikmalaya
    </title>


    <style>

        /* =====================================================
           VARIABEL WARNA TEMA
        ===================================================== */

        :root {

            --bg: #f4f8fc;

            --bg-secondary: #ffffff;

            --bg-section: #eef5fb;

            --bg-card: #ffffff;

            --text: #0f172a;

            --text-secondary: #475569;

            --text-muted: #64748b;

            --border: #dbe4ee;

            --primary: #2563eb;

            --primary-dark: #1749b8;

            --primary-light: #e8f1ff;

            --shadow:
                0 10px 30px rgba(15, 23, 42, 0.08);

            --footer: #0f172a;

            --footer-text: #ffffff;

            --input: #ffffff;

            --hero:
                linear-gradient(
                    135deg,
                    #f5f9ff 0%,
                    #edf5ff 100%
                );
        }


        /* =====================================================
           TEMA MALAM
        ===================================================== */

        body.dark {

            --bg: #0b1220;

            --bg-secondary: #111827;

            --bg-section: #0f172a;

            --bg-card: #182235;

            --text: #f8fafc;

            --text-secondary: #d1d5db;

            --text-muted: #9ca3af;

            --border: #293548;

            --primary: #4f8cff;

            --primary-dark: #3b72df;

            --primary-light: #172b50;

            --shadow:
                0 10px 30px rgba(0, 0, 0, 0.35);

            --footer: #070d18;

            --footer-text: #f8fafc;

            --input: #111827;

            --hero:
                linear-gradient(
                    135deg,
                    #101b2d 0%,
                    #0d1727 100%
                );
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
                background 0.3s ease,
                color 0.3s ease;
        }


        a {
            color: inherit;
        }


        button,
        input,
        select {
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

            gap: 25px;

            background:
                var(--bg-secondary);

            border-bottom:
                1px solid var(--border);

            position: sticky;

            top: 0;

            z-index: 999;

            transition:
                background 0.3s ease,
                border-color 0.3s ease;
        }


        /* =====================================================
           LOGO
        ===================================================== */

        .logo-area {

            display: flex;

            align-items: center;

            justify-content: flex-start;

            text-decoration: none;

            flex-shrink: 0;

            width: auto;
        }


        .logo-area img {

            display: block;

            width: auto;

            height: 48px;

            max-width: 230px;

            object-fit: contain;
        }


        /* =====================================================
           NAVBAR CENTER
        ===================================================== */

        .navbar-center {

            display: flex;

            align-items: center;

            justify-content: flex-end;

            flex: 1;

            min-width: 0;
        }


        /* =====================================================
           NAV MENU
        ===================================================== */

        .nav-menu {

            display: flex;

            align-items: center;

            gap: 2px;

            flex-shrink: 0;
        }


        .nav-item {

            position: relative;
        }


        /* =====================================================
           LINK DAN BUTTON NAVBAR
        ===================================================== */

        .nav-link,
        .nav-dropdown-button {

            position: relative;

            text-decoration: none;

            padding:
                12px 15px;

            font-size: 14px;

            font-weight: 500;

            color:
                var(--text-secondary);

            transition:
                0.2s ease;

            white-space: nowrap;

            display: inline-flex;

            align-items: center;

            gap: 6px;

            background:
                transparent;

            border: none;

            cursor: pointer;
        }


        .nav-link:hover,
        .nav-dropdown-button:hover {

            color:
                #e31837;

            background:
                transparent;
        }


        .dropdown-arrow {

            font-size: 10px;

            transition:
                transform 0.2s ease;
        }


        .nav-item:hover
        .dropdown-arrow {

            transform:
                rotate(180deg);
        }


        /* =====================================================
           GARIS MERAH
        ===================================================== */

        .nav-link::after,
        .nav-dropdown-button::after {

            content: "";

            position: absolute;

            left: 0;

            right: 0;

            bottom: 0;

            height: 3px;

            background:
                #e31837;

            transform:
                scaleX(0);

            transform-origin:
                center;

            transition:
                transform 0.2s ease;
        }


        .nav-item:hover >
        .nav-link::after,

        .nav-item:hover >
        .nav-dropdown-button::after {

            transform:
                scaleX(1);
        }


        /* =====================================================
           DROPDOWN UTAMA
        ===================================================== */

        .dropdown-menu {

            position: absolute;

            top:
                calc(100% + 1px);

            left: 50%;

            transform:
                translateX(-50%)
                translateY(8px);

            width: 235px;

            background:
                var(--bg-secondary);

            border:
                1px solid var(--border);

            border-top:
                4px solid #e31837;

            box-shadow:
                0 12px 30px
                rgba(15, 23, 42, 0.12);

            opacity: 0;

            visibility: hidden;

            pointer-events: none;

            transition:
                opacity 0.2s ease,
                transform 0.2s ease;

            z-index: 1200;
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


        /* =====================================================
           ITEM DROPDOWN
        ===================================================== */

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
                var(--text-secondary);

            font-size: 13px;

            line-height: 1.4;

            background:
                var(--bg-secondary);

            transition:
                0.2s ease;

            cursor: pointer;
        }


        .dropdown-menu > a:last-child {

            border-bottom:
                none;
        }


        .dropdown-menu > a:hover,
        .dropdown-parent:hover {

            color:
                #e31837;

            background:
                #fafafa;
        }


        body.dark .dropdown-menu > a:hover,
        body.dark .dropdown-parent:hover {

            background:
                #182235;
        }


        /* =====================================================
           PANAH SUBMENU
        ===================================================== */

        .submenu-arrow {

            font-size: 17px;

            color:
                var(--text-muted);

            transition:
                0.2s ease;
        }


        .dropdown-parent:hover
        .submenu-arrow {

            color:
                #e31837;

            transform:
                translateX(-2px);
        }


        /* =====================================================
           SUBMENU BERTINGKAT
        ===================================================== */

        .submenu {

            position: absolute;

            top: -4px;

            right: 100%;

            width: 220px;

            background:
                var(--bg-secondary);

            border:
                1px solid var(--border);

            border-top:
                4px solid #e31837;

            box-shadow:
                0 12px 30px
                rgba(15, 23, 42, 0.12);

            opacity: 0;

            visibility: hidden;

            pointer-events: none;

            transform:
                translateX(8px);

            transition:
                opacity 0.2s ease,
                transform 0.2s ease;

            z-index: 1300;
        }


        .dropdown-parent:hover >
        .submenu {

            opacity: 1;

            visibility: visible;

            pointer-events: auto;

            transform:
                translateX(0);
        }


        /* =====================================================
           ITEM SUBMENU
        ===================================================== */

        .submenu a {

            display: flex;

            align-items: center;

            justify-content: flex-end;

            width: 100%;

            min-height: 46px;

            padding:
                11px 18px;

            border-bottom:
                1px solid var(--border);

            color:
                var(--text-secondary);

            text-decoration: none;

            font-size: 13px;

            background:
                var(--bg-secondary);

            transition:
                0.2s ease;
        }


        .submenu a:last-child {

            border-bottom:
                none;
        }


        .submenu a:hover {

            background:
                #fafafa;

            color:
                #e31837;
        }


        body.dark .submenu a:hover {

            background:
                #182235;
        }


        /* =====================================================
           NAV KANAN
        ===================================================== */

        .nav-right {

            display:
                flex;

            align-items:
                center;

            flex-shrink:
                0;
        }


        .login-link {

            color:
                var(--text-secondary);

            text-decoration:
                none;

            padding:
                12px 15px;

            font-size:
                14px;

            font-weight:
                500;

            white-space:
                nowrap;

            transition:
                0.2s ease;
        }


        .login-link:hover {

            color:
                var(--primary);
        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .btn {

            border:
                none;

            cursor:
                pointer;

            text-decoration:
                none;

            display:
                inline-flex;

            align-items:
                center;

            justify-content:
                center;

            gap:
                7px;

            padding:
                11px 18px;

            border-radius:
                9px;

            font-weight:
                700;

            font-size:
                14px;

            transition:
                all 0.2s ease;
        }


        .btn-primary {

            background:
                var(--primary);

            color:
                white;
        }


        .btn-primary:hover {

            background:
                var(--primary-dark);

            transform:
                translateY(-1px);
        }


        .btn-outline {

            background:
                transparent;

            border:
                1px solid var(--border);

            color:
                var(--text);
        }


        .btn-outline:hover {

            background:
                var(--primary-light);

            color:
                var(--primary);
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {

            background:
                var(--hero);

            padding:
                75px 5% 70px;

            transition:
                background 0.3s ease;
        }


        .hero-container {

            max-width:
                1200px;

            margin:
                auto;
        }


        .hero-badge {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                7px;

            background:
                var(--primary-light);

            color:
                var(--primary);

            padding:
                8px 14px;

            border-radius:
                20px;

            font-size:
                13px;

            font-weight:
                700;

            margin-bottom:
                20px;
        }


        .hero h1 {

            margin:
                0;

            max-width:
                850px;

            font-size:
                clamp(42px, 6vw, 70px);

            line-height:
                1.05;

            color:
                var(--text);

            letter-spacing:
                -2px;
        }


        .hero-description {

            max-width:
                800px;

            margin-top:
                25px;

            font-size:
                18px;

            line-height:
                1.7;

            color:
                var(--text-secondary);
        }


        /* =====================================================
           SECTION
        ===================================================== */

        .section {

            padding:
                70px 5%;

            background:
                var(--bg-section);

            transition:
                background 0.3s ease;
        }


        .section-container {

            max-width:
                1200px;

            margin:
                auto;
        }


        .section-header {

            display:
                flex;

            align-items:
                center;

            justify-content:
                space-between;

            gap:
                20px;

            margin-bottom:
                30px;
        }


        .section-title {

            margin:
                0;

            font-size:
                30px;

            color:
                var(--text);
        }


        .section-link {

            color:
                var(--primary);

            text-decoration:
                none;

            font-weight:
                700;

            font-size:
                14px;
        }


        /* =====================================================
           JOB GRID
        ===================================================== */

        .job-grid {

            display:
                grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap:
                22px;
        }


        .job-card {

            background:
                var(--bg-card);

            border:
                1px solid var(--border);

            border-radius:
                18px;

            padding:
                25px;

            box-shadow:
                var(--shadow);

            transition:
                all 0.3s ease;
        }


        .job-card:hover {

            transform:
                translateY(-4px);
        }


        .job-badge {

            display:
                inline-block;

            padding:
                7px 11px;

            border-radius:
                8px;

            background:
                var(--primary-light);

            color:
                var(--primary);

            font-size:
                11px;

            font-weight:
                700;
        }


        .job-card h3 {

            margin:
                18px 0 8px;

            color:
                var(--text);

            font-size:
                22px;
        }


        .company {

            color:
                var(--text-secondary);

            font-size:
                14px;
        }


        .location {

            margin-top:
                15px;

            color:
                var(--text-muted);

            font-size:
                13px;
        }


        .job-info {

            display:
                flex;

            justify-content:
                space-between;

            margin-top:
                22px;

            padding-top:
                15px;

            border-top:
                1px solid var(--border);

            font-size:
                12px;

            color:
                var(--text-muted);
        }


        /* =====================================================
           AI SECTION
        ===================================================== */

        .ai-section {

            padding:
                70px 5%;

            background:
                var(--bg);
        }


        .ai-box {

            max-width:
                1200px;

            margin:
                auto;

            padding:
                55px 30px;

            border-radius:
                25px;

            text-align:
                center;

            background:
                linear-gradient(
                    135deg,
                    #173d91,
                    #25205f
                );

            color:
                white;

            box-shadow:
                var(--shadow);
        }


        .ai-box h2 {

            margin:
                15px 0;

            font-size:
                32px;

            color:
                white;
        }


        .ai-box p {

            max-width:
                700px;

            margin:
                0 auto 25px;

            line-height:
                1.6;

            color:
                #dbeafe;
        }


        /* =====================================================
           PENGUMUMAN
        ===================================================== */

        .announcement-grid {

            display:
                grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap:
                20px;
        }


        .announcement {

            background:
                var(--bg-card);

            border:
                1px solid var(--border);

            border-radius:
                16px;

            padding:
                22px;

            transition:
                0.3s ease;
        }


        .announcement h3 {

            color:
                var(--text);

            margin:
                15px 0 10px;

            font-size:
                18px;
        }


        .announcement p {

            color:
                var(--text-secondary);

            font-size:
                14px;

            line-height:
                1.6;
        }


        /* =====================================================
           STATISTIK
        ===================================================== */

        .stats {

            padding:
                60px 5%;

            background:
                var(--bg);
        }


        .stats-container {

            max-width:
                1200px;

            margin:
                auto;

            display:
                grid;

            grid-template-columns:
                repeat(4, 1fr);

            background:
                var(--bg-card);

            border:
                1px solid var(--border);

            border-radius:
                18px;

            overflow:
                hidden;

            box-shadow:
                var(--shadow);
        }


        .stat {

            text-align:
                center;

            padding:
                35px 20px;

            border-right:
                1px solid var(--border);
        }


        .stat:last-child {

            border-right:
                none;
        }


        .stat-number {

            font-size:
                38px;

            font-weight:
                800;

            color:
                var(--text);
        }


        .stat-label {

            margin-top:
                8px;

            color:
                var(--primary);

            font-size:
                12px;

            font-weight:
                700;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {

            background:
                var(--footer);

            color:
                var(--footer-text);

            padding:
                45px 5%;

            transition:
                background 0.3s ease;
        }


        .footer-container {

            max-width:
                1200px;

            margin:
                auto;

            display:
                flex;

            justify-content:
                space-between;

            gap:
                30px;
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

            display:
                flex;

            gap:
                20px;

            align-items:
                center;
        }


        .footer-links a {

            color:
                #d1d5db;

            text-decoration:
                none;

            font-size:
                13px;
        }


        .footer-links a:hover {

            color:
                white;
        }


        /* =====================================================
           TABLET
        ===================================================== */

        @media (max-width: 1100px) {

            .navbar {

                flex-wrap:
                    wrap;

                padding:
                    14px 4%;
            }


            .navbar-center {

                order:
                    3;

                width:
                    100%;

                flex-basis:
                    100%;

                justify-content:
                    center;
            }


            .nav-menu {

                width:
                    100%;

                justify-content:
                    center;
            }

        }


        /* =====================================================
           TABLET KECIL
        ===================================================== */

        @media (max-width: 900px) {

            .navbar {

                padding:
                    14px 5%;
            }


            .nav-menu {

                overflow-x:
                    auto;

                justify-content:
                    flex-start;

                width:
                    100%;

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


            .dropdown-menu {

                width:
                    210px;
            }


            .job-grid {

                grid-template-columns:
                    1fr 1fr;
            }


            .announcement-grid {

                grid-template-columns:
                    1fr 1fr;
            }


            .stats-container {

                grid-template-columns:
                    1fr 1fr;
            }


            .stat:nth-child(2) {

                border-right:
                    none;
            }


            .stat {

                border-bottom:
                    1px solid var(--border);
            }


            .footer-container {

                flex-direction:
                    column;
            }

        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 600px) {

            .navbar {

                padding:
                    12px 20px;

                gap:
                    8px;
            }


            .logo-area img {

                height:
                    42px;

                max-width:
                    200px;
            }


            .navbar-center {

                width:
                    100%;

                align-items:
                    stretch;
            }


            .nav-menu {

                width:
                    100%;

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
                    11px;

                padding:
                    9px 9px;
            }


            /* =============================================
               DROPDOWN MOBILE
            ============================================== */

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


            /* =============================================
               SUBMENU MOBILE
            ============================================== */

            .submenu {

                position:
                    static;

                width:
                    100%;

                border-top:
                    1px solid var(--border);

                border-left:
                    3px solid #e31837;

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

                margin:
                    0;
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


            .hero {

                padding:
                    50px 20px;
            }


            .hero h1 {

                font-size:
                    42px;

                letter-spacing:
                    -1px;
            }


            .hero-description {

                font-size:
                    15px;
            }


            .job-grid {

                grid-template-columns:
                    1fr;
            }


            .announcement-grid {

                grid-template-columns:
                    1fr;
            }


            .stats-container {

                grid-template-columns:
                    1fr;
            }


            .stat {

                border-right:
                    none !important;
            }


            .section-header {

                flex-direction:
                    column;

                align-items:
                    flex-start;
            }


            .footer-links {

                flex-wrap:
                    wrap;
            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<header class="navbar">


    <!-- =================================================
         LOGO
    ================================================== -->

    <a
        href="{{ url('/') }}"
        class="logo-area"
    >

        <img
            src="https://disnaker.tasikmalayakota.go.id/front/img/logo.png"
            alt="Logo Disnaker Tasikmalaya"
        >

    </a>


    <!-- =================================================
         MENU
    ================================================== -->

    <div class="navbar-center">


        <nav class="nav-menu">


            <!-- =========================================
                 BERANDA
            ========================================== -->

            <div class="nav-item">

                <a
                    href="{{ url('/') }}"
                    class="nav-link"
                >

                    Beranda

                </a>

            </div>


            <!-- =========================================
                 PROFIL
            ========================================== -->

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


                    <!-- PEJABAT STRUKTURAL -->

                    <a href="#">
                        Pejabat Struktural
                    </a>


                </div>

            </div>


            <!-- =========================================
                 DATA
            ========================================== -->

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


                    <!-- DATA KETENAGAKERJAAN -->

                    <a href="#">
                        Data Ketenagakerjaan
                    </a>


                    <!-- TRANSMIGRASI -->

                    <a href="#">
                        Transmigrasi
                    </a>


                    <!-- =================================
                         BKK
                    ================================== -->

                    <div class="dropdown-parent">

                        <span>
                            BKK (Bursa Kerja Khusus)
                        </span>

                        <span class="submenu-arrow">
                            ‹
                        </span>


                        <!-- SUBMENU BKK -->

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


                    <!-- LPPTKS & P3MI -->

                    <a href="#">
                        LPPTKS &amp; P3MI
                    </a>


                    <!-- HUBUNGAN INDUSTRIAL -->

                    <a href="#">
                        Hubungan Industrial
                    </a>


                    <!-- IKM -->

                    <a href="#">
                        IKM
                    </a>


                    <!-- MAKLUMAT PELAYANAN -->

                    <a href="#">
                        Maklumat Pelayanan
                    </a>


                </div>

            </div>


            <!-- =========================================
                 PPID
            ========================================== -->

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


                    <!-- PPID UTAMA -->

<a
    href="https://ppid.tasikmalayakota.go.id/"
    target="_blank"
    rel="noopener noreferrer"
>
    PPID Utama
</a>

                    <!-- FORMULIR PERMOHONAN -->

                    <a href="#">
                        Formulir Permohonan Informasi
                    </a>


                    <!-- =================================
                         INFORMASI SETIAP SAAT
                    ================================== -->

                    <div class="dropdown-parent">

                        <span>
                            Informasi Setiap Saat
                        </span>

                        <span class="submenu-arrow">
                            ‹
                        </span>


                        <!-- SUBMENU TAHUN -->

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


                    <!-- INFORMASI PUBLIK -->

                    <a href="#">
                        Informasi Publik
                    </a>


                    <!-- INFORMASI SERTA MERTA -->

                    <a href="#">
                        Informasi Serta Merta
                    </a>


                </div>

            </div>


            <!-- =========================================
                 SP4N-LAPOR
            ========================================== -->

            <div class="nav-item">

<a
    href="https://www.lapor.go.id/"
    class="nav-link"
    target="_blank"
    rel="noopener noreferrer"
>
    SP4N-LAPOR!
</a>

            </div>


        </nav>

    </div>


    <!-- =================================================
         MASUK
    ================================================== -->

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

<section class="hero">

    <div class="hero-container">


        <div class="hero-badge">

            ● PORTAL RESMI PEMKOT TASIKMALAYA

        </div>


        <h1>

            Sampurasun, Warga Tasikmalaya!

        </h1>


        <p class="hero-description">

            Pusat pelayanan terintegrasi pencarian kerja resmi,
            pendaftaran Kartu Kuning (AK-1), pendaftaran uji
            sertifikasi kejuruan BLK, serta bursa lowongan
            terverifikasi di wilayah Priangan Timur.

        </p>

    </div>

</section>


<!-- =====================================================
     LOWONGAN
===================================================== -->

<section class="section">

    <div class="section-container">


        <div class="section-header">

            <h2 class="section-title">

                Spotlight Lowongan
                Kemitraan Resmi

            </h2>


            <a
                href="{{ url('/lowongan') }}"
                class="section-link"
            >

                Lihat Semua →

            </a>

        </div>


        <div class="job-grid">


            <!-- JOB 1 -->

            <div class="job-card">

                <span class="job-badge">

                    ✓ TERVERIFIKASI DISNAKER

                </span>


                <h3>

                    PRAMUNIAGA / SPG

                </h3>


                <div class="company">

                    Plaza Asia Kota Tasikmalaya

                </div>


                <div class="location">

                    📍 Kota Tasikmalaya

                </div>


                <div class="job-info">

                    <span>

                        Dibuat<br>

                        <strong>
                            1 September 2026
                        </strong>

                    </span>


                    <span>

                        Berlaku sampai<br>

                        <strong>
                            30 September 2026
                        </strong>

                    </span>

                </div>


                <a
                    href="{{ url('/lowongan/1') }}"
                    class="btn btn-primary"
                    style="margin-top:20px;"
                >

                    Lihat Detail

                </a>

            </div>


            <!-- JOB 2 -->

            <div class="job-card">

                <span class="job-badge">

                    LOWONGAN KERJA RESMI

                </span>


                <h3>

                    Operator Jahit

                </h3>


                <div class="company">

                    Mitra Industri Tasikmalaya

                </div>


                <div class="location">

                    📍 Kawalu, Tasikmalaya

                </div>


                <div class="job-info">

                    <span>

                        Dibuat<br>

                        <strong>
                            3 September 2026
                        </strong>

                    </span>


                    <span>

                        Masih Buka

                    </span>

                </div>


                <a
                    href="{{ url('/lowongan/2') }}"
                    class="btn btn-primary"
                    style="margin-top:20px;"
                >

                    Lihat Detail

                </a>

            </div>


            <!-- JOB 3 -->

            <div class="job-card">

                <span class="job-badge">

                    LOWONGAN KERJA RESMI

                </span>


                <h3>

                    Teknisi Otomotif

                </h3>


                <div class="company">

                    Bengkel Mitra Disnaker

                </div>


                <div class="location">

                    📍 Tasikmalaya

                </div>


                <div class="job-info">

                    <span>

                        Dibuat<br>

                        <strong>
                            5 September 2026
                        </strong>

                    </span>


                    <span>

                        Masih Buka

                    </span>

                </div>


                <a
                    href="{{ url('/lowongan/3') }}"
                    class="btn btn-primary"
                    style="margin-top:20px;"
                >

                    Lihat Detail

                </a>

            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     AI JOB MATCHER
===================================================== -->

<section class="ai-section">

    <div class="ai-box">


        <div>

            ✨ AI Job Matcher Disnaker

        </div>


        <h2>

            Temukan Lowongan
            yang Sesuai untuk Anda

        </h2>


        <p>

            Cari pekerjaan yang paling cocok
            berdasarkan profil, pendidikan,
            keterampilan, pengalaman,
            dan preferensi Anda.

        </p>


        <a
            href="{{ url('/lowongan') }}"
            class="btn"
            style="
                background:#ef4444;
                color:white;
            "
        >

            ▶ MULAI PENCOCOKAN AI

        </a>


    </div>

</section>


<!-- =====================================================
     PENGUMUMAN
===================================================== -->

<section class="section">

    <div class="section-container">


        <div class="section-header">

            <h2 class="section-title">

                Pengumuman &amp;
                Pemberitahuan Resmi

            </h2>


            <a
                href="#"
                class="section-link"
            >

                Lihat Arsip Pengumuman →

            </a>

        </div>


        <div class="announcement-grid">


            <!-- PENGUMUMAN 1 -->

            <article class="announcement">

                <span class="job-badge">

                    REGULASI &amp; K3

                </span>


                <h3>

                    Bulan Keselamatan dan
                    Kesehatan Kerja

                </h3>


                <p>

                    Pemberitahuan kepada seluruh
                    perusahaan agar memperhatikan
                    keselamatan dan kesehatan kerja.

                </p>

            </article>


            <!-- PENGUMUMAN 2 -->

            <article class="announcement">

                <span class="job-badge">

                    PELATIHAN BLK

                </span>


                <h3>

                    Pendaftaran Program Pelatihan

                </h3>


                <p>

                    Informasi program pelatihan
                    kejuruan bagi masyarakat
                    Kota Tasikmalaya.

                </p>

            </article>


            <!-- PENGUMUMAN 3 -->

            <article class="announcement">

                <span class="job-badge">

                    JAMINAN SOSIAL

                </span>


                <h3>

                    Sosialisasi Jaminan
                    Ketenagakerjaan

                </h3>


                <p>

                    Informasi mengenai jaminan
                    sosial ketenagakerjaan bagi pekerja.

                </p>

            </article>


        </div>

    </div>

</section>


<!-- =====================================================
     STATISTIK
===================================================== -->

<section class="stats">

    <div class="stats-container">


        <!-- STATISTIK 1 -->

        <div class="stat">

            <div class="stat-number">

                14.280

            </div>


            <div class="stat-label">

                KARTU AK-1 TERBIT

            </div>

        </div>


        <!-- STATISTIK 2 -->

        <div class="stat">

            <div class="stat-number">

                312

            </div>


            <div class="stat-label">

                PERUSAHAAN MITRA RESMI

            </div>

        </div>


        <!-- STATISTIK 3 -->

        <div class="stat">

            <div class="stat-number">

                88,4%

            </div>


            <div class="stat-label">

                LULUSAN BLK TERSERAP

            </div>

        </div>


        <!-- STATISTIK 4 -->

        <div class="stat">

            <div class="stat-number">

                1.490

            </div>


            <div class="stat-label">

                LOKER TERVERIFIKASI AKTIF

            </div>

        </div>


    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <div class="footer-container">


        <!-- FOOTER BRAND -->

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


        <!-- FOOTER LINKS -->

        <div class="footer-links">


            <a href="{{ url('/tentang') }}">

                Tentang

            </a>


            <a href="{{ url('/lowongan') }}">

                Lowongan

            </a>


            <a href="{{ url('/login') }}">

                Login

            </a>


            <a href="#">

                Kebijakan Privasi

            </a>


        </div>


    </div>

</footer>


<!-- =====================================================
     JAVASCRIPT TEMA
===================================================== -->

<script>

    /*
    |--------------------------------------------------------------------------
    | CEK TEMA TERSIMPAN
    |--------------------------------------------------------------------------
    */

    const temaTersimpan =
        localStorage.getItem('tema');


    /*
    |--------------------------------------------------------------------------
    | TERAPKAN DARK MODE
    |--------------------------------------------------------------------------
    */

    if (
        temaTersimpan === 'dark'
    ) {

        document.body.classList.add('dark');

    }

</script>


</body>

</html>