<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Page 1 - Details
Route::get('/movie/{movie}', [MovieController::class, 'view'])->name('api.view.movie');

// Page 2 - Hot & Soon Movies
Route::get('/hot/movies', [MovieController::class, 'hotMovies'])->name('api.movies-hot');
Route::get('/soon/movies', [MovieController::class, 'soonMovies'])->name('api.movies-soon');

//Page 3 - Recommended
Route::get('/movies/recommended', [MovieController::class, 'recommendMovies'])->name('api.movies-recommend');

