<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
   	public function showWelcome()
   	{
    		return view('welcome');
	}

	public function showContact()
	{
    		return view('contact');
	}

	public function showBlog()
	{
		$client = new \GuzzleHttp\Client();

		$gists = $client->request('GET', env('GITHUB_API_URL') . '/users/sapiobeasley/gists');

		$gists = json_decode($gists->getBody());

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

	public function showPortfolio ()
	{
		abort(503);
	}
}
