<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\BuyerController;
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

//NORMAL ROUTES

//USER ROUTES
Route::get('/user', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);
Route::post('/login', [UserController::class, 'login']);

//BUYER ROUTES


// PROTECTED ROUTES
Route::middleware('auth:api')->group(function () {
    Route::get('/buyer', [BuyerController::class, 'index']);
});



