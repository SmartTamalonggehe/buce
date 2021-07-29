<?php

use App\Http\Controllers\API\LokasiController;
use App\Http\Controllers\API\TumbuhanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tumbuhan', [TumbuhanController::class, 'index'])->name('apiTumbuhan');
Route::get('detailTumbuhan/{id}', [TumbuhanController::class, 'detail'])->name('apiDetailTumbuhan');
Route::get('lokasi', [LokasiController::class, 'index'])->name('apiLokasi');
Route::get('totalBagian', [LokasiController::class, 'totalBagian'])->name('apiTotalBagian');
