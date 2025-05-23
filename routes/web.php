<?php

use App\Http\Controllers\library;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UserController;
Route::get('/onboard', [UserController::class, 'create'])->name('onboard');
Route::post('/onboard', [UserController::class, 'store']);
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/library', [library::class, 'index']);
