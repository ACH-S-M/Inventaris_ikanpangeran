<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pangeran Condet</title>
    
    <!-- Google Fonts: Plus Jakarta Sans & Playfair Display Italic -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,600&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --bg-maroon-editorial: #580B0B;
            --brand-red: #800A0A;
            --brand-orange: #F47C20;
            --text-dark: #1A1A1A;
            --text-muted: #666666;
            --border-line: #E2DDD5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        body {
            height: 100vh;
            width: 100vw;
            display: flex;
            overflow: hidden;
            background-color: #FFFFFF;
        }

        /* LEFT PANEL: EDITORIAL MAROON */
        .left-editorial-panel {
            width: 50%;
            height: 100vh;
            background-color: var(--bg-maroon-editorial);
            color: #FFFFFF;
            padding: 40px 48px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
        }

        .brand-top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .brand-logo-group {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .badge-pc-square {
            width: 28px;
            height: 28px;
            background: #781010;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 800;
            color: #F47C20;
            letter-spacing: 0.5px;
        }

        .brand-text-tag {
            font-size: 9.5px;
            font-weight: 800;
            letter-spacing: 1px;
            color: #E2B2B2;
            text-transform: uppercase;
            line-height: 1.3;
        }

        .server-status-btn {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.18);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 600;
            color: #F0E0E0;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .server-status-btn:hover {
            background: rgba(255, 255, 255, 0.12);
        }

        .green-dot {
            width: 6px;
            height: 6px;
            background-color: #00E676;
            border-radius: 50%;
            box-shadow: 0 0 6px #00E676;
        }

        .editorial-body-center {
            margin-top: auto;
            margin-bottom: auto;
            padding: 20px 0;
            max-width: 480px;
        }

        .eyebrow-tag {
            font-size: 9.5px;
            font-weight: 800;
            letter-spacing: 2px;
            color: #F47C20;
            text-transform: uppercase;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .eyebrow-tag::before {
            content: "";
            width: 18px;
            height: 1.5px;
            background-color: #F47C20;
            display: inline-block;
        }

        .editorial-title {
            font-size: 52px;
            font-weight: 800;
            line-height: 0.92;
            letter-spacing: -1.5px;
            color: #FFFFFF;
            text-transform: uppercase;
        }

        .editorial-title span.italic-condet {
            font-family: 'Playfair Display', serif;
            font-style: italic;
            font-weight: 500;
            text-transform: lowercase;
            display: block;
            color: #FFE0D0;
            font-size: 60px;
            margin-top: 2px;
            letter-spacing: -0.5px;
        }

        .editorial-quote {
            margin-top: 24px;
            font-size: 13px;
            line-height: 1.6;
            font-style: italic;
            color: #E0C2C2;
            max-width: 440px;
        }

        .editorial-footer {
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            padding-top: 20px;
        }

        .footer-cols-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .footer-col-item p.col-label {
            font-size: 8.5px;
            font-weight: 800;
            letter-spacing: 1px;
            color: #C28E8E;
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .footer-col-item h5 {
            font-size: 11px;
            font-weight: 700;
            color: #FFFFFF;
        }

        .footer-col-item p.col-sub {
            font-size: 9px;
            color: #A07070;
            margin-top: 2px;
        }

        .copyright-bottom {
            font-size: 9.5px;
            color: rgba(255, 255, 255, 0.35);
        }

        /* RIGHT PANEL: MINIMALIST FORM */
        .right-form-panel {
            width: 50%;
            height: 100vh;
            background-color: #FFFFFF;
            padding: 40px 60px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow-y: auto;
        }

        .form-top-meta {
            display: flex;
            justify-content: space-between;
            font-size: 10.5px;
            color: #888888;
        }

        .form-content-center {
            max-width: 380px;
            width: 100%;
            margin: auto;
        }

        .portal-internal-tag {
            font-size: 9.5px;
            font-weight: 800;
            letter-spacing: 1.5px;
            color: var(--brand-red);
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .form-content-center h1 {
            font-size: 28px;
            font-weight: 800;
            color: var(--text-dark);
            letter-spacing: -0.5px;
            margin-bottom: 8px;
        }

        .form-content-center p.desc-text {
            font-size: 11.5px;
            color: var(--text-muted);
            line-height: 1.5;
            margin-bottom: 24px;
        }

        .role-switch-tabs {
            display: flex;
            gap: 24px;
            border-bottom: 1.5px solid #EFEFEF;
            margin-bottom: 20px;
        }

        .role-tab-item {
            padding-bottom: 8px;
            font-size: 12px;
            font-weight: 700;
            color: #999999;
            cursor: pointer;
            text-decoration: none;
            position: relative;
            background: none;
            border: none;
        }

        .role-tab-item.active {
            color: var(--text-dark);
        }

        .role-tab-item.active::after {
            content: "";
            position: absolute;
            bottom: -1.5px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--brand-red);
        }

        .rfid-verified-alert {
            background-color: #E8F8EE;
            border: 1px solid #C2EAD0;
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 10.5px;
            color: #1E6B37;
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 24px;
            line-height: 1.4;
        }

        .rfid-verified-alert i {
            margin-top: 2px;
            font-size: 11px;
        }

        .input-group-item {
            margin-bottom: 22px;
            width: 100%;
        }

        /* HEADER LABEL FLEXBOX UNTUK MENJAGA KATA SANDI DAN LUPA SANDI TETAP SEJAJAR */
        .label-header-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 6px;
            width: 100%;
        }

        .label-header-flex label {
            font-size: 9.5px;
            font-weight: 800;
            letter-spacing: 1px;
            color: #555555;
            text-transform: uppercase;
            margin-bottom: 0;
        }

        .btn-lupa-sandi {
            font-size: 10.5px;
            font-weight: 700;
            color: var(--brand-red);
            text-decoration: none;
            cursor: pointer;
            background: none;
            border: none;
            padding: 0;
        }

        .line-input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
        }

        .line-input-wrapper input {
            width: 100%;
            border: none;
            border-bottom: 1px solid #D8D8D8;
            padding: 6px 35px 6px 0; /* Memberi ruang di kanan agar text tidak tertutup tombol 'Lihat' */
            font-size: 12.5px;
            font-weight: 600;
            color: var(--text-dark);
            outline: none;
            background: transparent;
            transition: border-color 0.2s;
        }

        .line-input-wrapper input:focus {
            border-bottom-color: var(--brand-red);
        }

        .btn-toggle-lihat {
            position: absolute;
            right: 0;
            font-size: 10.5px;
            font-weight: 700;
            color: #888888;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
        }

        .checkbox-remember {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 28px;
            font-size: 10.5px;
            color: #555555;
            cursor: pointer;
            user-select: none;
        }

        .checkbox-remember input {
            accent-color: var(--brand-red);
            width: 13px;
            height: 13px;
            cursor: pointer;
        }

        .btn-submit-maroon {
            width: 100%;
            background-color: var(--brand-red);
            color: #FFFFFF;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 11.5px;
            font-weight: 800;
            letter-spacing: 0.5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: background-color 0.2s;
        }

        .btn-submit-maroon:hover {
            background-color: #580B0B;
        }
    </style>
