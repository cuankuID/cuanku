<?php

use Illuminate\Http\Request;
use App\Models\InfoConsultant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ConsultantOfficeController;


Route::group(['middleware' => 'api'], function ($router) {
    Route::prefix('auth')->group(function () {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [AuthController::class, 'register']);
        Route::post('change', [AuthController::class, 'change']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']); 
    });
    
    Route::apiResource('article', ArticleController::class);
    Route::apiResource('office', ConsultantOfficeController::class);
    Route::apiResource('consultant', InfoConsultant::class);
});