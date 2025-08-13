@component('mail::message')
# New Project Inquiry

**Customer Details:**
- **Name:** {{ $contactData['name'] }}
- **Email:** {{ $contactData['email'] }}
- **Project Type:** {{ $contactData['project_type'] ?? 'Not specified' }}

**Message:**
{{ $contactData['message'] }}

@component('mail::button', ['url' => 'mailto:' . $contactData['email']])
Reply to Customer
@endcomponent

Thanks,<br>
{{ config('app.name') }} Website
@endcomponent