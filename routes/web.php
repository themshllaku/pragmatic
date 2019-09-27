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

/*
|--------------------------------------------------------------------------
| Application Routes Group
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth', 'as' => 'app.'], function() {
	Route::get('/home', 'HomeController@index')->name('home');

	/*
	|--------------------------------------------------------------------------
	| Pages Routes
	|--------------------------------------------------------------------------
	*/
	Route::group(['prefix' => 'pages', 'as' => 'pages.'], function() {
		Route::get('/', 'Core\Pages\PagesController@index')->name('index');
		Route::get('/create', 'Core\Pages\PagesController@create')->name('create');
	});

	/*
	|--------------------------------------------------------------------------
	| Users Routes
	|--------------------------------------------------------------------------
	*/
	Route::group(['prefix' => 'users', 'as' => 'users.'], function() {
		Route::get('/', 'Core\Users\UsersController@index')->name('index');
		Route::get('/create', 'Core\Users\UsersController@create')->name('create');
	});

	/*
	|--------------------------------------------------------------------------
	| Roles Routes
	|--------------------------------------------------------------------------
	*/
	Route::group(['prefix' => 'roles', 'as' => 'roles.'], function() {
		Route::get('/', 'Core\Roles\RolesController@index')->name('index');
		Route::get('/create', 'Core\Roles\RolesController@create')->name('create');
		Route::get('/permissions/model/{modelID}', 'Core\Roles\RolesController@availablePermissionsForModel');

		Route::group(['prefix' => 'permissions', 'as' => 'permissions.'], function() {
			Route::get('/create', 'Core\Roles\PermissionsController@create')->name('create');
			Route::post('/store', 'Core\Roles\PermissionsController@store')->name('store');
			Route::get('/available/{modelID}', 'Core\Roles\PermissionsController@availablePermissionsForModel');
		});
	});

	/*
	|--------------------------------------------------------------------------
	| Application Settings Routes
	|--------------------------------------------------------------------------
	*/
	Route::group(['prefix' => 'settings', 'as' => 'settings.'], function() {
		Route::get('/', 'Core\Settings\SettingsController@index')->name('index');
	});
});