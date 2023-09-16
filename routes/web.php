<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterotpController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FundrequestController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\Callcontroller;
use App\Http\Controllers\ResetpassController;
use App\Http\Controllers\WithdrawlrequestController;
use App\Http\Controllers\PaypaymentController;
use App\Http\Controllers\RewardController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('web.index');
})->name('home');

Route::get('/about', function(){
    return view('web.about');
})->name('about');


// RegisterotpController
Route::get('/register', [RegisterotpController::class, 'index'])->name('register');
Route::get('/refresh', [RegisterotpController::class, 'refresh'])->name('refresh');
Route::post('/request-otp', [RegisterotpController::class, 'requestOtp'])->name('request-otp');
Route::get('/refresh-otp', [RegisterotpController::class, 'refresh_password'])->name('refresh-otp');
Route::post('/request-pass-otp', [RegisterotpController::class, 'passwordOtp'])->name('request-pass-otp');


// UserController
Route::post('/register', [UserController::class, 'create'])->name('save-user');
Route::get('/view-user',[UserController::class, 'view_user'])->name('view-user')->middleware('isLoggedIn');
Route::get('/update-user/{id}',[UserController::class, 'edit'])->middleware('isLoggedIn');
Route::put('/update-user/{id}', [UserController::class, 'update'])->middleware('isLoggedIn');
Route::get('/team-level',[UserController::class, 'level_team'])->name('team-level')->middleware('isLoggedIn');
Route::get('/teammate/{level}',[UserController::class, 'level_person'])->name('teammate')->middleware('isLoggedIn');



// LoginController
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::match(['get', 'post'],'/loginuser',[LoginController::class,'loginuser'])->name('loginuser');
Route::get('/dashboard',[LoginController::class,'dashboard'])->name('dashboard')->middleware('isLoggedIn');
Route::get('/logout',[LoginController::class,'logout'])->name('logout')->middleware('isLoggedIn');

// ResetpassController
Route::get('/forgot-password',[ResetpassController::class, 'forgot_password'])->name('forgot-password');
Route::post('/save-password',[ResetpassController::class, 'reset_password'])->name('save-password');

// FundrequestController
Route::get('/add-fund-request', [FundrequestController::class, 'index'])->name('add-fund-request')->middleware('isLoggedIn');
Route::post('/save-fund-request', [FundrequestController::class, 'create'])->name('save-fund-request')->middleware('isLoggedIn');
Route::get('/view-fund-request', [FundrequestController::class, 'view'])->name('view-fund-request')->middleware('isLoggedIn');

// TopupController
Route::get('/add-topup/{id?}', [TopupController::class, 'index'])->name('add-topup')->middleware('isLoggedIn');
Route::post('/save-topup', [TopupController::class, 'create'])->name('save-topup')->middleware('isLoggedIn');
Route::get('/view-topup', [TopupController::class, 'view'])->name('view-topup')->middleware('isLoggedIn');

// Callcontroller
Route::get('/view-level-income',[Callcontroller::class,'view_level_income'])->name('view-level-income')->middleware('isLoggedIn');
Route::get('/view-invest-income',[Callcontroller::class,'view_intrest'])->name('view-invest-income')->middleware('isLoggedIn');
Route::get('/view-income-report',[Callcontroller::class,'view_income_report'])->name('view-income-report')->middleware('isLoggedIn');

// FundrequestController
Route::get('/add-withdrawl-request', [WithdrawlrequestController::class, 'index'])->name('add-withdrawl-request')->middleware('isLoggedIn');
Route::post('/save-withdrawl-request', [WithdrawlrequestController::class, 'create'])->name('save-withdrawl-request')->middleware('isLoggedIn');
Route::get('/view-withdrawl-request', [WithdrawlrequestController::class, 'view'])->name('view-withdrawl-request')->middleware('isLoggedIn');


// PaypaymentController
Route::post('pay-payment/{id}', [PaypaymentController::class, 'create'])->middleware('isLoggedIn');



// RewardController
Route::get('/reward/add-reward-target', [RewardController::class, 'add_reward'])->name('add-reward')->middleware('isLoggedIn');
Route::post('/reward/save-reward-target', [RewardController::class, 'create'])->name('save-reward')->middleware('isLoggedIn');
Route::get('/reward/view-reward-target', [RewardController::class, 'view'])->name('view-reward-target')->middleware('isLoggedIn');
Route::get('/reward/update-reward-target/{id}', [RewardController::class, 'edit'])->middleware('isLoggedIn');
Route::put('/reward/update-reward-target/{id}', [RewardController::class, 'update'])->middleware('isLoggedIn');
Route::get('/reward/delete-reward-target/{id}', [RewardController::class, 'destroy'])->middleware('isLoggedIn');
