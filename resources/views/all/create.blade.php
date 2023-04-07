@extends('layouts.app')
@section('title', "LDS | Tambah Data Siswa")
@section('content')
<div class="container">
    <form action="{{ url('home') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">ID Siswa</label>
            <input type="text" class="form-control" id="id_siswa" name="id_siswa" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" required>
        </div>
        <button type="submit" class="btn btn-outline-secondary">Simpan</button>
        <a href="{{ url('home') }}" type="button" class="btn btn-outline-danger"><i class="fa-solid fa-xmark"></i> Nda Jadi</a>
    </form>
</div>
@endsection