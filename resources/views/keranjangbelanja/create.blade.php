@extends('templatelaravel')
@section('title', 'Keranjang Belanja')

@section('konten')

<a href="{{ route('keranjangbelanja.index') }}" class="btn btn-secondary mb-4">
    Kembali
</a>

<div class="card">
    <div class="card-header">
        Form Tambah Pembelian
    </div>

<div class="card-body">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('keranjangbelanja.store') }}" method="POST">
        @csrf

        <div class="row mb-3">
            <label for="kodebarang" class="col-sm-2 col-form-label">
                Kode Barang
            </label>

            <div class="col-sm-10">
                <input type="text"
                       name="kodebarang"
                       id="kodebarang"
                       class="form-control"
                       value="{{ old('kodebarang') }}"
                       required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="jumlah" class="col-sm-2 col-form-label">
                Jumlah Pembelian
            </label>

            <div class="col-sm-10">
                <input type="text"
                       name="jumlah"
                       id="jumlah"
                       class="form-control"
                       value="{{ old('jumlah') }}"
                       required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="harga" class="col-sm-2 col-form-label">
                Harga per Item
            </label>

            <div class="col-sm-10">
                <input type="text"
                       name="harga"
                       id="harga"
                       class="form-control"
                       value="{{ old('harga') }}"
                       required>
            </div>
        </div>

        <div class="row">
            <div class="offset-sm-2 col-sm-10">
                <input type="submit"
                       value="Simpan Data"
                       class="btn btn-primary">
            </div>
        </div>

    </form>

</div>

</div>

@endsection
