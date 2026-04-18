@extends('admin.layouts')

@section('title', 'Edit Siswa')
@section('page_title', 'Edit Siswa')

@section('content')
<div class="panel-card">
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data" class="panel-form-grid">
        @csrf
        @method('PUT')

        <div>
            <h3 class="panel-section-title">Preview Foto</h3>
            <div class="panel-form-fields">
                <img src="{{ asset('storage/siswas/' . $siswa->image) }}" alt="Foto {{ $siswa->name }}" class="panel-avatar panel-avatar-lg">

                <label for="image">Ganti Foto</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div>
        </div>

        <div>
            <h3 class="panel-section-title">Data Siswa</h3>
            <div class="panel-form-fields">
                <label for="nis">NIS Siswa</label>
                <input type="text" id="nis" name="nis" value="{{ old('nis', $siswa->nis) }}" required>

                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" value="{{ old('name', $siswa->name) }}" required>

                <label for="tingkatan">Tingkatan</label>
                <select id="tingkatan" name="tingkatan" required>
                    <option value="X" {{ 'X' == $siswa->tingkatan ? 'selected' : '' }}>X</option>
                    <option value="XI" {{ 'XI' == $siswa->tingkatan ? 'selected' : '' }}>XI</option>
                    <option value="XII" {{ 'XII' == $siswa->tingkatan ? 'selected' : '' }}>XII</option>
                </select>

                <label for="jurusan">Jurusan</label>
                <select id="jurusan" name="jurusan" required>
                    <option value="TBSM" {{ 'TBSM' == $siswa->jurusan ? 'selected' : '' }}>TBSM</option>
                    <option value="TJKT" {{ 'TJKT' == $siswa->jurusan ? 'selected' : '' }}>TJKT</option>
                    <option value="PPLG" {{ 'PPLG' == $siswa->jurusan ? 'selected' : '' }}>PPLG</option>
                    <option value="DKV" {{ 'DKV' == $siswa->jurusan ? 'selected' : '' }}>DKV</option>
                    <option value="TOI" {{ 'TOI' == $siswa->jurusan ? 'selected' : '' }}>TOI</option>
                </select>

                <label for="kelas">Kelas</label>
                <select id="kelas" name="kelas" required>
                    <option value="1" {{ '1' == $siswa->kelas ? 'selected' : '' }}>1</option>
                    <option value="2" {{ '2' == $siswa->kelas ? 'selected' : '' }}>2</option>
                    <option value="3" {{ '3' == $siswa->kelas ? 'selected' : '' }}>3</option>
                    <option value="4" {{ '4' == $siswa->kelas ? 'selected' : '' }}>4</option>
                </select>

                <label for="hp">No HP</label>
                <input type="text" id="hp" name="hp" value="{{ old('hp', $siswa->hp) }}" required>

                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="1" {{ '1' == $siswa->status ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ '0' == $siswa->status ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>
        </div>

        <div class="panel-cta-row panel-grid-full">
            <button type="submit" class="panel-btn">Update Data</button>
            <a href="{{ route('siswa.index') }}" class="panel-btn panel-btn-outline">Kembali</a>
        </div>
    </form>
</div>
@endsection