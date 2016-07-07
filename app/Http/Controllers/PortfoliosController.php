<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PortfoliosController extends Controller
{
    public function showPortfolio ()
	{
   		$portfolios = \App\Portfolio::all();

		return view('portfolio')->with([
			'portfolios' => $portfolios
		]);
	}
}
