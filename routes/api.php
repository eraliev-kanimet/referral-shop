<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('index', [SiteController::class, 'index'])->name('api.index');

Route::get('oauth/register', [AuthController::class, 'register'])->name('api.register');
Route::get('oauth/login', [AuthController::class, 'login'])->name('api.login');
