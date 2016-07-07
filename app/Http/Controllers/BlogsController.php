<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogsController extends Controller
{
    protected $github;

    public function __construct()
    {
        $this->github = new \App\Libraries\Github();
    }

    public function showBlog()
	{
        $gists = $this->github->getGists();

		return view('blog')->with([
			'gists' => $gists
		]);
	}

    public function showSingleBlog($id)
	{
        $gist = $this->github->getSingleGist($id);

		return view('blog-single')->with([
			'gist' => $gist
		]);
	}
}
