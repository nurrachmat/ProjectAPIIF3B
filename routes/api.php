<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/fakultas', [FakultasController::class, 'index']);
Route::get('/fakultas/{fakutlas}', [FakultasController::class, 'show']);
Route::get('/prodi', [ProdiController::class, 'index']);
Route::post('/fakultas', [FakultasController::class, 'store']);
Route::post('/prodi', [ProdiController::class, 'store']);
Route::get('/prodi/{prodi}', [ProdiController::class, 'show']);
Route::patch('/fakultas/{fakultas}', [FakultasController::class, 'update']);
Route::patch('/prodi/{prodi}', [ProdiController::class, 'update']);
Route::delete('/fakultas/{fakultas}', [FakultasController::class, 'destroy']);
Route::delete('/prodi/{prodi}', [ProdiController::class, 'destroy']);

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [RegisterController::class, 'login']);
