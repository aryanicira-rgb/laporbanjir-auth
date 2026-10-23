@extends('layouts.app')

@section('content')
<div style="max-width:420px; margin:0 auto;">
    <h2>Login Petugas</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div style="margin-bottom:12px;">
            <label for="email">Email</label><br>
            <input id="email" type="email" name="email" value="{{ old('email') }}"
                   required autofocus style="width:100%; padding:8px;">
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
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Ingat saya</label>
        </div>

        <button type="submit" style="padding:8px 16px; cursor:pointer;">Login</button>
    </form>
</div>
@endsection