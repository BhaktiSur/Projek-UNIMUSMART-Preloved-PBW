@extends('layouts.app')

@section('title', 'Detail Barang - Preloved UNIMUS')

@section('content')
@php
    $products = [
        1 => [
            'nama' => 'Buku Pemrograman C++',
            'harga' => 45000,
            'kategori' => 'Buku',
            'kondisi' => 'Bekas - Sangat Baik',
            'deskripsi' => 'Buku untuk belajar dasar-dasar pemrograman C++. Halaman masih lengkap dan dapat digunakan untuk belajar.',
            'penjual' => 'Mahasiswa TI',
            'lokasi' => 'Area Kampus UNIMUS',
            'gambar' => 'https://placehold.co/600x450?text=Buku+C%2B%2B'
        ],
        2 => [
            'nama' => 'Tas Kuliah',
            'harga' => 75000,
            'kategori' => 'Aksesori',
            'kondisi' => 'Bekas - Baik',
            'deskripsi' => 'Tas kuliah yang masih layak digunakan untuk membawa buku dan perlengkapan perkuliahan.',
            'penjual' => 'Mahasiswa UNIMUS',
            'lokasi' => 'Area Kampus UNIMUS',
            'gambar' => 'https://placehold.co/600x450?text=Tas+Kuliah'
        ],
        3 => [
            'nama' => 'Mouse Wireless',
            'harga' => 50000,
            'kategori' => 'Elektronik',
            'kondisi' => 'Bekas - Sangat Baik',
            'deskripsi' => 'Mouse wireless untuk laptop atau komputer. Kondisi barang merupakan contoh untuk tampilan awal.',
            'penjual' => 'Mahasiswa TI',
            'lokasi' => 'Area Kampus UNIMUS',
            'gambar' => 'https://placehold.co/600x450?text=Mouse'
        ],
        4 => [
            'nama' => 'Jaket',
            'harga' => 60000,
            'kategori' => 'Pakaian',
            'kondisi' => 'Bekas - Baik',
            'deskripsi' => 'Jaket preloved yang masih layak digunakan.',
            'penjual' => 'Mahasiswa UNIMUS',
            'lokasi' => 'Area Kampus UNIMUS',
            'gambar' => 'https://placehold.co/600x450?text=Jaket'
        ],
    ];

    $productId = (int) request('id', 1);
    $product = $products[$productId] ?? null;
@endphp

<section class="product-detail-page">
    <div class="container">
        @if ($product)
            <p>
                <a href="{{ url('/katalog') }}">Katalog</a>
                / Detail Barang
            </p>

            <div class="product-detail">
                <div class="product-detail-image">
                    <img
                        src="{{ $product['gambar'] }}"
                        alt="{{ $product['nama'] }}"
                    >
                </div>

                <div class="product-detail-info">
                    <p>{{ $product['kategori'] }}</p>

                    <h1>{{ $product['nama'] }}</h1>

                    <h2>
                        Rp{{ number_format($product['harga'], 0, ',', '.') }}
                    </h2>

                    <p>
                        <strong>Kondisi:</strong>
                        {{ $product['kondisi'] }}
                    </p>

                    <p>
                        <strong>Penjual:</strong>
                        {{ $product['penjual'] }}
                    </p>

                    <p>
                        <strong>Lokasi:</strong>
                        {{ $product['lokasi'] }}
                    </p>

                    <h3>Deskripsi Barang</h3>
                    <p>{{ $product['deskripsi'] }}</p>

                    <a href="{{ url('/transaksi') }}?id={{ $productId }}">
                        Lanjut ke Transaksi
                    </a>

                    <a href="{{ url('/katalog') }}">
                        Kembali ke Katalog
                    </a>
                </div>
            </div>
        @else
            <h1>Barang Tidak Ditemukan</h1>
            <p>Barang yang kamu cari belum tersedia pada data contoh.</p>
            <a href="{{ url('/katalog') }}">Kembali ke Katalog</a>
        @endif
    </div>
</section>
@endsection