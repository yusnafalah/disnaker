<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Akun - Disnaker Kota Tasikmalaya</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        :root {
            --blue: #176bc5;
            --blue-dark: #084f9f;
            --blue-deep: #073f9e;
            --blue-soft: #eef3ff;
            --text: #17213c;
            --muted: #697386;
            --border: #e5e9f2;
            --danger: #e04444;
            --green: #0a9668;
            --bg: #f5f7fc;
            --white: #ffffff;
        }

        body {
            background: var(--bg);
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
            width: 88px;
            height: 100vh;
            background: var(--blue);
            padding: 25px 14px;
            overflow: hidden;
            z-index: 1000;
            transition: width .3s ease;
            border-bottom-right-radius: 95px;
        }

        .sidebar:hover {
            width: 255px;
        }

        .logo-area {
            display: flex;
            align-items: center;
            height: 60px;
            margin-bottom: 25px;
            padding-left: 5px;
            white-space: nowrap;
        }

        .logo-box {
            width: 48px;
            min-width: 48px;
            height: 48px;
            border: 1px solid rgba(255,255,255,.7);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 23px;
            background: rgba(255,255,255,.08);
        }

        .logo-text {
            margin-left: 12px;
            color: #fff;
            opacity: 0;
            transition: opacity .2s ease;
        }

        .sidebar:hover .logo-text,
        .sidebar:hover .portal-label,
        .sidebar:hover .menu-text,
        .sidebar:hover .help-box,
        .sidebar:hover .logout-text {
            opacity: 1;
        }

        .logo-text strong {
            display: block;
            font-size: 18px;
            letter-spacing: .3px;
        }

        .logo-text span {
            display: block;
            font-size: 11px;
            margin-top: 3px;
            opacity: .9;
        }

        .portal-label {
            display: inline-block;
            background: rgba(255,255,255,.12);
            color: #fff;
            border-radius: 20px;
            padding: 7px 12px;
            font-size: 10px;
            white-space: nowrap;
            margin-bottom: 22px;
            opacity: 0;
            transition: opacity .2s ease;
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
            text-decoration: none;
            color: #fff;
            border-radius: 11px;
            padding: 0 12px;
            white-space: nowrap;
            transition: all .2s ease;
        }

        .menu a:hover {
            background: rgba(0,0,0,.12);
        }

        .menu a.active {
            background: var(--blue-dark);
            box-shadow:
                inset 3px 0 0 #fff,
                0 5px 14px rgba(0,0,0,.08);
        }

        .menu-icon {
            min-width: 36px;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            border-radius: 10px;
        }

        .menu a.active .menu-icon {
            background: rgba(255,255,255,.12);
        }

        .menu-text {
            margin-left: 10px;
            font-size: 14px;
            opacity: 0;
            transition: opacity .2s ease;
        }

        .sidebar-bottom {
            position: absolute;
            left: 14px;
            right: 14px;
            bottom: 28px;
        }

        .help-box {
            color: #fff;
            padding: 12px 10px;
            border-radius: 10px;
            margin-bottom: 10px;
            white-space: nowrap;
            opacity: 0;
            transition: opacity .2s ease;
        }

        .help-box small {
            display: block;
            font-size: 10px;
            opacity: .85;
            margin-bottom: 3px;
        }

        .help-box strong {
            font-size: 13px;
        }

        .logout {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #ff5263;
            text-decoration: none;
            padding: 10px;
            white-space: nowrap;
            font-size: 13px;
        }

        .logout:hover {
            color: #ff263d;
        }

        .logout-icon {
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255,255,255,.08);
        }

        .logout-text {
            opacity: 0;
            transition: opacity .2s ease;
        }

        /* =====================================================
           MAIN & TOPBAR
        ===================================================== */

        .main {
            margin-left: 88px;
            min-height: 100vh;
            transition: margin-left .3s ease;
        }

        .sidebar:hover ~ .main {
            margin-left: 255px;
        }

        .topbar {
            min-height: 74px;
            background: #fff;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 12px 32px;
        }

        .top-left {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .date {
            font-size: 12px;
            color: #5f687a;
            white-space: nowrap;
        }

        .date strong {
            color: #26324f;
        }

        .verified {
            background: #eafff4;
            color: #078a57;
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: bold;
            white-space: nowrap;
        }

        .top-right {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .notification {
            position: relative;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #39435b;
            font-size: 19px;
        }

        .notification-dot {
            position: absolute;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #de3636;
            top: 5px;
            right: 5px;
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
            background: var(--blue-deep);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 13px;
        }

        .company-name strong,
        .company-name span {
            display: block;
        }

        .company-name strong {
            font-size: 13px;
        }

        .company-name span {
            font-size: 10px;
            color: #7c8492;
            margin-top: 3px;
        }

        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            padding: 24px 28px 40px;
        }

        .breadcrumb {
            font-size: 11px;
            color: #7b8497;
            margin-bottom: 10px;
        }

        .breadcrumb strong {
            color: var(--blue);
        }

        .page-head {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 18px;
        }

        .page-head h1 {
            font-size: 28px;
            line-height: 1.15;
            color: #0864c4;
            margin-bottom: 8px;
        }

        .page-head p {
            max-width: 650px;
            color: #697386;
            font-size: 12px;
            line-height: 1.55;
        }

        .security-score {
            background: #eef3ff;
            border-radius: 13px;
            padding: 10px 14px;
            min-width: 185px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .score-icon {
            width: 36px;
            height: 36px;
            border-radius: 9px;
            background: #0d67ca;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
        }

        .security-score small {
            display: block;
            color: #68738a;
            font-size: 9px;
            margin-bottom: 3px;
        }

        .security-score strong {
            color: #164c9c;
            font-size: 13px;
        }

        /* =====================================================
           TABS
        ===================================================== */

        .tabs {
            display: grid;
            grid-template-columns: 1.35fr 1fr 1fr 1fr .75fr;
            background: #eef3ff;
            padding: 4px;
            border-radius: 11px;
            margin-bottom: 22px;
            overflow: auto;
        }

        .tab {
            border: 0;
            background: transparent;
            color: #5f687a;
            border-radius: 8px;
            padding: 11px 12px;
            font-size: 11px;
            cursor: pointer;
            white-space: nowrap;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .tab:hover {
            background: rgba(255,255,255,.65);
        }

        .tab.active {
            background: #0e6ccb;
            color: #fff;
            font-weight: bold;
            box-shadow: 0 5px 12px rgba(13,103,202,.18);
        }

        .panel {
            display: none;
        }

        .panel.active {
            display: block;
        }

        /* =====================================================
           LAYOUT & CARD
        ===================================================== */

        .two-column {
            display: grid;
            grid-template-columns: minmax(0, 1.5fr) minmax(300px, .85fr);
            gap: 18px;
            align-items: start;
        }

        .stack {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .card {
            background: #fff;
            border: 1px solid #edf0f6;
            border-radius: 12px;
            box-shadow: 0 5px 18px rgba(34,53,95,.035);
            padding: 18px;
        }

        .card-title {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 14px;
        }

        .title-wrap {
            display: flex;
            gap: 10px;
            align-items: flex-start;
        }

        .icon-box {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: #e9efff;
            color: #0a61c3;
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 auto;
            font-size: 15px;
        }

        .card h2 {
            font-size: 15px;
            color: #1b2540;
        }

        .subtext {
            color: #6c7484;
            font-size: 10px;
            line-height: 1.5;
            margin-top: 3px;
        }

        .mini-pill {
            background: #edf0fa;
            color: #47516c;
            border-radius: 12px;
            padding: 5px 8px;
            font-size: 8px;
            white-space: nowrap;
        }

        /* =====================================================
           FORM
        ===================================================== */

        .alert-box {
            background: #f0f3ff;
            border-radius: 9px;
            padding: 12px;
            margin: 12px 0 14px;
            color: #425071;
            font-size: 10px;
            line-height: 1.5;
        }

        .alert-box strong {
            color: #0759b5;
            display: block;
            margin-bottom: 4px;
        }

        .field {
            margin-bottom: 13px;
        }

        .field label {
            display: block;
            color: #303951;
            font-size: 10px;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .input-wrap {
            position: relative;
        }

        .input,
        .select,
        .textarea {
            width: 100%;
            border: 1px solid transparent;
            background: #f0f3ff;
            border-radius: 8px;
            color: #2e3850;
            padding: 10px 35px 10px 12px;
            outline: none;
            font-size: 10px;
        }

        .input:focus,
        .select:focus,
        .textarea:focus {
            border-color: #a6c6f1;
            background: #f7f9ff;
        }

        .textarea {
            min-height: 95px;
            resize: vertical;
            line-height: 1.5;
        }

        .eye-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            border: 0;
            background: transparent;
            color: #657086;
            cursor: pointer;
        }

        .strength {
            background: #f0f3ff;
            padding: 10px;
            border-radius: 8px;
            margin-top: -2px;
            margin-bottom: 12px;
        }

        .strength-top {
            display: flex;
            justify-content: space-between;
            font-size: 9px;
            color: #5e6980;
            margin-bottom: 7px;
        }

        .strength-top strong {
            color: #0a9668;
        }

        .bars {
            display: grid;
            grid-template-columns: repeat(4,1fr);
            gap: 5px;
            margin-bottom: 8px;
        }

        .bar {
            height: 4px;
            border-radius: 10px;
            background: #0b7a5a;
        }

        .checks {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 7px 10px;
            color: #087b5c;
            font-size: 9px;
        }

        .checks span::before {
            content: '✓';
            margin-right: 5px;
            font-weight: bold;
        }

        .actions {
            display: flex;
            justify-content: flex-end;
            gap: 8px;
            margin-top: 13px;
        }

        .btn {
            border: 0;
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 10px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-secondary {
            color: #36415b;
            background: #edf0fb;
        }

        .btn-primary {
            color: #fff;
            background: #0d6ccb;
        }

        .btn-danger {
            color: #d93232;
            background: #fff0f0;
        }

        /* =====================================================
           STATUS / PIC / NOTIFICATION
        ===================================================== */

        .status-line {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            padding: 8px 0;
            border-bottom: 1px solid #eef1f5;
            font-size: 10px;
        }

        .status-line:last-child {
            border-bottom: 0;
        }

        .status-value {
            font-size: 9px;
            color: #425071;
            text-align: right;
        }

        .green {
            color: #0a9668;
        }

        .switch-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 10px 0;
            border-bottom: 1px solid #eef1f5;
        }

        .switch-row:last-child {
            border-bottom: 0;
        }

        .switch-title {
            font-size: 11px;
            color: #26304b;
            margin-bottom: 3px;
        }

        .switch-desc {
            font-size: 9px;
            color: #6d7687;
            line-height: 1.45;
            max-width: 460px;
        }

        .switch {
            width: 34px;
            height: 19px;
            background: #c9cfdb;
            border-radius: 20px;
            position: relative;
            cursor: pointer;
            flex: 0 0 auto;
            transition: .2s;
        }

        .switch input {
            display: none;
        }

        .switch span {
            position: absolute;
            top: 2px;
            left: 2px;
            width: 15px;
            height: 15px;
            background: #fff;
            border-radius: 50%;
            transition: .2s;
            box-shadow: 0 1px 4px rgba(0,0,0,.18);
        }

        .switch input:checked + span {
            transform: translateX(15px);
        }

        .switch:has(input:checked) {
            background: #0c70d4;
        }

        .pic-card {
            background: #fff;
            border-radius: 11px;
            padding: 11px;
            border: 1px solid #edf0f6;
        }

        .pic-head {
            display: flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 10px;
        }

        .pic-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #123f9f;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 12px;
        }

        .pic-head strong {
            display: block;
            font-size: 12px;
        }

        .pic-head span {
            display: block;
            color: #4f5b73;
            font-size: 9px;
            margin-top: 3px;
        }

        /* =====================================================
           SESSION
        ===================================================== */

        .session {
            padding: 10px;
            border-radius: 9px;
            background: #f0f3ff;
            margin-top: 9px;
        }

        .session-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            margin-bottom: 5px;
        }

        .session-title {
            font-size: 10px;
            font-weight: bold;
            color: #26304a;
        }

        .session-meta {
            color: #6d7687;
            font-size: 8px;
            line-height: 1.45;
        }

        .tag {
            border-radius: 12px;
            padding: 4px 7px;
            font-size: 7px;
            font-weight: bold;
        }

        .tag-green {
            background: #ddf8ed;
            color: #087859;
        }

        .tag-blue {
            background: #e8efff;
            color: #1a5cbb;
        }

        .tag-red {
            background: #ffe7e7;
            color: #cf3434;
        }

        /* =====================================================
           OPTIONS / DANGER
        ===================================================== */

        .option-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .option-card {
            background: #f0f3ff;
            border-radius: 10px;
            padding: 12px;
        }

        .option-card strong {
            display: block;
            font-size: 11px;
            margin-bottom: 4px;
        }

        .option-card span {
            display: block;
            color: #687187;
            font-size: 9px;
            line-height: 1.5;
        }

        .radio-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .fake-radio {
            width: 16px;
            height: 16px;
            border: 2px solid #7c879c;
            border-radius: 50%;
        }

        .fake-radio.active {
            border-color: #0a6dcb;
            box-shadow: inset 0 0 0 3px #f0f3ff;
            background: #0a6dcb;
        }

        .danger-card {
            border-left: 4px solid #ef5c52;
            background: #fff6f5;
        }

        .danger-card h2 {
            color: #dc3f37;
        }

        .danger-note {
            color: #6f7685;
            font-size: 9px;
            line-height: 1.55;
        }

        @media (max-width: 1100px) {
            .topbar {
                padding: 12px 18px;
            }

            .content {
                padding: 20px 18px 35px;
            }

            .two-column {
                grid-template-columns: 1fr;
            }

            .page-head {
                flex-direction: column;
            }
        }

        @media (max-width: 760px) {
            .sidebar {
                width: 70px;
                padding-left: 10px;
                padding-right: 10px;
            }

            .sidebar:hover {
                width: 220px;
            }

            .main {
                margin-left: 70px;
            }

            .sidebar:hover ~ .main {
                margin-left: 220px;
            }

            .topbar {
                align-items: flex-start;
                flex-direction: column;
                padding: 12px 14px;
            }

            .top-left,
            .top-right {
                width: 100%;
                flex-wrap: wrap;
            }

            .page-head h1 {
                font-size: 22px;
            }

            .tabs {
                grid-template-columns: repeat(5, max-content);
                overflow-x: auto;
            }

            .option-grid,
            .checks {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- =====================================================
         SIDEBAR
    ===================================================== -->

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

            <a href="{{ url('/dashboard-perusahaan') }}">
                <span class="menu-icon">⌂</span>
                <span class="menu-text">Dashboard</span>
            </a>

            <a href="{{ url('/lowongan-saya') }}">
                <span class="menu-icon">▱</span>
                <span class="menu-text">Lowongan Saya</span>
            </a>

<a href="{{ url('/pelamar-masuk') }}">
    <span class="menu-icon">
        ♙
    </span>

    <span class="menu-text">
        Pelamar Masuk
    </span>
</a>

            <a href="{{ url('/profil-perusahaan') }}">
                <span class="menu-icon">▣</span>
                <span class="menu-text">Profil Perusahaan</span>
            </a>

            <a href="{{ url('/pengaturan-akun') }}"
               class="active"
               aria-current="page">

                <span class="menu-icon">⚙</span>

                <span class="menu-text">
                    Pengaturan Akun
                </span>

            </a>

        </nav>

        <div class="sidebar-bottom">

            <div class="help-box">
                <small>● Pusat Bantuan Disnaker</small>
                <strong>0265-313997</strong>
            </div>

            <a href="{{ url('/logout') }}" class="logout">

                <span class="logout-icon">
                    ⇥
                </span>

                <span class="logout-text">
                    Keluar Portal
                </span>

            </a>

        </div>

    </aside>


    <!-- =====================================================
         MAIN
    ===================================================== -->

    <main class="main">

        <!-- TOPBAR -->

        <header class="topbar">

            <div class="top-left">

                <div class="date">
                    ◫ &nbsp;Kamis, <strong>24 Oktober 2024</strong>
                </div>

                <div class="verified">
                    ◉ Mitra Terverifikasi
                </div>

            </div>

            <div class="top-right">

                <div class="notification" title="Notifikasi">
                    ♧
                    <span class="notification-dot"></span>
                </div>

                <div class="company">

                    <div class="company-name" style="text-align:right;">
                        <strong>
                            PT. Sansan Saudaratex Jaya
                        </strong>

                        <span>
                            Sektor Industri Tekstil & Produk Tekstil
                        </span>
                    </div>

                    <div class="company-logo">
                        PS
                    </div>

                </div>

            </div>

        </header>


        <!-- CONTENT -->

        <section class="content">

            <div class="breadcrumb">
                Dashboard
                &nbsp;›&nbsp;
                Pengaturan Akun
                &nbsp;›&nbsp;
                <strong>Pusat Kendali Keamanan & Profil PIC</strong>
            </div>


            <!-- PAGE HEADER -->

            <div class="page-head">

                <div>

                    <h1>
                        Pengaturan Akun & Keamanan Mitra
                    </h1>

                    <div class="verified"
                         style="display:inline-block; margin-bottom:8px;">

                        ◉ Mitra Terverifikasi Disnaker

                    </div>

                    <p>
                        Kelola kredensial login, otentikasi dua langkah,
                        kontak darurat PIC, notifikasi kurasi lowongan,
                        dan riwayat aktivitas sesi portal industri
                        Kota Tasikmalaya.
                    </p>

                </div>


                <div class="security-score">

                    <div class="score-icon">
                        ♙
                    </div>

                    <div>

                        <small>
                            SKOR KEAMANAN AKUN
                        </small>

                        <strong>
                            96% Optimal •
                        </strong>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 TAB NAVIGASI
            ================================================= -->

            <div class="tabs">

                <button class="tab active"
                        data-tab="security">

                    ◉ Keamanan & Password

                </button>

                <button class="tab"
                        data-tab="pic">

                    ♙ Kontak PIC & Legalitas

                </button>

                <button class="tab"
                        data-tab="notifications">

                    ☷ Preferensi Notifikasi

                </button>

                <button class="tab"
                        data-tab="sessions">

                    ◷ Sesi & Riwayat Login

                </button>

                <button class="tab"
                        data-tab="danger">

                    ⚠ Zona

                </button>

            </div>


            <!-- =================================================
                 PANEL KEAMANAN
            ================================================= -->

            <section class="panel active"
                     id="panel-security">

                <div class="two-column">

                    <!-- LEFT -->

                    <div class="stack">


                        <!-- PASSWORD -->

                        <div class="card">

                            <div class="card-title">

                                <div class="title-wrap">

                                    <div class="icon-box">
                                        ▣
                                    </div>

                                    <div>

                                        <h2>
                                            Ganti Kata Sandi Akun Mitra
                                        </h2>

                                        <div class="subtext">
                                            Pastikan kata sandi memenuhi
                                            standar kriptografi portal
                                            ketenagakerjaan daerah.
                                        </div>

                                    </div>

                                </div>

                                <div class="mini-pill">
                                    Terakhir diganti:
                                    45 hari lalu
                                </div>

                            </div>


                            <div class="alert-box">

                                <strong>
                                    ◉ Protokol Keamanan Data SPBE
                                    Pemkot Tasikmalaya
                                </strong>

                                Kata sandi minimal diganti setiap
                                6 bulan sekali untuk mencegah
                                kebocoran data rekrutmen warga
                                dan data ketenagakerjaan
                                WLTK Online.

                            </div>


                            <div class="field">

                                <label>
                                    Kata Sandi Saat Ini
                                    <span style="color:#d93232">*</span>
                                </label>

                                <div class="input-wrap">

                                    <input
                                        id="currentPassword"
                                        class="input"
                                        type="password"
                                        value="Sansan2024!Secure"
                                    >

                                    <button
                                        class="eye-btn"
                                        type="button"
                                        data-password="currentPassword">
                                        ◉
                                    </button>

                                </div>

                            </div>


                            <div class="field">

                                <label>
                                    Kata Sandi Baru Disnaker
                                    <span style="color:#d93232">*</span>
                                </label>

                                <div class="input-wrap">

                                    <input
                                        id="newPassword"
                                        class="input"
                                        type="password"
                                        value="TasikHeGar#2025"
                                    >

                                    <button
                                        class="eye-btn"
                                        type="button"
                                        data-password="newPassword">
                                        ◉
                                    </button>

                                </div>

                            </div>


                            <!-- PASSWORD STRENGTH -->

                            <div class="strength">

                                <div class="strength-top">

                                    <span>
                                        Kekuatan Kata Sandi:
                                    </span>

                                    <strong>
                                        ✓ Sangat Kuat
                                        (Memenuhi Standar)
                                    </strong>

                                </div>


                                <div class="bars">

                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>

                                </div>


                                <div class="checks">

                                    <span>
                                        Minimal 8 karakter
                                        (terisi 14)
                                    </span>

                                    <span>
                                        Mengandung huruf
                                        kapital & kecil
                                    </span>

                                    <span>
                                        Mengandung digit
                                        angka (0–9)
                                    </span>

                                    <span>
                                        Mengandung simbol khusus
                                        (#$%*&^)
                                    </span>

                                </div>

                            </div>


                            <div class="field">

                                <label>
                                    Konfirmasi Kata Sandi Baru
                                    <span style="color:#d93232">*</span>
                                </label>

                                <div class="input-wrap">

                                    <input
                                        id="confirmPassword"
                                        class="input"
                                        type="password"
                                        value="TasikHeGar#2025"
                                    >

                                    <button
                                        class="eye-btn"
                                        type="button"
                                        data-password="confirmPassword">
                                        ◉
                                    </button>

                                </div>

                            </div>


                            <div class="actions">

                                <button
                                    class="btn btn-secondary"
                                    type="button"
                                    onclick="alert('Perubahan dibatalkan.')">

                                    Batal

                                </button>

                                <button
                                    class="btn btn-primary"
                                    type="button"
                                    onclick="savePassword()">

                                    ▣ Simpan Perubahan Password

                                </button>

                            </div>

                        </div>


                        <!-- 2FA -->

                        <div class="card">

                            <div class="card-title">

                                <div class="title-wrap">

                                    <div class="icon-box">
                                        ▯
                                    </div>

                                    <div>

                                        <h2>
                                            Autentikasi Dua Langkah (2FA)
                                        </h2>

                                        <div class="subtext">
                                            Proteksi akses lowongan kerja
                                            dari pengambilalihan akun
                                            tidak sah.
                                        </div>

                                    </div>

                                </div>


                                <label class="switch">

                                    <input type="checkbox" checked>

                                    <span></span>

                                </label>

                            </div>


                            <p class="subtext"
                               style="font-size:10px; margin-bottom:12px;">

                                Setiap upaya masuk dari peramban baru
                                akan meminta kode One-Time Password
                                (OTP) 6 digit yang dikirimkan ke
                                kontak PIC resmi:
                                <span style="color:#0b67c8;">
                                    +62 812–3456–7890
                                </span>.

                            </p>


                            <div class="option-grid">


                                <div class="option-card">

                                    <div class="radio-row">

                                        <strong>
                                            ▣ WhatsApp OTP
                                        </strong>

                                        <div class="fake-radio active"></div>

                                    </div>

                                    <span>
                                        Rekomendasi Disnaker
                                    </span>

                                    <span style="margin-top:7px;">

                                        Pengiriman instan via Bot
                                        Resmi Layanan Ketenagakerjaan
                                        Kota Tasikmalaya
                                        (Centang Hijau).

                                    </span>

                                </div>


                                <div class="option-card">

                                    <div class="radio-row">

                                        <strong>
                                            ▯ Aplikasi TOTP
                                        </strong>

                                        <div class="fake-radio"></div>

                                    </div>

                                    <span>
                                        Google / Microsoft Authenticator
                                    </span>

                                    <span style="margin-top:7px;">

                                        Gunakan generator kode offline
                                        tanpa bergantung pada
                                        jangkauan sinyal seluler.

                                    </span>

                                </div>

                            </div>


                            <div class="status-line"
                                 style="margin-top:12px; border:0;">

                                <span>
                                    ⌁ Cadangan Darurat:
                                    8 Kode Pemulihan Tersimpan
                                </span>

                                <button
                                    class="btn btn-secondary"
                                    type="button"
                                    style="
                                        padding:6px 8px;
                                        color:#0b67c8;
                                        background:transparent;
                                    "
                                    onclick="alert('Kode pemulihan dibuat ulang pada tampilan demo.')">

                                    Buat Ulang Kode

                                </button>

                            </div>

                        </div>


                        <!-- SESSION -->

                        <div class="card">

                            <div class="card-title">

                                <div class="title-wrap">

                                    <div class="icon-box">
                                        ▣
                                    </div>

                                    <div>

                                        <h2>
                                            Riwayat Sesi & Perangkat Login
                                        </h2>

                                        <div class="subtext">

                                            Daftar terminal perangkat yang
                                            tercatat mengakses konsol HRD
                                            PT. Sansan Saudaratex.

                                        </div>

                                    </div>

                                </div>


                                <button
                                    class="btn btn-danger"
                                    type="button"
                                    onclick="alert('Semua perangkat lain dinyatakan keluar pada tampilan demo.')">

                                    ◉ Keluar Semua Perangkat Lain

                                </button>

                            </div>


                            <div class="session">

                                <div class="session-top">

                                    <div class="session-title">
                                        ▣ Windows 11 • Chrome 128.0
                                    </div>

                                    <span class="tag tag-green">
                                        Sesi ini (Aktif)
                                    </span>

                                </div>

                                <div class="session-meta">

                                    • IP:
                                    180.252.194.88

                                    &nbsp;&nbsp; • Kota Tasikmalaya,
                                    Jawa Barat

                                    &nbsp;&nbsp; • Sedang Berjalan

                                </div>

                            </div>


                            <div class="session">

                                <div class="session-top">

                                    <div class="session-title">
                                        ▯ Hayu Gawe Mitra App
                                        (Android 14)
                                    </div>

                                    <span class="tag tag-blue">
                                        2 jam yang lalu
                                    </span>

                                </div>

                                <div class="session-meta">

                                    • IP:
                                    114.125.43.12

                                    &nbsp;&nbsp; • Kota Tasikmalaya,
                                    Jawa Barat

                                    &nbsp;&nbsp; • Xiaomi Redmi Note 13

                                </div>

                            </div>


                            <div class="session">

                                <div class="session-top">

                                    <div class="session-title">
                                        ▣ Apple MacBook Air • Safari 17.4
                                    </div>

                                    <span class="tag tag-blue">
                                        3 hari yang lalu
                                    </span>

                                </div>

                                <div class="session-meta">

                                    • IP:
                                    182.1.202.61

                                    &nbsp;&nbsp; • Bandung, Jawa Barat
                                    (Kantor Pusat)

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- RIGHT -->

                    <div class="stack">


                        <!-- PIC -->

                        <div class="card">

                            <div class="card-title">

                                <div class="title-wrap">

                                    <div class="icon-box">
                                        ♙
                                    </div>

                                    <div>

                                        <h2>
                                            Penanggung Jawab (PIC)
                                        </h2>

                                        <div class="subtext">
                                            Data wakil resmi perusahaan
                                            di hadapan Disnaker.
                                        </div>

                                    </div>

                                </div>

                                <span class="green">
                                    ●
                                </span>

                            </div>


                            <div class="pic-card">

                                <div class="pic-head">

                                    <div class="pic-avatar">
                                        HG
                                    </div>

                                    <div>

                                        <strong>
                                            Hendra Gunawan, S.Kom
                                        </strong>

                                        <span>
                                            HR & Legal Manager
                                        </span>

                                    </div>

                                </div>


                                <div class="status-line">

                                    <span>NIK Terdaftar</span>

                                    <span class="status-value">
                                        327801********02
                                        <span class="green">◉</span>
                                    </span>

                                </div>


                                <div class="status-line">

                                    <span>Status Validasi</span>

                                    <span class="status-value green">
                                        Terverifikasi Dukcapil
                                    </span>

                                </div>


                                <div class="status-line">

                                    <span>Email Kedinasan</span>

                                    <span class="status-value">
                                        hrd@sansan-tasik.co.id
                                    </span>

                                </div>


                                <div class="status-line">

                                    <span>WhatsApp PIC</span>

                                    <span class="status-value">
                                        +62 812-3456-7890
                                    </span>

                                </div>

                            </div>


                            <button
                                class="btn btn-secondary"
                                style="
                                    width:100%;
                                    margin-top:12px;
                                    color:#084f9f;
                                "
                                type="button"
                                onclick="alert('Form perbarui kontak PIC akan dibuat pada tahap berikutnya.')">

                                ✎ Perbarui Kontak PIC
                                (Re-Verifikasi)

                            </button>

                        </div>


                        <!-- NOTIFICATION -->

                        <div class="card">

                            <div class="card-title">

                                <div class="title-wrap">

                                    <div class="icon-box">
                                        ♧
                                    </div>

                                    <div>

                                        <h2>
                                            Preferensi Notifikasi Loker
                                        </h2>

                                        <div class="subtext">
                                            Kanal sesuai proses kurasi
                                            tim pengawas ketenagakerjaan.
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div class="switch-row">

                                <div>

                                    <div class="switch-title">
                                        Kurasi Lowongan Disnaker
                                    </div>

                                    <div class="switch-desc">

                                        Update saat draft loker
                                        disetujui, ditolak, atau
                                        perlu revisi via WA & Email.

                                    </div>

                                </div>

                                <label class="switch">

                                    <input type="checkbox" checked>

                                    <span></span>

                                </label>

                            </div>


                            <div class="switch-row">

                                <div>

                                    <div class="switch-title">
                                        Pelamar Baru Ber-AK1
                                        (Kartu Kuning)
                                    </div>

                                    <div class="switch-desc">

                                        Ringkasan harian pelamar
                                        prioritas berdomisili lokal
                                        Kota Tasikmalaya.

                                    </div>

                                </div>

                                <label class="switch">

                                    <input type="checkbox" checked>

                                    <span></span>

                                </label>

                            </div>


                            <div class="switch-row">

                                <div>

                                    <div class="switch-title">
                                        Undangan Job Fair & Sosialisasi
                                    </div>

                                    <div class="switch-desc">

                                        Informasi bursa kerja Pemkot,
                                        pelatihan vokasi, dan regulasi
                                        upah (UMK).

                                    </div>

                                </div>

                                <label class="switch">

                                    <input type="checkbox" checked>

                                    <span></span>

                                </label>

                            </div>


                            <div class="switch-row">

                                <div>

                                    <div class="switch-title">
                                        Peringatan Kedaluwarsa Loker
                                    </div>

                                    <div class="switch-desc">

                                        Pengingat H−3 sebelum masa
                                        tayang loker ditutup otomatis
                                        oleh sistem.

                                    </div>

                                </div>

                                <label class="switch">

                                    <input type="checkbox" checked>

                                    <span></span>

                                </label>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            <!-- =================================================
                 PANEL PIC & LEGALITAS
            ================================================= -->

            <section class="panel"
                     id="panel-pic">

                <div class="two-column">

                    <div class="card">

                        <div class="card-title">

                            <div class="title-wrap">

                                <div class="icon-box">
                                    ♙
                                </div>

                                <div>

                                    <h2>
                                        Kontak PIC & Legalitas Perusahaan
                                    </h2>

                                    <div class="subtext">
                                        Kelola informasi wakil resmi
                                        perusahaan dan status verifikasi
                                        legalitas.
                                    </div>

                                </div>

                            </div>

                            <span class="tag tag-green">
                                Terverifikasi
                            </span>

                        </div>


                        <div class="field">

                            <label>
                                Nama PIC
                            </label>

                            <input
                                class="input"
                                type="text"
                                value="Hendra Gunawan, S.Kom"
                                style="padding-right:12px;"
                            >

                        </div>


                        <div class="field">

                            <label>
                                Jabatan
                            </label>

                            <input
                                class="input"
                                type="text"
                                value="HR & Legal Manager"
                                style="padding-right:12px;"
                            >

                        </div>


                        <div class="field">

                            <label>
                                Email Kedinasan
                            </label>

                            <input
                                class="input"
                                type="email"
                                value="hrd@sansan-tasik.co.id"
                                style="padding-right:12px;"
                            >

                        </div>


                        <div class="field">

                            <label>
                                WhatsApp PIC
                            </label>

                            <input
                                class="input"
                                type="text"
                                value="+62 812-3456-7890"
                                style="padding-right:12px;"
                            >

                        </div>


                        <div class="alert-box">

                            <strong>
                                ℹ Informasi re-verifikasi
                            </strong>

                            Perubahan data profil perusahaan dapat
                            memerlukan verifikasi ulang oleh Admin
                            Disnaker sebelum status perusahaan kembali
                            aktif.

                        </div>


                        <div class="actions">

                            <button
                                class="btn btn-secondary"
                                type="button">

                                Batal

                            </button>

                            <button
                                class="btn btn-primary"
                                type="button"
                                onclick="alert('Perubahan disimpan pada tampilan frontend.')">

                                Simpan Perubahan

                            </button>

                        </div>

                    </div>


                    <div class="stack">


                        <div class="card">

                            <div class="card-title">

                                <div class="title-wrap">

                                    <div class="icon-box">
                                        ▣
                                    </div>

                                    <div>

                                        <h2>
                                            Status Legalitas
                                        </h2>

                                        <div class="subtext">
                                            Ringkasan validasi administrasi
                                            mitra.
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div class="status-line">

                                <span>
                                    Nama Perusahaan
                                </span>

                                <span class="status-value">
                                    PT. Sansan Saudaratex Jaya
                                </span>

                            </div>


                            <div class="status-line">

                                <span>
                                    NIB
                                </span>

                                <span class="status-value">
                                    91280048129
                                </span>

                            </div>


                            <div class="status-line">

                                <span>
                                    Status Mitra
                                </span>

                                <span class="status-value green">
                                    ● Terverifikasi
                                </span>

                            </div>


                            <div class="status-line">

                                <span>
                                    Terakhir Verifikasi
                                </span>

                                <span class="status-value">
                                    20 September 2026
                                </span>

                            </div>

                        </div>


                        <div class="card">

                            <div class="card-title">

                                <div class="title-wrap">

                                    <div class="icon-box">
                                        ⌁
                                    </div>

                                    <div>

                                        <h2>
                                            Dokumen Terhubung
                                        </h2>

                                        <div class="subtext">
                                            Dokumen legalitas yang
                                            tercatat pada portal.
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div class="status-line">

                                <span>
                                    NIB / OSS
                                </span>

                                <span class="status-value green">
                                    Lengkap ✓
                                </span>

                            </div>


                            <div class="status-line">

                                <span>
                                    Data PIC
                                </span>

                                <span class="status-value green">
                                    Valid ✓
                                </span>

                            </div>


                            <div class="status-line">

                                <span>
                                    Alamat Perusahaan
                                </span>

                                <span class="status-value green">
                                    Terverifikasi ✓
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            <!-- =================================================
                 PANEL NOTIFIKASI
            ================================================= -->

            <section class="panel"
                     id="panel-notifications">

                <div class="card">

                    <div class="card-title">

                        <div class="title-wrap">

                            <div class="icon-box">
                                ♧
                            </div>

                            <div>

                                <h2>
                                    Preferensi Notifikasi Mitra
                                </h2>

                                <div class="subtext">
                                    Atur pemberitahuan yang ingin
                                    diterima oleh PIC perusahaan.
                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="switch-row">

                        <div>

                            <div class="switch-title">
                                Kurasi Lowongan Disnaker
                            </div>

                            <div class="switch-desc">
                                Notifikasi ketika lowongan
                                disetujui, ditolak, atau
                                membutuhkan revisi.
                            </div>

                        </div>

                        <label class="switch">
                            <input type="checkbox" checked>
                            <span></span>
                        </label>

                    </div>


                    <div class="switch-row">

                        <div>

                            <div class="switch-title">
                                Pelamar Baru Ber-AK1
                            </div>

                            <div class="switch-desc">
                                Ringkasan pelamar baru yang
                                berasal dari pencari kerja
                                berdomisili lokal.
                            </div>

                        </div>

                        <label class="switch">
                            <input type="checkbox" checked>
                            <span></span>
                        </label>

                    </div>


                    <div class="switch-row">

                        <div>

                            <div class="switch-title">
                                Job Fair & Sosialisasi
                            </div>

                            <div class="switch-desc">
                                Undangan acara, pelatihan,
                                informasi regulasi, dan kegiatan
                                ketenagakerjaan.
                            </div>

                        </div>

                        <label class="switch">
                            <input type="checkbox" checked>
                            <span></span>
                        </label>

                    </div>


                    <div class="switch-row">

                        <div>

                            <div class="switch-title">
                                Peringatan Kedaluwarsa Loker
                            </div>

                            <div class="switch-desc">
                                Pengingat sebelum masa tayang
                                lowongan berakhir.
                            </div>

                        </div>

                        <label class="switch">
                            <input type="checkbox" checked>
                            <span></span>
                        </label>

                    </div>


                    <div class="actions">

                        <button
                            class="btn btn-primary"
                            type="button"
                            onclick="alert('Preferensi notifikasi disimpan pada tampilan frontend.')">

                            Simpan Preferensi

                        </button>

                    </div>

                </div>

            </section>


            <!-- =================================================
                 PANEL SESI
            ================================================= -->

            <section class="panel"
                     id="panel-sessions">

                <div class="two-column">


                    <div class="card">

                        <div class="card-title">

                            <div class="title-wrap">

                                <div class="icon-box">
                                    ▣
                                </div>

                                <div>

                                    <h2>
                                        Perangkat Aktif
                                    </h2>

                                    <div class="subtext">
                                        Daftar perangkat yang
                                        saat ini memiliki sesi
                                        akses portal.
                                    </div>

                                </div>

                            </div>


                            <button
                                class="btn btn-danger"
                                type="button"
                                onclick="alert('Logout semua perangkat lain pada tampilan demo.')">

                                Keluar Semua Perangkat Lain

                            </button>

                        </div>


                        <div class="session">

                            <div class="session-top">

                                <div class="session-title">
                                    ▣ Windows 11 • Chrome 128.0
                                </div>

                                <span class="tag tag-green">
                                    Aktif
                                </span>

                            </div>

                            <div class="session-meta">
                                IP 180.252.194.88 •
                                Tasikmalaya, Jawa Barat •
                                Sesi ini
                            </div>

                        </div>


                        <div class="session">

                            <div class="session-top">

                                <div class="session-title">
                                    ▯ Android 14 •
                                    Hayu Gawe Mitra App
                                </div>

                                <span class="tag tag-blue">
                                    2 jam lalu
                                </span>

                            </div>

                            <div class="session-meta">
                                IP 114.125.43.12 •
                                Tasikmalaya, Jawa Barat •
                                Xiaomi Redmi Note 13
                            </div>

                        </div>


                        <div class="session">

                            <div class="session-top">

                                <div class="session-title">
                                    ▣ MacBook Air • Safari 17.4
                                </div>

                                <span class="tag tag-blue">
                                    3 hari lalu
                                </span>

                            </div>

                            <div class="session-meta">
                                IP 182.1.202.61 •
                                Bandung, Jawa Barat •
                                Kantor Pusat
                            </div>

                        </div>

                    </div>


                    <div class="card">

                        <div class="card-title">

                            <div class="title-wrap">

                                <div class="icon-box">
                                    ◷
                                </div>

                                <div>

                                    <h2>
                                        Aktivitas Keamanan
                                    </h2>

                                    <div class="subtext">
                                        Ringkasan aktivitas akun terbaru.
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="status-line">

                            <span>
                                Password diperbarui
                            </span>

                            <span class="status-value">
                                45 hari lalu
                            </span>

                        </div>


                        <div class="status-line">

                            <span>
                                2FA diaktifkan
                            </span>

                            <span class="status-value">
                                120 hari lalu
                            </span>

                        </div>


                        <div class="status-line">

                            <span>
                                Login dari perangkat baru
                            </span>

                            <span class="status-value">
                                2 jam lalu
                            </span>

                        </div>


                        <div class="status-line">

                            <span>
                                Verifikasi PIC
                            </span>

                            <span class="status-value green">
                                Berhasil
                            </span>

                        </div>

                    </div>

                </div>

            </section>


            <!-- =================================================
                 PANEL ZONA
            ================================================= -->

            <section class="panel"
                     id="panel-danger">

                <div class="two-column">


                    <div class="card danger-card">

                        <div class="card-title">

                            <div class="title-wrap">

                                <div class="icon-box"
                                     style="background:#ffe1df;color:#d73c37;">

                                    ⚠

                                </div>

                                <div>

                                    <h2>
                                        Zona Berbahaya Regulasi
                                    </h2>

                                    <div class="subtext">
                                        Penonaktifan atau pembekuan
                                        akun kemitraan industri.
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="alert-box"
                             style="background:#fff0ef;">

                            <strong style="color:#d73c37;">

                                ⓘ Syarat Penonaktifan Akun

                            </strong>

                            <span class="danger-note">

                                Perusahaan wajib memastikan seluruh
                                proses seleksi pelamar selesai,
                                tidak memiliki sengketa medis HI
                                (Hubungan Industrial), serta telah
                                diverifikasi oleh Pengawas
                                Ketenagakerjaan Disnaker Tasikmalaya.

                            </span>

                        </div>


                        <button
                            class="btn btn-secondary"
                            style="
                                width:100%;
                                color:#3d465b;
                            "
                            type="button"
                            onclick="confirmDeactivation()">

                            ♧ Ajukan Penutupan Akun Mitra

                        </button>

                    </div>


                    <div class="card">

                        <div class="card-title">

                            <div class="title-wrap">

                                <div class="icon-box">
                                    ⌁
                                </div>

                                <div>

                                    <h2>
                                        Sebelum Menutup Akun
                                    </h2>

                                    <div class="subtext">
                                        Periksa hal berikut untuk
                                        mencegah kendala administrasi.
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="status-line">

                            <span>
                                Lowongan aktif
                            </span>

                            <span class="status-value green">
                                0 diperlukan
                            </span>

                        </div>


                        <div class="status-line">

                            <span>
                                Pelamar belum selesai
                            </span>

                            <span class="status-value green">
                                Tidak ada
                            </span>

                        </div>


                        <div class="status-line">

                            <span>
                                Sengketa ketenagakerjaan
                            </span>

                            <span class="status-value green">
                                Tidak ada
                            </span>

                        </div>


                        <div class="status-line">

                            <span>
                                Verifikasi PIC
                            </span>

                            <span class="status-value green">
                                Lengkap
                            </span>

                        </div>

                    </div>

                </div>

            </section>

        </section>

    </main>


    <!-- =====================================================
         JAVASCRIPT
         FRONTEND ONLY
    ===================================================== -->

    <script>

        /* =====================================================
           TAB NAVIGATION
        ===================================================== */

        const tabs =
            document.querySelectorAll('.tab');

        const panels =
            document.querySelectorAll('.panel');


        tabs.forEach(tab => {

            tab.addEventListener('click', () => {

                const target =
                    tab.dataset.tab;


                tabs.forEach(item => {
                    item.classList.remove('active');
                });


                panels.forEach(panel => {
                    panel.classList.remove('active');
                });


                tab.classList.add('active');


                const panel =
                    document.getElementById(
                        'panel-' + target
                    );


                if (panel) {
                    panel.classList.add('active');
                }

            });

        });


        /* =====================================================
           PASSWORD SHOW / HIDE
        ===================================================== */

        document
            .querySelectorAll('[data-password]')
            .forEach(button => {

                button.addEventListener('click', () => {

                    const id =
                        button.dataset.password;

                    const input =
                        document.getElementById(id);

                    if (!input) return;


                    input.type =
                        input.type === 'password'
                            ? 'text'
                            : 'password';

                });

            });


        /* =====================================================
           SAVE PASSWORD
        ===================================================== */

        function savePassword() {

            const newPassword =
                document.getElementById(
                    'newPassword'
                ).value;


            const confirmPassword =
                document.getElementById(
                    'confirmPassword'
                ).value;


            if (!newPassword ||
                !confirmPassword) {

                alert(
                    'Password baru dan konfirmasi wajib diisi.'
                );

                return;
            }


            if (newPassword !== confirmPassword) {

                alert(
                    'Konfirmasi kata sandi tidak sama.'
                );

                return;
            }


            if (newPassword.length < 8) {

                alert(
                    'Password minimal 8 karakter.'
                );

                return;
            }


            alert(
                'Perubahan password berhasil disimpan pada tampilan frontend.'
            );

        }


        /* =====================================================
           DEACTIVATION
        ===================================================== */

        function confirmDeactivation() {

            const ok =
                confirm(
                    'Ajukan penutupan akun mitra?'
                );


            if (ok) {

                alert(
                    'Pengajuan penutupan akun dibuat pada tampilan frontend.'
                );

            }

        }

    </script>

</body>
</html>