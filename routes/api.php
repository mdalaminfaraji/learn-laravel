<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// API route for onboarding
Route::post('/onboard', [UserController::class, 'store']);

// Get all users
Route::get('/users', [UserController::class, 'apiIndex']);
// Get single user
Route::get('/users/{id}', [UserController::class, 'apiShow']);
// Update user
Route::put('/users/{id}', [UserController::class, 'apiUpdate']);
// Delete user
Route::delete('/users/{id}', [UserController::class, 'apiDestroy']);
