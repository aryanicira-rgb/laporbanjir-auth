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
        <div>
            <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
            <a href="{{ route('laporan.create') }}">Buat Laporan</a>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>