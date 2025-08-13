@component('mail::message')
# Welcome to Inance Construction!

Hello {{ $user->name }},

Thank you for joining our construction community! We're excited to help you with your construction projects.

**What you can do now:**
- Request quotes for your projects
- Browse our comprehensive services
- Contact our expert team directly
- Track your project inquiries

@component('mail::button', ['url' => route('dashboard')])
Visit Your Dashboard
@endcomponent

If you have any questions, feel free to contact us anytime.

Best regards,<br>
The Inance Construction Team
@endcomponent