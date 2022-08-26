<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\AdminConsultantController;
use App\Http\Controllers\Admin\AdminOfficeConsultantController;
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
use App\Http\Controllers\DashboardActivityController;
use App\Http\Controllers\DashboardTeamController;
use App\Http\Controllers\DashboardForumController;

// Order Activity
use App\Http\Livewire\Activity\IndexActivity;
// Master Office
use App\Http\Livewire\Master\ConsultantOffice\Create;
use App\Http\Livewire\Master\IndexConsultantOffice;
// Master Consultant
use App\Http\Livewire\Master\Consultant\IndexConsultant;
use App\Http\Livewire\Master\Consultant\CreateConsultant;
use App\Http\Livewire\Master\Consultant\CreateMeetSchedule;
// Search Office
use App\Http\Livewire\SearchOffice\IndexSearchOffice;
use App\Http\Livewire\SearchOffice\ShowSearchOffice;
// Meet Consultant
use App\Http\Livewire\MeetConsultant\HomeMeetConsultant;
use App\Http\Livewire\MeetConsultant\IndexMeetConsultant;
use App\Http\Livewire\MeetConsultant\ShowMeetConsultant;
// Live Consultation
use App\Http\Livewire\LiveConsultation\HomeLiveConsultation;
use App\Http\Livewire\LiveConsultation\IndexLiveConsultation;
use App\Http\Livewire\LiveConsultation\ModalInfoConsultant;
use App\Http\Livewire\LiveConsultation\ShowLiveConsultation;
// Order
use App\Http\Livewire\Order\IndexOrder;
// Create Order
use App\Http\Livewire\CreateSchedule\CreateMeetConsultationSchedule;
use App\Http\Livewire\CreateSchedule\CreateLiveConsultationSchedule;
// Live Chat
use App\Http\Livewire\LiveChat\Main;
// Ask Consultant
use App\Http\Livewire\AskConsultant\IndexAskConsultant;
// Answer Question
use App\Http\Livewire\AnswerQuestion\IndexAnswerQuestion;
use App\Http\Livewire\AnswerQuestion\ShowAnswerQuestion;
// Message Event
use App\Events\Message; 

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
Route::controller(VerificationController::class)->group(function () {
    Route::get('/email/verify', 'index')->middleware('auth')->name('verification.notice');
    Route::post('/email/verification-notification', 'resend')->middleware(['auth', 'throttle:6,1'])->name('verification.resend');
    Route::get('/email/verify/{id}/{hash}', 'verify')->middleware(['auth', 'signed'])->name('verification.verify');
});

// Forgot Password Controller
Route::controller(ForgotPasswordController::class)->group(function () {
    Route::get('/forgot-password', 'index')->middleware('guest')->name('password.request');
    Route::post('/forgot-password', 'send')->middleware('guest')->name('password.email');
});

// Reset Password Controller
Route::controller(ResetPasswordController::class)->group(function () {
    Route::get('/reset-password/{token}', 'index')->middleware('guest')->name('password.reset');
    Route::post('/reset-password', 'reset')->middleware('guest')->name('password.update');
});

// Home Controller
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});

// Post Route
Route::get('/posts', [PostController::class, 'index'])->name('post.index');
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
    Route::get('/dashboard', 'index')->name('dashboard');
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

// Dashboard Activity Controller
Route::get('/dashboard/activity', IndexActivity::class)->middleware(['user', 'verified'])->name('index.activity');
Route::get('/dashboard/activity/invoice-meet-consultation/{meetConsultationOrder:no_order}', [IndexActivity::class, 'invoice'])->middleware(['user', 'verified'])->name('invoice.activity');

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

// Route::controller(DashboardOrderController::class)->middleware(['consultant', 'verified'])->group(function () {
//     Route::get('/dashboard/order', 'index');
//     Route::put('/dashboard/order/{orderConsultation:no_order}', 'getOrder');
//     Route::get('/dashboard/active-order', 'activeOrder');
//     Route::put('/dashboard/active-order/{orderConsultation:no_order}', 'finishOrder');
//     Route::delete('/dashboard/active-order/{orderConsultation:no_order}', 'deleteOrder');
// });

