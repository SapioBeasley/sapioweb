<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactsController extends Controller
{
	public function showContact()
	{
		return view('contact');
	}

	public function postContact(Request $request)
	{
        $notifyCompany = $this->notifyCompany($request->all());
		$notifyCompany = $this->notifyVisitor($request->all());

		return response()->json('Thank you for getting in contact. We will be in contact soon', 200);
	}

	public function notifyCompany($visitor)
	{
		// Email Company
		\Mail::queue('emails.notifyCompany', $visitor, function ($message) {
			$message->to(\Config::get('mail.from.address'))->subject('Contact form Submission!');
		});
	}

	public function notifyVisitor($visitor)
	{
		// Visitor notification
		\Mail::queue('emails.notifyVisitor', $visitor, function ($message) use ($visitor) {
			$message->to($visitor['email'])->subject('Thank you for contacting Sapioweb!');
		});
	}
}
