@extends('layouts.app')

@section('content')
<div style="max-width:420px; margin:0 auto;">
    <h2>Register Petugas</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div style="margin-bottom:12px;">
            <label for="name">Nama</label><br>
            <input id="name" type="text" name="name" value="{{ old('name') }}"
                   required autofocus style="width:100%; padding:8px;">
            @error('name')
                <small style="color:#b00020;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom:12px;">
            <label for="email">Email</label><br>
            <input id="email" type="email" name="email" value="{{ old('email') }}"
                   required style="width:100%; padding:8px;">
            @error('email')
                <small style="color:#b00020;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom:12px;">
            <label for="password">Password</label><br>
            <input id="password" type="password" name="password"
                   required style="width:100%; padding:8px;">
            @error('password')
                <small style="color:#b00020;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom:12px;">
            <label for="password_confirmation">Konfirmasi Password</label><br>
            <input id="password_confirmation" type="password" name="password_confirmation"
                   required style="width:100%; padding:8px;">
        </div>

        <button type="submit" style="padding:8px 16px; cursor:pointer;">Register</button>
    </form>
</div>
@endsection