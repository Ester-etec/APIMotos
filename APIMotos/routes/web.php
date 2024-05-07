<?php

use App\Http\Controllers\MotoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

Route::get('/', function () {
    return 'APi de motos'.Response()->json([],Response::HTTP_NO_CONTENT);});
Route::get('/motos',[MotoController::class,'index']);
Route::post('/motoscadastra',[MotoController::class,'store']);
