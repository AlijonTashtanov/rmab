<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationApplicantController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ContractConclusionController;
use App\Http\Controllers\CorruptionTypeController;
use App\Http\Controllers\DispatchGeographyController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\InformationAboutShipmentController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\LocalDocumentController;
use App\Http\Controllers\OurAdvantageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PropController;
use App\Http\Controllers\QualityControlController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UsefulLinkController;
use App\Http\Controllers\VacancyController;
use App\Http\Livewire\Admin\UserProfile;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Jetstream
Route::middleware([
    'auth:sanctum',
    'admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Cookies
Route::get('/set-cookie/{cookie}', [AdminController::class, 'setCookie'])->name('setCookie')->middleware('auth');

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
//Dashboard
    Route::get('/', [AdminController::class, 'index'])->name('index');
//Profile
    Route::get('/profile', UserProfile::class)->name('profile');
    Route::post('/changeData', [AdminController::class, 'data'])->name('data');
    Route::get('/password/index', [AdminController::class, 'password'])->name('profile.password');
    Route::post('/password/index', [AdminController::class, 'passwordChange'])->name('password.change.index');

    Route::resource('/usefullinks', UsefulLinkController::class);
    Route::resource('/faqs', FaqController::class);
    Route::resource('/services', ServiceController::class);
    Route::resource('/abouts', AboutController::class);
    Route::resource('/posts', PostController::class);
    Route::resource('/vacancies', VacancyController::class);
    Route::resource('/ouradvantages', OurAdvantageController::class);
    Route::resource('/props', PropController::class);
    Route::resource('/regions', RegionController::class);
    Route::resource('/branches', BranchController::class);
    Route::resource('/localdocuments', LocalDocumentController::class);
    Route::resource('/articles', ArticleController::class);
    Route::resource('/information', InformationController::class);
    Route::resource('/districts', DistrictController::class);
    Route::resource('/corruptiontypes', CorruptionTypeController::class);
    Route::resource('/applicationapplicants', ApplicationApplicantController::class);
    Route::resource('/pages', PageController::class);
    Route::resource('/dispatchgeographies', DispatchGeographyController::class);
    Route::resource('/contractconclusions', ContractConclusionController::class);
    Route::resource('/qualitycontrols', QualityControlController::class);
    Route::resource('/informationaboutshipments', InformationAboutShipmentController::class);
});
