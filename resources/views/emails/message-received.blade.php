@component('mail::message')
# Contact request

Your message has been received!

Here's your copy.

Name: {{ $inquiry->name }}
E-mail: {{ $inquiry->email }}

Your message:
{{ $inquiry->message }}

Thanks,<br>

{{ config('app.name') }}
{{ config('app.url') }}
@endcomponent
