<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Chef_loginController;
use App\Http\Controllers\Chef_regController;
use App\Http\Controllers\Chef_profile;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\CustomerController;

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

// Chefs Table 
Route::post("login",[Chef_loginController::class,'store']);
Route::post("reg",[Chef_regController::class,'store']);
Route::post("profile",[Chef_profile::class,'store']);
Route::post("chef",[ChefController::class,'store']);
Route::post("customer",[CustomerController::class,'store']);

