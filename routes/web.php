<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;


Route::middleware('guest')->group(function () {
    Route::get('/', [GuestController::class, 'index'])->name('guest.index');
    Route::get('/produk', [GuestController::class, 'product'])->name('guest.product');
    Route::get('/tentang-kami', [GuestController::class, 'tentangKami'])->name('guest.tentangKami');

    Route::get('/login', [AuthController::class, 'login'])->name('guest.login');
    Route::post('/login', [AuthController::class, 'auth'])->name('guest.auth');
});

Route::middleware('auth')->group(function () {
    Route::get('app', [AdminController::class, 'app'])->name('admin.app');
    Route::get('stock/create', [AdminController::class, 'createStock'])->name('admin.stock.create');
    Route::delete('stock/{bread}/delete', [AdminController::class, 'deleteStock'])->name('admin.stock.delete');
    Route::patch('stock/{bread}/updated', [AdminController::class, 'stockUpdated'])->name('admin.stock.updated');
});
