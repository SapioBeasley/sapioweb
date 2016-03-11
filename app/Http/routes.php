<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'as' => 'welcome',
	'uses' => 'PagesController@showWelcome'
]);

Route::get('/contact', [
	'as' => 'contact',
	'uses' => 'PagesController@showContact'
]);

Route::get('/blog/{id}', [
	'as' => 'blog.single',
	'uses' => 'PagesController@showSingleBlog'
]);

Route::get('/blog', [
	'as' => 'blog',
	'uses' => 'PagesController@showBlog'
]);

Route::get('/portfolio', [
	'as' => 'portfolio',
	'uses' => 'PagesController@showPortfolio'
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
