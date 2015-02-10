<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('', ['as' => 'home', 'uses' => 'HomeController@showHome']);

Route::get('app', ['as' => 'app', 'uses' => 'ApplicationController@showLifeApplication']);

Route::get('quote', ['as' => 'lifeQuote', 'uses' => 'QuoteController@showLifeQuote']);

Route::get('company', ['as' => 'company', 'uses' => 'CompanyController@showCompanyDashboard']);

// Route::get('', ['as' => '', 'uses' => '']);

// Authentication Routes
Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@doLogin');
Route::get('logout', 'AuthController@doLogout');
// OAuth Routes
Route::get('auth/google', 'AuthController@loginWithGoogle');
Route::get('auth/linkedin', 'AuthController@loginWithLinkedin');