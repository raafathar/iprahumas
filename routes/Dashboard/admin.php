<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrafikAnggotaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Jabatan\JabatanController;
use App\Http\Controllers\Admin\Golongan\GolonganController;
use App\Http\Controllers\Admin\Instansi\InstansiController;
use App\Http\Controllers\Admin\Anggota\DataAnggotaController;
use App\Http\Controllers\Admin\Pendaftaran\PendaftaranController;

Route::group(["prefix" => "admin", "as" => "admin."], function () {
    Route::group(["prefix" => "dashboard", "as" => "dashboard."], function () {

        Route::get("", [DashboardController::class, "index"])->name("index");

        Route::get("pendaftaran/{status}", [PendaftaranController::class, "index"])->name("pendaftaran.index");
        Route::resource('pendaftaran', PendaftaranController::class)->except(['index']);
        Route::resource('data-anggota', DataAnggotaController::class);
        Route::resource('grafik-anggota', GrafikAnggotaController::class);

        Route::resource('instansi', InstansiController::class);
        Route::resource('jabatan', JabatanController::class);
        Route::resource('golongan', GolonganController::class);
    });
});
