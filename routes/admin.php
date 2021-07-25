<?php

use App\Http\Controllers\Admin\BagianController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FamiliController;
use App\Http\Controllers\Admin\LokasiController;
use App\Http\Controllers\Admin\TumbuhanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class,'index'])->name('admin');

Route::resource('famili', FamiliController::class);
Route::resource('bagian', BagianController::class);
Route::resource('tumbuhan', TumbuhanController::class);
Route::resource('lokasi', LokasiController::class);
