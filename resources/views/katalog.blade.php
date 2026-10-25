@extends('layouts.app')

@section('title', 'Katalog Barang - Preloved UNIMUS')

@section('content')
<section class="catalog-page">
    <div class="container">
        <h1>Katalog Barang</h1>
        <p>Jelajahi barang preloved dari komunitas mahasiswa UNIMUS.</p>

        <form action="{{ url('/katalog') }}" method="GET">
            <input
                type="search"
                name="q"
                value="{{ request('q') }}"
                placeholder="Cari nama barang..."
            >

            <select name="kategori">
                <option value="">Semua Kategori</option>

                @foreach (['Elektronik', 'Buku', 'Pakaian', 'Aksesori', 'Lainnya'] as $category)
                    <option
                        value="{{ $category }}"
                        {{ request('kategori') === $category ? 'selected' : '' }}
                    >
                        {{ $category }}
                    </option>
                @endforeach
            </select>

            <button type="submit">Terapkan Filter</button>
            <a href="{{ url('/katalog') }}">Reset</a>
        </form>

        @php
            $products = [
                [
                    'id' => 1,
                    'nama' => 'Buku Pemrograman C++',
                    'harga' => 45000,
                    'kategori' => 'Buku',
                    'kondisi' => 'Bekas - Sangat Baik',
                    'gambar' => 'https://placehold.co/400x300?text=Buku+C%2B%2B'
                ],
                [
                    'id' => 2,
                    'nama' => 'Tas Kuliah',
                    'harga' => 75000,
                    'kategori' => 'Aksesori',
                    'kondisi' => 'Bekas - Baik',
                    'gambar' => 'https://placehold.co/400x300?text=Tas+Kuliah'
                ],
                [
                    'id' => 3,
                    'nama' => 'Mouse Wireless',
                    'harga' => 50000,
                    'kategori' => 'Elektronik',
                    'kondisi' => 'Bekas - Sangat Baik',
                    'gambar' => 'https://placehold.co/400x300?text=Mouse'
                ],
                [
                    'id' => 4,
                    'nama' => 'Jaket',
                    'harga' => 60000,
                    'kategori' => 'Pakaian',
                    'kondisi' => 'Bekas - Baik',
                    'gambar' => 'https://placehold.co/400x300?text=Jaket'
                ],
                [
                    'id' => 5,
                    'nama' => 'Kalkulator Kuliah',
                    'harga' => 35000,
                    'kategori' => 'Elektronik',
                    'kondisi' => 'Bekas - Baik',
                    'gambar' => 'https://placehold.co/400x300?text=Kalkulator'
                ],
                [
                    'id' => 6,
                    'nama' => 'Buku Catatan',
                    'harga' => 15000,
                    'kategori' => 'Buku',
                    'kondisi' => 'Bekas - Baik',
                    'gambar' => 'https://placehold.co/400x300?text=Buku+Catatan'
                ],
            ];

            $keyword = strtolower(trim(request('q', '')));
            $categoryFilter = request('kategori', '');

            $filteredProducts = array_filter($products, function ($product) use ($keyword, $categoryFilter) {
                $matchesKeyword = $keyword === ''
                    || str_contains(strtolower($product['nama']), $keyword);

                $matchesCategory = $categoryFilter === ''
                    || $product['kategori'] === $categoryFilter;

                return $matchesKeyword && $matchesCategory;
            });
        @endphp

        <p>{{ count($filteredProducts) }} barang ditemukan.</p>

        <div class="product-grid">
            @forelse ($filteredProducts as $product)
                <article class="product-card">
                    <a href="{{ url('/detailbarang') }}?id={{ $product['id'] }}">
                        <img
                            src="{{ $product['gambar'] }}"
                            alt="{{ $product['nama'] }}"
                        >

                        <p>{{ $product['kategori'] }}</p>
                        <h2>{{ $product['nama'] }}</h2>

                        <p>
                            Rp{{ number_format($product['harga'], 0, ',', '.') }}
                        </p>

                        <p>{{ $product['kondisi'] }}</p>
                    </a>

                    <a href="{{ url('/detailbarang') }}?id={{ $product['id'] }}">
                        Lihat Detail
                    </a>
                </article>
            @empty
                <p>Barang tidak ditemukan. Coba kata kunci atau kategori lain.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection