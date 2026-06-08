<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelanjaController extends Controller
{
    public function index()
    {
        $belanja = DB::table('keranjangbelanja')->orderBy('ID')->get();
        return view('belanja.index', compact('belanja'));
    }

    public function create()
    {
        return view('belanja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'KodeBarang' => 'required|integer',
            'Jumlah' => 'required|integer|min:1',
            'Harga' => 'required|integer|min:0',
        ]);

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect()->route('belanja.index')->with('success', 'Barang berhasil dimasukkan ke keranjang.');
    }

    public function destroy($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        return redirect()->route('belanja.index')->with('success', 'Pembelian barang berhasil dibatalkan.');
    }
}
