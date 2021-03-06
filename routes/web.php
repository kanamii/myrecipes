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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/member/edit/{id}', 'Admin\UserController@edit')->name('member.edit');
    Route::get('/recipe/edit', 'Admin\RecipeController@edit')->name('recipe.edit');
    Route::get('/recipe/create', 'Admin\RecipeController@add')->name('recipe.add');
    Route::get('/recipe/delete', 'Admin\RecipeController@delete')->name('recipe.delete');
    Route::post('/recipe/create', 'Admin\RecipeController@create')->name('recipe.create');
    Route::post('/recipe/edit', 'Admin\RecipeController@update')->name('recipe.update');
    Route::post('/member/edit', 'Admin\UserController@update')->name('member.update');
});


Route::get('/', 'RecipeController@index')->name('home');
Route::get('/recipe/index', 'RecipeController@recipeIndex')->name('recipe.index');
Route::get('/recipe/search', 'RecipeController@searchIndex')->name('search');
Route::get('/recipe/category', 'RecipeController@categoryIndex')->name('category');
Route::get('/recipe', 'RecipeController@recipe')->name('recipe');

Route::get('/member/{id}', 'RecipeController@member')->name('member');

Auth::routes();

Route::get('/home', 'HomeController@index');