@extends('templatelaravel')
@section('title', 'Data Nilai Kuliah')

@section('konten')

<a href="{{ route('nilaikuliah.index') }}" class="btn btn-secondary mb-4">
    Kembali
</a>

<div class="card">
    <div class="card-header">
        Form Tambah Data Nilai Kuliah
    </div>

<div class="card-body">

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('nilaikuliah.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <div class="row mb-3">
            <label for="nrp" class="col-sm-2 col-form-label">
                NRP
            </label>

            <div class="col-sm-10">
                <input type="text"
                       name="nrp"
                       id="nrp"
                       maxlength="6"
                       value="{{ old('nrp') }}"
                       class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label for="nilaiangka" class="col-sm-2 col-form-label">
                Nilai Angka
            </label>

            <div class="col-sm-10">
                <input type="text"
                       name="nilaiangka"
                       id="nilaiangka"
                       value="{{ old('nilaiangka') }}"
                       class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label for="sks" class="col-sm-2 col-form-label">
                SKS
            </label>

            <div class="col-sm-10">
                <input type="text"
                       name="sks"
                       id="sks"
                       value="{{ old('sks') }}"
                       class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">
                    Simpan Data
                </button>
            </div>
        </div>

    </form>

</div>

</div>

<script>
    function validasiForm() {

        let nrp = document.getElementById('nrp').value.trim();
        let nilaiangka = document.getElementById('nilaiangka').value.trim();
        let sks = document.getElementById('sks').value.trim();

        if (nrp === '') {
            Swal.fire({
                title: "Kesalahan Input Data!",
                text: "NRP wajib diisi",
                icon: "error"
            });
            return false;
        }

        if (nilaiangka === '') {
            Swal.fire({
                title: "Kesalahan Input Data!",
                text: "Nilai Angka wajib diisi",
                icon: "error"
            });
            return false;
        }

        if (sks === '') {
            Swal.fire({
                title: "Kesalahan Input Data!",
                text: "SKS wajib diisi",
                icon: "error"
            });
            return false;
        }

        return true;
    }
</script>

@endsection
