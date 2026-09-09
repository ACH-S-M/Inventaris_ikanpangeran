@extends('layouts.app')

@section('title', 'Dashboard Overview - Produksi & Inventaris Terpisah')

@push('styles')
<style>
    /* Hero Banner Responsif */
    .hero-banner {
        background: linear-gradient(135deg, var(--color-primary) 0%, #8E0E0E 100%);
        border-radius: 10px;
        padding: 12px 18px;
        color: #FFF;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
        flex-wrap: wrap;
        gap: 10px;
    }

    .hero-content h2 { font-size: 16px; font-weight: 800; margin-bottom: 2px; }
    .hero-content p { font-size: 10.5px; opacity: 0.9; }
    
    .hero-tag {
        display: inline-block;
        background: rgba(255,255,255,0.18);
        padding: 2px 6px;
        border-radius: 4px;
        font-size: 8.5px;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .hero-actions { display: flex; gap: 6px; }
    .btn-hero-orange {
        background-color: var(--color-secondary);
        color: #FFF;
        border: none;
        padding: 6px 12px;
        border-radius: 5px;
        font-size: 10.5px;
        font-weight: 700;
        cursor: pointer;
    }
    .btn-hero-trans {
        background: rgba(255,255,255,0.15);
        color: #FFF;
        border: 1px solid rgba(255,255,255,0.3);
        padding: 6px 12px;
        border-radius: 5px;
        font-size: 10.5px;
        font-weight: 700;
        cursor: pointer;
    }

    /* 4 Metric Cards Grid Auto-fit */
    .metrics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 10px;
        margin-bottom: 12px;
    }

    .m-box {
        background: #FFF;
        border-radius: 8px;
        padding: 10px 12px;
        border: 1px solid var(--border-color);
    }

    .m-box-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 6px;
    }

    .m-box-top span { font-size: 9px; font-weight: 800; color: #8C6A54; letter-spacing: 0.5px; }
    .m-box-icon {
        width: 24px;
        height: 24px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
    }

    .m-box-val { font-size: 20px; font-weight: 800; color: var(--color-neutral); line-height: 1; margin-bottom: 3px; }
    .m-box-sub { font-size: 9px; color: #7A5B47; }

    /* Section Card Outer */
    .section-card {
        background: #FFF;
        border-radius: 10px;
        padding: 12px 14px;
        border: 1px solid var(--border-color);
        margin-bottom: 12px;
    }

    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
        flex-wrap: wrap;
        gap: 8px;
    }

    .section-title { font-size: 12.5px; font-weight: 800; color: var(--color-neutral); display: flex; align-items: center; gap: 6px; }
    .badge-count { background: #FFF3E0; color: var(--color-secondary); font-size: 8.5px; padding: 2px 5px; border-radius: 3px; font-weight: 700; }

    .pipeline-bar-revised {
        background: #FFF5EE;
        padding: 6px 10px;
        border-radius: 6px;
        display: flex;
        gap: 8px;
        align-items: center;
        font-size: 9px;
        font-weight: 700;
        color: var(--color-neutral);
        margin-bottom: 10px;
        border: 1px solid var(--border-color);
        overflow-x: auto;
    }

    /* Batch Item Card */
    .batch-card-revised {
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 10px 12px;
        margin-bottom: 8px;
        background: #FFFAF7;
    }

    .batch-head {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
        flex-wrap: wrap;
        gap: 6px;
    }

    .steps-flow-5 {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 6px;
    }

    .step-box-5 {
        border: 1px solid #EFECE6;
        border-radius: 6px;
        padding: 6px 4px;
        text-align: center;
        background: #FFF;
        font-size: 8.5px;
        font-weight: 700;
    }

    .step-box-5.done { background: #E8F5E9; border-color: #A5D6A7; color: #2E7D32; }
    .step-box-5.active { background: #FFF3E0; border-color: #FFCC80; color: var(--color-secondary); }

    /* Bottom Split Grid 50:50 */
    .bottom-grid-50 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 12px;
    }

    .table-custom {
        width: 100%;
        border-collapse: collapse;
        font-size: 9.5px;
    }

    .table-custom th { text-align: left; padding: 5px 6px; color: #8C6A54; border-bottom: 1px solid var(--border-color); font-size: 8.5px; }
    .table-custom td { padding: 6px; border-bottom: 1px solid #FFF0E6; font-weight: 600; color: var(--color-neutral); }

    .btn-sm-red { background: var(--color-primary); color: #FFF; border: none; padding: 3px 6px; border-radius: 4px; font-size: 8.5px; font-weight: 700; cursor: pointer; }
    .btn-sm-brown { background: var(--color-neutral); color: #FFF; border: none; padding: 3px 6px; border-radius: 4px; font-size: 8.5px; font-weight: 700; cursor: pointer; }
</style>
@endpush

@section('content')

<div class="hero-banner">
    <div class="hero-content">
        <div class="hero-tag"><i class="fa-solid fa-gear"></i> SISTEM MANUFAKTUR TERINTEGRASI</div>
        <h2>Selamat Datang, Supervisor Produksi</h2>
        <p>Pangeran Condet — Rengginang Ikan Segar: "Enak, Gurih, Crispy, Bergizi"</p>
    </div>
    <div class="hero-actions">
        <button class="btn-hero-orange"><i class="fa-solid fa-play"></i> Mulai Batch Baru</button>
        <button class="btn-hero-trans"><i class="fa-solid fa-plus"></i> Input Stok Masuk</button>
    </div>
</div>

<div class="metrics-grid">
    <div class="m-box" style="border-bottom: 3px solid #2E7D32;">
        <div class="m-box-top">
            <span>STOK PRODUK JADI</span>
            <div class="m-box-icon" style="background:#E8F5E9; color:#2E7D32;"><i class="fa-solid fa-box-archive"></i></div>
        </div>
        <div class="m-box-val">14.850 <span style="font-size:10px;">Pouch</span> <span style="font-size:8px; background:#E8F5E9; color:#2E7D32; padding:1px 3px; border-radius:3px;">Siap Jual</span></div>
        <div class="m-box-sub">Gudang Produk Jadi FG-01</div>
    </div>

    <div class="m-box" style="border-bottom: 3px solid var(--color-secondary);">
        <div class="m-box-top">
            <span>OUTPUT KEMASAN HARI INI</span>
            <div class="m-box-icon" style="background:#FFF3E0; color:var(--color-secondary);"><i class="fa-solid fa-bag-shopping"></i></div>
        </div>
        <div class="m-box-val">2.900 <span style="font-size:10px;">Pouch</span> <span style="font-size:8px; background:#E8F5E9; color:#2E7D32; padding:1px 3px; border-radius:3px;">96% Target</span></div>
        <div class="m-box-sub">Target: 3.000 Pouch (1.500 kg)</div>
    </div>

    <div class="m-box" style="border-bottom: 3px solid var(--color-secondary);">
        <div class="m-box-top">
            <span>BATCH BERJALAN</span>
            <div class="m-box-icon" style="background:#FFF3E0; color:var(--color-secondary);"><i class="fa-solid fa-spinner"></i></div>
        </div>
        <div class="m-box-val">3 <span style="font-size:10px; font-weight:normal;">Batch</span> <span style="font-size:8px; background:#FFF3E0; color:var(--color-secondary); padding:1px 3px; border-radius:3px;">2 Tahap Awal</span></div>
        <div class="m-box-sub">Butuh konfirmasi admin</div>
    </div>

    <div class="m-box" style="border-bottom: 3px solid var(--color-primary);">
        <div class="m-box-top">
            <span>RESTOCK BAHAN BAKU</span>
            <div class="m-box-icon" style="background:#FFEBEE; color:var(--color-primary);"><i class="fa-solid fa-triangle-exclamation"></i></div>
        </div>
        <div class="m-box-val" style="color:var(--color-primary);">5 <span style="font-size:10px;">Bahan</span> <span style="font-size:8px; background:var(--color-primary); color:#fff; padding:1px 3px; border-radius:3px;">! MSS</span></div>
        <div class="m-box-sub">Di bawah Minimum Safety Stock</div>
    </div>
</div>

<div class="section-card">
    <div class="section-header">
        <div>
            <div class="section-title">Monitoring Produksi Real-Time <span class="badge-count">3 BATCH AKTIF</span> <span style="background:#FFEBEE; color:var(--color-primary); font-size:8.5px; padding:2px 5px; border-radius:3px; font-weight:700;">● Perlu 1 Konfirmasi Admin</span></div>
            <p style="font-size:9.5px; color:#7A5B47; margin-top:2px;">Alur kendali produksi 5 tahap dengan otorisasi & verifikasi admin pada setiap perpindahan proses</p>
        </div>
        <div style="display:flex; gap:5px;">
            <button style="background:#FFF; border:1px solid var(--border-color); padding:4px 8px; border-radius:5px; font-size:9.5px; font-weight:700;"><i class="fa-solid fa-filter"></i> Filter List</button>
            <button style="background:var(--color-primary); color:#FFF; border:none; padding:4px 8px; border-radius:5px; font-size:9.5px; font-weight:700;"><i class="fa-solid fa-check-double"></i> Verifikasi Terpilih</button>
        </div>
    </div>

    <div class="pipeline-bar-revised">
        <span style="color:var(--color-primary);"><i class="fa-solid fa-layer-group"></i> 5 TAHAP PRODUKSI ASLI PANGERAN CONDET:</span>
        <span>● 1. Pengolahan Bahan Baku</span> ➔ 
        <span>● 2. Jemur / Dehidrasi</span> ➔ 
        <span>● 3. Penggorengan</span> ➔ 
        <span>● 4. Pack Produk</span> ➔ 
        <span>● 5. Selesai (Gudang FG)</span>
    </div>

    <!-- Batch 1 -->
    <div class="batch-card-revised">
        <div class="batch-head">
            <div>
                <span style="font-size:11.5px; font-weight:800; color:var(--color-neutral);">#BCH-RG-2024-089</span> 
                <span style="background:#FFF3E0; color:var(--color-secondary); font-weight:700; font-size:8.5px; padding:1px 5px; border-radius:3px;">Rengginang Ikan Original Super</span>
                <span style="background:#FFF8E1; color:#B78103; font-weight:700; font-size:8.5px; padding:1px 5px; border-radius:3px; margin-left:3px;">⏳ Menunggu Konfirmasi Admin</span>
                <div style="font-size:9.5px; color:#7A5B47; margin-top:1px;">Volume: 500 Kg (~1.000 Pouch) • Line Oven Dehydrator A • Spv: Tim Olah A</div>
            </div>
            <button class="btn-sm-red" style="padding:4px 8px; font-size:9.5px;"><i class="fa-solid fa-check"></i> Konfirmasi Lanjut Tahap 3</button>
        </div>
        <div class="steps-flow-5">
            <div class="step-box-5 done"><i class="fa-solid fa-check"></i> 1. Olah Bahan Baku<br><span style="font-size:7.5px; opacity:0.8;">Terverifikasi</span></div>
            <div class="step-box-5 active"><i class="fa-solid fa-fire"></i> 2. Jemur / Dehidrasi<br><span style="font-size:7.5px;">Siap Verifikasi</span></div>
            <div class="step-box-5"><i class="fa-solid fa-clock"></i> 3. Penggorengan<br><span style="font-size:7.5px; color:#aaa;">Menunggu</span></div>
            <div class="step-box-5"><i class="fa-solid fa-clock"></i> 4. Pack Produk<br><span style="font-size:7.5px; color:#aaa;">Menunggu</span></div>
            <div class="step-box-5"><i class="fa-solid fa-clock"></i> 5. Selesai<br><span style="font-size:7.5px; color:#aaa;">Gudang FG</span></div>
        </div>
    </div>

    <!-- Batch 2 -->
    <div class="batch-card-revised">
        <div class="batch-head">
            <div>
                <span style="font-size:11.5px; font-weight:800; color:var(--color-neutral);">#BCH-RG-2024-090</span> 
                <span style="background:#FFF3E0; color:var(--color-secondary); font-weight:700; font-size:8.5px; padding:1px 5px; border-radius:3px;">Rengginang Pedas Daun Jeruk</span>
                <span style="background:#E8F5E9; color:#2E7D32; font-weight:700; font-size:8.5px; padding:1px 5px; border-radius:3px; margin-left:3px;">✔ Terverifikasi Admin</span>
                <div style="font-size:9.5px; color:#7A5B47; margin-top:1px;">Volume: 150 Kg (~300 Pouch) • Wajan Otomatis Line B • Operator: Tim Goreng B</div>
            </div>
            <button style="background:#FFF; border:1px solid var(--border-color); font-size:9px; font-weight:700; padding:4px 8px; border-radius:4px; cursor:pointer;"><i class="fa-solid fa-file-lines"></i> Cek Lembar Uji QA</button>
        </div>
        <div class="steps-flow-5">
            <div class="step-box-5 done"><i class="fa-solid fa-check"></i> 1. Olah Bahan Baku</div>
            <div class="step-box-5 done"><i class="fa-solid fa-check"></i> 2. Jemur / Dehidrasi</div>
            <div class="step-box-5 active" style="background:#FFEBEE; border-color:#FFCDD2; color:var(--color-primary);"><i class="fa-solid fa-spinner"></i> 3. Penggorengan<br><span style="font-size:7.5px;">Berjalan (85%)</span></div>
            <div class="step-box-5"><i class="fa-solid fa-clock"></i> 4. Pack Produk</div>
            <div class="step-box-5"><i class="fa-solid fa-clock"></i> 5. Selesai</div>
        </div>
    </div>

    <!-- Batch 3 -->
    <div class="batch-card-revised">
        <div class="batch-head">
            <div>
                <span style="font-size:11.5px; font-weight:800; color:var(--color-neutral);">#BCH-RG-2024-091</span> 
                <span style="background:#FFF3E0; color:var(--color-secondary); font-weight:700; font-size:8.5px; padding:1px 5px; border-radius:3px;">Rengginang Ikan Balado Crispy</span>
                <span style="background:#E8F5E9; color:#2E7D32; font-weight:700; font-size:8.5px; padding:1px 5px; border-radius:3px; margin-left:3px;">✔ Terverifikasi Admin</span>
                <div style="font-size:9.5px; color:#7A5B47; margin-top:1px;">Volume: 500 Kg (~1.000 Pouch) • Mesin Nitrogen Sealing • Tim Kemas Otomatis</div>
            </div>
            <button style="background:#2E7D32; color:#FFF; border:none; font-size:9.5px; font-weight:700; padding:4px 8px; border-radius:4px; cursor:pointer;"><i class="fa-solid fa-boxes-packing"></i> Transfer ke Gudang FG</button>
        </div>
        <div class="steps-flow-5">
            <div class="step-box-5 done"><i class="fa-solid fa-check"></i> 1. Olah Bahan Baku</div>
            <div class="step-box-5 done"><i class="fa-solid fa-check"></i> 2. Jemur / Dehidrasi</div>
            <div class="step-box-5 done"><i class="fa-solid fa-check"></i> 3. Penggorengan</div>
            <div class="step-box-5 done"><i class="fa-solid fa-check"></i> 4. Pack Produk<br><span style="font-size:7.5px;">1.000 Pouch</span></div>
            <div class="step-box-5 active" style="background:#FFF9C4; border-color:#FFF59D; color:#F57F17;"><i class="fa-solid fa-flag-checkered"></i> 5. Selesai<br><span style="font-size:7.5px;">Siap Inbound</span></div>
        </div>
    </div>
</div>

<div class="bottom-grid-50">
    <!-- Stok Produk Jadi -->
    <div class="section-card">
        <div class="section-header">
            <div class="section-title"><i class="fa-solid fa-boxes-stacked" style="color:#2E7D32;"></i> Overview Stok Produk Jadi (Siap Distribusi)</div>
            <a href="#" style="font-size:9.5px; color:var(--color-secondary); font-weight:700; text-decoration:none;">Katalog Lengkap &rsaquo;</a>
        </div>
        <p style="font-size:9px; color:#7A5B47; margin-bottom:8px;">Inventaris Rengginang siap jual dalam kemasan pouch yang telah dipisahkan</p>

        <table class="table-custom">
            <thead>
                <tr>
                    <th>SKU PRODUK JADI</th>
                    <th>VARIAN & KEMASAN</th>
                    <th>STOK FISIK</th>
                    <th>BATCH ASAL</th>
                    <th>STATUS</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>SKU-FG-001-250G</td>
                    <td>Original Super Gurih<br><span style="font-size:8px; color:#8C6A54;">Pouch Foil 250g</span></td>
                    <td><b>5.800 Pcs</b></td>
                    <td>#BCH-088</td>
                    <td><span style="background:#E8F5E9; color:#2E7D32; padding:1px 4px; border-radius:3px; font-size:8px;">Ready Kirim</span></td>
                    <td><button class="btn-sm-brown" onclick="document.getElementById('modalAlokasiStok').style.display='flex'">Alokasi PO</button></td>
                </tr>
                <tr>
                    <td>SKU-FG-002-250G</td>
                    <td>Pedas Daun Jeruk<br><span style="font-size:8px; color:#8C6A54;">Pouch Foil 250g</span></td>
                    <td><b>4.150 Pcs</b></td>
                    <td>#BCH-087</td>
                    <td><span style="background:#E8F5E9; color:#2E7D32; padding:1px 4px; border-radius:3px; font-size:8px;">Ready Kirim</span></td>
                    <td><button class="btn-sm-brown">Alokasi PO</button></td>
                </tr>
                <tr>
                    <td>SKU-FG-003-250G</td>
                    <td>Balado Crispy Premium<br><span style="font-size:8px; color:#8C6A54;">Pouch Foil 250g</span></td>
                    <td><b>3.600 Pcs</b></td>
                    <td>#BCH-086</td>
                    <td><span style="background:#E8F5E9; color:#2E7D32; padding:1px 4px; border-radius:3px; font-size:8px;">Ready Kirim</span></td>
                    <td><button class="btn-sm-brown">Alokasi PO</button></td>
                </tr>
                <tr>
                    <td>SKU-FG-004-250G</td>
                    <td>Bawang Gurih-Gurih<br><span style="font-size:8px; color:#8C6A54;">Pouch Foil 250g</span></td>
                    <td><b style="color:var(--color-primary);">1.300 Pcs</b></td>
                    <td>#BCH-085</td>
                    <td><span style="background:#FFF3E0; color:var(--color-secondary); padding:1px 4px; border-radius:3px; font-size:8px;">Stok Menipis</span></td>
                    <td><button class="btn-sm-red">Prioritas WO</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Restock Alert Bahan Baku -->
    <div class="section-card">
        <div class="section-header">
            <div class="section-title"><i class="fa-solid fa-triangle-exclamation" style="color:var(--color-primary);"></i> Restock Alert Bahan Baku Kritis</div>
            <span style="font-size:8.5px; background:#FFEBEE; color:var(--color-primary); padding:1px 4px; border-radius:3px; font-weight:700;">! MSS Limit</span>
        </div>
        <p style="font-size:9px; color:#7A5B47; margin-bottom:8px;">Gudang Bahan Baku Mentah & Kemasan</p>

        <table class="table-custom">
            <thead>
                <tr>
                    <th>BAHAN MENTAH</th>
                    <th>SISA</th>
                    <th>MSS</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ikan Tenggiri Giling<br><span style="font-size:8px; color:var(--color-primary);">Kritis (-102 Kg)</span></td>
                    <td style="color:var(--color-primary);"><b>48 Kg</b></td>
                    <td>150 Kg</td>
                    <td><button class="btn-sm-red">Pesan PO</button></td>
                </tr>
                <tr>
                    <td>Minyak Kelapa Sawit<br><span style="font-size:8px; color:var(--color-primary);">Kritis (-155 L)</span></td>
                    <td style="color:var(--color-primary);"><b>95 L</b></td>
                    <td>250 L</td>
                    <td><button class="btn-sm-red">Pesan PO</button></td>
                </tr>
                <tr>
                    <td>Kemasan Pouch 250g<br><span style="font-size:8px; color:var(--color-primary);">Kritis (-2.800 Pcs)</span></td>
                    <td style="color:var(--color-primary);"><b>1.200 Pcs</b></td>
                    <td>4.000 Pcs</td>
                    <td><button class="btn-sm-red">Pesan PO</button></td>
                </tr>
                <tr>
                    <td>Beras Ketan Putih<br><span style="font-size:8px; color:#B78103;">Perhatian</span></td>
                    <td><b>210 Kg</b></td>
                    <td>300 Kg</td>
                    <td><button class="btn-sm-brown">Pesan PO</button></td>
                </tr>
                <tr>
                    <td>Bumbu Rempah & Bawang<br><span style="font-size:8px; color:#B78103;">Perhatian</span></td>
                    <td><b>35 Kg</b></td>
                    <td>50 Kg</td>
                    <td><button class="btn-sm-brown">Pesan PO</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

{{-- Panggil Modal Alokasi Stok --}}
    @include('components.modals.alokasi-stok')

@endsection