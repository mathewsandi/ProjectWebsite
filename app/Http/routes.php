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

/// Resources ///
Route::resource('articles', 'ArticleController');
Route::post('articles/{id}', 'ArticleController@reply');
Route::resource('statuses', 'StatusController');
Route::resource('users', 'UserController@index');


/// Profile ///
Route::get('editprofile', 'ProfileController@edit');
Route::get('profile/{id}', 'ProfileController@show');
Route::patch('profile.profile/{id}', 'ProfileController@update');


/// Friends ///
Route::get('add-friend/{id}', 'ProfileController@getAddFriend');
Route::get('remove-friend/{id}', 'ProfileController@getRemoveFriend');


/// Store ///
Route::get('store', 'StoreController@index');
Route::get('store/{id}', 'StoreController@show');



/// Staff Application ///
Route::get('application', function(){
    return view('forms.application');
});
Route::post('application', 'UserController@apply');


/// Messenger ///
Route::group(['prefix' => 'messages'], function () {
	Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
	Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
	Route::post('chat', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
	Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
	Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});


/// PRACTICING AJAX ///
Route::get('admin', 'NewAdminController@getIndex');
Route::get('admin/disable-user/{id}', 'NewAdminController@disableUser');
Route::get('admin/enable-user/{id}', 'NewAdminController@enableUser');

Route::filter('ajax_check', function(){
	if(\Illuminate\Support\Facades\Request::ajax())
	{
		return true;
	}
});