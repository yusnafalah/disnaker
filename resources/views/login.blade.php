<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Disnaker Tasikmalaya</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }


        body {
            margin: 0;

            min-height: 100vh;

            font-family: Arial, Helvetica, sans-serif;

            background:
                linear-gradient(
                    135deg,
                    #075bb5 0%,
                    #1875ca 45%,
                    #d9efff 100%
                );

            color: #ffffff;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 25px;
        }


        /* =================================
           CONTAINER UTAMA
        ================================= */

        .login-container {

            width: 100%;

            max-width: 1350px;

            min-height: 700px;

            display: grid;

            grid-template-columns: 1fr 1fr;

            background: #176bc0;

            border-radius: 28px;

            overflow: hidden;

            box-shadow:
                0 25px 60px
                rgba(0, 0, 0, 0.25);
        }


        /* =================================
           BAGIAN KIRI
        ================================= */

        .left-section {

            position: relative;

            padding: 45px 55px;

            display: flex;

            flex-direction: column;

            justify-content: space-between;

            background:
                linear-gradient(
                    160deg,
                    #1266ba 0%,
                    #2879c9 55%,
                    #4b8fd1 100%
                );

            overflow: hidden;
        }


        .circle {

            position: absolute;

            width: 80px;
            height: 80px;

            border-radius: 50%;

            background:
                rgba(255, 255, 255, 0.18);

            top: 125px;

            right: 70px;
        }


        .circle-small {

            position: absolute;

            width: 25px;
            height: 25px;

            border-radius: 50%;

            background:
                rgba(255, 255, 255, 0.2);

            top: 200px;

            left: 80px;
        }


        /* =================================
           MENU ATAS
        ================================= */

        .top-menu {

            display: flex;

            align-items: center;

            gap: 12px;

            position: relative;

            z-index: 2;

            flex-wrap: wrap;
        }


        .official {

            border:
                1px solid
                rgba(255, 255, 255, 0.8);

            padding: 9px 17px;

            border-radius: 25px;

            font-size: 13px;

            display: inline-flex;

            align-items: center;

            gap: 8px;
        }


        .official-dot {

            width: 7px;

            height: 7px;

            background: white;

            border-radius: 50%;
        }


        .top-button {

            color: white;

            text-decoration: none;

            border:
                1px solid
                rgba(255, 255, 255, 0.8);

            padding: 9px 20px;

            border-radius: 25px;

            font-size: 13px;

            transition: 0.2s;
        }


        .top-button:hover {

            background: white;

            color: #176bc0;
        }


        /* =================================
           KONTEN KIRI
        ================================= */

        .left-content {

            position: relative;

            z-index: 2;

            max-width: 600px;
        }


        .system-label {

            display: inline-block;

            padding: 9px 17px;

            border-radius: 25px;

            border:
                1px solid
                rgba(255, 255, 255, 0.45);

            background:
                rgba(255, 255, 255, 0.08);

            font-size: 13px;

            margin-bottom: 25px;
        }


        .left-content h1 {

            margin: 0 0 20px;

            font-size: 43px;

            line-height: 1.1;

            letter-spacing: -1px;
        }


        .left-content p {

            margin: 0;

            font-size: 17px;

            line-height: 1.7;

            color:
                rgba(255, 255, 255, 0.92);
        }


        /* =================================
           FITUR
        ================================= */

        .features {

            display: flex;

            flex-wrap: wrap;

            gap: 10px;

            margin-top: 30px;
        }


        .feature {

            padding: 9px 15px;

            border-radius: 7px;

            background:
                rgba(0, 0, 0, 0.12);

            border:
                1px solid
                rgba(255, 255, 255, 0.15);

            font-size: 14px;
        }


        /* =================================
           FOOTER KIRI
        ================================= */

        .left-footer {

            position: relative;

            z-index: 2;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding-top: 25px;

            border-top:
                1px solid
                rgba(255, 255, 255, 0.15);
        }


        .institution {

            display: flex;

            align-items: center;

            gap: 12px;
        }


        .institution-icon {

            width: 48px;

            height: 48px;

            border-radius: 50%;

            background:
                rgba(0, 0, 0, 0.2);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 22px;
        }


        .institution strong {

            display: block;

            font-size: 16px;
        }


        .institution span {

            font-size: 13px;

            color:
                rgba(255, 255, 255, 0.8);
        }


        .arrows {

            display: flex;

            gap: 10px;
        }


        .arrow {

            width: 43px;

            height: 43px;

            border-radius: 50%;

            border:
                1px solid
                rgba(255, 255, 255, 0.25);

            background:
                rgba(0, 0, 0, 0.2);

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 22px;
        }


        /* =================================
           BAGIAN KANAN
        ================================= */

        .right-section {

            background:
                linear-gradient(
                    180deg,
                    #1265ba 0%,
                    #3b8bd0 55%,
                    #d8efff 100%
                );

            padding: 65px 70px;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            color: #222;
        }


        /* =================================
           LOGO
        ================================= */

        .logo-area {

            width: 100%;

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 55px;
        }


        .logo {

            height: 55px;

            max-width: 310px;

            object-fit: contain;
        }


        /* =================================
           BAHASA INDONESIA
        ================================= */

        .language {

            display: flex;

            align-items: center;

            gap: 8px;

            padding: 9px 18px;

            border-radius: 25px;

            background:
                rgba(255, 255, 255, 0.2);

            border:
                1px solid
                rgba(255, 255, 255, 0.35);

            color: white;

            font-weight: bold;

            font-size: 14px;
        }


        /* =================================
           BENDERA INDONESIA

           Tidak menggunakan emoji.
           Dibuat dengan CSS.
        ================================= */

        .flag-id {

            width: 25px;

            height: 17px;

            display: inline-block;

            background:
                linear-gradient(
                    to bottom,
                    #e31e24 0%,
                    #e31e24 50%,
                    #ffffff 50%,
                    #ffffff 100%
                );

            border-radius: 2px;

            border:
                1px solid
                rgba(0, 0, 0, 0.18);

            flex-shrink: 0;
        }


        /* =================================
           LOGIN BOX
        ================================= */

        .login-box {

            width: 100%;

            max-width: 530px;
        }


        .login-box h2 {

            margin: 0 0 8px;

            text-align: center;

            font-size: 36px;

            color: white;
        }


        .login-subtitle {

            text-align: center;

            margin: 0 0 40px;

            color: white;

            font-size: 16px;

            line-height: 1.5;
        }


        /* =================================
           FORM
        ================================= */

        .form-group {

            margin-bottom: 20px;
        }


        .form-label {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 8px;

            font-size: 14px;

            color: #102d4d;

            font-weight: 500;
        }


        .form-label label {

            cursor: pointer;
        }


        .form-label a {

            color: #1166b8;

            text-decoration: none;
        }


        .form-label a:hover {

            text-decoration: underline;
        }


        .input {

            width: 100%;

            height: 54px;

            padding: 0 17px;

            border: none;

            outline: none;

            border-radius: 13px;

            background: white;

            font-size: 15px;

            box-shadow:
                0 3px 10px
                rgba(0, 0, 0, 0.08);
        }


        .input:focus {

            box-shadow:
                0 0 0 3px
                rgba(18, 107, 195, 0.25);
        }


        /* =================================
           VERIFIKASI
        ================================= */

        .verification {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            background: white;

            border-radius: 13px;

            padding: 10px 15px;

            margin-bottom: 20px;

            min-height: 60px;
        }


        .verification span {

            font-size: 14px;

            color: #374151;
        }


        .verification input {

            width: 110px;

            height: 38px;

            border:
                1px solid #cbd5e1;

            border-radius: 9px;

            padding: 8px 12px;

            outline: none;
        }


        .verification input:focus {

            border-color: #126bc3;

            box-shadow:
                0 0 0 2px
                rgba(18, 107, 195, 0.15);
        }


        /* =================================
           TOMBOL LOGIN
        ================================= */

        .login-button {

            width: 100%;

            height: 57px;

            border: none;

            border-radius: 13px;

            background: #126bc3;

            color: white;

            font-size: 16px;

            font-weight: bold;

            cursor: pointer;

            box-shadow:
                0 5px 12px
                rgba(0, 0, 0, 0.15);

            transition: 0.2s;
        }


        .login-button:hover {

            background: #0959a7;

            transform: translateY(-1px);
        }


        /* =================================
           DAFTAR
        ================================= */

        .register {

            text-align: center;

            margin-top: 25px;

            color: #55718c;

            font-size: 14px;
        }


        .register a {

            color: #0870ce;

            text-decoration: none;

            font-weight: bold;
        }


        .register a:hover {

            text-decoration: underline;
        }


        /* =================================
           RESPONSIVE TABLET
        ================================= */

        @media (max-width: 1000px) {

            body {

                padding: 15px;
            }


            .login-container {

                grid-template-columns: 1fr;

                max-width: 700px;
            }


            .left-section {

                min-height: 560px;
            }


            .right-section {

                padding: 50px 40px;
            }

        }


        /* =================================
           RESPONSIVE HP
        ================================= */

        @media (max-width: 600px) {

            body {

                padding: 0;
            }


            .login-container {

                border-radius: 0;

                min-height: 100vh;
            }


            .left-section {

                padding: 30px 25px;

                min-height: 520px;
            }


            .top-menu {

                gap: 8px;
            }


            .official {

                font-size: 11px;

                padding: 8px 12px;
            }


            .top-button {

                padding: 8px 12px;

                font-size: 11px;
            }


            .left-content h1 {

                font-size: 34px;
            }


            .left-content p {

                font-size: 15px;
            }


            .right-section {

                padding: 45px 22px;
            }


            .logo-area {

                margin-bottom: 35px;
            }


            .logo {

                height: 42px;

                max-width: 220px;
            }


            .language {

                padding: 8px 12px;

                font-size: 13px;
            }


            .login-box h2 {

                font-size: 30px;
            }


            .login-subtitle {

                font-size: 14px;

                margin-bottom: 30px;
            }


            .verification {

                flex-direction: column;

                align-items: stretch;
            }


            .verification input {

                width: 100%;
            }


            .left-footer {

                flex-direction: column;

                align-items: flex-start;

                gap: 20px;
            }

        }

    </style>

