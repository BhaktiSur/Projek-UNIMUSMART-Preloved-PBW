@extends('layouts.app')

@section('title', 'Detail Barang - Preloved UNIMUS')

@section('content')
<section class="product-detail-page">
    <div class="container">

        <p>
            <a href="{{ route('barang.katalog') }}">Katalog</a>
            / Detail Barang
        </p>

        <div class="product-detail">

            <div class="product-detail-image">
                <img
                    src="{{ $product->gambar
                        ? asset('storage/' . $product->gambar)
                        : 'https://placehold.co/600x450?text=Foto+Belum+Tersedia' }}"
                    alt="{{ $product->nama }}">
            </div>

            <div class="product-detail-info">

                <p>{{ $product->kategori }}</p>

                <h1>{{ $product->nama }}</h1>

                <h2>
                    Rp{{ number_format($product->harga, 0, ',', '.') }}
                </h2>

                <p>
                    <strong>Kondisi:</strong>
                    {{ $product->kondisi }}
                </p>

                <p>
                    <strong>Lokasi:</strong>
                    {{ $product->lokasi }}
                </p>

                <p>
                    <strong>Status:</strong>
                    {{ ucfirst($product->status) }}
                </p>

                <h3>Deskripsi Barang</h3>

                <p>{{ $product->deskripsi }}</p>

                <p>
                    <strong>Penjual:</strong>
                    {{ $product->user_id
                        ? 'Informasi penjual tersedia berdasarkan ID pengguna'
                        : 'Informasi penjual belum tersedia' }}
                </p>

                <a href="{{ url('/transaksi') }}?id={{ $product->id }}">
                    Lanjut ke Transaksi
                </a>

                <a href="{{ route('barang.katalog') }}">
                    Kembali ke Katalog
                </a>

            </div>
        </div>
    </div>
</section>
@endsection