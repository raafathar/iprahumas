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

Route::get('/sejarah', function () {
    return view('frontend.landingpage.profil.sejarah');
});