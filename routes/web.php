<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;


Route::get('/', [GuestController::class, 'index'])->name('guest.index');
Route::get('/produk', [GuestController::class, 'product'])->name('guest.product');
Route::get('/tentang-kami', [GuestController::class, 'tentangKami'])->name('guest.tentangKami');

Route::get('/login', [AuthController::class, 'login'])->name('guest.login');
Route::post('/login', [AuthController::class, 'auth'])->name('guest.auth');

Route::middleware('auth')->group(function () {
    Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('app', [AdminController::class, 'app'])->name('admin.app');


    Route::get('bread/create', [AdminController::class, 'createBread'])->name('admin.bread.create');
    Route::post('bread/store', [AdminController::class, 'storeBread'])->name('admin.bread.store');
    Route::delete('stock/{bread}/delete', [AdminController::class, 'deleteBread'])->name('admin.bread.delete');
    Route::get('stock/{bread}/detail', [AdminController::class, 'detailBread'])->name('admin.bread.detail');
    Route::patch('stock/{bread}/updated', [AdminController::class, 'updatedBread'])->name('admin.bread.updated');

    Route::post('stock/{bread}/created', [AdminController::class, 'stockCreated'])
        ->name('admin.stock.created');
    Route::patch('stock/{stock}/update', [AdminController::class, 'stockUpdated'])
        ->name('admin.stock.updated');
    Route::post('stock/{stock}/delete', [AdminController::class, 'stockDeleted'])
        ->name('admin.stock.delete');
});
