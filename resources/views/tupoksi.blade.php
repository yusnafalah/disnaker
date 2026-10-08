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
        content="Tugas Pokok dan Fungsi Dinas Tenaga Kerja Kota Tasikmalaya"
    >

    <title>
        Tupoksi - Disnaker Kota Tasikmalaya
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

            --orange: #d98212;

            --orange-soft: #fff3df;

            --shadow-sm:
                0 8px 22px rgba(15, 23, 42, .05);

            --shadow-lg:
                0 22px 50px rgba(15, 23, 42, .10);

            --footer: #0f172a;

            --white: #ffffff;
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

            display:
                flex;

            align-items:
                center;

            justify-content:
                flex-end;

            flex: 1;

            min-width: 0;
        }


        .nav-menu {

            display:
                flex;

            align-items:
                center;

            gap:
                2px;
        }


        .nav-item {

            position:
                relative;
        }


        .nav-link,
        .nav-dropdown-button {

            position:
                relative;

            text-decoration:
                none;

            padding:
                12px 15px;

            font-size:
                14px;

            font-weight:
                500;

            color:
                var(--text-soft);

            display:
                inline-flex;

            align-items:
                center;

            gap:
                6px;

            background:
                transparent;

            border:
                0;

            cursor:
                pointer;

            white-space:
                nowrap;
        }


        .nav-link:hover,
        .nav-dropdown-button:hover {

            color:
                var(--accent);
        }


        .nav-link::after,
        .nav-dropdown-button::after {

            content:
                "";

            position:
                absolute;

            left:
                0;

            right:
                0;

            bottom:
                0;

            height:
                3px;

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

            font-size:
                10px;

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

            position:
                absolute;

            top:
                calc(100% + 1px);

            left:
                50%;

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
                47px;

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

            line-height:
                1.4;

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
                220px;

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
           PAGE HERO
        ===================================================== */

        .page-hero {

            position:
                relative;

            overflow:
                hidden;

            padding:
                65px 5% 50px;

            border-bottom:
                1px solid var(--border);

            background:

                radial-gradient(
                    circle at 85% 20%,
                    rgba(21,94,239,.12),
                    transparent 25%
                ),

                linear-gradient(
                    135deg,
                    #f7fbff,
                    #edf5ff
                );
        }


        body.dark .page-hero {

            background:

                radial-gradient(
                    circle at 85% 20%,
                    rgba(79,140,255,.16),
                    transparent 25%
                ),

                linear-gradient(
                    135deg,
                    #101b2d,
                    #0d1727
                );
        }


        .hero-container {

            max-width:
                1200px;

            margin:
                auto;
        }


        .breadcrumb {

            display:
                flex;

            align-items:
                center;

            gap:
                8px;

            margin-bottom:
                18px;

            color:
                var(--text-muted);

            font-size:
                12px;
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
                1.25fr .75fr;

            gap:
                35px;

            align-items:
                center;
        }


        .hero-label {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                7px;

            background:
                var(--surface-blue);

            color:
                var(--primary);

            border-radius:
                999px;

            padding:
                8px 13px;

            font-size:
                11px;

            font-weight:
                700;

            margin-bottom:
                17px;
        }


        .hero-title {

            margin:
                0;

            font-size:
                clamp(38px, 5vw, 58px);

            line-height:
                1.05;

            letter-spacing:
                -1.5px;
        }


        .hero-title span {

            display:
                block;

            color:
                var(--primary);
        }


        .hero-description {

            max-width:
                780px;

            margin:
                19px 0 0;

            font-size:
                16px;

            line-height:
                1.75;

            color:
                var(--text-soft);
        }


        .hero-info {

            background:
                var(--surface);

            border:
                1px solid var(--border);

            border-radius:
                22px;

            padding:
                24px;

            box-shadow:
                var(--shadow-lg);
        }


        .hero-info-top {

            display:
                flex;

            align-items:
                center;

            gap:
                11px;

            margin-bottom:
                13px;
        }


        .hero-icon {

            width:
                42px;

            height:
                42px;

            border-radius:
                12px;

            background:
                var(--surface-blue);

            color:
                var(--primary);

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            font-size:
                17px;

            font-weight:
                800;
        }


        .hero-info small {

            display:
                block;

            color:
                var(--text-muted);

            font-size:
                9px;

            text-transform:
                uppercase;

            letter-spacing:
                .7px;
        }


        .hero-info strong {

            display:
                block;

            color:
                var(--text);

            font-size:
                16px;

            margin-top:
                4px;
        }


        .hero-info p {

            color:
                var(--text-soft);

            font-size:
                10px;

            line-height:
                1.6;

            margin:
                0;
        }


        /* =====================================================
           CONTENT
        ===================================================== */

        .content {

            padding:
                65px 5% 80px;
        }


        .content-container {

            max-width:
                1200px;

            margin:
                auto;
        }


        .section-heading {

            margin-bottom:
                28px;
        }


        .section-heading small {

            display:
                block;

            color:
                var(--primary);

            font-size:
                11px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                .8px;

            margin-bottom:
                7px;
        }


        .section-heading h2 {

            margin:
                0;

            color:
                var(--text);

            font-size:
                29px;
        }


        .section-heading p {

            max-width:
                800px;

            margin:
                10px 0 0;

            color:
                var(--text-soft);

            font-size:
                13px;

            line-height:
                1.7;
        }


        /* =====================================================
           QUICK NAV
        ===================================================== */

        .toc {

            display:
                flex;

            gap:
                8px;

            flex-wrap:
                wrap;

            margin-bottom:
                25px;
        }


        .toc a {

            padding:
                8px 11px;

            background:
                var(--surface);

            border:
                1px solid var(--border);

            border-radius:
                999px;

            text-decoration:
                none;

            color:
                var(--text-soft);

            font-size:
                10px;

            transition:
                .2s ease;
        }


        .toc a:hover {

            color:
                var(--primary);

            border-color:
                #aac8ee;

            background:
                var(--surface-blue);
        }


        /* =====================================================
           TUGAS CARD
        ===================================================== */

        .tupoksi-card {

            background:
                var(--surface);

            border:
                1px solid var(--border);

            border-radius:
                20px;

            margin-bottom:
                18px;

            box-shadow:
                var(--shadow-sm);

            overflow:
                hidden;

            scroll-margin-top:
                100px;
        }


        .tupoksi-header {

            display:
                flex;

            align-items:
                center;

            justify-content:
                space-between;

            gap:
                18px;

            padding:
                20px 22px;

            cursor:
                pointer;
        }


        .header-left {

            display:
                flex;

            align-items:
                center;

            gap:
                12px;
        }


        .number-icon {

            width:
                42px;

            min-width:
                42px;

            height:
                42px;

            border-radius:
                12px;

            background:
                var(--surface-blue);

            color:
                var(--primary);

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            font-weight:
                800;

            font-size:
                11px;
        }


        .green-card .number-icon {

            background:
                var(--green-soft);

            color:
                var(--green);
        }


        .orange-card .number-icon {

            background:
                var(--orange-soft);

            color:
                var(--orange);
        }


        .header-left h3 {

            margin:
                0;

            color:
                var(--text);

            font-size:
                16px;

            line-height:
                1.4;
        }


        .header-left p {

            margin:
                4px 0 0;

            color:
                var(--text-muted);

            font-size:
                10px;
        }


        .toggle-icon {

            width:
                30px;

            height:
                30px;

            border-radius:
                50%;

            background:
                var(--surface-soft);

            color:
                var(--text-soft);

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            transition:
                .2s ease;

            font-size:
                13px;
        }


        .tupoksi-card.open
        .toggle-icon {

            transform:
                rotate(180deg);

            background:
                var(--surface-blue);

            color:
                var(--primary);
        }


        .tupoksi-body {

            display:
                none;

            padding:
                0 22px 23px;
        }


        .tupoksi-card.open
        .tupoksi-body {

            display:
                block;
        }


        .tugas-pokok {

            background:
                var(--surface-soft);

            border-left:
                4px solid
                var(--primary);

            border-radius:
                0 12px 12px 0;

            padding:
                17px;

            margin-bottom:
                19px;
        }


        .green-card .tugas-pokok {

            border-left-color:
                var(--green);
        }


        .orange-card .tugas-pokok {

            border-left-color:
                var(--orange);
        }


        .tugas-label {

            color:
                var(--primary);

            font-size:
                10px;

            text-transform:
                uppercase;

            letter-spacing:
                .5px;

            font-weight:
                800;

            margin-bottom:
                6px;
        }


        .green-card .tugas-label {

            color:
                var(--green);
        }


        .orange-card .tugas-label {

            color:
                var(--orange);
        }


        .tugas-pokok p {

            margin:
                0;

            color:
                var(--text-soft);

            font-size:
                12px;

            line-height:
                1.75;
        }


        .rincian-title {

            display:
                flex;

            align-items:
                center;

            gap:
                8px;

            font-size:
                12px;

            font-weight:
                800;

            color:
                var(--text);

            margin-bottom:
                11px;
        }


        .rincian-title::before {

            content:
                "";

            width:
                7px;

            height:
                7px;

            border-radius:
                50%;

            background:
                var(--primary);
        }


        .green-card .rincian-title::before {

            background:
                var(--green);
        }


        .orange-card .rincian-title::before {

            background:
                var(--orange);
        }


        .task-list {

            list-style:
                none;

            padding:
                0;

            margin:
                0;

            display:
                flex;

            flex-direction:
                column;

            gap:
                7px;
        }


        .task-list li {

            display:
                grid;

            grid-template-columns:
                28px 1fr;

            gap:
                8px;

            padding:
                10px 11px;

            border:
                1px solid var(--border);

            border-radius:
                10px;

            background:
                var(--surface);

            color:
                var(--text-soft);

            font-size:
                11px;

            line-height:
                1.65;

            transition:
                .2s ease;
        }


        .task-list li:hover {

            background:
                var(--surface-soft);

            border-color:
                #c5d7ed;
        }


        .task-number {

            width:
                24px;

            height:
                24px;

            border-radius:
                7px;

            background:
                var(--surface-blue);

            color:
                var(--primary);

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            font-size:
                9px;

            font-weight:
                800;
        }


        .green-card .task-number {

            background:
                var(--green-soft);

            color:
                var(--green);
        }


        .orange-card .task-number {

            background:
                var(--orange-soft);

            color:
                var(--orange);
        }


        /* =====================================================
           BAWAHI SEKRETARIAT
        ===================================================== */

        .subordinate {

            margin-top:
                20px;

            background:
                var(--surface-blue);

            border:
                1px solid #cbdcf0;

            border-radius:
                13px;

            padding:
                14px;
        }


        .subordinate strong {

            display:
                block;

            color:
                var(--primary-dark);

            font-size:
                11px;

            margin-bottom:
                8px;
        }


        .subordinate ol {

            margin:
                0;

            padding-left:
                18px;

            color:
                var(--text-soft);

            font-size:
                10px;

            line-height:
                1.7;
        }


        /* =====================================================
           FOOTER INFO
        ===================================================== */

        .bottom-note {

            margin-top:
                30px;

            display:
                flex;

            align-items:
                flex-start;

            gap:
                11px;

            padding:
                16px;

            border:
                1px solid var(--border);

            border-radius:
                15px;

            background:
                var(--surface);

            box-shadow:
                var(--shadow-sm);
        }


        .bottom-note-icon {

            width:
                34px;

            height:
                34px;

            border-radius:
                10px;

            background:
                var(--surface-blue);

            color:
                var(--primary);

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            flex-shrink:
                0;

            font-weight:
                800;
        }


        .bottom-note h4 {

            margin:
                0 0 4px;

            font-size:
                11px;

            color:
                var(--text);
        }


        .bottom-note p {

            margin:
                0;

            color:
                var(--text-soft);

            font-size:
                10px;

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


            .hero-info {

                max-width:
                    480px;
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
                    48px 20px 40px;
            }


            .content {

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


            .section-heading h2 {

                font-size:
                    25px;
            }


            .tupoksi-header {

                padding:
                    17px;
            }


            .tupoksi-body {

                padding:
                    0 17px 20px;
            }


            .header-left h3 {

                font-size:
                    14px;
            }


            .task-list li {

                grid-template-columns:
                    25px 1fr;

                font-size:
                    10px;
            }


            .task-number {

                width:
                    22px;

                height:
                    22px;
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


                    <a
                        href="{{ url('/struktur-organisasi') }}"
                    >

                        Struktur Organisasi

                    </a>


<a href="{{ url('/visi-misi') }}">
    Visi dan Misi
</a>

                                        <a
                        href="{{ url('/tupoksi') }}"
                    >

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


            <!-- SP4N LAPOR -->

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


    <!-- MASUK -->

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


    <div class="hero-container">


        <!-- BREADCRUMB -->

        <div class="breadcrumb">


            <a href="{{ url('/') }}">

                Beranda

            </a>


            <span>
                ›
            </span>


            <span>
                Profil
            </span>


            <span>
                ›
            </span>


            <strong>
                Tupoksi
            </strong>


        </div>


        <div class="hero-grid">


            <div>


                <div class="hero-label">

                    ● PROFIL DISNAKER
                    KOTA TASIKMALAYA

                </div>


                <h1 class="hero-title">

                    Tugas Pokok

                    <span>
                        dan Fungsi
                    </span>

                </h1>


                <p class="hero-description">

                    Informasi mengenai tugas pokok dan
                    rincian tugas setiap unsur organisasi
                    Dinas Tenaga Kerja Kota Tasikmalaya,
                    mulai dari Kepala Dinas, Sekretariat,
                    Sub Bagian, hingga Bidang.

                </p>


            </div>


            <div class="hero-info">


                <div class="hero-info-top">


                    <div class="hero-icon">

                        ✓

                    </div>


                    <div>

                        <small>
                            Informasi
                        </small>


                        <strong>
                            Tugas Pokok &amp; Fungsi
                        </strong>

                    </div>


                </div>


                <p>

                    Pilih bagian organisasi di bawah
                    untuk melihat tugas pokok dan
                    rincian tugas secara lengkap.

                </p>


            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     CONTENT
===================================================== -->

<section class="content">


    <div class="content-container">


        <div class="section-heading">


            <small>
                Tupoksi Organisasi
            </small>


            <h2>
                Tugas Pokok dan Rincian Tugas
            </h2>


            <p>

                Daftar berikut memuat tugas pokok dan
                rincian tugas berdasarkan informasi
                yang disediakan untuk Dinas Tenaga
                Kerja Kota Tasikmalaya.

            </p>


        </div>


        <!-- =================================================
             QUICK NAVIGATION
        ================================================== -->

        <div class="toc">


            <a href="#kepala-dinas">
                Kepala Dinas
            </a>


            <a href="#sekretariat">
                Sekretariat
            </a>


            <a href="#umum-kepegawaian">
                Umum &amp; Kepegawaian
            </a>


            <a href="#perencanaan">
                Perencanaan &amp; Keuangan
            </a>


            <a href="#pelatihan">
                Pelatihan &amp; Penempatan
            </a>


            <a href="#hubungan-industrial">
                Hubungan Industrial
            </a>


        </div>


        <!-- =================================================
             KEPALA DINAS
        ================================================== -->

        <article
            class="tupoksi-card open"
            id="kepala-dinas"
        >


            <div
                class="tupoksi-header"
                onclick="toggleCard(this)"
            >


                <div class="header-left">


                    <div class="number-icon">

                        01

                    </div>


                    <div>

                        <h3>

                            Kepala Dinas

                        </h3>


                        <p>

                            Pimpinan Dinas Tenaga Kerja

                        </p>

                    </div>


                </div>


                <div class="toggle-icon">

                    ▾

                </div>


            </div>


            <div class="tupoksi-body">


                <div class="tugas-pokok">


                    <div class="tugas-label">

                        Tugas Pokok Kepala Dinas

                    </div>


                    <p>

                        Kepala Dinas mempunyai tugas pokok
                        merumuskan sasaran, mengarahkan,
                        menyelenggarakan, membina,
                        mengoordinasikan, mengendalikan,
                        mengevaluasi dan melaporkan program
                        kerja dinas dalam pengelolaan urusan
                        tenaga kerja dan transmigrasi.

                    </p>


                </div>


                <div class="rincian-title">

                    Rincian Tugas Kepala Dinas

                </div>


                <ol class="task-list">


                    <li>
                        <span class="task-number">1</span>
                        <span>
                            Menyelenggarakan penyusunan
                            rencana program kerja dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">2</span>
                        <span>
                            Merumuskan dan menetapkan rencana
                            strategis dan program kerja dinas
                            untuk mendukung visi dan misi daerah;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">3</span>
                        <span>
                            Menyelenggarakan perumusan dan
                            penetapan kebijakan teknis operasional
                            di bidang tenaga kerja;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">4</span>
                        <span>
                            Menyelenggarakan pengawasan dan
                            pengendalian kegiatan ketenagakerjaan;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">5</span>
                        <span>
                            Menyelenggarakan pengoordinasian
                            pelaksanaan kegiatan dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">6</span>
                        <span>
                            Menyelenggarakan pembinaan dan
                            mengarahkan semua kegiatan unit
                            organisasi dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">7</span>
                        <span>
                            Melaksanakan koordinasi dengan
                            Perangkat Daerah atau unit kerja
                            lain yang terkait untuk kelancaran
                            pelaksanaan tugas dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">8</span>
                        <span>
                            Memberikan saran dan pertimbangan
                            kepada Wali Kota dalam penyelenggaraan
                            tugas pembangunan dan tugas umum
                            pemerintahan di bidang tenaga kerja
                            dan transmigrasi;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">9</span>
                        <span>
                            Melaksanakan monitoring, evaluasi
                            dan pelaporan hasil pelaksanaan tugas
                            kepada Wali Kota melalui Sekretaris
                            Daerah; dan
                        </span>
                    </li>


                    <li>
                        <span class="task-number">10</span>
                        <span>
                            Melaksanakan tugas kedinasan lain
                            yang diberikan oleh Wali Kota sesuai
                            dengan tugas dan fungsinya.
                        </span>
                    </li>


                </ol>


            </div>


        </article>


        <!-- =================================================
             SEKRETARIAT
        ================================================== -->

        <article
            class="tupoksi-card green-card"
            id="sekretariat"
        >


            <div
                class="tupoksi-header"
                onclick="toggleCard(this)"
            >


                <div class="header-left">


                    <div class="number-icon">

                        02

                    </div>


                    <div>

                        <h3>
                            Sekretariat
                        </h3>


                        <p>
                            Pelayanan administratif dan
                            koordinasi kesekretariatan
                        </p>

                    </div>


                </div>


                <div class="toggle-icon">

                    ▾

                </div>


            </div>


            <div class="tupoksi-body">


                <div class="tugas-pokok">


                    <div class="tugas-label">

                        Tugas Pokok Sekretariat

                    </div>


                    <p>

                        Sekretariat mempunyai tugas pokok
                        memberikan pelayanan administratif,
                        koordinasi dan pengendalian dalam
                        pelaksanaan kegiatan kesekretariatan
                        yang meliputi perencanaan, pengelolaan
                        kepegawaian, pengelolaan keuangan dan
                        barang milik daerah, penataan organisasi
                        dan administrasi umum.

                    </p>


                </div>


                <div class="rincian-title">

                    Rincian Tugas Sekretariat

                </div>


                <ol class="task-list">


                    <li>
                        <span class="task-number">1</span>
                        <span>
                            Menyelenggarakan penyusunan rencana
                            program kerja dan target kinerja
                            Sekretariat sesuai perjanjian kinerja;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">2</span>
                        <span>
                            Melaksanakan perumusan strategi
                            pelaksanaan pencapaian target kinerja
                            termasuk di dalamnya pembentukan tim
                            kerja dan pelibatan jabatan-jabatan
                            yang diperlukan dalam pencapaian
                            target kinerja;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">3</span>
                        <span>
                            Menyelenggarakan dan mengoordinasikan
                            penyusunan perencanaan serta
                            penganggaran dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">4</span>
                        <span>
                            Menyelenggarakan dan mengoordinasikan
                            pengelolaan administrasi dan pembinaan
                            kepegawaian;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">5</span>
                        <span>
                            Menyelenggarakan dan mengoordinasikan
                            pengelolaan administrasi keuangan
                            pada dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">6</span>
                        <span>
                            Menyelenggarakan dan mengoordinasikan
                            pengelolaan administrasi barang milik
                            daerah pada dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">7</span>
                        <span>
                            Menyelenggarakan dan mengoordinasikan
                            pengelolaan administrasi umum meliputi
                            ketatausahaan dan kerumahtanggaan dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">8</span>
                        <span>
                            Menyelenggarakan penataan organisasi
                            meliputi pembinaan dan pengembangan
                            kelembagaan, pelayanan publik dan
                            ketatalaksanaan, peningkatan kinerja
                            serta reformasi birokrasi di lingkungan
                            dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">9</span>
                        <span>
                            Mengoordinasikan penyiapan rancangan
                            peraturan dan ketentuan lainnya di
                            bidang ketenagakerjaan;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">10</span>
                        <span>
                            Menyelenggarakan pengelolaan data
                            statistik di bidang ketenagakerjaan;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">11</span>
                        <span>
                            Menyelenggarakan dan mengoordinasikan
                            penyusunan evaluasi dan pelaporan
                            kinerja dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">12</span>
                        <span>
                            Melaksanakan pemantauan, evaluasi
                            dan laporan yang berkaitan dengan
                            tugas Sekretariat;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">13</span>
                        <span>
                            Melaksanakan pembinaan kinerja jabatan
                            pengawas, jabatan fungsional dan
                            jabatan pelaksana yang ditempatkan
                            di Sekretariat;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">14</span>
                        <span>
                            Melaksanakan penyediaan dukungan
                            sarana dan prasarana, tata kelola
                            serta sumber daya dalam rangka
                            pencapaian target kinerja oleh jabatan
                            pengawas, jabatan fungsional dan
                            jabatan pelaksana yang berada
                            di bawahnya;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">15</span>
                        <span>
                            Melaksanakan koordinasi dengan
                            unit kerja terkait; dan
                        </span>
                    </li>


                    <li>
                        <span class="task-number">16</span>
                        <span>
                            Melaksanakan tugas kedinasan lain
                            sesuai dengan tugas dan fungsinya.
                        </span>
                    </li>


                </ol>


                <div class="subordinate">


                    <strong>
                        Sekretariat membawahkan:
                    </strong>


                    <ol>

                        <li>
                            Sub Bagian Umum dan Kepegawaian;
                            dan
                        </li>

                        <li>
                            Sub Bagian Perencanaan, Evaluasi,
                            Pelaporan dan Keuangan.
                        </li>

                    </ol>


                </div>


            </div>


        </article>


        <!-- =================================================
             SUB BAGIAN UMUM & KEPEGAWAIAN
        ================================================== -->

        <article
            class="tupoksi-card"
            id="umum-kepegawaian"
        >


            <div
                class="tupoksi-header"
                onclick="toggleCard(this)"
            >


                <div class="header-left">


                    <div class="number-icon">

                        03

                    </div>


                    <div>

                        <h3>

                            Sub Bagian Umum
                            dan Kepegawaian

                        </h3>


                        <p>

                            Administrasi umum,
                            kepegawaian dan kelembagaan

                        </p>

                    </div>


                </div>


                <div class="toggle-icon">

                    ▾

                </div>


            </div>


            <div class="tupoksi-body">


                <div class="tugas-pokok">


                    <div class="tugas-label">

                        Tugas Pokok

                    </div>


                    <p>

                        Sub Bagian Umum dan Kepegawaian
                        mempunyai tugas pokok melaksanakan
                        pengelolaan urusan umum, pengelolaan
                        administrasi kepegawaian, pengelolaan
                        barang milik daerah serta pengelolaan
                        kelembagaan, ketatalaksanaan,
                        pelayanan publik dan reformasi
                        birokrasi di lingkup dinas.

                    </p>


                </div>


                <div class="rincian-title">

                    Rincian Tugas Sub Bagian Umum
                    dan Kepegawaian

                </div>


                <ol class="task-list">


                    <li>
                        <span class="task-number">1</span>
                        <span>
                            Melaksanakan penyusunan rencana
                            kerja Sub Bagian Umum dan Kepegawaian;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">2</span>
                        <span>
                            Melaksanakan kegiatan ketatausahaan
                            di lingkungan dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">3</span>
                        <span>
                            Melaksanakan pengelolaan perlengkapan
                            dan kerumahtanggaan dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">4</span>
                        <span>
                            Melaksanakan pengelolaan barang
                            milik daerah di lingkungan dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">5</span>
                        <span>
                            Melaksanakan pengelolaan administrasi
                            dan pembinaan kepegawaian di
                            lingkungan dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">6</span>
                        <span>
                            Melaksanakan pengelolaan dan
                            penyiapan bahan pembinaan
                            kelembagaan, ketatalaksanaan dan
                            pelayanan publik di lingkungan dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">7</span>
                        <span>
                            Melaksanakan pengelolaan reformasi
                            birokrasi di lingkungan dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">8</span>
                        <span>
                            Melaksanakan pemantauan, evaluasi
                            dan laporan yang berkaitan dengan
                            tugas Sub Bagian Umum dan Kepegawaian;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">9</span>
                        <span>
                            Melaksanakan koordinasi dengan
                            unit kerja terkait; dan
                        </span>
                    </li>


                    <li>
                        <span class="task-number">10</span>
                        <span>
                            Melaksanakan tugas kedinasan lain
                            sesuai dengan tugas dan fungsinya.
                        </span>
                    </li>


                </ol>


            </div>


        </article>


        <!-- =================================================
             SUB BAGIAN PERENCANAAN
        ================================================== -->

        <article
            class="tupoksi-card green-card"
            id="perencanaan"
        >


            <div
                class="tupoksi-header"
                onclick="toggleCard(this)"
            >


                <div class="header-left">


                    <div class="number-icon">

                        04

                    </div>


                    <div>

                        <h3>

                            Sub Bagian Perencanaan,
                            Evaluasi, Pelaporan
                            dan Keuangan

                        </h3>


                        <p>

                            Perencanaan, evaluasi,
                            pelaporan dan administrasi keuangan

                        </p>

                    </div>


                </div>


                <div class="toggle-icon">

                    ▾

                </div>


            </div>


            <div class="tupoksi-body">


                <div class="tugas-pokok">


                    <div class="tugas-label">

                        Tugas Pokok

                    </div>


                    <p>

                        Sub Bagian Perencanaan, Evaluasi,
                        Pelaporan dan Keuangan mempunyai
                        tugas pokok mengoordinasikan penyusunan
                        rencana kerja, evaluasi dan pelaporan
                        kinerja dinas serta melaksanakan
                        pengelolaan administrasi keuangan dinas.

                    </p>


                </div>


                <div class="rincian-title">

                    Rincian Tugas

                </div>


                <ol class="task-list">


                    <li>
                        <span class="task-number">1</span>
                        <span>
                            Melaksanakan penyusunan rencana
                            kerja Sub Bagian Perencanaan,
                            Evaluasi, Pelaporan dan Keuangan;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">2</span>
                        <span>
                            Mengoordinasikan penyiapan bahan
                            penyusunan program kerja dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">3</span>
                        <span>
                            Melaksanakan penyusunan bahan
                            perencanaan dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">4</span>
                        <span>
                            Melaksanakan penyusunan bahan
                            evaluasi dan pelaporan kinerja dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">5</span>
                        <span>
                            Melaksanakan penyiapan bahan dan
                            mengoordinasikan penyusunan dokumen
                            rencana anggaran dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">6</span>
                        <span>
                            Melaksanakan penyusunan data dan
                            statistik berkaitan dengan penyelenggaraan
                            urusan ketenagakerjaan untuk bahan
                            perencanaan, pelaksanaan tugas dan pelaporan;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">7</span>
                        <span>
                            Melaksanakan penatausahaan dan
                            pengujian/verifikasi keuangan dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">8</span>
                        <span>
                            Melaksanakan pembinaan penatausahaan
                            keuangan di lingkungan dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">9</span>
                        <span>
                            Melaksanakan akuntansi dan penyusunan
                            laporan keuangan dinas;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">10</span>
                        <span>
                            Melaksanakan pengelolaan dan penyiapan
                            bahan tanggapan pemeriksaan;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">11</span>
                        <span>
                            Melaksanakan pemantauan, evaluasi dan
                            laporan yang berkaitan dengan tugas
                            Sub Bagian Perencanaan, Evaluasi,
                            Pelaporan dan Keuangan;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">12</span>
                        <span>
                            Melaksanakan koordinasi dengan unit
                            kerja terkait; dan
                        </span>
                    </li>


                    <li>
                        <span class="task-number">13</span>
                        <span>
                            Melaksanakan tugas kedinasan lain
                            sesuai dengan tugas dan fungsinya.
                        </span>
                    </li>


                </ol>


            </div>


        </article>


        <!-- =================================================
             BIDANG PELATIHAN
        ================================================== -->

        <article
            class="tupoksi-card orange-card"
            id="pelatihan"
        >


            <div
                class="tupoksi-header"
                onclick="toggleCard(this)"
            >


                <div class="header-left">


                    <div class="number-icon">

                        05

                    </div>


                    <div>

                        <h3>

                            Bidang Pelatihan,
                            Produktivitas, Penempatan
                            Tenaga Kerja dan Transmigrasi

                        </h3>


                        <p>

                            Pelatihan, produktivitas,
                            penempatan dan transmigrasi

                        </p>

                    </div>


                </div>


                <div class="toggle-icon">

                    ▾

                </div>


            </div>


            <div class="tupoksi-body">


                <div class="tugas-pokok">


                    <div class="tugas-label">

                        Tugas Pokok

                    </div>


                    <p>

                        Bidang Pelatihan, Produktivitas,
                        Penempatan Tenaga Kerja dan
                        Transmigrasi, mempunyai tugas
                        pokok menyelenggarakan penyusunan
                        bahan kebijakan teknis,
                        penyelenggaraan, fasilitasi,
                        pembinaan dan pengendalian kegiatan
                        pelatihan kerja dan produktivitas
                        tenaga kerja, penempatan tenaga kerja
                        dan transmigrasi.

                    </p>


                </div>


                <div class="rincian-title">

                    Rincian Tugas

                </div>


                <ol class="task-list">


                    <li>
                        <span class="task-number">1</span>
                        <span>
                            Menyelenggarakan penyusunan rencana
                            program kerja dan target kinerja
                            Bidang Pelatihan, Produktivitas,
                            Penempatan Tenaga Kerja dan
                            Transmigrasi sesuai perjanjian kinerja;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">2</span>
                        <span>
                            Melaksanakan perumusan strategi
                            pelaksanaan pencapaian target kinerja
                            termasuk di dalamnya pembentukan
                            tim kerja dan pelibatan jabatan-jabatan
                            yang diperlukan dalam pencapaian
                            target kinerja;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">3</span>
                        <span>
                            Menyelenggarakan penyusunan bahan
                            kebijakan teknis bidang pelatihan
                            kerja dan produktivitas tenaga kerja,
                            penempatan tenaga kerja dan transmigrasi;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">4</span>
                        <span>
                            Menyelenggarakan penyusunan rencana
                            tenaga kerja baik makro maupun mikro;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">5</span>
                        <span>
                            Menyelenggarakan dan mengoordinasikan
                            pelaksanaan pelatihan kerja berdasarkan
                            unit kompetensi;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">6</span>
                        <span>
                            Mengoordinasikan penyelenggaraan
                            fasilitasi bantuan bagi aspek tenaga
                            mandiri, usaha mandiri, teknologi
                            tepat guna, pelatihan tenaga kerja
                            dan tenaga kerja sukarela;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">7</span>
                        <span>
                            Menyelenggarakan pembinaan lembaga
                            pelatihan kerja swasta;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">8</span>
                        <span>
                            Mengoordinasikan penyiapan bahan
                            rekomendasi perizinan dan pengawasan
                            pemenuhan rekomendasi untuk pendirian
                            Lembaga Pelatihan Kerja (LPK),
                            Lembaga Penempatan Tenaga Kerja
                            Swasta (LPTKS) dalam satu Daerah,
                            Bursa Kerja Khusus (BKK) dan
                            penyelenggaraan bursa kerja, serta
                            pemberian Izin Mempekerjakan Tenaga
                            Asing (IMTA);
                        </span>
                    </li>


                    <li>
                        <span class="task-number">9</span>
                        <span>
                            Menyelenggarakan konsultasi
                            produktivitas pada perusahaan kecil;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">10</span>
                        <span>
                            Menyelenggarakan pengukuran dan upaya
                            peningkatan produktivitas kerja
                            tingkat daerah;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">11</span>
                        <span>
                            Menyelenggarakan pelayanan antarkerja
                            di daerah;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">12</span>
                        <span>
                            Menyelenggarakan pengelolaan
                            informasi pasar kerja;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">13</span>
                        <span>
                            Mengoordinasikan penyelenggaraan
                            perlindungan Pekerja Migran Indonesia
                            pra dan purna penempatan di daerah;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">14</span>
                        <span>
                            Mempromosikan kesertaaan dalam
                            program transmigrasi;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">15</span>
                        <span>
                            Mengoordinasikan penjajakan kawasan
                            transmigrasi serta penyusunan konsep
                            kerjasama antar daerah dalam bidang
                            transmigrasi;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">16</span>
                        <span>
                            Mengoordinasikan fasilitasi pengiriman
                            dan pendampingan calon transmigran
                            ke wilayah penempatan;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">17</span>
                        <span>
                            Mengoordinasikan monitoring dan evaluasi
                            transmigran ke wilayah penempatan;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">18</span>
                        <span>
                            Melaksanakan pemantauan, evaluasi dan
                            pelaporan yang berkaitan dengan tugas
                            Bidang Pelatihan, Produktivitas,
                            Penempatan Tenaga Kerja dan Transmigrasi;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">19</span>
                        <span>
                            Melaksanakan pembinaan kinerja jabatan
                            fungsional dan jabatan pelaksana yang
                            ditempatkan di Bidang Pelatihan,
                            Produktivitas, Penempatan Tenaga
                            Kerja dan Transmigrasi;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">20</span>
                        <span>
                            Melaksanakan penyediaan dukungan sarana
                            dan prasarana, tata kelola serta sumber
                            daya dalam rangka pencapaian target
                            kinerja oleh jabatan fungsional dan
                            jabatan pelaksana yang berada di bawahnya;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">21</span>
                        <span>
                            Melaksanakan koordinasi dengan unit
                            kerja terkait; dan
                        </span>
                    </li>


                    <li>
                        <span class="task-number">22</span>
                        <span>
                            Melaksanakan tugas kedinasan lain
                            sesuai dengan tugas dan fungsinya.
                        </span>
                    </li>


                </ol>


            </div>


        </article>


        <!-- =================================================
             BIDANG HUBUNGAN INDUSTRIAL
        ================================================== -->

        <article
            class="tupoksi-card green-card"
            id="hubungan-industrial"
        >


            <div
                class="tupoksi-header"
                onclick="toggleCard(this)"
            >


                <div class="header-left">


                    <div class="number-icon">

                        06

                    </div>


                    <div>

                        <h3>

                            Bidang Hubungan
                            Industrial

                        </h3>


                        <p>

                            Pembinaan dan pengendalian
                            hubungan industrial

                        </p>

                    </div>


                </div>


                <div class="toggle-icon">

                    ▾

                </div>


            </div>


            <div class="tupoksi-body">


                <div class="tugas-pokok">


                    <div class="tugas-label">

                        Tugas Pokok

                    </div>


                    <p>

                        Bidang Hubungan Industrial mempunyai
                        tugas pokok menyelenggarakan penyusunan
                        bahan kebijakan teknis, penyelenggaraan,
                        fasilitasi, pembinaan dan pengendalian
                        hubungan industrial.

                    </p>


                </div>


                <div class="rincian-title">

                    Rincian Tugas

                </div>


                <ol class="task-list">


                    <li>
                        <span class="task-number">1</span>
                        <span>
                            Menyelenggarakan penyusunan rencana
                            program kerja dan target kinerja
                            Bidang Hubungan Industrial sesuai
                            perjanjian kinerja;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">2</span>
                        <span>
                            Melaksanakan perumusan strategi
                            pelaksanaan pencapaian target
                            kinerja termasuk di dalamnya
                            pembentukan tim kerja dan pelibatan
                            jabatan-jabatan yang diperlukan
                            dalam pencapaian target kinerja;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">3</span>
                        <span>
                            Menyelenggarakan penyusunan bahan
                            kebijakan teknis dalam bidang
                            pembinaan hubungan industrial;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">4</span>
                        <span>
                            Mengoordinasikan pengkajian materi
                            permohonan pengesahan peraturan
                            perusahaan;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">5</span>
                        <span>
                            Mengoordinasikan penerimaan, penelitian
                            dan pencatatan Perjanjian Kerja Bersama
                            (PKB) antara pengusaha dengan serikat
                            buruh atau pekerja serta pengusaha
                            dengan pekerja/buruh pada perusahaan;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">6</span>
                        <span>
                            Menyelenggarakan bimbingan sistem
                            pengupahan serta penyusunan usulan
                            ketetapan upah minimum;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">7</span>
                        <span>
                            Mengoordinasikan pencegahan dan
                            penyelesaian perselisihan hubungan
                            industrial, mogok kerja dan penutupan
                            perusahaan;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">8</span>
                        <span>
                            Menyelenggarakan verifikasi dan
                            rekapitulasi keanggotaan pada organisasi
                            pengusaha maupun federasi dan
                            konfederasi serikat pekerja/serikat
                            buruh;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">9</span>
                        <span>
                            Mengoordinasikan operasional lembaga
                            kerjasama Tripartit di lingkup daerah;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">10</span>
                        <span>
                            Menyelenggarakan pendataan, pengembangan
                            dan pembinaan kepesertaan jaminan sosial
                            ketenagakerjaan dan penyelenggaraan
                            kesejahteraan pekerja/buruh;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">11</span>
                        <span>
                            Mengoordinasikan penyiapan bahan
                            rekomendasi perizinan dan pengawasan
                            pemenuhan rekomendasi di Bidang
                            Hubungan Industrial;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">12</span>
                        <span>
                            Melaksanakan pemantauan, evaluasi dan
                            pelaporan yang berkaitan dengan tugas
                            Bidang Hubungan Industrial;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">13</span>
                        <span>
                            Melaksanakan pembinaan kinerja jabatan
                            fungsional dan jabatan pelaksana yang
                            ditempatkan di Bidang Hubungan Industrial;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">14</span>
                        <span>
                            Melaksanakan penyediaan dukungan sarana
                            dan prasarana, tata kelola serta sumber
                            daya dalam rangka pencapaian target
                            kinerja oleh jabatan fungsional dan
                            jabatan pelaksana yang berada di bawahnya;
                        </span>
                    </li>


                    <li>
                        <span class="task-number">15</span>
                        <span>
                            Melaksanakan koordinasi dengan unit
                            kerja terkait; dan
                        </span>
                    </li>


                    <li>
                        <span class="task-number">16</span>
                        <span>
                            Melaksanakan tugas kedinasan lain
                            sesuai dengan tugas dan fungsinya.
                        </span>
                    </li>


                </ol>


            </div>


        </article>


        <!-- =================================================
             NOTE
        ================================================== -->

        <div class="bottom-note">


            <div class="bottom-note-icon">

                i

            </div>


            <div>


                <h4>

                    Informasi Tugas Pokok dan Fungsi

                </h4>


                <p>

                    Halaman ini menyajikan tugas pokok
                    dan rincian tugas berdasarkan materi
                    Tupoksi yang diberikan untuk
                    Dinas Tenaga Kerja Kota Tasikmalaya.

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
     JAVASCRIPT
===================================================== -->

<script>


    /* =====================================================
       ACCORDION
    ===================================================== */

    function toggleCard(header) {

        const card =
            header.closest('.tupoksi-card');


        card.classList.toggle('open');

    }


    /* =====================================================
       DARK MODE
    ===================================================== */

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