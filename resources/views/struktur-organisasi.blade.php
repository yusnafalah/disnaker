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
        content="Struktur Organisasi Dinas Tenaga Kerja Kota Tasikmalaya"
    >

    <title>
        Struktur Organisasi - Disnaker Kota Tasikmalaya
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

            background:
                transparent;

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

            opacity:
                0;

            visibility:
                hidden;

            pointer-events:
                none;

            transition:
                opacity .2s ease,
                transform .2s ease;

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

            transition:
                .2s ease;
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
                68px 5% 52px;

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
                1.25fr .75fr;

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
                7px;

            background:
                var(--surface-blue);

            color:
                var(--primary);

            padding:
                8px 13px;

            border-radius:
                999px;

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
                clamp(37px, 5vw, 58px);

            line-height:
                1.05;

            letter-spacing:
                -1.6px;

            color:
                var(--text);
        }


        .hero-title span {

            display:
                block;

            color:
                var(--primary);
        }


        .hero-description {

            max-width:
                770px;

            margin:
                19px 0 0;

            color:
                var(--text-soft);

            font-size:
                16px;

            line-height:
                1.75;
        }


        .hero-stat {

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


        .hero-stat-top {

            display:
                flex;

            align-items:
                center;

            gap:
                12px;

            margin-bottom:
                14px;
        }


        .hero-icon {

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

            font-size:
                19px;

            font-weight:
                700;
        }


        .hero-stat small {

            display:
                block;

            color:
                var(--text-muted);

            font-size:
                10px;

            text-transform:
                uppercase;

            letter-spacing:
                .7px;
        }


        .hero-stat strong {

            display:
                block;

            color:
                var(--text);

            font-size:
                19px;

            margin-top:
                3px;
        }


        .hero-stat p {

            margin:
                0;

            color:
                var(--text-soft);

            font-size:
                11px;

            line-height:
                1.6;
        }


        /* =====================================================
           MAIN STRUCTURE SECTION
        ===================================================== */

        .structure-section {

            padding:
                65px 5% 80px;

            background:
                var(--bg);
        }


        .structure-container {

            max-width:
                1200px;

            margin:
                auto;
        }


        .section-heading {

            margin-bottom:
                30px;

            text-align:
                center;
        }


        .section-heading small {

            display:
                block;

            color:
                var(--primary);

            font-size:
                11px;

            font-weight:
                700;

            text-transform:
                uppercase;

            letter-spacing:
                .8px;

            margin-bottom:
                8px;
        }


        .section-heading h2 {

            margin:
                0;

            font-size:
                30px;

            color:
                var(--text);
        }


        .section-heading p {

            max-width:
                720px;

            margin:
                10px auto 0;

            color:
                var(--text-soft);

            font-size:
                13px;

            line-height:
                1.65;
        }


        /* =====================================================
           ORGANIZATION CHART
        ===================================================== */

        .org-chart {

            position:
                relative;

            margin-top:
                38px;
        }


        /* =====================================================
           KEPALA DINAS
        ===================================================== */

        .head-node {

            width:
                360px;

            max-width:
                100%;

            margin:
                0 auto;

            position:
                relative;

            z-index:
                3;
        }


        .org-card {

            background:
                var(--surface);

            border:
                1px solid var(--border);

            border-radius:
                18px;

            box-shadow:
                var(--shadow-sm);

            padding:
                19px;
        }


        .head-node .org-card {

            background:
                linear-gradient(
                    135deg,
                    #0b45a7,
                    #155eef
                );

            border:
                none;

            color:
                white;

            box-shadow:
                0 20px 45px
                rgba(21,94,239,.20);
        }


        .node-label {

            font-size:
                10px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                .8px;

            color:
                var(--primary);

            margin-bottom:
                8px;
        }


        .head-node .node-label {

            color:
                rgba(255,255,255,.78);
        }


        .org-name {

            font-size:
                18px;

            font-weight:
                800;

            line-height:
                1.3;

            color:
                var(--text);

        }


        .head-node .org-name {

            color:
                white;
        }


        .org-role {

            font-size:
                12px;

            color:
                var(--text-soft);

            line-height:
                1.5;

            margin-top:
                5px;
        }


        .head-node .org-role {

            color:
                rgba(255,255,255,.88);
        }


        .org-nip {

            display:
                inline-flex;

            margin-top:
                10px;

            padding:
                6px 9px;

            border-radius:
                8px;

            background:
                var(--surface-blue);

            color:
                var(--primary);

            font-size:
                9px;

            font-weight:
                700;
        }


        .head-node .org-nip {

            background:
                rgba(255,255,255,.13);

            color:
                white;
        }


        /* connector vertical */

        .head-node::after {

            content:
                "";

            position:
                absolute;

            left:
                50%;

            top:
                100%;

            height:
                36px;

            border-left:
                2px solid
                #bfd2ea;

            transform:
                translateX(-50%);
        }


        /* =====================================================
           SEKRETARIS
        ===================================================== */

        .secretary-wrap {

            width:
                100%;

            display:
                flex;

            justify-content:
                center;

            position:
                relative;

            margin-top:
                36px;

            padding-bottom:
                44px;
        }


        .secretary-wrap::after {

            content:
                "";

            position:
                absolute;

            width:
                2px;

            height:
                34px;

            background:
                #bfd2ea;

            bottom:
                0;

            left:
                50%;

            transform:
                translateX(-50%);
        }


        .secretary {

            width:
                380px;

            max-width:
                100%;

            position:
                relative;

            z-index:
                2;
        }


        .secretary .org-card {

            border-left:
                5px solid
                var(--primary);
        }


        /* =====================================================
           SEKRETARIAT
        ===================================================== */

        .secretariat-grid {

            position:
                relative;

            display:
                grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap:
                16px;

            padding-top:
                25px;

            margin-bottom:
                55px;
        }


        .secretariat-grid::before {

            content:
                "";

            position:
                absolute;

            top:
                0;

            left:
                16%;

            right:
                16%;

            height:
                2px;

            background:
                #bfd2ea;
        }


        .secretariat-item {

            position:
                relative;
        }


        .secretariat-item::before {

            content:
                "";

            position:
                absolute;

            width:
                2px;

            height:
                25px;

            background:
                #bfd2ea;

            top:
                -25px;

            left:
                50%;

            transform:
                translateX(-50%);
        }


        .secretariat-item .org-card {

            height:
                100%;
        }


        .card-top {

            display:
                flex;

            align-items:
                flex-start;

            gap:
                10px;

            margin-bottom:
                10px;
        }


        .card-icon {

            width:
                36px;

            height:
                36px;

            flex-shrink:
                0;

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

            font-size:
                14px;

            font-weight:
                800;
        }


        .org-card h3 {

            margin:
                0;

            font-size:
                14px;

            line-height:
                1.4;

            color:
                var(--text);
        }


        .org-card p {

            margin:
                0;

            font-size:
                11px;

            line-height:
                1.6;

            color:
                var(--text-soft);
        }


        .unit-type {

            display:
                inline-flex;

            margin-top:
                11px;

            background:
                var(--green-soft);

            color:
                var(--green);

            border-radius:
                999px;

            padding:
                5px 8px;

            font-size:
                8px;

            font-weight:
                700;
        }


        /* =====================================================
           AREA BIDANG
        ===================================================== */

        .division-area {

            margin-top:
                10px;

            position:
                relative;
        }


        .division-title {

            text-align:
                center;

            margin-bottom:
                25px;
        }


        .division-title span {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                7px;

            padding:
                8px 13px;

            border-radius:
                999px;

            background:
                var(--surface-blue);

            color:
                var(--primary);

            font-size:
                10px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                .5px;
        }


        .division-grid {

            display:
                grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap:
                17px;

            position:
                relative;
        }


        .division-grid::before {

            content:
                "";

            position:
                absolute;

            top:
                -18px;

            left:
                16.5%;

            right:
                16.5%;

            height:
                2px;

            background:
                #bfd2ea;
        }


        .division-item {

            position:
                relative;
        }


        .division-item::before {

            content:
                "";

            position:
                absolute;

            width:
                2px;

            height:
                18px;

            background:
                #bfd2ea;

            top:
                -18px;

            left:
                50%;

            transform:
                translateX(-50%);
        }


        .division-item .org-card {

            height:
                100%;

            border-top:
                4px solid
                var(--primary);
        }


        .division-item.green-node
        .org-card {

            border-top-color:
                var(--green);
        }


        .division-item.orange-node
        .org-card {

            border-top-color:
                #dd8b17;
        }


        .division-title-row {

            display:
                flex;

            gap:
                10px;

            align-items:
                flex-start;

            margin-bottom:
                13px;
        }


        .division-title-row h3 {

            margin:
                0;

            color:
                var(--text);

            font-size:
                14px;

            line-height:
                1.4;
        }


        .division-person {

            padding:
                11px;

            background:
                var(--surface-soft);

            border-radius:
                11px;

            margin-top:
                12px;
        }


        .division-person strong {

            display:
                block;

            color:
                var(--text);

            font-size:
                11px;

            line-height:
                1.45;
        }


        .division-person span {

            display:
                block;

            color:
                var(--text-muted);

            font-size:
                9px;

            margin-top:
                4px;

            line-height:
                1.45;
        }


        .functional-card {

            margin-top:
                12px;

            padding:
                10px;

            border:
                1px dashed
                #c5d4e7;

            border-radius:
                10px;

            background:
                var(--surface-soft);

            text-align:
                center;
        }


        .functional-card small {

            display:
                block;

            color:
                var(--text-muted);

            font-size:
                8px;

            line-height:
                1.5;

            text-transform:
                uppercase;

            letter-spacing:
                .3px;
        }


        .functional-card strong {

            display:
                block;

            color:
                var(--primary);

            font-size:
                9px;

            margin-top:
                3px;

            line-height:
                1.5;
        }


        /* =====================================================
           UPTD
        ===================================================== */

        .uptd-area {

            display:
                flex;

            justify-content:
                center;

            margin-top:
                28px;

            position:
                relative;
        }


        .uptd-area::before {

            content:
                "";

            position:
                absolute;

            top:
                -28px;

            left:
                50%;

            height:
                28px;

            border-left:
                2px solid
                #bfd2ea;

            transform:
                translateX(-50%);
        }


        .uptd-card {

            width:
                240px;

            text-align:
                center;

            background:
                var(--surface);

            border:
                1px solid var(--border);

            border-radius:
                16px;

            padding:
                18px;

            box-shadow:
                var(--shadow-sm);
        }


        .uptd-card .card-icon {

            margin:
                0 auto 10px;
        }


        .uptd-card h3 {

            margin:
                0;

            color:
                var(--text);

            font-size:
                14px;
        }


        .uptd-card p {

            margin:
                6px 0 0;

            color:
                var(--text-muted);

            font-size:
                9px;

            line-height:
                1.5;
        }


        /* =====================================================
           NOTE
        ===================================================== */

        .info-box {

            margin-top:
                35px;

            display:
                flex;

            align-items:
                flex-start;

            gap:
                12px;

            padding:
                17px;

            background:
                var(--surface);

            border:
                1px solid var(--border);

            border-radius:
                16px;

            box-shadow:
                var(--shadow-sm);
        }


        .info-icon {

            width:
                34px;

            height:
                34px;

            border-radius:
                10px;

            flex-shrink:
                0;

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


        .info-box h3 {

            margin:
                0 0 4px;

            color:
                var(--text);

            font-size:
                12px;
        }


        .info-box p {

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


            .hero-stat {

                max-width:
                    480px;
            }


            .secretariat-grid,
            .division-grid {

                grid-template-columns:
                    1fr 1fr;
            }


            .secretariat-grid::before,
            .division-grid::before {

                display:
                    none;
            }


            .secretariat-item::before,
            .division-item::before {

                display:
                    none;
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


            .head-node,
            .secretary {

                width:
                    100%;

                max-width:
                    420px;
            }


            .secretariat-grid,
            .division-grid {

                grid-template-columns:
                    1fr;
            }


            .division-grid {

                gap:
                    13px;
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
                    50px 20px 40px;
            }


            .structure-section {

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


            .secretariat-grid,
            .division-grid {

                grid-template-columns:
                    1fr;
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


            <!-- SP4N-LAPOR -->

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
     PAGE HERO
===================================================== -->

<section class="page-hero">


    <div class="hero-inner">


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
                Struktur Organisasi
            </strong>


        </div>


        <div class="hero-grid">


            <div>


                <div class="hero-kicker">

                    ● PROFIL DISNAKER
                    KOTA TASIKMALAYA

                </div>


                <h1 class="hero-title">

                    Struktur

                    <span>
                        Organisasi
                    </span>

                </h1>


                <p class="hero-description">

                    Struktur organisasi Dinas Tenaga Kerja
                    Kota Tasikmalaya yang terdiri atas
                    Kepala Dinas, Sekretaris Dinas,
                    bidang, sub bagian, kelompok jabatan
                    fungsional dan jabatan pelaksana,
                    serta UPTD.

                </p>


            </div>


            <div class="hero-stat">


                <div class="hero-stat-top">


                    <div class="hero-icon">

                        ▣

                    </div>


                    <div>

                        <small>
                            Struktur Organisasi
                        </small>

                        <strong>
                            Dinas Tenaga Kerja
                        </strong>

                    </div>


                </div>


                <p>

                    Tampilan struktur disajikan dalam
                    bentuk bagan hierarki digital agar
                    lebih mudah dibaca dan dipahami.

                </p>


            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     ORGANIZATION
===================================================== -->

<section class="structure-section">


    <div class="structure-container">


        <div class="section-heading">


            <small>
                Bagan Organisasi
            </small>


            <h2>
                Struktur Organisasi
                Dinas Tenaga Kerja
            </h2>


            <p>

                Hierarki berikut mengikuti susunan yang
                ditampilkan pada bagan struktur organisasi
                Dinas Tenaga Kerja Kota Tasikmalaya.

            </p>


        </div>


        <div class="org-chart">


            <!-- =================================================
                 KEPALA DINAS
            ================================================== -->

            <div class="head-node">


                <div class="org-card">


                    <div class="node-label">

                        Pimpinan

                    </div>


                    <div class="org-name">

                        Drs. H. Deni Diyana, M.Si

                    </div>


                    <div class="org-role">

                        KEPALA DINAS

                    </div>


                    <span class="org-nip">

                        NIP. 19750627 199403 1 002

                    </span>


                </div>


            </div>


            <!-- =================================================
                 SEKRETARIS
            ================================================== -->

            <div class="secretary-wrap">


                <div class="secretary">


                    <div class="org-card">


                        <div class="card-top">


                            <div class="card-icon">

                                S

                            </div>


                            <div>

                                <div class="node-label">

                                    Sekretariat

                                </div>


                                <h3>

                                    SEKRETARIS DINAS

                                </h3>

                            </div>


                        </div>


                        <p>

                            ARIF RAHMAN GULIAR,
                            S.Hut., M.Si.

                        </p>


                        <span class="org-nip">

                            NIP. 19790825 200604 1 019

                        </span>


                    </div>


                </div>

            </div>


            <!-- =================================================
                 SUB BAGIAN SEKRETARIAT
            ================================================== -->

            <div class="secretariat-grid">


                <!-- SUB BAGIAN UMUM -->

                <div class="secretariat-item">


                    <div class="org-card">


                        <div class="card-top">


                            <div class="card-icon">

                                01

                            </div>


                            <div>

                                <h3>

                                    Sub Bagian Umum
                                    dan Kepegawaian

                                </h3>

                            </div>


                        </div>


                        <p>

                            KIKING MUKTIJAKA,
                            S.Sos.

                        </p>


                        <span class="org-nip">

                            NIP. 19690702 199503 1 002

                        </span>


                        <span class="unit-type">

                            SUB BAGIAN

                        </span>


                    </div>

                </div>


                <!-- SUB BAGIAN PERENCANAAN -->

                <div class="secretariat-item">


                    <div class="org-card">


                        <div class="card-top">


                            <div class="card-icon">

                                02

                            </div>


                            <div>

                                <h3>

                                    Sub Bagian Perencanaan,
                                    Evaluasi, Pelaporan
                                    &amp; Keuangan

                                </h3>

                            </div>


                        </div>


                        <p>

                            RANI RACHMAWATI,
                            S.KM., M.M.

                        </p>


                        <span class="org-nip">

                            NIP. 19801029 200604 2 009

                        </span>


                        <span class="unit-type">

                            SUB BAGIAN

                        </span>


                    </div>

                </div>


                <!-- KELOMPOK JABATAN -->

                <div class="secretariat-item">


                    <div class="org-card">


                        <div class="card-top">


                            <div class="card-icon">

                                03

                            </div>


                            <div>

                                <h3>

                                    Kelompok Jabatan
                                    Fungsional dan
                                    Jabatan Pelaksana

                                </h3>

                            </div>


                        </div>


                        <p>

                            Kelompok jabatan fungsional
                            dan jabatan pelaksana.

                        </p>


                        <span class="unit-type">

                            KELOMPOK JABATAN

                        </span>


                    </div>

                </div>


            </div>


            <!-- =================================================
                 BIDANG
            ================================================== -->

            <div class="division-area">


                <div class="division-title">


                    <span>

                        ◈ BIDANG DAN UNIT PELAKSANA

                    </span>


                </div>


                <div class="division-grid">


                    <!-- =========================================
                         BIDANG PELATIHAN
                    ========================================== -->

                    <div class="division-item green-node">


                        <div class="org-card">


                            <div class="division-title-row">


                                <div class="card-icon">

                                    04

                                </div>


                                <h3>

                                    Bidang Pelatihan,
                                    Produktivitas,
                                    Penempatan Tenaga
                                    Kerja &amp; Transmigrasi

                                </h3>


                            </div>


                            <div class="division-person">


                                <strong>

                                    N. EROS NURYATI,
                                    S.Sos., M.Si

                                </strong>


                                <span>

                                    NIP. 19680420
                                    199801 2 003

                                </span>


                            </div>


                            <div class="functional-card">


                                <small>

                                    Kelompok Jabatan

                                </small>


                                <strong>

                                    Fungsional dan
                                    Jabatan Pelaksana

                                </strong>


                            </div>


                        </div>

                    </div>


                    <!-- =========================================
                         HUBUNGAN INDUSTRIAL
                    ========================================== -->

                    <div class="division-item">


                        <div class="org-card">


                            <div class="division-title-row">


                                <div class="card-icon">

                                    05

                                </div>


                                <h3>

                                    Bidang Hubungan
                                    Industrial

                                </h3>


                            </div>


                            <div class="division-person">


                                <strong>

                                    MASWATI,
                                    S.I.P., M.Si

                                </strong>


                                <span>

                                    NIP. 19701010
                                    200901 2 001

                                </span>


                            </div>


                            <div class="functional-card">


                                <small>

                                    Kelompok Jabatan

                                </small>


                                <strong>

                                    Fungsional dan
                                    Jabatan Pelaksana

                                </strong>


                            </div>


                        </div>

                    </div>


                    <!-- =========================================
                         KELOMPOK FUNGSIONAL UMUM
                    ========================================== -->

                    <div class="division-item orange-node">


                        <div class="org-card">


                            <div class="division-title-row">


                                <div class="card-icon">

                                    06

                                </div>


                                <h3>

                                    Kelompok Jabatan
                                    Fungsional dan
                                    Jabatan Pelaksana

                                </h3>


                            </div>


                            <div class="division-person">


                                <strong>

                                    Kelompok Jabatan
                                    Fungsional dan
                                    Jabatan Pelaksana

                                </strong>


                                <span>

                                    Posisi jabatan
                                    sebagaimana ditampilkan
                                    pada bagan organisasi.

                                </span>


                            </div>


                        </div>

                    </div>


                </div>


                <!-- =================================================
                     UPTD
                ================================================== -->

                <div class="uptd-area">


                    <div class="uptd-card">


                        <div class="card-icon">

                            U

                        </div>


                        <h3>

                            UPTD

                        </h3>


                        <p>

                            Unit Pelaksana Teknis Daerah
                            dalam struktur organisasi.

                        </p>


                    </div>


                </div>


            </div>


        </div>


        <!-- =================================================
             KETERANGAN
        ================================================== -->

        <div class="info-box">


            <div class="info-icon">

                i

            </div>


            <div>


                <h3>

                    Keterangan Struktur

                </h3>


                <p>

                    Tampilan digital ini mengubah bagan
                    organisasi pada dokumen referensi
                    menjadi kartu hierarki yang lebih
                    mudah dibaca di komputer maupun
                    perangkat mobile. Nama, jabatan,
                    dan nomor induk pegawai ditampilkan
                    mengikuti informasi yang terlihat
                    pada bagan sumber.

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