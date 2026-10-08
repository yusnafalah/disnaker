<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Lowongan Saya - Disnaker Kota Tasikmalaya
    </title>


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


        .sidebar:hover {
            width: 255px;
        }


        /* LOGO */

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
        }


        .logo-text span {

            display: block;

            font-size: 12px;

            margin-top: 3px;

            opacity: 0.9;
        }


        /* PORTAL */

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


        /* MENU */

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

            background:
                rgba(255,255,255,0.12);
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


        /* BOTTOM */

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

            background:
                rgba(255,255,255,0.08);
        }


        .logout-text {

            opacity: 0;

            transition: opacity 0.2s ease;
        }


        .sidebar:hover .logout-text {
            opacity: 1;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {

            margin-left: 88px;

            min-height: 100vh;

            transition: margin-left 0.3s ease;
        }


        .sidebar:hover ~ .main {

            margin-left: 255px;
        }


        /* TOPBAR */

        .topbar {

            height: 74px;

            background: white;

            border-bottom:
                1px solid #e5e9f2;

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
           CONTENT
        ===================================================== */

        .content {

            padding: 30px 35px;
        }


        /* STATISTIK */

        .stats {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;

            margin-bottom: 28px;
        }


        .stat-card {

            background: white;

            border-radius: 12px;

            padding: 22px;

            border:
                1px solid #e8ebf2;

            box-shadow:
                0 5px 15px rgba(27,48,87,0.03);
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
           LOWONGAN
        ===================================================== */

        .job-container {

            background: white;

            border-radius: 15px;

            border:
                1px solid #e6eaf2;

            padding: 30px;
        }


        .page-heading {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 25px;
        }


        .page-heading h1 {

            font-size: 32px;

            color: #0b45a7;

            margin-bottom: 8px;
        }


        .page-heading p {

            color: #70798d;

            font-size: 13px;

            line-height: 1.6;

            max-width: 650px;
        }


        .new-job {

            background: #0847b8;

            color: white;

            padding: 13px 20px;

            border-radius: 9px;

            text-decoration: none;

            font-weight: bold;

            font-size: 13px;

            white-space: nowrap;
        }


        /* SEARCH */

        .search-area {

            background: #f6f8fd;

            padding: 15px;

            border-radius: 10px;

            display: flex;

            gap: 12px;

            margin-bottom: 18px;
        }


        .search {

            flex: 1;

            height: 42px;

            border: 1px solid #e0e5ef;

            background: white;

            border-radius: 8px;

            padding: 0 15px;

            outline: none;

            font-size: 12px;
        }


        .sort {

            width: 170px;

            border: 1px solid #e0e5ef;

            background: white;

            border-radius: 8px;

            padding: 0 12px;

            color: #626c7d;
        }


        /* FILTER */

        .filters {

            display: flex;

            gap: 8px;

            margin-bottom: 22px;

            flex-wrap: wrap;
        }


        .filter {

            padding: 9px 14px;

            border-radius: 8px;

            background: #f0f3fa;

            color: #47536a;

            font-size: 12px;

            border: 1px solid #e4e8f1;
        }


        .filter.active {

            background: #0847b8;

            color: white;

            border-color: #0847b8;
        }


        /* JOB CARD */

        .job-card {

            border: 1px solid #e4e8f1;

            border-radius: 13px;

            padding: 23px;

            margin-bottom: 16px;

            display: flex;

            align-items: flex-start;

            justify-content: space-between;

            gap: 20px;

            transition: 0.2s;
        }


        .job-card:hover {

            box-shadow:
                0 8px 25px rgba(20,50,100,0.06);
        }


        .job-left {

            display: flex;

            gap: 17px;

            flex: 1;
        }


        .job-icon {

            width: 45px;

            height: 45px;

            border-radius: 10px;

            background: #dcfff0;

            color: #008b5b;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 20px;

            flex-shrink: 0;
        }


        .job-code {

            display: inline-block;

            font-size: 10px;

            color: #61708a;

            background: #eef2fa;

            padding: 5px 8px;

            border-radius: 6px;

            margin-right: 5px;
        }


        .status {

            display: inline-block;

            font-size: 10px;

            padding: 5px 8px;

            border-radius: 20px;

            background: #dcfff0;

            color: #008b5b;
        }


        .job-title {

            font-size: 19px;

            margin: 10px 0;

            color: #101b35;
        }


        .job-info {

            display: flex;

            flex-wrap: wrap;

            gap: 15px;

            color: #6f788b;

            font-size: 11px;
        }


        .job-right {

            min-width: 150px;

            background: #f5f7fd;

            padding: 17px;

            border-radius: 10px;

            text-align: center;
        }


        .job-right small {

            color: #737d90;

            font-size: 10px;
        }


        .applicant-number {

            font-size: 27px;

            font-weight: bold;

            color: #0847b8;

            margin: 5px 0;
        }


        .applicant-link {

            color: #0847b8;

            font-size: 11px;

            text-decoration: underline;
        }


        .job-actions {

            display: flex;

            gap: 7px;

            margin-top: 18px;

            flex-wrap: wrap;
        }


        .action {

            border: none;

            background: #f0f3fa;

            color: #19366e;

            padding: 8px 12px;

            border-radius: 7px;

            font-size: 10px;

            cursor: pointer;
        }


        .action.edit {

            background: #e7edff;

            color: #0847b8;
        }


        .action.close {

            background: #fff1dc;

            color: #a45d00;
        }


        .action.delete {

            background: #ffe8e8;

            color: #d32e2e;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media(max-width: 1000px) {

            .stats {

                grid-template-columns:
                    repeat(2, 1fr);
            }


            .job-card {

                flex-direction: column;
            }


            .job-right {

                width: 100%;
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


            .content {

                padding: 20px;
            }


            .stats {

                grid-template-columns: 1fr;
            }


            .page-heading {

                flex-direction: column;

                align-items: flex-start;

                gap: 15px;
            }


            .search-area {

                flex-direction: column;
            }


            .sort {

                width: 100%;

                height: 42px;
            }


            .top-right .legal,
            .company-name {

                display: none;
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

            <strong>
                DISNAKER
            </strong>

            <span>
                KOTA TASIKMALAYA
            </span>

        </div>


    </div>


    <div class="portal-label">

        • PORTAL MITRA PERUSAHAAN

    </div>


    <nav class="menu">


        <a href="{{ url('/dashboard-perusahaan') }}">

            <span class="menu-icon">
                ⌂
            </span>

            <span class="menu-text">
                Dashboard
            </span>

        </a>


        <a href="{{ url('/lowongan-saya') }}"
           class="active">

            <span class="menu-icon">
                ▱
            </span>

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


        <!-- PERBAIKAN:
             Profil Perusahaan sekarang menuju halaman profil -->
        <a href="{{ url('/profil-perusahaan') }}">

            <span class="menu-icon">
                ▣
            </span>

            <span class="menu-text">
                Profil Perusahaan
            </span>

        </a>


<a href="{{ url('/pengaturan-akun') }}">
    <span class="menu-icon">
        ⚙
    </span>

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

            ›

            <strong>
                Lowongan Saya
            </strong>

        </div>


        <div class="top-right">


            <div class="legal">

                ● Legalitas PT Terverifikasi

            </div>


            <a href="#"
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


        <!-- LOWONGAN -->

        <div class="job-container">


            <div class="page-heading">


                <div>

                    <h1>
                        Manajemen Lowongan Saya
                    </h1>

                    <p>

                        Kelola lowongan pekerjaan, pantau proses kurasi
                        verifikator Disnaker Kota Tasikmalaya, dan kelola
                        pelamar terdaftar Kartu Kuning AK-1.

                    </p>

                </div>


                <a href="#"
                   class="new-job">

                    + Tambah Lowongan Baru

                </a>


            </div>


            <!-- SEARCH -->

            <div class="search-area">


                <input
                    type="text"
                    class="search"
                    placeholder="Cari judul lowongan, kode loker (e.g. LKR-2024-001), atau kualifikasi..."
                >


                <select class="sort">

                    <option>
                        Terbaru Diperbarui
                    </option>

                    <option>
                        Terlama
                    </option>

                    <option>
                        Nama A-Z
                    </option>

                </select>


            </div>


            <!-- FILTER -->

            <div class="filters">


                <div class="filter active">
                    Semua Lowongan 12
                </div>


                <div class="filter">
                    Draft 2
                </div>


                <div class="filter">
                    • Menunggu Persetujuan 2
                </div>


                <div class="filter">
                    • Disetujui / Aktif 7
                </div>


                <div class="filter">
                    • Ditolak / Perlu Revisi 1
                </div>


            </div>


            <!-- JOB 1 -->

            <div class="job-card">


                <div class="job-left">


                    <div class="job-icon">
                        ♙
                    </div>


                    <div>


                        <span class="job-code">
                            LKR-2024-TSM-088
                        </span>


                        <span class="status">
                            • Disetujui & Aktif di Hayu Gawe
                        </span>


                        <h2 class="job-title">
                            Operator Sewing & Finishing Garment
                        </h2>


                        <div class="job-info">


                            <span>
                                ◉ Penempatan:
                                Kec. Cibeureum,
                                Kota Tasikmalaya
                            </span>


                            <span>
                                ◉ Gaji:
                                Sesuai UMK + Insentif Shift
                            </span>


                            <span>
                                ◉ Batas Akhir:
                                30 November 2026
                            </span>


                            <span>
                                ◉ Kualifikasi:
                                SMK Tata Busana / BLK Menjahit
                            </span>


                        </div>


                        <div class="job-actions">


                            <button class="action">
                                Duplikasi
                            </button>


                            <button class="action">
                                Lihat Detail / Status
                            </button>


                            <button class="action edit">
                                Edit Lowongan
                            </button>


                            <button class="action close">
                                Tutup Lowongan
                            </button>


                            <button class="action delete">
                                Hapus
                            </button>


                        </div>


                    </div>


                </div>


                <div class="job-right">


                    <small>
                        Pelamar AK-1
                        <br>
                        Terverifikasi
                    </small>


                    <div class="applicant-number">
                        64
                    </div>


                    <small>
                        Pelamar
                    </small>


                    <br><br>


                    <a href="#"
                       class="applicant-link">

                        Buka Berkas Pelamar →

                    </a>


                </div>


            </div>


            <!-- JOB 2 -->

            <div class="job-card">


                <div class="job-left">


                    <div class="job-icon"
                         style="background:#fff0d9;color:#a15c00">

                        ⚙

                    </div>


                    <div>


                        <span class="job-code">
                            LKR-2024-TSM-094
                        </span>


                        <span
                            class="status"
                            style="background:#fff0d9;color:#a15c00">

                            • Menunggu Persetujuan Disnaker

                        </span>


                        <h2 class="job-title">
                            Teknisi Pemeliharaan Mesin Bordir Digital
                        </h2>


                        <div class="job-info">


                            <span>
                                ◉ Penempatan:
                                Kec. Kawalu,
                                Kota Tasikmalaya
                            </span>


                            <span>
                                ◉ Gaji:
                                Rp 2.800.000 - Rp 3.400.000
                            </span>


                            <span>
                                ◉ Diajukan:
                                Hari Ini, 09:15 WIB
                            </span>


                            <span>
                                ◉ Kualifikasi:
                                D3/SMK Teknik Mekatronika
                            </span>


                        </div>


                        <div class="job-actions">


                            <button class="action">
                                Duplikasi
                            </button>


                            <button class="action">
                                Lihat Detail / Status
                            </button>


                            <button class="action edit">
                                Edit Lowongan
                            </button>


                            <button class="action delete">
                                Hapus
                            </button>


                        </div>


                    </div>


                </div>


                <div class="job-right">


                    <small>
                        Tahapan Kurasi
                    </small>


                    <div class="applicant-number">
                        2
                    </div>


                    <small>
                        Sedang diverifikasi
                    </small>


                </div>


            </div>


            <!-- JOB 3 -->

            <div class="job-card">


                <div class="job-left">


                    <div class="job-icon"
                         style="background:#eef0ff;color:#2947b8">

                        ▣

                    </div>


                    <div>


                        <span class="job-code">
                            DRAFT-IFD-021
                        </span>


                        <span
                            class="status"
                            style="background:#eef0ff;color:#2947b8">

                            • Draft

                        </span>


                        <h2 class="job-title">
                            Supervisor Quality Control (QC) Tekstil
                        </h2>


                        <div class="job-info">


                            <span>
                                ◉ Penempatan:
                                Kec. Mangkubumi,
                                Kota Tasikmalaya
                            </span>


                            <span>
                                ◉ Status:
                                Penuh Waktu
                            </span>


                            <span>
                                ◉ Penyuntingan terakhir:
                                Kemarin, 16:40 WIB
                            </span>


                        </div>


                        <div class="job-actions">


                            <button class="action">
                                Duplikasi
                            </button>


                            <button class="action edit">
                                Lanjutkan Edit
                            </button>


                            <button class="action">
                                Ajukan ke Disnaker
                            </button>


                            <button class="action delete">
                                Hapus Lowongan
                            </button>


                        </div>


                    </div>


                </div>


                <div class="job-right">


                    <small>
                        Status Siap
                    </small>


                    <div class="applicant-number">
                        4 / 5
                    </div>


                    <small>
                        Tahap
                    </small>


                </div>


            </div>


            <!-- JOB 4 -->

            <div class="job-card">


                <div class="job-left">


                    <div class="job-icon"
                         style="background:#ffe6e6;color:#d52e2e">

                        ⚠

                    </div>


                    <div>


                        <span class="job-code">
                            LKR-2024-TSM-072
                        </span>


                        <span
                            class="status"
                            style="background:#ffe6e6;color:#d52e2e">

                            • Ditolak / Perlu Revisi

                        </span>


                        <h2 class="job-title">
                            Admin Gudang & Logistik Shift Malam
                        </h2>


                        <div class="job-info">


                            <span>
                                ◉ Penempatan:
                                Kec. Purbaratu,
                                Kota Tasikmalaya
                            </span>


                            <span>
                                ◉ Shift:
                                Pukul 22.00 - 06.00 WIB
                            </span>


                            <span>
                                ◉ Gaji:
                                Rp 2.200.000
                            </span>


                        </div>


                        <div class="job-actions">


                            <button class="action">
                                Duplikasi
                            </button>


                            <button class="action">
                                Lihat Detail / Status
                            </button>


                            <button class="action edit">
                                Edit & Perbaiki Lowongan
                            </button>


                            <button class="action delete">
                                Hapus Lowongan
                            </button>


                        </div>


                    </div>


                </div>


                <div class="job-right">


                    <small style="color:#d52e2e">
                        Tindakan Diperlukan
                    </small>


                    <div class="applicant-number"
                         style="color:#d52e2e">

                        Revisi

                    </div>


                    <small>
                        Batas waktu revisi
                    </small>


                </div>


            </div>


        </div>


    </section>


</main>


</body>

</html>