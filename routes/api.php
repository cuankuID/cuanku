<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ChMessageController;
use App\Http\Controllers\VerifyEmailController;
use App\Http\Controllers\InfoConsultantController;
use App\Http\Controllers\ConsultantOfficeController;
use App\Http\Controllers\MeetConsultantOrderController;
use App\Http\Controllers\MeetConsultantScheduleController;


Route::group(['middleware' => 'api'], function ($router) {
    Route::prefix('auth')->group(function () {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [AuthController::class, 'register']);
        Route::post('change', [AuthController::class, 'change']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    });

    Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify');

    Route::post('/email/verify/resend', function (Request $request) {
        auth()->user()->sendEmailVerificationNotification();
        return response()->json(['message' => 'Verification link sent!']);
    })->middleware(['auth:api', 'throttle:6,1'])->name('verification.send');
    
    Route::apiResource('article', PostController::class);
    Route::apiResource('office', ConsultantOfficeController::class);
    Route::apiResource('consultant', InfoConsultantController::class);
    Route::apiResource('consultant-schedule', MeetConsultantScheduleController::class)->except(['index', 'show']);
    Route::get('consultant-schedule/{id}', [MeetConsultantScheduleController::class, 'index']);
    Route::apiResource('consultant-order', MeetConsultantOrderController::class);
    Route::put('consultant-order/{id}', [MeetConsultantOrderController::class, 'paid']);
    Route::apiResource('chat', ChMessageController::class);
});