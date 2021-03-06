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

Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/faq', 'PageController@faq')->name('faq');
Route::get('/login', 'PageController@login')->name('loginview');
Route::get('/register', 'PageController@register')->name('registerview');

Route::get('/tulisresep', 'RecipeController@create')->name('tulisresep');
Route::post('/', 'RecipeController@store')->name('recipe.store');
Route::get('/recipe/{id}', 'RecipeController@show')->name('recipe.show');

Auth::routes();