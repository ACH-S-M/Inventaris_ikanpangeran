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
        padding: 4px;
        transition: color 0.2s;
    }

    .btn-close-modal:hover {
        color: var(--color-primary);
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
        flex-wrap: wrap;
    }

    .filter-pills {
        display: flex;
        gap: 6px;
        flex-wrap: wrap;
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
        transition: all 0.2s;
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
        outline: none;
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
        transition: background 0.2s;
    }

    .btn-max-alloc:hover {
        background: #FFE0B2;
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
        transition: background 0.2s;
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
        transition: background 0.2s;
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
        transition: opacity 0.2s;
    }

    .btn-cancel-modal:hover, .btn-draft-modal:hover, .btn-confirm-modal:hover {
        opacity: 0.9;
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
            <button type="button" class="btn-close-modal" onclick="tutupModalAlokasi()"><i class="fa-solid fa-xmark"></i></button>
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
                <h2 style="color:#2E7D32;" id="modalFreeStock">2.300 <span style="font-size:11px;">Pouch</span></h2>
                <span style="color:#2E7D32;"><i class="fa-solid fa-shield-halved"></i> Buffer Aman Retail Toko</span>
            </div>

            <div class="m-modal-card" style="background:#E8F5E9; border-color:#A5D6A7;">
                <p>Status Kesiapan Batch</p>
                <h2 style="color:#2E7D32; font-size:16px; margin-top:2px;" id="modalReadinessStatus">83.3% Terpenuhi</h2>
                <span style="color:#2E7D32;" id="modalReadinessDesc">Stok fisik mencukupi untuk PO terpilih saat ini.</span>
            </div>
        </div>

        <!-- Table Section -->
        <div class="modal-table-section">
            <div class="modal-filter-bar">
                <div class="filter-pills">
                    <button type="button" class="pill-item active" onclick="filterModalPill(this, 'all')"><i class="fa-solid fa-filter"></i> Semua PO (4)</button>
                    <button type="button" class="pill-item" onclick="filterModalPill(this, 'urgent')">Prioritas Tinggi (2)</button>
                    <button type="button" class="pill-item" onclick="filterModalPill(this, 'distributor')">Distributor Utama</button>
                    <button type="button" class="pill-item" onclick="filterModalPill(this, 'due')">Jatuh Tempo Terdekat</button>
                </div>
                <div style="display:flex; gap:6px;">
                    <input type="text" class="po-search-input" id="poSearchInput" placeholder="Cari No. PO atau pemesan..." onkeyup="searchModalPO()">
                    <button type="button" class="btn-max-alloc" onclick="autoIsiMaksimalSemua()"><i class="fa-solid fa-wand-magic-sparkles"></i> Auto-Isi Maksimal</button>
                </div>
            </div>

            <table class="table-po-alloc">
                <thead>
                    <tr>
                        <th style="width: 30px;"><input type="checkbox" id="modalSelectAllCheckbox" checked onchange="toggleModalSelectAll(this)"></th>
                        <th>NO. PO & TANGGAL</th>
                        <th>PEMESAN / KLIEN</th>
                        <th>PESANAN</th>
                        <th>JUMLAH ALOKASI (POUCH)</th>
                        <th>BATCH PRIORITAS (FIFO)</th>
                        <th>STATUS PEMENUHAN</th>
                    </tr>
                </thead>
                <tbody id="modalPOTableBody">
                    <tr class="modal-po-row" data-type="urgent distributor">
                        <td><input type="checkbox" class="modal-po-checkbox" checked onchange="kalkulasiModalAlokasi()"></td>
                        <td>
                            <b>PO-2024-1082</b> <span style="background:#FFEBEE; color:var(--color-primary); font-size:8px; padding:1px 4px; border-radius:3px; font-weight:700;">! URGENT</span><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📅 24 Okt 2024 • Kirim: 26 Okt</span>
                        </td>
                        <td>
                            <b>PT Sumber Makmur Retail</b><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📍 DC Cikarang Utama (Jalur Darat)</span>
                        </td>
                        <td><span class="target-qty">1500</span> Pouch</td>
                        <td>
                            <div style="display:flex; gap:4px; align-items:center;">
                                <input type="number" class="alloc-input-box" value="1500" data-max="1500" oninput="kalkulasiModalAlokasi()">
                                <button type="button" class="btn-max-alloc" onclick="autoIsiBarisIni(this)">Maks</button>
                            </div>
                        </td>
                        <td>
                            <span style="background:#FFF3E0; color:var(--color-secondary); padding:2px 6px; border-radius:4px; font-weight:700;">Batch #BCH-088</span><br>
                            <span style="font-size:8px; color:#8C6A54;">Exp: Mai 2026 (FIFO J1)</span>
                        </td>
                        <td>
                            <span class="status-text" style="color:#2E7D32; font-weight:700;">100% Siap Kirim</span><br>
                            <span class="status-sub" style="font-size:8.5px; color:#8C6A54;">1.500 / 1.500</span>
                        </td>
                    </tr>

                    <tr class="modal-po-row" data-type="regular">
                        <td><input type="checkbox" class="modal-po-checkbox" checked onchange="kalkulasiModalAlokasi()"></td>
                        <td>
                            <b>PO-2024-1085</b> <span style="background:#FFF3E0; color:var(--color-secondary); font-size:8px; padding:1px 4px; border-radius:3px; font-weight:700;">REGULER</span><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📅 25 Okt 2024 • Kirim: 27 Okt</span>
                        </td>
                        <td>
                            <b>Toko Oleh-Oleh Nusantara</b><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📍 Outlet Bandara Halim & Gambir</span>
                        </td>
                        <td><span class="target-qty">1200</span> Pouch</td>
                        <td>
                            <div style="display:flex; gap:4px; align-items:center;">
                                <input type="number" class="alloc-input-box" value="1200" data-max="1200" oninput="kalkulasiModalAlokasi()">
                                <button type="button" class="btn-max-alloc" onclick="autoIsiBarisIni(this)">Maks</button>
                            </div>
                        </td>
                        <td>
                            <span style="background:#FFF3E0; color:var(--color-secondary); padding:2px 6px; border-radius:4px; font-weight:700;">Batch #BCH-088</span><br>
                            <span style="font-size:8px; color:#8C6A54;">Exp: Mai 2026 (FIFO J1)</span>
                        </td>
                        <td>
                            <span class="status-text" style="color:#2E7D32; font-weight:700;">100% Siap Kirim</span><br>
                            <span class="status-sub" style="font-size:8.5px; color:#8C6A54;">1.200 / 1.200</span>
                        </td>
                    </tr>

                    <tr class="modal-po-row" data-type="urgent">
                        <td><input type="checkbox" class="modal-po-checkbox" checked onchange="kalkulasiModalAlokasi()"></td>
                        <td>
                            <b>PO-2024-1089</b> <span style="background:#FFEBEE; color:var(--color-primary); font-size:8px; padding:1px 4px; border-radius:3px; font-weight:700;">! URGENT</span><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📅 25 Okt 2024 • Kirim: 26 Okt</span>
                        </td>
                        <td>
                            <b>Distributor Snack Jakarta</b><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📍 Gudang Hub Pasar Minggu</span>
                        </td>
                        <td><span class="target-qty">800</span> Pouch</td>
                        <td>
                            <div style="display:flex; gap:4px; align-items:center;">
                                <input type="number" class="alloc-input-box" value="800" data-max="800" oninput="kalkulasiModalAlokasi()">
                                <button type="button" class="btn-max-alloc" onclick="autoIsiBarisIni(this)">Maks</button>
                            </div>
                        </td>
                        <td>
                            <span style="background:#FFF3E0; color:var(--color-secondary); padding:2px 6px; border-radius:4px; font-weight:700;">Batch #BCH-089</span><br>
                            <span style="font-size:8px; color:#8C6A54;">Exp: Jun 2026 (FIFO J2)</span>
                        </td>
                        <td>
                            <span class="status-text" style="color:#2E7D32; font-weight:700;">100% Siap Kirim</span><br>
                            <span class="status-sub" style="font-size:8.5px; color:#8C6A54;">800 / 800</span>
                        </td>
                    </tr>

                    <tr class="modal-po-row" data-type="standby">
                        <td><input type="checkbox" class="modal-po-checkbox" onchange="kalkulasiModalAlokasi()"></td>
                        <td>
                            <b>PO-2024-1094</b> <span style="background:#EFECE6; color:#777; font-size:8px; padding:1px 4px; border-radius:3px; font-weight:700;">STANDBY</span><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📅 26 Okt 2024 • Kirim: 29 Okt</span>
                        </td>
                        <td>
                            <b>Reseller Mitra Sejahtera</b><br>
                            <span style="font-size:8.5px; color:#8C6A54;">📍 Drop point Lebak Bulus</span>
                        </td>
                        <td><span class="target-qty">700</span> Pouch</td>
                        <td>
                            <div style="display:flex; gap:4px; align-items:center;">
                                <input type="number" class="alloc-input-box" value="0" data-max="700" style="border-color:#CCC;" oninput="kalkulasiModalAlokasi()">
                                <button type="button" class="btn-max-alloc" onclick="autoIsiBarisIni(this)">Maks</button>
                            </div>
                        </td>
                        <td>
                            <span style="background:#EFECE6; color:#777; padding:2px 6px; border-radius:4px; font-weight:700;">Batch #BCH-089</span><br>
                            <span style="font-size:8px; color:#8C6A54;">Menunggu Jadwal Pick</span>
                        </td>
                        <td>
                            <span class="status-text" style="color:#777; font-weight:700;">Belum Dialokasikan</span><br>
                            <span class="status-sub" style="font-size:8.5px; color:#8C6A54;">0 / 700</span>
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
                <input type="checkbox" checked id="checkSpkLock"> Kunci stok & terbitkan Dokumen SPK/M
            </label>
        </div>

        <!-- Footer Action Buttons -->
        <div class="modal-footer-area">
            <div style="font-size:10px; font-weight:700; color:var(--color-neutral);" id="modalFooterSummary">
                <i class="fa-solid fa-circle-check" style="color:#2E7D32;"></i> <span id="summaryPoCount">3</span> PO terpilih • <span style="color:var(--color-primary);" id="summaryPouchCount">3.500 Pouch</span> dialokasikan • Estimasi muat: <b>Besok, 09:00 WIB</b>
            </div>
            <div style="display:flex; gap:8px;">
                <button type="button" class="btn-cancel-modal" onclick="tutupModalAlokasi()">Batal</button>
                <button type="button" class="btn-draft-modal" onclick="simpanDraftAlokasi()"><i class="fa-solid fa-floppy-disk"></i> Simpan Draft Alokasi</button>
                <button type="button" class="btn-confirm-modal" onclick="konfirmasiPickingList()"><i class="fa-solid fa-check-double"></i> Konfirmasi Alokasi & Terbitkan Picking List</button>
            </div>
        </div>

    </div>
</div>

<script>
    // 1. Tutup Modal
    function tutupModalAlokasi() {
        document.getElementById('modalAlokasiStok').style.display = 'none';
    }

    // 2. Select All Checkbox
    function toggleModalSelectAll(masterCb) {
        const checkboxes = document.querySelectorAll('.modal-po-checkbox');
        checkboxes.forEach(cb => {
            cb.checked = masterCb.checked;
        });
        kalkulasiModalAlokasi();
    }

    // 3. Auto Isi Maksimal per Baris
    function autoIsiBarisIni(btn) {
        const row = btn.closest('tr');
        const input = row.querySelector('.alloc-input-box');
        const cb = row.querySelector('.modal-po-checkbox');
        const maxVal = parseInt(input.getAttribute('data-max')) || 0;

        input.value = maxVal;
        cb.checked = true;
        kalkulasiModalAlokasi();
    }

    // 4. Auto Isi Maksimal Semua PO
    function autoIsiMaksimalSemua() {
        const rows = document.querySelectorAll('.modal-po-row');
        rows.forEach(row => {
            const input = row.querySelector('.alloc-input-box');
            const cb = row.querySelector('.modal-po-checkbox');
            const maxVal = parseInt(input.getAttribute('data-max')) || 0;

            input.value = maxVal;
            cb.checked = true;
        });
        kalkulasiModalAlokasi();
    }

    // 5. Kalkulasi Dinamis Stok & Total Alokasi Modal
    function kalkulasiModalAlokasi() {
        let totalAllocated = 0;
        let selectedCount = 0;
        const totalPhysicalStock = 5800;

        const rows = document.querySelectorAll('.modal-po-row');
        rows.forEach(row => {
            const cb = row.querySelector('.modal-po-checkbox');
            const input = row.querySelector('.alloc-input-box');
            const target = parseInt(row.querySelector('.target-qty').innerText) || 0;
            const statusText = row.querySelector('.status-text');
            const statusSub = row.querySelector('.status-sub');

            let currentVal = parseInt(input.value) || 0;
            if (currentVal < 0) currentVal = 0;
            if (currentVal > target) currentVal = target;
            input.value = currentVal;

            if (cb.checked && currentVal > 0) {
                selectedCount++;
                totalAllocated += currentVal;

                if (currentVal === target) {
                    statusText.innerText = '100% Siap Kirim';
                    statusText.style.color = '#2E7D32';
                } else {
                    const percent = Math.round((currentVal / target) * 100);
                    statusText.innerText = percent + '% Terpenuhi';
                    statusText.style.color = '#B78103';
                }
            } else {
                statusText.innerText = 'Belum Dialokasikan';
                statusText.style.color = '#777';
            }

            statusSub.innerText = currentVal.toLocaleString('id-ID') + ' / ' + target.toLocaleString('id-ID');
        });

        const freeStock = totalPhysicalStock - totalAllocated;
        document.getElementById('modalFreeStock').innerHTML = freeStock.toLocaleString('id-ID') + ' <span style="font-size:11px;">Pouch</span>';
        document.getElementById('summaryPoCount').innerText = selectedCount;
        document.getElementById('summaryPouchCount').innerText = totalAllocated.toLocaleString('id-ID') + ' Pouch';

        const percentTotal = Math.round((totalAllocated / 4200) * 100);
        document.getElementById('modalReadinessStatus').innerText = percentTotal + '% Terpenuhi';
    }

    // 6. Filter Pill inside Modal
    function filterModalPill(btn, filterType) {
        document.querySelectorAll('.filter-pills .pill-item').forEach(p => p.classList.remove('active'));
        btn.classList.add('active');

        const rows = document.querySelectorAll('.modal-po-row');
        rows.forEach(row => {
            const rowType = row.getAttribute('data-type') || '';
            if (filterType === 'all' || rowType.includes(filterType)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    // 7. Search Input inside Modal
    function searchModalPO() {
        const query = document.getElementById('poSearchInput').value.toLowerCase();
        const rows = document.querySelectorAll('.modal-po-row');
        rows.forEach(row => {
            const text = row.innerText.toLowerCase();
            if (text.includes(query)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    // 8. Action Buttons Handler
    function simpanDraftAlokasi() {
        alert('Draft alokasi stok berhasil disimpan!');
    }

    function konfirmasiPickingList() {
        const pouchText = document.getElementById('summaryPouchCount').innerText;
        alert('Konfirmasi Berhasil!\nTotal ' + pouchText + ' telah dikunci dan Dokumen Picking List resmi diterbitkan.');
        tutupModalAlokasi();
    }
</script>