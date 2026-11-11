@extends('layouts.app')

@section('title', $product->nama . ' - Preloved UNIMUS')

@section('content')
<section class="product-detail-page">
    <div class="container">

        <p class="breadcrumb">
            <a href="{{ url('/index') }}">Beranda</a>
            / <a href="{{ route('barang.katalog') }}">Katalog</a>
            / {{ $product->nama }}
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

                <div class="info-list">
                    <div>
                        <span>Kondisi</span>
                        <strong>{{ $product->kondisi }}</strong>
                    </div>

                    <div>
                        <span>Lokasi</span>
                        <strong>{{ $product->lokasi }}</strong>
                    </div>

                    <div>
                        <span>Status</span>
                        <strong class="status-badge status-{{ strtolower($product->status) }}">
                            {{ ucfirst($product->status) }}
                        </strong>
                    </div>
                </div>

                <h3>Deskripsi Barang</h3>

                <p>{{ $product->deskripsi }}</p>

                <p>
                    <strong>Penjual:</strong>
                    {{ $product->user_id
                        ? 'Informasi penjual tersedia berdasarkan ID pengguna'
                        : 'Informasi penjual belum tersedia' }}
                </p>

                <div class="product-actions">
                    <button type="button" id="btn-bagikan" class="btn-share">
                        Bagikan
                    </button>

                    <a href="{{ url('/transaksi') }}?id={{ $product->id }}">
                        Lanjut ke Transaksi
                    </a>

                    <a href="{{ route('barang.katalog') }}">
                        Kembali ke Katalog
                    </a>
                </div>

            </div>
        </div>

        @if (isset($related) && $related->count())
        <div class="related-products">
            <h2>Barang Terkait</h2>

            <div class="product-grid">
                @foreach ($related as $item)
                <article class="product-card">
                    <a href="{{ route('barang.detail', $item->id) }}">
                        <img
                            src="{{ $item->gambar
                                ? asset('storage/' . $item->gambar)
                                : 'https://placehold.co/400x300?text=Foto+Belum+Tersedia' }}"
                            alt="{{ $item->nama }}">
                         <p>{{ $item->kategori }}</p>

                        <h3>{{ $item->nama }}</h3>

                        <p>Rp{{ number_format($item->harga, 0, ',', '.') }}</p>

                        <p>{{ $item->kondisi }}</p>
                    </a>
                    <a href="{{ route('barang.detail', $item->id) }}">
                        Lihat Detail
                    </a>
                </article>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
<script>
    document.getElementById('btn-bagikan').addEventListener('click', function () {
        var tombol = this;
        navigator.clipboard.writeText(window.location.href).then(function () {
            tombol.textContent = 'Link tersalin!';
            setTimeout(function () { tombol.textContent = 'Bagikan'; }, 2000);
        });
    });
</script>
@endsection