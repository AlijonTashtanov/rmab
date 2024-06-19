<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationApplicantController;
use App\Http\Controllers\ApplicationUseServiceController;
use App\Http\Controllers\ApplicationUseServiceTypeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AutoParkController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactUController;
use App\Http\Controllers\ContractConclusionController;
use App\Http\Controllers\CorruptionTypeController;
use App\Http\Controllers\DispatchGeographyController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\Frontend\AutoparkFrontendController;
use App\Http\Controllers\Frontend\BranchFrontendController;
use App\Http\Controllers\Frontend\MainController;
use App\Http\Controllers\Frontend\OurAdvantageFrontendController;
use App\Http\Controllers\Frontend\PartnerFrontendController;
use App\Http\Controllers\Frontend\PropFrontendController;
use App\Http\Controllers\Frontend\VacancyFrontendController;
use App\Http\Controllers\HomeBannerController;
use App\Http\Controllers\InformationAboutShipmentController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\LocalDocumentController;
use App\Http\Controllers\OurAdvantageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PropController;
use App\Http\Controllers\QualityControlController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TranslationController;
use App\Http\Controllers\UsefulLinkController;
use App\Http\Controllers\VacancyController;
use App\Http\Livewire\Admin\UserProfile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\NewsController;

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

Route::get('/lang/{locale}', function ($locale) {

    session()->put('locale', $locale);

    return back();
})->name('locale');

//Jetstream
Route::middleware([
    'auth:sanctum',
    'admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
});
Route::middleware(['user.type'])->group(function () {
    Route::get('user-service',[\App\Http\Controllers\Frontend\UserServiceController::class,'index'])->name('user');
    Route::get('user-quality',[\App\Http\Controllers\Frontend\UserServiceController::class,'quality'])->name('user.quality');
    Route::get('user-quality-detail',[\App\Http\Controllers\Frontend\UserServiceController::class,'detail'])->name('user.quality.detail');
    Route::get('user-services',[\App\Http\Controllers\Frontend\UserServiceController::class,'services'])->name('user.services');
    Route::get('user-services-detail',[\App\Http\Controllers\Frontend\UserServiceController::class,'servicesDetail'])->name('user.services.detail');
    Route::get('user-shipping',[\App\Http\Controllers\Frontend\UserServiceController::class,'shipping'])->name('user.shipping');
    Route::get('user-shipping-detail',[\App\Http\Controllers\Frontend\UserServiceController::class,'shippingDetail'])->name('user.shipping.detail');

});
//Frontend

Route::group(['middleware' => [ 'setLocale']], function () {
    Route::get('change-language/{locale}', [\App\Http\Controllers\Frontend\LanguageController::class, 'changeLanguage'])
        ->name('change.language');

    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('/news', [NewsController::class, 'index'])->name('news');
    Route::get('/news-detail/{id}', [NewsController::class, 'detail'])->name('news-detail');
    Route::get('/vacancy', [VacancyFrontendController::class, 'index'])->name('vacancy-front');
    Route::get('/vacancy-detail/{id}', [VacancyFrontendController::class, 'detail'])->name('vacancy-detail');
    Route::get('/our-advantages', [OurAdvantageFrontendController::class, 'index'])->name('our-advantages');
    Route::get('/prop', [PropFrontendController::class, 'index'])->name('prop');
    Route::get('/autopark', [AutoparkFrontendController::class, 'index'])->name('autopark');
    Route::get('/partner', [PartnerFrontendController::class, 'index'])->name('partner');
    Route::get('/branch', [BranchFrontendController::class, 'index'])->name('branch');
    Route::get('/about', [\App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');



    Route::get('/contact', [\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');
    Route::post('/contact-store', [\App\Http\Controllers\Frontend\ContactController::class, 'store'])->name('contact.store');


    Route::get('/express', [\App\Http\Controllers\Frontend\ExpressFrontendController::class, 'index'])->name('express');
    Route::get('/express-detail/{id}', [\App\Http\Controllers\Frontend\ExpressFrontendController::class, 'detail'])->name('express-detail');

//    Route::get('/data', [\App\Http\Controllers\Frontend\DataFrontendController::class, 'index'])->name('data');
    Route::get('/data-detail/{id}', [\App\Http\Controllers\Frontend\DataFrontendController::class, 'detail'])->name('data-detail');
    Route::get('/page-contract', [\App\Http\Controllers\Frontend\PageController::class, 'contract'])->name('page-contract');
    Route::get('/page-quality', [\App\Http\Controllers\Frontend\PageController::class, 'quality'])->name('page-quality');
    Route::get('/page-shipment', [\App\Http\Controllers\Frontend\PageController::class, 'shipment'])->name('page-shipment');
    Route::get('/page-service', [\App\Http\Controllers\Frontend\PageController::class, 'service'])->name('page-service');
    Route::get('/local-documents', [\App\Http\Controllers\Frontend\LocalDocumentController::class, 'index'])->name('local-documents');
    Route::get('/local-documents-detail/{id}', [\App\Http\Controllers\Frontend\LocalDocumentController::class, 'detail'])->name('local-documents-detail');
    Route::get('/download-document/{id}', [\App\Http\Controllers\Frontend\LocalDocumentController::class, 'downloadDocument'])->name('local-download-document');
    Route::get('/article', [\App\Http\Controllers\Frontend\ArticleController::class, 'index'])->name('article');
    Route::get('/article-detail/{id}', [\App\Http\Controllers\Frontend\ArticleController::class, 'detail'])->name('article-detail');
    Route::get('/corruption-application', [\App\Http\Controllers\Frontend\ArticleController::class, 'application'])->name('application');

    Route::post('/contract-conclusion', [\App\Http\Controllers\Frontend\ContractConclusionController::class, 'store'])->name('contract.store');
    Route::post('/quality-control', [\App\Http\Controllers\Frontend\QualityControlController::class, 'store'])->name('quality.store');
    Route::post('/service-application', [\App\Http\Controllers\Frontend\ServiceApplicationController::class, 'store'])->name('application.store');
    Route::post('/shipment', [\App\Http\Controllers\Frontend\InformationAboutShipmentController::class, 'store'])->name('shipment.store');


    Route::get('/region', [\App\Http\Controllers\Frontend\LocationController::class, 'getRegions']);
    Route::get('/service-title', [\App\Http\Controllers\Frontend\LocationController::class, 'service']);
    Route::get('/dispatch-geography', [\App\Http\Controllers\Frontend\LocationController::class, 'location']);
    Route::get('/district/{region_id}', [\App\Http\Controllers\Frontend\LocationController::class, 'getDistricts']);


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
    Route::resource('/applicationuseservices', ApplicationUseServiceController::class);
    Route::resource('/contactuses', ContactUController::class);
    Route::resource('/contacts', ContactController::class);
    Route::resource('/banners', BannerController::class);
    Route::resource('/socials', SocialController::class);
    Route::resource('/translations', TranslationController::class);
    Route::resource('/partners', PartnerController::class);
    Route::resource('/homebanners', HomeBannerController::class);
    Route::resource('/autoparks', AutoParkController::class);
    Route::resource('/applicationuseservicetypes', ApplicationUseServiceTypeController::class);


    Route::get('/informationaboutshipments/{id}/cancel', [InformationAboutShipmentController::class, 'cancel'])->name('informationaboutshipments.cancel');
    Route::put('/informationaboutshipments/cancel-store/{id}', [InformationAboutShipmentController::class, 'cancalStore'])->name('informationaboutshipments.cancel-store');



});
