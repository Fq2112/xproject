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

Route::get('xproject', 'XprojectController@index');

Route::get('ic/xproject', 'XprojectController@showIC');
Route::get('ic/xproject/logicwar', 'XprojectController@showLogicWar');
Route::get('ic/xproject/itfest', 'XprojectController@showITFest');

Route::get('ci/xproject', 'XprojectController@showCI');
Route::get('ci/xproject/wdc', 'XprojectController@showWDC');
Route::get('ci/xproject/ipc', 'XprojectController@showIPC');

Route::get('ifc/xproject', 'XprojectController@showIFC');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
