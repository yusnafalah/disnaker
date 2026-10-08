<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Perusahaan - Disnaker Tasikmalaya</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f6f7ff;
            color: #17213a;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 82px;
            height: 100vh;
            background: #176bc1;
            color: white;
            z-index: 1000;
            overflow: hidden;
            transition: width .28s ease;
            border-radius: 0 0 55px 0;
        }

        .sidebar:hover {
            width: 250px;
        }

        .sidebar-inner {
            width: 250px;
            height: 100%;
            padding: 26px 12px;
            display: flex;
            flex-direction: column;
        }

        /* LOGO */

        .logo-area {
            height: 72px;
            display: flex;
            align-items: center;
            gap: 14px;
            padding-left: 7px;
            margin-bottom: 12px;
            white-space: nowrap;
        }

        .logo-box {
            width: 48px;
            height: 48px;
            flex: 0 0 48px;
            border: 1px solid rgba(255,255,255,.7);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
            font-weight: 800;
        }

        .logo-text {
            opacity: 0;
            transition: opacity .2s ease;
        }

        .sidebar:hover .logo-text {
            opacity: 1;
        }

        .logo-title {
            font-size: 17px;
            font-weight: 800;
        }

        .logo-subtitle {
            font-size: 10px;
            margin-top: 3px;
            opacity: .85;
        }

        /* BADGE */

        .portal-badge {
            height: 31px;
            border-radius: 20px;
            background: rgba(255,255,255,.16);
            display: flex;
            align-items: center;
            gap: 7px;
            padding: 0 12px;
            margin: 4px 4px 22px;
            width: max-content;
            white-space: nowrap;
        }

        .portal-dot {
            width: 7px;
            height: 7px;
            background: #36e49a;
            border-radius: 50%;
        }

        .portal-text {
            font-size: 10px;
            font-weight: 700;
            opacity: 0;
            transition: opacity .2s ease;
        }

        .sidebar:hover .portal-text {
            opacity: 1;
        }

        /* MENU */

        .menu {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .menu a {
            width: 226px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 0 15px;
            color: rgba(255,255,255,.95);
            font-size: 14px;
            white-space: nowrap;
            transition: .2s ease;
        }

        .menu a:hover {
            background: rgba(0,0,0,.14);
        }

        .menu a.active {
            background: #0d4f99;
            box-shadow: inset 4px 0 0 white;
            font-weight: 700;
        }

        .menu-icon {
            width: 22px;
            min-width: 22px;
            text-align: center;
            font-size: 17px;
        }

        .menu-label {
            opacity: 0;
            transition: opacity .2s ease;
        }

        .sidebar:hover .menu-label {
            opacity: 1;
        }

        /* BOTTOM */

        .sidebar-bottom {
            margin-top: auto;
        }

        .help-box {
            width: 226px;
            padding: 15px;
            border-radius: 12px;
            background: rgba(255,255,255,.10);
            margin-bottom: 9px;
            opacity: 0;
            transition: opacity .2s ease;
        }

        .sidebar:hover .help-box {
            opacity: 1;
        }

        .help-title {
            font-size: 11px;
            color: #b9ffd9;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .help-text {
            font-size: 11px;
            line-height: 1.5;
        }

        .logout {
            width: 226px;
            height: 43px;
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 0 15px;
            color: #ffdddd;
            font-size: 13px;
            white-space: nowrap;
        }

        .logout .menu-label {
            color: #ffdddd;
        }

        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            margin-left: 82px;
            min-height: 100vh;
            transition: margin-left .28s ease;
        }

        /* =====================================================
           HEADER
        ===================================================== */

        .topbar {
            height: 76px;
            background: white;
            border-bottom: 1px solid #e5e9f4;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 9px;
            font-size: 13px;
            color: #7b8497;
        }

        .breadcrumb strong {
            color: #142a62;
        }

        .top-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .verified {
            background: #e9fff5;
            color: #08764c;
            padding: 8px 13px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
        }

        .company-user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #0d3fa7;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
        }

        .user-name {
            font-size: 13px;
            font-weight: 700;
        }

        .user-location {
            font-size: 10px;
            color: #7b8497;
            margin-top: 3px;
        }

        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            padding: 28px;
            max-width: 1500px;
            margin: auto;
        }

        /* HERO */

        .hero {
            background: white;
            border-radius: 18px;
            padding: 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            box-shadow: 0 3px 14px rgba(27,52,100,.05);
            margin-bottom: 18px;
        }

        .hero-left {
            display: flex;
            align-items: flex-start;
            gap: 17px;
        }

        .hero-icon {
            width: 58px;
            height: 58px;
            border-radius: 13px;
            background: #e5edff;
            color: #0645b8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            flex-shrink: 0;
        }

        .status-row {
            display: flex;
            gap: 8px;
            margin-bottom: 8px;
            flex-wrap: wrap;
        }

        .status {
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 700;
        }

        .status.green {
            background: #dcfff0;
            color: #08764c;
        }

        .status.blue {
            background: #e7edff;
            color: #2449a4;
        }

        .hero h1 {
            font-size: 27px;
            color: #06369b;
            margin-bottom: 7px;
        }

        .hero p {
            color: #626b7d;
            font-size: 13px;
            line-height: 1.55;
            max-width: 700px;
        }

        .hero-buttons {
            display: flex;
            gap: 9px;
            flex-wrap: wrap;
        }

        .btn {
            border: 0;
            border-radius: 9px;
            padding: 11px 17px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
        }

        .btn-light {
            background: #e8eeff;
            color: #1746a2;
        }

        .btn-primary {
            background: #073da6;
            color: white;
        }

        /* TABS */

        .tabs {
            display: flex;
            gap: 4px;
            background: #eef1ff;
            width: max-content;
            border-radius: 11px;
            padding: 5px;
            margin-bottom: 20px;
        }

        .tab {
            padding: 11px 18px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 700;
            color: #596277;
        }

        .tab.active {
            background: white;
            color: #1141a2;
            box-shadow: 0 2px 6px rgba(0,0,0,.05);
        }

        /* GRID */

        .grid {
            display: grid;
            grid-template-columns: minmax(0, 1.65fr) minmax(280px, .75fr);
            gap: 18px;
        }

        .card {
            background: white;
            border-radius: 17px;
            padding: 22px;
            box-shadow: 0 3px 14px rgba(27,52,100,.045);
        }

        .card-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            border-bottom: 1px solid #edf0f7;
            padding-bottom: 15px;
            margin-bottom: 17px;
        }

        .card-title h2 {
            font-size: 16px;
            color: #13285b;
        }

        .card-title span {
            font-size: 10px;
            color: #6d7485;
        }

        /* COMPANY INFO */

        .verified-company {
            color: #078052;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 14px;
        }

        .company-name {
            font-size: 21px;
            color: #16203a;
            margin-bottom: 8px;
        }

        .company-description {
            color: #6b7280;
            line-height: 1.6;
            font-size: 13px;
            margin-bottom: 18px;
        }

        .legal-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            background: #eef2ff;
            border-radius: 12px;
            overflow: hidden;
        }

        .legal-item {
            padding: 15px;
            border-right: 1px solid #dfe5f6;
        }

        .legal-item:last-child {
            border-right: none;
        }

        .legal-label {
            font-size: 9px;
            color: #687087;
            text-transform: uppercase;
            margin-bottom: 7px;
            font-weight: 700;
        }

        .legal-value {
            font-size: 16px;
            color: #073b9e;
            font-weight: 800;
        }

        .legal-sub {
            font-size: 10px;
            color: #0b8c5d;
            margin-top: 4px;
        }

        /* FORM */

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .form-group {
            margin-bottom: 2px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 7px;
            color: #27334f;
        }

        .required {
            color: #e33b3b;
        }

        .input {
            width: 100%;
            border: 1px solid #e0e5f1;
            background: #f1f4ff;
            border-radius: 9px;
            padding: 12px 13px;
            font-size: 12px;
            color: #26304a;
            outline: none;
        }

        textarea.input {
            min-height: 120px;
            resize: vertical;
            line-height: 1.6;
        }

        .input:focus {
            border-color: #2864d7;
            background: white;
        }

        /* FACILITY */

        .facility-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-top: 17px;
        }

        .facility {
            background: #eef2ff;
            border-radius: 11px;
            padding: 13px;
            color: #4d5870;
            font-size: 11px;
            line-height: 1.5;
        }

        .facility strong {
            display: block;
            color: #17449e;
            margin-bottom: 4px;
        }

        .integrity {
            background: #dcfff0;
            border-radius: 11px;
            padding: 15px;
            margin-top: 12px;
        }

        .integrity strong {
            color: #08764c;
            display: block;
            font-size: 12px;
            margin-bottom: 5px;
        }

        .integrity p {
            color: #37725c;
            font-size: 11px;
            line-height: 1.5;
        }

        /* RIGHT SIDE */

        .production-image {
            height: 170px;
            border-radius: 11px;
            background:
                linear-gradient(rgba(5,32,72,.15), rgba(5,32,72,.35)),
                url('https://images.unsplash.com/photo-1565793298595-6a879b1d9492?auto=format&fit=crop&w=900&q=80')
                center/cover;
            position: relative;
            overflow: hidden;
        }

        .production-image span {
            position: absolute;
            left: 13px;
            bottom: 12px;
            color: white;
            font-size: 11px;
            font-weight: 700;
        }

        .production-stat {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 14px;
        }

        .production-stat small {
            color: #6e7585;
            font-size: 10px;
        }

        .production-stat strong {
            display: block;
            font-size: 21px;
            color: #063da5;
            margin-top: 3px;
        }

        .documents {
            display: flex;
            flex-direction: column;
            gap: 9px;
        }

        .document {
            display: flex;
            align-items: center;
            gap: 10px;
            background: #eef2ff;
            padding: 11px;
            border-radius: 9px;
        }

        .document-icon {
            width: 31px;
            height: 31px;
            background: #dce5ff;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1748a7;
        }

        .document-info {
            flex: 1;
        }

        .document-info strong {
            display: block;
            font-size: 11px;
            color: #25304a;
        }

        .document-info span {
            font-size: 9px;
            color: #72798b;
        }

        .doc-status {
            color: #098257;
            font-size: 9px;
            font-weight: 700;
        }

        .upload {
            width: 100%;
            margin-top: 10px;
            padding: 12px;
            border: 0;
            border-radius: 9px;
            background: #e5ecff;
            color: #1745a3;
            font-weight: 700;
            cursor: pointer;
            font-size: 11px;
        }

        /* MAP */

        .map {
            height: 230px;
            border-radius: 11px;
            background:
                linear-gradient(rgba(210,225,211,.35), rgba(211,225,214,.35)),
                url('https://tile.openstreetmap.org/15/26855/16876.png');
            background-size: cover;
            position: relative;
            overflow: hidden;
        }

        .map-marker {
            position: absolute;
            left: 48%;
            top: 48%;
            width: 35px;
            height: 35px;
            background: #0a4bab;
            border: 4px solid white;
            border-radius: 50% 50% 50% 0;
            transform: rotate(-45deg);
            box-shadow: 0 3px 10px rgba(0,0,0,.25);
        }

        .map-marker::after {
            content: "";
            width: 9px;
            height: 9px;
            background: white;
            border-radius: 50%;
            position: absolute;
            left: 9px;
            top: 9px;
        }

        .map-label {
            position: absolute;
            left: 15px;
            bottom: 15px;
            background: white;
            padding: 8px 11px;
            border-radius: 7px;
            font-size: 10px;
            font-weight: 700;
            box-shadow: 0 2px 8px rgba(0,0,0,.12);
        }

        .map-description {
            color: #707789;
            font-size: 11px;
            line-height: 1.5;
            margin-top: 10px;
        }

        /* ACTION */

        .actions {
            display: flex;
            justify-content: flex-end;
            gap: 9px;
            margin-top: 20px;
        }

        /* RESPONSIVE */

        @media (max-width: 1000px) {
            .grid {
                grid-template-columns: 1fr;
            }

            .hero {
                flex-direction: column;
                align-items: flex-start;
            }

            .hero-buttons {
                width: 100%;
            }
        }

        @media (max-width: 700px) {
            .sidebar {
                width: 65px;
            }

            .sidebar:hover {
                width: 220px;
            }

            .main {
                margin-left: 65px;
            }

            .topbar {
                padding: 0 15px;
            }

            .breadcrumb {
                display: none;
            }

            .content {
                padding: 15px;
            }

            .hero h1 {
                font-size: 22px;
            }

            .legal-grid,
            .form-grid,
            .facility-grid {
                grid-template-columns: 1fr;
            }

            .legal-item {
                border-right: 0;
                border-bottom: 1px solid #dfe5f6;
            }

            .legal-item:last-child {
                border-bottom: 0;
            }

            .top-actions .verified {
                display: none;
            }

            .company-user .user-name,
            .company-user .user-location {
                display: none;
            }

            .tabs {
                width: 100%;
                overflow-x: auto;
            }

            .tab {
                white-space: nowrap;
            }
        }
    </style>
