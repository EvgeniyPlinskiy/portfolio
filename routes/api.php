<?php

use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/get_menu', [MenuController::class, 'get_menu']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
