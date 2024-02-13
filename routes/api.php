<?php

use App\Http\Controllers\BlogResourcesController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeBlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home/resources', HomeBlogController::class);
Route::get('/blog/resources', BlogResourcesController::class);
Route::get('contents', [ContentController::class,"index"]);
Route::get('contents/{content}', [ContentController::class,"show"]);
