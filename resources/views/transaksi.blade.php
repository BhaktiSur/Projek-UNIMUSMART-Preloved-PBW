@extends('layouts.app')

@section('title', 'Transaksi - Preloved UNIMUS')

@section('content')
<section class="transaction-page">
    <div class="container">
        <h1>Transaksi</h1>

        <p>
            Periksa barang dan pilih metode transaksi yang
            disepakati bersama penjual.
        </p>

        @php
            $products = [
                1 => [
                    'nama' => 'Buku Pemrograman C++',
                    'harga' => 45000,
                    'penjual' => 'Mahasiswa TI',
                ],
                2 => [
                    'nama' => 'Tas Kuliah',
                    'harga' => 75000,
                    'penjual' => 'Mahasiswa UNIMUS',
                ],
                3 => [
                    'nama' => 'Mouse Wireless',
                    'harga' => 50000,
                    'penjual' => 'Mahasiswa TI',
                ],
                4 => [
                    'nama' => 'Jaket',
                    'harga' => 60000,
                    'penjual' => 'Mahasiswa UNIMUS',
                ],
            ];

            $productId = (int) request('id', 1);
            $product = $products[$productId] ?? null;
        @endphp

        @if ($product)
            <div class="transaction-summary">
                <h2>Ringkasan Pesanan</h2>

                <p><strong>Barang:</strong> {{ $product['nama'] }}</p>
                <p><strong>Penjual:</strong> {{ $product['penjual'] }}</p>

                <p>
                    <strong>Harga:</strong>
                    Rp{{ number_format($product['harga'], 0, ',', '.') }}
                </p>
            </div>

            <div class="payment-method">
                <h2>Metode Transaksi</h2>

                <form action="{{ url('/transaksi') }}" method="GET">
                    <input type="hidden" name="id" value="{{ $productId }}">

                    <div class="form-group">
                        <input
                            type="radio"
                            id="transfer"
                            name="metode"
                            value="transfer"
                            required
                        >

                        <label for="transfer">Transfer Bank</label>

                        <p>
                            Pembayaran melalui transfer sesuai
                            kesepakatan dengan penjual.
                        </p>
                    </div>

                    <div class="form-group">
                        <input
                            type="radio"
                            id="cod"
                            name="metode"
                            value="cod"
                        >

                        <label for="cod">Cash on Delivery (COD)</label>

                        <p>
                            Pembeli dan penjual bertemu secara langsung
                            di tempat umum yang disepakati.
                        </p>
                    </div>

                    <div class="form-group">
                        <label for="catatan">Catatan Transaksi</label>

                        <textarea
                            id="catatan"
                            name="catatan"
                            rows="3"
                            placeholder="Contoh: ingin bertemu di area kampus"
                        ></textarea>
                    </div>

                    <p>
                        Ini merupakan tampilan simulasi.
                        Pesanan dan pembayaran belum diproses.
                    </p>

                    <button type="submit">Lihat Ringkasan Pilihan</button>
                </form>
            </div>
        @else
            <h2>Barang Tidak Ditemukan</h2>
            <p>Pilih barang yang tersedia di katalog terlebih dahulu.</p>

            <a href="{{ url('/katalog') }}">Kembali ke Katalog</a>
        @endif
    </div>
</section>
@endsection