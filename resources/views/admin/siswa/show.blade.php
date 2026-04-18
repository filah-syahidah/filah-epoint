@extends('admin.layouts')

@section('title', 'Detail Siswa')
@section('page_title', 'Detail Siswa')

@section('content')
<div class="panel-card">
    <div class="panel-detail-grid">
        <div class="panel-detail-photo">
            <img src="{{ asset('storage/siswas/' . $siswa->image) }}" alt="Foto {{ $siswa->name }}" class="panel-avatar panel-avatar-xl">
        </div>

        <div class="panel-detail-section">
            <h3>Akun Siswa</h3>
            <dl>
                <dt>Nama</dt>
                <dd>{{ $siswa->name }}</dd>

                <dt>Email</dt>
                <dd>{{ $siswa->email }}</dd>
            </dl>
        </div>

        <div class="panel-detail-section">
            <h3>Data Siswa</h3>
            <dl>
                <dt>NIS</dt>
                <dd>{{ $siswa->nis }}</dd>

                <dt>Kelas</dt>
                <dd>{{ $siswa->tingkatan }} {{ $siswa->jurusan }} {{ $siswa->kelas }}</dd>

                <dt>No HP</dt>
                <dd>{{ $siswa->hp }}</dd>

                <dt>Status</dt>
                <dd>
                    <span class="panel-status {{ $siswa->status == 1 ? 'is-active' : 'is-inactive' }}">
                        {{ $siswa->status == 1 ? 'Aktif' : 'Tidak Aktif' }}
                    </span>
                </dd>
            </dl>
        </div>
    </div>

    <div class="panel-cta-row" style="margin-top: 28px;">
        <a href="{{ route('siswa.edit', $siswa->id) }}" class="panel-btn">Edit Data</a>
        <a href="{{ route('siswa.index') }}" class="panel-btn panel-btn-outline">Kembali</a>
    </div>
</div>
@endsection