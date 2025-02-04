<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Product\CategoryController;
use App\Http\Controllers\Product\ProductController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->get('/user', [AuthenticationController::class, 'getUser']);
Route::middleware('auth:sanctum')->post('change-password', [AuthenticationController::class, 'changePassword']);
Route::middleware('auth:sanctum')->post('logout', [AuthenticationController::class, 'logout']);
Route::post('login', [AuthenticationController::class, 'login']);
Route::post('register', [AuthenticationController::class, 'register']);

Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/{id}/products', [ProductController::class, 'index']);
Route::get('product', [ProductController::class, 'product']);
