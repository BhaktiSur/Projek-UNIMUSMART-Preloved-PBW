@extends('layouts.app')

@section('title', 'Bantuan - Preloved UNIMUS')

@section('content')
<section class="help-page">
    <div class="container">
        <h1>Pusat Bantuan</h1>

        <p>
            Temukan informasi tentang penggunaan Preloved UNIMUS,
            mulai dari mencari barang hingga melakukan transaksi.
        </p>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <section class="help-section">
            <h2>Cara Membeli Barang</h2>

            <ol>
                <li>Buka halaman katalog dan cari barang yang kamu inginkan.</li>
                <li>Pilih barang untuk melihat detail dan kondisi produk.</li>
                <li>Periksa harga, informasi penjual, dan lokasi transaksi.</li>
                <li>Diskusikan ketersediaan barang dengan penjual.</li>
                <li>Sepakati metode pembayaran transfer atau COD.</li>
            </ol>
        </section>

        <section class="help-section">
            <h2>Cara Menjual Barang</h2>

            <ol>
                <li>Buka halaman Jual Barang.</li>
                <li>Isi nama, kategori, harga, kondisi, dan deskripsi barang.</li>
                <li>Siapkan foto barang yang sesuai dengan kondisi sebenarnya.</li>
                <li>Berikan informasi lokasi transaksi yang jelas.</li>
                <li>Pastikan barang dan informasi yang ditawarkan sesuai.</li>
            </ol>
        </section>

        <section class="help-section">
            <h2>Panduan Transaksi Aman</h2>

            <ul>
                <li>Periksa kondisi barang sebelum menyelesaikan pembelian.</li>
                <li>Jangan memberikan kata sandi atau kode verifikasi kepada orang lain.</li>
                <li>Pastikan konfirmasi pembayaran sesuai dengan transaksi sebenarnya.</li>
                <li>Untuk COD, pilih lokasi umum yang aman dan sepakati waktu pertemuan.</li>
                <li>Simpan bukti komunikasi dan transaksi jika diperlukan.</li>
            </ul>
        </section>

        <section class="help-section" id="aturan">
            <h2>Aturan Penggunaan</h2>

            <ul>
                <li>Barang yang dijual harus milik sendiri atau dijual dengan izin pemilik.</li>
                <li>Informasi produk dan foto harus sesuai dengan kondisi sebenarnya.</li>
                <li>Dilarang menawarkan barang ilegal atau barang yang melanggar hukum.</li>
                <li>Dilarang melakukan penipuan, spam, atau penyalahgunaan akun.</li>
                <li>Pengguna bertanggung jawab atas informasi dan kesepakatan transaksinya.</li>
            </ul>
        </section>

        <section class="help-section">
            <h2>Privasi Pengguna</h2>

            <p>
                Informasi pribadi hanya seharusnya dikumpulkan dan digunakan
                sesuai kebutuhan layanan. Jangan tampilkan informasi kontak
                pribadi pengguna kepada publik tanpa alasan dan persetujuan
                yang sesuai.
            </p>
        </section>

        <section class="help-section report-section" id="lapor-akun">
            <h2>Pusat Pelaporan Akun</h2>
            <p class="report-desc">
                Mengalami kendala dengan penjual atau pembeli yang tidak bertanggung jawab? 
                Laporkan akun terkait beserta buktinya agar tim admin dapat menindaklanjuti.
            </p>

            <form action="{{ url('/laporan-akun') }}" method="POST" enctype="multipart/form-data" class="report-form">
                @csrf

                <div class="form-group">
                    <label for="peran_pelapor">Saya melaporkan sebagai:</label>
                    <select name="peran_pelapor" id="peran_pelapor" required>
                        <option value="">-- Pilih Peran Anda --</option>
                        <option value="pembeli">Pembeli</option>
                        <option value="penjual">Penjual</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="akun_terlapor">Username / Nama / NIM Terlapor:</label>
                    <input type="text" name="akun_terlapor" id="akun_terlapor" placeholder="Contoh: Budi Santoso / C2C023001" required>
                </div>

                <div class="form-group">
                    <label for="nama_barang">Nama Barang / ID Transaksi (Opsional):</label>
                    <input type="text" name="nama_barang" id="nama_barang" placeholder="Contoh: Buku Kalkulus Edisi 9">
                </div>

                <div class="form-group">
                    <label for="kategori_masalah">Kategori Pelanggaran:</label>
                    <select name="kategori_masalah" id="kategori_masalah" required>
                        <option value="">-- Pilih Alasan Pelaporan --</option>
                        <option value="tidak_kirim">Penjual tidak menyerahkan barang setelah pembayaran</option>
                        <option value="tidak_sesuai">Kondisi barang sangat tidak sesuai deskripsi</option>
                        <option value="ghosting_cod">Pembeli/Penjual membatalkan COD sepihak tanpa kabar</option>
                        <option value="penipuan">Indikasi penipuan atau transaksi mencurigakan</option>
                        <option value="kata_kasar">Penggunaan kata-kata kasar / pelecehan</option>
                        <option value="barang_terlarang">Menjual barang ilegal / melanggar aturan kampus</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="kronologi">Kronologi Kejadian:</label>
                    <textarea name="kronologi" id="kronologi" rows="4" placeholder="Jelaskan secara singkat waktu kejadian, kesepakatan awal, dan masalah yang dialami..." required></textarea>
                </div>

                <div class="form-group">
                    <label for="bukti_foto">Upload Bukti (Screenshot Chat / Transfer / Foto Barang):</label>
                    <input type="file" name="bukti_foto" id="bukti_foto" accept="image/png, image/jpeg, image/jpg" required>
                    <small class="form-hint">Format yang didukung: JPG, JPEG, PNG (Maks. 2MB).</small>
                </div>

                <button type="submit" class="btn-submit-report">Kirim Laporan</button>
            </form>
        </section>

        <section class="help-section">
            <h2>Butuh Bantuan?</h2>

            <p>
                Untuk versi awal, kamu dapat menghubungi pengelola website
                melalui kontak resmi yang nantinya disediakan di halaman ini.
            </p>
        </section>

        <a href="{{ url('/index') }}">Kembali ke Beranda</a>
    </div>
</section>
@endsection