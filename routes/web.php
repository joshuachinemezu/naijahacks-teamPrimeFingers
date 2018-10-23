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

Route::get('reset_password/{token}', ['as' => 'password.reset', function ($token) {
    // implement your reset password route here!
}]);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['middleware' => ['auth']], function () {
//  Route::get('dashboard', 'DashboardController@index')->name('dashboard');
// });

Route::group(['middleware' => 'web'], function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/register/tester', 'Auth\RegisterController@tester');
    Route::get('/register/choose', 'Auth\RegisterController@choose');
    Route::get('/register/company', 'Auth\RegisterController@company');
    Route::post('/signup', 'Auth\RegisterController@signup');
    Route::get('/how-it-works', 'HowController@index')->name('how-it-works');
    Route::get('/register/success', 'Auth\ConfirmController@index')->name('confirm');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/login', 'Auth\LoginController@index')->name('login');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::any('add_product', 'ProductController@create')->name('add_product');
        Route::any('create_product/{type}', 'ProductController@store')->name('create_product');
    });
});

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
