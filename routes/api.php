<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\librosController;
use App\Http\Controllers\Api\UserController;


Route::middleware('auth:api')->group(function () {
    Route::resource('user', UserController::class);
    Route::resource('libros', librosController::class );
});

Route::post('login', [UserController::class,'login']);
Route::post('register',[UserController::class,'register']);





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



