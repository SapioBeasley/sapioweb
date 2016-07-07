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
	'as' => 'home',
	'uses' => 'HomesController@showHome'
]);

Route::get('/blog/{id}', [
	'as' => 'blog.single',
	'uses' => 'BlogsController@showSingleBlog'
]);

Route::get('/blog', [
	'as' => 'blog',
	'uses' => 'BlogsController@showBlog'
]);

Route::get('/portfolio', [
	'as' => 'portfolio',
	'uses' => 'PortfoliosController@showPortfolio'
]);

Route::get('/services', [
	'as' => 'services',
	'uses' => 'ServicesController@showServices'
]);

Route::get('/services/design-development', [
	'as' => 'services.development',
	'uses' => 'ServicesController@showServicesDevelopment'
]);

Route::get('/services/hosting', [
	'as' => 'services.hosting',
	'uses' => 'ServicesController@showHosting'
]);

Route::get('/services/maintinance-support', [
	'as' => 'services.maintinance',
	'uses' => 'ServicesController@showServicesMaintinance'
]);

Route::get('/contact', [
	'as' => 'contact',
	'uses' => 'ContactsController@showContact'
]);

Route::post('/contact', [
	'as' => 'contact.post',
	'uses' => 'ContactsController@postContact'
]);

Route::post('/newsletter', [
	'as' => 'newsletter.post',
	'uses' => 'NewslettersController@postNewsletter'
]);

Route::get('/inquire', [
	'as' => 'inquire',
	'uses' => 'PagesController@showInquire'
]);

Route::post('/inquire-post', [
	'as' => 'inquire.post',
	'uses' => 'ContactsController@postInquire'
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
