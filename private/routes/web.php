<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/get', [UserController::class, 'index']);

Route::get('/onaylamak', [UserController::class, 'onaylamak'])->name('onaylamak');
Route::get('/sil', [UserController::class, 'sil'])->name('sil');
