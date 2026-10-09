@extends('layouts.app')

@section('content')
    <h1>Form Laporan Banjir</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf

        <div>
            <label>Nama Pelapor</label>
            <input type="text" name="nama_pelapor" value="{{ old('nama_pelapor') }}">
        </div>

        <div>
            <label>Lokasi</label>
            <input type="text" name="lokasi" value="{{ old('lokasi') }}">
        </div>

        <div>
            <label>Tinggi Genangan (cm)</label>
            <input type="number" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}">
        </div>

        <div>
            <label>Tanggal Kejadian</label>
            <input type="date" name="tanggal_kejadian" value="{{ old('tanggal_kejadian') }}">
        </div>

        <button type="submit">Kirim Laporan</button>
    </form>
@endsection