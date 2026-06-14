<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = DB::table('nilaikuliah')->orderBy('ID')->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        return view('nilai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NRP' => 'required|string|max:6',
            'NilaiAngka' => 'required|integer|min:0|max:100',
            'SKS' => 'required|integer|min:1',
        ]);

        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);

        return redirect()->route('nilai.index')->with('success', 'Data nilai kuliah berhasil ditambahkan.');
    }
}
