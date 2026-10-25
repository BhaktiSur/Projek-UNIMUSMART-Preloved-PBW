@extends('layouts.app')

@section('title', 'Masuk - Preloved UNIMUS')

@section('content')
<section class="auth-page">
    <div class="container">
        <div class="auth-card">
            <h1>Masuk ke Akun</h1>

            <p>
                Masuk untuk mengelola barang dan transaksi
                Preloved UNIMUS.
            </p>

            <form action="{{ url('/login') }}" method="GET">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Masukkan email kamu"
                        autocomplete="email"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan kata sandi"
                        autocomplete="current-password"
                        required
                    >
                </div>

                <button type="button">
                    Masuk
                </button>
            </form>

            <p>
                Belum memiliki akun?
                <a href="{{ url('/register') }}">Daftar sekarang</a>
            </p>

            <p>
                <a href="{{ url('/index') }}">Kembali ke Beranda</a>
            </p>
        </div>
    </div>
</section>
@endsection