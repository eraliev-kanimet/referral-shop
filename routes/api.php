<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('index', [SiteController::class, 'index'])->name('api.index');

Route::post('oauth/register', [AuthController::class, 'register'])->name('api.register');
Route::post('oauth/login', [AuthController::class, 'login'])->name('api.login');
