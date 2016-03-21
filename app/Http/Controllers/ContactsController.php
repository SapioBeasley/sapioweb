<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactsController extends Controller
{
	public function postContact(Request $request)
	{
		$this->notifyCompany($request->all());
		$this->notifyVisitor($request->all());

		return redirect()->back()->with('success_message', 'We have recived your message. We will be in contact shortly');
	}

	public function notifyCompany($visitor)
	{
		try {

			// Email Company
			\Mail::send('emails.notifyCompany', ['visitor' => $visitor], function ($message) use($visitor) {
				$message->from('andreas@sapioweb.com', 'Contact form Submission');

				$message->to('andreas@sapioweb.com', 'Sapioweb.com')->subject('Contact form Submission!');
			});
		} catch (Exception $e) {

		}

		return;
	}

	public function notifyVisitor($visitor)
	{
		try {

			// Visitor notification
			\Mail::send('emails.notifyVisitor', ['visitor' => $visitor], function ($message) use($visitor) {
				$message->from('andreas@sapioweb.com', 'Contact form Submission');

				$message->to('andreas@sapioweb.com', 'Sapioweb.com')->subject('Contact form Submission!');
			});
		} catch (Exception $e) {

		}
	}
}
