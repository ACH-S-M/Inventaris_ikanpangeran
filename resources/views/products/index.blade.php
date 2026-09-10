@extends('layouts.app')

@section('title', 'Modul Data Produk - Master SKU Pangeran Condet')

@push('styles')
<style>
    /* Header Title Section */
    .page-header-area {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 14px;
        flex-wrap: wrap;
        gap: 10px;
    }

    .page-title h2 {
        font-size: 18px;
        font-weight: 800;
        color: var(--color-neutral);
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .badge-sku-count {
        background: #FFF3E0;
        color: var(--color-secondary);
        font-size: 9px;
        font-weight: 700;
        padding: 2px 6px;
        border-radius: 4px;
    }

    .page-sub-desc {
        font-size: 10.5px;
        color: #7A5B47;
        margin-top: 2px;
    }

    .header-actions-group {
        display: flex;
        gap: 6px;
    }

    .btn-header-outline {
        background: #FFF;
        border: 1px solid var(--border-color);
        color: var(--color-neutral);
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 10px;
        font-weight: 700;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: background 0.2s;
    }

    .btn-header-primary {
        background: var(--color-primary);
        color: #FFF;
        border: none;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 10px;
        font-weight: 700;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: opacity 0.2s;
    }

    .btn-header-outline:hover, .btn-header-primary:hover {
        opacity: 0.9;
    }

    /* 4 Summary Cards Grid */
    .product-metrics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 10px;
        margin-bottom: 14px;
    }

    .p-mcard {
        background: #FFF;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 10px 12px;
    }

    .p-mcard-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 6px;
    }

    .p-mcard-top span {
        font-size: 8.5px;
        font-weight: 800;
        color: #8C6A54;
        letter-spacing: 0.5px;
    }

    .p-mcard-icon {
        width: 24px;
        height: 24px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
    }

    .p-mcard-val {
        font-size: 20px;
        font-weight: 800;
        color: var(--color-neutral);
        line-height: 1;
        margin-bottom: 3px;
    }

    .p-mcard-sub {
        font-size: 9px;
        color: #7A5B47;
    }

    /* Main Table Container */
    .table-container-card {
        background: #FFF;
        border: 1px solid var(--border-color);
        border-radius: 10px;
        padding: 12px 14px;
        margin-bottom: 14px;
    }

    /* Filter Bar (Rapi & Bersih) */
    .table-filter-bar {
        display: flex;
        justify-content: flex-end; /* Menggeser dropdown filter ke pojok kanan */
        align-items: center;
        margin-bottom: 12px;
        gap: 8px;
    }

    .select-dropdown {
        background: #FFF5EE;
        border: 1px solid var(--border-color);
        padding: 5px 10px;
        border-radius: 6px;
        font-size: 9.5px;
        font-weight: 700;
        color: var(--color-neutral);
        outline: none;
        cursor: pointer;
    }

    /* Master Product Table */
    .table-master-product {
        width: 100%;
        border-collapse: collapse;
        font-size: 9.5px;
    }

    .table-master-product th {
        text-align: left;
        padding: 8px 6px;
        color: #8C6A54;
        border-bottom: 1px solid var(--border-color);
        font-size: 8.5px;
        font-weight: 800;
    }

    .table-master-product td {
        padding: 8px 6px;
        border-bottom: 1px solid #FFF0E6;
        vertical-align: middle;
        color: var(--color-neutral);
    }

    .product-info-cell {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .product-thumb {
        width: 32px;
        height: 32px;
        border-radius: 6px;
        object-fit: cover;
        border: 1px solid var(--border-color);
    }

    .product-title {
        font-weight: 800;
        font-size: 10px;
        color: var(--color-neutral);
    }

    .sku-badge-code {
        font-size: 8px;
        background: #FFF3E0;
        color: var(--color-secondary);
        padding: 1px 4px;
        border-radius: 3px;
        font-weight: 700;
    }

    .badge-status-safe {
        background: #E8F5E9;
        color: #2E7D32;
        padding: 2px 6px;
        border-radius: 3px;
        font-size: 8px;
        font-weight: 700;
    }

    .badge-status-alert {
        background: #FFF3E0;
        color: var(--color-secondary);
        padding: 2px 6px;
        border-radius: 3px;
        font-size: 8px;
        font-weight: 700;
    }

    .action-icons {
        display: flex;
        gap: 6px;
        color: #8C6A54;
        font-size: 11px;
    }

    .action-icons i {
        cursor: pointer;
        transition: color 0.2s;
    }

    .action-icons i:hover {
        color: var(--color-primary);
    }

    .btn-table-wo {
        background: var(--color-primary);
        color: #FFF;
        border: none;
        padding: 3px 6px;
        border-radius: 4px;
        font-size: 8px;
        font-weight: 700;
        cursor: pointer;
    }

    /* Pagination Bar */
    .pagination-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
        font-size: 9px;
        color: #8C6A54;
    }

    .pagination-pages {
        display: flex;
        gap: 3px;
    }

    .page-btn {
        width: 18px;
        height: 18px;
        border-radius: 4px;
        border: 1px solid var(--border-color);
        background: #FFF;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 8.5px;
        font-weight: 700;
        cursor: pointer;
    }

    .page-btn.active {
        background: var(--color-primary);
        color: #FFF;
        border-color: var(--color-primary);
    }

    /* Bottom Widgets 50:50 */
    .bottom-widgets-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 12px;
    }

    .widget-box {
        background: #FFF;
        border: 1px solid var(--border-color);
        border-radius: 10px;
        padding: 12px 14px;
    }

    .widget-title {
        font-size: 11.5px;
        font-weight: 800;
        color: var(--color-neutral);
        display: flex;
        align-items: center;
        gap: 6px;
        margin-bottom: 8px;
    }

    .simulasi-bom-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 6px;
        margin-top: 8px;
    }

    .simulasi-card {
        background: #FFFAF7;
        border: 1px solid var(--border-color);
        border-radius: 6px;
        padding: 6px;
        text-align: center;
    }

    .simulasi-card.highlight {
        background: #FFF3E0;
        border-color: #FFE0B2;
    }
