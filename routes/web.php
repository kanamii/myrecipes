<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', 'RecipeController@index');
Route::get('/recipe/index', 'RecipeController@recipeIndex');
Route::get('/recipe/search', 'RecipeController@searchIndex');
Route::get('/recipe/category', 'RecipeController@categoryIndex');
Route::get('/recipe/id', 'RecipeController@recipe');

Route::get('/recipe/id/edit', 'Admin\RecipeController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
