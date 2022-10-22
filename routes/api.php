<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\KategoriController;


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
Route::resource('product',ProductController::class);

Route::prefix('kategori')->group(function () {
    Route::get('/jaket',[KategoriController::class,'get_jaket']);
    Route::get('/baju',[KategoriController::class,'get_baju']);
    Route::get('/celana',[KategoriController::class,'get_celana']);
});