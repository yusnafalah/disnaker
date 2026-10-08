<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Perusahaan - Disnaker Kota Tasikmalaya</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f5f7fc;
            color: #17213c;
        }


        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;

            width: 88px;
            height: 100vh;

            background: #1468c4;

            padding: 28px 14px;

            overflow: hidden;

            z-index: 1000;

            transition: width 0.3s ease;

            border-bottom-right-radius: 95px;
        }


        /* SIDEBAR MEMBESAR SAAT CURSOR DIARAHKAN */

        .sidebar:hover {
            width: 255px;
        }


        /* =====================================================
           LOGO
        ===================================================== */

        .logo-area {
            display: flex;
            align-items: center;

            height: 70px;

            margin-bottom: 28px;

            padding-left: 5px;

            white-space: nowrap;
        }

        .logo-box {
            width: 48px;
            min-width: 48px;
            height: 48px;

            border: 1px solid rgba(255,255,255,0.7);

            border-radius: 12px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;

            font-size: 24px;

            background: rgba(255,255,255,0.08);
        }

        .logo-text {
            margin-left: 12px;

            color: white;

            opacity: 0;

            transition: opacity 0.2s ease;
        }

        .sidebar:hover .logo-text {
            opacity: 1;
        }

        .logo-text strong {
            display: block;

            font-size: 19px;

            letter-spacing: 0.3px;
        }

        .logo-text span {
            display: block;

            font-size: 12px;

            margin-top: 3px;

            opacity: 0.9;
        }


        /* =====================================================
           LABEL PORTAL
        ===================================================== */

        .portal-label {
            background: rgba(255,255,255,0.12);

            color: white;

            border-radius: 20px;

            padding: 7px 12px;

            font-size: 11px;

            white-space: nowrap;

            margin-bottom: 25px;

            opacity: 0;

            transition: opacity 0.2s ease;
        }

        .sidebar:hover .portal-label {
            opacity: 1;
        }


        /* =====================================================
           MENU
        ===================================================== */

        .menu {
            display: flex;

            flex-direction: column;

            gap: 8px;
        }

        .menu a {
            height: 52px;

            display: flex;

            align-items: center;

            text-decoration: none;

            color: white;

            border-radius: 12px;

            padding: 0 14px;

            white-space: nowrap;

            transition: 0.2s ease;
        }

        .menu a:hover {
            background: rgba(0,0,0,0.12);
        }


        /* MENU AKTIF */

        .menu a.active {
            background: #0d58a9;

            box-shadow:
                inset 3px 0 0 white,
                0 4px 10px rgba(0,0,0,0.08);
        }

        .menu-icon {
            min-width: 34px;

            width: 34px;

            height: 34px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 18px;

            border-radius: 10px;
        }

        .menu a.active .menu-icon {
            background: rgba(255,255,255,0.12);
        }

        .menu-text {
            margin-left: 10px;

            font-size: 14px;

            opacity: 0;

            transition: opacity 0.2s ease;
        }

        .sidebar:hover .menu-text {
            opacity: 1;
        }


        /* =====================================================
           BAGIAN BAWAH SIDEBAR
        ===================================================== */

        .sidebar-bottom {
            position: absolute;

            left: 14px;

            right: 14px;

            bottom: 32px;
        }

        .help-box {
            color: white;

            padding: 12px 10px;

            border-radius: 10px;

            margin-bottom: 10px;

            white-space: nowrap;

            opacity: 0;

            transition: opacity 0.2s ease;
        }

        .sidebar:hover .help-box {
            opacity: 1;
        }

        .help-box small {
            display: block;

            font-size: 11px;

            opacity: 0.8;
        }

        .help-box strong {
            font-size: 13px;
        }

        .logout {
            display: flex;

            align-items: center;

            gap: 12px;

            color: #ff4d5e;

            text-decoration: none;

            padding: 10px;

            white-space: nowrap;

            font-size: 13px;
        }

        .logout-icon {
            width: 28px;

            height: 28px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background: rgba(255,255,255,0.08);
        }

        .logout-text {
            opacity: 0;

            transition: opacity 0.2s ease;
        }

        .sidebar:hover .logout-text {
            opacity: 1;
        }


        /* =====================================================
           CONTENT
        ===================================================== */

        .main {
            margin-left: 88px;

            min-height: 100vh;

            transition: margin-left 0.3s ease;
        }

        .sidebar:hover ~ .main {
            margin-left: 255px;
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar {
            height: 74px;

            background: white;

            border-bottom: 1px solid #e5e9f2;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 32px;
        }

        .breadcrumb {
            font-size: 14px;

            color: #7b8497;
        }

        .breadcrumb strong {
            color: #14204b;
        }

        .top-right {
            display: flex;

            align-items: center;

            gap: 18px;
        }

        .legal {
            background: #eafff4;

            color: #06945b;

            padding: 9px 15px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: bold;
        }

        .add-job {
            background: #0847b8;

            color: white;

            padding: 12px 18px;

            border-radius: 9px;

            text-decoration: none;

            font-size: 13px;

            font-weight: bold;
        }

        .company {
            display: flex;

            align-items: center;

            gap: 10px;
        }

        .company-logo {
            width: 38px;

            height: 38px;

            border-radius: 50%;

            background: #073f9e;

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: bold;
        }

        .company-name strong {
            display: block;

            font-size: 13px;
        }

        .company-name span {
            display: block;

            font-size: 10px;

            color: #7c8492;

            margin-top: 3px;
        }


        /* =====================================================
           CONTENT WRAPPER
        ===================================================== */

        .content {
            padding: 30px 35px;
        }


        /* =====================================================
           STAT CARD
        ===================================================== */

        .stats {
            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 20px;

            margin-bottom: 28px;
        }

        .stat-card {
            background: white;

            border-radius: 12px;

            padding: 22px;

            border: 1px solid #e8ebf2;

            box-shadow: 0 5px 15px rgba(27,48,87,0.03);
        }

        .stat-title {
            color: #70798d;

            font-size: 12px;

            line-height: 1.5;

            text-transform: uppercase;
        }

        .stat-number {
            font-size: 30px;

            font-weight: bold;

            color: #0b45a7;

            margin-top: 7px;
        }

        .stat-description {
            color: #7b8497;

            font-size: 11px;

            margin-top: 5px;
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {
            background: white;

            border-radius: 15px;

            padding: 30px;

            border: 1px solid #e7eaf2;

            margin-bottom: 25px;
        }

        .hero-label {
            display: inline-block;

            background: #e7efff;

            color: #0954bd;

            border-radius: 20px;

            padding: 7px 12px;

            font-size: 11px;

            font-weight: bold;

            margin-bottom: 15px;
        }

        .hero h1 {
            color: #0b45a7;

            font-size: 32px;

            margin-bottom: 12px;
        }

        .hero p {
            color: #687286;

            font-size: 14px;

            line-height: 1.7;

            max-width: 650px;
        }

        .hero-button {
            display: inline-block;

            margin-top: 20px;

            background: #0847b8;

            color: white;

            padding: 13px 22px;

            border-radius: 9px;

            text-decoration: none;

            font-size: 13px;

            font-weight: bold;
        }


        /* =====================================================
           QUICK MENU
        ===================================================== */

        .section-title {
            font-size: 20px;

            color: #14204b;

            margin-bottom: 15px;
        }

        .quick-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;
        }

        .quick-card {
            background: white;

            border: 1px solid #e7eaf2;

            border-radius: 13px;

            padding: 22px;

            text-decoration: none;

            color: #17213c;

            transition: 0.2s;
        }

        .quick-card:hover {
            transform: translateY(-3px);

            box-shadow: 0 10px 25px rgba(0,0,0,0.06);
        }

        .quick-icon {
            width: 42px;

            height: 42px;

            background: #eaf1ff;

            color: #0755bd;

            border-radius: 10px;

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 14px;

            font-size: 20px;
        }

        .quick-card h3 {
            font-size: 15px;

            margin-bottom: 8px;
        }

        .quick-card p {
            color: #7b8497;

            font-size: 12px;

            line-height: 1.6;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media(max-width: 1000px) {

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .quick-grid {
                grid-template-columns: 1fr;
            }

        }

        @media(max-width: 700px) {

            .sidebar {
                width: 70px;
            }

            .sidebar:hover {
                width: 230px;
            }

            .main {
                margin-left: 70px;
            }

            .sidebar:hover ~ .main {
                margin-left: 70px;
            }

            .top-right .legal,
            .company-name {
                display: none;
            }

            .content {
                padding: 20px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>


<!-- =========================================================
     SIDEBAR
========================================================= -->

<aside class="sidebar">


    <div class="logo-area">

        <div class="logo-box">
            🏢
        </div>

        <div class="logo-text">

            <strong>DISNAKER</strong>

            <span>KOTA TASIKMALAYA</span>

        </div>

    </div>


    <div class="portal-label">
        • PORTAL MITRA PERUSAHAAN
    </div>


    <nav class="menu">


        <a href="{{ url('/dashboard-perusahaan') }}"
           class="active">

            <span class="menu-icon">⌂</span>

            <span class="menu-text">
                Dashboard
            </span>

        </a>


        <a href="{{ url('/lowongan-saya') }}">

            <span class="menu-icon">▱</span>

            <span class="menu-text">
                Lowongan Saya
            </span>

        </a>


<a href="{{ url('/pelamar-masuk') }}">

    <span class="menu-icon">
        ♙
    </span>

    <span class="menu-text">
        Pelamar Masuk
    </span>

</a>


        <!-- PROFIL PERUSAHAAN
             HANYA LINK YANG DIUBAH -->
        <a href="{{ url('/profil-perusahaan') }}">

            <span class="menu-icon">▣</span>

            <span class="menu-text">
                Profil Perusahaan
            </span>

        </a>


<a href="{{ url('/pengaturan-akun') }}">
    <span class="menu-icon">⚙</span>

    <span class="menu-text">
        Pengaturan Akun
    </span>
</a>

    </nav>


    <div class="sidebar-bottom">


        <div class="help-box">

            <small>
                ● Pusat Bantuan Disnaker
            </small>

            <strong>
                0265-313997
            </strong>

        </div>


        <a href="{{ url('/logout') }}"
           class="logout">

            <span class="logout-icon">
                ⇥
            </span>

            <span class="logout-text">
                Keluar Portal
            </span>

        </a>


    </div>

</aside>


<!-- =========================================================
     MAIN
========================================================= -->

<main class="main">


    <!-- TOPBAR -->

    <header class="topbar">


        <div class="breadcrumb">

            Portal Mitra

            <span>›</span>

            <strong>Dashboard Perusahaan</strong>

        </div>


        <div class="top-right">


            <div class="legal">
                ● Legalitas PT Terverifikasi
            </div>


            <a href="{{ url('/tambah-lowongan') }}"
               class="add-job">

                + Pasang Lowongan Baru

            </a>


            <div class="company">

                <div class="company-logo">
                    PS
                </div>

                <div class="company-name">

                    <strong>
                        PT Sansan Saudaratex
                    </strong>

                    <span>
                        Kawasan Cicurubuk, TSM
                    </span>

                </div>

            </div>


        </div>

    </header>


    <!-- CONTENT -->

    <section class="content">


        <!-- STATISTIK -->

        <div class="stats">


            <div class="stat-card">

                <div class="stat-title">

                    Total Lowongan

                    <br>

                    Terdaftar

                </div>

                <div class="stat-number">
                    12
                </div>

                <div class="stat-description">
                    Kuota Aktif Disnaker: 15 Posisi
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-title">

                    Tayang di

                    <br>

                    Hayu Gawe

                </div>

                <div class="stat-number"
                     style="color:#008a57">

                    7

                </div>

                <div class="stat-description">
                    ● Terverifikasi Resmi
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-title">

                    Proses Kurasi

                    <br>

                    Disnaker

                </div>

                <div class="stat-number"
                     style="color:#a15c00">

                    2

                </div>

                <div class="stat-description">
                    Loker Pengajuan
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-title">

                    Total Pelamar AK-1

                    <br>

                    Masuk

                </div>

                <div class="stat-number">
                    142
                </div>

                <div class="stat-description">
                    Kartu Kuning Valid Disnaker
                </div>

            </div>


        </div>


        <!-- HERO -->

        <div class="hero">


            <div class="hero-label">
                MODUL KETENAGAKERJAAN
            </div>


            <h1>
                Selamat Datang di Portal Perusahaan
            </h1>


            <p>

                Kelola lowongan pekerjaan, pantau proses kurasi
                verifikator Disnaker Kota Tasikmalaya, dan kelola
                pelamar terdaftar Kartu Kuning AK-1.

            </p>


            <a href="{{ url('/lowongan-saya') }}"
               class="hero-button">

                Kelola Lowongan Saya →

            </a>


        </div>


        <!-- MENU CEPAT -->

        <h2 class="section-title">
            Akses Cepat
        </h2>


        <div class="quick-grid">


            <a href="{{ url('/lowongan-saya') }}"
               class="quick-card">


                <div class="quick-icon">
                    ▱
                </div>


                <h3>
                    Lowongan Saya
                </h3>


                <p>

                    Kelola seluruh lowongan pekerjaan
                    yang telah dibuat perusahaan.

                </p>


            </a>


            <a href="#"
               class="quick-card">


                <div class="quick-icon">
                    ♙
                </div>


                <h3>
                    Pelamar Masuk
                </h3>


                <p>

                    Lihat dan kelola data pelamar
                    yang mendaftar ke perusahaan.

                </p>


            </a>


            <!-- PROFIL PERUSAHAAN
                 HANYA LINK YANG DIUBAH -->

            <a href="{{ url('/profil-perusahaan') }}"
               class="quick-card">


                <div class="quick-icon">
                    ▣
                </div>


                <h3>
                    Profil Perusahaan
                </h3>


                <p>

                    Kelola informasi dan identitas
                    perusahaan Anda.

                </p>


            </a>


        </div>


    </section>


</main>


</body>

</html>