Route::controller(DashboardSearchController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard/search/json', 'jsonData');
    Route::get('/dashboard/search', 'index');
});

// Admin Office Consultant Controller
Route::get('/dashboard/master/consultant-office', IndexCOnsultantOffice::class)->middleware(['admin', 'verified'])->name('master.index.office-consultant');

Route::controller(AdminOfficeConsultantController::class)->middleware(['admin', 'verified'])->group(function () {
    Route::get('/dashboard/master/consultant-office/create', 'create')->name('master.create.office-consultant');
    Route::get('/dashboard/master/office-consultant/edit/{consultantOffice:slug}', 'edit')->name('master.edit.office-consultant');
    Route::put('/dashboard/master/office-consultant/update/{consultantOffice:slug}', 'update')->name('master.update.office-consultant');
});

// Search Consultant Office Route
Route::get('/dashboard/search-office', IndexSearchOffice::class)->middleware(['user', 'verified'])->name('index.search-office');
Route::get('/dashboard/search-office/{consultantOffice:slug}', ShowSearchOffice::class)->middleware(['user', 'verified'])->name('show.search-office');

// Meet Consultant Route
Route::get('/dashboard/meet-consultant', HomeMeetConsultant::class)->middleware(['user', 'verified'])->name('home.meet-consultant');
Route::get('/dashboard/meet-consultant/search', IndexMeetConsultant::class)->middleware(['user', 'verified'])->name('index.meet-consultant');
Route::get('/dashboard/meet-consultant/search/{infoConsultant:slug}', ShowMeetConsultant::class)->middleware(['user', 'verified'])->name('show.meet-consultant');

// Live Konsultasi Route
Route::get('/dashboard/live-consultation', HomeLiveConsultation::class)->middleware(['user', 'verified'])->name('home.live-consultation');
Route::get('/dashboard/live-consultation/search', IndexLiveConsultation::class)->middleware(['user', 'verified'])->name('index.live-consultation');
Route::get('/dashboard/live-consultation/{infoConsultant:slug}', ShowLiveConsultation::class)->middleware(['user', 'verified'])->name('show.live-consultation');

// Live Chat Route
Route::get('/dashboard/live-consultation/chat', Main::class)->middleware(['user', 'verified'])->name('chat.live-consultation');
Route::post('/dashboard/live-consultation/chat', function(Request $request){
    event(
        new Message(
            $request->input('name'), 
            $request->input('message')
            )
    );
});

// Ask Consultant Route
Route::get('/dashboard/ask-consultant', IndexAskConsultant::class)->middleware(['user', 'verified'])->name('index.ask-consultant');

// Answer Question
Route::get('/dashboard/answer-question', IndexAnswerQuestion::class)->middleware(['consultant', 'verified'])->name('index.answer-question');
Route::get('/dashboard/answer-question/reply/{askConsultant}', ShowAnswerQuestion::class)->middleware(['consultant', 'verified'])->name('show.answer-question');

// Order Route
Route::get('/dashboard/order', IndexOrder::class)->middleware(['consultant', 'verified'])->name('index.order');

// Create Schedule Route
Route::get('/dashboard/create-meet-consultation-schedule', CreateMeetConsultationSchedule::class)->middleware(['consultant', 'verified'])->name('create.meet-consultation-schedule');
Route::get('/dashboard/create-live-consultation-schedule', CreateLiveConsultationSchedule::class)->middleware(['consultant', 'verified'])->name('create.live-consultation-schedule');

// Master Consultant Route
Route::get('/dashboard/master/consultant', IndexConsultant::class)->middleware(['admin', 'verified'])->name('master.index.consultant');
Route::get('/dashboard/master/consultant/create/{user:username}', CreateConsultant::class)->middleware(['admin', 'verified'])->name('master.create.consultant');
Route::get('/dashboard/master/consultant/create-meet-schedule/{infoConsultant:slug}', CreateMeetSchedule::class)->middleware(['admin', 'verified'])->name('master.create-meet-schedule.consultant');
