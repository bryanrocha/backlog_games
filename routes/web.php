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

Route::resource('games', 'GameController');

Route::resource('companies', 'CompanyController');

Route::resource('consoles', 'ConsoleController');

Route::resource('backlogs', 'BacklogController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gameconsole/{id}', 'BacklogController@getGamesByConsole');
