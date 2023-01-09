<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\QuotesControllerAPI;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//route for middleware for authenticated user
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/quotes', QuotesControllerAPI::class);
    Route::post('/logout', [ApiAuthController::class, 'logout']);
});

Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);
