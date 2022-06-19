<?php

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiLikeController;
use App\Http\Controllers\ApiDoodayController;
use App\Http\Controllers\ApiActivityController;
use App\Http\Controllers\ApiCategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [ApiAuthController::class, 'login']);
Route::post('register', [ApiAuthController::class, 'register']);

Route::post('createdooday', [ApiDoodayController::class, 'doodaypost']);
Route::get('dooday', [ApiDoodayController::class, 'doodaylist']);

Route::post('createlike', [ApiLikeController::class, 'likepost']);
Route::get('like', [ApiLikeController::class, 'likelist']);

Route::get('detente', function (Activity $activity) {
    return $activity::whereHas('categories', function ($query) {
        return $query->where('id', '=', '1');
    })->get();
});
Route::get('decouverte', function (Activity $activity) {
    return $activity::whereHas('categories', function ($query) {
        return $query->where('id', '=', '2');
    })->get();
});
Route::get('sport', function (Activity $activity) {
    return $activity::whereHas('categories', function ($query) {
        return $query->where('id', '=', '3');
    })->get();
});
Route::get('culturelle', function (Activity $activity) {
    return $activity::whereHas('categories', function ($query) {
        return $query->where('id', '=', '4');
    })->get();
});
Route::get('shooping', function (Activity $activity) {
    return $activity::whereHas('categories', function ($query) {
        return $query->where('id', '=', '5');
    })->get();
});
Route::get('atable', function (Activity $activity) {
    return $activity::whereHas('categories', function ($query) {
        return $query->where('id', '=', '6');
    })->get();
});

Route::apiResource('activities', 'ApiActivityController');
Route::apiResource('actualities', 'ApiActualityController');

Route::apiResource('categories', 'ApiCategoryController');