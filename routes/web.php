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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('xproject', 'XprojectController@index');

Route::prefix('ic/xproject')->group(function () {
    Route::get('/', 'XprojectController@showIC');

    Route::get('/logicwar', 'IcController@showLogicWar');
    Route::get('/logicwar-rulebook', 'IcController@LogicWarRulebook');
    Route::get('/logicwar-quiz', 'IcController@showLogicWarQuiz');

    Route::get('/itfest', 'IcController@showITFest');
    Route::get('/itfest-rulebook', 'IcController@ITFestRulebook');
});

Route::prefix('ci/xproject')->group(function () {
    Route::get('/', 'XprojectController@showCI');

    Route::get('/wdc', 'CiController@showWDC');
    Route::get('/wdc-rulebook', 'CiController@WDCRulebook');

    Route::get('/ipc', 'CiController@showIPC');
    Route::get('/ipc-rulebook', 'CiController@IPCRulebook');
});

Route::prefix('ifc/xproject')->group(function () {
    Route::get('/', 'XprojectController@showIFC');
    Route::get('/rulebook', 'IfcController@IFCRulebook');
});

Route::get('test', function () {
    return view('xproject.test');
});