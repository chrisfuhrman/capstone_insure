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

Route::get('life-policy-app-bl',   ['as' => 'life-app-bl',   'uses' => 'PolicyAppController@showLifeAppBL']);
Route::post('life-policy-app-bl',   ['as' => 'life-app-bl',   'uses' => 'PolicyAppController@showLifeAppBL']);

Route::get('app',   ['as' => 'app',   'uses' => 'PolicyAppController@showLifeAppSecA']);

Route::get('app2',  ['as' => 'app2',  'uses' => 'PolicyAppController@showLifeAppSecB']);

Route::get('app3',  ['as' => 'app3',  'uses' => 'PolicyAppController@showLifeAppSecC']);

Route::get('app4',  ['as' => 'app4',  'uses' => 'PolicyAppController@showLifeAppSecE']);

Route::get('app5',  ['as' => 'app5',  'uses' => 'PolicyAppController@showLifeAppSecF']);

Route::get('app6',  ['as' => 'app6',  'uses' => 'PolicyAppController@showLifeAppSecG']);

Route::get('app7',  ['as' => 'app7',  'uses' => 'PolicyAppController@showLifeAppSecH']);

Route::get('app8',  ['as' => 'app8',  'uses' => 'PolicyAppController@showLifeAppSecI']);

Route::get('app9',  ['as' => 'app9',  'uses' => 'PolicyAppController@showLifeAppSecJ']);

Route::get('app10', ['as' => 'app10', 'uses' => 'PolicyAppController@showLifeAppSecK']);

Route::get('quote', ['as' => 'lifeQuote', 'uses' => 'QuoteController@showLifeQuote']);

// Routes for Life RFQ
Route::get('life-quote', ['as' => 'lifeRFQ', 'uses' => 'RFQController@showLifeRFQ']);
Route::post('life-quote', ['as' => 'lifeRFQ', 'uses' => 'RFQController@showLifeRFQ']);

Route::resource('LifeRFQ', 'LifeRFQController');
Route::resource('life-quote-results', 'RFQResultsController');

// Route::get('life-quote-results', ['as' => 'lifeRFQResults', 'uses' => 'RFQResultsController@showLifeResults']);


// Authentication Routes
Route::get('login', ['as' => 'login', 'uses' => 'AuthController@showLogin']);
Route::post('login', 'AuthController@doLogin');
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@doLogout']);
// OAuth Routes
Route::get('auth/google', 'AuthController@loginWithGoogle');
Route::get('auth/linkedin', 'AuthController@loginWithLinkedin');

Route::get('theme', ['as' => 'theme', 'uses' => 'ThemeController@showTheme']);
Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@showCompanyDashboard']);

Route::get('test', ['as' => 'test', 'uses' => 'TestController@showTest']);

// Following Routes added by Marissa for the Extras pages

Route::get('products', ['as' => 'products', 'uses' => 'ExtrasController@showProducts']);

Route::get('learning', ['as' => 'learning', 'uses' => 'ExtrasController@showLearning']);

Route::get('calculator', ['as' => 'calculator', 'uses' => 'ExtrasController@showCalculator']);

Route::get('contact', ['as' => 'contact', 'uses' => 'ExtrasController@showContact']);

Route::group(
	['before' => 'auth'], function()
{
	Route::get('profile', ['as' => 'clientdash', 'uses' => 'UserController@showClientDashboard'])->before('auth');
});





Route::get('create_account', ['as' => 'createaccount', 'uses' => 'UserController@showCreateAccount']);