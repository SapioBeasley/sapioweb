<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomesController extends Controller
{
    public function __construct()
    {
        $this->github = new \App\Libraries\Github();
    }

    public function showHome()
   	{
        $testimonials = \App\Testimonial::take(3)->get();

        $portfolios = \App\Portfolio::take(6)->get();

   		$allGists = $this->github->getGists();

        for ($i=0; $i < 3; $i++) {
            $gists[$i] = $allGists[$i];
        }

		return view('home')->with([
            'gists' => $gists,
			'portfolios' => $portfolios,
            'testimonials' => $testimonials
		]);
	}
}
