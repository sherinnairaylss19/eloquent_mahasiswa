@extends('layouts.master')

@section('title', 'Edit Mahasiswa')

@section('content')

<div class="card shadow-sm">
    <div class="card-header bg-warning">
        <h5 class="mb-0">Form Edit Mahasiswa</h5>
    </div>

    <div class="card-body">

        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control"
                       value="{{ old('nim', $mahasiswa->nim) }}" required>
                @error('nim')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control"
                       value="{{ old('nama', $mahasiswa->nama) }}" required>
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Program Studi</label>
                <input type="text" name="prodi" class="form-control"
                       value="{{ old('prodi', $mahasiswa->prodi) }}" required>
                @error('prodi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control"
                          rows="3" required>{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                @error('alamat')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-warning">
                Update Data
            </button>

            <a href="{{ route('mahasiswa.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>
        </form>

    </div>
</div>

@endsection
