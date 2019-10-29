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

Route::resource('/players', 'PlayerController');
Route::resource('/rosters', 'RosterController');
// Route::get('/players', 'PlayerController@index')->name('players');
// Route::get('/players/create', 'PlayerController@create')->name('player-create-form');
// Route::post('/players', 'PlayerController@store')->name('player-create');
