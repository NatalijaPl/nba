<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TeamsController;
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
Route::get('/teams', [TeamsController::class, 'index']);
Route::get('/teams/{id}', [TeamsController::class, 'show'])->name('single-team');
Route::post('/teams/{team_id}/comment', [CommentsController::class, 'store'])->name('team-comments');

Route::get('/players/{id}', [PlayersController::class, 'show'])->name('single-player');

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/logout', [LoginController::class, 'destroy']);

Route::get('/verification/{id}', [LoginController::class, 'verification']);

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('single-news');
Route::get('/news/team/{id}', [NewsController::class, 'filter'])->name('filter-team');
