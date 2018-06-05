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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::prefix('team')->group(function(){
	Route::get('/new', 'TeamController@index');
	Route::post('/store', 'TeamController@store')->name('new_team');
});

Route::prefix('player')->group(function(){
	Route::get('/new', 'PlayerController@index');
	Route::post('/store', 'PlayerController@store')->name('new_player');
});



//rotas do admin
Route::get('/admin', 'AdminController@index');