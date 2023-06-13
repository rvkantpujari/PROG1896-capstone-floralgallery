<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class SignInFormController extends Controller
{
    // show sign in form
    function showSignInForm() {
        return view('accounts.signin');
    }

    function signInFormValidation(Request $req) {
        $validate = $req->validate([
            'email' => 'required|email', 
            'password' => ['required', 
            Password::min(8)->mixedCase()->numbers()->symbols()]
        ]);
        return view('accounts.signin');
    }
}
