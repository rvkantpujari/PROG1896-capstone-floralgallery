<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    function showContactForm() {
        return view('contact_us');
    }

    // validate contact form
    function contactFormValidation(Request $req) {
        $validate = $req->validate([
            'name' => 'required|min:2',
            'email' => 'required|email', 
            'message' => 'required'
        ]);
        return view('contact_us');
    }
}
