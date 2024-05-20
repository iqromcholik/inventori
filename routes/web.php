<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenerimaanBarang;
use App\Http\Controllers\PenerimaanBarangController;
use App\Http\Controllers\PengeluaranBarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Models\PenerimaanBarang as ModelsPenerimaanBarang;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->name('dashboard.')->group(function () {
        Route::get('/home', [DashboardController::class, 'index'])->name('index');
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

    Route::controller(PenerimaanBarangController::class)->name('penerimaan.')->group(function () {
        Route::get('/menu/penerimaan-barang', [PenerimaanBarangController::class, 'index'])->name('index');
        Route::get('/menu/penerimaan-barang/create', [PenerimaanBarangController::class, 'create'])->name('create');
        Route::post('/menu/penerimaan-barang/store', [PenerimaanBarangController::class, 'store'])->name('store');
    });

    Route::controller(PengeluaranBarangController::class)->name('pengeluaran.')->group(function () {
        Route::get('/menu/pengeluaran-barang', [PengeluaranBarangController::class, 'index'])->name('index');
        Route::get('/menu/pengeluaran-barang/create', [PengeluaranBarangController::class, 'create'])->name('create');
        Route::post('/menu/pengeluaran-barang/store', [PengeluaranBarangController::class, 'store'])->name('store');
    });

});
