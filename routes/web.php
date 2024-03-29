<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/users', UserController::class);
Route::resource('products', ProductController::class);
Route::get('/transaction', [TransactionController::class, 'index'])->name('transactions.index');
Route::post('/transaction', [TransactionController::class, 'create'])->name('transactions.create');
