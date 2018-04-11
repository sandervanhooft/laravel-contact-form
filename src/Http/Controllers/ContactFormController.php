<?php

namespace SanderVanHooft\ContactForm\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use SanderVanHooft\ContactForm\Mail\MessageReceived;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contactform::create');
    }

    public function store(Request $request)
    {
        $results = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:255',
        ]);

        $this->sendMailNotification((object) $results);

        $request->session()->flash('status', "Thank you! We'll get back to you within 24 hours.");
        return redirect()->route('contactform.create');
    }

    protected function sendMailNotification($inquiry)
    {
        Mail::to($inquiry->email)
            ->bcc(config('mail.from.address'))
            ->send(new MessageReceived($inquiry));
    }

    protected function sendMailNotification($inquiry)
    {
        Mail::to($inquiry->email)
            ->bcc(config('contactform.from.address'))
            ->send(new MessageReceived($inquiry));
    }
}
