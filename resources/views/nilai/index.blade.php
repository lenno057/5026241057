@extends('template')
@section('title', 'Nilai Kuliah Mahasiswa')
@section('konten')

    <h2>Daftar Nilai Kuliah Mahasiswa</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('nilai.create') }}" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @forelse($nilai as $item)
                <tr>
                    <td>{{ $item->ID }}</td>
                    <td>{{ $item->NRP }}</td>
                    <td>{{ $item->NilaiAngka }}</td>
                    <td>{{ $item->SKS }}</td>
                    <td>
                        @if ($item->NilaiAngka <= 40)
                            D
                        @elseif($item->NilaiAngka >= 41 && $item->NilaiAngka <= 60)
                            C
                        @elseif($item->NilaiAngka >= 61 && $item->NilaiAngka <= 80)
                            B
                        @else
                            A
                        @endif
                    </td>
                    <td>{{ $item->NilaiAngka * $item->SKS }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data nilai kuliah.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
