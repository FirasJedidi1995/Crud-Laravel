<?php

use App\Http\Controllers\ProductController;
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

//get all products

Route::get('products',[ProductController::class,'getProduct']);

Route::get('product/{id}',[ProductController::class,'getProductById']);
Route::post('addProduct',[ProductController::class,'addProduct']);
Route::put('updateProduct/{id}',[ProductController::class,'updateProduct']);
Route::delete('deleteProduct/{id}',[ProductController::class,'deleteProduct']);