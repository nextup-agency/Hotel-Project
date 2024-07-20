<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\ResidencesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/', [LayoutController::class, 'home'])->name('frontend.home');
Route::post('/requirement-store', [LayoutController::class, 'requirementStore'])->name('frontend.requirementStore');
Route::get('/residences', [LayoutController::class, 'residences'])->name('frontend.residences');
Route::get('/office', [LayoutController::class, 'office'])->name('frontend.office');

Route::get('/contact', [LayoutController::class, 'contact'])->name('frontend.contact');

Route::get('/about', [LayoutController::class, 'about'])->name('frontend.about');

Route::get('/articles', [LayoutController::class, 'articles'])->name('frontend.articles');
Route::get('/article-details/{id}', [LayoutController::class, 'articleDetails'])->name('frontend.articleDetails');




Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/home/index', [DashboardController::class, 'index'])->name('dashboard.index');

    //USER
    Route::get('/dashboard/user/index', [UserController::class, 'index'])->name('user.index');
    Route::post('/dashboard/user/store', [UserController::class, 'store'])->name('user.store');
    Route::post('/dashboard/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/dashboard/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/dashboard/user/update/{id}', [UserController::class, 'update'])->name('user.update');

    //Article
    Route::get('/dashboard/article/index', [ArticleController::class, 'index'])->name('article.index');
    Route::post('/dashboard/article/store', [ArticleController::class, 'store'])->name('article.store');
    Route::post('/dashboard/article/delete/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');
    Route::get('/dashboard/article/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
    Route::post('/dashboard/article/update/{id}', [ArticleController::class, 'update'])->name('article.update');

    //Requirement
    Route::get('/dashboard/requirement/index', [RequirementController::class, 'index'])->name('requirement.index');
    Route::post('/dashboard/requirement/store', [RequirementController::class, 'store'])->name('requirement.store');
    Route::post('/dashboard/requirement/delete/{id}', [RequirementController::class, 'destroy'])->name('requirement.destroy');
    Route::get('/dashboard/requirement/edit/{id}', [RequirementController::class, 'edit'])->name('requirement.edit');
    Route::post('/dashboard/requirement/update/{id}', [RequirementController::class, 'update'])->name('requirement.update');
});
