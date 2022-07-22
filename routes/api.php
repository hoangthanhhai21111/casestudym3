<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
route::get('user',[UserController::class,'index']);
route::get('user/{id}',[UserController::class,'show']);
route::post('register',[UserController::class,'add']);
route::post('login',[UserController::class,'loginProcessing']);
