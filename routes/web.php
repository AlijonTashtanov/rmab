<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UsefulLinkController;
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
// Useful Links
    Route::get('/usefullinks/index', [UsefulLinkController::class, 'index'])->name('usefullinks.index');
    Route::get('/usefullinks/create', [UsefulLinkController::class, 'create'])->name('usefullinks.create');
    Route::post('/usefullinks/store', [UsefulLinkController::class, 'store'])->name('usefullinks.store');
    Route::get('/usefullinks/show/{id}', [UsefulLinkController::class, 'show'])->name('usefullinks.show');
    Route::delete('/usefullinks/destroy/{id}', [UsefulLinkController::class, 'destroy'])->name('usefullinks.destroy');
    Route::get('/usefullinks/{id}', [UsefulLinkController::class, 'edit'])->name('usefullinks.edit');
    Route::put('/usefullinks/{id}', [UsefulLinkController::class, 'update'])->name('usefullinks.update');
//  FAQ
    Route::resource('/faqs', FaqController::class);
//    Route::resource('/faqs', FaqController::class)->name('faqs');
});
