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

Route::get('/', 'MessagesController@index');

Route::get('/messages', 'MessagesController@index');
Route::get('/messages/create', 'MessagesController@create');
Route::post('/messages', 'MessagesController@store');

Route::auth();

// Route::get('/users', 'UsersController@index');
// Route::get('/users/create', 'UsersController@create');
// Route::post('/users', 'UsersController@store');
//
// Route::get('/teams', 'TeamsController@index');

// Auth::routes();
