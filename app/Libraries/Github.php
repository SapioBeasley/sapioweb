<?php

namespace App\Libraries;

class Github
{
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

    try {
      $gists = $client->request($method, $uri);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
      return response()->json($e->getMessage(), $e->getCode());
    }

    $gists = json_decode($gists->getBody());

    return response()->json($gists, 200);
  }
}
