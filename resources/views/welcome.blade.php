<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Point</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main class="landing-page">
        <section class="landing-shell">
            <div class="landing-badge">E-POINT SYSTEM</div>
            <h1>Sistem Data Siswa</h1>
            <p>Login untuk mulai mengelola data.</p>

            <div class="landing-actions">
                @auth
                    <a href="{{ route('siswa.index') }}" class="panel-btn">Masuk ke Data Siswa</a>
                @else
                    <a href="{{ route('login') }}" class="panel-btn">Login</a>
                    <a href="{{ route('register') }}" class="panel-btn panel-btn-outline">Register</a>
                @endauth
            </div>
        </section>
    </main>
</body>
</html>