</head>

<body>

<!-- =========================================================
     SIDEBAR
========================================================= -->

<aside class="sidebar">

    <div class="sidebar-inner">

        <div class="logo-area">

            <div class="logo-box">
                DIS
            </div>

            <div class="logo-text">
                <div class="logo-title">
                    DISNAKER
                </div>

                <div class="logo-subtitle">
                    KOTA TASIKMALAYA
                </div>
            </div>

        </div>


        <div class="portal-badge">

            <span class="portal-dot"></span>

            <span class="portal-text">
                PORTAL MITRA PERUSAHAAN
            </span>

        </div>


        <nav class="menu">

            <a href="/dashboard-perusahaan">

                <span class="menu-icon">⌂</span>

                <span class="menu-label">
                    Dashboard
                </span>

            </a>


            <a href="/lowongan-saya">

                <span class="menu-icon">▱</span>

                <span class="menu-label">
                    Lowongan Saya
                </span>

            </a>


            <a href="/pelamar-masuk">

                <span class="menu-icon">♙</span>

                <span class="menu-label">
                    Pelamar Masuk
                </span>

            </a>


            <a href="/profil-perusahaan" class="active">

                <span class="menu-icon">▣</span>

                <span class="menu-label">
                    Profil Perusahaan
                </span>

            </a>


            <a href="/pengaturan-akun">

                <span class="menu-icon">⚙</span>

                <span class="menu-label">
                    Pengaturan Akun
                </span>

            </a>

        </nav>


        <div class="sidebar-bottom">

            <div class="help-box">

                <div class="help-title">
                    ● Kurasi Terverifikasi
                </div>

                <div class="help-text">
                    Disnaker Kota Tasikmalaya<br>
                    No. SK: WLTK/2024/091-TSM
                </div>

            </div>


            <div class="help-box">

                <div class="help-title">
                    ☎ Pusat Bantuan Disnaker
                </div>

                <div class="help-text">
                    <strong>0265-313997</strong>
                </div>

            </div>


            <a href="/logout" class="logout">

                <span class="menu-icon">
                    ↪
                </span>

                <span class="menu-label">
                    Keluar Portal
                </span>

            </a>

        </div>

    </div>

