<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardConsultationController;
use App\Http\Controllers\DashboardOrderController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardSearchController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardTeamController;
use App\Http\Controllers\EmailVerificationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);

// Email Verification Routes
Route::controller(EmailVerificationController::class)->group(function () {
    Route::get('/email/verify', 'index')->middleware('auth')->name('verification.notice');
    Route::post('/email/verification-notification', 'resend')->middleware(['auth', 'throttle:6,1'])->name('verification.resend');
    Route::get('/email/verify/{id}/{hash}', 'verify')->middleware(['auth', 'signed'])->name('verification.verify');
});

// Home Controller
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});

// Post Route
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// Login Route
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Register Route
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard Route
Route::controller(DashboardController::class)->middleware(['auth', 'verified'])->group(function (){
    Route::get('/dashboard', 'index');
});

// Dashboard Post Route
Route::resource('/dashboard/posts', DashboardPostController::class)->parameters([
    'posts' => 'post:slug'
])->middleware('admin');

// Dashboard Team Route
Route::resource('/dashboard/teams', DashboardTeamController::class)->middleware('admin');


// Dashboard User Route
Route::controller(DashboardUserController::class)->middleware('admin')->group(function () {
    Route::get('/dashboard/users', 'index');
    Route::put('/dashboard/users/{user:username}', 'update');
    Route::put('/dashboard/users/{user:username}/edit-role', 'updateRole');
});

// Dashboard Profile Route
Route::controller(DashboardProfileController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard/profile', 'index');
    Route::put('/dashboard/profile/{user:username}', 'update');
    Route::get('/dashboard/profile/reset-password/{user:username}', 'editPassword');
    Route::put('/dashboard/profile/reset-password/{user:username}', 'updatePassword');
});

// Dashboard Consultation Route
Route::controller(DashboardConsultationController::class)->middleware(['user', 'verified'])->group(function () {
    Route::get('/dashboard/consultation', 'index');
    Route::get('/dashboard/consultation/create', 'create');
    Route::get('/dashboard/consultation/{orderConsultation:no_order}/edit', 'edit');
    Route::put('/dashboard/consultation/{orderConsultation:no_order}', 'update');
    Route::post('/dashboard/consultation', 'store');
    Route::delete('/dashboard/consultation/{orderConsultation:no_order}', 'destroy');
    Route::delete('/dashboard/consultation/done/{orderConsultation:no_order}', 'done');
});

Route::controller(DashboardOrderController::class)->middleware(['consultant', 'verified'])->group(function () {
    Route::get('/dashboard/order', 'index');
    Route::put('/dashboard/order/{orderConsultation:no_order}', 'getOrder');
    Route::get('/dashboard/active-order', 'activeOrder');
    Route::put('/dashboard/active-order/{orderConsultation:no_order}', 'finishOrder');
    Route::delete('/dashboard/active-order/{orderConsultation:no_order}', 'deleteOrder');
});

Route::controller(DashboardSearchController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard/search/json', 'jsonData');
    Route::get('/dashboard/search', 'index');
});