</style>
@endpush

@section('content')

<!-- Header Section -->
<div class="page-header-area">
    <div class="page-title">
        <h2>Data Produk & Master SKU <span class="badge-sku-count">12 SKU Terdaftar</span></h2>
        <p class="page-sub-desc">Kelola spesifikasi formulasi, harga pokok produksi (HPP), harga eceran, dan inventaris Finished Goods (FG) Rengginang Ikan.</p>
    </div>
    <div class="header-actions-group">
        <button class="btn-header-outline" onclick="exportData('Excel/PDF')"><i class="fa-solid fa-file-excel"></i> Ekspor Excel/PDF</button>
        <button class="btn-header-outline" onclick="cetakBarcodeMassal()"><i class="fa-solid fa-barcode"></i> Cetak Label Barcode</button>
        <button class="btn-header-primary" onclick="tambahProdukBaru()"><i class="fa-solid fa-plus"></i> Tambah Produk Baru</button>
    </div>
</div>

<!-- 4 Top Metric Cards -->
<div class="product-metrics-grid">
    <div class="p-mcard" style="border-bottom: 3px solid #2E7D32;">
        <div class="p-mcard-top">
            <span>TOTAL SKU AKTIF</span>
            <div class="p-mcard-icon" style="background:#E8F5E9; color:#2E7D32;"><i class="fa-solid fa-box-archive"></i></div>
        </div>
        <div class="p-mcard-val">12 <span style="font-size:10px;">SKU</span></div>
        <div class="p-mcard-sub"><span style="color:#2E7D32; font-weight:700;">✔ Semua formula BoM</span> tersinkronisasi</div>
    </div>

    <div class="p-mcard" style="border-bottom: 3px solid var(--color-secondary);">
        <div class="p-mcard-top">
            <span>VARIAN RASA UTAMA</span>
            <div class="p-mcard-icon" style="background:#FFF3E0; color:var(--color-secondary);"><i class="fa-solid fa-utensils"></i></div>
        </div>
        <div class="p-mcard-val">4 <span style="font-size:10px; font-weight:normal;">Varian Dasar</span></div>
        <div class="p-mcard-sub">Original, Pedas Jeruk, Balado, Bawang</div>
    </div>

    <div class="p-mcard" style="border-bottom: 3px solid var(--color-secondary);">
        <div class="p-mcard-top">
            <span>VALUASI STOK FG (GUDANG)</span>
            <div class="p-mcard-icon" style="background:#FFF3E0; color:var(--color-secondary);"><i class="fa-solid fa-wallet"></i></div>
        </div>
        <div class="p-mcard-val" style="font-size:16px; margin-top:2px;">Rp 371.250.000</div>
        <div class="p-mcard-sub">Total 15.350 Pcs / Dus siap kirim</div>
    </div>

    <div class="p-mcard" style="border-bottom: 3px solid var(--color-primary);">
        <div class="p-mcard-top">
            <span>STOK MENIPIS / URGENT</span>
            <div class="p-mcard-icon" style="background:#FFEBEE; color:var(--color-primary);"><i class="fa-solid fa-triangle-exclamation"></i></div>
        </div>
        <div class="p-mcard-val" style="color:var(--color-primary);">1 <span style="font-size:10px;">SKU di Bawah Buffer</span></div>
        <div class="p-mcard-sub">Bawang Gurih (1.300 Pcs) <a href="javascript:void(0)" onclick="jadwalWO('SKU-PC-BWG-250G')" style="color:var(--color-primary); font-weight:700; text-decoration:none;">Buat WO &rsaquo;</a></div>
    </div>
