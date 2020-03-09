<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact.show');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);

        Mail::to(request('email'))
            ->send(new ContactMe('tea'));

        return redirect(route('contact.show'))
            ->with('message', 'Email sent!');
    }
}
