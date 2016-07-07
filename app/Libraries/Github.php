<?php

namespace App\Libraries;

class Github
{

    public function __construct()
    {
        # code...
    }

    public function getGists()
    {
        return $this->getGistsTransform('GET', env('GITHUB_API_URL') . '/users/sapiobeasley/gists');
    }

    public function getSingleGist($id)
    {
		return $this->getGistsTransform('GET', env('GITHUB_API_URL') . '/gists/' .  $id);
    }

    public function getGistsTransform($method, $uri)
	{
		$client = new \GuzzleHttp\Client();

		$gists = $client->request($method, $uri);

		$gists = json_decode($gists->getBody());

		return $gists;
	}
}
