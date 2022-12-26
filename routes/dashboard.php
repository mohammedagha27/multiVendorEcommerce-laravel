<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;

Route::prefix('dashboard')->name('dashboard.')->controller(DashboardController::class)->middleware(['auth'])->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/v2', 'indexV2')->name('index2');
    Route::get('/v3', 'indexV3')->name('index3');
});
