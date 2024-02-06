<?php

use Illuminate\Support\Facades\Route;
use App\HttP\Controllers\UserController;

Route::redirect('/', '/users');

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
