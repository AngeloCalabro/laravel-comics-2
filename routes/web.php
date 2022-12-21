<?php

use App\Http\Controllers\Guest\ComicController;
use App\Http\Controllers\Guest\PagesController;
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
    return view('home');
})->name('home');

Route::resource('/comics', ComicController::class);

Route::get('/characters',[PagesController::class, 'characters'] )->name('characters');
Route::get('/movies',[PagesController::class, 'movies'] )->name('movies');
Route::get('/tv',[PagesController::class, 'tv'] )->name('tv');
Route::get('/games',[PagesController::class, 'games'] )->name('games');
Route::get('/collectibles',[PagesController::class, 'collectibles'] )->name('collectibles');
Route::get('/videos',[PagesController::class, 'videos'] )->name('videos');
Route::get('/fans',[PagesController::class, 'fans'] )->name('fans');
Route::get('/news',[PagesController::class, 'news'] )->name('news');
Route::get('/shop',[PagesController::class, 'shop'] )->name('shop');
