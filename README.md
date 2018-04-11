# Simple Laravel Contact Form

This package brings you a basic drop-in contact form solution.

## Features
- A contact form available at url “/contact”.
- The default form is Bootstrap 3 based.
- The name, E-mail and message field are required.
- Sends a receipt confirmation with a copy of the message to the receiver address and to the submitter’s address
- You can override the default url in the config file.
- Uses the default application mail __from__ address and __from__ name for notifications, allows this to be overridden in the config file.
- You can publish the form’s views (including the mail template).

## Installation

`composer require sandervanhooft/laravel-contact-form`
`php artisan vendor:publish “SanderVanHooft\ContactForm\ServiceProvider” —tag=config`

Now set the e-mail address the contact form should send the mails to in the contact_form.php config file.

## Publishing the form’s views
`php artisan vendor:publish “SanderVanHooft\ContactForm\ServiceProvider” —tag=views`
