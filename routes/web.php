<?php

use App\Http\Controllers\Admin\Instansi\InstansiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . "\Auth\auth.php";
require __DIR__ . "\Dashboard\admin.php";

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/berita/1', function () {
    return view('frontend.landingpage.beritadetail');
});


Route::get('/pelatihan', function () {
    return view('frontend.landingpage.pelatihan');
});

Route::get('/pelatihan/1', function () {
    return view('frontend.landingpage.pelatihandetail');
});

Route::get('keangotaan/syaratkeanggotaan', function () {
    return view('frontend.landingpage.keangotaan.syaratanggota');
});

Route::get('keangotaan/panduanpendaftaran', function () {
    return view('frontend.landingpage.keangotaan.panduanpendaftaran');
});

Route::prefix('profil')->group(function () {
    Route::get('/sejarah-singkat', function () {
        return view('frontend.landingpage.profil.sejarah');
    });
    Route::get('/visimisi', function () {
        return view('frontend.landingpage.profil.visimisi');
    });
    Route::get('/kode-etik', function () {
        return view('frontend.landingpage.profil.kode_etik');
    });
    Route::get('/struktur-organisasi', function () {
        return view('frontend.landingpage.profil.struktur_organisasi');
    });
    Route::get('/anggaran-dasar', function () {
        return view('frontend.landingpage.profil.anggaran_dasar');
    });
    Route::get('/manfaat-anggota', function () {
        return view('frontend.landingpage.profil.manfaat_anggota');
    });
});

Route::get('/contact', function () {
    return view('frontend.landingpage.contact');
});

Route::get('/test', function () {
    return view('auth.uiregister');
});
