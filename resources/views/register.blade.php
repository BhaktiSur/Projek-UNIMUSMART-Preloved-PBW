@extends('layouts.app')

@section('title', 'Daftar Akun - Preloved UNIMUS')

@section('content')
<section class="auth-page">
    <div class="container">
        <div class="auth-card">
            <h1>Buat Akun Baru</h1>

            <p>
                Bergabunglah dengan komunitas jual beli preloved UNIMUS.
            </p>

            <form action="{{ url('/register') }}" method="GET">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        placeholder="Masukkan nama lengkap"
                        autocomplete="name"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Masukkan email"
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
                        placeholder="Buat kata sandi"
                        autocomplete="new-password"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="konfirmasi_password">
                        Konfirmasi Kata Sandi
                    </label>

                    <input
                        type="password"
                        id="konfirmasi_password"
                        name="konfirmasi_password"
                        placeholder="Ulangi kata sandi"
                        autocomplete="new-password"
                        required
                    >
                </div>

                <p>
                    Pendaftaran belum aktif karena autentikasi
                    dan database belum dibuat.
                </p>

                <button type="button">Daftar</button>
            </form>

            <p>
                Sudah memiliki akun?
                <a href="{{ url('/login') }}">Masuk di sini</a>
            </p>
        </div>
    </div>
</section>
@endsection