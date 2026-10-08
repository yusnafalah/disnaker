<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Pelamar Masuk - Disnaker Kota Tasikmalaya
    </title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        :root {
            --blue: #1468c4;
            --blue-dark: #0d58a9;
            --blue-deep: #073f9e;

            --soft: #f5f7fc;
            --panel: #ffffff;

            --text: #17213c;
            --muted: #70798d;

            --line: #e6eaf2;

            --green: #07895d;
            --green-soft: #e5fbf2;

            --lav: #f0f3ff;

            --orange: #d88b20;
            --orange-soft: #fff2dd;

            --red: #d93838;
        }

        body {
            background: var(--soft);
            color: var(--text);
            min-height: 100vh;
        }

        button,
        input,
        select {
            font: inherit;
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

            padding: 28px 14px;

            overflow: hidden;

            z-index: 1000;

            transition: 0.3s ease;

            border-bottom-right-radius: 95px;
        }

        .sidebar:hover {
            width: 255px;
        }


        /* =====================================================
           LOGO
        ===================================================== */

        .logo-area {
            display: flex;
            align-items: center;

            height: 70px;

            margin-bottom: 28px;

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

            font-size: 24px;

            background: rgba(255,255,255,.08);
        }

        .logo-text {
            margin-left: 12px;

            color: #fff;

            opacity: 0;

            transition: 0.2s ease;
        }

        .sidebar:hover .logo-text {
            opacity: 1;
        }

        .logo-text strong {
            display: block;

            font-size: 19px;

            letter-spacing: .3px;
        }

        .logo-text span {
            display: block;

            font-size: 12px;

            margin-top: 3px;

            opacity: .9;
        }


        /* =====================================================
           PORTAL LABEL
        ===================================================== */

        .portal-label {
            display: inline-block;

            background: rgba(255,255,255,.12);

            color: #fff;

            border-radius: 20px;

            padding: 7px 12px;

            font-size: 10px;

            white-space: nowrap;

            margin-bottom: 25px;

            opacity: 0;

            transition: 0.2s ease;
        }

        .sidebar:hover .portal-label {
            opacity: 1;
        }


        /* =====================================================
           MENU
        ===================================================== */

        .menu {
            display: flex;

            flex-direction: column;

            gap: 8px;
        }

        .menu a {
            height: 52px;

            display: flex;

            align-items: center;

            text-decoration: none;

            color: #fff;

            border-radius: 12px;

            padding: 0 14px;

            white-space: nowrap;

            transition: 0.2s ease;
        }

        .menu a:hover {
            background: rgba(0,0,0,.12);
        }

        .menu a.active {
            background: var(--blue-dark);

            box-shadow:
                inset 3px 0 0 #fff,
                0 4px 10px rgba(0,0,0,.08);
        }

        .menu-icon {
            min-width: 34px;

            width: 34px;

            height: 34px;

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

            transition: 0.2s ease;
        }

        .sidebar:hover .menu-text {
            opacity: 1;
        }

        .menu-badge {
            margin-left: auto;

            background: #52efb5;

            color: #096d50;

            font-weight: bold;

            font-size: 9px;

            border-radius: 10px;

            padding: 4px 6px;

            opacity: 0;

            transition: .2s ease;
        }

        .sidebar:hover .menu-badge {
            opacity: 1;
        }


        /* =====================================================
           SIDEBAR BOTTOM
        ===================================================== */

        .sidebar-bottom {
            position: absolute;

            left: 14px;
            right: 14px;

            bottom: 32px;
        }

        .help-box {
            color: #fff;

            padding: 12px 10px;

            border-radius: 10px;

            margin-bottom: 10px;

            white-space: nowrap;

            opacity: 0;

            transition: .2s ease;
        }

        .sidebar:hover .help-box {
            opacity: 1;
        }

        .help-box small {
            display: block;

            font-size: 11px;

            opacity: .8;
        }

        .help-box strong {
            font-size: 13px;
        }

        .logout {
            display: flex;

            align-items: center;

            gap: 12px;

            color: #ff4d5e;

            text-decoration: none;

            padding: 10px;

            white-space: nowrap;

            font-size: 13px;
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

            transition: .2s ease;
        }

        .sidebar:hover .logout-text {
            opacity: 1;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            margin-left: 88px;

            min-height: 100vh;

            transition: .3s ease;
        }

        .sidebar:hover ~ .main {
            margin-left: 255px;
        }


        /* =====================================================
           TOPBAR
        ===================================================== */

        .topbar {
            height: 74px;

            background: #fff;

            border-bottom: 1px solid var(--line);

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 20px;

            gap: 20px;
        }

        .top-left {
            display: flex;

            align-items: center;

            gap: 14px;
        }

        .date {
            font-size: 12px;

            color: #566075;

            white-space: nowrap;
        }

        .verified {
            background: var(--green-soft);

            color: #078a5a;

            padding: 8px 12px;

            border-radius: 20px;

            font-size: 10px;

            font-weight: 700;

            white-space: nowrap;
        }

        .sync {
            background: #eef6ff;

            color: #2e6fc8;

            padding: 7px 11px;

            border-radius: 20px;

            font-size: 9px;

            font-weight: 700;

            float: right;

            margin-top: -48px;
        }

        .top-right {
            display: flex;

            align-items: center;

            gap: 16px;
        }

        .notification {
            width: 30px;

            height: 30px;

            display: flex;

            align-items: center;

            justify-content: center;

            position: relative;

            color: #4a556b;

            font-size: 18px;
        }

        .notification-dot {
            position: absolute;

            width: 6px;

            height: 6px;

            border-radius: 50%;

            background: #d63b3b;

            top: 4px;

            right: 4px;
        }

        .company {
            display: flex;

            align-items: center;

            gap: 10px;
        }

        .company-name strong {
            display: block;

            font-size: 13px;

            text-align: right;
        }

        .company-name span {
            display: block;

            font-size: 9px;

            color: #7a8292;

            text-align: right;

            margin-top: 3px;
        }

        .company-logo {
            width: 37px;

            height: 37px;

            border-radius: 50%;

            background: var(--blue-deep);

            color: #fff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: bold;

            font-size: 13px;
        }


        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            padding: 18px 20px 40px;
        }

        .breadcrumb {
            font-size: 11px;

            color: #7d8494;

            margin-bottom: 10px;
        }

        .breadcrumb strong {
            color: #083e99;
        }

        .headline {
            display: flex;

            align-items: flex-end;

            justify-content: space-between;

            gap: 18px;

            margin-bottom: 18px;
        }

        .headline h1 {
            font-size: 25px;

            line-height: 1.13;

            color: #17213c;
        }

        .headline p {
            font-size: 12px;

            line-height: 1.5;

            color: #697386;

            margin-top: 7px;

            max-width: 690px;
        }

        .headline p strong {
            color: #064fb2;
        }

        .actions {
            display: flex;

            gap: 8px;

            flex-wrap: wrap;

            justify-content: flex-end;
        }

        .btn {
            border: 0;

            border-radius: 8px;

            padding: 10px 12px;

            font-size: 10px;

            font-weight: 700;

            cursor: pointer;
        }

        .btn-outline {
            background: #fff;

            border: 1px solid #dce3ee;

            color: #31507f;
        }

        .btn-green {
            background: #0a8d64;

            color: #fff;
        }

        .btn-blue {
            background: #0b4aa7;

            color: #fff;
        }

        .btn-red {
            background: #ffe8e8;

            color: #c83232;
        }


        /* =====================================================
           STATS
        ===================================================== */

        .stats {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 12px;

            margin-bottom: 14px;
        }

        .stat-card {
            background: #fff;

            border: 1px solid #e9edf4;

            border-radius: 12px;

            padding: 14px;

            min-height: 134px;

            position: relative;

            overflow: hidden;
        }

        .stat-card:after {
            content: "";

            position: absolute;

            width: 115px;

            height: 115px;

            border-radius: 50%;

            right: -30px;

            bottom: -56px;

            background: #f2f5ff;
        }

        .stat-card.green-card:after {
            background: #eefcf6;
        }

        .stat-card.orange-card:after {
            background: #fff8ec;
        }

        .stat-card .stat-label {
            font-size: 10px;

            color: #5f6677;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: .2px;

            max-width: 145px;
        }

        .stat-icon {
            position: absolute;

            right: 14px;

            top: 13px;

            width: 31px;

            height: 31px;

            border-radius: 8px;

            background: #e6edff;

            color: #0a51b4;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 14px;

            z-index: 2;
        }

        .green-card .stat-icon {
            background: #dcf7eb;

            color: #0d8b60;
        }

        .orange-card .stat-icon {
            background: #ffe8c4;

            color: #ba7410;
        }

        .stat-value {
            position: relative;

            z-index: 2;

            font-size: 38px;

            font-weight: 800;

            letter-spacing: -1px;

            margin-top: 15px;
        }

        .stat-value span {
            font-size: 20px;

            font-weight: 500;

            letter-spacing: 0;
        }

        .stat-meta {
            display: flex;

            gap: 5px;

            flex-wrap: wrap;

            margin-top: 7px;

            position: relative;

            z-index: 2;
        }

        .chip {
            font-size: 7px;

            padding: 4px 6px;

            border-radius: 10px;

            background: #edf0f8;

            color: #758095;
        }

        .chip.green {
            background: #dbf7e9;

            color: #087f5a;
        }

        .chip.orange {
            background: #ffedcf;

            color: #af6e16;
        }


        /* =====================================================
           FILTER
        ===================================================== */

        .filter-card {
            background: #fff;

            border: 1px solid #e8edf5;

            border-radius: 12px;

            padding: 12px;

            margin-bottom: 14px;
        }

        .search-row {
            display: flex;

            gap: 7px;
        }

        .search-wrap {
            flex: 1;

            position: relative;
        }

        .search-wrap span {
            position: absolute;

            left: 11px;

            top: 50%;

            transform: translateY(-50%);

            color: #6d7890;

            font-size: 13px;
        }

        .search {
            width: 100%;

            height: 39px;

            border: 1px solid transparent;

            background: #f0f3ff;

            border-radius: 8px;

            padding:
                0
                12px
                0
                32px;

            font-size: 10px;

            outline: none;
        }

        .search:focus {
            border-color: #a9c4f0;
        }

        .view-toggle {
            display: flex;

            background: #f0f3ff;

            border-radius: 8px;

            padding: 2px;
        }

        .toggle-btn {
            border: 0;

            background: transparent;

            border-radius: 6px;

            color: #566177;

            font-size: 9px;

            padding: 8px 10px;

            cursor: pointer;
        }

        .toggle-btn.active {
            background: #fff;

            color: #0848a9;

            box-shadow:
                0 2px 7px rgba(20,56,110,.08);

            font-weight: 700;
        }

        .filter-row {
            display: grid;

            grid-template-columns:
                1.2fr
                .95fr
                1.1fr
                1.1fr;

            gap: 7px;

            margin-top: 8px;
        }

        .select {
            width: 100%;

            height: 38px;

            border: 0;

            background: #f6f7fb;

            border-radius: 8px;

            padding: 0 9px;

            font-size: 9px;

            color: #4b566d;

            outline: none;
        }

        .applied {
            display: flex;

            align-items: center;

            gap: 7px;

            margin-top: 8px;

            color: #7b8393;

            font-size: 8px;

            flex-wrap: wrap;
        }

        .filter-chip {
            background: #eef3ff;

            border-radius: 11px;

            padding: 4px 7px;

            color: #1a55b5;

            font-weight: 700;
        }

        .reset {
            color: #df3636;

            cursor: pointer;

            font-weight: 700;
        }


        /* =====================================================
           WORKSPACE
        ===================================================== */

        .workspace {
            display: grid;

            grid-template-columns:
                minmax(0, 1fr)
                260px;

            gap: 14px;

            align-items: start;
        }

        .table-card {
            background: #fff;

            border: 1px solid #e7ebf2;

            border-radius: 12px;

            overflow: hidden;
        }

        .table-head {
            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 12px 13px;

            border-bottom: 1px solid #eef1f5;
        }

        .table-head-left {
            font-size: 9px;

            color: #414b61;
        }

        .table-tools {
            display: flex;

            gap: 5px;
        }

        .small-btn {
            border: 0;

            background: #f0f3ff;

            color: #4b5b78;

            font-size: 8px;

            padding: 6px 8px;

            border-radius: 6px;

            cursor: pointer;
        }

        .small-btn:hover {
            background: #e8edfb;
        }

        .table {
            width: 100%;

            border-collapse: collapse;
        }

        .table th {
            font-size: 8px;

            color: #7a8293;

            text-transform: uppercase;

            letter-spacing: .3px;

            text-align: left;

            padding: 10px;

            background: #fbfcfe;

            border-bottom: 1px solid #edf0f5;
        }

        .table td {
            padding: 9px 10px;

            border-bottom: 1px solid #edf0f5;

            vertical-align: middle;
        }

        .table tr:last-child td {
            border-bottom: 0;
        }

        .table tr.clickable {
            cursor: pointer;
        }

        .table tr.clickable:hover {
            background: #fafcff;
        }

        .table tr.selected {
            background: #f5f8ff;
        }

        .check {
            width: 15px;

            height: 15px;
        }

        .identity {
            display: flex;

            align-items: center;

            gap: 8px;

            min-width: 180px;
        }

        .avatar {
            width: 34px;

            height: 34px;

            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    #bfd4f6,
                    #edf3ff
                );

            display: flex;

            align-items: center;

            justify-content: center;

            color: #123f99;

            font-size: 10px;

            font-weight: 700;

            border: 1px solid #dbe4f5;

            overflow: hidden;

            flex: 0 0 auto;
        }

        .candidate-name {
            font-size: 11px;

            font-weight: 700;

            color: #123e98;
        }

        .candidate-meta {
            font-size: 8px;

            color: #6f7788;

            margin-top: 3px;

            line-height: 1.4;
        }

        .mini-tag {
            font-size: 7px;

            background: #ddf8ec;

            color: #08795a;

            padding: 3px 5px;

            border-radius: 8px;

            margin-top: 4px;

            display: inline-block;
        }

        .edu strong {
            display: block;

            font-size: 10px;
        }

        .edu span {
            display: block;

            font-size: 8px;

            color: #6f7788;

            margin-top: 3px;

            line-height: 1.35;
        }

        .match {
            min-width: 100px;
        }

        .match-line {
            height: 5px;

            border-radius: 10px;

            background: #e5e9ee;

            overflow: hidden;

            margin-bottom: 4px;
        }

        .match-line i {
            display: block;

            height: 100%;

            background: #0b825f;
        }

        .match-label {
            font-size: 8px;

            color: #07835d;

            font-weight: 700;
        }

        .loc strong {
            font-size: 10px;

            display: block;
        }

        .loc span {
            font-size: 8px;

            color: #808897;

            display: block;

            margin-top: 3px;

            line-height: 1.3;
        }

        .table-footer {
            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 8px 12px;

            background: #f8f9fc;

            font-size: 8px;

            color: #697286;
        }

        .pagination {
            display: flex;

            gap: 4px;
        }

        .page-btn {
            width: 26px;

            height: 26px;

            border: 0;

            border-radius: 6px;

            background: #fff;

            color: #39445b;

            cursor: pointer;

            font-size: 9px;
        }

        .page-btn.active {
            background: #0b45a6;

            color: #fff;
        }

        .page-btn:hover {
            background: #ebeff8;
        }

        .page-btn.active:hover {
            background: #0b45a6;
        }


        /* =====================================================
           PREVIEW
        ===================================================== */

        .preview {
            background: #fff;

            border: 1px solid #e6eaf1;

            border-radius: 12px;

            overflow: hidden;

            position: sticky;

            top: 88px;
        }

        .preview-head {
            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 13px;

            border-bottom: 1px solid #edf0f4;
        }

        .preview-head strong {
            font-size: 11px;

            color: #094aa7;
        }

        .status {
            background: #dff8ed;

            color: #07805a;

            font-size: 7px;

            padding: 4px 6px;

            border-radius: 9px;

            font-weight: 700;
        }

        .preview-body {
            padding: 10px;
        }

        .preview-profile {
            background: #f0f3ff;

            border-radius: 9px;

            padding: 10px;

            display: flex;

            gap: 9px;
        }

        .preview-avatar {
            width: 48px;

            height: 48px;

            border-radius: 11px;

            background: #dce7fb;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #173e93;

            font-weight: 800;
        }

        .preview-profile h3 {
            font-size: 12px;

            color: #0f3f9b;
        }

        .preview-profile p {
            font-size: 8px;

            color: #667084;

            margin-top: 4px;

            line-height: 1.4;
        }

        .valid {
            display: block;

            color: #05855e;

            font-size: 8px;

            font-weight: 700;

            margin-top: 5px;
        }

        .preview-section {
            margin-top: 10px;
        }

        .preview-label {
            font-size: 8px;

            color: #7a8292;

            text-transform: uppercase;

            letter-spacing: .4px;

            margin-bottom: 6px;
        }

        .info-grid {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 7px;
        }

        .info-box {
            background: #f8f9fc;

            border-radius: 7px;

            padding: 7px;
        }

        .info-box small {
            display: block;

            color: #7e8797;

            font-size: 7px;

            margin-bottom: 3px;
        }

        .info-box strong {
            display: block;

            font-size: 8px;

            color: #293349;

            line-height: 1.3;
        }

        .skills {
            display: flex;

            flex-wrap: wrap;

            gap: 4px;
        }

        .skill {
            background: #eaf0ff;

            color: #3f5c90;

            border-radius: 7px;

            padding: 4px 6px;

            font-size: 7px;
        }

        .skill.green {
            background: #ddf7eb;

            color: #07805a;
        }

        .quote {
            background: #f1f3fe;

            border-radius: 8px;

            padding: 8px;

            color: #676f82;

            font-size: 8px;

            font-style: italic;

            line-height: 1.5;
        }

        .files {
            display: grid;

            grid-template-columns:
                1fr
                1fr;

            gap: 5px;
        }

        .file-pill {
            background: #f4f5f9;

            border-radius: 7px;

            padding: 6px;

            font-size: 7px;

            color: #545d70;
        }

        .decision {
            margin-top: 10px;
        }

        .decision .btn {
            width: 100%;

            margin-bottom: 6px;
        }

        .decision .split {
            display: grid;

            grid-template-columns:
                1fr
                1fr;

            gap: 6px;
        }


        /* =====================================================
           COMPLIANCE
        ===================================================== */

        .compliance {
            background: #eef2ff;

            border-radius: 12px;

            padding: 12px 13px;

            margin-top: 14px;

            display: flex;

            align-items: center;

            gap: 10px;

            justify-content: space-between;
        }

        .compliance-main {
            display: flex;

            gap: 10px;

            align-items: flex-start;
        }

        .compliance-icon {
            width: 30px;

            height: 30px;

            background: #dce7ff;

            color: #0b4aa7;

            border-radius: 8px;

            display: flex;

            align-items: center;

            justify-content: center;
        }

        .compliance h3 {
            font-size: 12px;

            margin-bottom: 4px;
        }

        .compliance p {
            font-size: 8px;

            color: #697386;

            line-height: 1.45;
        }

        .guide {
            border: 0;

            background: #fff;

            border-radius: 7px;

            padding: 8px 10px;

            color: #164b9b;

            font-weight: 700;

            font-size: 8px;

            cursor: pointer;

            white-space: nowrap;
        }


        /* =====================================================
           PIPELINE
        ===================================================== */

        .pipeline {
            display: none;

            background: #fff;

            border: 1px solid #e7ebf2;

            border-radius: 12px;

            padding: 12px;
        }

        .pipeline.active {
            display: block;
        }

        .board {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 8px;
        }

        .column {
            background: #f6f8fc;

            border-radius: 10px;

            padding: 8px;

            min-height: 250px;
        }

        .column h4 {
            font-size: 9px;

            color: #4c566e;

            margin-bottom: 7px;

            display: flex;

            justify-content: space-between;
        }

        .count {
            background: #e8edf7;

            padding: 3px 6px;

            border-radius: 8px;

            font-size: 7px;
        }

        .candidate-card {
            background: #fff;

            border: 1px solid #e8ebf1;

            border-radius: 8px;

            padding: 8px;

            margin-bottom: 6px;

            cursor: pointer;
        }

        .candidate-card strong {
            font-size: 9px;

            display: block;
        }

        .candidate-card span {
            font-size: 7px;

            color: #727b8d;

            display: block;

            margin-top: 3px;
        }

        .candidate-card .card-score {
            font-size: 7px;

            color: #087d5c;

            font-weight: 700;

            margin-top: 5px;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 1150px) {

            .stats {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .workspace {
                grid-template-columns: 1fr;
            }

            .preview {
                position: static;
            }

            .board {
                grid-template-columns:
                    repeat(2, 1fr);
            }

        }


        @media (max-width: 800px) {

            .sidebar {
                width: 70px;

                padding-left: 10px;

                padding-right: 10px;
            }

            .sidebar:hover {
                width: 215px;
            }

            .main {
                margin-left: 70px;
            }

            .sidebar:hover ~ .main {
                margin-left: 215px;
            }

            .topbar {
                height: auto;

                padding: 12px;

                align-items: flex-start;

                flex-direction: column;
            }

            .top-left,
            .top-right {
                width: 100%;

                flex-wrap: wrap;
            }

            .headline {
                align-items: flex-start;

                flex-direction: column;
            }

            .filter-row {
                grid-template-columns:
                    1fr
                    1fr;
            }

            .table-card {
                overflow: auto;
            }

            .table {
                min-width: 760px;
            }

            .compliance {
                align-items: flex-start;

                flex-direction: column;
            }

        }


        @media (max-width: 560px) {

            .content {
                padding: 14px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .filter-row {
                grid-template-columns: 1fr;
            }

            .search-row {
                flex-direction: column;
            }

            .view-toggle {
                width: 100%;

                justify-content: center;
            }

            .board {
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

                <strong>
                    DISNAKER
                </strong>

                <span>
                    KOTA TASIKMALAYA
                </span>

            </div>

        </div>


        <div class="portal-label">
            • PORTAL MITRA PERUSAHAAN
        </div>


        <nav class="menu">

            <a href="{{ url('/dashboard-perusahaan') }}">

                <span class="menu-icon">
                    ⌂
                </span>

                <span class="menu-text">
                    Dashboard
                </span>

            </a>


            <a href="{{ url('/lowongan-saya') }}">

                <span class="menu-icon">
                    ▱
                </span>

                <span class="menu-text">
                    Lowongan Saya
                </span>

            </a>


            <a href="{{ url('/pelamar-masuk') }}"
               class="active"
               aria-current="page">

                <span class="menu-icon">
                    ♙
                </span>

                <span class="menu-text">
                    Pelamar Masuk
                </span>

                <span class="menu-badge">
                    184 AK-1
                </span>

            </a>


            <a href="{{ url('/profil-perusahaan') }}">

                <span class="menu-icon">
                    ▣
                </span>

                <span class="menu-text">
                    Profil Perusahaan
                </span>

            </a>


            <a href="{{ url('/pengaturan-akun') }}">

                <span class="menu-icon">
                    ⚙
                </span>

                <span class="menu-text">
                    Pengaturan Akun
                </span>

            </a>

        </nav>


        <div class="sidebar-bottom">

            <div class="help-box">

                <small>
                    ● Pusat Bantuan Disnaker
                </small>

                <strong>
                    0265-313997
                </strong>

            </div>


            <a href="{{ url('/logout') }}"
               class="logout">

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
                    ▣ &nbsp; Kamis, 24 Oktober 2024
                </div>

                <div class="verified">
                    ◉ Mitra Terverifikasi Disnaker Tasikmalaya
                </div>

            </div>


            <div class="top-right">

                <div class="notification">

                    ♧

                    <span class="notification-dot"></span>

                </div>


                <div class="company">

                    <div class="company-name">

                        <strong>
                            PT. Sansan Saudaratex Jaya
                        </strong>

                        <span>
                            Industri Tekstil & Produk Tekstil
                        </span>

                    </div>

                    <div class="company-logo">
                        PS
                    </div>

                </div>

            </div>

        </header>


        <!-- =====================================================
             CONTENT
        ===================================================== -->

        <section class="content">


            <div class="breadcrumb">

                Portal Mitra
                &nbsp;›&nbsp;

                <strong>
                    Pelamar Masuk
                </strong>

            </div>


            <!-- =================================================
                 HEADER
            ================================================= -->

            <div class="headline">

                <div>

                    <h1>
                        Manajemen Pelamar Masuk
                        &amp; Kurasi AK-1
                    </h1>

                    <p>

                        Kelola
                        <strong>
                            184 berkas pencari kerja
                        </strong>

                        terverifikasi Kartu Kuning
                        (AK-1) Dinas Tenaga Kerja
                        Kota Tasikmalaya yang melamar
                        ke lowongan aktif PT. Sansan
                        Saudaratex Jaya.

                    </p>

                </div>


                <div class="actions">

                    <button
                        class="btn btn-outline"
                        type="button"
                        onclick="notify('Ekspor Data siap digunakan pada tahap integrasi backend.')">

                        ⇩ Ekspor Data

                    </button>


                    <button
                        class="btn btn-green"
                        type="button"
                        onclick="notify('Panggilan massal WA siap digunakan pada tahap integrasi backend.')">

                        ▣ Panggilan Massal WA

                    </button>


                    <button
                        class="btn btn-blue"
                        type="button"
                        onclick="notify('Rekap Laporan Disnaker siap digunakan pada tahap integrasi backend.')">

                        ▣ Rekap Laporan Disnaker

                    </button>

                </div>

            </div>


            <div class="sync">

                ● Sinkronisasi SiapKerja
                Kemnaker &amp; Disnaker TSM Aktif

            </div>


            <!-- =================================================
                 STATISTICS
            ================================================= -->

            <div class="stats">


                <div class="stat-card">

                    <div class="stat-icon">
                        ♙
                    </div>

                    <div class="stat-label">
                        Total Pelamar Masuk
                    </div>

                    <div class="stat-value">

                        184

                        <span>
                            Orang
                        </span>

                    </div>

                    <div class="stat-meta">

                        <span class="chip green">
                            ↗ +14 Hari Ini
                        </span>

                        <span class="chip">
                            Dari 12 lowongan aktif
                        </span>

                    </div>

                </div>


                <div class="stat-card green-card">

                    <div class="stat-icon">
                        ◉
                    </div>

                    <div class="stat-label">
                        Prioritas Warga TSM
                        (AK-1)
                    </div>

                    <div class="stat-value">

                        162

                        <span>
                            Orang
                        </span>

                    </div>

                    <div class="stat-meta">

                        <span class="chip green">
                            (88.0%)
                        </span>

                        <span class="chip">
                            NIK Dukcapil Valid
                        </span>

                    </div>

                </div>


                <div class="stat-card orange-card">

                    <div class="stat-icon">
                        ▣
                    </div>

                    <div class="stat-label">
                        Dalam Proses Seleksi
                    </div>

                    <div class="stat-value">

                        48

                        <span>
                            Kandidat
                        </span>

                    </div>

                    <div class="stat-meta">

                        <span class="chip">
                            24 Berkas
                        </span>

                        <span class="chip">
                            16 Tes
                        </span>

                        <span class="chip orange">
                            8 Wawancara
                        </span>

                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        ♙
                    </div>

                    <div class="stat-label">
                        Lolos Kurasi /
                        Diterima
                    </div>

                    <div class="stat-value">

                        28

                        <span>
                            Orang
                        </span>

                    </div>

                    <div class="stat-meta">

                        <span class="chip green">
                            Siap Lapor WLTK
                        </span>

                        <span class="chip">
                            Target kuota: 35 orang
                        </span>

                    </div>

                </div>


            </div>


            <!-- =================================================
                 FILTER
            ================================================= -->

            <div class="filter-card">


                <div class="search-row">

                    <div class="search-wrap">

                        <span>
                            ⌕
                        </span>

                        <input
                            id="searchInput"
                            class="search"
                            type="text"
                            placeholder="Cari nama pelamar, NIK, No. Registrasi AK-1, sekolah, atau keahlian jahit/mesin..."
                        >

                    </div>


                    <div class="view-toggle">

                        <button
                            class="toggle-btn active"
                            id="listBtn"
                            type="button">

                            ▤ Daftar Tabel

                        </button>


                        <button
                            class="toggle-btn"
                            id="pipelineBtn"
                            type="button">

                            ◫ Pipeline Alur

                        </button>


                        <button
                            class="toggle-btn"
                            id="refreshBtn"
                            type="button"
                            title="Muat ulang">

                            ⟳

                        </button>

                    </div>

                </div>


                <div class="filter-row">


                    <select
                        id="jobFilter"
                        class="select">

                        <option value="">
                            POSISI LOWONGAN • Semua Posisi
                        </option>

                        <option>
                            Operator Jahit &amp;
                            Bordir Mesin
                            (74 Pelamar)
                        </option>

                        <option>
                            Staff Administrasi
                            (36 Pelamar)
                        </option>

                        <option>
                            Quality Control
                            (28 Pelamar)
                        </option>

                        <option>
                            Teknisi Mesin
                            (46 Pelamar)
                        </option>

                    </select>


                    <select
                        id="statusFilter"
                        class="select">

                        <option value="">
                            STATUS SELEKSI • Semua Status
                        </option>

                        <option value="new">
                            Berkas Baru
                        </option>

                        <option value="review">
                            Dalam Review
                        </option>

                        <option value="interview">
                            Wawancara
                        </option>

                        <option value="accepted">
                            Diterima
                        </option>

                    </select>


                    <select
                        id="districtFilter"
                        class="select">

                        <option value="">
                            KECAMATAN DOMISILI • Semua Kecamatan
                        </option>

                        <option>
                            Kawalu
                        </option>

                        <option>
                            Cihideung
                        </option>

                        <option>
                            Mangkubumi
                        </option>

                        <option>
                            Cipedes
                        </option>

                        <option>
                            Bungursari
                        </option>

                        <option>
                            Tawang
                        </option>

                    </select>


                    <select class="select">

                        <option>
                            JALUR REGISTRASI •
                            AK-1 Mandiri Online
                            (Disnaker)
                        </option>

                        <option>
                            AK-1 Disnaker Loket
                        </option>

                        <option>
                            Rekomendasi Job Fair
                        </option>

                    </select>


                </div>


                <div class="applied">

                    <span>
                        Filter Aktif:
                    </span>

                    <span class="filter-chip">
                        Posisi: Operator Jahit &
                        Bordir Mesin ×
                    </span>

                    <span class="filter-chip">
                        Status: AK-1 Terverifikasi ×
                    </span>

                    <span
                        class="reset"
                        id="resetFilter">

                        Reset Semua Filter

                    </span>

                </div>

            </div>


            <!-- =================================================
                 LIST VIEW
            ================================================= -->

            <div id="listView">


                <div class="workspace">


                    <!-- TABLE -->

                    <div class="table-card">


                        <div class="table-head">


                            <div class="table-head-left">

                                ☐ &nbsp;
                                Pilih Semua

                                <span
                                    style="color:#727b8d">

                                    (Menampilkan 6
                                    dari 74 pelamar
                                    posisi ini)

                                </span>

                            </div>


                            <div class="table-tools">

                                <button
                                    class="small-btn"
                                    type="button"
                                    onclick="notify('Penandaan batch siap digunakan pada tahap integrasi backend.')">

                                    ☷ Tandai Ditinjau

                                </button>


                                <button
                                    class="small-btn"
                                    type="button"
                                    onclick="notify('Undangan tes praktik siap digunakan pada tahap integrasi backend.')">

                                    ✉ Undangan Tes Praktik

                                </button>

                            </div>

                        </div>


                        <table class="table">


                            <thead>

                                <tr>

                                    <th style="width:30px"></th>

                                    <th>
                                        Identitas &amp;
                                        Dokumen AK-1
                                    </th>

                                    <th>
                                        Pendidikan &amp;
                                        Match
                                    </th>

                                    <th>
                                        Domisili
                                        Tasikmalaya
                                    </th>

                                </tr>

                            </thead>


                            <tbody id="candidateTable"></tbody>


                        </table>


                        <div class="table-footer">

                            <span>

                                Menampilkan
                                <strong id="rowCount">
                                    1–6
                                </strong>

                                dari 74 Pelamar
                                (Posisi:
                                Operator Jahit)

                            </span>


                            <div class="pagination">

                                <button
                                    class="page-btn">

                                    ‹

                                </button>

                                <button
                                    class="page-btn active">

                                    1

                                </button>

                                <button
                                    class="page-btn">

                                    2

                                </button>

                                <button
                                    class="page-btn">

                                    3

                                </button>

                                <button
                                    class="page-btn">

                                    …

                                </button>

                                <button
                                    class="page-btn">

                                    8

                                </button>

                                <button
                                    class="page-btn">

                                    ›

                                </button>

                            </div>

                        </div>

                    </div>


                    <!-- PREVIEW -->

                    <aside class="preview">


                        <div class="preview-head">

                            <strong>
                                ▣ Preview Berkas Terpilih
                            </strong>

                            <span class="status">
                                AK-1 Terverifikasi
                            </span>

                        </div>


                        <div class="preview-body">


                            <div class="preview-profile">


                                <div
                                    class="preview-avatar"
                                    id="previewInitial">

                                    SA

                                </div>


                                <div>

                                    <h3 id="previewName">
                                        Siti Aisyah Rahayu
                                    </h3>

                                    <p id="previewBasic">
                                        22 Tahun • Perempuan
                                        (Kec. Kawalu)
                                    </p>

                                    <span class="valid">

                                        ◉ Warga Asli
                                        Tasikmalaya
                                        (KTP Valid)

                                    </span>

                                </div>

                            </div>


                            <div class="preview-section">

                                <div class="preview-label">
                                    Legalitas Disnaker
                                    Kota Tasikmalaya
                                </div>


                                <div class="info-grid">


                                    <div class="info-box">

                                        <small>
                                            No. Registrasi AK-1
                                        </small>

                                        <strong
                                            id="previewAk1">

                                            AK1-2024-08421

                                        </strong>

                                    </div>


                                    <div class="info-box">

                                        <small>
                                            Masa Berlaku s.d.
                                        </small>

                                        <strong>
                                            14 Jul 2026
                                            (Aktif)
                                        </strong>

                                    </div>


                                    <div class="info-box">

                                        <small>
                                            NIK Terdaftar
                                        </small>

                                        <strong
                                            id="previewNik">

                                            3278016409020004

                                        </strong>

                                    </div>


                                    <div class="info-box">

                                        <small>
                                            Penerbit Dokumen
                                        </small>

                                        <strong>
                                            Bidang Penempatan
                                            TSM
                                        </strong>

                                    </div>


                                </div>

                            </div>


                            <div class="preview-section">

                                <div class="preview-label">
                                    Kompetensi &amp;
                                    Rekam Jejak
                                </div>


                                <div class="skills">

                                    <span class="skill">
                                        SMK Tata Busana
                                    </span>

                                    <span class="skill green">
                                        Sertifikasi BLK
                                        Garment (240 JP)
                                    </span>

                                    <span class="skill">
                                        Mesin Jahit
                                        High-Speed Juki
                                    </span>

                                    <span class="skill">
                                        Bordir Mesin
                                        Manual &amp; Komputer
                                    </span>

                                </div>

                            </div>


                            <div class="preview-section">

                                <div
                                    class="quote"
                                    id="previewQuote">

                                    “Berpengalaman magang
                                    industri selama 6 bulan
                                    di industri tekstil kawasan
                                    Tasikmalaya. Menguasai
                                    operasional mesin jahit
                                    obras, jarum, dan finishing
                                    kerapian benang.”

                                </div>

                            </div>


                            <div class="preview-section">

                                <div class="preview-label">

                                    Lampiran Dokumen Resmi
                                    (4 File)

                                </div>


                                <div class="files">

                                    <div class="file-pill">

                                        ▤ Kartu_AK1_TSM.pdf

                                        <br>

                                        <span
                                            style="color:#8991a0">

                                            512 KB

                                        </span>

                                    </div>


                                    <div class="file-pill">

                                        ▤ Ijazah_SMKN3.pdf

                                        <br>

                                        <span
                                            style="color:#8991a0">

                                            1.2 MB

                                        </span>

                                    </div>


                                    <div class="file-pill">

                                        ◉ Sertif_BLK_TSM.pdf

                                        <br>

                                        <span
                                            style="color:#8991a0">

                                            890 KB

                                        </span>

                                    </div>


                                    <div class="file-pill">

                                        ▤ KTP_Dukcapil.pdf

                                        <br>

                                        <span
                                            style="color:#8991a0">

                                            420 KB

                                        </span>

                                    </div>

                                </div>

                            </div>


                            <div class="decision">

                                <div class="preview-label">

                                    Aksi Keputusan
                                    HR &amp; Panggilan

                                </div>


                                <button
                                    class="btn btn-green"
                                    type="button"
                                    onclick="notify('Undangan tes via WhatsApp akan terhubung ke backend pada tahap integrasi.')">

                                    ▣ Kirim Undangan Tes
                                    via WhatsApp

                                </button>


                                <div class="split">

                                    <button
                                        class="btn btn-blue"
                                        type="button"
                                        onclick="notify('Kandidat ditandai sebagai diterima pada tampilan frontend.')">

                                        ✓ Terima Kandidat

                                    </button>


                                    <button
                                        class="btn btn-red"
                                        type="button"
                                        onclick="notify('Berkas ditolak pada tampilan frontend.')">

                                        ✕ Tolak Berkas

                                    </button>

                                </div>

                            </div>


                        </div>

                    </aside>

                </div>

            </div>


            <!-- =================================================
                 PIPELINE VIEW
            ================================================= -->

            <div
                id="pipelineView"
                class="pipeline">

                <div
                    style="
                        display:flex;
                        justify-content:space-between;
                        align-items:center;
                        margin-bottom:10px;
                    ">

                    <div>

                        <strong
                            style="font-size:12px">

                            Pipeline Kurasi Pelamar

                        </strong>

                        <div
                            style="
                                font-size:8px;
                                color:#7b8391;
                                margin-top:3px;
                            ">

                            Pantau pergerakan kandidat
                            berdasarkan tahap seleksi.

                        </div>

                    </div>


                    <button
                        class="small-btn"
                        type="button"
                        onclick="notify('Pipeline diperbarui.')">

                        ⟳ Muat Ulang

                    </button>

                </div>


                <div
                    class="board"
                    id="pipelineBoard">

                </div>

            </div>


            <!-- =================================================
                 COMPLIANCE
            ================================================= -->

            <div class="compliance">


                <div class="compliance-main">


                    <div class="compliance-icon">

                        ♧

                    </div>


                    <div>

                        <h3>
                            Kepatuhan Hukum
                            Ketenagakerjaan &
                            Perlindungan Data Pribadi
                        </h3>

                        <p>

                            Seluruh data identitas NIK
                            dan dokumen AK-1 pelamar
                            dilindungi sesuai UU No.
                            27/2022 tentang Perlindungan
                            Data Pribadi (PDP). Sesuai
                            Perda Kota Tasikmalaya
                            tentang Ketenagakerjaan,
                            mitra industri wajib
                            melaporkan penempatan
                            tenaga kerja melalui pelacakan
                            realisasi sistem Wajib Lapor
                            Ketenagakerjaan (WLTK).

                        </p>

                    </div>

                </div>


                <button
                    class="guide"
                    type="button"
                    onclick="notify('Panduan Rekrutmen AK-1 dibuka pada tampilan frontend.')">

                    ⓘ Panduan Rekrutmen AK-1

                </button>

            </div>


        </section>

    </main>


    <!-- =====================================================
         JAVASCRIPT
         FRONTEND ONLY
    ===================================================== -->

    <script>


        const candidates = [

            {
                name:
                    'Siti Aisyah Rahayu',

                age:
                    '22',

                gender:
                    'Perempuan',

                district:
                    'Kawalu',

                school:
                    'SMK Negeri 3 Tasikmalaya',

                major:
                    'Tata Busana & Garment',

                match:
                    96,

                tag:
                    'Lulusan BLK TSM',

                ak1:
                    'AK1-2024-08421',

                nik:
                    '3278016409020004',

                quote:
                    '“Berpengalaman magang industri selama 6 bulan di industri tekstil kawasan Tasikmalaya. Menguasai operasional mesin jahit obras, jarum, dan finishing kerapian benang.”',

                status:
                    'new'
            },


            {
                name:
                    'Muhammad Rizki Fauzi',

                age:
                    '24',

                gender:
                    'Laki-laki',

                district:
                    'Cihideung',

                school:
                    'Politeknik LP3I Tasikmalaya',

                major:
                    'D3 Manajemen Logistik',

                match:
                    92,

                tag:
                    '',

                ak1:
                    'AK1-2024-07119',

                nik:
                    '3278028806000012',

                quote:
                    '“Terbiasa menangani pencatatan stok, pengiriman barang, dan administrasi gudang.”',

                status:
                    'review'
            },


            {
                name:
                    'Dede Kurniawan',

                age:
                    '26',

                gender:
                    'Laki-laki',

                district:
                    'Mangkubumi',

                school:
                    'SMK Negeri 2 Tasikmalaya',

                major:
                    'Teknik Pemeliharaan Mesin',

                match:
                    95,

                tag:
                    'Ex-Sansan 2 Th',

                ak1:
                    'AK1-2024-06904',

                nik:
                    '3278030909000021',

                quote:
                    '“Memiliki pengalaman perawatan mesin dan troubleshooting dasar di lingkungan manufaktur.”',

                status:
                    'review'
            },


            {
                name:
                    'Nina Marlina',

                age:
                    '21',

                gender:
                    'Perempuan',

                district:
                    'Cipedes',

                school:
                    'SMA Pasundan Tasikmalaya',

                major:
                    'MIPA (Sertifikat Inspeksi Mutu)',

                match:
                    88,

                tag:
                    'Baru Hari Ini',

                ak1:
                    'AK1-2024-09012',

                nik:
                    '3278044405000019',

                quote:
                    '“Tertarik membangun karier pada quality control dan administrasi produksi.”',

                status:
                    'new'
            },


            {
                name:
                    'Asep Saepuloh',

                age:
                    '23',

                gender:
                    'Laki-laki',

                district:
                    'Bungursari',

                school:
                    'SMK Mitra Batik Tasikmalaya',

                major:
                    'Keahlian Bordir Komputer',

                match:
                    90,

                tag:
                    'Sertifikasi BNSP',

                ak1:
                    'AK1-2024-08091',

                nik:
                    '3278050907000033',

                quote:
                    '“Menguasai desain bordir komputer serta pengoperasian perangkat lunak produksi.”',

                status:
                    'interview'
            },


            {
                name:
                    'Rina Agustina',

                age:
                    '20',

                gender:
                    'Perempuan',

                district:
                    'Tawang',

                school:
                    'SMK Bhakti Kencana TSM',

                major:
                    'Otomatisasi Tata Kelola Perkantoran',

                match:
                    85,

                tag:
                    '',

                ak1:
                    'AK1-2024-09028',

                nik:
                    '3278061004000045',

                quote:
                    '“Terbiasa melakukan administrasi dokumen, pengarsipan, dan pelayanan internal.”',

                status:
                    'accepted'
            }

        ];


        const tableBody =
            document.getElementById(
                'candidateTable'
            );

        const searchInput =
            document.getElementById(
                'searchInput'
            );

        const statusFilter =
            document.getElementById(
                'statusFilter'
            );

        const districtFilter =
            document.getElementById(
                'districtFilter'
            );


        function initials(name) {

            return name
                .split(' ')
                .slice(0, 2)
                .map(item => item[0])
                .join('')
                .toUpperCase();

        }


        function renderTable() {

            const q =
                searchInput
                    .value
                    .toLowerCase()
                    .trim();


            const status =
                statusFilter.value;


            const district =
                districtFilter.value;


            const data =
                candidates.filter(candidate => {

                    const text = `
                        ${candidate.name}
                        ${candidate.school}
                        ${candidate.major}
                        ${candidate.ak1}
                        ${candidate.nik}
                    `.toLowerCase();


                    return (

                        (!q ||
                            text.includes(q))

                        &&

                        (!status ||
                            candidate.status === status)

                        &&

                        (!district ||
                            candidate.district === district)

                    );

                });


            tableBody.innerHTML =
                data.map((candidate, index) => {

                    return `

                        <tr
                            class="clickable ${
                                index === 0
                                    ? 'selected'
                                    : ''
                            }"
                            data-name="${candidate.name}"
                        >

                            <td>
                                <input
                                    class="check"
                                    type="checkbox"
                                    ${
                                        index === 0
                                            ? 'checked'
                                            : ''
                                    }
                                >
                            </td>


                            <td>

                                <div class="identity">

                                    <div class="avatar">

                                        ${initials(
                                            candidate.name
                                        )}

                                    </div>


                                    <div>

                                        <div
                                            class="candidate-name">

                                            ${
                                                candidate.name
                                            }

                                        </div>


                                        ${
                                            candidate.tag

                                                ? `

                                                    <span
                                                        class="mini-tag">

                                                        ${
                                                            candidate.tag
                                                        }

                                                    </span>

                                                `

                                                : ''
                                        }


                                        <div
                                            class="candidate-meta">

                                            ${
                                                candidate.age
                                            }
                                            Th •
                                            ${
                                                candidate.gender
                                            }

                                            <br>

                                            ${
                                                candidate.nik
                                                    .replace(
                                                        /(\\d{6})\\d+(\\d{2})$/,
                                                        '$1******$2'
                                                    )
                                            }

                                            •
                                            ${
                                                candidate.ak1
                                            }

                                        </div>

                                    </div>

                                </div>

                            </td>


                            <td class="edu">

                                <strong>
                                    ${
                                        candidate.school
                                    }
                                </strong>

                                <span>
                                    ${
                                        candidate.major
                                    }
                                </span>


                                <div class="match">

                                    <div
                                        class="match-line">

                                        <i
                                            style="
                                                width:
                                                ${
                                                    candidate.match
                                                }%;
                                            "
                                        ></i>

                                    </div>

                                    <div
                                        class="match-label">

                                        ${
                                            candidate.match
                                        }%
                                        Cocok

                                    </div>

                                </div>

                            </td>


                            <td class="loc">

                                <strong>
                                    ⌖ Kec.
                                    ${
                                        candidate.district
                                    }
                                </strong>

                                <span>
                                    Kel.
                                    ${
                                        candidate.district === 'Kawalu'
                                            ? 'Tanjung (Sentra Bordir)'

                                        : candidate.district === 'Cihideung'
                                            ? 'Tugujaya'

                                        : candidate.district === 'Mangkubumi'
                                            ? 'Sambongjaya'

                                        : candidate.district === 'Cipedes'
                                            ? 'Nagarasari'

                                        : candidate.district === 'Bungursari'
                                            ? 'Sukamulya'

                                        : 'Cikalang'
                                    }
                                </span>

                            </td>

                        </tr>

                    `;

                }).join('');


            document.getElementById(
                'rowCount'
            ).textContent =
                data.length
                    ? `1–${data.length}`
                    : '0';


            bindCandidateRows();


            if (data.length) {

                updatePreview(
                    data[0]
                );

            }

        }


        function bindCandidateRows() {

            document
                .querySelectorAll(
                    '#candidateTable tr.clickable'
                )
                .forEach(row => {

                    row.addEventListener(
                        'click',
                        event => {

                            if (
                                event.target.type
                                === 'checkbox'
                            ) {
                                return;
                            }


                            document
                                .querySelectorAll(
                                    '#candidateTable tr.clickable'
                                )
                                .forEach(item => {

                                    item.classList
                                        .remove(
                                            'selected'
                                        );

                                });


                            row.classList.add(
                                'selected'
                            );


                            const person =
                                candidates.find(
                                    candidate =>
                                        candidate.name
                                        === row.dataset.name
                                );


                            if (person) {

                                updatePreview(
                                    person
                                );

                            }

                        }
                    );

                });

        }


        function updatePreview(candidate) {

            document.getElementById(
                'previewInitial'
            ).textContent =
                initials(
                    candidate.name
                );


            document.getElementById(
                'previewName'
            ).textContent =
                candidate.name;


            document.getElementById(
                'previewBasic'
            ).textContent =
                `${candidate.age} Tahun • ${candidate.gender} (Kec. ${candidate.district})`;


            document.getElementById(
                'previewAk1'
            ).textContent =
                candidate.ak1;


            document.getElementById(
                'previewNik'
            ).textContent =
                candidate.nik;


            document.getElementById(
                'previewQuote'
            ).textContent =
                candidate.quote;

        }


        function renderPipeline() {

            const groups = {

                new:
                    'Berkas Baru',

                review:
                    'Dalam Review',

                interview:
                    'Wawancara',

                accepted:
                    'Diterima'

            };


            const icons = {

                new:
                    '1',

                review:
                    '2',

                interview:
                    '3',

                accepted:
                    '4'

            };


            document.getElementById(
                'pipelineBoard'
            ).innerHTML =

                Object.entries(
                    groups
                )

                .map(
                    ([key, label]) => {

                        const list =
                            candidates.filter(
                                candidate =>
                                    candidate.status
                                    === key
                            );


                        return `

                            <div
                                class="column">

                                <h4>

                                    <span>

                                        ${
                                            icons[key]
                                        }
                                        ·
                                        ${
                                            label
                                        }

                                    </span>

                                    <span class="count">

                                        ${
                                            list.length
                                        }

                                    </span>

                                </h4>


                                ${
                                    list.map(
                                        candidate => `

                                            <div
                                                class="candidate-card"
                                                onclick='updatePreview(${JSON.stringify(candidate)})'
                                            >

                                                <strong>
                                                    ${
                                                        candidate.name
                                                    }
                                                </strong>

                                                <span>
                                                    ${
                                                        candidate.school
                                                    }
                                                </span>

                                                <div
                                                    class="card-score">

                                                    ${
                                                        candidate.match
                                                    }%
                                                    cocok •

                                                    Kec.
                                                    ${
                                                        candidate.district
                                                    }

                                                </div>

                                            </div>

                                        `
                                    ).join('')
                                }

                            </div>

                        `;

                    }
                )
                .join('');

        }


        function notify(message) {

            alert(message);

        }


        searchInput.addEventListener(
            'input',
            renderTable
        );


        statusFilter.addEventListener(
            'change',
            renderTable
        );


        districtFilter.addEventListener(
            'change',
            renderTable
        );


        document
            .getElementById(
                'resetFilter'
            )
            .addEventListener(
                'click',
                () => {

                    searchInput.value = '';

                    statusFilter.value = '';

                    districtFilter.value = '';

                    renderTable();

                }
            );


        document
            .getElementById(
                'refreshBtn'
            )
            .addEventListener(
                'click',
                () => {

                    renderTable();

                    renderPipeline();

                    notify(
                        'Data pelamar dimuat ulang pada tampilan frontend.'
                    );

                }
            );


        document
            .getElementById(
                'listBtn'
            )
            .addEventListener(
                'click',
                () => {

                    document
                        .getElementById(
                            'listBtn'
                        )
                        .classList
                        .add('active');


                    document
                        .getElementById(
                            'pipelineBtn'
                        )
                        .classList
                        .remove('active');


                    document
                        .getElementById(
                            'listView'
                        )
                        .style
                        .display = 'block';


                    document
                        .getElementById(
                            'pipelineView'
                        )
                        .classList
                        .remove('active');

                }
            );


        document
            .getElementById(
                'pipelineBtn'
            )
            .addEventListener(
                'click',
                () => {

                    document
                        .getElementById(
                            'pipelineBtn'
                        )
                        .classList
                        .add('active');


                    document
                        .getElementById(
                            'listBtn'
                        )
                        .classList
                        .remove('active');


                    document
                        .getElementById(
                            'listView'
                        )
                        .style
                        .display = 'none';


                    document
                        .getElementById(
                            'pipelineView'
                        )
                        .classList
                        .add('active');

                }
            );


        renderTable();

        renderPipeline();


    </script>

</body>
</html>