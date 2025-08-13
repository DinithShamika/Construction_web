# Email Setup Instructions

## SMTP Configuration

Update your `.env` file with your email credentials:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_email@gmail.com
MAIL_FROM_NAME="Inance Construction"
```

## Gmail Setup Steps

1. **Enable 2-Factor Authentication** on your Gmail account
2. **Generate App Password**:
   - Go to Google Account settings
   - Security → 2-Step Verification → App passwords
   - Generate password for "Mail"
   - Use this password in `MAIL_PASSWORD`

3. **Update Email Address**:
   - Replace `your_email@gmail.com` with your actual Gmail address
   - This email will receive all contact form submissions

## Email Features

✅ **Contact Form**: Sends inquiries to page owner's email
✅ **Welcome Email**: Sent to customers upon registration
✅ **Professional Templates**: Branded email design
✅ **Error Handling**: Graceful failure without breaking site

## Test the System

1. Register a new customer → Welcome email sent
2. Submit contact form → Inquiry sent to owner
3. Check spam folder if emails don't appear in inbox

## Alternative SMTP Providers

- **Mailtrap** (testing): smtp.mailtrap.io
- **SendGrid**: smtp.sendgrid.net
- **Mailgun**: smtp.mailgun.org
- **Outlook**: smtp-mail.outlook.com