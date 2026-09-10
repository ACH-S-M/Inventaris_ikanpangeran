<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pangeran Condet - Manufacturing & Inventory')</title>
    
    <!-- Google Fonts Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --color-primary: #B71C1C;
            --color-secondary: #F47C20;
            --color-neutral: #4E2A13;
            --bg-body: #FFF0E6;
            --border-color: #FCE3D3;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Plus Jakarta Sans', sans-serif; }
        
        body { 
            display: flex; 
            height: 100vh; 
            width: 100vw;
            background-color: var(--bg-body); 
            color: var(--color-neutral);
            overflow: hidden; 
        }

        /* Sidebar Fluid & Responsive Width */
        .sidebar {
            width: 220px;
            min-width: 220px;
            height: 100vh;
            background-color: #FFFFFF;
            padding: 14px 12px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-right: 1px solid var(--border-color);
            z-index: 100;
        }

        .brand-logo-area {
            text-align: center;
            margin-bottom: 14px;
            padding-bottom: 10px;
            border-bottom: 1px solid #FFF0E6;
        }

        .brand-logo-area img { width: 180px; height: auto; }

        .nav-category {
            font-size: 9px;
            font-weight: 800;
            color: #A08070;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin: 10px 0 4px 4px;
        }

        .nav-menu { list-style: none; }
        .nav-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 17px 20px;
            margin-bottom: 2px;
            border-radius: 6px;
            color: #5C4333;
            text-decoration: none;
            font-weight: 600;
            font-size: 11px;
            transition: all 0.2s ease;
        }
        
        .nav-item.active { 
            background-color: var(--color-primary); 
            color: #FFFFFF;
            font-weight: 700;
        }
        .nav-item.active i { color: #FFF; }
        .nav-item i { font-size: 12px; width: 16px; text-align: center; color: #8C6A54; }

        .user-profile-bottom {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px;
            background: #FFF5EE;
            border-radius: 8px;
            border: 1px solid var(--border-color);
        }

        .user-avatar-circle {
            width: 28px;
            height: 28px;
            background: #FFE0B2;
            color: var(--color-secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        /* Area Konten Utama Auto Flex */
        .main-content {
            flex: 1;
            height: 100vh;
            background-color: var(--bg-body);
            overflow-y: auto;
            padding: 14px 18px;
        }

        .top-navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            gap: 12px;
            flex-wrap: wrap;
        }

        .top-navbar .brand-title {
            font-size: 16px;
            font-weight: 800;
            color: var(--color-primary);
        }

        .top-search-area {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .search-box {
            position: relative;
            width: 220px;
        }

        .search-box input {
            width: 100%;
            background: #FFF;
            border: 1px solid var(--border-color);
            padding: 6px 10px 6px 28px;
            border-radius: 6px;
            font-size: 11px;
            color: var(--color-neutral);
            outline: none;
        }

        .search-box i {
            position: absolute;
            left: 9px;
            top: 50%;
            transform: translateY(-50%);
            color: #B89985;
            font-size: 11px;
        }

        .btn-action-batch {
            background-color: var(--color-primary);
            color: #FFF;
            border: none;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }
    </style>

    @stack('styles')
</head>
<body>

    <aside class="sidebar">
        <div>
            <div class="brand-logo-area">
                <img src="{{ asset('images/logo.png') }}" alt="Pangeran Condet Logo">
            </div>

            <ul class="nav-menu">
                <li><a href="{{ route('dashboard') }}" class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}"><i class="fa-solid fa-border-all"></i> Dashboard</a></li>
            </ul>

            <div class="nav-category">Master Produk</div>
            <ul class="nav-menu">
                <li><a href="{{ route('products.index') }}" class="nav-item {{ request()->routeIs('products.index') ? 'active' : '' }}"><i class="fa-solid fa-boxes-stacked"></i> Data Produk</a></li>
            </ul>

            <div class="nav-category">Manajemen Produksi</div>
            <ul class="nav-menu">
                <li><a href="#" class="nav-item"><i class="fa-solid fa-clock-rotate-left"></i> Log Produksi</a></li>
                <li><a href="#" class="nav-item"><i class="fa-solid fa-flask"></i> Formula Bom</a></li>
                <li><a href="#" class="nav-item"><i class="fa-solid fa-truck"></i> Supplier</a></li>
            </ul>

            <div class="nav-category">Manajemen PO</div>
            <ul class="nav-menu">
                <li><a href="#" class="nav-item"><i class="fa-solid fa-file-signature"></i> Manajemen PO</a></li>
            </ul>

            <div class="nav-category">Barang Keluar</div>
            <ul class="nav-menu">
                <li><a href="#" class="nav-item"><i class="fa-solid fa-dolly"></i> Barang Keluar</a></li>
            </ul>
        </div>

        <div class="user-profile-bottom">
            <div class="user-avatar-circle"><i class="fa-solid fa-user"></i></div>
            <div style="flex:1; overflow:hidden;">
                <h5 style="font-size:10px; font-weight:700; color:var(--color-neutral); margin:0;">Admin</h5>
                <p style="font-size:8.5px; color:#2E7D32; font-weight:700; margin:0;">● Online</p>
            </div>
            <i class="fa-solid fa-gear" style="font-size:11px; color:#8C6A54; cursor:pointer;"></i>
        </div>
    </aside>

    <main class="main-content">
        <div class="top-navbar">
            <div class="brand-title">Pangeran Condet Rengginang Ikan</div>
            <div class="top-search-area">
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Cari nomor batch, SKU, atau resep...">
                </div>
                <button class="btn-action-batch"><i class="fa-solid fa-plus-circle"></i> Buat Batch Baru</button>
                <div style="display:flex; gap:8px; color:var(--color-neutral); font-size:12px; margin-left:4px;">
                    <i class="fa-regular fa-bell"></i>
                </div>
            </div>
        </div>

        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>