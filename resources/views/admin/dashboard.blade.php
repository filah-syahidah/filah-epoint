<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard admin</title>
</head>
<body>
    <a class="nav-link" href="{{ route('siswa.index') }}">Data Siswa</a>
    <a herf="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').sumbit();"></a>
    <from id="logout-form"action="{{ route('logout') }}" method="POST">
        @csrf
    </from>
    <h1>Dashboard Admin</h1>
    @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
    <p>You are loged in!!</p>
    @endif
