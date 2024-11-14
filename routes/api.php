<?php

use App\Http\Controllers\Api\Kabupaten\KabupatenController;
use App\Http\Controllers\Api\Kecamatan\KecamatanController;
use App\Http\Controllers\Api\Kelurahan\KelurahanController;
use App\Http\Controllers\Api\Provinsi\ProvinsiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("kelurahan/search", [KelurahanController::class, "search"]);
Route::get("kecamatan/search", [KecamatanController::class, "search"]);
Route::get("kabupaten/search", [KabupatenController::class, "search"]);
Route::get("provinsi/search", [ProvinsiController::class, "search"]);
