<?php

use App\Http\Controllers\candidateController;
use App\Http\Controllers\getViewController;
use App\Http\Controllers\viewCountController;
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


Route::get('candidate/{name}',[candidateController::class,'getCandidate'])->name('index');
Route::get('viewCount',[viewCountController::class,'viewCount'])->name('viewCount');
Route::get('addCount',[viewCountController::class,'addCount'])->name('addCount');