</head>
<body>

    <!-- LEFT PANEL -->
    <div class="left-editorial-panel">
        <div class="brand-top-bar">
            <div class="brand-logo-group">
                <div class="badge-pc-square">PC</div>
                <div class="brand-text-tag">
                    RUMAH PRODUKSI RENGGINANG<br>
                    PANGERAN CONDET
                </div>
            </div>
            <button type="button" class="server-status-btn" onclick="alert('Status Server: Online (Latency 12ms)\nProtokol TLS 1.3 Terenkripsi')">
                <div class="green-dot"></div>
                Server Manufaktur Online
            </button>
        </div>

        <div class="editorial-body-center">
            <div class="eyebrow-tag">AUTENTISITAS & PRESISI MUTU</div>
            <h1 class="editorial-title">
                PANGERAN
                <span class="italic-condet">condet</span>
            </h1>

            <p class="editorial-quote">
                “Mempertahankan kemurnian cita rasa rengginang ikan autentik melalui perpaduan resep dan disiplin otomasi manufaktur modern.”
            </p>
        </div>

        <div class="editorial-footer">
            <div class="footer-cols-grid">
                <div class="footer-col-item">
                    <p class="col-label">SISTEM OPERASIONAL</p>
                    <h5>Inventaris & Gudang Terpusat</h5>
                    <p class="col-sub">Sinkronisasi Real-Time</p>
                </div>
                <div class="footer-col-item">
                    <p class="col-label">AKSES KREDENSIAL</p>
                    <h5>Multi-Perangkat Terenkripsi</h5>
                    <p class="col-sub">Protokol TLS 1.3 & Otentikasi 2FA</p>
                </div>
            </div>

            <div class="copyright-bottom">
                © 2025 Pangeran Condet Inc. Seluruh hak cipta dilindungi.
            </div>
        </div>
    </div>

    <!-- RIGHT PANEL -->
    <div class="right-form-panel">
        <div class="form-top-meta">
            <span>Portal Otentikasi Terpadu</span>
            <span id="liveClock">Kamis, 10:50:30 WIB</span>
        </div>

        <div class="form-content-center">
            <div class="portal-internal-tag">PORTAL MASUK INTERNAL</div>
            <h1>Selamat Datang Kembali</h1>
            <p class="desc-text">Akses langsung ke pengelolaan inventaris, katalog produk, dan stok bahan baku.</p>

            <!-- Role Switcher Tabs -->
            <div class="role-switch-tabs">
                <button type="button" class="role-tab-item active" id="tabOwner" onclick="switchRole('owner')">Owner</button>
                <button type="button" class="role-tab-item" id="tabKaryawan" onclick="switchRole('karyawan')">Karyawan</button>
            </div>

            <!-- Sensor Alert Box -->
            <div class="rfid-verified-alert" id="rfidAlert">
                <i class="fa-solid fa-check"></i>
                <div id="rfidAlertText">
                    Sensor RFID Terverifikasi: Hendra W. (Presensi Shift 1 Aktif).<br>
                    <strong>Siap masuk sebagai Owner...</strong>
                </div>
            </div>

            <!-- Login Form -->
            <form action="{{ route('dashboard') }}" method="GET" id="loginForm">
                <div class="input-group-item">
                    <div class="label-header-flex">
                        <label>EMAIL / USERNAME</label>
                    </div>
                    <div class="line-input-wrapper">
                        <input type="text" id="inputUsername" value="owner@pangerancondet.id" required placeholder="Masukkan email / username">
                    </div>
                </div>

                <div class="input-group-item">
                    <div class="label-header-flex">
                        <label>KATA SANDI</label>
                        <button type="button" class="btn-lupa-sandi" onclick="alert('Silakan hubungi Administrator IT Pabrik untuk reset kata sandi Anda.')">Lupa Sandi?</button>
                    </div>
                    <div class="line-input-wrapper">
                        <input type="password" id="inputPassword" value="12345678" required placeholder="Masukkan kata sandi">
                        <button type="button" class="btn-toggle-lihat" id="btnTogglePassword" onclick="togglePasswordVisibility()">Lihat</button>
                    </div>
                </div>

                <label class="checkbox-remember">
                    <input type="checkbox" checked id="checkRemember">
                    Ingat sesi saya di perangkat ini
                </label>

                <button type="submit" class="btn-submit-maroon">
                    MASUK KE SISTEM INVENTARIS <i class="fa-solid fa-arrow-right"></i>
                </button>
            </form>
        </div>

        <div><!-- Spacer --></div>
    </div>

    <!-- JAVASCRIPT INTERAKTIF -->
    <script>
        // 1. Live Clock
        function updateClock() {
            const now = new Date();
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const dayName = days[now.getDay()];
            const timeStr = now.toTimeString().split(' ')[0];
            document.getElementById('liveClock').innerText = `${dayName}, ${timeStr} WIB`;
        }
        setInterval(updateClock, 1000);
        updateClock();

        // 2. Role Switcher Tab Interaktif
        function switchRole(role) {
            const tabOwner = document.getElementById('tabOwner');
            const tabKaryawan = document.getElementById('tabKaryawan');
            const inputUsername = document.getElementById('inputUsername');
            const rfidText = document.getElementById('rfidAlertText');

            if (role === 'owner') {
                tabOwner.classList.add('active');
                tabKaryawan.classList.remove('active');
                inputUsername.value = 'owner@pangerancondet.id';
                rfidText.innerHTML = 'Sensor RFID Terverifikasi: Hendra W. (Presensi Shift 1 Aktif).<br><strong>Siap masuk sebagai Owner...</strong>';
            } else {
                tabKaryawan.classList.add('active');
                tabOwner.classList.remove('active');
                inputUsername.value = 'karyawan@pangerancondet.id';
                rfidText.innerHTML = 'Sensor RFID Terverifikasi: Bambang S. (Spv Shift Pagi).<br><strong>Siap masuk sebagai Karyawan...</strong>';
            }
        }

        // 3. Toggle Show/Hide Password
        function togglePasswordVisibility() {
            const inputPassword = document.getElementById('inputPassword');
            const btnToggle = document.getElementById('btnTogglePassword');

            if (inputPassword.type === 'password') {
                inputPassword.type = 'text';
                btnToggle.innerText = 'Sembunyikan';
            } else {
                inputPassword.type = 'password';
                btnToggle.innerText = 'Lihat';
            }
        }
    </script>
</body>
</html>