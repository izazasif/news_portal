<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsItemController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/latest_three_item',[NewsItemController::class,'showLatestPosts']);
Route::get('/next_five_Posts',[NewsItemController::class,'nextLargePost']);
Route::get('/next_four_side',[NewsItemController::class,'nextFourside']);
Route::get('/next_large_one',[NewsItemController::class,'nextOnelarge']);
Route::get('/next_category_three',[NewsItemController::class,'cateThreecontent']);
Route::get('/lastFour',[NewsItemController::class,'lastFour']);
Route::get('/details/{slug}',[NewsItemController::class,'details']);