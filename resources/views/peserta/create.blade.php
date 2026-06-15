@extends('template')
@section('title', 'Kode Soal nilai_peserta') @section('title', 'Nilai Peserta')
@section('konten')
<a href="{{ route('peserta.index') }}" class="btn btn-secondary mb-4">Kembali</a>

    @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            Form Tambah Data Nilai
        </div>

        <div class="card-body">
            <form action="{{ route('peserta.store') }}" method="post" onsubmit="return validasiForm()">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="nopeserta" class="col-sm-2 col-form-label">No Peserta</label>
                    <div class="col-sm-10">
                        <input type="text" name="nopeserta" id="nopeserta" class="form-control"
                               value="{{ old('nopeserta') }}" maxlength="5" placeholder="Masukkan 5 digit">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nilaiteori" class="col-sm-2 col-form-label">Nilai Teori</label>
                    <div class="col-sm-10">
                        <input type="text" name="nilaiteori" id="nilaiteori" class="form-control"
                               value="{{ old('nilaiteori') }}" placeholder="Masukkan angka nilai (0-100)">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nilaipraktek" class="col-sm-2 col-form-label">Nilai Praktek</label>
                    <div class="col-sm-10">
                        <input type="text" name="nilaipraktek" id="nilaipraktek" class="form-control"
                               value="{{ old('nilaipraktek') }}" placeholder="Masukkan nilai praktek">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script>
        function validasiForm() {
            let nopeserta = document.getElementById('nopeserta').value.trim();
            let nilaiteori = document.getElementById('nilaiteori').value.trim();
            let nilaipraktek = document.getElementById('nilaipraktek').value.trim();

            if (nopeserta === '' || nopeserta.length !== 5) {
                alert("No Peserta wajib diisi dan harus tepat 5 karakter!");
                return false;
            }

            if (nilaiteori === '' || isNaN(nilaiteori) || parseInt(nilaiteori) < 0 || parseInt(nilaiteori) > 100) {
                alert("Nilai Teori wajib diisi dengan angka antara 0 sampai 100!");
                return false;
            }

            if (nilaipraktek === '' || isNaN(nilaipraktek) || parseInt(nilaipraktek) < 0 || parseInt(nilaipraktek) > 100) {
                alert("Nilai Praktek wajib diisi dengan angka antara 0 sampai 100!");
                return false;
            }

            return true;
        }
    </script>
@endsection
