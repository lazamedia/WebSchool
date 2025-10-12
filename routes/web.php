<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\PpdbController;
use App\Http\Controllers\Frontend\PrestasiController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\GaleriController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Dashboard\DashboardController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

    Route::name('frontend.')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/ppdb', [PpdbController::class, 'index'])->name('ppdb');
        Route::get('/form-ppdb', [PpdbController::class, 'create'])->name('form.ppdb');
        Route::get('/article', [ArticleController::class, 'index'])->name('article');
        Route::get('/article-content', [ArticleController::class, 'show'])->name('article.content');
        Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
        Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    });

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
    use App\Http\Controllers\Auth\AuthController;
    use App\Http\Middleware\ValidateSession;

    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/

    Route::middleware(['auth', ValidateSession::class])->group(function () {

        // Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::prefix('dashboard')->name('dashboard.')->group(function () {

            Route::get('/', [DashboardController::class, 'index'])->name('index');

        });

    });


/*
|--------------------------------------------------------------------------
| Development Routes
|--------------------------------------------------------------------------
*/

    if (app()->environment('local')) {
        Route::get('/test', fn() => view('test'))->name('test');
        Route::get('/test-1', fn() => view('test-1'))->name('test-1');
    }