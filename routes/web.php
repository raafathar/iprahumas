<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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

Route::get('/contact', function () {
    return view('frontend.landingpage.contact');
});
