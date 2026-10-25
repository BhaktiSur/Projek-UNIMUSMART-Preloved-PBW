@extends('layouts.app')

@section('title', 'Profil Saya - Preloved UNIMUS')

@section('content')
<section class="profile-page">
    <div class="container">
        <h1>Profil Saya</h1>

        <div class="profile-information">
            <h2>Informasi Pengguna</h2>

            <p><strong>Nama:</strong> Mahasiswa UNIMUS</p>
            <p><strong>Email:</strong> mahasiswa@example.com</p>
            <p><strong>Status:</strong> Pengguna contoh</p>

            <a href="{{ url('/login') }}">Masuk dengan Akun Lain</a>
        </div>

        <div class="profile-statistics">
            <h2>Ringkasan Aktivitas</h2>

            <div>
                <h3>0</h3>
                <p>Barang Dijual</p>
            </div>

            <div>
                <h3>0</h3>
                <p>Transaksi Aktif</p>
            </div>

            <div>
                <h3>0</h3>
                <p>Transaksi Selesai</p>
            </div>
        </div>

        <div class="my-products">
            <h2>Barang Saya</h2>

            <p>
                Barang yang kamu unggah nantinya akan muncul
                pada bagian ini.
            </p>

            <a href="{{ url('/jual') }}">Jual Barang Baru</a>
        </div>

        <div class="my-transactions">
            <h2>Riwayat Transaksi</h2>

            <p>
                Riwayat pembelian dan penjualan akan ditampilkan
                setelah sistem transaksi terhubung ke database.
            </p>

            <a href="{{ url('/transaksi') }}">Lihat Transaksi</a>
        </div>
    </div>
</section>
@endsection