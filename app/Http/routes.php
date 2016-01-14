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
Route::get('/', function(){
	return view('home.home');
});
Route::get('/home', function(){
	return view('home.home');
});
Route::get('sezgicraft', 'HomeController@index');

Route::get('about', function(){
	if(Auth::user()->active == "1")
	{
		return view('about');
	}else{
		session()->flash('flash_message_important', 'Your account has been disabled!');
		return view('disable.disabled');
	}
});

Route::get('videos/form', function(){
	return view('videos.form');
});
Route::get('videos', function(){
	if(Auth::user()->active == "1")
	{
		return view('videos.videos');
	}else{
		session()->flash('flash_message_important', 'Your account has been disabled!');
		return view('disable.disabled');
	}

});

Route::filter('ajax_check', function(){
	if(\Illuminate\Support\Facades\Request::ajax())
	{
		return true;
	}
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
Route::post('videos', 'UserController@video');


/// Messenger ///
Route::group(['prefix' => 'messages'], function () {
	Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
	Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
	Route::post('chat', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
	Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
	Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});


/// Admin Panel ///
Route::get('admin', 'NewAdminController@getIndex');
Route::get('admin/disable-user/{id}', 'NewAdminController@disableUser');
Route::get('admin/enable-user/{id}', 'NewAdminController@enableUser');
Route::post('admin/update-role', array('uses' => 'NewAdminController@updateRoles'));
Route::post('admin/create-role', array('uses' => 'NewAdminController@createRoles'));
Route::post('admin/create-perm', array('uses' => 'NewAdminController@createPerm'));
Route::post('admin/update-perm', array('uses' => 'NewAdminController@updatePerm'));
Route::post('admin/create-tag', array('uses' => 'NewAdminController@createTag'));


/// GAMES ///
route::get('/games', function(){
	if(Auth::user()->active == "1")
	{
		return view('games.home');
	}else{
		session()->flash('flash_message_important', 'Your account has been disabled!');
		return view('disable.disabled');
	}
});


Route::resource('picture', 'PictureController');