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

Route::get('/','IndexController@index');

Route::get('admin/post/example',array('as'=>'admin.home', function () {
	
	$url = route('admin.home');
	return "this url is ". $url;
}));


Route::get('sample/route', function () {
	return view('hello');
});

Route::group(['middleware' => ['web']], function () {
});

// Route::get('post/{id}', 'PostController@index')

//Route::resource('posts', 'PostController');

//Route::get('post','PostController@index');

Route::get('contact','PostController@contact');

//Route::get('post/{var}/{name}/{lastName}', 'PostController@show_post');
Route::get('post', 'PostController@show_post');

