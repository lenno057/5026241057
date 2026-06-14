@extends('template')
@section('title', 'Data Bedak')
@section('konten')
    <a href="/bedak/tambah" class="btn btn-primary mb-3">+ Tambah Bedak Baru</a>

    <div class="card mb-3">
        <div class="card-body">
            <form action="/bedak/cari" method="GET" class="form-inline">
                <label class="mr-2">Cari Data Bedak :</label>
                <input class="form-control col-md-9 mr-2" type="text" name="cari" placeholder="Masukkan merk bedak .."
                    value="{{ old('cari') }}">
                <br />
                <input class="btn btn-success" type="submit" value="CARI">
            </form>
        </div>
    </div>

    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th style="text-align: center;">Kode Bedak</th>
                <th style="text-align: center;">Merk Bedak</th>
                <th style="text-align: center;">Stock Bedak</th>
                <th class="text-center" style="width: 15%;">Tersedia</th>
                <th style="text-align: center;">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bedak as $b)
                <tr>
                    <td style="text-align: center;">{{ $b->kodebedak }}</td>
                    <td>{{ $b->merkbedak }}</td>
                    <td style="text-align: center;">{{ $b->stockbedak }}</td>
                    <td class="text-center">
                        @if ($b->tersedia == 'Y')
                            <button type="button" class="btn btn-success btn-sm rounded-pill px-3"
                                style="pointer-events: none;">
                                Ada
                            </button>
                        @else
                            <button type="button" class="btn btn-danger btn-sm rounded-pill px-3"
                                style="pointer-events: none;">
                                Kosong
                            </button>
                        @endif
                    </td>
                    <td style="text-align: center;">
                        <a href="/bedak/edit/{{ $b->kodebedak }}" class="btn btn-warning btn-sm">Edit</a>
                        &ensp;
                        <a href="/bedak/hapus/{{ $b->kodebedak }}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $bedak->links() }}

@endsection
