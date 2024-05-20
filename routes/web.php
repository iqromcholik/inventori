<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderBarangController;
use App\Http\Controllers\OrderDetailController;
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

        Route::get('/menu/list-user/edit/{user}', [UserController::class, 'edit'])->name('edit');
        Route::put('/menu/list-user/{user}/update', [UserController::class, 'update'])->name('update');
        Route::put('/menu/list-user/{user}/update-password', [UserController::class, 'updatePassword'])->name('updatePassword');
        Route::delete('/menu/list-user/{user}/destroy', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::controller(SupplierController::class)->name('supplier.')->group(function () {
        Route::get('/menu/list-supplier', [SupplierController::class, 'index'])->name('index');
        Route::get('/menu/list-supplier/create', [SupplierController::class, 'create'])->name('create');
        Route::post('/menu/list-supplier/store', [SupplierController::class, 'store'])->name('store');

        Route::get('/menu/list-supplier/{supplier}/edit', [SupplierController::class, 'edit'])->name('edit');
        Route::put('/menu/list-supplier/{supplier}/update', [SupplierController::class, 'update'])->name('update');
        Route::delete('/menu/list-supplier/{supplier}/destroy', [SupplierController::class, 'destroy'])->name('destroy');
    });

    Route::controller(BarangController::class)->name('barang.')->group(function () {
        Route::get('/menu/list-barang', [BarangController::class, 'index'])->name('index');
        Route::get('/menu/list-barang/create', [BarangController::class, 'create'])->name('create');
        Route::post('/menu/list-barang/store', [BarangController::class, 'store'])->name('store');

        Route::get('/menu/list-barang/{barang}/edit', [BarangController::class, 'edit'])->name('edit');
        Route::put('/menu/list-barang/{barang}/update', [BarangController::class, 'update'])->name('update');
        Route::delete('/menu/list-barang/{barang}/destroy', [BarangController::class, 'destroy'])->name('destroy');
    });

    Route::controller(PenerimaanBarangController::class)->name('penerimaan.')->group(function () {
        Route::get('/menu/penerimaan-barang', [PenerimaanBarangController::class, 'index'])->name('index');
        Route::get('/menu/penerimaan-barang/create', [PenerimaanBarangController::class, 'create'])->name('create');
        Route::post('/menu/penerimaan-barang/store', [PenerimaanBarangController::class, 'store'])->name('store');

        Route::get('/menu/penerimaan-barang/{penerimaanBarang}/edit', [PenerimaanBarangController::class, 'edit'])->name('edit');
        Route::put('/menu/penerimaan-barang/{penerimaanBarang}/update', [PenerimaanBarangController::class, 'update'])->name('update');
        Route::delete('/menu/penerimaan-barang/{penerimaanBarang}/destroy', [PenerimaanBarangController::class, 'destroy'])->name('destroy');
    });

    Route::controller(PengeluaranBarangController::class)->name('pengeluaran.')->group(function () {
        Route::get('/menu/pengeluaran-barang', [PengeluaranBarangController::class, 'index'])->name('index');
        Route::get('/menu/pengeluaran-barang/create', [PengeluaranBarangController::class, 'create'])->name('create');
        Route::post('/menu/pengeluaran-barang/store', [PengeluaranBarangController::class, 'store'])->name('store');

        Route::get('/menu/pengeluaran-barang/{pengeluaranBarang}/edit', [PengeluaranBarangController::class, 'edit'])->name('edit');
        Route::put('/menu/pengeluaran-barang/{pengeluaranBarang}/update', [PengeluaranBarangController::class, 'update'])->name('update');
        Route::delete('/menu/pengeluaran-barang/{pengeluaranBarang}/destroy', [PengeluaranBarangController::class, 'destroy'])->name('destroy');
    });

    Route::controller(OrderBarangController::class)->name('order.barang.')->group(function () {
        Route::get('/menu/order-barang', [OrderBarangController::class, 'index'])->name('index');
        Route::get('/menu/order-barang/create', [OrderBarangController::class, 'create'])->name('create');
        Route::post('/menu/order-barang/store', [OrderBarangController::class, 'store'])->name('store');

        Route::get('/menu/order-barang/{orderBarang}/edit', [OrderBarangController::class, 'edit'])->name('edit');
        Route::put('/menu/order-barang/{orderBarang}/update', [OrderBarangController::class, 'update'])->name('update');
        Route::delete('/menu/order-barang/{orderBarang}/destroy', [OrderBarangController::class, 'destroy'])->name('destroy');
    });

    Route::controller(OrderDetailController::class)->name('order.detail.')->group(function () {
        Route::get('/menu/order-detail', [OrderDetailController::class, 'index'])->name('index');
        Route::get('/menu/order-detail/create', [OrderDetailController::class, 'create'])->name('create');
        Route::post('/menu/order-detail/store', [OrderDetailController::class, 'store'])->name('store');

        Route::get('/menu/order-detail/{orderDetail}/edit', [OrderDetailController::class, 'edit'])->name('edit');
        Route::put('/menu/order-detail/{orderDetail}/update', [OrderDetailController::class, 'update'])->name('update');
        Route::delete('/menu/order-detail/{orderDetail}/destroy', [OrderDetailController::class, 'destroy'])->name('destroy');
    });

});
