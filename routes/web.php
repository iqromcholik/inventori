<?php

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
});
