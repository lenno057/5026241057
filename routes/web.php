<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\BedakController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PesertaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('pert1', function () {
	return view('pertemuan1');
});

Route::get('pert2a', function () {
	return view('pertemuan2-news');
});

Route::get('pert2b', function () {
	return view('pertemuan2-news1');
});

Route::get('pert3temp', function () {
	return view('pertemuan3-template');
});

Route::get('pert3resp', function () {
	return view('pertemuan3-responsive');
});

Route::get('pert3tugas', function () {
	return view('pertemuan3-tugas');
});

Route::get('pert4', function () {
	return view('pertemuan4');
});

Route::get('pert5tugas', function () {
	return view('pertemuan5-tugas');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pengawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud tabel pegawai
Route::get('/pegawai/', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//crud tabel siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//crud tabel keranjangbelanja
Route::get('/belanja', [BelanjaController::class, 'index'])->name('belanja.index');
Route::get('/belanja/beli', [BelanjaController::class, 'create'])->name('belanja.create');
Route::post('/belanja/store', [BelanjaController::class, 'store'])->name('belanja.store');
Route::delete('/belanja/{id}', [BelanjaController::class, 'destroy'])->name('belanja.destroy');

//crud tabel bedak
Route::get('/bedak', [BedakController::class, 'index']);
Route::get('/bedak/cari', [BedakController::class, 'cari']);
Route::get('/bedak/tambah', [BedakController::class, 'tambah']);
Route::post('/bedak/store', [BedakController::class, 'store']);
Route::get('/bedak/edit/{id}', [BedakController::class, 'edit']);
Route::post('/bedak/update', [BedakController::class, 'update']);
Route::get('/bedak/hapus/{id}', [BedakController::class, 'hapus']);

//crud tabel nilaikuliah
Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
Route::get('/nilai/create', [NilaiController::class, 'create'])->name('nilai.create');
Route::post('/nilai/store', [NilaiController::class, 'store'])->name('nilai.store');

//crud tabel nilai_peserta
Route::get('/eas', [PesertaController::class, 'index'])->name('peserta.index');
Route::get('/eas/create', [PesertaController::class, 'create'])->name('peserta.create');
Route::post('/eas/store', [PesertaController::class, 'store'])->name('peserta.store');
