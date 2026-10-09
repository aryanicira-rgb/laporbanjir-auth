@extends('layouts.app')

@section('content')
    <h1>Daftar Laporan Banjir</h1>

    @if (session('success'))
        <x-alert type="success">
            {{ session('success') }}
        </x-alert>
    @endif

    <a href="{{ route('laporan.create') }}" class="btn">+ Buat Laporan</a>

    <div class="grid">
        @forelse ($laporan as $item)
            @include('partials.laporan-card', ['laporan' => $item])
        @empty
            <p>Belum ada laporan.</p>
        @endforelse
    </div>
@endsection