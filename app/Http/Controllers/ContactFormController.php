<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    // Display Contact Form when GET request
    function showContactForm() {
        return view('contact_us');
    }

    // Display and validate Contact Form when POST request
    function contactFormValidation(Request $req) {
        $validate = $req->validate([
            'name' => 'required|min:2',
            'email' => 'required|email', 
            'message' => 'required|min:10'
        ]);
        return view('contact_us');
    }
}
