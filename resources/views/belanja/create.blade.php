@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <h2>Tambah Belanjaan</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('belanja.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>Kode Barang</label><br>
            <input type="text" name="KodeBarang" id="KodeBarang" value="{{ old('Kode Barang') }}">
        </p>

        <p>
            <label>Harga per item</label><br>
            <input type="text" name="Harga" id="Harga" value="{{ old('Harga') }}">
        </p>

        <p>
            <label>Jumlah</label><br>
            <input type="text" name="Jumlah" id="Jumlah" minlength="1" value="{{ old('Jumlah') }}">
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('belanja.index') }}">Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let kodeBarang = document.getElementById('KodeBarang').value.trim();
            let harga = document.getElementById('Harga').value.trim();
            let jumlah = document.getElementById('Jumlah').value.trim();

            if (kodeBarang === '' || isNaN(kodeBarang)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kode Barang wajib diisi dengan angka",
                    icon: "error"
                });
                return false;
            }

            if (jumlah === '' || isNaN(jumlah) || parseInt(jumlah) <= 0) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Jumlah Pembelian wajib diisi dengan angka minimal 1",
                    icon: "error"
                });
                return false;
            }

            if (harga === '' || isNaN(harga) || parseInt(harga) < 0) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Harga wajib diisi dengan angka valid",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
