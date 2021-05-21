<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RecipeController;

// use App\Http\Controllers\Auth;
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


Route::view('/add-recipe', 'create.index')
    ->name('add-recipe')
    ->middleware('auth');

Route::get('/edit-recipe/{id}', [RecipeController::class, 'update']);
Route::view('/about', 'about.index');
Route::get('/categories', [RecipeController::class, 'category']);

Route::get('/', [RecipeController::class, 'index']);
Route::get('/recipe/{id}', [RecipeController::class, 'show']);
Route::get('/search', [RecipeController::class, 'search']);
Route::post('/recipe', [RecipeController::class, 'store']);
Route::put('/recipe/{id}', [RecipeController::class, 'edit']);
Route::delete('/recipe/{id}', [RecipeController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
