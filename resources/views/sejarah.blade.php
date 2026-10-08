<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sejarah Dinas Tenaga Kerja Kota Tasikmalaya">

    <title>
        Sejarah - Disnaker Kota Tasikmalaya
    </title>

    <style>

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
                240px;

            background:
                var(--surface);

            border:
                1px solid var(--border);

            border-top:
                4px solid var(--accent);

            box-shadow:
                var(--shadow-lg);

            opacity:
                0;

            visibility:
                hidden;

            pointer-events:
                none;

            transition:
                .2s ease;

            z-index:
                1200;
        }


        .nav-item:hover >
        .dropdown-menu {

            opacity:
                1;

            visibility:
                visible;

            pointer-events:
                auto;

            transform:
                translateX(-50%)
                translateY(0);
        }


        .dropdown-menu > a,
        .dropdown-parent {

            position:
                relative;

            display:
                flex;

            align-items:
                center;

            justify-content:
                space-between;

            width:
                100%;

            min-height:
                46px;

            padding:
                11px 16px;

            border-bottom:
                1px solid var(--border);

            text-decoration:
                none;

            color:
                var(--text-soft);

            font-size:
                13px;

            background:
                var(--surface);

            transition:
                .2s ease;

            cursor:
                pointer;
        }


        .dropdown-menu > a:hover,
        .dropdown-parent:hover {

            color:
                var(--accent);

            background:
                var(--surface-soft);
        }


        .submenu-arrow {

            font-size:
                17px;

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

            position:
                absolute;

            top:
                -4px;

            right:
                100%;

            width:
                215px;

            background:
                var(--surface);

            border:
                1px solid var(--border);

            border-top:
                4px solid var(--accent);

            box-shadow:
                var(--shadow-lg);

            opacity:
                0;

            visibility:
                hidden;

            pointer-events:
                none;

            transform:
                translateX(8px);

            transition:
                .2s ease;
        }


        .dropdown-parent:hover >
        .submenu {

            opacity:
                1;

            visibility:
                visible;

            pointer-events:
                auto;

            transform:
                translateX(0);
        }


        .submenu a {

            display:
                flex;

            align-items:
                center;

            justify-content:
                flex-end;

            min-height:
                46px;

            padding:
                11px 18px;

            border-bottom:
                1px solid var(--border);

            color:
                var(--text-soft);

            text-decoration:
                none;

            font-size:
                13px;

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

            display:
                flex;

            align-items:
                center;

            flex-shrink:
                0;
        }


        .login-link {

            color:
                var(--text-soft);

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
        }


        .login-link:hover {

            color:
                var(--primary);
        }


        /* =====================================================
           HERO SEJARAH
        ===================================================== */

        .page-hero {

            position:
                relative;

            overflow:
                hidden;

            background:
                radial-gradient(
                    circle at 85% 15%,
                    rgba(21,94,239,.10),
                    transparent 25%
                ),

                linear-gradient(
                    135deg,
                    #f7fbff 0%,
                    #edf5ff 100%
                );

            padding:
                72px 5% 56px;

            border-bottom:
                1px solid var(--border);
        }


        body.dark .page-hero {

            background:
                radial-gradient(
                    circle at 85% 15%,
                    rgba(79,140,255,.16),
                    transparent 25%
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

            margin:
                auto;
        }


        .breadcrumb {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                8px;

            color:
                var(--text-muted);

            font-size:
                12px;

            margin-bottom:
                18px;
        }


        .breadcrumb a {

            text-decoration:
                none;
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

            display:
                grid;

            grid-template-columns:
                1.35fr .65fr;

            gap:
                35px;

            align-items:
                center;
        }


        .hero-kicker {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                8px;

            padding:
                8px 13px;

            border-radius:
                999px;

            background:
                var(--surface-blue);

            color:
                var(--primary);

            font-size:
                12px;

            font-weight:
                700;

            margin-bottom:
                18px;
        }


        .hero-title {

            margin:
                0;

            font-size:
                clamp(38px, 5vw, 62px);

            line-height:
                1.04;

            letter-spacing:
                -1.8px;

            color:
                var(--text);
        }


        .hero-title span {

            color:
                var(--primary);
        }


        .hero-description {

            max-width:
                820px;

            margin:
                20px 0 0;

            font-size:
                17px;

            line-height:
                1.75;

            color:
                var(--text-soft);
        }


        .hero-side {

            display:
                flex;

            justify-content:
                flex-end;
        }


        .year-card {

            width:
                100%;

            max-width:
                320px;

            background:
                rgba(255,255,255,.80);

            border:
                1px solid var(--border);

            border-radius:
                24px;

            padding:
                28px;

            box-shadow:
                var(--shadow-lg);

            backdrop-filter:
                blur(8px);
        }


        body.dark .year-card {

            background:
                rgba(17,24,39,.82);
        }


        .year-card small {

            display:
                block;

            color:
                var(--text-muted);

            font-size:
                11px;

            text-transform:
                uppercase;

            letter-spacing:
                .8px;

            margin-bottom:
                7px;
        }


        .year-card strong {

            display:
                block;

            font-size:
                48px;

            line-height:
                1;

            color:
                var(--primary);

            margin-bottom:
                12px;
        }


        .year-card p {

            margin:
                0;

            color:
                var(--text-soft);

            font-size:
                12px;

            line-height:
                1.6;
        }


        /* =====================================================
           SEJARAH
        ===================================================== */

        .history-section {

            padding:
                68px 5%;

            background:
                var(--bg);
        }


        .history-container {

            max-width:
                1200px;

            margin:
                auto;
        }


        .section-label {

            color:
                var(--primary);

            font-weight:
                700;

            font-size:
                12px;

            text-transform:
                uppercase;

            letter-spacing:
                .7px;

            margin-bottom:
                8px;
        }


        .section-heading {

            margin:
                0 0 10px;

            font-size:
                31px;

            color:
                var(--text);
        }


        .section-intro {

            max-width:
                790px;

            color:
                var(--text-soft);

            line-height:
                1.7;

            font-size:
                14px;

            margin-bottom:
                32px;
        }


        /* =====================================================
           CARD UTAMA SEJARAH
        ===================================================== */

        .history-card {

            display:
                grid;

            grid-template-columns:
                185px 1fr;

            background:
                var(--surface);

            border:
                1px solid var(--border);

            border-radius:
                24px;

            box-shadow:
                var(--shadow-lg);

            overflow:
                hidden;
        }


        .history-marker {

            position:
                relative;

            display:
                flex;

            flex-direction:
                column;

            align-items:
                center;

            justify-content:
                center;

            padding:
                35px 20px;

            color:
                var(--white);

            background:
                linear-gradient(
                    160deg,
                    #0b45a7 0%,
                    #155eef 100%
                );

            overflow:
                hidden;
        }


        .history-marker::before,
        .history-marker::after {

            content:
                "";

            position:
                absolute;

            border:
                1px solid rgba(255,255,255,.16);

            border-radius:
                50%;
        }


        .history-marker::before {

            width:
                170px;

            height:
                170px;

            top:
                -85px;

            left:
                -80px;
        }


        .history-marker::after {

            width:
                125px;

            height:
                125px;

            bottom:
                -68px;

            right:
                -55px;
        }


        .marker-year {

            position:
                relative;

            z-index:
                2;

            font-size:
                46px;

            font-weight:
                800;

            line-height:
                1;
        }


        .marker-label {

            position:
                relative;

            z-index:
                2;

            font-size:
                11px;

            opacity:
                .92;

            margin-top:
                9px;

            text-align:
                center;

            line-height:
                1.5;
        }


        .history-content {

            padding:
                34px;
        }


        .history-title-row {

            display:
                flex;

            align-items:
                flex-start;

            justify-content:
                space-between;

            gap:
                18px;

            margin-bottom:
                20px;
        }


        .history-title-row h2 {

            margin:
                0;

            color:
                var(--text);

            font-size:
                24px;
        }


        .status-pill {

            flex-shrink:
                0;

            display:
                inline-flex;

            align-items:
                center;

            gap:
                6px;

            background:
                #e7fbf2;

            color:
                #087b58;

            border-radius:
                999px;

            padding:
                7px 10px;

            font-size:
                10px;

            font-weight:
                700;
        }


        body.dark .status-pill {

            background:
                #123329;

            color:
                #5ee4b0;
        }


        .history-text {

            color:
                var(--text-soft);

            font-size:
                15px;

            line-height:
                1.85;

            margin:
                0 0 24px;
        }


        /* =====================================================
           DASAR HUKUM
        ===================================================== */

        .legal-grid {

            display:
                grid;

            grid-template-columns:
                1fr 1fr;

            gap:
                12px;
        }


        .legal-card {

            background:
                var(--surface-soft);

            border:
                1px solid var(--border);

            border-radius:
                14px;

            padding:
                17px;
        }


        .legal-card small {

            display:
                block;

            color:
                var(--text-muted);

            text-transform:
                uppercase;

            letter-spacing:
                .4px;

            font-size:
                9px;

            margin-bottom:
                7px;
        }


        .legal-card strong {

            display:
                block;

            color:
                var(--text);

            font-size:
                12px;

            line-height:
                1.6;
        }


        .legal-card .code {

            color:
                var(--primary);

            font-size:
                17px;

            margin-bottom:
                3px;
        }


        /* =====================================================
           TIMELINE
        ===================================================== */

        .timeline-section {

            margin-top:
                28px;

            display:
                grid;

            grid-template-columns:
                1fr 1fr;

            gap:
                16px;
        }


        .timeline-card {

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
        }


        .timeline-top {

            display:
                flex;

            align-items:
                center;

            gap:
                12px;

            margin-bottom:
                15px;
        }


        .timeline-icon {

            width:
                42px;

            height:
                42px;

            border-radius:
                12px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            background:
                var(--surface-blue);

            color:
                var(--primary);

            font-weight:
                800;
        }


        .timeline-year {

            color:
                var(--primary);

            font-size:
                11px;

            font-weight:
                700;
        }


        .timeline-card h3 {

            margin:
                2px 0 0;

            font-size:
                16px;

            color:
                var(--text);
        }


        .timeline-card p {

            margin:
                0;

            color:
                var(--text-soft);

            font-size:
                13px;

            line-height:
                1.7;
        }


        /* =====================================================
           INFO BOX
        ===================================================== */

        .quote-box {

            margin-top:
                16px;

            padding:
                20px 22px;

            background:
                linear-gradient(
                    135deg,
                    var(--navy),
                    #144c86
                );

            color:
                white;

            border-radius:
                20px;

            box-shadow:
                var(--shadow-sm);
        }


        .quote-box strong {

            display:
                block;

            font-size:
                13px;

            margin-bottom:
                7px;
        }


        .quote-box p {

            margin:
                0;

            color:
                #dbeafe;

            font-size:
                12px;

            line-height:
                1.7;
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

            align-items:
                center;

            gap:
                20px;

            flex-wrap:
                wrap;
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
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1000px) {

            .navbar {

                flex-wrap:
                    wrap;
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


            .hero-grid {

                grid-template-columns:
                    1fr;
            }


            .hero-side {

                justify-content:
                    flex-start;
            }


            .year-card {

                max-width:
                    360px;
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


            .history-card {

                grid-template-columns:
                    1fr;
            }


            .history-marker {

                min-height:
                    170px;

                flex-direction:
                    row;

                gap:
                    12px;
            }


            .legal-grid,
            .timeline-section {

                grid-template-columns:
                    1fr;
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


            .page-hero,
            .history-section {

                padding-left:
                    20px;

                padding-right:
                    20px;
            }


            .hero-title {

                font-size:
                    41px;
            }


            .hero-description {

                font-size:
                    15px;
            }


            .history-content {

                padding:
                    24px;
            }


            .history-title-row {

                flex-direction:
                    column;
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


                    <!-- BKK -->

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


                    <!-- INFORMASI SETIAP SAAT -->

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

            <span>
                Profil
            </span>

            <span>›</span>

            <strong>
                Sejarah
            </strong>

        </div>


        <div class="hero-grid">


            <div>


                <div class="hero-kicker">

                    ● PROFIL DISNAKER
                    KOTA TASIKMALAYA

                </div>


                <h1 class="hero-title">

                    Sejarah

                    <span>
                        Dinas Tenaga Kerja
                    </span>

                </h1>


                <p class="hero-description">

                    Informasi mengenai dasar pembentukan
                    Dinas Tenaga Kerja Kota Tasikmalaya
                    serta landasan peraturan yang menjadi
                    dasar pelaksanaan tugas dan fungsi
                    organisasi.

                </p>


            </div>


            <div class="hero-side">


                <div class="year-card">

                    <small>
                        Dasar Pembentukan
                    </small>


                    <strong>
                        2016
                    </strong>


                    <p>

                        Dinas Tenaga Kerja Kota Tasikmalaya
                        dibentuk berdasarkan Peraturan Daerah
                        Kota Tasikmalaya Nomor 7 Tahun 2016.

                    </p>

                </div>


            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     ISI SEJARAH
===================================================== -->

<section class="history-section">


    <div class="history-container">


        <div class="section-label">

            Sejarah Kelembagaan

        </div>


        <h2 class="section-heading">

            Dasar Pembentukan dan
            Landasan Organisasi

        </h2>


        <p class="section-intro">

            Informasi berikut menjelaskan dasar
            pembentukan Dinas Tenaga Kerja Kota
            Tasikmalaya dan peraturan yang menjabarkan
            tugas pokok serta fungsi unit organisasi.

        </p>


        <!-- KARTU UTAMA -->

        <div class="history-card">


            <!-- TAHUN -->

            <div class="history-marker">

                <div class="marker-year">

                    2016

                </div>


                <div class="marker-label">

                    Tahun Pembentukan

                    <br>

                    Dinas Tenaga Kerja

                </div>

            </div>


            <!-- ISI -->

            <div class="history-content">


                <div class="history-title-row">


                    <div>

                        <h2>

                            Pembentukan Dinas Tenaga Kerja
                            Kota Tasikmalaya

                        </h2>

                    </div>


                    <div class="status-pill">

                        ● Landasan Resmi

                    </div>


                </div>


                <p class="history-text">

                    Dinas Tenaga Kerja Kota Tasikmalaya
                    dibentuk berdasarkan Peraturan Daerah
                    Kota Tasikmalaya Nomor 7 Tahun 2016
                    tentang Pembentukan dan Susunan
                    Perangkat Daerah.

                    <br><br>

                    Peraturan Daerah tersebut, kemudian
                    dijabarkan oleh Peraturan Walikota
                    Tasikmalaya Nomor 61 Tahun 2016 tentang
                    Tugas Pokok, Fungsi dan Rincian Tugas
                    Unit Dinas Tenaga Kerja Kota Tasikmalaya.

                </p>


                <!-- DASAR HUKUM -->

                <div class="legal-grid">


                    <div class="legal-card">

                        <small>
                            Dasar Hukum 01
                        </small>


                        <strong class="code">

                            Perda No. 7 Tahun 2016

                        </strong>


                        <strong>

                            Pembentukan dan Susunan
                            Perangkat Daerah.

                        </strong>

                    </div>


                    <div class="legal-card">

                        <small>
                            Dasar Hukum 02
                        </small>


                        <strong class="code">

                            Perwal No. 61 Tahun 2016

                        </strong>


                        <strong>

                            Tugas Pokok, Fungsi dan
                            Rincian Tugas Unit Dinas
                            Tenaga Kerja Kota Tasikmalaya.

                        </strong>

                    </div>


                </div>


            </div>


        </div>


        <!-- TIMELINE -->

        <div class="timeline-section">


            <!-- 2016 -->

            <article class="timeline-card">


                <div class="timeline-top">


                    <div class="timeline-icon">

                        01

                    </div>


                    <div>

                        <div class="timeline-year">

                            2016

                        </div>


                        <h3>

                            Dasar Pembentukan

                        </h3>

                    </div>


                </div>


                <p>

                    Pembentukan Dinas Tenaga Kerja
                    ditetapkan melalui Peraturan Daerah
                    Kota Tasikmalaya Nomor 7 Tahun 2016
                    tentang Pembentukan dan Susunan
                    Perangkat Daerah.

                </p>


            </article>


            <!-- PENJABARAN -->

            <article class="timeline-card">


                <div class="timeline-top">


                    <div class="timeline-icon">

                        02

                    </div>


                    <div>

                        <div class="timeline-year">

                            2016

                        </div>


                        <h3>

                            Penjabaran Tugas dan Fungsi

                        </h3>

                    </div>


                </div>


                <p>

                    Peraturan Daerah tersebut kemudian
                    dijabarkan melalui Peraturan Walikota
                    Tasikmalaya Nomor 61 Tahun 2016 tentang
                    Tugas Pokok, Fungsi dan Rincian Tugas
                    Unit Dinas Tenaga Kerja Kota Tasikmalaya.

                </p>


            </article>


        </div>


        <!-- KOTAK INFO -->

        <div class="quote-box">


            <strong>

                Landasan Kelembagaan

            </strong>


            <p>

                Pembentukan organisasi dan pelaksanaan
                tugas Dinas Tenaga Kerja Kota Tasikmalaya
                memiliki landasan melalui Peraturan Daerah
                Kota Tasikmalaya Nomor 7 Tahun 2016 dan
                Peraturan Walikota Tasikmalaya Nomor 61
                Tahun 2016.

            </p>


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