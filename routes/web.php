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

Route::resource('messages', 'MessagesController');

Route::resource('users', 'UsersController', ['only' => array('index', 'show')]);
Route::get('/users/{id}/given', 'UsersController@given');

Route::resource('teams', 'TeamsController');
Route::get('/teams/{id}/join', 'TeamsController@join');
// Route::post('/teams/{id}/join', 'TeamsController@join');
// Route::get('/teams/{id}/joined', 'TeamsController@joined');
Route::post('/teams/{id}/joined', 'TeamsController@joined');

Route::auth();
// Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
