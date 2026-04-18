<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'E-Point Admin')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main class="panel-page">
        <div class="panel-shell">
            <header class="panel-topbar">
                <div class="panel-brand">
                    <span class="panel-brand-badge">E-POINT</span>
                    <h1>@yield('page_title', 'Admin Panel')</h1>
                </div>

                <nav class="panel-nav">
                    <a href="{{ route('admin/dashboard') }}">Dashboard</a>
                    <a href="{{ route('siswa.index') }}">Data Siswa</a>
                    <a href="{{ route('siswa.create') }}">Tambah Siswa</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="panel-logout">Logout</button>
                    </form>
                </nav>
            </header>

            @if (session('success'))
                <div class="panel-flash">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="panel-error-list">
                    <strong>Periksa input berikut:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <section class="panel-content">
                @yield('content')
            </section>
        </div>
    </main>
</body>
</html>