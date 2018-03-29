<?php

namespace SanderVanHooft\ContactForm\Http\Controllers;

use Illuminate\Routing\Controller;

class ContactFormController extends Controller
{
    public function show()
    {
        return view('contactform::show');
    }
}
