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

Route::resource('games', 'GameController', ['except' => ['destroy','indexArray']]);

Route::resource('companies', 'CompanyController', ['except' => ['index','show','edit','update','destroy']]);

Route::resource('consoles', 'ConsoleController', ['except' => ['index','show','edit','update','destroy']]);

Route::resource('backlogs', 'BacklogController', ['except' => ['show','edit','update','destroy']]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gameconsole/{id}', 'BacklogController@getGamesByConsole');
