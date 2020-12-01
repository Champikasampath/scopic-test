<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\ItemController::class, 'index']);

Route::get('/item/{id}', [\App\Http\Controllers\ItemController::class, 'displayItemDetailsPage']);

Route::get('/profile/settings', [\App\Http\Controllers\ProfileController::class, 'displaySettingsPage']);

Route::post('/profile/autobid/bid', [\App\Http\Controllers\ProfileController::class, 'configureAutoBid']);


