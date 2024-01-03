<?php

use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\OurAdvantageController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\UsefulLinkController;
use App\Http\Controllers\Api\VacancyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/useful-links', [UsefulLinkController::class, 'index']);
Route::get('/faqs', [FaqController::class, 'index']);
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/abouts', [AboutController::class, 'index']);

Route::group(['prefix' => 'news'], function () {
    Route::get('/latest-news', [PostController::class, 'latestNews']);
    Route::get('/all', [PostController::class, 'all']);
    Route::get('/detail/{id}', [PostController::class, 'show']);
});

Route::group(['prefix' => 'vacancy'], function () {
    Route::get('/all', [VacancyController::class, 'index']);
    Route::get('/detail/{id}', [VacancyController::class, 'show']);
});

Route::get('/our-advantages', [OurAdvantageController::class, 'index']);

