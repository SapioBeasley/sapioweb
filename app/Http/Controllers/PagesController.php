<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
   	public function showWelcome() {
    		return view('welcome');
	}

	public function showContact() {
    		return view('contact');
	}

	public function showBlog() {
		abort(503);
	}

	public function showPortfolio () {
		abort(503);
	}
}
