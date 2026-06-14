<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BedakController extends Controller
{
    public function index()
    {
        $bedak = DB::table('bedak')->paginate(10);
        return view('bedak.index', ['bedak' => $bedak]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $bedak = DB::table('bedak')
            ->where('merkbedak', 'like', "%" . $cari . "%")
            ->paginate(10);
        return view('bedak.index', ['bedak' => $bedak]);
    }

    public function tambah()
    {
        return view('bedak.tambah');
    }

    public function store(Request $request)
    {
        $tersedia = $request->tersedia;

        DB::table('bedak')->insert([
            'merkbedak'   => $request->merkbedak,
            'stockbedak'  => $request->stockbedak,
            'tersedia'    => $tersedia
        ]);
        return redirect('/bedak');
    }

    public function edit($id)
    {
        $bedak = DB::table('bedak')->where('kodebedak', $id)->get();
        return view('bedak.edit', ['bedak' => $bedak]);
    }

    public function update(Request $request)
    {
        $tersedia = $request->tersedia;

        DB::table('bedak')->where('kodebedak', $request->id)->update([
            'merkbedak'   => $request->merkbedak,
            'stockbedak'  => $request->stockbedak,
            'tersedia'    => $tersedia
        ]);
        return redirect('/bedak');
    }

    public function hapus($id)
    {
        DB::table('bedak')->where('kodebedak', $id)->delete();
        return redirect('/bedak');
    }
}
