<?php

use Illuminate\Support\Facades\Route;

Route::fallback(fn () => view('vue'));
