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

Route::get('sitemap', function () {

	$client = new \GuzzleHttp\Client();
	$gists = $client->request('GET', env('GITHUB_API_URL') . '/users/sapiobeasley/gists');

	$gists = json_decode($gists->getBody());

	$sitemap = App::make("sitemap");

	$mytime = Carbon\Carbon::now();

	$sitemap->add(url('/'), $mytime->toDateTimeString(), '0.7', 'monthly');
	$sitemap->add(url('/contact'), $mytime->toDateTimeString(), '0.7', 'monthly');
	$sitemap->add(url('/blog'), $mytime->toDateTimeString(), '1.0', 'daily');
	$sitemap->add(url('/portfolio'), $mytime->toDateTimeString(), '1.0', 'monthly');

	foreach ($gists as $gist) {
		$sitemap->add(url('blog/' . $gist->id), $gist->updated_at, '0.9', 'monthly');
	}

	return $sitemap->render('xml');
});

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
	Route::get('/contact', [
		'as' => 'contact',
		'uses' => 'PagesController@showContact'
	]);

	Route::post('/contact-post', [
		'as' => 'contact.post',
		'uses' => 'ContactsController@postContact'
	]);
});
