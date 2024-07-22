<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ImunisasiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/daftar', [PasienController::class, 'store']);
Route::post('/imunisasi',[ImunisasiController::class,'store']);
Route::get('/imunisasi',[ImunisasiController::class,'index']);
Route::get('/imunisasi/{id}',[ImunisasiController::class,'showid']);
Route::delete('/imunisasi/{id}',[ImunisasiController::class,'destroy']);
Route::put('/imunisasi/{id}',[ImunisasiController::class,'update']);
Route::get('/search',[ImunisasiController::class,'search']);
