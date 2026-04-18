@extends('admin.layouts')

@section('title', 'Dashboard Admin')
@section('page_title', 'Dashboard Admin')

@section('content')
<div class="panel-grid-two">
    <article class="panel-card panel-card-hero">
        <p class="panel-eyebrow">Ringkasan</p>
        <h2>Dashboard</h2>
        <p>Pilih menu untuk melihat atau menambah data siswa.</p>
        <div class="panel-cta-row">
            <a href="{{ route('siswa.index') }}" class="panel-btn">Lihat Data Siswa</a>
            <a href="{{ route('siswa.create') }}" class="panel-btn panel-btn-outline">Tambah Siswa</a>
        </div>
    </article>

    <article class="panel-card">
        <p class="panel-eyebrow">Info</p>
        <ul class="panel-list">
            <li>Gunakan pencarian untuk filter data.</li>
            <li>Gunakan menu Tambah Siswa untuk input baru.</li>
            <li>Edit data dari halaman Data Siswa.</li>
        </ul>
    </article>
</div>
@endsection