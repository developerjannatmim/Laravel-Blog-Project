<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [SiteController::class, 'showHome']);
Route::get('/about', [SiteController::class, 'showAbout']);
Route::get('/services', [SiteController::class, 'showService']);
Route::get('/portfolio', [SiteController::class, 'showPortfolio']);
Route::get('/reviews', [SiteController::class, 'showReviews']);
Route::get('/team', [SiteController::class, 'showTeam']);
Route::get('/contact', [SiteController::class, 'showContact']);
Route::get('/blog', [SiteController::class, 'showBlog']);
