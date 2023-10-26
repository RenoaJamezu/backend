<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\LetterController;

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


Route::get('/carousel',[CarouselItemController::class, 'index']);
Route::get('/carousel/{id}',[CarouselItemController::class, 'show']);
Route::post('/carousel',[CarouselItemController::class, 'store']);
Route::put('/carousel/{id}',[CarouselItemController::class, 'update']);
Route::delete('/carousel/{id}',[CarouselItemController::class, 'destroy']);


Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user/', [UserController::class, 'store'])->name('user.store');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy']);

Route::get('/letter',[LetterController::class, 'index']);
Route::get('/letter/{id}',[LetterController::class, 'show']);
Route::post('/letter',[LetterController::class, 'store']);
Route::put('/letter/{id}',[LetterController::class, 'update']);
Route::delete('/letter/{id}',[LetterController::class, 'destroy']);
