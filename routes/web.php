<?php

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
});

Route::get('/blog', [\App\Http\Controllers\RecipeController::class, 'index']);

Route::get('/blog/{recipe}', [\App\Http\Controllers\RecipeController::class, 'show']);

Route::get('/blog/create/post', [\App\Http\Controllers\RecipeController::class, 'create']); 
Route::post('/blog/create/post', [\App\Http\Controllers\RecipeController::class, 'store']); 
Route::get('/blog/{recipe}/edit', [\App\Http\Controllers\RecipeController::class, 'edit']); 
Route::put('/blog/{recipe}/edit', [\App\Http\Controllers\RecipeController::class, 'update']); 
Route::delete('/blog/{recipe}', [\App\Http\Controllers\RecipeController::class, 'destroy']); 


