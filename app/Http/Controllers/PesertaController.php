<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesertaController extends Controller
{
    public function index()
    {
        $peserta = DB::table('nilai_peserta')->orderBy('ID')->get();
        return view('peserta.index', compact('peserta'));
    }

    public function create()
    {
        return view('peserta.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nopeserta' => 'required|string|max:5',
            'nilaiteori' => 'required|integer|min:1',
            'nilaipraktek' => 'required|integer|min:1',
        ]);

        DB::table('nilai_peserta')->insert([
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek
        ]);

        return redirect()->route('peserta.index')->with('success', 'Data nilai peserta berhasil ditambahkan.');
    }
}
