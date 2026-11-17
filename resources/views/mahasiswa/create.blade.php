@extends('layouts.master')

@section('title', 'Tambah Mahasiswa')

@section('content')

<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Form Tambah Mahasiswa</h5>
    </div>

    <div class="card-body">

        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control"
                       value="{{ old('nim') }}" required>
                @error('nim')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control"
                       value="{{ old('nama') }}" required>
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Program Studi</label>
                <input type="text" name="prodi" class="form-control"
                       value="{{ old('prodi') }}" required>
                @error('prodi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control"
                          rows="3" required>{{ old('alamat') }}</textarea>
                @error('alamat')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan Data
            </button>

            <a href="{{ route('mahasiswa.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>
        </form>

    </div>
</div>

@endsection
