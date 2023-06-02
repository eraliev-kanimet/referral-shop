<?php

use App\Http\Controllers\Api\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('index', [SiteController::class, 'index'])->name('api.index');
