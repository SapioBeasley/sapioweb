<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServicesController extends Controller
{
    public function showServices()
	{
		return view('services');
	}

    public function showServicesDevelopment()
    {
        return view('services.development');
    }

    public function showHosting()
    {
        return view('services.hosting');
    }

    public function showServicesMaintinance()
    {
        return view('services.maintinance');
    }
}
