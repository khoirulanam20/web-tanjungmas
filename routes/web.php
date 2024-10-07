<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProgramCategoryController;
use App\Http\Controllers\ProgramSubCategoryController;
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



//auth
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.post');
//auth

// ADMIN routes
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('/dashboard/{user}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');

    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::delete('/program_categories/{programCategory}', [ProgramCategoryController::class, 'destroy'])->name('program_categories.destroy');
    Route::delete('/program_sub_categories/{programSubCategory}', [ProgramSubCategoryController::class, 'destroy'])->name('program_sub_categories.destroy');
});
// ADMIN routes

// Guest routes
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/berita', [ArticleController::class, 'showCategories'])->name('berita');

Route::resource('articles', ArticleController::class);
Route::resource('categories', CategoryController::class);
Route::resource('programs', ProgramController::class);
Route::resource('program_categories', ProgramCategoryController::class);
Route::resource('program_sub_categories', ProgramSubCategoryController::class);

Route::get('/kelembagaan', [ProgramController::class, 'showProgramCategories'])->name('kelembagaan');
Route::get('/kelembagaan/{id}', [ProgramController::class, 'showProgramsByCategory'])->name('kelembagaan.view');
Route::get('/kelembagaan/{id}/list', [ProgramController::class, 'showProgramSubCategories'])->name('kelembagaan.list');
Route::get('/kelembagaan/{id}/show', [ProgramController::class, 'show'])->name('kelembagaan.show');
Route::get('/kelembagaan/show_sub/{id}', [ProgramController::class, 'showProgramSubCategories'])->name('kelembagaan.show_sub');


Route::get('/category/{id}/articles', [ArticleController::class, 'showArticlesByCategory'])->name('category.articles');
Route::get('/category/{id}/view', [ArticleController::class, 'showArticlesByCategory'])->name('category.view');

Route::get('/program_category/{id}/programs', [ProgramController::class, 'showProgramsByCategory'])->name('program_category.programs');
Route::get('/program_category/{id}/view', [ProgramController::class, 'show'])->name('program_category.view');

Route::get('/program/sub-category/{id}', [ProgramController::class, 'showProgramsBySubCategory'])->name('programSubCategory.view');

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/program/{id}', [ProgramController::class, 'show'])->name('program.show');



Route::get('/about', function () {return view('page_web.about.about');})->name('about');
Route::get('/kontak', function () {return view('page_web.kontak.kontak');})->name('kontak');
Route::get('/layanan', function () {return view('page_web.layanan.layanan');})->name('layanan');
Route::get('/layanan/cek_pbb', function () {return view('page_web.layanan.cek_pbb');})->name('layanan.cek_pbb');

Route::get('/layanan/akte_kelahiran', function () {
    return view('page_web.layanan.akte_kelahiran');
})->name('layanan.akte_kelahiran');

Route::get('/layanan/akte_kematian', function () {
    return view('page_web.layanan.akte_kematian');
})->name('layanan.akte_kematian');

Route::get('/layanan/aduan', function () {
    return view('page_web.layanan.aduan');
})->name('layanan.aduan');

Route::get('/layanan/ktp', function () {
    return view('page_web.layanan.ktp');
})->name('layanan.ktp');

Route::get('/layanan/kk', function () {
    return view('page_web.layanan.kk');
})->name('layanan.kk');

Route::get('/layanan/syarat_nikah', function () {
    return view('page_web.layanan.syarat_nikah');
})->name('layanan.syarat_nikah');







// Guest routes






