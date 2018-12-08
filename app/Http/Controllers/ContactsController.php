<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    //

    public function create() {
    	return view('contacts.create');
    }

    public function store(ContactRequest $request) {

        $message = Message::create($request->only('name', 'email', 'message'));

    	Mail::to(config('laracarte.admin_support_email'))->queue(new ContactMessageCreated($message));
    
    	flashy()->success('Merci de votre message.Nous vous repondrons dans les brefs délais');

    	return redirect()->route('home');
    }
}
