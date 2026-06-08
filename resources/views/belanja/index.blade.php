@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <h2>Keranjang Belanja</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href ="{{ route('belanja.create') }}" class="btn btn-primary">Beli</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        @forelse($belanja as $row)
            @php
                $total = $row->Jumlah * $row->Harga;
            @endphp
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->KodeBarang }}</td>
                <td>{{ $row->Jumlah }}</td>
                <td>IDR {{ number_format($row->Harga, 0, ',', '.') }}</td>
                <td>IDR {{ number_format($total, 0, ',', '.') }}</td>
                <td>
                    <form action="{{ route('belanja.destroy', $row->ID) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin membatalkan pembelian ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Batal</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data belanjaan.</td>
            </tr>
        @endforelse
    </table>
@endsection
