<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeCustomerMail;

class SendWelcomeEmail
{
    public function __construct()
    {
        //
    }

    public function handle(Registered $event): void
    {
        try {
            Mail::to($event->user->email)
                ->send(new WelcomeCustomerMail($event->user));
        } catch (\Exception $e) {
            \Log::error('Failed to send welcome email: ' . $e->getMessage());
        }
    }
}
