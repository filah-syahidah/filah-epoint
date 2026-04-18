@extends('auth.layouts')
@section('content')
<main class="auth-page auth-login-page">
    <section class="auth-shell">
        <aside class="auth-brand-panel">
            <div class="brand-badge">E-POINT</div>
            <h1>Login Admin</h1>
            <p>Silakan masuk untuk melanjutkan.</p>

            <div class="brand-highlights">
                <div>
                    <span>01</span>
                    <strong>Akun</strong>
                    <p>Gunakan email yang terdaftar.</p>
                </div>
                <div>
                    <span>02</span>
                    <strong>Akses</strong>
                    <p>Masuk ke menu data siswa.</p>
                </div>
            </div>
        </aside>

        <section class="auth-card-wrap">
            <div class="auth-card">
                <div class="auth-card-header">
                    <p class="eyebrow">Selamat datang kembali</p>
                    <h2>Login</h2>
                    <p class="subcopy">Masukkan email dan password.</p>
                </div>

                @if ($errors->any())
                    <div class="auth-alert">
                        <strong>Login gagal.</strong>
                        <span>Periksa email dan password yang kamu masukkan.</span>
                    </div>
                @endif

                <form action="{{ route('authenticate') }}" method="post" class="auth-form">
                    @csrf
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="nama@email.com" autocomplete="email">
                    @error('email')
                        <small class="field-error">{{ $message }}</small>
                    @enderror

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Masukkan password" autocomplete="current-password">
                    @error('password')
                        <small class="field-error">{{ $message }}</small>
                    @enderror

                    <button type="submit" class="auth-button">Masuk Sekarang</button>
                </form>

                <div class="auth-card-footer">
                    <span>Belum punya akun?</span>
                    <a href="{{ route('register') }}">Daftar sekarang</a>
                </div>
            </div>
        </section>
    </section>
</main>
@endsection