<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('about', function(){
	return view('about');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('articles', 'ArticleController');
Route::resource('statuses', 'StatusController');
Route::resource('admin', 'AdminController');

Route::get('profile', 'ProfileController@index');
Route::get('editprofile', 'ProfileController@edit');
Route::get('profilearticles', 'ProfileController@articles');
Route::get('profile/{id}', 'ProfileController@show');
Route::patch('profile.profile/{id}', 'ProfileController@update');

Route::get('users', 'UserController@index');

Route::resource('follows', 'FollowController');