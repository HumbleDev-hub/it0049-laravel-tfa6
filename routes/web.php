<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);

Route::resource('customers', CustomerController::class);
Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);