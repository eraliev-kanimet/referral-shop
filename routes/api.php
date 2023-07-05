<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SiteController;
use App\Http\Controllers\Api\SiteFormController;
use Illuminate\Support\Facades\Route;

Route::get('index', [SiteController::class, 'index'])->name('index');

Route::post('oauth/register', [AuthController::class, 'register'])->name('register');
Route::post('oauth/login', [AuthController::class, 'login'])->name('login');

Route::resource('categories', CategoryController::class)->only(['show']);
Route::resource('products', ProductController::class)->only(['index', 'show']);
Route::resource('articles', ArticleController::class)->only(['index', 'show']);

Route::get('form/subscribe', [SiteFormController::class, 'subscribe'])->name('subscribe');
Route::get('form/contact_us', [SiteFormController::class, 'contact_us'])->name('contact_us');
Route::get('form/callback', [SiteFormController::class, 'callback'])->name('callback');
