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

Route::get('/', 'RecipeController@index')->name('home');
Route::get('/recipe/index', 'RecipeController@recipeIndex')->name('recipe.index');
Route::get('/recipe/search', 'RecipeController@searchIndex')->name('search');
Route::get('/recipe/category', 'RecipeController@categoryIndex')->name('category');
Route::get('/recipe/id', 'RecipeController@recipe')->name('recipe');

Route::get('/member/id', 'RecipeController@member')->name('member');
Route::get('/member/id/edit', 'Admin\UserController@edit')->name('member.edit');

Route::get('/recipe/id/edit', 'Admin\RecipeController@edit')->name('recipe.edit');
Route::get('/recipe/create', 'Admin\RecipeController@add')->name('recipe.add');

Route::post('recipe/create', 'Admin\RecipeController@create')->name('recipe.create');

Auth::routes();

Route::get('/home', 'HomeController@index');