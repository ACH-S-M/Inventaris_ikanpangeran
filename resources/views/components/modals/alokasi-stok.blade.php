@push('styles')
<style>
    /* Backdrop Overlay Modal */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(78, 42, 19, 0.45);
        backdrop-filter: blur(4px);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    /* Modal Window Container */
    .modal-container {
        background: #FFFFFF;
        width: 92%;
        max-width: 980px;
        max-height: 92vh;
        border-radius: 14px;
        padding: 20px 24px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        overflow-y: auto;
        border: 1px solid var(--border-color);
    }

    /* Modal Header */
    .modal-header-area {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 16px;
    }

    .modal-title-group h3 {
        font-size: 15px;
        font-weight: 800;
        color: var(--color-neutral);
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .modal-badge-sku {
        background: #FFF3E0;
        color: var(--color-secondary);
        font-size: 9.5px;
        font-weight: 700;
        padding: 2px 8px;
        border-radius: 4px;
    }

    .modal-sub-desc {
        font-size: 10.5px;
        color: #7A5B47;
        margin-top: 3px;
    }

    .btn-close-modal {
        background: transparent;
        border: none;
        font-size: 16px;
        color: #8C6A54;
        cursor: pointer;
    }

    /* 4 Metric Summary Cards Top Modal */
    .modal-metrics-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 12px;
        margin-bottom: 16px;
    }

    .m-modal-card {
        background: #FFFAF7;
        border: 1px solid var(--border-color);
        border-radius: 10px;
        padding: 10px 12px;
    }

    .m-modal-card p {
        font-size: 9.5px;
        font-weight: 700;
        color: #8C6A54;
        margin-bottom: 4px;
    }

    .m-modal-card h2 {
        font-size: 20px;
        font-weight: 800;
        color: var(--color-neutral);
        line-height: 1;
    }

    .m-modal-card span {
        font-size: 9px;
        font-weight: 700;
    }

    /* Table Area Inside Modal */
    .modal-table-section {
        border: 1px solid var(--border-color);
        border-radius: 10px;
        padding: 12px;
        background: #FFFFFF;
        margin-bottom: 14px;
    }

    .modal-filter-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
        gap: 8px;
    }

    .filter-pills {
        display: flex;
        gap: 6px;
    }

    .pill-item {
        background: #FFF5EE;
        border: 1px solid var(--border-color);
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 9.5px;
        font-weight: 700;
        color: var(--color-neutral);
        cursor: pointer;
    }

    .pill-item.active {
        background: var(--color-primary);
        color: #FFFFFF;
        border-color: var(--color-primary);
    }

    .po-search-input {
        background: #FFF5EE;
        border: 1px solid var(--border-color);
        padding: 4px 8px;
        border-radius: 6px;
        font-size: 10px;
        outline: none;
        width: 180px;
    }

    .table-po-alloc {
        width: 100%;
        border-collapse: collapse;
        font-size: 10px;
    }

    .table-po-alloc th {
        text-align: left;
        padding: 8px 6px;
        color: #8C6A54;
        border-bottom: 1px solid var(--border-color);
        font-size: 9px;
    }

    .table-po-alloc td {
        padding: 8px 6px;
        border-bottom: 1px solid #FFF0E6;
        vertical-align: middle;
    }

    .alloc-input-box {
        width: 60px;
        padding: 3px 6px;
        border: 1px solid var(--color-secondary);
        border-radius: 4px;
        font-size: 10px;
        font-weight: 700;
        text-align: center;
    }

    .btn-max-alloc {
        background: #FFF3E0;
        color: var(--color-secondary);
        border: 1px solid #FFE0B2;
        padding: 3px 6px;
        border-radius: 4px;
        font-size: 8.5px;
        font-weight: 700;
        cursor: pointer;
    }

    /* Recommendation Box (FIFO / FEFO) */
    .recom-fifo-box {
        background: #FFF8E1;
        border: 1px solid #FFE082;
        border-radius: 8px;
        padding: 10px 14px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
    }

    .recom-info {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 10px;
        color: var(--color-neutral);
    }

    /* Modal Footer Action Buttons */
    .modal-footer-area {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 10px;
        border-top: 1px solid var(--border-color);
    }

    .btn-cancel-modal {
        background: #FFF5EE;
        border: 1px solid var(--border-color);
        color: var(--color-neutral);
        padding: 7px 14px;
        border-radius: 6px;
        font-size: 10.5px;
        font-weight: 700;
        cursor: pointer;
    }

    .btn-draft-modal {
        background: #FFE0B2;
        border: 1px solid #FFCC80;
        color: var(--color-neutral);
        padding: 7px 14px;
        border-radius: 6px;
        font-size: 10.5px;
        font-weight: 700;
        cursor: pointer;
    }

    .btn-confirm-modal {
        background: var(--color-primary);
        color: #FFFFFF;
        border: none;
        padding: 7px 16px;
        border-radius: 6px;
        font-size: 10.5px;
        font-weight: 700;
        cursor: pointer;
    }
