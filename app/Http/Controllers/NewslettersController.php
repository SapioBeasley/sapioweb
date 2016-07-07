<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewslettersController extends Controller
{
    public function postNewsletter()
    {
        $newsletter = $this->dispatch(new \App\Jobs\CreateNewsLetter([
            'email' => request()->email,
            'double_opt' => 0
        ]));

        return response()->json('Confirm by checking your email', 200);
    }
}