</head>


<body>


<div class="login-container">


    <!-- =================================
         BAGIAN KIRI
    ================================= -->

    <section class="left-section">


        <div class="circle"></div>

        <div class="circle-small"></div>


        <div class="top-menu">


            <!-- TOMBOL KEMBALI KE BERANDA -->

            <a
                href="{{ url('/') }}"
                class="top-button"
            >
                ← Beranda
            </a>


            <div class="official">

                <span class="official-dot"></span>

                LAYANAN RESMI AK-1

            </div>


            <a
                href="#"
                class="top-button"
            >

                Panduan NIK

            </a>


            <a
                href="#"
                class="top-button"
            >

                Bantuan

            </a>


        </div>


        <div class="left-content">


            <div class="system-label">

                ✓ Sistem Informasi Ketenagakerjaan
                Kota Tasikmalaya

            </div>


            <h1>

                Wujudkan Peluang Karir
                Masa Depan.

            </h1>


            <p>

                Pengurusan Kartu Tanda Pencari Kerja
                (AK-1 / Kartu Kuning) daring dan akses
                informasi lowongan kerja resmi
                terverifikasi Pemkot Tasikmalaya.

            </p>


            <div class="features">


                <div class="feature">

                    ✓ AK-1 Cetak Mandiri

                </div>


                <div class="feature">

                    ✓ Job Fair Berkala

                </div>


                <div class="feature">

                    ✓ Pelatihan BLK Gratis

                </div>


            </div>


        </div>


        <div class="left-footer">


            <div class="institution">


                <div class="institution-icon">

                    🏢

                </div>


                <div>

                    <strong>

                        Disnaker Tasikmalaya ✓

                    </strong>


                    <span>

                        Pemerintah Kota Tasikmalaya

                    </span>

                </div>


            </div>


            <div class="arrows">


                <div class="arrow">

                    ‹

                </div>


                <div class="arrow">

                    ›

                </div>


            </div>


        </div>


    </section>


    <!-- =================================
         BAGIAN KANAN
    ================================= -->

    <section class="right-section">


        <div class="logo-area">


            <img
                src="https://disnaker.tasikmalayakota.go.id/front/img/logo.png"
                alt="Logo Disnaker Tasikmalaya"
                class="logo"
            >


            <!-- BENDERA INDONESIA + ID -->

            <div class="language">

                <span class="flag-id"></span>

                <span>ID</span>

            </div>


        </div>


        <div class="login-box">


            <h2>

                Halo Pencari Kerja

            </h2>


            <p class="login-subtitle">

                Masuk ke akun SiapKerja /
                Pelayanan AK-1 Online

            </p>


            <form
                action="/login"
                method="POST"
            >

                @csrf


                <!-- NIK / EMAIL -->

                <div class="form-group">


                    <div class="form-label">


                        <label for="email">

                            Nomor Induk Kependudukan
                            (NIK) / Email

                        </label>


                    </div>


                    <input
                        type="text"
                        id="email"
                        name="email"
                        class="input"
                        placeholder="3278xxxxxxxxxx atau email@domain.com"
                        required
                    >


                </div>


                <!-- PASSWORD -->

                <div class="form-group">


                    <div class="form-label">


                        <label for="password">

                            Kata Sandi

                        </label>


                        <a href="#">

                            Lupa kata sandi?

                        </a>


                    </div>


                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="input"
                        placeholder="Masukkan kata sandi"
                        required
                    >


                </div>


                <!-- VERIFIKASI -->

                <div class="verification">


                    <span>

                        Verifikasi Keamanan:

                        <strong>

                            8 + 5 =

                        </strong>

                    </span>


                    <input
                        type="number"
                        name="verification"
                        placeholder="Jawaban"
                        required
                    >


                </div>


                <!-- TOMBOL LOGIN -->

                <button
                    type="submit"
                    class="login-button"
                >

                    Masuk ke Layanan

                </button>


            </form>


            <!-- DAFTAR -->

            <div class="register">

                Belum punya akun?


                <a href="{{ route('daftar') }}">

                    Daftar AK-1 Sekarang

                </a>

            </div>


        </div>


    </section>


</div>


</body>

</html>