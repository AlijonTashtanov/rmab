<?php

use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\LocalDocumentController;
use App\Http\Controllers\Api\OurAdvantageController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\PropsController;
use App\Http\Controllers\Api\RegionController;
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
Route::get('/props', [PropsController::class, 'index']);

Route::group(['prefix' => 'region'], function () {
    Route::get('/', [RegionController::class, 'index']);
    Route::get('/region-branch/{key}', [RegionController::class, 'regionBranch']);
    Route::get('/region-branches/{key}', [RegionController::class, 'regionBranches']);
});

Route::group(['prefix' => 'services'], function () {
    Route::get('/', [ServiceController::class, 'index']);
    Route::get('/detail/{id}', [ServiceController::class, 'show']);
});


Route::group(['prefix' => 'local-documents'], function () {
    Route::get('/', [LocalDocumentController::class, 'index']);
    Route::get('/detail/{id}', [LocalDocumentController::class, 'show']);
});
