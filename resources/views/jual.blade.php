@extends('layouts.app')

@section('title', 'Jual Barang - Preloved UNIMUS')

@section('content')
<section class="sell-page">
    <div class="container">
        <h1>Jual Barang Preloved</h1>

        <p>
            Tawarkan barang yang masih layak pakai kepada
            mahasiswa lain di lingkungan UNIMUS.
        </p>

        <form action="{{ url('/jual') }}" method="GET">
            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input
                    type="text"
                    id="nama"
                    name="nama"
                    placeholder="Contoh: Buku Pemrograman C++"
                    required
                >
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select id="kategori" name="kategori" required>
                    <option value="">Pilih kategori</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Buku">Buku dan Alat Kuliah</option>
                    <option value="Pakaian">Pakaian</option>
                    <option value="Aksesori">Aksesori</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <div class="form-group">
                <label for="harga">Harga (Rupiah)</label>
                <input
                    type="number"
                    id="harga"
                    name="harga"
                    min="0"
                    placeholder="Contoh: 50000"
                    required
                >
            </div>

            <div class="form-group">
                <label for="kondisi">Kondisi Barang</label>
                <select id="kondisi" name="kondisi" required>
                    <option value="">Pilih kondisi</option>
                    <option value="Baru">Baru</option>
                    <option value="Bekas - Sangat Baik">Bekas - Sangat Baik</option>
                    <option value="Bekas - Baik">Bekas - Baik</option>
                    <option value="Bekas - Cukup">Bekas - Cukup</option>
                </select>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi Barang</label>
                <textarea
                    id="deskripsi"
                    name="deskripsi"
                    rows="5"
                    placeholder="Jelaskan kondisi, ukuran, kelengkapan, atau kekurangan barang..."
                    required
                ></textarea>
            </div>

            <div class="form-group">
                <label for="gambar">Foto Barang</label>
                <input
                    type="file"
                    id="gambar"
                    name="gambar"
                    accept="image/*"
                >
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi Transaksi</label>
                <input
                    type="text"
                    id="lokasi"
                    name="lokasi"
                    placeholder="Contoh: Area Kampus UNIMUS"
                    required
                >
            </div>

            <p>
                Formulir ini masih berupa prototipe.
                Barang belum benar-benar diunggah ke website.
            </p>

            <button type="submit">Pratinjau Data Formulir</button>
        </form>
    </div>
</section>
@endsection