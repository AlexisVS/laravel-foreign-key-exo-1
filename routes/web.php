<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FilmController;
use App\Models\Category;
use App\Models\Film;
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
    $categories = Category::all();
    $films = Film::all();
    return view('welcome', compact('films', 'categories'));
});

Route::resource('category', CategoryController::class);
Route::resource('film', FilmController::class);
