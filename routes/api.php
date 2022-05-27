<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\UserController;
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
Route::post('/user/delete/{id}', [UserController::class, 'destroy']);

//BUYER ROUTES


// PROTECTED ROUTES
Route::middleware('auth:api')->group(function () {
    //USER ROUTES
    Route::get('/user/{id}', [UserController::class, 'show']);

    //BUYER ROUTES
    Route::get('/buyer', [BuyerController::class, 'index']);
    Route::post('/buyer', [BuyerController::class, 'store']);
    Route::get('/buyer/{id}', [BuyerController::class, 'show']);
    Route::post('/buyer/{id}', [BuyerController::class, 'update']);
    Route::post('/buyer/delete/{id}', [BuyerController::class, 'destroy']);

    //ADMIN ROUTES
    Route::get('/admin', [AdminController::class, 'index']);
    Route::post('/admin', [AdminController::class, 'store']);
    Route::get('/admin/{id}', [AdminController::class, 'show']);
    Route::post('/admin/{id}', [AdminController::class, 'update']);
    Route::post('/admin/delete/{id}', [AdminController::class, 'destroy']);
});



