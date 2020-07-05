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
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('home');
})->name('inicio');

// Route::get('/categorias/varios-alimentos', function () {
//     return view('categories.various_foods');
// });

Route::get('/categorias/alimentos/varios', 'CategoriesController@showVariousFoods')->name('alimentos.varios');
Route::get('/categorias/alimentos/bebidas', 'CategoriesController@showDrinks')->name('alimentos.bebidas');
Route::get('/categorias/alimentos/comidas', 'CategoriesController@showDishes')->name('alimentos.comidas');
