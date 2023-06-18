<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class SignUpFormController extends Controller
{
    // show sign in form
    function showSignUpForm() {
        return view('accounts.signup');
    }

    function signUpFormValidation(Request $req) {
        $validate = $req->validate([
            'email' => 'required|email', 
            'password' => [
                'required', 
                Password::min(8)->mixedCase()->numbers()
            ]
            // 'confirm_password' => 'required|confirmed|min:8'
        ]);
        return view('accounts.signup');
    }
}
