<?php

use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\ApplicationApplicantController;
use App\Http\Controllers\Api\ApplicationUseServiceController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\BannerController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\ContactUsController;
use App\Http\Controllers\Api\ContractConclusionController;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\HomeBannerController;
use App\Http\Controllers\Api\InformationAboutShipmentController;
use App\Http\Controllers\Api\InformationController;
use App\Http\Controllers\Api\LocalDocumentController;
use App\Http\Controllers\Api\OurAdvantageController;
use App\Http\Controllers\Api\PartnerController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\PropsController;
use App\Http\Controllers\Api\QualityControlController;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\SocialController;
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
    Route::get('/districts/{id}', [RegionController::class, 'districts']);
    Route::get('/all-branches', [RegionController::class, 'allBranches']);
});

Route::group(['prefix' => 'services'], function () {
    Route::get('/', [ServiceController::class, 'index']);
    Route::get('/detail/{id}', [ServiceController::class, 'show']);
});


Route::group(['prefix' => 'local-documents'], function () {
    Route::get('/', [LocalDocumentController::class, 'index']);
    Route::get('/detail/{id}', [LocalDocumentController::class, 'show']);
});

Route::group(['prefix' => 'local-documents'], function () {
    Route::get('/', [LocalDocumentController::class, 'index']);
    Route::get('/detail/{id}', [LocalDocumentController::class, 'show']);
});

Route::group(['prefix' => 'article'], function () {
    Route::get('/all', [ArticleController::class, 'all']);
    Route::get('/detail/{id}', [ArticleController::class, 'show']);
});

Route::group(['prefix' => 'information'], function () {
    Route::get('/index', [InformationController::class, 'index']);
    Route::get('/detail/{id}', [InformationController::class, 'show']);
});

Route::group(['prefix' => 'contract-conclusions'], function () {
    Route::get('/page-info', [ContractConclusionController::class, 'pageInfo']);
    Route::get('/dispatch-geography', [ContractConclusionController::class, 'dispatchGeography']);
    Route::post('/send-contract', [ContractConclusionController::class, 'store']);
});

Route::group(['prefix' => 'quality-control'], function () {
    Route::post('/send', [QualityControlController::class, 'store']);
    Route::get('/page-info', [QualityControlController::class, 'pageInfo']);
});

Route::group(['prefix' => 'information-about-shipment'], function () {
    Route::get('/page-info', [InformationAboutShipmentController::class, 'pageInfo']);
    Route::post('/send', [InformationAboutShipmentController::class, 'store']);
});

Route::group(['prefix' => 'application-use-service'], function () {
    Route::get('/page-info', [ApplicationUseServiceController::class, 'pageInfo']);
    Route::post('/send', [ApplicationUseServiceController::class, 'store']);
});

Route::post('/send-application-applicant', [ApplicationApplicantController::class, 'store']);
Route::get('/corruption-types', [ApplicationApplicantController::class, 'corruptionTypes']);
Route::get('/site-contact', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactUsController::class, 'store']);
Route::get('/banners', [BannerController::class, 'index']);
Route::get('/socials', [SocialController::class, 'index']);

Route::get('/partners', [PartnerController::class, 'index']);

Route::get('/home-banners', [HomeBannerController::class, 'index']);

