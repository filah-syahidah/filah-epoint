@extends('admin.layouts')

@section('title', 'Data Siswa')
@section('page_title', 'Data Siswa')

@section('content')
<div class="panel-card">
    <div class="panel-toolbar">
        <form action="{{ route('siswa.index') }}" method="GET" class="panel-search">
            <input type="text" name="cari" value="{{ request('cari') }}" placeholder="Cari nama atau NIS...">
            <button type="submit" class="panel-btn">Cari</button>
        </form>

        <a href="{{ route('siswa.create') }}" class="panel-btn">Tambah Siswa</a>
    </div>

    <div class="panel-table-wrap">
        <table class="panel-table">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>No Hp</th>
                    <th>Checkpoint</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($siswas as $siswa)
                    <tr>
                        <td>
                            <img src="{{ $siswa->image === 'default-avatar.svg' ? asset('images/default-avatar.svg') : asset('storage/siswas/' . $siswa->image) }}" alt="Foto {{ $siswa->name }}" class="panel-avatar">
                        </td>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->name }}</td>
                        <td>{{ $siswa->tingkatan }} {{ $siswa->jurusan }} {{ $siswa->kelas }}</td>
                        <td>{{ $siswa->hp }}</td>
                        <td>
                            <span class="panel-status {{ $siswa->status == 1 ? 'is-active' : 'is-inactive' }}">
                                {{ $siswa->status == 1 ? 'Aktif' : 'Tidak Aktif' }}
                            </span>
                        </td>
                        <td>
                            <div class="panel-actions">
                                <a href="{{ route('siswa.show', $siswa->id) }}" class="panel-link">Detail</a>
                                <a href="{{ route('siswa.edit', $siswa->id) }}" class="panel-link">Edit</a>
                                <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="panel-link panel-link-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="panel-empty">Belum ada data siswa.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="panel-pagination">
        {{ $siswas->withQueryString()->links() }}
    </div>
</div>
@endsection