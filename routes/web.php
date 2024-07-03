<?php

use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ResidencesController;
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

Route::get('/', [LayoutController::class, 'home'])->name('frontend.home');

Route::get('/residences', [LayoutController::class, 'residences'])->name('frontend.residences');

Route::get('/contact', [LayoutController::class, 'contact'])->name('frontend.contact');

Route::get('/about', [LayoutController::class, 'about'])->name('frontend.about');
