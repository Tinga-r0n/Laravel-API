<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StudentController;

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

Route::post('/student',[StudentController::class ,'create']);
Route::get('/student',[StudentController::class ,'show']);
Route::get('/student/{id}', [StudentController::class ,'showbyid']);
Route::put('/studentupdate/{id}', [StudentController::class ,'updatebyid']);
Route::delete('/studentdelete/{id}', [StudentController::class,'deletebyid']);
