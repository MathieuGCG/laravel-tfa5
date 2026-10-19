<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

// Landing & About Routes
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Account Routes
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/users', [UserController::class, 'index'])->name('users.index');