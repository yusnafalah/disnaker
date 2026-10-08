<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lowongan Kerja - Disnaker Tasikmalaya</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            color: #333;
        }

        /* =========================
           NAVBAR
        ========================= */

        nav {
            background: #ffffff;
            padding: 14px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

.brand {
    display: flex;
    align-items: center;
    text-decoration: none;
}

.brand img {
    width: auto;
    height: 48px;
    max-width: 230px;
    object-fit: contain;
}
        

        .brand span {
            color: #2563eb;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-menu a {
            color: #2563eb;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
            padding: 9px 14px;
            border-radius: 6px;
            transition: background 0.2s ease, color 0.2s ease;
        }

        .nav-menu a:hover {
            background: #eff6ff;
            color: #1d4ed8;
        }

        /* =========================
           CONTAINER
        ========================= */

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 50px 20px 60px;
        }

        h1 {
            text-align: center;
            margin: 0 0 10px;
            color: #222;
        }

        .description {
            text-align: center;
            color: #666;
            margin: 0 0 30px;
        }

        /* =========================
           SEARCH
        ========================= */

        .search-box {
            max-width: 700px;
            margin: 0 auto 15px;
        }

        .search-box form {
            width: 100%;
        }

        .search-box input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 16px;
        }

        .search-box input:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        /* =========================
           COUNT
        ========================= */

        .job-count {
            max-width: 700px;
            margin: 0 auto 25px;
            color: #666;
            font-size: 14px;
        }

        /* =========================
           API STATUS
        ========================= */

        #api-status {
            max-width: 700px;
            margin: 0 auto 25px;
            padding: 12px 15px;
            background: #fff7ed;
            color: #9a3412;
            border-radius: 7px;
            font-size: 14px;
        }

        /* =========================
           JOB GRID
        ========================= */

        .jobs {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        /* =========================
           JOB CARD
        ========================= */

        .job-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .job-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.10);
        }

        .job-card h2 {
            margin: 0 0 12px;
            color: #2563eb;
            font-size: 21px;
        }

        .job-card p {
            margin: 7px 0;
            color: #555;
        }

        .description-job {
            line-height: 1.6;
            margin-top: 15px !important;
            flex-grow: 1;
        }

        /* =========================
           JOB META
        ========================= */

        .job-meta {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e5e7eb;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .meta-item {
            font-size: 13px;
            color: #666;
        }

        .meta-item strong {
            display: block;
            color: #374151;
            margin-top: 3px;
        }

        /* =========================
           BUTTON
        ========================= */

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 11px 18px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            font-weight: bold;
            text-align: center;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        /* =========================
           EMPTY
        ========================= */

        .empty {
            text-align: center;
            padding: 45px 20px;
            background: white;
            border-radius: 10px;
            color: #666;
            grid-column: 1 / -1;
        }

        .empty h3 {
            margin-top: 0;
            color: #374151;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #111827;
            color: white;
            text-align: center;
            padding: 30px 20px;
            margin-top: 30px;
            font-size: 14px;
        }

        footer p {
            margin: 6px 0;
        }

        .footer-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .footer-copy {
            color: #9ca3af;
            font-size: 13px;
            margin-top: 12px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 600px) {

            nav {
                padding: 12px 20px;
                flex-direction: column;
                gap: 10px;
            }

            .brand {
                font-size: 18px;
            }

            .brand img {
                width: 40px;
                height: 40px;
            }

            .nav-menu {
                gap: 4px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .nav-menu a {
                padding: 8px 10px;
                font-size: 14px;
            }

            .container {
                padding: 35px 15px 45px;
            }

            .job-meta {
                grid-template-columns: 1fr;
            }

            .job-card {
                padding: 20px;
            }

            footer {
                padding: 25px 20px;
            }

            .footer-title {
                font-size: 17px;
            }

            .footer-copy {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

    <!-- =========================
         NAVBAR
    ========================= -->

    <nav>

<a href="{{ url('/') }}" class="brand">

    <img
        src="https://disnaker.tasikmalayakota.go.id/front/img/logo.png"
        alt="Logo Disnaker Tasikmalaya"
    >

</a>

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


    <!-- =========================
         CONTENT
    ========================= -->

    <div class="container">

        <h1>
            Lowongan Kerja
        </h1>

        <p class="description">
            Temukan informasi lowongan pekerjaan yang tersedia
            di Tasikmalaya.
        </p>


        <!-- SEARCH -->

        <div class="search-box">

            <form
                action="{{ url('/lowongan') }}"
                method="GET"
            >

                <input
                    type="text"
                    name="search"
                    value="{{ $search }}"
                    placeholder="Cari posisi, perusahaan, atau lokasi..."
                >

            </form>

        </div>


        <!-- COUNT -->

        <div
            id="job-count"
            class="job-count"
        >
            {{ count($jobs) }} lowongan ditemukan
        </div>


        <!-- API STATUS -->

        @if(empty($jobs))

            <div id="api-status">

                Data lowongan belum tersedia dari backend.

            </div>

        @endif


        <!-- JOB LIST -->

        <div class="jobs">

            @forelse($jobs as $job)

                <div class="job-card">

                    <h2>
                        {{ $job['title'] ?? 'Judul tidak tersedia' }}
                    </h2>

                    <p>
                        <strong>Perusahaan:</strong>

                        {{ $job['company']['name'] ?? 'Nama perusahaan tidak tersedia' }}
                    </p>

                    <p>
                        <strong>Lokasi:</strong>

                        {{ $job['location'] ?? 'Lokasi tidak tersedia' }}
                    </p>

                    <p class="description-job">

                        {{ $job['description'] ?? 'Deskripsi tidak tersedia' }}

                    </p>

                    <div class="job-meta">

                        <div class="meta-item">

                            Dipublikasikan

                            <strong>
                                {{ !empty($job['published_at'])
                                    ? \Carbon\Carbon::parse($job['published_at'])->translatedFormat('d F Y')
                                    : '-' }}
                            </strong>

                        </div>

                        <div class="meta-item">

                            Berlaku sampai

                            <strong>
                                {{ !empty($job['expires_at'])
                                    ? \Carbon\Carbon::parse($job['expires_at'])->translatedFormat('d F Y')
                                    : '-' }}
                            </strong>

                        </div>

                        <div class="meta-item">

                            Dilihat

                            <strong>
                                {{ $job['views'] ?? 0 }} kali
                            </strong>

                        </div>

                    </div>

                    <a
                        href="{{ url('/lowongan/' . ($job['id'] ?? '')) }}"
                        class="btn"
                    >
                        Lihat Detail
                    </a>

                </div>

            @empty

                <div class="empty">

                    <h3>
                        Lowongan Tidak Ditemukan
                    </h3>

                    <p>
                        Belum ada lowongan yang tersedia.
                    </p>

                </div>

            @endforelse

        </div>

    </div>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>

        <p class="footer-title">
            Disnaker Tasikmalaya
        </p>

        <p>
            Website Informasi Ketenagakerjaan
        </p>

        <p class="footer-copy">
            &copy; 2026 Disnaker Tasikmalaya. Semua hak dilindungi.
        </p>

    </footer>

</body>

</html>
```