</style>
@endpush

<!-- MODAL OVERLAY: ALOKASI STOK PRODUK JADI KE PO -->
<div class="modal-overlay" id="modalAlokasiStok" style="display: none;">
    <div class="modal-container">
        
        <!-- Header Modal -->
        <div class="modal-header-area">
            <div class="modal-title-group">
                <h3>Alokasi Stok Produk Jadi ke Purchase Order (PO) <span class="modal-badge-sku"><i class="fa-solid fa-tag"></i> SKU: SKU-PC-ORI-250G | Rengginang Ikan Original Super Gurih</span></h3>
                <p class="modal-sub-desc"><i class="fa-solid fa-boxes-packing"></i> Alokasikan stok fisik yang tersedia di Gudang FG-01 untuk pemenuhan Purchase Order distributor & reseller terverifikasi.</p>
            </div>
            <button class="btn-close-modal" onclick="document.getElementById('modalAlokasiStok').style.display='none'"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <!-- 4 Top Metric Cards Inside Modal -->
        <div class="modal-metrics-grid">
            <div class="m-modal-card">
                <p>Stok Fisik Gudang FG-01</p>
                <h2>5.800 <span style="font-size:11px;">Pouch</span></h2>
                <span style="color:#2E7D32;"><i class="fa-solid fa-circle-check"></i> Tersedia & Lulus QC</span>
            </div>

            <div class="m-modal-card">
                <p>Permintaan PO Aktif</p>
                <h2 style="color:var(--color-primary);">4.200 <span style="font-size:11px;">Pouch</span></h2>
                <span style="color:#B78103;"><i class="fa-solid fa-clock"></i> Menunggu Alokasi (4 PO)</span>
            </div>

            <div class="m-modal-card">
                <p>Sisa Stok Bebas (Free Stock)</p>
                <h2 style="color:#2E7D32;">1.600 <span style="font-size:11px;">Pouch</span></h2>
                <span style="color:#2E7D32;"><i class="fa-solid fa-shield-halved"></i> Buffer Aman Retail Toko</span>
            </div>

            <div class="m-modal-card" style="background:#E8F5E9; border-color:#A5D6A7;">
                <p>Status Kesiapan Batch</p>
                <h2 style="color:#2E7D32; font-size:16px; margin-top:2px;">100% Terpenuhi</h2>
                <span style="color:#2E7D32;">Stok fisik mencukupi seluruh daftar pesanan aktif hari ini.</span>
            </div>
        </div>

        <!-- Table Section -->
        <div class="modal-table-section">
            <div class="modal-filter-bar">
                <div class="filter-pills">
                    <button class="pill-item active"><i class="fa-solid fa-filter"></i> Semua PO (4)</button>
                    <button class="pill-item">Prioritas Tinggi (2)</button>
                    <button class="pill-item">Distributor Utama</button>
                    <button class="pill-item">Jatuh Tempo Terdekat</button>
                </div>
                <div style="display:flex; gap:6px;">
                    <input type="text" class="po-search-input" placeholder="Cari No. PO atau nama pemesan...">
                    <button class="btn-max-alloc"><i class="fa-solid fa-wand-magic-sparkles"></i> Auto-Isi Maksimal</button>
                </div>
            </div>

            <table class="table-po-alloc">
                <thead>
                    <tr>
                        <th style="width: 30px;"><input type="checkbox" checked></th>
                        <th>NO. PO & TANGGAL</th>
                        <th>PEMESAN / KLIEN</th>
                        <th>PESANAN</th>
                        <th>JUMLAH ALOKASI (POUCH)</th>
                        <th>BATCH PRIORITAS (FIFO)</th>
                        <th>STATUS PEMENUHAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" checked></td>
                        <td>
                            <b>PO-2024-1082</b> <span style="background:#FFEBEE; color:var(--color-primary); font-size:8px; padding:1px 4px; border-radius:3px; font-weight:700;">! URGENT</span><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📅 24 Okt 2024 • Kirim: 26 Okt</span>
                        </td>
                        <td>
                            <b>PT Sumber Makmur Retail</b><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📍 DC Cikarang Utama (Jalur Darat)</span>
                        </td>
                        <td>1.500 Pouch</td>
                        <td>
                            <div style="display:flex; gap:4px; align-items:center;">
                                <input type="text" class="alloc-input-box" value="1500">
                                <button class="btn-max-alloc">Maks</button>
                            </div>
                        </td>
                        <td>
                            <span style="background:#FFF3E0; color:var(--color-secondary); padding:2px 6px; border-radius:4px; font-weight:700;">Batch #BCH-088</span><br>
                            <span style="font-size:8px; color:#8C6A54;">Exp: Mai 2026 (FIFO J1)</span>
                        </td>
                        <td>
                            <span style="color:#2E7D32; font-weight:700;">100% Siap Kirim</span><br>
                            <span style="font-size:8.5px; color:#8C6A54;">1.500 / 1.500</span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" checked></td>
                        <td>
                            <b>PO-2024-1085</b> <span style="background:#FFF3E0; color:var(--color-secondary); font-size:8px; padding:1px 4px; border-radius:3px; font-weight:700;">REGULER</span><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📅 25 Okt 2024 • Kirim: 27 Okt</span>
                        </td>
                        <td>
                            <b>Toko Oleh-Oleh Nusantara</b><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📍 Outlet Bandara Halim & Gambir</span>
                        </td>
                        <td>1.200 Pouch</td>
                        <td>
                            <div style="display:flex; gap:4px; align-items:center;">
                                <input type="text" class="alloc-input-box" value="1200">
                                <button class="btn-max-alloc">Maks</button>
                            </div>
                        </td>
                        <td>
                            <span style="background:#FFF3E0; color:var(--color-secondary); padding:2px 6px; border-radius:4px; font-weight:700;">Batch #BCH-088</span><br>
                            <span style="font-size:8px; color:#8C6A54;">Exp: Mai 2026 (FIFO J1)</span>
                        </td>
                        <td>
                            <span style="color:#2E7D32; font-weight:700;">100% Siap Kirim</span><br>
                            <span style="font-size:8.5px; color:#8C6A54;">1.200 / 1.200</span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" checked></td>
                        <td>
                            <b>PO-2024-1089</b> <span style="background:#FFEBEE; color:var(--color-primary); font-size:8px; padding:1px 4px; border-radius:3px; font-weight:700;">! URGENT</span><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📅 25 Okt 2024 • Kirim: 26 Okt</span>
                        </td>
                        <td>
                            <b>Distributor Snack Jakarta</b><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📍 Gudang Hub Pasar Minggu</span>
                        </td>
                        <td>800 Pouch</td>
                        <td>
                            <div style="display:flex; gap:4px; align-items:center;">
                                <input type="text" class="alloc-input-box" value="800">
                                <button class="btn-max-alloc">Maks</button>
                            </div>
                        </td>
                        <td>
                            <span style="background:#FFF3E0; color:var(--color-secondary); padding:2px 6px; border-radius:4px; font-weight:700;">Batch #BCH-089</span><br>
                            <span style="font-size:8px; color:#8C6A54;">Exp: Jun 2026 (FIFO J2)</span>
                        </td>
                        <td>
                            <span style="color:#2E7D32; font-weight:700;">100% Siap Kirim</span><br>
                            <span style="font-size:8.5px; color:#8C6A54;">800 / 800</span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="checkbox"></td>
                        <td>
                            <b>PO-2024-1094</b> <span style="background:#EFECE6; color:#777; font-size:8px; padding:1px 4px; border-radius:3px; font-weight:700;">STANDBY</span><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📅 26 Okt 2024 • Kirim: 29 Okt</span>
                        </td>
                        <td>
                            <b>Reseller Mitra Sejahtera</b><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📍 Drop point Lebak Bulus</span>
                        </td>
                        <td>700 Pouch</td>
                        <td>
                            <div style="display:flex; gap:4px; align-items:center;">
                                <input type="text" class="alloc-input-box" value="0" style="border-color:#CCC;">
                                <button class="btn-max-alloc">Maks</button>
                            </div>
                        </td>
                        <td>
                            <span style="background:#EFECE6; color:#777; padding:2px 6px; border-radius:4px; font-weight:700;">Batch #BCH-089</span><br>
                            <span style="font-size:8px; color:#8C6A54;">Menunggu Jadwal Pick</span>
                        </td>
                        <td>
                            <span style="color:#777; font-weight:700;">Belum Dialokasikan</span><br>
                            <span style="font-size:8.5px; color:#8C6A54;">0 / 700</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Rekomendasi Algoritma FIFO / FEFO -->
        <div class="recom-fifo-box">
            <div class="recom-info">
                <div style="background:var(--color-neutral); color:#FFF; width:28px; height:28px; border-radius:6px; display:flex; align-items:center; justify-content:center;"><i class="fa-solid fa-boxes-stacked"></i></div>
                <div>
                    <b>Rekomendasi Algoritma FIFO / FEFO Gudang</b> <span style="background:#FFE082; color:#B78103; font-size:8.5px; padding:1px 4px; border-radius:3px; font-weight:700;">OPTIMAL</span><br>
                    <span style="font-size:9.5px; color:#7A5B47;">Sistem merekomendasikan alokasi prioritas dari <b>Batch #BCH-088</b> (diproduksi 2 hari lalu) sebanyak 2.700 pouch dan <b>Batch #BCH-089</b> sebanyak 800 pouch untuk meminimalkan waktu simpan di Gudang FG-01.</span>
                </div>
            </div>
            <label style="font-size:10px; font-weight:700; color:var(--color-neutral); cursor:pointer; display:flex; align-items:center; gap:6px;">
                <input type="checkbox" checked> Kunci stok & terbitkan Dokumen SPK/M
            </label>
        </div>

        <!-- Footer Action Buttons -->
        <div class="modal-footer-area">
            <div style="font-size:10px; font-weight:700; color:var(--color-neutral);">
                <i class="fa-solid fa-circle-check" style="color:#2E7D32;"></i> 3 PO terpilih • <span style="color:var(--color-primary);">3.500 Pouch</span> dialokasikan • Estimasi muat: <b>Besok, 09:00 WIB</b>
            </div>
            <div style="display:flex; gap:8px;">
                <button class="btn-cancel-modal" onclick="document.getElementById('modalAlokasiStok').style.display='none'">Batal</button>
                <button class="btn-draft-modal"><i class="fa-solid fa-floppy-disk"></i> Simpan Draft Alokasi</button>
                <button class="btn-confirm-modal"><i class="fa-solid fa-check-double"></i> Konfirmasi Alokasi & Terbitkan Picking List</button>
            </div>
        </div>

    </div>
</div>