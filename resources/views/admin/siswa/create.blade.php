@extends('admin.layouts')

@section('title', 'Tambah Siswa')
@section('page_title', 'Tambah Siswa')

@section('content')
<div class="panel-card">
    <form action="{{ route('siswa.store') }}" method="POST" class="panel-form-grid">
        @csrf

        <div>
            <h3 class="panel-section-title">Data Inti</h3>
            <div class="panel-form-fields">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>

                <label for="nis">NIS</label>
                <input type="text" id="nis" name="nis" value="{{ old('nis') }}" required>

                <label for="kelas">Kelas</label>
                <input type="text" id="kelas" name="kelas" value="{{ old('kelas') }}" placeholder="Contoh: X PPLG 1" required>

                <label for="hp">No HP</label>
                <input type="text" id="hp" name="hp" value="{{ old('hp') }}" required>

                <label for="status">Checkpoint</label>
                <select id="status" name="status" required>
                    <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>
        </div>

        <div>
            <h3 class="panel-section-title">Catatan</h3>
            <div class="panel-form-fields">
                <p class="panel-empty" style="text-align:left; padding:0;">
                    Isi nama, NIS, kelas, no HP, dan checkpoint. Sisanya akan dibuat otomatis.
                </p>
            </div>
        </div>

        <div class="panel-cta-row panel-grid-full">
            <button type="submit" class="panel-btn">Simpan Data</button>
            <a href="{{ route('siswa.index') }}" class="panel-btn panel-btn-outline">Kembali</a>
        </div>
    </form>
</div>
@endsection