@extends('layouts.main')
@section('container')

<div class="container">
    <h2 class="text-center mb-4">Booking</h2>

    <form action="{{ URL::to('booking/tambahbooking') }}" method="post">
        @csrf
        <input type="hidden" name="car_id" value="{{ $datamobil->id }}">
        <div class="row mb-3">
            <div class="col">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Nama Mobil</span>
                    <input type="text" class="form-control" value="{{ $datamobil->nama_mobil }}" disabled>
                </div>
            </div>
            <div class="col">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Harga/Hari</span>
                    <input type="text" class="form-control" value="Rp. {{number_format ($datamobil->harga_sewa) }}" disabled>
                </div>
            </div>
            <div class="col">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Tipe</span>
                    <input type="text" class="form-control" value="{{ $datamobil->tipe->nama_tipe }}" disabled>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="nama_lengkap" class="form-label @error('nama_lengkap') is-invalid @enderror">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Cth: Nama Lengkap">
                @error('nama_lengkap')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="alamat_lengkap" class="form-label @error('alamat_lengkap') is-invalid @enderror">Alamat Lengkap</label>
                <input type="text" class="form-control" id="alamat_lengkap" name="alamat_lengkap" placeholder="Cth: Jl Ahmad Yani">
                @error('alamat_lengkap')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="nomor_wa" class="form-label @error('nomor_wa') is-invalid @enderror">Nomor Wa</label>
                <input type="text" class="form-control" id="nomor_wa" name="nomor_wa" placeholder="Cth: 0896xxxxxxx">
                @error('nomor_wa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
