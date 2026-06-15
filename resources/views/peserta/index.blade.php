@extends('template')
@section('title', 'Nilai Peserta')
@section('konten')

    <h2>Daftar Nilai Peserta</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('peserta.create') }}" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Peserta</th>
                <th>Nilai Teori</th>
                <th>Nilai Praktek</th>
                <th>Rata-Rata</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($peserta as $row)
                @php
                    $ratarata = ($row->nilaiteori + $row->nilaipraktek) / 2;
                    $isLulus = $ratarata >= 75;
                    $bgClass = $isLulus? 'bg-success text-white' : 'bg-danger text-white';
                    $statusText = $isLulus? 'Lulus' : 'Gagal';
                @endphp
                <tr>
                    <td>{{ $row->ID }}</td>
                    <td>{{ $row->nopeserta }}</td>
                    <td>{{ $row->nilaiteori }}</td>
                    <td>{{ $row->nilaipraktek }}</td>
                    <td>{{ $ratarata }}</td>
                    <td class="{{ $bgClass }}">{{ $statusText }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data nilai peserta.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
