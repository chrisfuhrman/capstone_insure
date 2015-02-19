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


// Routes for Life RFQ
// Route::get('life-quote', ['as' => 'lifeRFQ', 'uses' => 'RFQController@showLifeRFQ']);
// Route::post('life-quote', ['as' => 'lifeRFQ', 'uses' => 'RFQController@showLifeRFQ']);

Route::resource('life-quote', 'LifeRFQController');

Route::resource('life-quote-results', 'RFQResultsController');

// Route::get('life-quote-results', ['as' => 'lifeRFQResults', 'uses' => 'RFQResultsController@showLifeResults']);


// Authentication Routes
Route::get('login', ['as' => 'login', 'uses' => 'AuthController@showLogin']);
Route::post('login', 'AuthController@doLogin');
// OAuth Routes
Route::get('auth/google', 'AuthController@loginWithGoogle');
Route::get('auth/linkedin', 'AuthController@loginWithLinkedin');

Route::get('theme', ['as' => 'theme', 'uses' => 'ThemeController@showTheme']);

Route::get('test', ['as' => 'test', 'uses' => 'TestController@showTest']);

// Following Routes added by Marissa for the Extras pages

Route::get('products', ['as' => 'products', 'uses' => 'ExtrasController@showProducts']);

Route::get('learning', ['as' => 'learning', 'uses' => 'ExtrasController@showLearning']);

Route::get('calculator', ['as' => 'calculator', 'uses' => 'ExtrasController@showCalculator']);

Route::get('contact', ['as' => 'contact', 'uses' => 'ExtrasController@showContact']);


Route::post('createaccount', ['as' => 'createaccount', 'uses' => 'UserController@saveCreateAccount']);

Route::group(
	['before' => 'auth'], function()
{
	Route::get('profile', ['as' => 'clientdash', 'uses' => 'UserController@showClientDashboard']);

	Route::get('life-policy-app-bl',   ['as' => 'life-app-bl',   'uses' => 'PolicyAppController@showLifeAppBL']);
	
	Route::post('life-policy-app-bl',   ['as' => 'life-app-bl',   'uses' => 'PolicyAppController@showLifeAppBL']);

	Route::get('fileUpload', ['as' => 'fileUpload', 'uses' => 'PolicyAppController@showFileUpload']);

	Route::post('fileUpload', ['as' => 'fileUpload', 'uses' => 'PolicyAppController@saveFileUpload']);
	
	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@doLogout']);


});

Route::post('remind', ['as' => 'remind', 'uses' => 'RemindersController@postRemind']);
	
Route::get('remind', ['as' => 'remind', 'uses' => 'RemindersController@getRemind']);

Route::get('password/reset/{token}', ['as' => 'password/reset/{token}', 'uses' => 'RemindersController@getReset']);

Route::post('password/reset/{token}', ['as' => 'password/reset/{token}', 'uses' => 'RemindersController@postReset']);

Route::group(array('before' => array('auth|admin')), function()
{
    Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@showCompanyDashboard']);
});



Route::get('createaccount', ['as' => 'createaccount', 'uses' => 'UserController@showCreateAccount']);

