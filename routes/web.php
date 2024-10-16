<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.landingpage.index');
});

Route::get('/berita', function () {
    return view('frontend.landingpage.berita');
});

Route::prefix('profil')->group(function () {
    Route::get('/sejarah-singkat', function () {
        return view('frontend.landingpage.profil.sejarah');
    });
    Route::get('/visimisi', function () {
        return view('frontend.landingpage.profil.visimisi');
    });
    Route::get('/struktur-organisasi', function () {
        return view('frontend.landingpage.profil.struktur_organisasi');
    });
    Route::get('/manfaat-anggota', function () {
        return view('frontend.landingpage.profil.manfaat_anggota');
    });
});