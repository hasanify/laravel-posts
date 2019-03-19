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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return '<b><h1>Testing</h1></b>';
});

Route::get('/about', function () {
    return view('pages.about');
});
*/

//Route::get('/users/{id}', function ($id) {'PagesController@users';});



Route::get('/posts', function(){
	return view('posts.posts');
});
Route::resource('posts', 'PostsController');
Route::get('/', 'PostsController@index');

Auth::routes();

Route::get('dashboard', 'DashboardController@index');
