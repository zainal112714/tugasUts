@extends('layouts.app')
@section('content')

<div class="container-sm mt-5">
    {{-- Formulir untuk membuat barang baru --}}
    <form action="{{ route('barang.store') }}" method="POST">
        {{-- Token CSRF untuk keamanan --}}
        @csrf
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-6">

                {{-- Judul dan ikon --}}
                <div class="mb-3 text-center">
                    <i class="bi bi-diagram-3-fill fs-1"></i>
                    <h4>Create Barang</h4>
                </div>
                <hr>
                <div class="row">
                    {{-- Input untuk kode barang --}}
                    <div class="col-md-6 mb-3">
                        <label for="kodebarang" class="form-label">Kode Barang</label>
                        <input class="form-control @error('kodebarang') is-invalid @enderror" type="text"
                            name="kodebarang" id="kodebarang" value="{{ old('kodebarang') }}"
                            placeholder="Enter Kode Barang">
                        @error('kodebarang')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    {{-- Input untuk nama barang --}}
                    <div class="col-md-6 mb-3">
                        <label for="namabarang" class="form-label">Nama Barang</label>
                        <input class="form-control @error('namabarang') is-invalid @enderror" type="text"
                            name="namabarang" id="namabarang" value="{{ old('namabarang') }}"
                            placeholder="Enter Nama Barang">
                        @error('namabarang')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    {{-- Input untuk harga barang --}}
                    <div class="col-md-6 mb-3">
                        <label for="hargabarang" class="form-label">Harga Barang</label>
                        <input class="form-control @error('hargabarang') is-invalid @enderror" type="text"
                            name="hargabarang" id="hargabarang" value="{{ old('hargabarang') }}"
                            placeholder="Enter Harga Barang">
                        @error('hargabarang')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    {{-- Input untuk deskripsi barang --}}
                    <div class="col-md-6 mb-3">
                        <label for="deskripsibarang" class="form-label">Deskripsi Barang</label>
                        <input class="form-control @error('deskripsibarang') is-invalid @enderror" type="text"
                            name="deskripsibarang" id="deskripsibarang" value="{{ old('deskripsibarang') }}"
                            placeholder="Enter Deskripsi Barang">
                        @error('deskripsibarang')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    {{-- Input untuk satuan barang --}}
                    <div class="col-md-12 mb-3">
                        <label for="satuan_id" class="form-label">Satuan Barang</label>
                        <select name="satuan_id" id="satuan_id" class="form-select">
                            @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->id }}"
                                    {{ old('satuan_id') == $satuan->id ? 'selected' : '' }}>
                                    {{ $satuan->namasatuan }}</option>
                            @endforeach
                        </select>
                        @error('satuan_id')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row">
                    {{-- Tombol untuk batal --}}
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle me-2"></i> Cancel</a>
                    </div>
                    {{-- Tombol untuk simpan --}}
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                            Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


@endsection
