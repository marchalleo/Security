<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ActualityController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/activity', [ActivityController::class, 'activity'])->name('activity')->middleware('auth');
Route::put('/activity-update/{id}', [ActivityController::class, 'activityPut'])->name('activityPut')->middleware('auth');
Route::delete('/activity-delete/{id}', [ActivityController::class, 'activityDelete'])->name('activityDelete')->middleware('auth');
Route::get('/activity/{id}', [ActivityController::class, 'activityDetail'])->name('activityDetail')->middleware('auth');
Route::get('/activityForm', [ActivityController::class, 'activityForm'])->name('activityForm')->middleware('auth');
Route::post('/activityForm', [ActivityController::class, 'activityPost'])->name('activityPost')->middleware('auth');


Route::get('/actuality', [ActualityController::class, 'actuality'])->name('actuality')->middleware('auth');
Route::put('/actuality-update/{id}', [ActualityController::class, 'actualityPut'])->name('actualityPut')->middleware('auth');
Route::delete('/actuality-delete/{id}', [ActualityController::class, 'actualityDelete'])->name('actualityDelete')->middleware('auth');
Route::get('/actuality/{id}', [ActualityController::class, 'actualityDetail'])->name('actualityDetail')->middleware('auth');
Route::get('/actualityForm', [ActualityController::class, 'actualityForm'])->name('actualityForm')->middleware('auth');
Route::post('/actualityForm', [ActualityController::class, 'actualityPost'])->name('actualityPost')->middleware('auth');


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');


Route::post('logout', [AuthController::class, 'logout'])->name('logout');