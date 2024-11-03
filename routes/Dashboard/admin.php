<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Instansi\InstansiController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "admin", "as" => "admin."], function () {
    Route::group(["prefix" => "dashboard", "as" => "dashboard."], function () {

        Route::get("", [DashboardController::class, "index"])->name("index");

        Route::controller(InstansiController::class)->group(function () {
            Route::resource('instansi', InstansiController::class);
        });
    });
});
