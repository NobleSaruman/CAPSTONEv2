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
Auth::routes();

Route::get('/home',             'HomeController@index');
Route::get('/create',           'PostController@create');
Route::get('/',                 'HomeController@index');

Route::get('/{category}',       'HomeController@category');
Route::get('/post/{post}',      'PostController@show');

Route::post('/post/store',      'PostController@store');
Route::post('/comment/store',   'CommentController@store');

