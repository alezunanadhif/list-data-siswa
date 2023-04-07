@extends('layouts.app')
@section('title', "LDS | Edit Data Siswa")
@section('content')
<div class="container">
    <h1 class="text-center my-4">Edit Data Siswa</h1>
    <form method="post" action="{{ url("home/$data->id") }}">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" value="{{ $data->name }}" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Id Siswa</label>
            <input type="text" class="form-control" value="{{ $data->id_siswa }}" id="id_siswa" name="id_siswa" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" value="{{ $data->kelas }}" id="kelas" name="kelas" required>
        </div>
        <button type="submit" class="btn btn-outline-secondary"><i class="fa-solid fa-floppy-disk"></i></button>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapus"><i class="fa-solid fa-trash"></i></button>
    </form>
    
</div>

<!-- Modal -->
    <div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Yakin Mau Hapus ?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin mau hapus data <span class="fw-bold">"{{ $data->name }}"</span> ini? Sepertinya kamu mau beraksi nekat nih! Awas, tindakan ini tidak bisa dibatalkan loh. Kalo kamu tetep yakin, klik hapus aja ya. Tapi kalo kamu ragu-ragu, mendingan batalkan dan cek lagi deh apa beneran harus hapus konten ini.
                </div>
                <div class="modal-footer">
                    <form action="{{ url("home/$data->id")}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nda Jadi</button>
                        <button type="submit" class="btn btn-primary">Iya Yakin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection