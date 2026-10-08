<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Lamar Lowongan - Disnaker Tasikmalaya
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
                0 2px 8px
                rgba(0, 0, 0, 0.08);

            position: sticky;

            top: 0;

            z-index: 1000;
        }


        /* =========================
           LOGO KIRI
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
           MENU KANAN
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
            max-width: 800px;

            margin: 0 auto;

            padding:
                45px
                20px
                60px;
        }


        /* =========================
           CARD
        ========================= */

        .form-card {
            background: white;

            padding: 35px;

            border-radius: 14px;

            box-shadow:
                0 3px 12px
                rgba(0, 0, 0, 0.08);
        }


        h1 {
            margin-top: 0;

            margin-bottom: 10px;

            color: #1d4ed8;
        }


        .subtitle {
            color: #666;

            margin-top: 0;

            margin-bottom: 30px;
        }


        /* =========================
           JOB INFO
        ========================= */

        .job-info {
            background: #f8fafc;

            border-left:
                4px solid #2563eb;

            padding: 18px;

            margin-bottom: 30px;

            border-radius: 8px;
        }


        .job-info h2 {
            margin:
                0
                0
                10px;

            color: #222;

            font-size: 21px;
        }


        .job-info p {
            margin: 7px 0;

            color: #555;
        }


        /* =========================
           FORM
        ========================= */

        .form-group {
            margin-bottom: 20px;
        }


        label {
            display: block;

            margin-bottom: 8px;

            font-weight: bold;

            color: #374151;
        }


        input,
        textarea,
        select {
            width: 100%;

            padding:
                13px
                14px;

            border:
                1px solid #d1d5db;

            border-radius: 8px;

            font-family:
                Arial,
                sans-serif;

            font-size: 15px;

            transition:
                border-color 0.2s ease,
                box-shadow 0.2s ease;
        }


        input:focus,
        textarea:focus,
        select:focus {
            outline: none;

            border-color: #2563eb;

            box-shadow:
                0 0 0 3px
                rgba(37, 99, 235, 0.10);
        }


        textarea {
            min-height: 140px;

            resize: vertical;
        }


        /* =========================
           BUTTON
        ========================= */

        .btn-submit {
            width: 100%;

            padding:
                13px
                20px;

            border: none;

            background: #2563eb;

            color: white;

            border-radius: 8px;

            cursor: pointer;

            font-size: 16px;

            font-weight: bold;

            transition:
                background 0.2s ease;
        }


        .btn-submit:hover {
            background: #1d4ed8;
        }


        /* =========================
           NOTICE
        ========================= */

        .notice {
            margin-top: 20px;

            padding:
                14px
                16px;

            background: #fff7ed;

            color: #9a3412;

            border-radius: 8px;

            font-size: 14px;

            line-height: 1.6;
        }


        /* =========================
           BACK
        ========================= */

        .back {
            display: inline-block;

            margin-bottom: 20px;

            color: #2563eb;

            text-decoration: none;
        }


        .back:hover {
            text-decoration: underline;
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

                gap: 4px;

                flex-wrap: wrap;

                justify-content: center;

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


            .form-card {
                padding: 22px;
            }


            h1 {
                font-size: 26px;
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


    <!-- KEMBALI KE DETAIL -->

    <a
        href="{{ url('/lowongan/' . ($job['id'] ?? '')) }}"
        class="back"
    >

        ← Kembali ke Detail Lowongan

    </a>


    <div class="form-card">


        <h1>

            Lamar Lowongan

        </h1>


        <p class="subtitle">

            Isi data berikut untuk mengajukan lamaran pekerjaan.

        </p>


        @if ($job)


            <!-- =================================================
                 INFORMASI LOWONGAN
            ================================================= -->

            <div class="job-info">


                <h2>

                    {{ $job['title'] ?? '-' }}

                </h2>


                <p>

                    <strong>
                        Perusahaan:
                    </strong>

                    {{ $job['company']['name'] ?? '-' }}

                </p>


                <p>

                    <strong>
                        Lokasi:
                    </strong>

                    {{ $job['location'] ?? '-' }}

                </p>


            </div>


            <!-- =================================================
                 FORM LAMAR
            ================================================= -->

            <form
                onsubmit="return prosesLamaran(event)"
            >


                <!-- NAMA -->

                <div class="form-group">


                    <label for="nama">

                        Nama Lengkap

                    </label>


                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        placeholder="Masukkan nama lengkap"
                        required
                    >


                </div>


                <!-- EMAIL -->

                <div class="form-group">


                    <label for="email">

                        Email

                    </label>


                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Masukkan alamat email"
                        required
                    >


                </div>


                <!-- TELEPON -->

                <div class="form-group">


                    <label for="telepon">

                        Nomor Telepon

                    </label>


                    <input
                        type="tel"
                        id="telepon"
                        name="telepon"
                        placeholder="Masukkan nomor telepon"
                        required
                    >


                </div>


                <!-- PENDIDIKAN -->

                <div class="form-group">


                    <label for="pendidikan">

                        Pendidikan Terakhir

                    </label>


                    <select
                        id="pendidikan"
                        name="pendidikan"
                        required
                    >


                        <option value="">

                            Pilih pendidikan

                        </option>


                        <option value="SMA/SMK">

                            SMA / SMK

                        </option>


                        <option value="D3">

                            D3

                        </option>


                        <option value="S1">

                            S1

                        </option>


                        <option value="S2">

                            S2

                        </option>


                    </select>


                </div>


                <!-- PESAN -->

                <div class="form-group">


                    <label for="pesan">

                        Pesan / Motivasi

                    </label>


                    <textarea
                        id="pesan"
                        name="pesan"
                        placeholder="Tuliskan motivasi Anda untuk melamar pekerjaan ini..."
                        required
                    ></textarea>


                </div>


                <!-- SUBMIT -->

                <button
                    type="submit"
                    class="btn-submit"
                >

                    Kirim Lamaran

                </button>


            </form>


            <!-- =================================================
                 NOTICE
            ================================================= -->


        @else


            <!-- =================================================
                 LOWONGAN TIDAK DITEMUKAN
            ================================================= -->

            <div class="job-info">


                <h2>

                    Lowongan Tidak Ditemukan

                </h2>


                <p>

                    Lowongan yang ingin Anda lamar tidak tersedia.

                </p>


            </div>


        @endif


    </div>


</div>


<script>


    /*
    |--------------------------------------------------------------------------
    | PROSES FORM LAMARAN
    |--------------------------------------------------------------------------
    */

    function prosesLamaran(event) {


        event.preventDefault();


        alert(

            'Form lamaran berhasil diisi. ' +
            'Pengiriman ke server belum tersedia.'

        );


        return false;

    }


</script>


</body>

</html>