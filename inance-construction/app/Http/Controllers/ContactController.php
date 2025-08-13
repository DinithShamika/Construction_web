<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'project_type' => 'nullable|string',
            'message' => 'required|string|max:2000',
        ]);

        // Store in database
        \App\Models\ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'project_type' => $request->project_type,
            'message' => $request->message,
            'user_id' => auth()->id(), // Link to user if logged in
        ]);

        // Send email notification to page owner
        try {
            Mail::to(config('mail.from.address'))
                ->send(new ContactFormMail($request->all()));
        } catch (\Exception $e) {
            Log::error('Failed to send contact email: ' . $e->getMessage());
        }

        return back()->with('success', 'Thank you for your inquiry! We will get back to you within 24 hours.');
    }
}
