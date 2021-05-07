<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecepieController;
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


Route::view('/categories', 'categories.index');
Route::view('/add-recepie', 'create.index');
Route::view('/about', 'about.index');

Route::get('/', [RecepieController::class, 'index']);
Route::get('/recepie/{id}', [RecepieController::class, 'show']);
Route::post('/recepie', [RecepieController::class, 'store']);
Route::delete('/recepie/{id}', [RecepieController::class, 'destroy']);
