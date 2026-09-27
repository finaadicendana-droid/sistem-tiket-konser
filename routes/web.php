<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonserController;
use App\Http\Controllers\TiketController;

Route::get('/', function () {
    return view('home');
});

Route::get('/konser', [KonserController::class, 'index']);
Route::get('/konser/create', [KonserController::class, 'create']);
Route::post('/konser', [KonserController::class, 'store']);

Route::get('/konser/{id}', [KonserController::class, 'show']);

Route::get('/konser/{id}/edit', [KonserController::class, 'edit']);
Route::put('/konser/{id}', [KonserController::class, 'update']);
Route::delete('/konser/{id}', [KonserController::class, 'destroy']);
Route::get('/tiket', [TiketController::class, 'index']);
Route::get('/tiket/create', [TiketController::class, 'create']);
Route::post('/tiket', [TiketController::class, 'store']);
Route::get('/tiket/{id}', [TiketController::class, 'show']);
Route::get('/tiket/{id}/edit', [TiketController::class, 'edit']);
Route::put('/tiket/{id}', [TiketController::class, 'update']);
Route::delete('/tiket/{id}', [TiketController::class, 'destroy']);