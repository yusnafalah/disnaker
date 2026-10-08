<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        Dashboard Pencari Kerja - SiapKerja Kota Tasikmalaya
    </title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        :root {

            --primary: #075fc8;

            --primary-dark: #064b9e;

            --primary-light: #eaf3ff;

            --blue-soft: #f4f8ff;

            --text: #17213c;

            --text-soft: #667085;

            --border: #e6eaf0;

            --background: #f6f8fb;

            --white: #ffffff;

            --green: #07865c;

            --green-light: #e8faf3;

            --orange: #d98200;

            --orange-light: #fff5df;

            --red: #d64545;

            --shadow:
                0 10px 30px rgba(21, 44, 75, .06);

        }


        body {

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background: var(--background);

            color: var(--text);

            font-size: 14px;

            line-height: 1.5;

        }


        a {

            color: inherit;

            text-decoration: none;

        }


        button,
        input,
        textarea,
        select {

            font-family: inherit;

        }


        button {

            cursor: pointer;

        }


        /* =====================================================
           TOP INFORMATION BAR
        ===================================================== */

        .topbar {

            height: 30px;

            background: #eef1f4;

            border-bottom: 1px solid #e1e5e9;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 32px;

            color: #66717d;

            font-size: 10px;

        }


        .topbar-left {

            display: flex;

            align-items: center;

            gap: 7px;

        }


        .online-dot {

            width: 6px;

            height: 6px;

            border-radius: 50%;

            background: #0b875d;

        }


        .topbar-right {

            display: flex;

            align-items: center;

            gap: 20px;

        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {

            height: 72px;

            background: var(--white);

            border-bottom: 1px solid var(--border);

            display: flex;

            align-items: center;

            padding: 0 32px;

            position: sticky;

            top: 0;

            z-index: 1000;

        }


        .brand {

            width: 230px;

            display: flex;

            align-items: center;

            gap: 11px;

            flex-shrink: 0;

        }


        .brand-logo {

            width: 43px;

            height: 43px;

            border-radius: 12px;

            background: var(--primary-light);

            border: 1px solid #d9e8fc;

            color: var(--primary);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 12px;

            font-weight: 800;

        }


        .brand-text strong {

            display: block;

            font-size: 16px;

            color: var(--primary);

            line-height: 1.1;

        }


        .brand-text span {

            display: block;

            font-size: 9px;

            color: #718096;

            margin-top: 3px;

            letter-spacing: .3px;

        }


        .main-nav {

            display: flex;

            align-items: center;

            gap: 28px;

            height: 100%;

            flex: 1;

        }


        .main-nav a {

            height: 100%;

            display: flex;

            align-items: center;

            color: #59636f;

            font-size: 11px;

            font-weight: 600;

            position: relative;

            white-space: nowrap;

        }


        .main-nav a:hover {

            color: var(--primary);

        }


        .main-nav a.active {

            color: var(--primary);

        }


        .main-nav a.active::after {

            content: "";

            position: absolute;

            left: 0;

            right: 0;

            bottom: 0;

            height: 3px;

            background: var(--primary);

            border-radius: 5px 5px 0 0;

        }


        .user-menu {

            display: flex;

            align-items: center;

            gap: 10px;

        }


        .user-info {

            text-align: right;

        }


        .user-info strong {

            display: block;

            font-size: 10px;

            color: #364152;

        }


        .user-info span {

            display: block;

            font-size: 8px;

            color: #77818e;

        }


        .user-avatar {

            width: 40px;

            height: 40px;

            border-radius: 50%;

            background: linear-gradient(
                135deg,
                #e7f1ff,
                #c9dcf7
            );

            border: 2px solid white;

            box-shadow:
                0 2px 7px rgba(0,0,0,.1);

            display: flex;

            align-items: center;

            justify-content: center;

            color: var(--primary);

            font-size: 12px;

            font-weight: 800;

        }


        /* =====================================================
           PAGE
        ===================================================== */

        .page {

            max-width: 1280px;

            margin: auto;

            padding: 25px 28px 60px;

        }


        .breadcrumb {

            display: flex;

            align-items: center;

            gap: 8px;

            font-size: 10px;

            color: #8a94a2;

            margin-bottom: 18px;

        }


        .breadcrumb strong {

            color: #485363;

        }


        /* =====================================================
           HERO PROFILE
        ===================================================== */

        .profile-hero {

            background: var(--white);

            border: 1px solid var(--border);

            border-radius: 18px;

            box-shadow: var(--shadow);

            padding: 25px;

            position: relative;

            overflow: hidden;

            margin-bottom: 20px;

        }


        .profile-hero::before {

            content: "";

            position: absolute;

            left: 0;

            top: 0;

            width: 100%;

            height: 5px;

            background:
                linear-gradient(
                    90deg,
                    #075fc8,
                    #54a3ff
                );

        }


        .profile-hero-content {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 25px;

        }


        .profile-main {

            display: flex;

            align-items: center;

            gap: 20px;

            min-width: 0;

        }


        .large-avatar {

            width: 92px;

            height: 92px;

            border-radius: 22px;

            background:
                linear-gradient(
                    135deg,
                    #e6f1ff,
                    #c8ddfa
                );

            border: 4px solid #fff;

            box-shadow:
                0 4px 15px rgba(20,80,140,.12);

            display: flex;

            align-items: center;

            justify-content: center;

            color: var(--primary);

            font-size: 25px;

            font-weight: 800;

            flex-shrink: 0;

            position: relative;

        }


        .avatar-check {

            position: absolute;

            right: -3px;

            bottom: -3px;

            width: 25px;

            height: 25px;

            border-radius: 50%;

            background: var(--green);

            color: white;

            border: 3px solid white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 10px;

        }


        .profile-details {

            min-width: 0;

        }


        .profile-status {

            display: inline-flex;

            align-items: center;

            gap: 6px;

            background: var(--green-light);

            color: var(--green);

            border-radius: 20px;

            padding: 5px 9px;

            font-size: 9px;

            font-weight: 700;

            margin-bottom: 7px;

        }


        .profile-details h1 {

            font-size: 24px;

            color: var(--text);

            line-height: 1.2;

            margin-bottom: 5px;

        }


        .headline {

            color: #4f5d70;

            font-size: 12px;

            font-weight: 600;

            margin-bottom: 7px;

        }


        .profile-meta {

            display: flex;

            align-items: center;

            flex-wrap: wrap;

            gap: 13px;

            color: #7a8592;

            font-size: 9px;

        }


        .profile-actions {

            display: flex;

            flex-direction: column;

            gap: 9px;

            min-width: 155px;

        }


        .primary-btn {

            border: none;

            height: 38px;

            border-radius: 9px;

            background: var(--primary);

            color: white;

            font-size: 10px;

            font-weight: 700;

            padding: 0 16px;

            transition: .2s;

        }


        .primary-btn:hover {

            background: var(--primary-dark);

            transform: translateY(-1px);

        }


        .secondary-btn {

            border: 1px solid var(--border);

            height: 38px;

            border-radius: 9px;

            background: white;

            color: #4d5967;

            font-size: 10px;

            font-weight: 700;

            padding: 0 16px;

        }


        .secondary-btn:hover {

            background: #f6f8fb;

        }


        /* =====================================================
           PROFILE COMPLETION
        ===================================================== */

        .completion {

            margin-top: 20px;

            padding-top: 18px;

            border-top: 1px solid #edf0f3;

        }


        .completion-head {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 7px;

        }


        .completion-head strong {

            font-size: 10px;

            color: #455160;

        }


        .completion-head span {

            color: var(--primary);

            font-size: 10px;

            font-weight: 800;

        }


        .progress {

            height: 7px;

            background: #e9edf2;

            border-radius: 10px;

            overflow: hidden;

        }


        .progress div {

            height: 100%;

            width: 75%;

            background:
                linear-gradient(
                    90deg,
                    #075fc8,
                    #4d9af0
                );

            border-radius: 10px;

        }


        .completion-text {

            color: #8a94a0;

            font-size: 9px;

            margin-top: 6px;

        }


        /* =====================================================
           STATISTICS
        ===================================================== */

        .stats {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 14px;

            margin-bottom: 20px;

        }


        .stat-card {

            background: white;

            border: 1px solid var(--border);

            border-radius: 13px;

            padding: 17px;

            display: flex;

            align-items: center;

            gap: 13px;

            box-shadow:
                0 3px 12px rgba(21,44,75,.035);

        }


        .stat-icon {

            width: 42px;

            height: 42px;

            border-radius: 11px;

            background: var(--primary-light);

            color: var(--primary);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 18px;

            flex-shrink: 0;

        }


        .stat-icon.green {

            background: var(--green-light);

            color: var(--green);

        }


        .stat-icon.orange {

            background: var(--orange-light);

            color: var(--orange);

        }


        .stat-info span {

            display: block;

            color: #7a8592;

            font-size: 9px;

            margin-bottom: 2px;

        }


        .stat-info strong {

            font-size: 18px;

            color: var(--text);

        }


        /* =====================================================
           LAYOUT
        ===================================================== */

        .content-grid {

            display: grid;

            grid-template-columns:
                minmax(0, 1fr)
                320px;

            gap: 20px;

            align-items: start;

        }


        .main-column {

            display: flex;

            flex-direction: column;

            gap: 20px;

        }


        .side-column {

            display: flex;

            flex-direction: column;

            gap: 20px;

        }


        /* =====================================================
           GENERAL CARD
        ===================================================== */

        .card {

            background: white;

            border: 1px solid var(--border);

            border-radius: 15px;

            box-shadow:
                0 3px 12px rgba(21,44,75,.035);

            padding: 20px;

        }


        .card-header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            margin-bottom: 17px;

        }


        .card-title {

            display: flex;

            align-items: center;

            gap: 10px;

        }


        .card-title-icon {

            width: 34px;

            height: 34px;

            border-radius: 9px;

            background: var(--primary-light);

            color: var(--primary);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 15px;

        }


        .card-title h2 {

            font-size: 14px;

            color: #283446;

        }


        .card-title p {

            font-size: 9px;

            color: #8a94a0;

            margin-top: 2px;

        }


        .edit-link {

            border: none;

            background: transparent;

            color: var(--primary);

            font-size: 9px;

            font-weight: 700;

        }


        /* =====================================================
           PROFESSIONAL PROFILE
        ===================================================== */

        .bio {

            background: #f8fafc;

            border-radius: 10px;

            padding: 14px;

            color: #5f6b78;

            font-size: 10px;

            line-height: 1.7;

            margin-bottom: 16px;

        }


        .info-grid {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 14px;

        }


        .info-item label {

            display: block;

            color: #929ba7;

            font-size: 8px;

            margin-bottom: 4px;

            text-transform: uppercase;

            letter-spacing: .3px;

        }


        .info-item strong {

            display: block;

            color: #394556;

            font-size: 10px;

            word-break: break-word;

        }


        .links-row {

            display: flex;

            gap: 8px;

            flex-wrap: wrap;

            margin-top: 16px;

        }


        .social-link {

            border: 1px solid #dce5ef;

            background: #f9fbfd;

            color: #53677d;

            padding: 7px 10px;

            border-radius: 7px;

            font-size: 9px;

        }


        .social-link:hover {

            border-color: #b7d0eb;

            color: var(--primary);

        }


        /* =====================================================
           SKILLS
        ===================================================== */

        .skills {

            display: flex;

            flex-direction: column;

            gap: 13px;

        }


        .skill {

            display: grid;

            grid-template-columns:
                120px
                1fr
                45px;

            gap: 10px;

            align-items: center;

        }


        .skill-name {

            font-size: 10px;

            color: #455160;

            font-weight: 700;

        }


        .skill-bar {

            height: 7px;

            background: #edf0f3;

            border-radius: 10px;

            overflow: hidden;

        }


        .skill-bar div {

            height: 100%;

            border-radius: 10px;

            background: #176bc9;

        }


        .skill-level {

            font-size: 8px;

            color: #778391;

            text-align: right;

        }


        .add-button {

            margin-top: 15px;

            width: 100%;

            height: 35px;

            border: 1px dashed #bfd1e5;

            background: #f7faff;

            color: var(--primary);

            border-radius: 8px;

            font-size: 9px;

            font-weight: 700;

        }


        /* =====================================================
           EDUCATION / EXPERIENCE
        ===================================================== */

        .timeline {

            display: flex;

            flex-direction: column;

            gap: 0;

        }


        .timeline-item {

            position: relative;

            padding-left: 27px;

            padding-bottom: 21px;

        }


        .timeline-item:last-child {

            padding-bottom: 0;

        }


        .timeline-item::before {

            content: "";

            position: absolute;

            left: 6px;

            top: 6px;

            bottom: 0;

            width: 1px;

            background: #dce3eb;

        }


        .timeline-item:last-child::before {

            display: none;

        }


        .timeline-dot {

            position: absolute;

            left: 0;

            top: 4px;

            width: 13px;

            height: 13px;

            border-radius: 50%;

            background: white;

            border: 3px solid var(--primary);

        }


        .timeline-item h3 {

            color: #374354;

            font-size: 11px;

            margin-bottom: 3px;

        }


        .timeline-item .institution {

            color: var(--primary);

            font-size: 9px;

            font-weight: 700;

            margin-bottom: 4px;

        }


        .timeline-item .period {

            display: inline-block;

            color: #788391;

            background: #f1f4f7;

            padding: 3px 7px;

            border-radius: 5px;

            font-size: 8px;

            margin-bottom: 6px;

        }


        .timeline-item p {

            color: #737e8b;

            font-size: 9px;

            line-height: 1.6;

        }


        .timeline-actions {

            float: right;

            display: flex;

            gap: 5px;

        }


        .small-action {

            border: none;

            background: #f0f4f8;

            color: #637080;

            width: 25px;

            height: 25px;

            border-radius: 6px;

            font-size: 9px;

        }


        .small-action.delete {

            color: var(--red);

            background: #fff0f0;

        }


        /* =====================================================
           CV CARD
        ===================================================== */

        .cv-box {

            border: 1px dashed #bfd1e5;

            background: #f7faff;

            border-radius: 12px;

            padding: 16px;

        }


        .cv-main {

            display: flex;

            align-items: center;

            gap: 12px;

        }


        .cv-icon {

            width: 43px;

            height: 43px;

            border-radius: 10px;

            background: #e7f0ff;

            color: var(--primary);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 18px;

        }


        .cv-info {

            flex: 1;

        }


        .cv-info strong {

            display: block;

            font-size: 10px;

            color: #3d4959;

        }


        .cv-info span {

            display: block;

            font-size: 8px;

            color: #8893a0;

            margin-top: 2px;

        }


        .cv-status {

            background: var(--green-light);

            color: var(--green);

            border-radius: 20px;

            padding: 5px 8px;

            font-size: 8px;

            font-weight: 700;

        }


        .cv-actions {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 8px;

            margin-top: 12px;

        }


        .cv-actions button {

            height: 32px;

            border-radius: 7px;

            font-size: 9px;

            font-weight: 700;

        }


        /* =====================================================
           VISIBILITY
        ===================================================== */

        .visibility {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            background: #f8fafc;

            border-radius: 11px;

            padding: 13px;

        }


        .visibility-info {

            display: flex;

            align-items: center;

            gap: 10px;

        }


        .visibility-icon {

            width: 36px;

            height: 36px;

            border-radius: 9px;

            background: var(--green-light);

            color: var(--green);

            display: flex;

            align-items: center;

            justify-content: center;

        }


        .visibility-info strong {

            display: block;

            font-size: 10px;

            color: #3e4b5b;

        }


        .visibility-info span {

            display: block;

            font-size: 8px;

            color: #858f9c;

            margin-top: 2px;

        }


        .switch {

            width: 43px;

            height: 23px;

            border-radius: 20px;

            background: var(--green);

            position: relative;

            flex-shrink: 0;

        }


        .switch::after {

            content: "";

            position: absolute;

            width: 17px;

            height: 17px;

            border-radius: 50%;

            background: white;

            top: 3px;

            right: 3px;

            box-shadow: 0 1px 4px rgba(0,0,0,.15);

        }


        /* =====================================================
           QUICK ACCESS
        ===================================================== */

        .quick-list {

            display: flex;

            flex-direction: column;

            gap: 8px;

        }


        .quick-item {

            display: flex;

            align-items: center;

            gap: 10px;

            padding: 11px;

            border: 1px solid #edf0f3;

            border-radius: 9px;

            transition: .2s;

        }


        .quick-item:hover {

            border-color: #c9dced;

            background: #f8fbff;

            transform: translateX(2px);

        }


        .quick-icon {

            width: 32px;

            height: 32px;

            border-radius: 8px;

            background: var(--primary-light);

            color: var(--primary);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 14px;

        }


        .quick-item strong {

            display: block;

            font-size: 9px;

            color: #435061;

        }


        .quick-item span {

            display: block;

            font-size: 8px;

            color: #8a94a0;

            margin-top: 1px;

        }


        /* =====================================================
           RECOMMENDED JOBS
        ===================================================== */

        .jobs-section {

            margin-top: 20px;

        }


        .jobs-header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 13px;

        }


        .jobs-header h2 {

            font-size: 15px;

            color: #273447;

        }


        .jobs-header p {

            font-size: 9px;

            color: #87919d;

            margin-top: 2px;

        }


        .view-all {

            color: var(--primary);

            font-size: 9px;

            font-weight: 700;

        }


        .jobs {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 13px;

        }


        .job-card {

            background: white;

            border: 1px solid var(--border);

            border-radius: 12px;

            padding: 15px;

            transition: .2s;

        }


        .job-card:hover {

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(21,44,75,.08);

        }


        .job-top {

            display: flex;

            justify-content: space-between;

            gap: 8px;

            margin-bottom: 11px;

        }


        .job-company-icon {

            width: 37px;

            height: 37px;

            border-radius: 9px;

            background: #edf4ff;

            color: var(--primary);

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: 800;

            font-size: 12px;

        }


        .match {

            background: var(--green-light);

            color: var(--green);

            padding: 4px 7px;

            border-radius: 6px;

            font-size: 8px;

            font-weight: 700;

            height: fit-content;

        }


        .job-card h3 {

            color: #374253;

            font-size: 11px;

            line-height: 1.35;

            margin-bottom: 4px;

        }


        .job-company {

            color: var(--primary);

            font-size: 8px;

            font-weight: 700;

            margin-bottom: 8px;

        }


        .job-location {

            color: #7d8793;

            font-size: 8px;

            margin-bottom: 8px;

        }


        .job-salary {

            background: #f5f7f9;

            border-radius: 6px;

            padding: 6px;

            color: #66717e;

            font-size: 8px;

            margin-bottom: 10px;

        }


        .job-btn {

            width: 100%;

            height: 30px;

            border: 1px solid #d4e2f1;

            background: #f7faff;

            color: var(--primary);

            border-radius: 7px;

            font-size: 8px;

            font-weight: 700;

        }


        .job-btn:hover {

            background: var(--primary);

            color: white;

        }


        /* =====================================================
           EMPTY / LOADING
        ===================================================== */

        .loading {

            text-align: center;

            padding: 25px;

            color: #84909d;

            font-size: 10px;

        }


        .error-message {

            background: #fff3f3;

            border: 1px solid #f2d2d2;

            color: #a44a4a;

            padding: 10px;

            border-radius: 8px;

            font-size: 9px;

            display: none;

            margin-bottom: 10px;

        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {

            background: #e9ecef;

            border-top: 1px solid #dde1e5;

            padding: 35px 30px 20px;

        }


        .footer-inner {

            max-width: 1280px;

            margin: auto;

        }


        .footer-grid {

            display: grid;

            grid-template-columns:
                2fr
                1fr
                1fr;

            gap: 50px;

        }


        .footer-brand {

            display: flex;

            align-items: center;

            gap: 9px;

            margin-bottom: 10px;

        }


        .footer-logo {

            width: 34px;

            height: 34px;

            background: white;

            border: 1px solid #d3dbe3;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            color: var(--primary);

            font-size: 10px;

            font-weight: 800;

        }


        .footer-brand strong {

            color: var(--primary);

            font-size: 12px;

        }


        footer h4 {

            color: #3d4651;

            font-size: 10px;

            margin-bottom: 9px;

        }


        footer p,
        footer a {

            color: #69737e;

            font-size: 8px;

            line-height: 1.7;

        }


        footer a {

            display: block;

        }


        footer a:hover {

            color: var(--primary);

        }


        .footer-bottom {

            margin-top: 25px;

            padding-top: 15px;

            border-top: 1px solid #d5d9dd;

            display: flex;

            justify-content: space-between;

            gap: 15px;

            font-size: 8px;

            color: #737d87;

        }


        .footer-links {

            display: flex;

            gap: 15px;

        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1100px) {

            .main-nav {

                gap: 16px;

            }

            .brand {

                width: 190px;

            }

            .content-grid {

                grid-template-columns:
                    minmax(0, 1fr)
                    290px;

            }

        }


        @media (max-width: 900px) {

            .navbar {

                height: auto;

                min-height: 72px;

                flex-wrap: wrap;

                padding: 10px 20px;

                gap: 10px;

            }


            .brand {

                width: auto;

            }


            .main-nav {

                order: 3;

                width: 100%;

                height: 42px;

                overflow-x: auto;

            }


            .main-nav a {

                flex-shrink: 0;

                height: 42px;

            }


            .content-grid {

                grid-template-columns: 1fr;

            }


            .side-column {

                display: grid;

                grid-template-columns:
                    1fr
                    1fr;

            }


            .jobs {

                grid-template-columns:
                    1fr
                    1fr;

            }

        }


        @media (max-width: 700px) {

            .topbar {

                padding: 5px 15px;

            }


            .topbar-right {

                display: none;

            }


            .page {

                padding:
                    18px
                    13px
                    40px;

            }


            .profile-hero {

                padding: 18px;

            }


            .profile-hero-content {

                align-items: flex-start;

                flex-direction: column;

            }


            .profile-actions {

                width: 100%;

                flex-direction: row;

            }


            .profile-actions button {

                flex: 1;

            }


            .stats {

                grid-template-columns:
                    1fr
                    1fr;

            }


            .info-grid {

                grid-template-columns: 1fr;

            }


            .side-column {

                grid-template-columns: 1fr;

            }


            .jobs {

                grid-template-columns: 1fr;

            }


            .footer-grid {

                grid-template-columns: 1fr;

                gap: 25px;

            }


            .footer-bottom {

                flex-direction: column;

            }

        }


        @media (max-width: 480px) {

            .user-info {

                display: none;

            }


            .brand {

                flex: 1;

            }


            .profile-main {

                align-items: flex-start;

                flex-direction: column;

            }


            .large-avatar {

                width: 75px;

                height: 75px;

            }


            .profile-details h1 {

                font-size: 20px;

            }


            .profile-actions {

                flex-direction: column;

            }


            .stats {

                grid-template-columns: 1fr;

            }


            .skill {

                grid-template-columns:
                    100px
                    1fr
                    38px;

            }


            .cv-actions {

                grid-template-columns: 1fr;

            }

        }

    </style>

</head>


<body>


<!-- =========================================================
     TOPBAR
========================================================= -->

<div class="topbar">

    <div class="topbar-left">

        <span class="online-dot"></span>

        Portal Resmi Pemerintah Kota Tasikmalaya
        - Dinas Tenaga Kerja

    </div>


    <div class="topbar-right">

        <span>
            Call Center: 1500-xxx
        </span>

        <span>
            Email: disnaker@tasikmalayakota.go.id
        </span>

    </div>

</div>


<!-- =========================================================
     NAVBAR
========================================================= -->

<header class="navbar">


    <a
        href="{{ url('/dashboard-pencari') }}"
        class="brand"
    >

        <div class="brand-logo">
            SK
        </div>


        <div class="brand-text">

            <strong>
                SiapKerja
            </strong>

            <span>
                KOTA TASIKMALAYA
            </span>

        </div>

    </a>


    <nav class="main-nav">

        <a
            href="{{ url('/dashboard-pencari') }}"
            class="active"
        >
            Dashboard
        </a>


        <a href="#profil">
            Profil Profesional
        </a>


        <a href="#skills">
            Skills
        </a>


        <a href="#pendidikan">
            Pendidikan
        </a>


        <a href="#pengalaman">
            Pengalaman
        </a>


        <a href="#cv">
            CV
        </a>

    </nav>


    <div class="user-menu">

        <div class="user-info">

            <strong id="navUserName">
                Pencari Kerja
            </strong>

            <span>
                Pencari Kerja
            </span>

        </div>


        <div
            class="user-avatar"
            id="navAvatar"
        >
            PK
        </div>

    </div>


</header>


<!-- =========================================================
     PAGE
========================================================= -->

<main class="page">


    <div class="breadcrumb">

        <span>
            Dashboard
        </span>

        <span>
            ›
        </span>

        <strong>
            Profil & Karier
        </strong>

    </div>


    <!-- =====================================================
         ERROR MESSAGE
    ===================================================== -->

    <div
        id="apiError"
        class="error-message"
    ></div>


    <!-- =====================================================
         PROFILE HERO
    ===================================================== -->

    <section class="profile-hero">


        <div class="profile-hero-content">


            <div class="profile-main">


                <div
                    class="large-avatar"
                    id="profileAvatar"
                >

                    PK

                    <div class="avatar-check">
                        ✓
                    </div>

                </div>


                <div class="profile-details">


                    <div class="profile-status">

                        <span>
                            ●
                        </span>

                        Profil Aktif

                    </div>


                    <h1 id="profileName">
                        Pencari Kerja
                    </h1>


                    <div
                        class="headline"
                        id="profileHeadline"
                    >
                        Profesional muda siap berkembang
                        dan menemukan peluang karier terbaik.
                    </div>


                    <div class="profile-meta">


                        <span id="profileCity">
                            ◉ Kota Tasikmalaya
                        </span>


                        <span id="profileEmail">
                            ✉ pencari@gmail.com
                        </span>


                        <span>
                            ✓ AK-1 Terverifikasi
                        </span>


                    </div>


                </div>


            </div>


            <div class="profile-actions">


                <button
                    class="primary-btn"
                    onclick="editProfile()"
                >
                    ✎ Edit Profile
                </button>


                <button
                    class="secondary-btn"
                    onclick="lihatProfil()"
                >
                    ◉ Lihat Profil Publik
                </button>


            </div>


        </div>


        <div class="completion">


            <div class="completion-head">

                <strong>
                    Kelengkapan Profil
                </strong>

                <span id="completionPercent">
                    75%
                </span>

            </div>


            <div class="progress">

                <div
                    id="completionBar"
                    style="width:75%;"
                ></div>

            </div>


            <div class="completion-text">

                Lengkapi profil Anda agar lebih mudah
                ditemukan oleh perusahaan dan meningkatkan
                peluang mendapatkan pekerjaan yang sesuai.

            </div>


        </div>


    </section>


    <!-- =====================================================
         STATISTICS
    ===================================================== -->

    <section class="stats">


        <div class="stat-card">


            <div class="stat-icon">
                ⚙
            </div>


            <div class="stat-info">

                <span>
                    Skills
                </span>

                <strong id="skillCount">
                    5
                </strong>

            </div>


        </div>


        <div class="stat-card">


            <div class="stat-icon green">
                🎓
            </div>


            <div class="stat-info">

                <span>
                    Pendidikan
                </span>

                <strong id="educationCount">
                    1
                </strong>

            </div>


        </div>


        <div class="stat-card">


            <div class="stat-icon orange">
                💼
            </div>


            <div class="stat-info">

                <span>
                    Pengalaman
                </span>

                <strong id="experienceCount">
                    2
                </strong>

            </div>


        </div>


        <div class="stat-card">


            <div class="stat-icon">
                📄
            </div>


            <div class="stat-info">

                <span>
                    CV
                </span>

                <strong id="cvStatus">
                    ✓
                </strong>

            </div>


        </div>


    </section>


    <!-- =====================================================
         CONTENT GRID
    ===================================================== -->

    <div class="content-grid">


        <div class="main-column">


            <!-- =================================================
                 PROFIL PROFESIONAL
            ================================================= -->

            <section
                class="card"
                id="profil"
            >


                <div class="card-header">


                    <div class="card-title">


                        <div class="card-title-icon">
                            👤
                        </div>


                        <div>

                            <h2>
                                Profil Profesional
                            </h2>

                            <p>
                                Informasi dasar dan identitas profesional Anda
                            </p>

                        </div>


                    </div>


                    <button
                        class="edit-link"
                        onclick="editProfile()"
                    >
                        Edit Profile
                    </button>


                </div>


                <div
                    class="bio"
                    id="profileBio"
                >

                    Saya adalah pencari kerja yang memiliki
                    minat pada bidang teknologi informasi,
                    jaringan komputer, dan pengembangan
                    sistem. Saya terbuka untuk belajar,
                    berkembang, dan bekerja secara profesional.

                </div>


                <div class="info-grid">


                    <div class="info-item">

                        <label>
                            Nomor Telepon
                        </label>

                        <strong id="profilePhone">
                            +62 812-xxxx-xxxx
                        </strong>

                    </div>


                    <div class="info-item">

                        <label>
                            Alamat
                        </label>

                        <strong id="profileAddress">
                            Kota Tasikmalaya, Jawa Barat
                        </strong>

                    </div>


                    <div class="info-item">

                        <label>
                            Tanggal Lahir
                        </label>

                        <strong id="profileBirth">
                            Belum diisi
                        </strong>

                    </div>


                    <div class="info-item">

                        <label>
                            Jenis Kelamin
                        </label>

                        <strong id="profileGender">
                            Belum diisi
                        </strong>

                    </div>

                </div>


                <div class="links-row">


                    <a
                        href="#"
                        class="social-link"
                        id="portfolioLink"
                    >
                        🌐 Portfolio
                    </a>


                    <a
                        href="#"
                        class="social-link"
                        id="linkedinLink"
                    >
                        in LinkedIn
                    </a>


                </div>


            </section>


            <!-- =================================================
                 SKILLS
            ================================================= -->

            <section
                class="card"
                id="skills"
            >


                <div class="card-header">


                    <div class="card-title">


                        <div class="card-title-icon">
                            ⚙
                        </div>


                        <div>

                            <h2>
                                Skills
                            </h2>

                            <p>
                                Keahlian yang Anda kuasai
                            </p>

                        </div>


                    </div>


                    <button
                        class="edit-link"
                        onclick="tambahSkill()"
                    >
                        + Tambah Skill
                    </button>


                </div>


                <div
                    class="skills"
                    id="skillsContainer"
                >


                    <div class="skill">

                        <div class="skill-name">
                            Computer Networking
                        </div>

                        <div class="skill-bar">
                            <div style="width:90%;"></div>
                        </div>

                        <div class="skill-level">
                            90%
                        </div>

                    </div>


                    <div class="skill">

                        <div class="skill-name">
                            Mikrotik
                        </div>

                        <div class="skill-bar">
                            <div style="width:85%;"></div>
                        </div>

                        <div class="skill-level">
                            85%
                        </div>

                    </div>


                    <div class="skill">

                        <div class="skill-name">
                            Troubleshooting
                        </div>

                        <div class="skill-bar">
                            <div style="width:88%;"></div>
                        </div>

                        <div class="skill-level">
                            88%
                        </div>

                    </div>


                    <div class="skill">

                        <div class="skill-name">
                            HTML & CSS
                        </div>

                        <div class="skill-bar">
                            <div style="width:78%;"></div>
                        </div>

                        <div class="skill-level">
                            78%
                        </div>

                    </div>


                    <div class="skill">

                        <div class="skill-name">
                            Microsoft Office
                        </div>

                        <div class="skill-bar">
                            <div style="width:82%;"></div>
                        </div>

                        <div class="skill-level">
                            82%
                        </div>

                    </div>


                </div>


                <button
                    class="add-button"
                    onclick="tambahSkill()"
                >
                    + Tambahkan Skill Baru
                </button>


            </section>


            <!-- =================================================
                 PENDIDIKAN
            ================================================= -->

            <section
                class="card"
                id="pendidikan"
            >


                <div class="card-header">


                    <div class="card-title">


                        <div class="card-title-icon">
                            🎓
                        </div>


                        <div>

                            <h2>
                                Pendidikan
                            </h2>

                            <p>
                                Riwayat pendidikan Anda
                            </p>

                        </div>


                    </div>


                    <button
                        class="edit-link"
                        onclick="tambahPendidikan()"
                    >
                        + Tambah Pendidikan
                    </button>


                </div>


                <div
                    class="timeline"
                    id="educationContainer"
                >


                    <div class="timeline-item">


                        <div class="timeline-dot"></div>


                        <div class="timeline-actions">

                            <button
                                class="small-action"
                                onclick="editData('pendidikan')"
                            >
                                ✎
                            </button>

                            <button
                                class="small-action delete"
                                onclick="hapusData('pendidikan')"
                            >
                                ×
                            </button>

                        </div>


                        <h3>
                            Teknik Komputer dan Jaringan
                        </h3>


                        <div class="institution">
                            SMK Negeri 2 Tasikmalaya
                        </div>


                        <span class="period">
                            2022 - 2025
                        </span>


                        <p>
                            Fokus pembelajaran pada jaringan komputer,
                            administrasi server, Mikrotik,
                            troubleshooting perangkat dan dasar
                            pengembangan web.
                        </p>


                    </div>


                </div>


            </section>


            <!-- =================================================
                 PENGALAMAN KERJA
            ================================================= -->

            <section
                class="card"
                id="pengalaman"
            >


                <div class="card-header">


                    <div class="card-title">


                        <div class="card-title-icon">
                            💼
                        </div>


                        <div>

                            <h2>
                                Pengalaman Kerja
                            </h2>

                            <p>
                                Pengalaman profesional dan organisasi
                            </p>

                        </div>


                    </div>


                    <button
                        class="edit-link"
                        onclick="tambahPengalaman()"
                    >
                        + Tambah Pengalaman
                    </button>


                </div>


                <div
                    class="timeline"
                    id="experienceContainer"
                >


                    <div class="timeline-item">


                        <div class="timeline-dot"></div>


                        <div class="timeline-actions">

                            <button
                                class="small-action"
                                onclick="editData('pengalaman')"
                            >
                                ✎
                            </button>

                            <button
                                class="small-action delete"
                                onclick="hapusData('pengalaman')"
                            >
                                ×
                            </button>

                        </div>


                        <h3>
                            Teknisi Jaringan
                        </h3>


                        <div class="institution">
                            Perusahaan Teknologi Lokal
                        </div>


                        <span class="period">
                            Full Time · Tasikmalaya · 2025
                        </span>


                        <p>
                            Membantu instalasi jaringan,
                            melakukan troubleshooting perangkat,
                            konfigurasi router dan dokumentasi
                            infrastruktur jaringan.
                        </p>


                    </div>


                    <div class="timeline-item">


                        <div class="timeline-dot"></div>


                        <h3>
                            IT Support Intern
                        </h3>


                        <div class="institution">
                            Mitra Industri
                        </div>


                        <span class="period">
                            Internship · 2024
                        </span>


                        <p>
                            Mendukung kebutuhan teknis pengguna,
                            instalasi perangkat komputer dan
                            membantu pemeliharaan jaringan kantor.
                        </p>


                    </div>


                </div>


            </section>


            <!-- =================================================
                 RECOMMENDED JOBS
            ================================================= -->

            <section class="jobs-section">


                <div class="jobs-header">


                    <div>

                        <h2>
                            Lowongan yang Mungkin Sesuai
                        </h2>

                        <p>
                            Rekomendasi berdasarkan profil dan keahlian Anda
                        </p>

                    </div>


                    <a
                        href="{{ url('/lowongan') }}"
                        class="view-all"
                    >
                        Lihat Semua →
                    </a>


                </div>


                <div
                    class="jobs"
                    id="jobsContainer"
                >


                    <div class="job-card">


                        <div class="job-top">


                            <div class="job-company-icon">
                                IT
                            </div>


                            <span class="match">
                                98% Cocok
                            </span>


                        </div>


                        <h3>
                            Network & IT Infrastructure Staff
                        </h3>


                        <div class="job-company">
                            PT. Sansan Saudaratex Jaya
                        </div>


                        <div class="job-location">
                            ◉ Bungursari, Kota Tasikmalaya
                        </div>


                        <div class="job-salary">
                            Rp 3.200.000 - Rp 4.000.000 / bulan
                        </div>


                        <a
                            href="{{ url('/lowongan/1') }}"
                            class="job-btn"
                            style="
                                display:flex;
                                align-items:center;
                                justify-content:center;
                            "
                        >
                            Lihat Lowongan
                        </a>


                    </div>


                    <div class="job-card">


                        <div class="job-top">


                            <div class="job-company-icon">
                                IT
                            </div>


                            <span class="match">
                                94% Cocok
                            </span>


                        </div>


                        <h3>
                            Junior System Support & Data Operator
                        </h3>


                        <div class="job-company">
                            PT. Teodore Pan G Garment
                        </div>


                        <div class="job-location">
                            ◉ Kawalu, Kota Tasikmalaya
                        </div>


                        <div class="job-salary">
                            Rp 2.800.000 - Rp 3.500.000 / bulan
                        </div>


                        <a
                            href="{{ url('/lowongan/2') }}"
                            class="job-btn"
                            style="
                                display:flex;
                                align-items:center;
                                justify-content:center;
                            "
                        >
                            Lihat Lowongan
                        </a>


                    </div>


                    <div class="job-card">


                        <div class="job-top">


                            <div class="job-company-icon">
                                IT
                            </div>


                            <span class="match">
                                91% Cocok
                            </span>


                        </div>


                        <h3>
                            Digital Banking IT Support Staff
                        </h3>


                        <div class="job-company">
                            Bank BJB KC Tasikmalaya
                        </div>


                        <div class="job-location">
                            ◉ Tawang, Kota Tasikmalaya
                        </div>


                        <div class="job-salary">
                            Rp 3.500.000 - Rp 4.200.000 / bulan
                        </div>


                        <a
                            href="{{ url('/lowongan/3') }}"
                            class="job-btn"
                            style="
                                display:flex;
                                align-items:center;
                                justify-content:center;
                            "
                        >
                            Lihat Lowongan
                        </a>


                    </div>


                </div>


            </section>


        </div>


        <!-- =================================================
             SIDE COLUMN
        ================================================= -->

        <aside class="side-column">


            <!-- =================================================
                 CV
            ================================================= -->

            <section
                class="card"
                id="cv"
            >


                <div class="card-header">


                    <div class="card-title">


                        <div class="card-title-icon">
                            📄
                        </div>


                        <div>

                            <h2>
                                Curriculum Vitae
                            </h2>

                            <p>
                                CV profesional Anda
                            </p>

                        </div>


                    </div>


                </div>


                <div class="cv-box">


                    <div class="cv-main">


                        <div class="cv-icon">
                            PDF
                        </div>


                        <div class="cv-info">

                            <strong id="cvFileName">
                                CV_Pencari_Kerja.pdf
                            </strong>

                            <span id="cvUpdated">
                                Diperbarui baru-baru ini
                            </span>

                        </div>


                        <div class="cv-status">
                            Tersedia
                        </div>


                    </div>


                    <div class="cv-actions">


                        <button
                            class="secondary-btn"
                            onclick="lihatCV()"
                        >
                            Lihat CV
                        </button>


                        <button
                            class="primary-btn"
                            onclick="uploadCV()"
                        >
                            Update CV
                        </button>


                    </div>


                </div>


            </section>


            <!-- =================================================
                 VISIBILITY
            ================================================= -->

            <section class="card">


                <div class="card-header">


                    <div class="card-title">


                        <div class="card-title-icon">
                            ◉
                        </div>


                        <div>

                            <h2>
                                Visibilitas Profil
                            </h2>

                            <p>
                                Atur siapa yang dapat menemukan profil
                            </p>

                        </div>


                    </div>


                </div>


                <div class="visibility">


                    <div class="visibility-info">


                        <div class="visibility-icon">
                            ✓
                        </div>


                        <div>

                            <strong id="visibilityStatus">
                                Profil Publik
                            </strong>

                            <span>
                                Dapat ditemukan perusahaan
                            </span>

                        </div>


                    </div>


                    <div
                        class="switch"
                        id="visibilitySwitch"
                        onclick="toggleVisibility()"
                    ></div>


                </div>


                <p
                    style="
                        color:#87919d;
                        font-size:8px;
                        line-height:1.6;
                        margin-top:10px;
                    "
                >

                    Jika profil dibuat publik, perusahaan
                    yang menggunakan direktori pencari kerja
                    dapat menemukan informasi profesional Anda.

                </p>


            </section>


            <!-- =================================================
                 QUICK ACCESS
            ================================================= -->

            <section class="card">


                <div class="card-header">


                    <div class="card-title">


                        <div class="card-title-icon">
                            ⚡
                        </div>


                        <div>

                            <h2>
                                Akses Cepat
                            </h2>

                            <p>
                                Menu yang sering digunakan
                            </p>

                        </div>


                    </div>


                </div>


                <div class="quick-list">


                    <a
                        href="{{ url('/lowongan') }}"
                        class="quick-item"
                    >


                        <div class="quick-icon">
                            🔎
                        </div>


                        <div>

                            <strong>
                                Cari Lowongan Kerja
                            </strong>

                            <span>
                                Temukan pekerjaan sesuai keahlian
                            </span>

                        </div>


                    </a>


                    <a
                        href="#profil"
                        class="quick-item"
                    >


                        <div class="quick-icon">
                            👤
                        </div>


                        <div>

                            <strong>
                                Lihat Profil Sendiri
                            </strong>

                            <span>
                                Periksa tampilan profil profesional
                            </span>

                        </div>


                    </a>


                    <a
                        href="#profil"
                        class="quick-item"
                        onclick="editProfile()"
                    >


                        <div class="quick-icon">
                            ✎
                        </div>


                        <div>

                            <strong>
                                Edit Profile
                            </strong>

                            <span>
                                Perbarui informasi Anda
                            </span>

                        </div>


                    </a>


                </div>


            </section>


            <!-- =================================================
                 CAREER TIPS
            ================================================= -->

            <section class="card">


                <div class="card-title">


                    <div class="card-title-icon">
                        💡
                    </div>


                    <div>

                        <h2>
                            Tips Karier
                        </h2>

                        <p>
                            Tingkatkan kualitas profil
                        </p>

                    </div>


                </div>


                <div
                    style="
                        margin-top:14px;
                        background:#f7faff;
                        border-radius:10px;
                        padding:13px;
                    "
                >

                    <strong
                        style="
                            display:block;
                            color:#405065;
                            font-size:10px;
                            margin-bottom:5px;
                        "
                    >
                        Lengkapi portfolio Anda
                    </strong>


                    <p
                        style="
                            color:#7c8794;
                            font-size:8px;
                            line-height:1.6;
                        "
                    >

                        Profil dengan skill, pengalaman,
                        portfolio dan CV yang lengkap akan
                        terlihat lebih profesional bagi perusahaan.

                    </p>

                </div>


            </section>


        </aside>


    </div>


</main>


<!-- =========================================================
     FOOTER
========================================================= -->

<footer>


    <div class="footer-inner">


        <div class="footer-grid">


            <div>


                <div class="footer-brand">


                    <div class="footer-logo">
                        SK
                    </div>


                    <strong>
                        SiapKerja Kota Tasikmalaya
                    </strong>


                </div>


                <p>

                    Pusat integrasi layanan ketenagakerjaan
                    terpadu Pemerintah Kota Tasikmalaya.
                    Memfasilitasi layanan Kartu Kuning AK-1,
                    informasi lowongan kerja dan pelatihan
                    vokasi.

                </p>


            </div>


            <div>


                <h4>
                    Kontak Dinas
                </h4>


                <p>
                    Dinas Tenaga Kerja Kota Tasikmalaya
                </p>


                <p>
                    Jl. Ir. H. Juanda No. 191,
                    Kota Tasikmalaya, Jawa Barat
                </p>


                <p>
                    Call Center: 1500-xxx
                </p>


            </div>


            <div>


                <h4>
                    Tautan
                </h4>


                <a href="{{ url('/') }}">
                    Beranda
                </a>


                <a href="{{ url('/lowongan') }}">
                    Lowongan Kerja
                </a>


                <a href="{{ url('/tentang') }}">
                    Tentang Disnaker
                </a>


                <a href="#">
                    Kebijakan Privasi
                </a>


            </div>


        </div>


        <div class="footer-bottom">


            <span>

                © 2025 Dinas Tenaga Kerja Kota Tasikmalaya.
                Hak Cipta Dilindungi Undang-Undang.

            </span>


            <div class="footer-links">

                <a href="#">
                    Kebijakan Privasi
                </a>

                <a href="#">
                    Syarat & Ketentuan
                </a>

                <a href="#">
                    Peta Situs
                </a>

            </div>


        </div>


    </div>


</footer>


<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>


    /*
    |--------------------------------------------------------------------------
    | KONFIGURASI API
    |--------------------------------------------------------------------------
    */

    const API_BASE_URL =
        "{{ config('services.backend.url', 'http://127.0.0.1:8000/api') }}";


    /*
    |--------------------------------------------------------------------------
    | DATA DUMMY FALLBACK
    |--------------------------------------------------------------------------
    */

    const fallbackProfile = {

        name: "{{ session('nama_pengguna', 'Pencari Kerja') }}",

        headline:
            "Profesional muda siap berkembang dan menemukan peluang karier terbaik.",

        city:
            "Kota Tasikmalaya",

        email:
            "{{ session('email_pengguna', 'pencari@gmail.com') }}",

        phone:
            "+62 812-xxxx-xxxx",

        address:
            "Kota Tasikmalaya, Jawa Barat",

        birth_date:
            "Belum diisi",

        gender:
            "Belum diisi",

        bio:
            "Saya adalah pencari kerja yang memiliki minat pada bidang teknologi informasi, jaringan komputer, dan pengembangan sistem. Saya terbuka untuk belajar, berkembang, dan bekerja secara profesional.",

        portfolio:
            "#",

        linkedin:
            "#",

        is_public:
            true

    };


    /*
    |--------------------------------------------------------------------------
    | HELPER FETCH API
    |--------------------------------------------------------------------------
    */

    async function fetchAPI(endpoint, options = {}) {

        try {

            const response =
                await fetch(
                    API_BASE_URL + endpoint,
                    {
                        ...options,

                        headers: {
                            "Accept":
                                "application/json",

                            ...(options.headers || {})
                        }
                    }
                );


            if (!response.ok) {

                throw new Error(
                    "HTTP " + response.status
                );

            }


            return await response.json();

        } catch (error) {

            console.warn(
                "API tidak tersedia:",
                endpoint,
                error
            );

            return null;

        }

    }


    /*
    |--------------------------------------------------------------------------
    | LOAD PROFILE
    |--------------------------------------------------------------------------
    */

    async function loadProfile() {

        const data =
            await fetchAPI(
                "/job-seeker/profile"
            );


        if (!data) {

            renderProfile(
                fallbackProfile
            );

            return;

        }


        const profile =
            data.data || data;


        renderProfile(
            {
                ...fallbackProfile,
                ...profile
            }
        );

    }


    /*
    |--------------------------------------------------------------------------
    | RENDER PROFILE
    |--------------------------------------------------------------------------
    */

    function renderProfile(profile) {


        const name =
            profile.name ||
            profile.nama_lengkap ||
            fallbackProfile.name;


        const headline =
            profile.headline ||
            fallbackProfile.headline;


        document.getElementById(
            "profileName"
        ).textContent = name;


        document.getElementById(
            "navUserName"
        ).textContent = name;


        document.getElementById(
            "profileHeadline"
        ).textContent = headline;


        document.getElementById(
            "profileCity"
        ).textContent =
            "◉ " +
            (
                profile.city ||
                profile.kota ||
                fallbackProfile.city
            );


        document.getElementById(
            "profileEmail"
        ).textContent =
            "✉ " +
            (
                profile.email ||
                fallbackProfile.email
            );


        document.getElementById(
            "profileBio"
        ).textContent =
            profile.bio ||
            profile.deskripsi ||
            fallbackProfile.bio;


        document.getElementById(
            "profilePhone"
        ).textContent =
            profile.phone ||
            profile.nomor_telepon ||
            fallbackProfile.phone;


        document.getElementById(
            "profileAddress"
        ).textContent =
            profile.address ||
            profile.alamat ||
            fallbackProfile.address;


        document.getElementById(
            "profileBirth"
        ).textContent =
            profile.birth_date ||
            profile.tanggal_lahir ||
            fallbackProfile.birth_date;


        document.getElementById(
            "profileGender"
        ).textContent =
            profile.gender ||
            profile.jenis_kelamin ||
            fallbackProfile.gender;


        if (profile.portfolio) {

            document.getElementById(
                "portfolioLink"
            ).href =
                profile.portfolio;

        }


        if (profile.linkedin) {

            document.getElementById(
                "linkedinLink"
            ).href =
                profile.linkedin;

        }


        const initials =
            getInitials(name);


        document.getElementById(
            "profileAvatar"
        ).childNodes[0].textContent =
            initials;


        document.getElementById(
            "navAvatar"
        ).textContent =
            initials;


        if (
            profile.is_public !== undefined
        ) {

            updateVisibilityUI(
                Boolean(profile.is_public)
            );

        }

    }


    /*
    |--------------------------------------------------------------------------
    | INITIALS
    |--------------------------------------------------------------------------
    */

    function getInitials(name) {

        if (!name) {
            return "PK";
        }


        const words =
            name
                .trim()
                .split(/\s+/)
                .slice(0, 2);


        return words
            .map(word =>
                word.charAt(0)
                    .toUpperCase()
            )
            .join("");

    }


    /*
    |--------------------------------------------------------------------------
    | LOAD SKILLS
    |--------------------------------------------------------------------------
    */

    async function loadSkills() {

        const data =
            await fetchAPI(
                "/job-seeker/skills"
            );


        if (!data) {
            return;
        }


        const skills =
            data.data || data;


        if (!Array.isArray(skills)) {
            return;
        }


        document.getElementById(
            "skillCount"
        ).textContent =
            skills.length;


        if (!skills.length) {
            return;
        }


        const container =
            document.getElementById(
                "skillsContainer"
            );


        container.innerHTML = "";


        skills.forEach(skill => {


            const name =
                skill.name ||
                skill.nama ||
                skill.skill ||
                "Skill";


            let level =
                skill.level ||
                skill.tingkat ||
                skill.proficiency ||
                70;


            if (typeof level === "string") {

                const lower =
                    level.toLowerCase();


                if (
                    lower.includes("expert")
                ) {

                    level = 95;

                } else if (
                    lower.includes("advanced")
                ) {

                    level = 85;

                } else if (
                    lower.includes("intermediate")
                ) {

                    level = 70;

                } else {

                    level = 50;

                }

            }


            level =
                Math.max(
                    0,
                    Math.min(
                        100,
                        Number(level)
                    )
                );


            container.innerHTML += `

                <div class="skill">

                    <div class="skill-name">
                        ${escapeHTML(name)}
                    </div>

                    <div class="skill-bar">
                        <div style="width:${level}%"></div>
                    </div>

                    <div class="skill-level">
                        ${level}%
                    </div>

                </div>

            `;

        });

    }


    /*
    |--------------------------------------------------------------------------
    | LOAD EDUCATION
    |--------------------------------------------------------------------------
    */

    async function loadEducation() {

        const data =
            await fetchAPI(
                "/job-seeker/educations"
            );


        if (!data) {
            return;
        }


        const educations =
            data.data || data;


        if (!Array.isArray(educations)) {
            return;
        }


        document.getElementById(
            "educationCount"
        ).textContent =
            educations.length;


        if (!educations.length) {
            return;
        }


        const container =
            document.getElementById(
                "educationContainer"
            );


        container.innerHTML = "";


        educations.forEach(education => {


            const institution =
                education.institution ||
                education.institusi ||
                education.school ||
                "Institusi pendidikan";


            const degree =
                education.degree ||
                education.gelar ||
                education.program ||
                "Pendidikan";


            const field =
                education.field_of_study ||
                education.bidang_studi ||
                "";


            const start =
                education.start_date ||
                education.tanggal_mulai ||
                "";


            const end =
                education.end_date ||
                education.tanggal_selesai ||
                "Sekarang";


            container.innerHTML += `

                <div class="timeline-item">

                    <div class="timeline-dot"></div>

                    <div class="timeline-actions">

                        <button
                            class="small-action"
                            onclick="editData('pendidikan')"
                        >
                            ✎
                        </button>

                        <button
                            class="small-action delete"
                            onclick="hapusData('pendidikan')"
                        >
                            ×
                        </button>

                    </div>

                    <h3>
                        ${escapeHTML(degree)}
                    </h3>

                    <div class="institution">
                        ${escapeHTML(institution)}
                    </div>

                    <span class="period">
                        ${escapeHTML(start)}
                        -
                        ${escapeHTML(end)}
                    </span>

                    <p>
                        ${escapeHTML(field)}
                    </p>

                </div>

            `;

        });

    }


    /*
    |--------------------------------------------------------------------------
    | LOAD EXPERIENCES
    |--------------------------------------------------------------------------
    */

    async function loadExperiences() {

        const data =
            await fetchAPI(
                "/job-seeker/experiences"
            );


        if (!data) {
            return;
        }


        const experiences =
            data.data || data;


        if (!Array.isArray(experiences)) {
            return;
        }


        document.getElementById(
            "experienceCount"
        ).textContent =
            experiences.length;


        if (!experiences.length) {
            return;
        }


        const container =
            document.getElementById(
                "experienceContainer"
            );


        container.innerHTML = "";


        experiences.forEach(experience => {


            const company =
                experience.company ||
                experience.perusahaan ||
                "Perusahaan";


            const position =
                experience.position ||
                experience.posisi ||
                "Posisi";


            const type =
                experience.job_type ||
                experience.jenis_pekerjaan ||
                "";


            const location =
                experience.location ||
                experience.lokasi ||
                "";


            const start =
                experience.start_date ||
                experience.tanggal_mulai ||
                "";


            const end =
                experience.end_date ||
                experience.tanggal_selesai ||
                "Sekarang";


            const description =
                experience.description ||
                experience.deskripsi ||
                "";


            container.innerHTML += `

                <div class="timeline-item">

                    <div class="timeline-dot"></div>

                    <div class="timeline-actions">

                        <button
                            class="small-action"
                            onclick="editData('pengalaman')"
                        >
                            ✎
                        </button>

                        <button
                            class="small-action delete"
                            onclick="hapusData('pengalaman')"
                        >
                            ×
                        </button>

                    </div>

                    <h3>
                        ${escapeHTML(position)}
                    </h3>

                    <div class="institution">
                        ${escapeHTML(company)}
                    </div>

                    <span class="period">
                        ${escapeHTML(type)}
                        ·
                        ${escapeHTML(location)}
                        ·
                        ${escapeHTML(start)}
                        -
                        ${escapeHTML(end)}
                    </span>

                    <p>
                        ${escapeHTML(description)}
                    </p>

                </div>

            `;

        });

    }


    /*
    |--------------------------------------------------------------------------
    | LOAD CV
    |--------------------------------------------------------------------------
    */

    async function loadCV() {

        const data =
            await fetchAPI(
                "/job-seeker/profile/cv"
            );


        if (!data) {
            return;
        }


        const cv =
            data.data || data;


        if (!cv) {
            return;
        }


        document.getElementById(
            "cvStatus"
        ).textContent =
            "✓";


        document.getElementById(
            "cvFileName"
        ).textContent =
            cv.filename ||
            cv.file_name ||
            cv.name ||
            "CV Pencari Kerja.pdf";


        document.getElementById(
            "cvUpdated"
        ).textContent =
            cv.updated_at
                ? "Diperbarui " + cv.updated_at
                : "CV tersedia";

    }


    /*
    |--------------------------------------------------------------------------
    | LOAD JOBS
    |--------------------------------------------------------------------------
    */

    async function loadJobs() {

        const data =
            await fetchAPI(
                "/jobs"
            );


        if (!data) {
            return;
        }


        const jobs =
            data.data ||
            data.jobs ||
            data;


        if (!Array.isArray(jobs)) {
            return;
        }


        const container =
            document.getElementById(
                "jobsContainer"
            );


        if (!jobs.length) {

            container.innerHTML = `

                <div
                    class="loading"
                    style="grid-column:1/-1;"
                >
                    Belum ada lowongan yang tersedia.
                </div>

            `;

            return;

        }


        container.innerHTML = "";


        jobs
            .slice(0, 3)
            .forEach((job, index) => {


                const title =
                    job.title ||
                    job.judul ||
                    job.nama_lowongan ||
                    "Lowongan Pekerjaan";


                const company =
                    job.company_name ||
                    job.company ||
                    job.perusahaan ||
                    "Perusahaan";


                const location =
                    job.location ||
                    job.lokasi ||
                    "Tasikmalaya";


                const salary =
                    job.salary ||
                    job.gaji ||
                    "Informasi gaji tersedia";


                const id =
                    job.id ||
                    index + 1;


                container.innerHTML += `

                    <div class="job-card">

                        <div class="job-top">

                            <div class="job-company-icon">
                                ${escapeHTML(
                                    company
                                        .substring(0,2)
                                        .toUpperCase()
                                )}
                            </div>

                            <span class="match">
                                Lowongan Aktif
                            </span>

                        </div>

                        <h3>
                            ${escapeHTML(title)}
                        </h3>

                        <div class="job-company">
                            ${escapeHTML(company)}
                        </div>

                        <div class="job-location">
                            ◉ ${escapeHTML(location)}
                        </div>

                        <div class="job-salary">
                            ${escapeHTML(String(salary))}
                        </div>

                        <a
                            href="/lowongan/${id}"
                            class="job-btn"
                            style="
                                display:flex;
                                align-items:center;
                                justify-content:center;
                            "
                        >
                            Lihat Lowongan
                        </a>

                    </div>

                `;

            });

    }


    /*
    |--------------------------------------------------------------------------
    | ESCAPE HTML
    |--------------------------------------------------------------------------
    */

    function escapeHTML(value) {

        return String(value ?? "")
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");

    }


    /*
    |--------------------------------------------------------------------------
    | PROFILE ACTIONS
    |--------------------------------------------------------------------------
    */

    function editProfile() {

        alert(
            "Halaman Edit Profile akan digunakan untuk memperbarui data profil profesional."
        );

    }


    function lihatProfil() {

        alert(
            "Halaman profil publik pencari kerja akan tersedia pada tahap berikutnya."
        );

    }


    function tambahSkill() {

        alert(
            "Form tambah skill akan tersedia pada tahap berikutnya."
        );

    }


    function tambahPendidikan() {

        alert(
            "Form tambah pendidikan akan tersedia pada tahap berikutnya."
        );

    }


    function tambahPengalaman() {

        alert(
            "Form tambah pengalaman akan tersedia pada tahap berikutnya."
        );

    }


    function editData(type) {

        alert(
            "Edit data " + type + " akan tersedia pada tahap berikutnya."
        );

    }


    function hapusData(type) {

        const confirmDelete =
            confirm(
                "Apakah Anda yakin ingin menghapus data " +
                type +
                "?"
            );


        if (confirmDelete) {

            alert(
                "Data " +
                type +
                " akan diproses melalui API."
            );

        }

    }


    function uploadCV() {

        alert(
            "Fitur upload/update CV akan menggunakan endpoint CV pada backend."
        );

    }


    function lihatCV() {

        alert(
            "CV akan dibuka dari file yang tersimpan pada akun Anda."
        );

    }


    /*
    |--------------------------------------------------------------------------
    | VISIBILITY
    |--------------------------------------------------------------------------
    */

    let isPublic = true;


    function toggleVisibility() {

        isPublic =
            !isPublic;


        updateVisibilityUI(
            isPublic
        );


        /*
         * Endpoint update visibility belum ditentukan
         * pada API yang diberikan.
         *
         * Karena itu frontend tidak melakukan POST/PATCH
         * ke endpoint yang belum tersedia.
         */

        console.log(
            "is_public:",
            isPublic
        );

    }


    function updateVisibilityUI(publicStatus) {

        const status =
            document.getElementById(
                "visibilityStatus"
            );


        const switchElement =
            document.getElementById(
                "visibilitySwitch"
            );


        if (publicStatus) {

            status.textContent =
                "Profil Publik";


            switchElement.style.background =
                "#07865c";

        } else {

            status.textContent =
                "Profil Privat";


            switchElement.style.background =
                "#9aa3ad";

        }

    }


    /*
    |--------------------------------------------------------------------------
    | INITIAL LOAD
    |--------------------------------------------------------------------------
    */

    document.addEventListener(
        "DOMContentLoaded",
        function () {

            loadProfile();

            loadSkills();

            loadEducation();

            loadExperiences();

            loadCV();

            loadJobs();

        }
    );

</script>


</body>

</html>