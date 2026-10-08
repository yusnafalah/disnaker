<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Detail Lowongan - Disnaker Tasikmalaya
    </title>


    <style>

        * {
            box-sizing: border-box;
        }


        body {
            margin: 0;

            font-family:
                Arial,
                sans-serif;

            background: #f5f6fa;

            color: #333;
        }


        /* =========================
           NAVBAR
        ========================= */

        nav {
            width: 100%;

            height: 76px;

            background: #ffffff;

            padding: 0 40px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            border-bottom: 1px solid #e5e7eb;

            box-shadow:
                0 2px 8px rgba(0, 0, 0, 0.08);

            position: sticky;

            top: 0;

            z-index: 1000;
        }


        /* =========================
           LOGO
        ========================= */

        .brand {
            display: flex;

            align-items: center;

            justify-content: flex-start;

            text-decoration: none;

            flex-shrink: 0;

            width: auto;
        }


        .brand img {
            display: block;

            width: auto;

            height: 48px;

            max-width: 230px;

            object-fit: contain;
        }


        /* =========================
           MENU
        ========================= */

        .nav-menu {
            display: flex;

            align-items: center;

            justify-content: flex-end;

            gap: 8px;

            margin-left: auto;
        }


        .nav-menu a {
            color: #2563eb;

            text-decoration: none;

            font-size: 15px;

            font-weight: 600;

            padding: 9px 14px;

            border-radius: 6px;

            transition:
                background 0.2s ease,
                color 0.2s ease;
        }


        .nav-menu a:hover {
            background: #eff6ff;

            color: #1d4ed8;
        }


        /* =========================
           CONTAINER
        ========================= */

        .container {
            max-width: 950px;

            margin: 0 auto;

            padding:
                45px
                20px
                60px;
        }


        /* =========================
           CONTENT
        ========================= */

        .card {
            background: white;

            padding: 35px;

            border-radius: 14px;

            box-shadow:
                0 3px 12px
                rgba(0, 0, 0, 0.08);
        }


        .job-header {
            border-bottom:
                1px solid #e5e7eb;

            padding-bottom: 25px;

            margin-bottom: 25px;
        }


        .job-title {
            margin:
                0
                0
                10px;

            color: #1d4ed8;

            font-size: 32px;
        }


        .company {
            font-size: 18px;

            font-weight: bold;

            color: #374151;
        }


        /* =========================
           JOB INFORMATION
        ========================= */

        .job-info {
            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 15px;

            margin-bottom: 30px;
        }


        .info-box {
            background: #f8fafc;

            padding: 16px;

            border-radius: 9px;
        }


        .info-label {
            display: block;

            font-size: 13px;

            color: #6b7280;

            margin-bottom: 5px;
        }


        .info-value {
            font-weight: bold;

            color: #374151;
        }


        /* =========================
           DESCRIPTION
        ========================= */

        .section {
            margin-top: 30px;
        }


        .section h3 {
            margin-top: 0;

            margin-bottom: 12px;

            color: #222;
        }


        .description {
            line-height: 1.8;

            color: #555;
        }


        /* =========================
           COMPANY
        ========================= */

        .company-info {
            margin-top: 35px;

            padding: 25px;

            background: #f8fafc;

            border-radius: 10px;
        }


        .company-info p {
            margin: 10px 0;

            line-height: 1.6;
        }


        .company-website {
            color: #2563eb;

            text-decoration: none;
        }


        .company-website:hover {
            text-decoration: underline;
        }


        /* =========================
           BUTTON
        ========================= */

        .actions {
            margin-top: 35px;

            display: flex;

            align-items: center;

            gap: 20px;

            flex-wrap: wrap;
        }


        .btn {
            display: inline-block;

            padding: 13px 24px;

            background: #2563eb;

            color: white;

            text-decoration: none;

            border-radius: 8px;

            font-weight: bold;

            transition:
                background 0.2s ease;
        }


        .btn:hover {
            background: #1d4ed8;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 600px) {


            nav {
                height: auto;

                min-height: 70px;

                padding:
                    12px
                    20px;

                flex-direction: column;

                gap: 10px;
            }


            .brand {
                width: 100%;

                justify-content: flex-start;
            }


            .brand img {
                height: 42px;

                max-width: 200px;
            }


            .nav-menu {
                width: 100%;

                justify-content: center;

                gap: 4px;

                flex-wrap: wrap;

                margin-left: 0;
            }


            .nav-menu a {
                padding:
                    8px
                    10px;

                font-size: 14px;
            }


            .container {
                padding:
                    30px
                    15px
                    45px;
            }


            .card {
                padding: 22px;
            }


            .job-title {
                font-size: 25px;
            }


            .job-info {
                grid-template-columns: 1fr;
            }


            .actions {
                flex-direction: column;

                align-items: stretch;
            }


            .btn {
                text-align: center;
            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<nav>


    <!-- LOGO RESMI -->

    <a
        href="{{ url('/') }}"
        class="brand"
    >

        <img
            src="https://disnaker.tasikmalayakota.go.id/front/img/logo.png"
            alt="Logo Disnaker Tasikmalaya"
        >

    </a>


    <!-- MENU -->

    <div class="nav-menu">


        <a href="{{ url('/') }}">

            Beranda

        </a>


        <a href="{{ url('/lowongan') }}">

            Lowongan Kerja

        </a>


        <a href="{{ url('/tentang') }}">

            Tentang

        </a>


    </div>


</nav>


<!-- =====================================================
     CONTAINER
===================================================== -->

<div class="container">


    <!-- =================================================
         DETAIL LOWONGAN
    ================================================= -->

    <div class="card">


        <!-- =================================================
             HEADER LOWONGAN
        ================================================= -->

        <div class="job-header">


            <h1 class="job-title">

                {{ $job['title'] ?? '-' }}

            </h1>


            <div class="company">

                {{ $job['company']['name'] ?? '-' }}

            </div>


        </div>


        <!-- =================================================
             INFORMASI LOWONGAN
        ================================================= -->

        <div class="job-info">


            <!-- LOKASI -->

            <div class="info-box">


                <span class="info-label">

                    📍 Lokasi

                </span>


                <span class="info-value">

                    {{ $job['location'] ?? '-' }}

                </span>


            </div>


            <!-- VIEWS -->

            <div class="info-box">


                <span class="info-label">

                    👁 Dilihat

                </span>


                <span class="info-value">

                    {{ $job['views'] ?? 0 }}

                </span>


            </div>


            <!-- PUBLISHED -->

            <div class="info-box">


                <span class="info-label">

                    📅 Dipublikasikan

                </span>


                <span class="info-value">

                    @if (!empty($job['published_at']))

                    {{ \Carbon\Carbon::parse($job['published_at'])->translatedFormat('d F Y') }}

                    @else

                    -

                    @endif

                </span>


            </div>


            <!-- EXPIRED -->

            <div class="info-box">


                <span class="info-label">

                    ⏰ Berlaku sampai

                </span>


                <span class="info-value">

                    @if (!empty($job['expires_at']))

                    {{ \Carbon\Carbon::parse($job['expires_at'])->translatedFormat('d F Y') }}

                    @else

                    -

                    @endif

                </span>


            </div>


        </div>


        <!-- =================================================
             DESKRIPSI
        ================================================= -->

        <div class="section">


            <h3>

                Deskripsi Pekerjaan

            </h3>


            <div class="description">

                @if (!empty($job['description']))

                    {!! nl2br(e($job['description'])) !!}

                @else

                    -

                @endif

            </div>


        </div>


        <!-- =================================================
             INFORMASI PERUSAHAAN
        ================================================= -->

        <div class="company-info">


            <h3>

                Informasi Perusahaan

            </h3>


            <!-- NAMA -->

            <p>

                <strong>
                    Nama:
                </strong>


                {{ $job['company']['name'] ?? '-' }}

            </p>


            <!-- ALAMAT -->

            <p>

                <strong>
                    Alamat:
                </strong>


                {{ $job['company']['address'] ?? '-' }}

            </p>


            <!-- WEBSITE -->

            <p>

                <strong>
                    Website:
                </strong>


                @if (!empty($job['company']['website']))

                    <a
                        class="company-website"
                        href="{{ $job['company']['website'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        {{ $job['company']['website'] }}

                    </a>

                @else

                    -

                @endif

            </p>


        </div>


        <!-- =================================================
             ACTION
        ================================================= -->

        <div class="actions">


            <a
                href="{{ url('/lowongan/' . ($job['id'] ?? '') . '/lamar') }}"
                class="btn"
            >

                Lamar Sekarang

            </a>


        </div>


    </div>


</div>


</body>

</html>