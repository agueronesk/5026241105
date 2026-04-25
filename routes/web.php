<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('agueronesk-github-io.pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('index', function () {
	return view('agueronesk-github-io.index');
});

Route::get('tugaspert5', function () {
	return view('agueronesk-github-io.tugaspertemuan5');
});

Route::get('fe-template', function () {
	return view('FE5026241105.template');
});

Route::get('fe-responsive', function () {
	return view('FE5026241105.responsive');
});

Route::get('fe-news1', function () {
	return view('FE5026241105.news1');
});

Route::get('fe-news', function () {
	return view('FE5026241105.news');
});

Route::get('fe-intro', function () {
	return view('FE5026241105.intro');
});

Route::get('fe-contoh', function () {
	return view('FE5026241105.contoh');
});

Route::get('fe-5026241105', function () {
	return view('FE5026241105.5026241105');
});
