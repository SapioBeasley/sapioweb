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
    $blogs = \App\Blog::orderby('created_at', 'DESC')->paginate(9);

		return view('blog')->with([
			'gists' => $blogs
		]);
	}

  public function showSingleBlog($id)
	{
    $gist = $this->github->getSingleGist($id);

    if (($gist->getStatusCode() === 404) && ($gist->getStatusCode() !== null)) {
      abort(404);
    };

		return view('blog-single')->with([
			'gist' => $gist->getData()
		]);
	}
}
