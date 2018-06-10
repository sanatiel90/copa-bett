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
	Route::get('/', 'TeamController@index')->name('teams');
	Route::get('/new', 'TeamController@new')->name('new_team');
	Route::post('/store', 'TeamController@store')->name('save_team');
});

Route::prefix('player')->group(function(){
	Route::get('/', 'PlayerController@index')->name('players');
	Route::get('/new', 'PlayerController@new')->name('new_player');
	Route::post('/store', 'PlayerController@store')->name('save_player');
});

Route::prefix('result')->group(function(){
	Route::get('/', 'ResultController@index')->name('results');
	Route::get('/new', 'ResultController@new')->name('new_result');
	Route::post('/store', 'ResultController@store')->name('save_result');
});

Route::prefix('rodada')->group(function(){
	Route::get('/', 'RodadaController@index')->name('rodadas');
	Route::get('/new', 'RodadaController@new')->name('new_rodada');
	Route::post('/store', 'RodadaController@store')->name('save_rodada');
});

Route::prefix('game')->group(function(){
	Route::get('/', 'GameController@index')->name('games');
	Route::get('/new', 'GameController@new')->name('new_game');
	Route::post('/store', 'GameController@store')->name('save_game');
	Route::get('/edit/{id}', 'GameController@edit')->name('edit_game');
	Route::post('/update', 'GameController@update')->name('update_game');
	Route::get('/edit_best/{id}', 'GameController@editBest')->name('edit_best');
	Route::get('/delete/{id}', 'GameController@delete')->name('delete_game');
});


Route::prefix('bet')->group(function(){
	Route::get('/', 'BetController@index')->name('bets');
	Route::get('/new', 'BetController@new')->name('new_bet');
	Route::post('/store', 'BetController@store')->name('save_bet');
	Route::get('/edit/{id}', 'BetController@edit')->name('edit_bet');
	Route::post('/update', 'BetController@update')->name('update_bet');
	Route::get('/delete/{id}', 'BetController@delete')->name('delete_bet');
});

//rotas do admin
Route::get('/admin', 'AdminController@index');