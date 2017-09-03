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

Route::get('/home', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Route::get('/', 'HomeController@index')->name('home');

Route::post('register/submit', [
    'uses' => 'Auth\RegisterController@registerTransition',
    'as' => 'register.submit'
]);

Route::namespace('Auth')->group(function () {

    Route::get('login', [
        'uses' => 'LoginController@showLoginForm',
        'as' => 'login'
    ])->middleware('guest');

    Route::post('login', [
        'uses' => 'LoginController@login',
        'as' => 'login'
    ]);

    Route::post('logout', [
        'uses' => 'LoginController@logout',
        'as' => 'logout'
    ]);

    Route::get('register', [
        'uses' => 'RegisterController@showRegistrationForm',
        'as' => 'register'
    ]);

    Route::post('register', [
        'uses' => 'RegisterController@register',
        'as' => 'register.final'
    ])->middleware('guest');

});

Route::prefix('xproject')->group(function () {

    Route::get('/', 'XprojectController@index');

    Route::middleware('guest')->group(function () {

        Route::get('/form', 'XprojectController@showFormInput')
            ->name('pendaftaran');

        Route::get('/form-review', 'XprojectController@showFormReview')
            ->name('form.review');

    });

    Route::get('/form-pembayaran', 'XprojectController@showFormPembayaran')
        ->name('pembayaran')
        ->middleware(['auth', 'belumterkonfirmasi']);

    Route::get('/form-proses', 'XprojectController@showFormProses')
        ->name('form.proses')
        ->middleware('auth');

    Route::get('/form-report', 'XprojectController@showFormReport')
        ->name('form.report')
        ->middleware('terkonfirmasi');

});

Route::prefix('ic/xproject')->group(function () {

    Route::get('/', 'XprojectController@showIC');

    Route::get('/logicwar', 'IcController@showLogicWar');

    Route::get('/logicwar-rulebook', 'IcController@LogicWarRulebook');

    Route::get('/logicwar-quiz', 'IcController@showLogicWarQuiz')
        ->middleware('terkonfirmasi');

    Route::get('/logicwar-simulasi', 'IcController@showLogicWarTryOut');

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

Route::get('/xproject/daftar', function () {
    return view('xproject.pendaftaran');
})->name('daftar');

Route::get('test', function () {
    return view('xproject.test');
});

Route::group(['middleware' => ['auth', 'terkonfirmasi'], 'prefix' => 'unggah/url'], function () {

    Route::get('animasi', [
        'uses' => 'UnggahUrlController@animasi',
        'as' => 'unggah.url.animasi'
    ]);

    Route::put('animasi', [
        'uses' => 'ITFestController@animasi',
        'as' => 'unggah.url.animasi'
    ]);

    Route::get('desainweb', [
        'uses' => 'UnggahUrlController@desainweb',
        'as' => 'unggah.url.desainweb'
    ]);

    Route::get('game', [
        'uses' => 'UnggahUrlController@game',
        'as' => 'unggah.url.game'
    ]);

    Route::get('bisnis', [
        'uses' => 'UnggahUrlController@bisnis',
        'as' => 'unggah.url.bisnis'
    ]);

});