</div>

<!-- Table Card Container -->
<div class="table-container-card">
    <div class="table-filter-bar">
        <div style="display:flex; gap:6px;">
            <select class="select-dropdown" onchange="filterStatus(this.value)">
                <option value="all">Status: Semua Status</option>
                <option value="safe">Status: Stok Aman</option>
                <option value="alert">Status: Stok Menipis</option>
            </select>
            <select class="select-dropdown" onchange="sortProducts(this.value)">
                <option value="stock_desc">Urutan: Stok Tertinggi</option>
                <option value="stock_asc">Urutan: Stok Terendah</option>
                <option value="margin_desc">Urutan: Margin Tertinggi</option>
            </select>
        </div>
    </div>

    <!-- Data Table -->
    <table class="table-master-product">
        <thead>
            <tr>
                <th style="width:20px;"><input type="checkbox" id="selectAllCheckbox" onchange="toggleSelectAll(this)"></th>
                <th>PRODUK & SKU</th>
                <th>KATEGORI & NETTO</th>
                <th>FORMULA BOM TERKAIT</th>
                <th>HPP / UNIT</th>
                <th>HARGA JUAL (HET)</th>
                <th>MARGIN</th>
                <th>STOK GUDANG</th>
                <th>STATUS</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <!-- Row 1 -->
            <tr class="product-row" data-status="safe">
                <td><input type="checkbox" class="row-checkbox"></td>
                <td>
                    <div class="product-info-cell">
                        <img src="https://via.placeholder.com/40" class="product-thumb" alt="Product">
                        <div>
                            <div class="product-title">Rengginang Ikan Original Super Gurih</div>
                            <span class="sku-badge-code">SKU : PC-ORI-250G</span>
                        </div>
                    </div>
                </td>
                <td>Pouch Retail Standar<br><span style="font-size:8px; color:#8C6A54;">Gramasi: 250g | Netto: 250 gram</span></td>
                <td><span style="color:var(--color-primary); font-weight:700; cursor:pointer;" onclick="lihatBOM('BoM-REV-01A')"><i class="fa-solid fa-flask"></i> BoM-REV-01A</span><br><span style="font-size:8px; color:#8C6A54;">(Ikan Tenggiri Segar 28%)</span></td>
                <td><b>Rp 14.500</b></td>
                <td><b>Rp 25.000</b></td>
                <td style="color:#2E7D32; font-weight:700;">42.0%</td>
                <td><b>5.800 Pcs</b><br><span style="font-size:8px; color:#8C6A54;">Buffer: 2.000 Pcs</span></td>
                <td><span class="badge-status-safe">● Stok Aman</span></td>
                <td>
                    <div class="action-icons">
                        <i class="fa-regular fa-eye" title="Detail" onclick="detailProduk('SKU : PC-ORI-250G')"></i>
                        <i class="fa-regular fa-pen-to-square" title="Edit" onclick="editProduk('SKU : PC-ORI-250G')"></i>
                        <i class="fa-solid fa-barcode" title="Cetak Barcode" onclick="cetakBarcodeSingle('SKU : PC-ORI-250G')"></i>
                    </div>
                </td>
            </tr>

            <!-- Row 2 -->
            <tr class="product-row" data-status="safe">
                <td><input type="checkbox" class="row-checkbox"></td>
                <td>
                    <div class="product-info-cell">
                        <img src="https://via.placeholder.com/40" class="product-thumb" alt="Product">
                        <div>
                            <div class="product-title">Rengginang Ikan Pedas Daun Jeruk</div>
                            <span class="sku-badge-code">SKU : PC-PDJ-250G</span>
                        </div>
                    </div>
                </td>
                <td>Pouch Retail Standar<br><span style="font-size:8px; color:#8C6A54;">Gramasi: 250g | Netto: 250 gram</span></td>
                <td><span style="color:var(--color-primary); font-weight:700; cursor:pointer;" onclick="lihatBOM('BoM-REV-02B')"><i class="fa-solid fa-flask"></i> BoM-REV-02B</span><br><span style="font-size:8px; color:#8C6A54;">(Bubuk Cabai + Daun Jeruk)</span></td>
                <td><b>Rp 15.200</b></td>
                <td><b>Rp 26.500</b></td>
                <td style="color:#2E7D32; font-weight:700;">42.6%</td>
                <td><b>4.150 Pcs</b><br><span style="font-size:8px; color:#8C6A54;">Buffer: 1.500 Pcs</span></td>
                <td><span class="badge-status-safe">● Stok Aman</span></td>
                <td>
                    <div class="action-icons">
                        <i class="fa-regular fa-eye" title="Detail" onclick="detailProduk('SKU : PC-PDJ-250G')"></i>
                        <i class="fa-regular fa-pen-to-square" title="Edit" onclick="editProduk('SKU : PC-PDJ-250G')"></i>
                        <i class="fa-solid fa-barcode" title="Cetak Barcode" onclick="cetakBarcodeSingle('SKU : PC-PDJ-250G')"></i>
                    </div>
                </td>
            </tr>

            <!-- Row 3 -->
            <tr class="product-row" data-status="safe">
                <td><input type="checkbox" class="row-checkbox"></td>
                <td>
                    <div class="product-info-cell">
                        <img src="https://via.placeholder.com/40" class="product-thumb" alt="Product">
                        <div>
                            <div class="product-title">Rengginang Ikan Balado Crispy Premium</div>
                            <span class="sku-badge-code">SKU : PC-BLD-250G</span>
                        </div>
                    </div>
                </td>
                <td>Pouch Retail Standar<br><span style="font-size:8px; color:#8C6A54;">Gramasi: 250g | Netto: 250 gram</span></td>
                <td><span style="color:var(--color-primary); font-weight:700; cursor:pointer;" onclick="lihatBOM('BoM-REV-03A')"><i class="fa-solid fa-flask"></i> BoM-REV-03A</span><br><span style="font-size:8px; color:#8C6A54;">(Bumbu Balado Manis Pedas)</span></td>
                <td><b>Rp 15.500</b></td>
                <td><b>Rp 27.000</b></td>
                <td style="color:#2E7D32; font-weight:700;">42.5%</td>
                <td><b>3.400 Pcs</b><br><span style="font-size:8px; color:#8C6A54;">Buffer: 1.200 Pcs</span></td>
                <td><span class="badge-status-safe">● Stok Aman</span></td>
                <td>
                    <div class="action-icons">
                        <i class="fa-regular fa-eye" title="Detail" onclick="detailProduk('SKU : PC-BLD-250G')"></i>
                        <i class="fa-regular fa-pen-to-square" title="Edit" onclick="editProduk('SKU : PC-BLD-250G')"></i>
                        <i class="fa-solid fa-barcode" title="Cetak Barcode" onclick="cetakBarcodeSingle('SKU : PC-BLD-250G')"></i>
                    </div>
                </td>
            </tr>

            <!-- Row 4 (Alert Kritis) -->
            <tr class="product-row" data-status="alert" style="background:#FFF9F9;">
                <td><input type="checkbox" class="row-checkbox"></td>
                <td>
                    <div class="product-info-cell">
                        <img src="https://via.placeholder.com/40" class="product-thumb" alt="Product">
                        <div>
                            <div class="product-title">Rengginang Ikan Bawang Gurih Klasik</div>
                            <span class="sku-badge-code">SKU : PC-BWG-250G</span>
                        </div>
                    </div>
                </td>
                <td>Pouch Retail Standar<br><span style="font-size:8px; color:#8C6A54;">Gramasi: 250g | Netto: 250 gram</span></td>
                <td><span style="color:var(--color-primary); font-weight:700; cursor:pointer;" onclick="lihatBOM('BoM-REV-04C')"><i class="fa-solid fa-flask"></i> BoM-REV-04C</span><br><span style="font-size:8px; color:#8C6A54;">(Ekstrak Bawang Putih Kating)</span></td>
                <td><b>Rp 14.000</b></td>
                <td><b>Rp 24.500</b></td>
                <td style="color:#2E7D32; font-weight:700;">42.8%</td>
                <td><b style="color:var(--color-primary);">1.300 Pcs</b><br><span style="font-size:8px; color:#8C6A54;">Buffer Min: 2.000 Pcs</span></td>
                <td><span class="badge-status-alert">● Stok Menipis</span></td>
                <td>
                    <div style="display:flex; gap:4px; align-items:center;">
                        <div class="action-icons">
                            <i class="fa-regular fa-eye" title="Detail" onclick="detailProduk('SKU : PC-BWG-250G')"></i>
                            <i class="fa-regular fa-pen-to-square" title="Edit" onclick="editProduk('SKU : PC-BWG-250G')"></i>
                        </div>
                        <button class="btn-table-wo" onclick="jadwalWO('SKU : PC-BWG-250G')">Jadwal WO</button>
                    </div>
                </td>
            </tr>

            <!-- Row 5 -->
            <tr class="product-row" data-status="safe">
                <td><input type="checkbox" class="row-checkbox"></td>
                <td>
                    <div class="product-info-cell">
                        <img src="https://via.placeholder.com/40" class="product-thumb" alt="Product">
                        <div>
                            <div class="product-title">Rengginang Ikan Kaleng Eksklusif (Hampers)</div>
                            <span class="sku-badge-code">SKU : PC-KLG-500G</span>
                        </div>
                    </div>
                </td>
                <td>Kaleng Tin / Hampers<br><span style="font-size:8px; color:#8C6A54;">Gramasi: 500g | Netto: 500 gram</span></td>
                <td><span style="color:var(--color-primary); font-weight:700; cursor:pointer;" onclick="lihatBOM('BoM-REV-05A')"><i class="fa-solid fa-flask"></i> BoM-REV-05A</span><br><span style="font-size:8px; color:#8C6A54;">(Original Premium + Seal Nitrogen)</span></td>
                <td><b>Rp 32.000</b></td>
                <td><b>Rp 55.000</b></td>
                <td style="color:#2E7D32; font-weight:700;">41.8%</td>
                <td><b>480 Kaleng</b><br><span style="font-size:8px; color:#8C6A54;">Buffer: 200 Kaleng</span></td>
                <td><span class="badge-status-safe">● Stok Aman</span></td>
                <td>
                    <div class="action-icons">
                        <i class="fa-regular fa-eye" title="Detail" onclick="detailProduk('SKU : PC-KLG-500G')"></i>
                        <i class="fa-regular fa-pen-to-square" title="Edit" onclick="editProduk('SKU : PC-KLG-500G')"></i>
                        <i class="fa-solid fa-barcode" title="Cetak Barcode" onclick="cetakBarcodeSingle('SKU : PC-KLG-500G')"></i>
                    </div>
                </td>
            </tr>

            <!-- Row 6 -->
            <tr class="product-row" data-status="safe">
                <td><input type="checkbox" class="row-checkbox"></td>
                <td>
                    <div class="product-info-cell">
                        <img src="https://via.placeholder.com/40" class="product-thumb" alt="Product">
                        <div>
                            <div class="product-title">Rengginang Ikan Mentah Siap Goreng (Curah)</div>
                            <span class="sku-badge-code">SKU : PC-MTH-5KG</span>
                        </div>
                    </div>
                </td>
                <td>Dus Master Curah Resto<br><span style="font-size:8px; color:#8C6A54;">Gramasi: Curah (5Kg) | Netto: 5 Kilogram</span></td>
                <td><span style="color:var(--color-primary); font-weight:700; cursor:pointer;" onclick="lihatBOM('BoM-REV-06RAW')"><i class="fa-solid fa-flask"></i> BoM-REV-06RAW</span><br><span style="font-size:8px; color:#8C6A54;">(Proses Jemur Oven Kering)</span></td>
                <td><b>Rp 180.000</b></td>
                <td><b>Rp 290.000</b></td>
                <td style="color:#2E7D32; font-weight:700;">37.9%</td>
                <td><b>85 Karton</b><br><span style="font-size:8px; color:#8C6A54;">Buffer: 30 Karton</span></td>
                <td><span class="badge-status-safe">● Stok Aman</span></td>
                <td>
                    <div class="action-icons">
                        <i class="fa-regular fa-eye" title="Detail" onclick="detailProduk('SKU : PC-MTH-5KG')"></i>
                        <i class="fa-regular fa-pen-to-square" title="Edit" onclick="editProduk('SKU : PC-MTH-5KG')"></i>
                        <i class="fa-solid fa-barcode" title="Cetak Barcode" onclick="cetakBarcodeSingle('SKU : PC-MTH-5KG')"></i>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Pagination Footer -->
    <div class="pagination-bar">
        <div>Menampilkan <b id="textShowing">1 - 6</b> dari <b>12 SKU</b> terdaftar</div>
        <div class="pagination-pages">
            <button class="page-btn" onclick="pindahHalaman(1)"><i class="fa-solid fa-angle-left"></i></button>
            <button class="page-btn active" id="btnPage1" onclick="pindahHalaman(1)">1</button>
            <button class="page-btn" id="btnPage2" onclick="pindahHalaman(2)">2</button>
            <button class="page-btn" onclick="pindahHalaman(2)"><i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>
