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
// Routes for Life RFQ
Route::get('life-quote', ['as' => 'lifeRFQ', 'uses' => 'RFQController@showLifeRFQ']);
Route::get('life-quote-health-questionnaire', ['as' => 'lifeRFQquestionnaire', 'uses' => 'RFQController@showLifeHealthQuestionnaire']);
Route::get('life-quote-results', ['as' => 'lifeRFQResults', 'uses' => 'RFQResultsController@showLifeResults']);

// Route::get('', ['as' => '', 'uses' => '']);

// Authentication Routes
Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@doLogin');
Route::get('logout', 'AuthController@doLogout');
// OAuth Routes
Route::get('auth/google', 'AuthController@loginWithGoogle');
Route::get('auth/linkedin', 'AuthController@loginWithLinkedin');

Route::get('theme', ['as' => 'theme', 'uses' => 'ThemeController@showTheme']);
Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@showCompanyDashboard']);
