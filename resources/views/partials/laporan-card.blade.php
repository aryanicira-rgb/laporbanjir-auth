@php
    $warna = match ($laporan->status) {
        'Awas'  => 'background:#fde2e2; border-color:#e53935;',
        'Siaga' => 'background:#fff3cd; border-color:#fb8c00;',
        default => 'background:#e3f2fd; border-color:#1e88e5;',
    };
@endphp

<div style="border:2px solid; border-radius:8px; padding:12px; margin-bottom:12px; {{ $warna }}">
    <h3>{{ $laporan->lokasi }}</h3>
    <p>Pelapor: {{ $laporan->nama_pelapor }}</p>
    <p>Tinggi genangan: {{ $laporan->tinggi_genangan }} cm</p>
    <p>Tanggal: {{ $laporan->tanggal_kejadian }}</p>
    <strong>Status: {{ $laporan->status }}</strong>
</div>
<div class="card status-{{ strtolower($laporan->status) }}">
    <h3>{{ $laporan->lokasi }}</h3>
    <p>Pelapor: {{ $laporan->nama_pelapor }}</p>
    <p>Tinggi genangan: {{ $laporan->tinggi_genangan }} cm</p>
    <p>Tanggal: {{ $laporan->tanggal_kejadian }}</p>
    <span class="badge">{{ $laporan->status }}</span>
</div>