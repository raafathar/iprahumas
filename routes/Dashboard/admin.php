<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Golongan\GolonganController;
use App\Http\Controllers\Admin\Instansi\InstansiController;
use App\Http\Controllers\Admin\Jabatan\JabatanController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "admin", "as" => "admin."], function () {
    Route::group(["prefix" => "dashboard", "as" => "dashboard."], function () {

        Route::get("", [DashboardController::class, "index"])->name("index");

        Route::resource('instansi', InstansiController::class);
        Route::resource('jabatan', JabatanController::class);
        Route::resource('golongan', GolonganController::class);
    });
});