</aside>


<!-- =========================================================
     MAIN
========================================================= -->

<main class="main">


    <!-- HEADER -->

    <header class="topbar">

        <div class="breadcrumb">

            <span>
                Portal Mitra
            </span>

            <span>›</span>

            <strong>
                Profil Perusahaan
            </strong>

        </div>


        <div class="top-actions">

            <div class="verified">
                ● Legalitas PT Terverifikasi
            </div>


            <div class="company-user">

                <div class="avatar">
                    PS
                </div>

                <div>

                    <div class="user-name">
                        PT Sansan Saudaratex
                    </div>

                    <div class="user-location">
                        Kawasan Cikurubuk, TSM
                    </div>

                </div>

            </div>

        </div>

    </header>


    <!-- CONTENT -->

    <section class="content">


        <!-- HERO -->

        <div class="hero">

            <div class="hero-left">

                <div class="hero-icon">
                    ▣
                </div>


                <div>

                    <div class="status-row">

                        <span class="status green">
                            KEMITRAAN RESMI AKTIF
                        </span>

                        <span class="status blue">
                            SK: WLTK/2024/091-TSM
                        </span>

                    </div>


                    <h1>
                        Pengaturan & Profil Perusahaan Mitra Disnaker
                    </h1>


                    <p>
                        Tata kelola identitas resmi perusahaan, kepatuhan
                        WLKP, dan keamanan multi-akses portal mitra.
                    </p>

                </div>

            </div>


            <div class="hero-buttons">

                <button class="btn btn-light">
                    ♧ &nbsp; Unduh Bukti Mitra Resmi
                </button>

                <button class="btn btn-primary">
                    ↻ &nbsp; Sinkronisasi OSS RBA
                </button>

            </div>

        </div>


        <!-- TABS -->

        <div class="tabs">

            <div class="tab active">
                ▣ &nbsp; Profil Perusahaan
            </div>

            <div class="tab">
                ⚿ &nbsp; Pengaturan Akun & Keamanan
            </div>

        </div>


        <!-- GRID -->

        <div class="grid">


            <!-- LEFT -->

            <div>


                <!-- INFORMASI PERUSAHAAN -->

                <div class="card">

                    <div class="verified-company">
                        ● &nbsp; Akun Terverifikasi Dinas Tenaga Kerja Kota Tasikmalaya
                    </div>


                    <h2 class="company-name">
                        PT. Sansan Saudaratex Jaya (Unit Tasikmalaya)
                    </h2>


                    <p class="company-description">
                        Pabrik garment terpadu berorientasi ekspor.
                        Terintegrasi penuh dengan Sistem Informasi
                        Ketenagakerjaan Terpadu dan Layanan Antarkerja
                        Disnaker Tasikmalaya.
                    </p>


                    <div class="legal-grid">

                        <div class="legal-item">

                            <div class="legal-label">
                                Nomor Induk Berusaha (NIB)
                            </div>

                            <div class="legal-value">
                                8120002931844
                            </div>

                            <div class="legal-sub">
                                ● Terbit OSS RBA
                            </div>

                        </div>


                        <div class="legal-item">

                            <div class="legal-label">
                                Kode Registrasi WLKP
                            </div>

                            <div class="legal-value">
                                WLKP-3278-88492
                            </div>

                            <div class="legal-sub">
                                Berlaku s/d Des 2025
                            </div>

                        </div>


                        <div class="legal-item">

                            <div class="legal-label">
                                Klaster Industri KBLI
                            </div>

                            <div class="legal-value">
                                14111
                            </div>

                            <div class="legal-sub">
                                Industri Pakaian Jadi
                            </div>

                        </div>

                    </div>

                </div>


                <!-- DETAIL PROFIL -->

                <div class="card" style="margin-top:18px;">

                    <div class="card-title">

                        <h2>
                            ▤ &nbsp; Detail Profil & Kontak Perusahaan
                        </h2>

                        <span>
                            Terakhir diperbarui: 14 Okt 2024
                        </span>

                    </div>


                    <div class="form-grid">


                        <div class="form-group full">

                            <label>
                                Nama Resmi Entitas Perusahaan
                                <span class="required">*</span>
                            </label>

                            <input
                                class="input"
                                type="text"
                                value="PT. Sansan Saudaratex Jaya (Unit Tasikmalaya)"
                            >

                        </div>


                        <div class="form-group full">

                            <label>
                                Alamat Operasional Pabrik / Kantor
                                <span class="required">*</span>
                            </label>

                            <input
                                class="input"
                                type="text"
                                value="Jl. Letjen Mashudi No. 88, Karsamenak, Kec. Kawalu, Kota Tasikmalaya, Jawa Barat"
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                No. Telepon Pabrik
                            </label>

                            <input
                                class="input"
                                type="text"
                                value="(0265) 345890"
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                Hotline Khusus HR & Rekrutmen
                                <span class="required">*</span>
                            </label>

                            <input
                                class="input"
                                type="text"
                                value="0812-2345-6789"
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                Email Divisi HRD
                                <span class="required">*</span>
                            </label>

                            <input
                                class="input"
                                type="email"
                                value="hrd.tasik@sansan.co.id"
                            >

                        </div>


                        <div class="form-group">

                            <label>
                                Email Publikasi Rekrutmen
                            </label>

                            <input
                                class="input"
                                type="email"
                                value="recruitment.tasikmalaya@sansan.co.id"
                            >

                        </div>


                        <div class="form-group full">

                            <label>
                                Deskripsi Profil Bisnis & Sejarah Singkat di Tasikmalaya
                            </label>

                            <textarea class="input">Berdiri sejak ekspansi 2017 di kawasan Kawalu Kota Tasikmalaya, PT Sansan Saudaratex Jaya memproduksi pakaian jadi kualitas ekspor dunia. Berkomitmen memberdayakan tenaga kerja lokal wilayah Tasikmalaya dan Priangan Timur melalui program sertifikasi operator jahit berkala bersama Balai Latihan Kerja (BLK) Disnaker.</textarea>

                        </div>

                    </div>


                    <!-- FACILITY -->

                    <div class="facility-grid">

                        <div class="facility">

                            <strong>
                                ♧ &nbsp; Fasilitas Kerja Eksisting
                            </strong>

                            ✓ Poliklinik & Dokter Perusahaan Aktif<br>
                            ✓ Ruang Laktasi Ber-AC Sesuai Standar Kemnaker<br>
                            ✓ Kantin Bersubsidi Higienis & Musholla Luas<br>
                            ✓ Jaminan BPJS Ketenagakerjaan 4 Program Penuh

                        </div>


                        <div class="integrity">

                            <strong>
                                ✓ &nbsp; Pakta Integritas Rekrutmen 100% Gratis
                            </strong>

                            <p>
                                Perusahaan secara tertulis terikat komitmen
                                bebas pungli, tanpa uang titipan, dan bermitra
                                resmi dengan Disnaker Kota Tasikmalaya.
                            </p>

                        </div>

                    </div>


                    <!-- ACTION -->

                    <div class="actions">

                        <button class="btn btn-light">
                            Batal Perubahan
                        </button>

                        <button
                            class="btn btn-primary"
                            onclick="simpanProfil()"
                        >
                            ▣ &nbsp; Perbarui Profil Perusahaan
                        </button>

                    </div>

                </div>

            </div>


            <!-- RIGHT -->

            <div>


                <!-- PRODUKSI -->

                <div class="card">

                    <div class="card-title">

                        <h2>
                            ▣ &nbsp; Unit Produksi & Karyawan Lokal
                        </h2>

                        <span class="status green">
                            850 Tenaga Kerja
                        </span>

                    </div>


                    <div class="production-image">

                        <span>
                            Fasilitas Garment Cikurubuk - Unit Tasikmalaya
                        </span>

                    </div>


                    <div class="production-stat">

                        <div>

                            <small>
                                Penyerapan Naker Tasikmalaya
                            </small>

                            <strong>
                                96.4%
                            </strong>

                        </div>

                        <div>
                            ◯ &nbsp; Terdaftar AK-1
                        </div>

                    </div>

                </div>


                <!-- DOKUMEN -->

                <div class="card" style="margin-top:18px;">

                    <div class="card-title">

                        <h2>
                            ▣ &nbsp; Dokumen Legalitas Terunggah
                        </h2>

                        <span style="color:#098257;font-weight:700;">
                            4 Terverifikasi
                        </span>

                    </div>


                    <div class="documents">


                        <div class="document">

                            <div class="document-icon">
                                ▣
                            </div>

                            <div class="document-info">

                                <strong>
                                    NIB OSS RBA - 8120002931844
                                </strong>

                                <span>
                                    PDF • 2.4 MB
                                </span>

                            </div>

                            <span class="doc-status">
                                ✓
                            </span>

                        </div>


                        <div class="document">

                            <div class="document-icon">
                                ▣
                            </div>

                            <div class="document-info">

                                <strong>
                                    Tanda Daftar Perusahaan (TDP)
                                </strong>

                                <span>
                                    PDF • 1.8 MB
                                </span>

                            </div>

                            <span class="doc-status">
                                ✓
                            </span>

                        </div>


                        <div class="document">

                            <div class="document-icon">
                                ▣
                            </div>

                            <div class="document-info">

                                <strong>
                                    Surat Izin Domisili Usaha Kawalu
                                </strong>

                                <span>
                                    PDF • 890 KB
                                </span>

                            </div>

                            <span class="doc-status">
                                ✓
                            </span>

                        </div>


                        <div class="document">

                            <div class="document-icon">
                                ✓
                            </div>

                            <div class="document-info">

                                <strong>
                                    BPJS Ketenagakerjaan & Kesehatan
                                </strong>

                                <span>
                                    100% Pekerja Tercover
                                </span>

                            </div>

                            <span class="doc-status">
                                ✓
                            </span>

                        </div>

                    </div>


                    <button class="upload">
                        ☁ &nbsp; Unggah Dokumen Pembaruan
                    </button>

                </div>


                <!-- MAP -->

                <div class="card" style="margin-top:18px;">

                    <div class="card-title">

                        <h2>
                            ▣ &nbsp; Peta Lokasi Kantor / Pabrik
                        </h2>

                        <span>
                            Kecamatan Kawalu
                        </span>

                    </div>


                    <div class="map">

                        <div class="map-marker"></div>

                        <div class="map-label">
                            ● PT Sansan Saudaratex - Kawalu
                        </div>

                    </div>


                    <p class="map-description">
                        Koordinat tercatat di sistem peta lowongan
                        Disnaker Mobile Kota Tasikmalaya.
                    </p>

                </div>

            </div>

        </div>

    </section>

</main>


<script>

function simpanProfil() {

    alert(
        'Perubahan profil perusahaan berhasil disimpan sementara.'
    );

}

</script>

</body>
</html>