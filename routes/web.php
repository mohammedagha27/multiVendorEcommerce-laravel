<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::prefix('dashboard')->name('dashboard.')->controller(AdminController::class)->middleware(['auth'])->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/v2', 'indexV2')->name('index2');
    Route::get('/v3', 'indexV3')->name('index3');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
