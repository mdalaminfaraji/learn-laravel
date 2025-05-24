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
Route::controller(library::class)->group(function () {
    Route::get('/library', 'index')->name('library.index');
    Route::get('/library/{id}', 'show')->name('library.show');
    Route::put('/library/{id}', 'update')->name('library.update');
    Route::delete('/library/{id}', 'destroy')->name('library.destroy');
    Route::post('/library/store', 'store')->name('library.store');
    Route::get('/addNewBook', 'create')->name('library.create');
    Route::get('/updateLibraryBook/{id}', 'edit')->name('library.edit');
});