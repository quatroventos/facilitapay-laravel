<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPassword;
use App\Http\Controllers\Auth\ChangePassword;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BlocksController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PartnersController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



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



Route::get('/admin', function () {
	return redirect('/default');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');

Route::get('/register', [RegisterController::class, 'show'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest')->name('register.perform');

Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');

Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/user-profile', [ProfileController::class, 'show'])->name('user-profile');
    Route::post('/user-profile', [ProfileController::class, 'update'])->name('user-profile.perform');

    Route::controller(DashboardsController::class)->group(function() {
        Route::get('/default', 'index')->name('dashboard');
    });

    Route::controller(UserController::class)->group(function() {
        Route::get('/user-management', 'index')->name('user-management');
        Route::get('/user-management/new', 'create')->name('user-new');
        Route::post('/user-management/new', 'store')->name('user-new.store');
        Route::get('/user-management/edit/{id}', 'edit')->name('user-edit');
        Route::post('/user-management/edit/{id}', 'update')->name('user-edit.update');
        Route::post('/user-delete/{id}', 'destroy')->name('user-destroy');
    });

    Route::controller(RoleController::class)->group(function() {
        Route::get('/role-management', 'index')->name('role-management');
        Route::get('/role-management/new', 'create')->name('role-new');
        Route::post('/role-management/new', 'store')->name('role-new.store');
        Route::get('/role-management/edit/{id}', 'edit')->name('role-edit');
        Route::post('/role-management/edit/{id}', 'update')->name('role-edit.update');
        Route::post('/role-delete/{id}', 'destroy')->name('role-destroy');
    });

    Route::controller(PartnersController::class)->group(function() {
        Route::get('/partner-management', 'index')->name('partner-management');
        Route::get('/partner-management/new', 'create')->name('partner-new');
        Route::post('/partner-management/new', 'store')->name('partner-new.store');
        Route::get('/partner-management/edit/{id}', 'edit')->name('partner-edit');
        Route::post('/partner-management/edit/{id}', 'update')->name('partner-edit.update');
        Route::post('/partner-delete/{id}', 'destroy')->name('partner-destroy');
    });

    Route::controller(PagesController::class)->group(function() {
        Route::get('/page-management', 'index')->name('page-management');
        Route::get('/page-management/new', 'create')->name('page-new');
        Route::post('/page-management/new', 'store')->name('page-new.store');
        Route::get('/page-management/edit/{locale}/{id}', 'edit')->name('page-edit');
        Route::post('/page-management/edit/{id}', 'update')->name('page-edit.update');
        Route::post('/page-delete/{id}', 'destroy')->name('page-destroy');
        Route::post('/page-translate/{id}', 'storetranslation')->name('page-translate.store');
    });

    Route::controller(BlocksController::class)->group(function() {
        Route::get('/block-management', 'index')->name('block-management');
        Route::get('/block-management/new', 'create')->name('block-new');
        Route::post('/block-management/new', 'store')->name('block-new.store');
        Route::get('/block-management/edit/{id}', 'edit')->name('block-edit');
        Route::post('/block-management/edit/{id}', 'update')->name('block-edit.update');
        Route::post('/block-delete/{id}', 'destroy')->name('block-destroy');
        Route::get('/block-preview/{id}', 'preview')->name('block-preview');
    });

    Route::controller(NewsletterController::class)->group(function() {
        Route::get('/newsletter-management', 'index')->name('newsletter-management');
        Route::get('/newsletter-management/new', 'create')->name('newsletter-new');
        Route::post('/newsletter-management/new', 'store')->name('newsletter-new.store');
        Route::get('/newsletter-management/edit/{id}', 'edit')->name('newsletter-edit');
        Route::post('/newsletter-management/edit/{id}', 'update')->name('newsletter-edit.update');
        Route::post('/newsletter-delete/{id}', 'destroy')->name('newsletter-destroy');
        Route::get('/newsletter-export', 'export')->name('newsletter-export');
    });

    Route::get('/authentication/sign-in/{page}', [PageController::class, 'signins'])->name('signins');

    Route::get('/authentication/sign-up/{page}', [PageController::class, 'signups'])->name('signups');

    Route::get('/authentication/reset-password/{page}', [PageController::class, 'resets'])->name('resets');

    Route::get('/authentication/lock/{page}', [PageController::class, 'locks'])->name('locks');

    Route::get('/authentication/verification/{page}', [PageController::class, 'verifications'])->name('verifications');

    Route::get('/authentication/errors/{page}', [PageController::class, 'errors'])->name('errors');

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');



    //    Limpar o cache

    //Clear Cache facade value:
    Route::get('/clear-cache', function() {
        $exitCode = Artisan::call('cache:clear');
        return '<h1>Cache facade value cleared</h1>';
    })->name('cache.clear');

    //Reoptimized class loader:
    Route::get('/optimize', function() {
        $exitCode = Artisan::call('optimize');
        return '<h1>Reoptimized class loader</h1>';
    })->name('optimize');;

    //Route cache:
    Route::get('/route-cache', function() {
        $exitCode = Artisan::call('route:cache');
        return '<h1>Routes cached</h1>';
    })->name('cache.route');;

    //Clear Route cache:
    Route::get('/route-clear', function() {
        $exitCode = Artisan::call('route:clear');
        return '<h1>Route cache cleared</h1>';
    })->name('route.clear');;

    //Clear View cache:
    Route::get('/view-clear', function() {
        $exitCode = Artisan::call('view:clear');
        return '<h1>View cache cleared</h1>';
    })->name('view.clear');;

    //Clear Config cache:
    Route::get('/config-cache', function() {
        $exitCode = Artisan::call('config:cache');
        return '<h1>Clear Config cleared</h1>';
    })->name('config.clear');;

}); //auth


//home
//Route::get('/', [PagesController::class, 'frontend'])->name('page');
//páginas

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', [PagesController::class, 'frontend'])->name('page');
    Route::get('{slug}', [PagesController::class, 'frontend'])->name('page');
});



