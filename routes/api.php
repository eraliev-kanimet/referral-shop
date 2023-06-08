<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('index', [SiteController::class, 'index'])->name('index');

Route::post('oauth/register', [AuthController::class, 'register'])->name('register');
Route::post('oauth/login', [AuthController::class, 'login'])->name('login');

Route::resource('products', ProductController::class)->only(['index', 'show']);
