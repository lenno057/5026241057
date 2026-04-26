<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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

Route::get('biodata', [DosenController::class, 'index']);
