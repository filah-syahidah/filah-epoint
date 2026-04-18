@extends('auth.layouts')
@section('content')
<main class="auth-page auth-register-page">
    <section class="auth-shell auth-shell-reverse">
        <aside class="auth-brand-panel auth-brand-panel-accent">
            <div class="brand-badge">JOIN E-POINT</div>
            <h1>Daftar Akun Admin</h1>
            <p>Lengkapi data untuk membuat akun.</p>

            <div class="brand-highlights">
                <div>
                    <span>01</span>
                    <strong>Data</strong>
                    <p>Isi nama dan email valid.</p>
                </div>
                <div>
                    <span>02</span>
                    <strong>Password</strong>
                    <p>Minimal 8 karakter.</p>
                </div>
            </div>
        </aside>

        <section class="auth-card-wrap">
            <div class="auth-card">
                <div class="auth-card-header">
                    <p class="eyebrow">Buat akun baru</p>
                    <h2>Register</h2>
                    <p class="subcopy">Isi form di bawah ini.</p>
                </div>

                @if ($errors->any())
                    <div class="auth-alert">
                        <strong>Data belum valid.</strong>
                        <span>Periksa kembali nama, email, dan password yang kamu isi.</span>
                    </div>
                @endif

                <form action="{{ route('store') }}" method="post" class="auth-form">
                    @csrf
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nama kamu" autocomplete="name">
                    @error('name')
                        <small class="field-error">{{ $message }}</small>
                    @enderror

                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="nama@email.com" autocomplete="email">
                    @error('email')
                        <small class="field-error">{{ $message }}</small>
                    @enderror

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Minimal 8 karakter" autocomplete="new-password">
                    @error('password')
                        <small class="field-error">{{ $message }}</small>
                    @enderror

                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Ulangi password" autocomplete="new-password">

                    <button type="submit" class="auth-button">Buat Akun</button>
                </form>

                <div class="auth-card-footer">
                    <span>Sudah punya akun?</span>
                    <a href="{{ route('login') }}">Login di sini</a>
                </div>
            </div>
        </section>
    </section>
</main>
@endsection