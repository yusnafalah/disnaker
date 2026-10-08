<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Akun - Disnaker Tasikmalaya</title>

    <style>

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #172033;
        }

        /* =====================================
           HEADER
        ===================================== */

        .top-header {
            height: 90px;
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 5%;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .logo-box {
            width: 48px;
            height: 48px;

            border-radius: 12px;

            background: #075dcc;

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;
            font-size: 20px;
            font-weight: bold;

            box-shadow: 0 5px 15px rgba(7, 93, 204, .20);
        }

        .header-title {
            display: flex;
            flex-direction: column;
        }

        .header-title strong {
            font-size: 20px;
            color: #182033;
        }

        .header-title span {
            font-size: 13px;
            color: #687083;
        }

        .back-button {
            text-decoration: none;

            background: #eef1f5;

            color: #4b5563;

            padding: 11px 20px;

            border-radius: 25px;

            font-size: 14px;

            transition: .2s;
        }

        .back-button:hover {
            background: #e1e6ed;
        }


        /* =====================================
           MAIN
        ===================================== */

        .page-container {
            width: 92%;
            max-width: 1180px;

            margin: 55px auto;

            display: grid;

            grid-template-columns: 470px 1fr;

            gap: 30px;

            align-items: start;
        }


        /* =====================================
           LEFT SIDE
        ===================================== */

        .left-column {
            display: flex;
            flex-direction: column;
            gap: 22px;
        }

        .hero-card {
            background: linear-gradient(
                135deg,
                #1769f5,
                #0755c9
            );

            color: white;

            padding: 32px;

            border-radius: 18px 18px 55px 18px;

            min-height: 325px;

            box-shadow:
                0 15px 30px
                rgba(0, 81, 190, .20);
        }

        .small-label {
            display: inline-block;

            background: rgba(255,255,255,.14);

            border: 1px solid rgba(255,255,255,.22);

            padding: 8px 14px;

            border-radius: 20px;

            font-size: 13px;

            margin-bottom: 22px;
        }

        .hero-card h1 {
            margin: 0 0 14px;

            font-size: 32px;

            line-height: 1.18;
        }

        .hero-card p {
            margin: 0;

            line-height: 1.7;

            font-size: 15px;

            color: rgba(255,255,255,.88);
        }

        .hero-bottom {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-top: 28px;

            padding-top: 18px;

            border-top:
                1px solid
                rgba(255,255,255,.20);
        }

        .hero-bottom span {
            font-size: 13px;
        }

        .free-badge {
            padding: 8px 18px;

            border-radius: 20px;

            border: 1px solid
                rgba(255,255,255,.35);

            background:
                rgba(255,255,255,.10);
        }


        /* =====================================
           BENEFITS
        ===================================== */

        .benefits-card {
            background: #0862c9;

            color: white;

            padding: 25px;

            border-radius: 18px 55px 18px 18px;

            box-shadow:
                0 10px 25px
                rgba(0, 80, 170, .16);
        }

        .benefits-card h3 {
            margin: 0 0 20px;

            font-size: 15px;

            letter-spacing: .5px;
        }

        .benefit {
            display: flex;

            gap: 14px;

            padding: 15px;

            margin-bottom: 12px;

            background:
                rgba(255,255,255,.14);

            border:
                1px solid
                rgba(255,255,255,.18);

            border-radius: 12px;
        }

        .benefit:last-child {
            margin-bottom: 0;
        }

        .benefit-icon {
            width: 40px;
            height: 40px;

            flex-shrink: 0;

            border-radius: 10px;

            background:
                rgba(255,255,255,.16);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 19px;
        }

        .benefit-content strong {
            display: block;

            margin-bottom: 5px;

            font-size: 14px;
        }

        .benefit-content span {
            display: block;

            font-size: 12px;

            line-height: 1.5;

            color:
                rgba(255,255,255,.80);
        }


        /* =====================================
           FORM CARD
        ===================================== */

        .form-card {
            background: white;

            border-radius: 18px;

            padding: 32px;

            box-shadow:
                0 5px 20px
                rgba(0,0,0,.08);

            border: 1px solid #e7eaf0;
        }


        /* =====================================
           TABS
        ===================================== */

        .tabs {
            display: flex;

            background: #1166bd;

            padding: 4px;

            border-radius: 12px;

            margin-bottom: 28px;
        }

        .tab-button {
            flex: 1;

            border: none;

            padding: 13px 10px;

            background: transparent;

            color: rgba(255,255,255,.65);

            border-radius: 9px;

            font-weight: bold;

            cursor: pointer;

            font-size: 14px;

            transition: .2s;
        }

        .tab-button.active {
            background: white;

            color: #075dcc;

            box-shadow:
                0 2px 7px
                rgba(0,0,0,.12);
        }


        /* =====================================
           FORM HEADER
        ===================================== */

        .form-header {
            margin-bottom: 24px;
        }

        .form-header h2 {
            margin: 0 0 5px;

            font-size: 24px;

            color: #182033;
        }

        .form-header p {
            margin: 0;

            color: #656d7b;

            font-size: 14px;
        }

        .status-badge {
            display: inline-block;

            margin-top: 14px;

            padding: 8px 14px;

            border-radius: 20px;

            background: #e9fff4;

            color: #087a4b;

            font-size: 12px;

            font-weight: bold;
        }


        /* =====================================
           FORM
        ===================================== */

        .form-section {
            margin-bottom: 24px;
        }

        .section-title {
            display: flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 18px;

            font-size: 15px;

            font-weight: bold;

            color: #263142;
        }

        .section-number {
            width: 27px;
            height: 27px;

            border-radius: 50%;

            background: #e8f0ff;

            color: #1261c7;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 12px;
        }

        .form-group {
            margin-bottom: 17px;
        }

        .form-row {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 16px;
        }

        label {
            display: block;

            margin-bottom: 7px;

            font-size: 13px;

            font-weight: bold;

            color: #252b36;
        }

        .required {
            color: #dc2626;
        }

        input,
        select,
        textarea {
            width: 100%;

            border: 1px solid #e1e5eb;

            background: #f4f5f7;

            border-radius: 8px;

            padding: 13px 14px;

            font-size: 14px;

            color: #252b36;

            outline: none;

            font-family: Arial, sans-serif;

            transition: .2s;
        }

        textarea {
            min-height: 80px;

            resize: vertical;
        }

        input:focus,
        select:focus,
        textarea:focus {
            background: white;

            border-color: #2371d8;

            box-shadow:
                0 0 0 3px
                rgba(35,113,216,.10);
        }

        .help-text {
            display: block;

            margin-top: 6px;

            font-size: 11px;

            color: #747b87;
        }


        /* =====================================
           CHECKBOX
        ===================================== */

        .agreement {
            display: flex;

            align-items: flex-start;

            gap: 10px;

            padding: 13px;

            background: #f5f6f8;

            border-radius: 9px;

            margin: 10px 0 18px;
        }

        .agreement input {
            width: 17px;
            height: 17px;

            margin-top: 2px;

            flex-shrink: 0;
        }

        .agreement label {
            margin: 0;

            font-weight: normal;

            font-size: 12px;

            line-height: 1.5;

            color: #535b68;
        }

        .agreement a {
            color: #1261c7;

            text-decoration: underline;
        }


        /* =====================================
           BUTTON
        ===================================== */

        .submit-button {
            width: 100%;

            border: none;

            background: #0864c5;

            color: white;

            padding: 15px;

            border-radius: 8px;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;

            transition: .2s;

            box-shadow:
                0 5px 12px
                rgba(8,100,197,.20);
        }

        .submit-button:hover {
            background: #0754a7;

            transform: translateY(-1px);
        }

        .login-link {
            text-align: center;

            border-top:
                1px solid #e5e7eb;

            margin-top: 20px;

            padding-top: 18px;

            font-size: 13px;

            color: #606874;
        }

        .login-link a {
            color: #0961bd;

            text-decoration: none;

            font-weight: bold;
        }


        /* =====================================
           COMPANY FORM
        ===================================== */

        #companyForm {
            display: none;
        }


        /* =====================================
           FOOTER
        ===================================== */

        footer {
            width: 92%;

            max-width: 1180px;

            margin: 0 auto 30px;

            padding-top: 25px;

            border-top:
                1px solid #e1e5eb;

            display: flex;

            justify-content: space-between;

            color: #606874;

            font-size: 12px;
        }

        .footer-left,
        .footer-right {
            line-height: 1.6;
        }


        /* =====================================
           RESPONSIVE
        ===================================== */

        @media (max-width: 950px) {

            .page-container {
                grid-template-columns: 1fr;
            }

            .left-column {
                display: grid;

                grid-template-columns: 1fr 1fr;
            }

            .hero-card {
                min-height: auto;
            }

        }


        @media (max-width: 700px) {

            .top-header {
                height: auto;

                padding: 18px 5%;

                gap: 15px;
            }

            .header-title strong {
                font-size: 17px;
            }

            .back-button {
                padding: 9px 12px;

                font-size: 12px;
            }

            .page-container {
                width: 94%;

                margin: 30px auto;
            }

            .left-column {
                display: flex;
            }

            .hero-card {
                padding: 25px;
            }

            .hero-card h1 {
                font-size: 28px;
            }

            .form-card {
                padding: 20px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .tabs {
                flex-direction: column;
            }

            footer {
                flex-direction: column;

                gap: 15px;
            }

        }

    </style>

</head>


<body>


<!-- =====================================
     HEADER
===================================== -->

<header class="top-header">

    <div class="header-left">

        <div class="logo-box">
            DIS
        </div>

        <div class="header-title">

            <strong>
                DISNAKER
            </strong>

            <span>
                KOTA TASIKMALAYA
            </span>

        </div>

    </div>


    <a
        href="{{ url('/') }}"
        class="back-button"
    >
        ← &nbsp; Kembali ke Beranda
    </a>

</header>



<!-- =====================================
     MAIN
===================================== -->

<main class="page-container">


    <!-- =================================
         LEFT COLUMN
    ================================== -->

    <div class="left-column">


        <!-- HERO -->

        <div class="hero-card">

            <span class="small-label">
                ⚑ Gerbang Ketenagakerjaan Priangan Timur
            </span>

            <h1>
                Sampurasun, Warga Tasikmalaya!
            </h1>

            <p>
                Daftar akun pencari kerja resmi Disnaker
                Kota Tasikmalaya untuk mendapatkan Kartu
                AK-1 digital, fasilitas pelatihan BLK gratis,
                dan rekomendasi kerja prioritas.
            </p>


            <div class="hero-bottom">

                <span>
                    ⚡ Verifikasi Cepat
                </span>

                <span class="free-badge">
                    100% Gratis
                </span>

            </div>

        </div>



        <!-- BENEFITS -->

        <div class="benefits-card">

            <h3>
                KEUNGGULAN LAYANAN DISNAKER
            </h3>


            <div class="benefit">

                <div class="benefit-icon">
                    ▣
                </div>

                <div class="benefit-content">

                    <strong>
                        Mitra Industri Terverifikasi
                    </strong>

                    <span>
                        Terhubung dengan perusahaan dan
                        industri resmi di Kota Tasikmalaya.
                    </span>

                </div>

            </div>


            <div class="benefit">

                <div class="benefit-icon">
                    ♧
                </div>

                <div class="benefit-content">

                    <strong>
                        Informasi Lowongan Kerja
                    </strong>

                    <span>
                        Dapatkan informasi lowongan kerja
                        yang tersedia dan terverifikasi.
                    </span>

                </div>

            </div>


            <div class="benefit">

                <div class="benefit-icon">
                    ◇
                </div>

                <div class="benefit-content">

                    <strong>
                        Pelatihan BLK Gratis
                    </strong>

                    <span>
                        Akses informasi pelatihan dan
                        sertifikasi kejuruan BLK.
                    </span>

                </div>

            </div>

        </div>

    </div>



    <!-- =================================
         FORM COLUMN
    ================================== -->

    <div class="form-card">


        <!-- TABS -->

        <div class="tabs">

            <button
                type="button"
                class="tab-button active"
                id="jobSeekerTab"
                onclick="showJobSeeker()"
            >
                ♙ &nbsp; Pencari Kerja (AK-1)
            </button>


            <button
                type="button"
                class="tab-button"
                id="companyTab"
                onclick="showCompany()"
            >
                ▦ &nbsp; Perusahaan Mitra (NIB)
            </button>

        </div>



        <!-- =================================
             FORM PENCARI KERJA
        ================================== -->

        <form
            id="jobSeekerForm"
            onsubmit="return daftarPencariKerja(event)"
        >

            <div class="form-header">

                <h2>
                    Registrasi Akun Baru
                </h2>

                <p>
                    Lengkapi data primer kependudukan
                    untuk validasi identitas terpadu.
                </p>

                <span class="status-badge">
                    ● &nbsp; Siap Integrasi DUKCAPIL
                </span>

            </div>



            <!-- IDENTITAS -->

            <div class="form-section">

                <div class="section-title">

                    <span class="section-number">
                        1
                    </span>

                    IDENTITAS PENCARI KERJA

                </div>


                <div class="form-group">

                    <label>
                        Nomor Induk Kependudukan (NIK)
                        <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        name="nik"
                        maxlength="16"
                        placeholder="3278xxxxxxxxxxxx (16 digit KTP)"
                        required
                    >

                    <span class="help-text">
                        Pastikan NIK sesuai dengan Kartu Keluarga / KTP elektronik.
                    </span>

                </div>


                <div class="form-group">

                    <label>
                        Nama Lengkap (Sesuai KTP)
                        <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        name="nama"
                        placeholder="Contoh: Mochamad Fauzi Ramdani"
                        required
                    >

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label>
                            Alamat Email Aktif
                            <span class="required">*</span>
                        </label>

                        <input
                            type="email"
                            name="email"
                            placeholder="namaanda@email.com"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Nomor WhatsApp Aktif
                            <span class="required">*</span>
                        </label>

                        <input
                            type="tel"
                            name="whatsapp"
                            placeholder="081234567890"
                            required
                        >

                    </div>

                </div>

            </div>



            <!-- KEAMANAN -->

            <div class="form-section">

                <div class="section-title">

                    <span class="section-number">
                        2
                    </span>

                    KEAMANAN AKUN

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label>
                            Kata Sandi
                            <span class="required">*</span>
                        </label>

                        <input
                            type="password"
                            name="password"
                            placeholder="Minimal 8 karakter"
                            minlength="8"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Konfirmasi Kata Sandi
                            <span class="required">*</span>
                        </label>

                        <input
                            type="password"
                            name="password_confirmation"
                            placeholder="Ulangi kata sandi"
                            minlength="8"
                            required
                        >

                    </div>

                </div>

            </div>



            <!-- AGREEMENT -->

            <div class="agreement">

                <input
                    type="checkbox"
                    id="agreementJob"
                    required
                >

                <label for="agreementJob">

                    Saya menyatakan data yang saya isikan adalah
                    benar dan bersedia mematuhi
                    <a href="#">
                        Syarat & Ketentuan Layanan
                    </a>
                    Disnaker Kota Tasikmalaya serta bersedia
                    menerima informasi ketenagakerjaan resmi.

                </label>

            </div>



            <button
                type="submit"
                class="submit-button"
            >
                Daftar & Lanjut Pengisian Profil →
            </button>


            <div class="login-link">

                Sudah memiliki akun terdaftar?

                <a href="{{ url('/login') }}">
                    Masuk di sini →
                </a>

            </div>

        </form>



        <!-- =================================
             FORM PERUSAHAAN
        ================================== -->

        <form
            id="companyForm"
            onsubmit="return daftarPerusahaan(event)"
        >

            <div class="form-header">

                <h2>
                    Registrasi Akun Perusahaan Mitra
                </h2>

                <p>
                    Lengkapi data legalitas NIB dan
                    penanggung jawab HRD perusahaan.
                </p>

                <span class="status-badge">
                    ● &nbsp; Validasi OSS BKPM Aktif
                </span>

            </div>



            <!-- IDENTITAS PERUSAHAAN -->

            <div class="form-section">

                <div class="section-title">

                    <span class="section-number">
                        1
                    </span>

                    IDENTITAS BADAN USAHA (OSS)

                </div>


                <div class="form-group">

                    <label>
                        Nomor Induk Berusaha (NIB)
                        <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        name="nib"
                        maxlength="13"
                        placeholder="13 digit NIB resmi terdaftar OSS"
                        required
                    >

                    <span class="help-text">
                        Pastikan 13 digit angka sesuai izin OSS.
                    </span>

                </div>


                <div class="form-group">

                    <label>
                        Nama Legal Perusahaan / Badan Usaha
                        <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        name="nama_perusahaan"
                        placeholder="Contoh: PT. Mitra Kreasi Tasikmalaya"
                        required
                    >

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label>
                            Bentuk Usaha / Badan Hukum
                            <span class="required">*</span>
                        </label>

                        <select name="bentuk_usaha" required>

                            <option value="">
                                Pilih Badan Hukum
                            </option>

                            <option>
                                PT
                            </option>

                            <option>
                                CV
                            </option>

                            <option>
                                Firma
                            </option>

                            <option>
                                Koperasi
                            </option>

                            <option>
                                Yayasan
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label>
                            Sektor Industri / KBLI
                            <span class="required">*</span>
                        </label>

                        <select name="sektor" required>

                            <option value="">
                                Pilih Sektor Kategori
                            </option>

                            <option>
                                Manufaktur
                            </option>

                            <option>
                                Perdagangan
                            </option>

                            <option>
                                Jasa
                            </option>

                            <option>
                                Teknologi
                            </option>

                            <option>
                                Pariwisata
                            </option>

                            <option>
                                Lainnya
                            </option>

                        </select>

                    </div>

                </div>


                <div class="form-group">

                    <label>
                        Alamat Kantor / Operasional
                        <span class="required">*</span>
                    </label>

                    <textarea
                        name="alamat_perusahaan"
                        placeholder="Jl. H.Z. Mustofa / Kawasan Industri Cikurubuk, Tasikmalaya..."
                        required
                    ></textarea>

                </div>

            </div>



            <!-- PENANGGUNG JAWAB -->

            <div class="form-section">

                <div class="section-title">

                    <span class="section-number">
                        2
                    </span>

                    DATA PENANGGUNG JAWAB HRD

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label>
                            Nama Lengkap PIC / HRD
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="nama_hrd"
                            placeholder="Nama PIC sesuai KTP"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Jabatan PIC / HRD
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="jabatan"
                            placeholder="Contoh: HR Manager"
                            required
                        >

                    </div>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label>
                            Email Resmi Perusahaan
                            <span class="required">*</span>
                        </label>

                        <input
                            type="email"
                            name="email_perusahaan"
                            placeholder="hrd@namaperusahaan.co.id"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Nomor WhatsApp / Kontak Aktif
                            <span class="required">*</span>
                        </label>

                        <input
                            type="tel"
                            name="kontak_perusahaan"
                            placeholder="+62 812-xxx-xxxx"
                            required
                        >

                    </div>

                </div>

            </div>



            <!-- KEAMANAN PERUSAHAAN -->

            <div class="form-section">

                <div class="section-title">

                    <span class="section-number">
                        3
                    </span>

                    KEAMANAN AKUN PORTAL

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label>
                            Kata Sandi Akun Mitra
                            <span class="required">*</span>
                        </label>

                        <input
                            type="password"
                            name="company_password"
                            placeholder="Minimal 8 karakter"
                            minlength="8"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Konfirmasi Kata Sandi
                            <span class="required">*</span>
                        </label>

                        <input
                            type="password"
                            name="company_password_confirmation"
                            placeholder="Ulangi kata sandi"
                            minlength="8"
                            required
                        >

                    </div>

                </div>

            </div>



            <!-- DOKUMEN -->

            <div class="form-section">

                <div class="section-title">

                    <span class="section-number">
                        4
                    </span>

                    DOKUMEN PENDUKUNG

                </div>


                <div
                    style="
                        background:#eef4ff;
                        border:1px dashed #9bb8e8;
                        border-radius:12px;
                        padding:25px;
                        text-align:center;
                    "
                >

                    <div
                        style="
                            font-size:32px;
                            margin-bottom:10px;
                        "
                    >
                        ↑
                    </div>

                    <strong>
                        Unggah Salinan NIB /
                        Izin Operasional
                    </strong>

                    <p
                        style="
                            font-size:12px;
                            color:#687083;
                            margin:8px 0 0;
                        "
                    >
                        Format PDF, JPG, atau PNG
                        maksimal 5 MB.
                    </p>

                    <br>

                    <input
                        type="file"
                        name="dokumen"
                        accept=".pdf,.jpg,.jpeg,.png"
                    >

                </div>

            </div>



            <!-- AGREEMENT -->

            <div class="agreement">

                <input
                    type="checkbox"
                    id="agreementCompany"
                    required
                >

                <label for="agreementCompany">

                    Saya menyatakan bahwa data perusahaan
                    yang diisikan adalah benar, sah memiliki
                    izin usaha beroperasi, dan bersedia
                    mematuhi regulasi ketenagakerjaan yang
                    berlaku.

                </label>

            </div>



            <button
                type="submit"
                class="submit-button"
            >
                Daftar Perusahaan & Lanjut Verifikasi →
            </button>


            <div class="login-link">

                Sudah memiliki akun perusahaan?

                <a href="{{ url('/login') }}">
                    Masuk ke portal →
                </a>

            </div>

        </form>

    </div>

</main>



<!-- =====================================
     FOOTER
===================================== -->

<footer>

    <div class="footer-left">

        <strong>
            Dinas Tenaga Kerja Pemerintah Kota Tasikmalaya
        </strong>

        <br>

        Jl. Noenoeng Tisnasaputra No. 5,
        Tasikmalaya

    </div>


    <div class="footer-right">

        Helpdesk: (0265) 331-542
        &nbsp; • &nbsp;
        Email: disnaker@tasikmalayakota.go.id

    </div>

</footer>



<script>

    /* =====================================
       PINDAH KE FORM PENCARI KERJA
    ===================================== */

    function showJobSeeker() {

        document.getElementById(
            'jobSeekerForm'
        ).style.display = 'block';


        document.getElementById(
            'companyForm'
        ).style.display = 'none';


        document.getElementById(
            'jobSeekerTab'
        ).classList.add('active');


        document.getElementById(
            'companyTab'
        ).classList.remove('active');

    }



    /* =====================================
       PINDAH KE FORM PERUSAHAAN
    ===================================== */

    function showCompany() {

        document.getElementById(
            'jobSeekerForm'
        ).style.display = 'none';


        document.getElementById(
            'companyForm'
        ).style.display = 'block';


        document.getElementById(
            'jobSeekerTab'
        ).classList.remove('active');


        document.getElementById(
            'companyTab'
        ).classList.add('active');

    }



    /* =====================================
       FORM PENCARI KERJA
    ===================================== */

    function daftarPencariKerja(event) {

        event.preventDefault();


        const password =
            document.querySelector(
                '[name="password"]'
            ).value;


        const confirmation =
            document.querySelector(
                '[name="password_confirmation"]'
            ).value;


        if (password !== confirmation) {

            alert(
                'Konfirmasi kata sandi tidak sama.'
            );

            return false;

        }


        alert(
            'Data pencari kerja sudah diisi. Selanjutnya dapat dihubungkan ke database Laravel.'
        );


        return false;

    }



    /* =====================================
       FORM PERUSAHAAN
    ===================================== */

    function daftarPerusahaan(event) {

        event.preventDefault();


        const password =
            document.querySelector(
                '[name="company_password"]'
            ).value;


        const confirmation =
            document.querySelector(
                '[name="company_password_confirmation"]'
            ).value;


        if (password !== confirmation) {

            alert(
                'Konfirmasi kata sandi perusahaan tidak sama.'
            );

            return false;

        }


        alert(
            'Data perusahaan sudah diisi. Selanjutnya dapat dihubungkan ke database Laravel.'
        );


        return false;

    }

</script>


</body>

</html>