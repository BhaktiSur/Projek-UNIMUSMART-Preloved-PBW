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