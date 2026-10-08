<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Lowongan Baru - Disnaker Tasikmalaya</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --blue: #0756c9;
            --blue-dark: #0645a5;
            --blue-light: #eaf2ff;
            --blue-soft: #f3f7ff;
            --text: #10213f;
            --muted: #64748b;
            --border: #dbe4f2;
            --white: #ffffff;
            --danger: #dc2626;
            --success: #059669;
            --warning: #d97706;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: var(--text);
            min-height: 100vh;
        }

        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;

            width: 82px;

            background: linear-gradient(
                180deg,
                #1167c9 0%,
                #0756b8 100%
            );

            border-radius: 0 0 70px 0;

            z-index: 1000;

            transition: width .3s ease;

            overflow: hidden;

            box-shadow: 5px 0 20px rgba(0, 55, 130, .08);
        }

        .sidebar:hover {
            width: 245px;
        }

        .sidebar-inner {
            height: 100%;
            padding: 28px 12px 20px;

            display: flex;
            flex-direction: column;
        }

        .logo-area {
            height: 70px;

            display: flex;
            align-items: center;

            padding-left: 8px;

            margin-bottom: 28px;

            white-space: nowrap;
        }

        .logo-box {
            width: 48px;
            min-width: 48px;
            height: 48px;

            border: 1px solid rgba(255,255,255,.7);
            border-radius: 11px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;

            font-size: 18px;
            font-weight: 800;

            background: rgba(255,255,255,.08);
        }

        .logo-text {
            margin-left: 14px;

            color: white;

            opacity: 0;

            transition: opacity .2s ease;

            white-space: nowrap;
        }

        .sidebar:hover .logo-text {
            opacity: 1;
        }

        .logo-text strong {
            display: block;
            font-size: 15px;
            letter-spacing: .2px;
        }

        .logo-text span {
            display: block;
            font-size: 10px;
            margin-top: 3px;
            opacity: .85;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .menu a {
            height: 50px;

            display: flex;
            align-items: center;

            color: white;
            text-decoration: none;

            border-radius: 12px;

            padding-left: 16px;

            white-space: nowrap;

            transition: all .2s ease;
        }

        .menu a:hover {
            background: rgba(0,0,0,.16);
        }

        .menu a.active {
            background: #06479f;

            box-shadow:
                inset 4px 0 0 white,
                0 5px 12px rgba(0,0,0,.08);
        }

        .menu-icon {
            width: 36px;
            min-width: 36px;
            height: 36px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 17px;

            border-radius: 10px;
        }

        .menu a.active .menu-icon {
            background: rgba(255,255,255,.10);
        }

        .menu-text {
            margin-left: 10px;

            opacity: 0;

            transition: opacity .2s ease;

            font-size: 14px;
            font-weight: 600;
        }

        .sidebar:hover .menu-text {
            opacity: 1;
        }

        .sidebar-bottom {
            margin-top: auto;

            padding: 0 4px;
        }

        .help-box {
            padding: 14px;

            background: rgba(255,255,255,.08);

            border-radius: 12px;

            color: white;

            white-space: nowrap;

            opacity: 0;

            transition: opacity .2s ease;
        }

        .sidebar:hover .help-box {
            opacity: 1;
        }

        .help-box small {
            display: block;
            font-size: 10px;
            opacity: .8;
        }

        .help-box strong {
            display: block;
            margin-top: 4px;
            font-size: 13px;
        }

        .logout {
            margin-top: 10px;

            display: flex;
            align-items: center;

            height: 44px;

            padding-left: 14px;

            color: #fff;

            text-decoration: none;

            border-radius: 10px;

            white-space: nowrap;
        }

        .logout:hover {
            background: rgba(220,38,38,.18);
        }

        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            margin-left: 82px;

            min-height: 100vh;

            transition: margin-left .3s ease;
        }

        .sidebar:hover ~ .main {
            margin-left: 82px;
        }

        .topbar {
            height: 78px;

            background: white;

            border-bottom: 1px solid #e7edf6;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 34px;
        }

        .breadcrumb {
            color: #718096;
            font-size: 13px;
        }

        .breadcrumb strong {
            color: var(--text);
        }

        .company {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .verified {
            padding: 7px 13px;

            background: #ecfdf5;
            color: #047857;

            border-radius: 20px;

            font-size: 11px;
            font-weight: 700;
        }

        .avatar {
            width: 38px;
            height: 38px;

            border-radius: 50%;

            background: #0b4bb3;

            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-weight: 700;
        }

        .company-info strong {
            display: block;
            font-size: 13px;
        }

        .company-info span {
            font-size: 10px;
            color: var(--muted);
        }

        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            max-width: 1280px;

            margin: 0 auto;

            padding: 30px 34px 50px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;

            margin-bottom: 25px;
        }

        .page-header h1 {
            font-size: 30px;
            color: #092f78;
            margin-bottom: 8px;
        }

        .page-header p {
            max-width: 680px;

            color: var(--muted);

            font-size: 14px;
            line-height: 1.6;
        }

        .back-link {
            color: #174ea6;
            text-decoration: none;

            font-size: 13px;
            font-weight: 600;

            padding: 10px 15px;

            border: 1px solid var(--border);

            background: white;

            border-radius: 9px;
        }

        /* =====================================================
           STEPPER
        ===================================================== */

        .stepper {
            background: white;

            border: 1px solid #e2e8f2;

            border-radius: 15px;

            padding: 18px 20px;

            display: grid;
            grid-template-columns: repeat(5, 1fr);

            gap: 10px;

            margin-bottom: 22px;

            box-shadow: 0 4px 16px rgba(15, 42, 85, .04);
        }

        .step {
            display: flex;
            align-items: center;
            gap: 9px;

            padding: 10px 12px;

            border-radius: 9px;

            color: #7b8798;

            background: #f6f8fc;

            font-size: 11px;

            transition: .2s ease;
        }

        .step-number {
            width: 25px;
            height: 25px;

            min-width: 25px;

            border-radius: 50%;

            background: #e4eaf4;

            display: flex;
            align-items: center;
            justify-content: center;

            font-weight: 700;
        }

        .step.active {
            background: #e8f0ff;
            color: #0646a4;
        }

        .step.active .step-number {
            background: var(--blue);
            color: white;
        }

        .step.completed {
            background: #effaf5;
            color: #047857;
        }

        .step.completed .step-number {
            background: #10b981;
            color: white;
        }

        /* =====================================================
           FORM CARD
        ===================================================== */

        .form-card {
            background: white;

            border: 1px solid #e1e8f2;

            border-radius: 16px;

            padding: 30px;

            box-shadow: 0 6px 20px rgba(20, 50, 90, .05);

            min-height: 520px;
        }

        .step-content {
            display: none;
        }

        .step-content.active {
            display: block;
            animation: fadeIn .25s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-title {
            display: flex;
            align-items: center;

            gap: 12px;

            margin-bottom: 7px;
        }

        .section-number {
            width: 38px;
            height: 38px;

            border-radius: 10px;

            background: #e7efff;

            color: #0649a9;

            display: flex;
            align-items: center;
            justify-content: center;

            font-weight: 800;
        }

        .section-title h2 {
            font-size: 20px;
            color: #102b57;
        }

        .section-description {
            color: var(--muted);

            font-size: 13px;

            margin-bottom: 25px;
        }

        /* =====================================================
           FORM
        ===================================================== */

        .form-grid {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 20px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .full {
            grid-column: 1 / -1;
        }

        label {
            display: block;

            font-size: 13px;

            font-weight: 700;

            color: #142847;

            margin-bottom: 8px;
        }

        label span {
            color: var(--danger);
        }

        input,
        select,
        textarea {
            width: 100%;

            border: 1px solid #d8e2f0;

            background: #f8faff;

            color: #172b4d;

            border-radius: 8px;

            padding: 13px 14px;

            font-family: inherit;

            font-size: 13px;

            outline: none;

            transition: .2s ease;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #3777d7;

            background: white;

            box-shadow: 0 0 0 3px rgba(55,119,215,.10);
        }

        textarea {
            min-height: 110px;

            resize: vertical;

            line-height: 1.5;
        }

        .hint {
            font-size: 11px;

            color: #7c899c;

            margin-top: 6px;
        }

        /* =====================================================
           RADIO / CHECKBOX
        ===================================================== */

        .choice-group {
            display: flex;

            flex-wrap: wrap;

            gap: 9px;
        }

        .choice {
            position: relative;
        }

        .choice input {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .choice label {
            display: block;

            border: 1px solid #d7e1ef;

            background: #f8faff;

            border-radius: 8px;

            padding: 11px 15px;

            font-size: 12px;

            font-weight: 600;

            cursor: pointer;

            margin: 0;

            transition: .2s ease;
        }

        .choice input:checked + label {
            background: #e8f0ff;

            border-color: #2768ca;

            color: #0648a6;
        }

        .check-grid {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 10px;
        }

        .check-item {
            display: flex;

            align-items: center;

            gap: 10px;

            border: 1px solid #dce4f0;

            background: #f8faff;

            border-radius: 8px;

            padding: 12px;

            font-size: 12px;
        }

        .check-item input {
            width: 16px;
            height: 16px;
        }

        /* =====================================================
           INFO BOX
        ===================================================== */

        .info-box {
            background: #f0f6ff;

            border: 1px solid #d8e6ff;

            border-radius: 10px;

            padding: 14px 16px;

            margin-bottom: 20px;

            color: #31537e;

            font-size: 12px;

            line-height: 1.5;
        }

        .success-box {
            background: #effaf5;

            border-color: #ccefe0;

            color: #087052;
        }

        /* =====================================================
           UPLOAD
        ===================================================== */

        .upload-box {
            border: 1.5px dashed #b8cbe7;

            background: #f8faff;

            border-radius: 12px;

            min-height: 160px;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            text-align: center;

            cursor: pointer;

            transition: .2s ease;
        }

        .upload-box:hover {
            border-color: #3976d3;

            background: #f2f7ff;
        }

        .upload-icon {
            width: 44px;
            height: 44px;

            border-radius: 50%;

            background: #e5efff;

            color: #0756c9;

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 10px;

            font-size: 20px;
        }

        .upload-box strong {
            font-size: 13px;
            margin-bottom: 5px;
        }

        .upload-box span {
            font-size: 11px;
            color: var(--muted);
        }

        /* =====================================================
           PREVIEW
        ===================================================== */

        .preview-card {
            border: 1px solid #dce5f2;

            border-radius: 12px;

            overflow: hidden;

            margin-top: 20px;
        }

        .preview-header {
            background: #f3f7ff;

            padding: 17px 20px;

            border-bottom: 1px solid #dce5f2;
        }

        .preview-header small {
            display: block;

            color: #41618c;

            font-size: 10px;

            margin-bottom: 6px;
        }

        .preview-header h3 {
            font-size: 20px;

            color: #092f78;
        }

        .preview-body {
            padding: 20px;
        }

        .preview-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 12px;
        }

        .preview-item {
            padding: 12px;

            background: #f8faff;

            border-radius: 8px;
        }

        .preview-item small {
            display: block;

            color: #77859a;

            font-size: 10px;

            margin-bottom: 5px;
        }

        .preview-item strong {
            font-size: 12px;
        }

        /* =====================================================
           FOOTER BUTTON
        ===================================================== */

        .form-footer {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-top: 28px;

            padding-top: 20px;

            border-top: 1px solid #e7edf5;
        }

        .footer-left {
            display: flex;
            gap: 10px;
        }

        .btn {
            border: none;

            border-radius: 8px;

            padding: 12px 18px;

            font-family: inherit;

            font-size: 12px;

            font-weight: 700;

            cursor: pointer;

            text-decoration: none;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            transition: .2s ease;
        }

        .btn-secondary {
            background: white;

            color: #344a6a;

            border: 1px solid #d8e1ee;
        }

        .btn-secondary:hover {
            background: #f6f8fc;
        }

        .btn-primary {
            background: #064bb2;

            color: white;

            box-shadow: 0 4px 10px rgba(6,75,178,.18);
        }

        .btn-primary:hover {
            background: #043e96;

            transform: translateY(-1px);
        }

        .btn-draft {
            background: #eef3ff;

            color: #174ea6;
        }

        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 900px) {

            .sidebar {
                width: 68px;
            }

            .main {
                margin-left: 68px;
            }

            .topbar {
                padding: 0 18px;
            }

            .verified,
            .company-info {
                display: none;
            }

            .content {
                padding: 22px 18px 40px;
            }

            .stepper {
                grid-template-columns: 1fr;

                gap: 6px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }

            .check-grid {
                grid-template-columns: 1fr;
            }

            .preview-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {

            .sidebar {
                width: 58px;

                border-radius: 0 0 35px 0;
            }

            .sidebar:hover {
                width: 215px;
            }

            .main {
                margin-left: 58px;
            }

            .topbar {
                height: 65px;

                padding: 0 12px;
            }

            .breadcrumb {
                font-size: 11px;
            }

            .content {
                padding: 18px 12px 30px;
            }

            .page-header {
                flex-direction: column;

                gap: 15px;
            }

            .page-header h1 {
                font-size: 23px;
            }

            .form-card {
                padding: 20px 15px;
            }

            .form-footer {
                flex-direction: column-reverse;

                gap: 10px;

                align-items: stretch;
            }

            .footer-left {
                width: 100%;
            }

            .footer-left .btn,
            .form-footer > .btn {
                width: 100%;
            }

            .step {
                font-size: 11px;
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
                <strong>DISNAKER</strong>
                <span>KOTA TASIKMALAYA</span>
            </div>

        </div>


        <nav class="menu">

            <a href="/dashboard-perusahaan">

                <span class="menu-icon">⌂</span>

                <span class="menu-text">
                    Dashboard
                </span>

            </a>


            <a href="/lowongan-saya">

                <span class="menu-icon">▱</span>

                <span class="menu-text">
                    Lowongan Saya
                </span>

            </a>


            <a href="#">

                <span class="menu-icon">♙</span>

                <span class="menu-text">
                    Pelamar Masuk
                </span>

            </a>


            <a href="#">

                <span class="menu-icon">▣</span>

                <span class="menu-text">
                    Profil Perusahaan
                </span>

            </a>


            <a href="#">

                <span class="menu-icon">⚙</span>

                <span class="menu-text">
                    Pengaturan Akun
                </span>

            </a>

        </nav>


        <div class="sidebar-bottom">

            <div class="help-box">

                <small>
                    Pusat Bantuan Disnaker
                </small>

                <strong>
                    0265-313997
                </strong>

            </div>


            <a href="/logout" class="logout">

                <span class="menu-icon">
                    ↪
                </span>

                <span class="menu-text">
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


    <!-- TOPBAR -->

    <header class="topbar">

        <div class="breadcrumb">

            Portal Mitra
            <span>›</span>
            Lowongan Saya
            <span>›</span>

            <strong>
                Tambah Lowongan Baru
            </strong>

        </div>


        <div class="company">

            <div class="verified">
                ● Legalitas PT Terverifikasi
            </div>


            <div class="avatar">
                PS
            </div>


            <div class="company-info">

                <strong>
                    {{ session('nama_perusahaan', 'PT Sansan Saudaratex') }}
                </strong>

                <span>
                    Kawasan Cikurubuk, TSM
                </span>

            </div>

        </div>

    </header>


    <!-- CONTENT -->

    <section class="content">


        <!-- PAGE HEADER -->

        <div class="page-header">

            <div>

                <h1>
                    Formulir Pengajuan Lowongan Baru
                </h1>

                <p>
                    Lengkapi informasi lowongan secara bertahap.
                    Data akan digunakan untuk proses verifikasi dan
                    kurasi Disnaker Kota Tasikmalaya sebelum dipublikasikan.
                </p>

            </div>


            <a href="/lowongan-saya" class="back-link">
                ← Kembali ke Lowongan Saya
            </a>

        </div>


        <!-- =================================================
             STEPPER
        ================================================== -->

        <div class="stepper">

            <div class="step active" data-step="1">

                <div class="step-number">
                    1
                </div>

                <span>
                    Identitas & Posisi
                </span>

            </div>


            <div class="step" data-step="2">

                <div class="step-number">
                    2
                </div>

                <span>
                    Kualifikasi
                </span>

            </div>


            <div class="step" data-step="3">

                <div class="step-number">
                    3
                </div>

                <span>
                    Fasilitas & Upah
                </span>

            </div>


            <div class="step" data-step="4">

                <div class="step-number">
                    4
                </div>

                <span>
                    Dokumen
                </span>

            </div>


            <div class="step" data-step="5">

                <div class="step-number">
                    5
                </div>

                <span>
                    Pratinjau & Kirim
                </span>

            </div>

        </div>


        <!-- =================================================
             FORM CARD
        ================================================== -->

        <div class="form-card">


            <!-- =================================================
                 STEP 1
            ================================================== -->

            <div class="step-content active" data-content="1">

                <div class="section-title">

                    <div class="section-number">
                        1
                    </div>

                    <h2>
                        Posisi Pekerjaan & Penempatan
                    </h2>

                </div>


                <p class="section-description">
                    Tentukan posisi pekerjaan dan lokasi penempatan
                    untuk calon pelamar.
                </p>


                <div class="form-grid">


                    <div class="form-group full">

                        <label>
                            Judul Posisi / Jabatan Pekerjaan
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="judul"
                            placeholder="Contoh: Operator Sewing & Bordir Komputer"
                        >

                        <div class="hint">
                            Gunakan nama jabatan yang jelas dan mudah dipahami calon pelamar.
                        </div>

                    </div>


                    <div class="form-group">

                        <label>
                            Kategori Kejuruan & Industri
                            <span>*</span>
                        </label>

                        <select id="kategori">

                            <option value="">
                                Pilih kategori
                            </option>

                            <option>
                                Industri Tekstil, Garment & Bordir
                            </option>

                            <option>
                                Administrasi & Perkantoran
                            </option>

                            <option>
                                Teknologi Informasi
                            </option>

                            <option>
                                Perdagangan & Retail
                            </option>

                            <option>
                                Manufaktur
                            </option>

                            <option>
                                Jasa
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label>
                            Kebutuhan Tenaga Kerja
                            <span>*</span>
                        </label>

                        <input
                            type="number"
                            id="jumlah"
                            min="1"
                            placeholder="Contoh: 15"
                        >

                    </div>


                    <div class="form-group full">

                        <label>
                            Jenis Hubungan Kerja
                            <span>*</span>
                        </label>

                        <div class="choice-group">

                            <div class="choice">
                                <input
                                    type="radio"
                                    name="hubungan"
                                    id="kontrak"
                                    value="Kontrak (PKWT)"
                                    checked
                                >
                                <label for="kontrak">
                                    Kontrak (PKWT)
                                </label>
                            </div>


                            <div class="choice">
                                <input
                                    type="radio"
                                    name="hubungan"
                                    id="tetap"
                                    value="Penuh Waktu"
                                >
                                <label for="tetap">
                                    Penuh Waktu
                                </label>
                            </div>


                            <div class="choice">
                                <input
                                    type="radio"
                                    name="hubungan"
                                    id="paruh"
                                    value="Paruh Waktu"
                                >
                                <label for="paruh">
                                    Paruh Waktu
                                </label>
                            </div>


                            <div class="choice">
                                <input
                                    type="radio"
                                    name="hubungan"
                                    id="magang"
                                    value="Magang / Praktik"
                                >
                                <label for="magang">
                                    Magang / Praktik
                                </label>
                            </div>

                        </div>

                    </div>


                    <div class="form-group">

                        <label>
                            Kecamatan Penempatan Tasikmalaya
                            <span>*</span>
                        </label>

                        <select id="kecamatan">

                            <option value="">
                                Pilih Kecamatan
                            </option>

                            <option>
                                Bungursari
                            </option>

                            <option>
                                Cibeureum
                            </option>

                            <option>
                                Cihideung
                            </option>

                            <option>
                                Cipedes
                            </option>

                            <option>
                                Indihiang
                            </option>

                            <option>
                                Kawalu
                            </option>

                            <option>
                                Mangkubumi
                            </option>

                            <option>
                                Purbaratu
                            </option>

                            <option>
                                Tamansari
                            </option>

                            <option>
                                Tawang
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label>
                            Alamat Pabrik / Titik Kerja
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="alamat"
                            placeholder="Contoh: Kawasan Industri Cikurubuk"
                        >

                    </div>

                </div>

            </div>


            <!-- =================================================
                 STEP 2
            ================================================== -->

            <div class="step-content" data-content="2">

                <div class="section-title">

                    <div class="section-number">
                        2
                    </div>

                    <h2>
                        Kualifikasi Pelamar
                    </h2>

                </div>


                <p class="section-description">
                    Tentukan persyaratan dan kualifikasi calon pelamar.
                </p>


                <div class="info-box">

                    Informasi kualifikasi akan membantu Disnaker
                    mencocokkan lowongan dengan pencari kerja
                    yang sesuai.

                </div>


                <div class="form-grid">


                    <div class="form-group">

                        <label>
                            Pendidikan Minimal
                            <span>*</span>
                        </label>

                        <select id="pendidikan">

                            <option value="">
                                Pilih pendidikan
                            </option>

                            <option>
                                SMP / Sederajat
                            </option>

                            <option>
                                SMA / SMK / MA Sederajat
                            </option>

                            <option>
                                Diploma (D1-D3)
                            </option>

                            <option>
                                Sarjana (S1)
                            </option>

                            <option>
                                Magister (S2)
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label>
                            Rentang Usia
                        </label>

                        <input
                            type="text"
                            id="usia"
                            placeholder="Contoh: 18 - 30 tahun"
                        >

                    </div>


                    <div class="form-group full">

                        <label>
                            Jurusan / Kompetensi Keahlian
                        </label>

                        <input
                            type="text"
                            id="jurusan"
                            placeholder="Contoh: Tata Busana, Teknik Komputer, Administrasi"
                        >

                    </div>


                    <div class="form-group full">

                        <label>
                            Pengalaman Kerja
                        </label>

                        <div class="choice-group">

                            <div class="choice">

                                <input
                                    type="radio"
                                    name="pengalaman"
                                    id="fresh"
                                    value="Fresh Graduate"
                                    checked
                                >

                                <label for="fresh">
                                    Fresh Graduate
                                </label>

                            </div>


                            <div class="choice">

                                <input
                                    type="radio"
                                    name="pengalaman"
                                    id="pengalaman1"
                                    value="1 - 2 Tahun"
                                >

                                <label for="pengalaman1">
                                    1 - 2 Tahun
                                </label>

                            </div>


                            <div class="choice">

                                <input
                                    type="radio"
                                    name="pengalaman"
                                    id="pengalaman3"
                                    value="3 - 5 Tahun"
                                >

                                <label for="pengalaman3">
                                    3 - 5 Tahun
                                </label>

                            </div>


                            <div class="choice">

                                <input
                                    type="radio"
                                    name="pengalaman"
                                    id="bebas"
                                    value="Tidak Diutamakan"
                                >

                                <label for="bebas">
                                    Tidak Diutamakan
                                </label>

                            </div>

                        </div>

                    </div>


                    <div class="form-group full">

                        <label>
                            Deskripsi Tugas & Tanggung Jawab
                            <span>*</span>
                        </label>

                        <textarea
                            id="deskripsi"
                            placeholder="Jelaskan tugas utama, tanggung jawab, dan aktivitas pekerjaan..."
                        ></textarea>

                        <div class="hint">
                            Jelaskan secara singkat dan mudah dipahami oleh calon pelamar.
                        </div>

                    </div>


                    <div class="form-group full">

                        <label>
                            Kualifikasi & Persyaratan Pokok
                        </label>

                        <div class="check-grid">

                            <label class="check-item">
                                <input type="checkbox" id="kartu">
                                Memiliki Kartu Pencari Kerja (AK-1)
                            </label>

                            <label class="check-item">
                                <input type="checkbox" id="shift">
                                Bersedia bekerja sistem shift
                            </label>

                            <label class="check-item">
                                <input type="checkbox" id="sehat">
                                Sehat jasmani & rohani
                            </label>

                            <label class="check-item">
                                <input type="checkbox" id="domisili">
                                Domisili Kota Tasikmalaya
                            </label>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 STEP 3
            ================================================== -->

            <div class="step-content" data-content="3">

                <div class="section-title">

                    <div class="section-number">
                        3
                    </div>

                    <h2>
                        Skema Upah, Kompensasi & Fasilitas
                    </h2>

                </div>


                <p class="section-description">
                    Informasikan upah dan fasilitas yang diberikan
                    kepada calon pekerja.
                </p>


                <div class="form-grid">


                    <div class="form-group">

                        <label>
                            Skema Besaran Upah
                            <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="upah"
                            placeholder="Contoh: Rp 2.750.000 - Rp 3.200.000"
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Siklus Pembayaran Upah
                        </label>

                        <select id="siklus">

                            <option>
                                Bulanan
                            </option>

                            <option>
                                Mingguan
                            </option>

                            <option>
                                Harian
                            </option>

                        </select>

                    </div>


                    <div class="form-group full">

                        <label>
                            Jaminan Sosial Ketenagakerjaan
                        </label>

                        <div class="check-grid">

                            <label class="check-item">

                                <input
                                    type="checkbox"
                                    id="bpjs-ketenagakerjaan"
                                >

                                BPJS Ketenagakerjaan

                            </label>


                            <label class="check-item">

                                <input
                                    type="checkbox"
                                    id="bpjs-kesehatan"
                                >

                                BPJS Kesehatan

                            </label>


                            <label class="check-item">

                                <input
                                    type="checkbox"
                                    id="jaminan-hari-tua"
                                >

                                Jaminan Hari Tua

                            </label>


                            <label class="check-item">

                                <input
                                    type="checkbox"
                                    id="jaminan-kecelakaan"
                                >

                                Jaminan Kecelakaan Kerja

                            </label>

                        </div>

                    </div>


                    <div class="form-group full">

                        <label>
                            Fasilitas Tambahan Pelamar
                        </label>

                        <div class="check-grid">

                            <label class="check-item">
                                <input type="checkbox">
                                Uang Makan / Tunjangan
                            </label>

                            <label class="check-item">
                                <input type="checkbox">
                                Antar Jemput Karyawan
                            </label>

                            <label class="check-item">
                                <input type="checkbox">
                                Lembur Sesuai Peraturan
                            </label>

                            <label class="check-item">
                                <input type="checkbox">
                                Bonus Produktivitas
                            </label>

                        </div>

                    </div>


                    <div class="form-group full">

                        <label>
                            Fasilitas Lainnya
                        </label>

                        <textarea
                            id="fasilitas"
                            placeholder="Tuliskan fasilitas tambahan lainnya jika ada..."
                        ></textarea>

                    </div>

                </div>


                <div class="info-box success-box">

                    Pastikan informasi upah dan fasilitas yang dicantumkan
                    sesuai dengan ketentuan ketenagakerjaan yang berlaku.

                </div>

            </div>


            <!-- =================================================
                 STEP 4
            ================================================== -->

            <div class="step-content" data-content="4">

                <div class="section-title">

                    <div class="section-number">
                        4
                    </div>

                    <h2>
                        Dokumen & Publikasi
                    </h2>

                </div>


                <p class="section-description">
                    Lengkapi dokumen persyaratan dan informasi
                    publikasi lowongan.
                </p>


                <div class="form-grid">


                    <div class="form-group full">

                        <label>
                            Dokumen Persyaratan
                        </label>

                        <div class="upload-box">

                            <div class="upload-icon">
                                ↑
                            </div>

                            <strong>
                                Unggah Dokumen Persyaratan
                            </strong>

                            <span>
                                PDF, JPG atau PNG • Maksimal 5 MB
                            </span>

                            <input
                                type="file"
                                id="dokumen"
                                accept=".pdf,.jpg,.jpeg,.png"
                                style="margin-top:15px;"
                            >

                        </div>

                    </div>


                    <div class="form-group full">

                        <label>
                            Poster Lowongan
                        </label>

                        <div class="upload-box">

                            <div class="upload-icon">
                                +
                            </div>

                            <strong>
                                Unggah Poster Lowongan
                            </strong>

                            <span>
                                Format JPG / PNG • Maksimal 3 MB
                            </span>

                            <input
                                type="file"
                                id="poster"
                                accept=".jpg,.jpeg,.png"
                                style="margin-top:15px;"
                            >

                        </div>

                    </div>


                    <div class="form-group">

                        <label>
                            Tanggal Mulai Pendaftaran
                            <span>*</span>
                        </label>

                        <input
                            type="date"
                            id="tanggal-mulai"
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Batas Akhir Penutupan Rekrutmen
                            <span>*</span>
                        </label>

                        <input
                            type="date"
                            id="tanggal-akhir"
                        >

                    </div>


                    <div class="form-group full">

                        <label>
                            Status Publikasi
                        </label>

                        <div class="choice-group">

                            <div class="choice">

                                <input
                                    type="radio"
                                    name="publikasi"
                                    id="publik"
                                    value="Publik"
                                    checked
                                >

                                <label for="publik">
                                    Publik setelah disetujui
                                </label>

                            </div>


                            <div class="choice">

                                <input
                                    type="radio"
                                    name="publikasi"
                                    id="draft"
                                    value="Draft"
                                >

                                <label for="draft">
                                    Simpan sebagai Draft
                                </label>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="info-box">

                    Setelah dikirim, lowongan akan masuk ke proses
                    kurasi/verifikasi Disnaker sebelum tampil pada
                    halaman publik.

                </div>

            </div>


            <!-- =================================================
                 STEP 5
            ================================================== -->

            <div class="step-content" data-content="5">

                <div class="section-title">

                    <div class="section-number">
                        5
                    </div>

                    <h2>
                        Pratinjau & Kirim
                    </h2>

                </div>


                <p class="section-description">
                    Periksa kembali informasi lowongan sebelum
                    disimpan atau dikirim untuk proses kurasi.
                </p>


                <div class="info-box success-box">

                    Semua data sudah dapat diperiksa sebelum
                    lowongan dikirim. Pastikan informasi yang
                    ditampilkan sudah benar.

                </div>


                <div class="preview-card">

                    <div class="preview-header">

                        <small>
                            LOWONGAN KERJA RESMI
                        </small>

                        <h3 id="preview-judul">
                            Judul lowongan
                        </h3>

                    </div>


                    <div class="preview-body">

                        <div class="preview-grid">


                            <div class="preview-item">

                                <small>
                                    Perusahaan
                                </small>

                                <strong>
                                    {{ session('nama_perusahaan', 'PT Sansan Saudaratex') }}
                                </strong>

                            </div>


                            <div class="preview-item">

                                <small>
                                    Kategori
                                </small>

                                <strong id="preview-kategori">
                                    -
                                </strong>

                            </div>


                            <div class="preview-item">

                                <small>
                                    Kebutuhan
                                </small>

                                <strong id="preview-jumlah">
                                    -
                                </strong>

                            </div>


                            <div class="preview-item">

                                <small>
                                    Hubungan Kerja
                                </small>

                                <strong id="preview-hubungan">
                                    -
                                </strong>

                            </div>


                            <div class="preview-item">

                                <small>
                                    Penempatan
                                </small>

                                <strong id="preview-kecamatan">
                                    -
                                </strong>

                            </div>


                            <div class="preview-item">

                                <small>
                                    Pendidikan
                                </small>

                                <strong id="preview-pendidikan">
                                    -
                                </strong>

                            </div>


                            <div class="preview-item">

                                <small>
                                    Rentang Usia
                                </small>

                                <strong id="preview-usia">
                                    -
                                </strong>

                            </div>


                            <div class="preview-item">

                                <small>
                                    Upah
                                </small>

                                <strong id="preview-upah">
                                    -
                                </strong>

                            </div>


                            <div class="preview-item">

                                <small>
                                    Siklus Pembayaran
                                </small>

                                <strong id="preview-siklus">
                                    -
                                </strong>

                            </div>

                        </div>


                        <div
                            class="preview-item"
                            style="margin-top:15px;"
                        >

                            <small>
                                Alamat Tempat Kerja
                            </small>

                            <strong id="preview-alamat">
                                -
                            </strong>

                        </div>


                        <div
                            class="preview-item"
                            style="margin-top:12px;"
                        >

                            <small>
                                Deskripsi Tugas
                            </small>

                            <strong id="preview-deskripsi">
                                -
                            </strong>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 FOOTER NAVIGATION
            ================================================== -->

            <div class="form-footer">

                <div class="footer-left">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        id="btn-back"
                    >
                        ← Kembali
                    </button>


                    <button
                        type="button"
                        class="btn btn-draft"
                        id="btn-draft"
                    >
                        Simpan sebagai Draft
                    </button>

                </div>


                <button
                    type="button"
                    class="btn btn-primary"
                    id="btn-next"
                >
                    Lanjut ke Langkah 2 →
                </button>

            </div>

        </div>

    </section>

</main>


<script>

    /* =========================================================
       WIZARD
    ========================================================= */

    let currentStep = 1;

    const totalSteps = 5;


    const contents = document.querySelectorAll('.step-content');
    const steps = document.querySelectorAll('.step');

    const btnBack = document.getElementById('btn-back');
    const btnNext = document.getElementById('btn-next');
    const btnDraft = document.getElementById('btn-draft');


    function showStep(step) {

        currentStep = step;


        /* CONTENT */

        contents.forEach(content => {

            const contentStep =
                Number(content.dataset.content);

            content.classList.toggle(
                'active',
                contentStep === step
            );

        });


        /* STEPPER */

        steps.forEach(item => {

            const itemStep =
                Number(item.dataset.step);

            item.classList.remove(
                'active',
                'completed'
            );


            if (itemStep === step) {

                item.classList.add('active');

            } else if (itemStep < step) {

                item.classList.add('completed');

            }

        });


        /* BACK BUTTON */

        if (step === 1) {

            btnBack.style.display = 'none';

        } else {

            btnBack.style.display = 'inline-flex';

        }


        /* NEXT BUTTON */

        if (step === totalSteps) {

            btnNext.innerHTML =
                '✓ Kirim untuk Kurasi Disnaker';

        } else {

            btnNext.innerHTML =
                'Lanjut ke Langkah ' +
                (step + 1) +
                ' →';

        }


        /* PREVIEW */

        if (step === 5) {

            updatePreview();

        }


        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

    }


    /* =========================================================
       VALIDASI SEDERHANA
    ========================================================= */

    function validateStep(step) {

        if (step === 1) {

            const judul =
                document.getElementById('judul').value.trim();

            const kategori =
                document.getElementById('kategori').value;

            const jumlah =
                document.getElementById('jumlah').value;

            const kecamatan =
                document.getElementById('kecamatan').value;

            const alamat =
                document.getElementById('alamat').value.trim();


            if (!judul) {

                alert('Silakan isi Judul Posisi / Jabatan Pekerjaan.');

                return false;

            }


            if (!kategori) {

                alert('Silakan pilih Kategori Kejuruan & Industri.');

                return false;

            }


            if (!jumlah) {

                alert('Silakan isi Kebutuhan Tenaga Kerja.');

                return false;

            }


            if (!kecamatan) {

                alert('Silakan pilih Kecamatan Penempatan.');

                return false;

            }


            if (!alamat) {

                alert('Silakan isi Alamat Pabrik / Titik Kerja.');

                return false;

            }

        }


        if (step === 2) {

            const pendidikan =
                document.getElementById('pendidikan').value;

            const deskripsi =
                document.getElementById('deskripsi').value.trim();


            if (!pendidikan) {

                alert('Silakan pilih Pendidikan Minimal.');

                return false;

            }


            if (!deskripsi) {

                alert('Silakan isi Deskripsi Tugas & Tanggung Jawab.');

                return false;

            }

        }


        if (step === 3) {

            const upah =
                document.getElementById('upah').value.trim();


            if (!upah) {

                alert('Silakan isi Skema Besaran Upah.');

                return false;

            }

        }


        if (step === 4) {

            const mulai =
                document.getElementById('tanggal-mulai').value;

            const akhir =
                document.getElementById('tanggal-akhir').value;


            if (!mulai) {

                alert('Silakan tentukan Tanggal Mulai Pendaftaran.');

                return false;

            }


            if (!akhir) {

                alert('Silakan tentukan Batas Akhir Rekrutmen.');

                return false;

            }


            if (akhir < mulai) {

                alert(
                    'Batas akhir rekrutmen tidak boleh lebih awal dari tanggal mulai.'
                );

                return false;

            }

        }


        return true;

    }


    /* =========================================================
       NEXT
    ========================================================= */

    btnNext.addEventListener('click', function () {


        if (!validateStep(currentStep)) {

            return;

        }


        if (currentStep < totalSteps) {

            showStep(currentStep + 1);

            return;

        }


        /* STEP 5 */

        alert(
            'Lowongan berhasil disiapkan untuk dikirim ke proses kurasi Disnaker.'
        );

    });


    /* =========================================================
       BACK
    ========================================================= */

    btnBack.addEventListener('click', function () {

        if (currentStep > 1) {

            showStep(currentStep - 1);

        }

    });


    /* =========================================================
       DRAFT
    ========================================================= */

    btnDraft.addEventListener('click', function () {

        saveData();

        alert(
            'Data lowongan berhasil disimpan sebagai draft sementara.'
        );

    });


    /* =========================================================
       PREVIEW
    ========================================================= */

    function getRadioValue(name) {

        const selected =
            document.querySelector(
                'input[name="' + name + '"]:checked'
            );

        return selected
            ? selected.value
            : '-';

    }


    function getValue(id) {

        const element =
            document.getElementById(id);

        if (!element) return '-';

        return element.value || '-';

    }


    function updatePreview() {

        document.getElementById('preview-judul').textContent =
            getValue('judul');

        document.getElementById('preview-kategori').textContent =
            getValue('kategori');

        document.getElementById('preview-jumlah').textContent =
            getValue('jumlah') + ' Orang';

        document.getElementById('preview-hubungan').textContent =
            getRadioValue('hubungan');

        document.getElementById('preview-kecamatan').textContent =
            getValue('kecamatan');

        document.getElementById('preview-pendidikan').textContent =
            getValue('pendidikan');

        document.getElementById('preview-usia').textContent =
            getValue('usia');

        document.getElementById('preview-upah').textContent =
            getValue('upah');

        document.getElementById('preview-siklus').textContent =
            getValue('siklus');

        document.getElementById('preview-alamat').textContent =
            getValue('alamat');

        document.getElementById('preview-deskripsi').textContent =
            getValue('deskripsi');

    }


    /* =========================================================
       LOCAL STORAGE
       Menyimpan data sementara agar tidak hilang
    ========================================================= */

    function saveData() {

        const data = {

            judul:
                document.getElementById('judul').value,

            kategori:
                document.getElementById('kategori').value,

            jumlah:
                document.getElementById('jumlah').value,

            hubungan:
                getRadioValue('hubungan'),

            kecamatan:
                document.getElementById('kecamatan').value,

            alamat:
                document.getElementById('alamat').value,

            pendidikan:
                document.getElementById('pendidikan').value,

            usia:
                document.getElementById('usia').value,

            jurusan:
                document.getElementById('jurusan').value,

            deskripsi:
                document.getElementById('deskripsi').value,

            upah:
                document.getElementById('upah').value,

            siklus:
                document.getElementById('siklus').value,

            fasilitas:
                document.getElementById('fasilitas').value,

            tanggalMulai:
                document.getElementById('tanggal-mulai').value,

            tanggalAkhir:
                document.getElementById('tanggal-akhir').value

        };


        localStorage.setItem(
            'draft_lowongan',
            JSON.stringify(data)
        );

    }


    function loadData() {

        const saved =
            localStorage.getItem('draft_lowongan');


        if (!saved) return;


        try {

            const data =
                JSON.parse(saved);


            const fields = [
                'judul',
                'kategori',
                'jumlah',
                'kecamatan',
                'alamat',
                'pendidikan',
                'usia',
                'jurusan',
                'deskripsi',
                'upah',
                'siklus',
                'fasilitas'
            ];


            fields.forEach(id => {

                const element =
                    document.getElementById(id);

                if (
                    element &&
                    data[id] !== undefined
                ) {

                    element.value = data[id];

                }

            });


            if (data.hubungan) {

                const radio =
                    document.querySelector(
                        'input[name="hubungan"][value="' +
                        data.hubungan +
                        '"]'
                    );

                if (radio) {
                    radio.checked = true;
                }

            }


        } catch (error) {

            console.log(
                'Draft tidak dapat dimuat.',
                error
            );

        }

    }


    /* =========================================================
       AUTO SAVE
    ========================================================= */

    document.querySelectorAll(
        'input, select, textarea'
    ).forEach(element => {

        element.addEventListener(
            'change',
            saveData
        );

        element.addEventListener(
            'input',
            saveData
        );

    });


    /* =========================================================
       INITIAL
    ========================================================= */

    loadData();

    showStep(1);

</script>

</body>
</html>