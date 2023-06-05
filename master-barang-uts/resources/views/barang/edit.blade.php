@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('barang.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Edit Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodebarang" class="form-label">Kode Barang</label>
                            <input class="form-control @error('kodebarang')) is-invalid @enderror" type="text"
                                name="kodebarang" id="kodebarang" value="{{ $barang->kodebarang }}"
                                placeholder="Enter Kode Barang">

                            {{-- untuk memunculkan perintah error pada kolom Kode Barang --}}
                            @error('kodebarang')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namabarang" class="form-label">Nama Barang</label>
                            <input class="form-control @error('namabarang')) is-invalid @enderror" type="text"
                                name="namabarang" id="namabarang" value="{{ $barang->namabarang }}"
                                placeholder="Enter Nama Barang">

                            {{-- untuk memunculkan perintah error pada kolom Nama Barang --}}
                            @error('namabarang')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <input class="form-control @error('hargabarang')) is-invalid @enderror" type="text"
                                name="hargabarang" id="hargabarang" value="{{ $barang->hargabarang }}"
                                placeholder="Enter Harga Barang">

                            {{-- untuk memunculkan perintah error pada Harga Barang --}}
                            @error('hargabarang')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control @error('deskripsibarang')) is-invalid @enderror" type="text"
                                name="deskripsibarang" id="deskripsibarang" value="{{ $barang->deskripsibarang }}"
                                placeholder="Enter Deskripsi Barang">

                            {{-- untuk memunculkan perintah error pada Deskripsi Barang --}}
                            @error('deskripsibarang')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- POSITIONS --}}
                        <div class="mb-3">
                            <label for="satuan_id" class="form-label">Satuan Barang</label>
                            <select class="form-select @error('satuan_id') is-invalid @enderror" name="satuan_id"
                                id="satuan_id">
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}"
                                        {{ $barang->satuan_id == $satuan->id ? 'selected' : '' }}>
                                        {{ $satuan->namasatuan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('satuan_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
