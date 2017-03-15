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
*/

//Index
Route::get('/home', function () { return view('index'); });

//My Recipes
Route::get('/myRecipes', 'MyRecipesController@index');

//Search Recipes


//About

Auth::routes();
