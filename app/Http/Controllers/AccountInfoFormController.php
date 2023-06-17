<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class AccountInfoFormController extends Controller
{
    // Account Info Validation
    function accountInfoFormValidation(Request $req) {
        $validate = $req->validate([
            'email' => 'required|email',
            'password' => [
                'required', 
                Password::min(8)->mixedCase()->numbers()
            ],
            'confirm_password' => 'required|confirmed|min:8'
        ]);
        return view('profile');
    }
}
