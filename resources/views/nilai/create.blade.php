@extends('template')
@section('title', 'Tambah Data Nilai')
@section('konten')
<a href="{{ route('nilai.index') }}" class="btn btn-secondary mb-4">Kembali</a>

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
            Form Tambah Data Nilai Kuliah
        </div>

        <div class="card-body">
            <form action="{{ route('nilai.store') }}" method="post" onsubmit="return validasiForm()">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="NRP" id="NRP" class="form-control"
                               value="{{ old('NRP') }}" maxlength="6" placeholder="Masukkan 6 digit NRP">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="NilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
                    <div class="col-sm-10">
                        <input type="text" name="NilaiAngka" id="NilaiAngka" class="form-control"
                               value="{{ old('NilaiAngka') }}" placeholder="Masukkan angka nilai (0-100)">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="text" name="SKS" id="SKS" class="form-control"
                               value="{{ old('SKS') }}" placeholder="Masukkan jumlah bobot SKS">
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
            let nrp = document.getElementById('NRP').value.trim();
            let nilaiAngka = document.getElementById('NilaiAngka').value.trim();
            let sks = document.getElementById('SKS').value.trim();

            if (nrp === '' || nrp.length !== 6) {
                alert("NRP wajib diisi dan harus tepat 6 karakter!");
                return false;
            }

            if (nilaiAngka === '' || isNaN(nilaiAngka) || parseInt(nilaiAngka) < 0 || parseInt(nilaiAngka) > 100) {
                alert("Nilai Angka wajib diisi dengan angka antara 0 sampai 100!");
                return false;
            }

            if (sks === '' || isNaN(sks) || parseInt(sks) <= 0) {
                alert("SKS wajib diisi dengan angka minimal 1!");
                return false;
            }

            return true;
        }
    </script>
@endsection
