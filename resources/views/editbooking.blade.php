{{-- @dd($databooking) --}}
@extends('layouts.main')
@section('container')

<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Booking</h2> <!-- Judul halaman ditambahkan di sini -->
    <form action="{{ URL::to('daftarbooking/save') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $databooking->id }}">
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Nama Mobil</span>
                    <input type="text" class="form-control" value="{{ $databooking->car->nama_mobil }}" disabled>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Harga/Hari</span>
                    <input type="number" class="form-control" value="{{ $databooking->car->harga_sewa }}" disabled>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Tipe</span>
                    <input type="text" class="form-control" value="{{ $databooking->car->tipe->nama_tipe }}" disabled>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="nama_lengkap" class="form-label @error('nama_lengkap') is-invalid @enderror">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ $databooking->nama_lengkap }}">
                @error('nama_lengkap')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="alamat_lengkap" class="form-label @error('alamat_lengkap') is-invalid @enderror">Alamat Lengkap</label>
                <input type="text" class="form-control" id="alamat_lengkap" name="alamat_lengkap" value="{{ $databooking->alamat_lengkap }}">
                @error('alamat_lengkap')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="nomor_wa" class="form-label @error('nomor_wa') is-invalid @enderror">Nomor Wa</label>
                <input type="text" class="form-control" id="nomor_wa" name="nomor_wa" value="{{ $databooking->nomor_handphone }}">
                @error('nomor_wa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>

@endsection
