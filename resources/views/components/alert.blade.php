@props(['type' => 'success'])

<div style="padding:10px; margin:10px 0; border-radius:6px; color:#fff; background: {{ $type === 'success' ? '#2e7d32' : '#c62828' }};">
    {{ $slot }}
</div>