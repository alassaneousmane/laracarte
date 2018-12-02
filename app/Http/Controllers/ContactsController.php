<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    //

    public function create() {
    	return view('contacts.create');
    }

    public function store(ContactRequest $request) {
    	$mailable = new ContactMessageCreated($request->get('name'), $request->get('email'), $request->get('message'));
    	Mail::to(config('laracarte.admin_support_email'))->send($mailable);
    	// return new ContactMessageCreated($request->get('name'), $request->get('email'), $request->get('message'));

    	flashy()->success('Merci de votre message.Nous vous repondrons dans les brefs délais');

    	return redirect()->route('home');
    }
}
