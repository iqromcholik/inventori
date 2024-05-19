<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('pages.dashboard');
    });

    Route::controller(UserController::class)->name('user.')->group(function () {
        Route::get('/menu/list-user', [UserController::class, 'index'])->name('index');
        Route::get('/menu/list-user/create', [UserController::class, 'create'])->name('create');
        Route::post('/menu/list-user/store', [UserController::class, 'store'])->name('store');
    });

    Route::controller(SupplierController::class)->name('supplier.')->group(function () {
        Route::get('/menu/list-supplier', [SupplierController::class, 'index'])->name('index');
        Route::get('/menu/list-supplier/create', [SupplierController::class, 'create'])->name('create');
        Route::post('/menu/list-supplier/store', [SupplierController::class, 'store'])->name('store');
    });

    Route::controller(BarangController::class)->name('barang.')->group(function () {
        Route::get('/menu/list-barang', [BarangController::class, 'index'])->name('index');
        Route::get('/menu/list-barang/create', [BarangController::class, 'create'])->name('create');
        Route::post('/menu/list-barang/store', [BarangController::class, 'store'])->name('store');
    });

});
