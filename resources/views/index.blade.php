@extends('layouts.app')

@section('title', 'Beranda - Preloved UNIMUS')

@section('content')
<section class="hero">
    <div class="container">
        <h1>Temukan Barang Preloved Favoritmu</h1>

        <p>
            Jual dan beli barang preloved dengan mudah
            di lingkungan mahasiswa UNIMUS.
        </p>

        <form action="{{ url('/katalog') }}" method="GET">
            <input
                type="search"
                name="q"
                placeholder="Cari buku, laptop, pakaian, dan lainnya..."
                aria-label="Cari barang"
            >

            <button type="submit">Cari Barang</button>
        </form>

        <a href="{{ url('/jual') }}">Mulai Jual Barang</a>
    </div>
</section>

<section class="categories">
    <div class="container">
        <h2>Kategori Barang</h2>

        <div class="category-list">
            <a href="{{ url('/katalog') }}?kategori=Elektronik">
                Elektronik
            </a>

            <a href="{{ url('/katalog') }}?kategori=Buku">
                Buku dan Alat Kuliah
            </a>

            <a href="{{ url('/katalog') }}?kategori=Pakaian">
                Pakaian
            </a>

            <a href="{{ url('/katalog') }}?kategori=Aksesoris">
                Aksesori
            </a>

            <a href="{{ url('/katalog') }}?kategori=Lainnya">
                Lainnya
            </a>
        </div>
    </div>
</section>

<section class="featured-products">
    <div class="container">
        <h2>Barang Pilihan</h2>

        <p>Beberapa barang preloved yang bisa kamu temukan.</p>

        @php
            $products = [
                [
                    'id' => 1,
                    'nama' => 'Buku Pemrograman C++',
                    'harga' => 45000,
                    'kategori' => 'Buku',
                    'kondisi' => 'Bekas - Sangat Baik',
                    'penjual' => 'Mahasiswa TI',
                    'gambar' => 'https://placehold.co/400x300?text=Buku+C%2B%2B'
                ],
                [
                    'id' => 2,
                    'nama' => 'Tas Kuliah',
                    'harga' => 75000,
                    'kategori' => 'Aksesori',
                    'kondisi' => 'Bekas - Baik',
                    'penjual' => 'Mahasiswa UNIMUS',
                    'gambar' => 'https://placehold.co/400x300?text=Tas+Kuliah'
                ],
                [
                    'id' => 3,
                    'nama' => 'Mouse Wireless',
                    'harga' => 50000,
                    'kategori' => 'Elektronik',
                    'kondisi' => 'Bekas - Sangat Baik',
                    'penjual' => 'Mahasiswa TI',
                    'gambar' => 'https://placehold.co/400x300?text=Mouse'
                ],
                [
                    'id' => 4,
                    'nama' => 'Jaket',
                    'harga' => 60000,
                    'kategori' => 'Pakaian',
                    'kondisi' => 'Bekas - Baik',
                    'penjual' => 'Mahasiswa UNIMUS',
                    'gambar' => 'https://placehold.co/400x300?text=Jaket'
                ],
            ];
        @endphp

        <div class="product-grid">
            @foreach ($products as $product)
                <article class="product-card">
                    <a href="{{ url('/detailbarang') }}?id={{ $product['id'] }}">
                        <img
                            src="{{ $product['gambar'] }}"
                            alt="{{ $product['nama'] }}"
                        >

                        <p>{{ $product['kategori'] }}</p>

                        <h3>{{ $product['nama'] }}</h3>

                        <p>
                            Rp{{ number_format($product['harga'], 0, ',', '.') }}
                        </p>

                        <p>{{ $product['kondisi'] }}</p>
                    </a>

                    <a href="{{ url('/detailbarang') }}?id={{ $product['id'] }}">
                        Lihat Detail
                    </a>
                </article>
            @endforeach
        </div>

        <a href="{{ url('/katalog') }}">Lihat Semua Barang</a>
    </div>
</section>

<section class="how-it-works">
    <div class="container">
        <h2>Bagaimana Cara Menggunakannya?</h2>

        <div>
            <h3>1. Temukan Barang</h3>
            <p>Cari barang yang kamu butuhkan melalui katalog.</p>
        </div>

        <div>
            <h3>2. Hubungi Penjual</h3>
            <p>Diskusikan kondisi barang dan metode transaksi.</p>
        </div>

        <div>
            <h3>3. Selesaikan Transaksi</h3>
            <p>Pilih transfer atau COD sesuai kesepakatan.</p>
        </div>
    </div>
</section>
@endsection