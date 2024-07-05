<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeautyProductController;

Route::get('/products', [BeautyProductController::class, 'index']);
