<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sendController;


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/send' , [sendController::class,'analiz']);
Route::get('/all' , [sendController::class,'all']);
