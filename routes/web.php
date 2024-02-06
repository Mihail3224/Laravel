<?php

use App\Http\Controllers\PhoneController;
use Illuminate\Support\Facades\Route;
use App\HttP\Controllers\UserController;

Route::redirect('/', '/users');

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::controller(PhoneController::class)->group(function (){
    Route::get('phones', 'index');
    Route::get('phones/create', 'create');
    Route::post('phones', 'store');
    Route::get('phones/{phone}/edit','edit');
    Route::put('phones/{phone}/update','update');
    Route::delete('phones/delete', 'destroy');

});