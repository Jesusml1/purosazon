<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
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


Route::view('/add-recipe', 'create.index');
Route::view('/about', 'about.index');
Route::get('/categories', [recipeController::class, 'category']);

Route::get('/', [recipeController::class, 'index']);
Route::get('/recipe/{id}', [recipeController::class, 'show']);
Route::get('/search', [recipeController::class, 'search']);
Route::post('/recipe', [recipeController::class, 'store']);
Route::delete('/recipe/{id}', [recipeController::class, 'destroy']);
