<?php
use App\Post;
use App\Setting;
use App\Country;
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
/*
Route::get('/settings','SettingsController@index');

Route::get('admin/post/example',array('as'=>'admin.home', function () {
	
	$url = route('admin.home');
	return "this url is ". $url;
}));

Route::get('/semester/add', 'SemesterController@add');


Route::get('sample/route', function () {
	return view('hello');
});

Route::group(['middleware' => ['web']], function () {
});

// Route::get('post/{id}', 'PostController@index');

Route::get('post', 'PostController@destroy');

//Route::resource('posts', 'PostController');

//Route::get('post','PostController@index');

//Route::get('/contact','PostController@contact');

//Route::get('post/{var}/{name}/{lastName}', 'PostController@show_post');
//Route::get('/post', 'PostController@show_post');
/*
// this is how to delete data in databse
Route::get('/delete', function(){

	$delete = DB::delete('delete from posts where id = ?', [1]);
	return $delete;

});
// this is how to insert data in database 
Route::get('/insert', function(){	

	$select ="";
	DB::insert('insert into posts(title, content) values(?,?)',['ronaldo','cabrera']);

});
// this is how to read data in database
Route::get('/read', function(){

	$result = DB::select('select * from posts');
return $result;
	foreach($result as $post) {
		echo  $post->id;
		echo  $post->title;
		echo  $post->content;
	}


});
// this is how to updade data in database
Route::get('/update', function(){	

	$update = DB::update('update posts set title = "update title" where id = ?', [1]);
	return $update;
});

Route::get('/settings','SettingsController@index', function(){	
	$result = Setting::all();
	echo $result;
});

// elequent database [[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]
*/
/*
// this is how to read data in elequent database
Route::get('/read', function(){	
	//$posts = Post::find(3);
	$posts = Post::all();
	//return $posts->title; 
	foreach($posts as $post) {
		echo  $post->id;
		echo  $post->title;
		echo  $post->content;
	}
});
// this is how to create data in elequent database
Route::get('/create', function(){	

	Post::create(['title'=>'sample create', 'content'=>'tagumpay']);

});

Route::get('/delete', function(){
	// this is to delete 1
	//$post = Post::find(1);
	//$post->delete();
	// this is to delete 2
	//Post::destroy(2);
	// this is to delete using field
	Post::where('content','tagumpay')->delete();
}); 
// this is how to add data in elequent database
//////////////////////////////////////////////////////////////////////////
Route::get('/basicinsert', function(){

	$post = new Post();

	$post->title = 'anthony';
	$post->content = 'cabrera';
	$post->save();


});
///////////////////////////////////////////////////////////////////////////
// this is how to update data in elequent database
Route::get('/basicupdate', function(){

	$post = Post::find(1);

	$post->title = 'amanda';
	$post->content = 'cabrera';
	$post->save();


});
/////////////////////////////////////////////////////////////////////
route::get('/findwhere', function() {

	$posts = Post::findOrFail(1);
	return $posts;
});
/////////////////////////////////////////////////////////////////////
// this is how to find duplicate data and take more or less in elequent database
Route::get('/findmore', function(){	

	$posts = Post::where('title','anthony')->orderBy('id', 'desc')->take(3)->get();

	return $posts;

});
////////////////////////////////////////////////////////////
// this is to update data in elequent database
Route::get('/update', function(){	

	Post::where('title','anthony')->where('id', 4)->update(['content'=>'dela cruz']);

});
///////////////////////////////////////////////
*/
// this is has many though relation

Route::get('/user/country', function(){
	$country = Country::find(4);

	foreach ($country->posts as $post) {
		return $post;
	}


});