<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaporBanjir</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar">
        <p class="brand">LaporBanjir</p>
        <div style="display:flex; align-items:center; gap:12px;">
            <a href="{{ route('laporan.create') }}">Buat Laporan</a>

            @auth
                {{-- Menu untuk petugas yang sudah login --}}
                <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
                <a href="{{ route('profil') }}">Profil Petugas</a>
                <form method="POST" action="{{ route('logout') }}" style="margin:0;">
                    @csrf
                    <button type="submit" style="background:none; border:none; color:inherit; cursor:pointer; font:inherit;">Logout</button>
                </form>
            @else
                {{-- Menu untuk pengunjung yang belum login --}}
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </nav>

    <main class="container">
        @if ($errors->any())
            <div style="background:#fde2e2; color:#b00020; padding:10px 14px; border-radius:6px; margin-bottom:16px;">
                <ul style="margin:0; padding-left:18px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>