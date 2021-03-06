<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/items', [\App\Http\Controllers\ItemController::class, 'getAll']);
Route::post('/bid', [\App\Http\Controllers\BidController::class, 'placeBid']);

Route::post('/bid/enable-auto-bid', [\App\Http\Controllers\BidController::class, 'changeAutoBidStatus']);