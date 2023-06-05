@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('barang.create') }}" class="btn btn-primary">Create barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $barang)
                        <tr>
                            <td>{{ $barang->kodebarang }}</td>
                            <td>{{ $barang->namabarang }}</td>
                            <td>{{ $barang->hargabarang }}</td>
                            <td>{{ $barang->deskripsibarang }}</td>
                            <td>{{ $barang->satuan->namasatuan }}</td>
                            <td>
                                {{-- ACTION SECTION --}}
                                @include('barang.actions')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
