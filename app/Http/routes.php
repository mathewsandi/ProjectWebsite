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
Route::get('gallery', function(){
	return view('gallery');
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('articles', 'ArticleController');
Route::resource('statuses', 'StatusController');
Route::resource('users', 'UserController@index');

Route::get('profile', 'ProfileController@index');
Route::get('editprofile', 'ProfileController@edit');
Route::get('profilearticles', 'ProfileController@articles');
Route::get('profile/{id}', 'ProfileController@show');
Route::patch('profile.profile/{id}', 'ProfileController@update');

Route::get('add-friend/{id}', 'ProfileController@getAddFriend');
Route::get('remove-friend/{id}', 'ProfileController@getRemoveFriend');

Route::get('store', 'StoreController@index');
Route::get('store/{id}', 'StoreController@show');

Route::get('application', function(){
    return view('forms.application');
});
Route::post('application', 'UserController@apply');

Route::get('admin', 'AdminController@index');
Route::post('roles', 'AdminController@createRole');
Route::post('permissions', 'AdminController@createPermission');
Route::post('tags', 'AdminController@createTag');
Route::post('admin', 'AdminController@editUser');