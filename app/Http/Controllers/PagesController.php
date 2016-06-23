<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
   	public function showWelcome()
   	{
   		$portfolios = \App\Portfolio::take(6)->get();

		return view('home')->with([
			'portfolios' => $portfolios
		]);
	}

	public function showContact()
	{
    		return view('contact');
	}

	public function showInquire()
	{
    		return view('inquire');
	}

	public function showBlog()
	{
		$gists = $this->getGistsTransform('GET', env('GITHUB_API_URL') . '/users/sapiobeasley/gists');


		return view('blog')->with([
			'gists' => $gists
		]);
	}

	public function showSingleBlog($id)
	{
		$client = new \GuzzleHttp\Client();

		$gist = $client->request('GET', env('GITHUB_API_URL') . '/gists/' .  $id);

		$gist = json_decode($gist->getBody());

		return view('blog-single')->with([
			'gist' => $gist
		]);
	}

	public function getGistsTransform($method, $uri)
	{
		$client = new \GuzzleHttp\Client();

		// $limit = $client->request('GET', env('GITHUB_API_URL') . '/rate_limit');
		// $limit = json_decode($limit->getBody());
		// dd($limit);

		$gists = $client->request($method, $uri);

		$gists = json_decode($gists->getBody());

		// foreach ($gists as $gistKey => $gist) {
		// 	foreach($gist->files as $fileKey => $fileName)
		// 	{
		// 		$gistContent = $client->request('GET', env('GITHUB_API_URL') . '/gists/' .  $gist->id);

		// 		$gistContent = json_decode($gistContent->getBody());

		// 		$gistContent = $gistContent->files->{$fileKey}->content;

		// 		$gistSnippet = strlen($gistContent) > 50 ? substr($gistContent,0,50)."..." : $gistContent;

		// 		$gistSnippet[$gistKey] = $gistSnippet;
		// 	}
		// }

		return $gists;
	}

	public function showPortfolio ()
	{
   		$portfolios = \App\Portfolio::all();

		return view('portfolio')->with([
			'portfolios' => $portfolios
		]);
	}
}
