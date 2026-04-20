<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Lenno Andhika Pramudya Arkadewa";
        $umur = 19;
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

    	return view('biodata',['nama' => $nama , 'umur' => $umur, 'matkul' => $pelajaran]);
    }
}
