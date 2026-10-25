<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Preloved UNIMUS')</title>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>

    <header class="site-header">
        <div class="container">
            <a href="{{ url('/index') }}" class="logo">
                Preloved UNIMUS
            </a>

            <nav class="navbar">
                <a href="{{ url('/index') }}">Beranda</a>
                <a href="{{ url('/katalog') }}">Katalog</a>
                <a href="{{ url('/jual') }}">Jual Barang</a>
                <a href="{{ url('/transaksi') }}">Transaksi</a>
                <a href="{{ url('/bantuan') }}">Bantuan</a>
                <a href="{{ url('/profil') }}">Profil Saya</a>
            </nav>

            <a href="{{ url('/login') }}">Masuk</a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Preloved UNIMUS</p>
            <p>Marketplace preloved mahasiswa UNIMUS.</p>
        </div>
    </footer>

</body>
</html>