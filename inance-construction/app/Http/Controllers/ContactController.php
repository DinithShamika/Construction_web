<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send email or store in DB
        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('yourcompany@example.com')
                    ->subject('New Contact from ' . $request->name)
                    ->replyTo($request->email);
        });

        return back()->with('success', 'Thank you for contacting us!');
    }
}
