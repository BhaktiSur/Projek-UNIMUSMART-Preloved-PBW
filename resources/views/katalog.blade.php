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
    $keyword = strtolower(trim(request('q', '')));
    $categoryFilter = request('kategori', '');

    $filteredProducts = $products->filter(function ($product) use ($keyword, $categoryFilter) {
        $matchesKeyword = $keyword === ''
            || str_contains(strtolower($product->nama), $keyword);

        $matchesCategory = $categoryFilter === ''
            || $product->kategori === $categoryFilter;

        return $matchesKeyword && $matchesCategory;
    });
@endphp


        <p>{{ count($filteredProducts) }} barang ditemukan.</p>

        <div class="product-grid">
            
@forelse ($filteredProducts as $product)
    <article class="product-card">
        <a href="{{ url('/detailbarang') }}?id={{ $product->id }}">
            <img
                src="{{ $product->gambar ? asset('storage/' . $product->gambar) : 'https://placehold.co/400x300?text=Foto+Belum+Tersedia' }}"
                alt="{{ $product->nama }}"
            >

            <p>{{ $product->kategori }}</p>
            <h2>{{ $product->nama }}</h2>

            <p>
                Rp{{ number_format($product->harga, 0, ',', '.') }}
            </p>

            <p>{{ $product->kondisi }}</p>
        </a>

        <a href="{{ url('/detailbarang') }}?id={{ $product->id }}">
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