</div>

<!-- Bottom Widgets 50:50 -->
<div class="bottom-widgets-grid">
    <!-- Certifications -->
    <div class="widget-box">
        <div class="widget-title"><i class="fa-solid fa-certificate" style="color:var(--color-secondary);"></i> SERTIFIKASI MUTU & STANDAR PANGAN</div>
        <p style="font-size:9.5px; color:#7A5B47; margin-bottom:8px;">Standar Pabrikasi Pangeran Condet: Seluruh SKU terdaftar telah memenuhi uji laboratorium kadar air &lt; 3.2% untuk kerenyahan optimal, lolos uji mikrobiologi, dan terdaftar resmi.</p>
        <div style="display:flex; gap:8px;">
            <div style="background:#FFF5EE; border:1px solid var(--border-color); padding:6px 10px; border-radius:6px; font-size:9px;">
                <span style="color:#8C6A54;">Nomor P-IRT Resmi:</span><br>
                <b>P-IRT 2063174020452-27</b>
            </div>
            <div style="background:#FFF5EE; border:1px solid var(--border-color); padding:6px 10px; border-radius:6px; font-size:9px;">
                <span style="color:#8C6A54;">Sertifikat Halal MUI:</span><br>
                <b>ID31110000412891122</b>
            </div>
        </div>
    </div>

    <!-- BoM Yield Simulator -->
    <div class="widget-box">
        <div class="widget-title" style="justify-content:space-between;">
            <span><i class="fa-solid fa-calculator" style="color:var(--color-secondary);"></i> KALKULATOR BOM & YIELD PRODUKSI</span>
            <span style="font-size:8.5px; background:#E8F5E9; color:#2E7D32; padding:2px 6px; border-radius:3px;">Rasio Susut Standar: 14.5%</span>
        </div>
        <p style="font-size:9.5px; color:#7A5B47;">Simulasi Konversi Bahan Baku ➔ Finished Goods</p>
        
        <div class="simulasi-bom-grid">
            <div class="simulasi-card">
                <span style="font-size:8px; color:#8C6A54;">BERAS KETAN PUTIH</span>
                <div style="font-size:11px; font-weight:800; color:var(--color-neutral);">100 Kg</div>
                <span style="font-size:7.5px; color:#2E7D32;">Kualitas Grade 1</span>
            </div>
            <div class="simulasi-card">
                <span style="font-size:8px; color:#8C6A54;">DAGING IKAN SEGAR</span>
                <div style="font-size:11px; font-weight:800; color:var(--color-neutral);">38.5 Kg</div>
                <span style="font-size:7.5px; color:#8C6A54;">Fillet Tenggiri</span>
            </div>
            <div class="simulasi-card">
                <span style="font-size:8px; color:#8C6A54;">MINYAK & BUMBU</span>
                <div style="font-size:11px; font-weight:800; color:var(--color-neutral);">22.0 Kg</div>
                <span style="font-size:7.5px; color:#8C6A54;">Bawang + Garam</span>
            </div>
            <div class="simulasi-card highlight">
                <span style="font-size:8px; color:var(--color-secondary); font-weight:700;">HASIL JADI (ESTIMASI)</span>
                <div style="font-size:12px; font-weight:800; color:var(--color-primary);">540 Pouch</div>
                <span style="font-size:7.5px; color:#8C6A54;">Netto 250g / pack</span>
            </div>
        </div>
        <div style="margin-top:8px; text-align:right;">
            <a href="javascript:void(0)" onclick="alert('Membuka Modul Formula BoM Lengkap...')" style="font-size:9px; color:var(--color-primary); font-weight:700; text-decoration:none;">Buka Modul Formula BoM &rsaquo;</a>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // 1. Export Data
    function exportData(format) {
        alert('Mengekspor Master Data Produk & SKU ke format ' + format + '...');
    }

    // 2. Cetak Barcode Massal & Single
    function cetakBarcodeMassal() {
        const checkedBoxes = document.querySelectorAll('.row-checkbox:checked');
        if (checkedBoxes.length === 0) {
            alert('Silakan pilih minimal satu produk dari tabel untuk mencetak label barcode.');
        } else {
            alert('Mencetak label barcode untuk ' + checkedBoxes.length + ' produk terpilih...');
        }
    }

    function cetakBarcodeSingle(sku) {
        alert('Mencetak label barcode untuk ' + sku + '...');
    }

    // 3. Tambah Produk Baru
    function tambahProdukBaru() {
        alert('Membuka Form Tambah Master SKU & Produk Baru...');
    }

    // 4. Filter Dropdown Status
    function filterStatus(status) {
        const rows = document.querySelectorAll('.product-row');
        rows.forEach(row => {
            const rowStatus = row.getAttribute('data-status');
            if (status === 'all' || rowStatus === status) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    // 5. Sort Products
    function sortProducts(sortBy) {
        alert('Mengurutkan tabel berdasarkan: ' + sortBy);
    }

    // 6. Checkbox Select All
    function toggleSelectAll(mainCheckbox) {
        const checkboxes = document.querySelectorAll('.row-checkbox');
        checkboxes.forEach(cb => cb.checked = mainCheckbox.checked);
    }

    // 7. Detail & Edit Produk
    function detailProduk(sku) {
        alert('Menampilkan detail spesifikasi ' + sku);
    }

    function editProduk(sku) {
        alert('Membuka Form Edit ' + sku);
    }

    // 8. Jadwal Work Order (WO)
    function jadwalWO(sku) {
        alert('Membuat jadwal Work Order (WO) Produksi untuk ' + sku);
    }

    // 9. Lihat Formula BoM
    function lihatBOM(bomCode) {
        alert('Menampilkan Detail Rincian Formulasi ' + bomCode);
    }

    // 10. Pagination Handler
    function pindahHalaman(page) {
        document.querySelectorAll('.page-btn').forEach(btn => btn.classList.remove('active'));
        if(page === 1) {
            document.getElementById('btnPage1').classList.add('active');
            document.getElementById('textShowing').innerText = '1 - 6';
        } else {
            document.getElementById('btnPage2').classList.add('active');
            document.getElementById('textShowing').innerText = '7 - 12';
        }
    }
</script>
@endpush