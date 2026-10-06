<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonserController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\MerchandiseController;


// =========================
// HOME
// =========================
Route::get('/', function () {
    return view('home');
})->name('home');


// =========================
// DATA KONSER
// =========================
Route::get('/konser', [KonserController::class, 'index'])
    ->name('konser.index');

Route::get('/konser/create', [KonserController::class, 'create'])
    ->name('konser.create');

Route::post('/konser', [KonserController::class, 'store'])
    ->name('konser.store');

Route::get('/konser/{id}', [KonserController::class, 'show'])
    ->name('konser.show');

Route::get('/konser/{id}/edit', [KonserController::class, 'edit'])
    ->name('konser.edit');

Route::put('/konser/{id}', [KonserController::class, 'update'])
    ->name('konser.update');

Route::delete('/konser/{id}', [KonserController::class, 'destroy'])
    ->name('konser.destroy');


// =========================
// DATA TIKET
// =========================
Route::get('/tiket', [TiketController::class, 'index'])
    ->name('tiket.index');

Route::get('/tiket/create', [TiketController::class, 'create'])
    ->name('tiket.create');

Route::post('/tiket', [TiketController::class, 'store'])
    ->name('tiket.store');

Route::get('/tiket/{id}', [TiketController::class, 'show'])
    ->name('tiket.show');

Route::get('/tiket/{id}/edit', [TiketController::class, 'edit'])
    ->name('tiket.edit');

Route::put('/tiket/{id}', [TiketController::class, 'update'])
    ->name('tiket.update');

Route::delete('/tiket/{id}', [TiketController::class, 'destroy'])
    ->name('tiket.destroy');


// =========================
// DATA PEMBELI
// =========================
Route::resource('pembeli', PembeliController::class);


// =========================
// DATA MERCHANDISE
// =========================
Route::get('/merchandise', [MerchandiseController::class, 'index'])
    ->name('merchandise.index');

Route::get('/merchandise/create', [MerchandiseController::class, 'create'])
    ->name('merchandise.create');

Route::post('/merchandise', [MerchandiseController::class, 'store'])
    ->name('merchandise.store');

Route::get('/merchandise/{id}', [MerchandiseController::class, 'show'])
    ->name('merchandise.show');

Route::get('/merchandise/{id}/edit', [MerchandiseController::class, 'edit'])
    ->name('merchandise.edit');

Route::put('/merchandise/{id}', [MerchandiseController::class, 'update'])
    ->name('merchandise.update');

Route::delete('/merchandise/{id}', [MerchandiseController::class, 'destroy'])
    ->name('merchandise.destroy');